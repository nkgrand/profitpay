$(".section-work__benefit-list").slick({
  infinite: true,
  speed: 300,
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 3000,
  nextArrow: '<img src="/image/arrow-right.svg" class="section-work__right-arrow" alt="">',
  prevArrow: '<img src="/image/arrow-left.svg" class="section-work__left-arrow" alt="">',
  responsive: [
    {
      breakpoint: 320,
      settings: {
        slidesToShow: 1,
        nextArrow: false,
        prevArrow: false,
        dots: true
      }
    }
  ]
});

$(".section-review__reviews-list").slick({
  infinite: true,
  speed: 300,
  slidesToShow: 2,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 3000,
  nextArrow:
    '<img src="/image/arrow-white-right.svg" class="section-review__vector-right" alt="">',
  prevArrow:
    '<img src="/image/arrow-white-left.svg" class="section-review__vector-left" alt="">',
    responsive: [
      {
        breakpoint: 340,
        settings: {
          slidesToShow: 1,
          nextArrow: false,
          prevArrow: false,
          dots: true
        }
      }
    ]
});

$(".section-team__team-list").slick({
  infinite: true,
  speed: 300,
  slidesToShow: 3,
  slidesToScroll: 1,
  nextArrow:
    '<img src="/image/arrow-white-right.svg" class="section-team__vector-right" alt="">',
  prevArrow:
    '<img src="/image/arrow-white-left.svg" class="section-team__vector-left" alt="">',
});

(() => {
  const body = document.querySelector(".body");
  const modalContainer = document.querySelector(".modal-form");
  const modalOverlay = document.querySelector(".overlay");
  const cookieContainer = document.querySelector(".section-cookie");
  const modalBtnClose = document.querySelector(".btnClose");
  const cookiesBtnClose = document.querySelector(".cookiesBtnClose");

  function displayModal() {
    modalOverlay.style.display = "block";
    modalContainer.style.display = "block";
    body.classList.add("modal-open");
  }

  function displayCockies() {
    cookieContainer.style.display = "flex";
  }

  setTimeout(displayModal, 1000);
  setTimeout(displayCockies, 3000);

  modalBtnClose.addEventListener("click", function () {
    modalContainer.style.display = "none";
    modalOverlay.style.display = "none";
    body.classList.remove("modal-open");
  });

  modalOverlay.addEventListener("click", function () {
    modalContainer.style.display = "none";
    modalOverlay.style.display = "none";
    body.classList.remove("modal-open");
  });

  cookiesBtnClose.addEventListener("click", function () {
    cookieContainer.style.opacity = "0";
    cookieContainer.style.transition = "opacity 0.6s";
  });
})();
