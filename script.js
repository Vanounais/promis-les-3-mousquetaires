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