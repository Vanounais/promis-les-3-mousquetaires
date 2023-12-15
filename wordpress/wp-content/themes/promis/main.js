/* Wow, tellement un beau spot pour écrire du JS */
let xButton = document.querySelector(".bi-x-lg")
let none = document.querySelector('.banner');

xButton.addEventListener("click", function() {
  none.classList.toggle('none');
  localStorage.setItem("etatBanniere","true");
});

if(localStorage.getItem("etatBanniere") != null){
  console.log("AAAAAAAAAAAARGH");
  none.classList.add("none");
}


/*----------------------------------------------------- Swiper ------------------------------------------------------*/
if(document.getElementById("hero-swiper") != undefined){
var swiper = new Swiper(".mySwiper", {
  loop: true,
  pagination: {
      el: ".swiper-pagination",
      clickable: true
  },
  navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
  },
  autoplay: {
      delay: 2500,
      disableOnInteraction: false,
  },
});
};

/*----------------------------------------------------- Navbar Ham ------------------------------------------------------*/

if(document.querySelector(".navbar-toggler") != undefined){

let hambutton = document.querySelector(".navbar-toggler");

let bar1 = document.querySelector(".bar1");

let bar2 = document.querySelector(".bar2");

let bar3 = document.querySelector(".bar3");


let bar1anim = gsap.to(".bar1", {
duration: 0.1,
paused: true,
y: -1,
});

let bar3anim = gsap.to(".bar3", {
duration: 0.1,
paused: true,
y: 27,
});

hambutton.addEventListener("mouseenter", () => bar1anim.play());
hambutton.addEventListener("mouseleave", () => bar1anim.reverse()); 

hambutton.addEventListener("mouseenter", () => bar3anim.play());
hambutton.addEventListener("mouseleave", () => bar3anim.reverse()); 
};

var pigTimeline = gsap.timeline({repeat: -1, repeatDelay: 0.1,});

pigTimeline.fromTo(
".coin",
{
  opacity: 0,
},
{
  duration: 1,
  opacity: 1,
}
).fromTo(
  ".coin",
  {
    y: -100,
  },
  {
    ease: "sine.in",
    duration: 0.5,
    y: 100,
  }).to(".piggy",
  {
    duration: 0.1,
    y: 5,
  }).to(".piggy",
  {
    duration: 0.1,
    y: 0,
  });

/*----------------------------------------------------- Hub de Nouvelles ---------------------------------------------*/





/*----------------------------------------------------- afficher plus---------------------------------------------*/

const typeSelection = document.querySelector(".dateFilter");
let body = document.querySelector("body");
let all = document.querySelector(".newsHub-Picture-Container");
let seeMore = document.querySelector("#voirPlus");
let defaultMax = 6;

if(seeMore){seeMore.addEventListener("click", addNews); };

function addNews(){
  defaultMax += 3;
  all.innerHTML = "";
  let value1 = typeSelection.value;
  fetch(`/promis-les-3-mousquetaires/wordpress/wp-json/wp/v2/nouvelle?orderby=date&order=${value1}&_embed&per_page=${defaultMax}`)
  .then(response => response.json())
  .then((data1) =>{
    console.log(defaultMax);
  if (defaultMax > data1.lenght){
    defaultMax = data1.lenght
  }
  for (let i=0; i<defaultMax; i++){
    let url1 = data1[i].link;
    let thumbnail1 = data1[i]._embedded['wp:featuredmedia'][0].source_url;
    let title1 = data1[i].title.rendered;
    console.log(title1);
    let date1 = data1[i].acf.date;

    all.innerHTML += `<div class="center-card">
    <a class="news-card" href="${url1}">
   <img src="${thumbnail1}" class="newsHub-Picture">
  <div class="newsHub-Text">
      <h3 class="newsHub-Text">${title1}</h3>
      <p class="newsHub-Text">${date1}</p>
    </div>
  </a>
</div>`
  }
})
};

/*----------------------------------------------------- filtrer ---------------------------------------------*/

if(typeSelection){typeSelection.addEventListener("change", Filter);};

function Filter(element){
  all.innerHTML = "";

  let filterElement = element.target;
  let value = filterElement.value;
  console.log(filterElement);
  console.log(value);
  console.log("test");

  fetch(`/promis-les-3-mousquetaires/wordpress/wp-json/wp/v2/nouvelle?orderby=date&order=${value}&_embed&per_page=${defaultMax}`)
  .then(response => response.json())
  .then((data) => { console.log(data[0].link);
    console.log(defaultMax);
    for (let i=0; i<defaultMax; i++){
      let url = data[i].link;
      let thumbnail = data[i]._embedded['wp:featuredmedia'][0].source_url;
      let title = data[i].title.rendered;
      let date = data[i].acf.date;

      all.innerHTML += `<div class="center-card">
      <a class="news-card" href="${url}">
     <img src="${thumbnail}" class="newsHub-Picture">
    <div class="newsHub-Text">
        <h3 class="newsHub-Text">${title}</h3>
        <p class="newsHub-Text">${date}</p>
      </div>
    </a>
  </div>`
    }
  });
}

/*------------------Animation Histoire---------------------*/



var birbanim = gsap.timeline({repeat: -1, repeatDelay: 0.1,});



birbanim.fromTo(
  ".birb",
  {
    x: -100,
    y: 0,
    rotationX: 0,
  },
  {
    duration: 3,
    x: 3000,
    y: 200,
    rotationX: 0,
  }).to(".birb", 
  {
    rotationX: 180,
    duration: 0.1,
    rotation: 140,
  }).to(".birb", 
  {
    x: -1000,
    y: 400,
    duration: 3,
  });
  