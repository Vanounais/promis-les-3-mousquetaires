var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 60,
    pagination: {
      el: ".swiper-pagination",
      clickable: true
    }, 
     navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
    breakpoints: {
      768: {
        slidesPerView: 2,
        spaceBetween: 10
      },
      1024: {
        slidesPerView: 3,
        spaceBetween: 20
      }
    }
  });
  
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

