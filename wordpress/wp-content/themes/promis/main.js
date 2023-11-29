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

/*----------------------------------------------------- Navbar Ham ------------------------------------------------------*/


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
