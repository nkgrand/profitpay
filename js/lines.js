(() => {
  window.addEventListener("mouseover", function () {
    const windowInnerWidth = window.innerWidth;
    const block = document.querySelector(".section-contacts__contacts");
    const girl = document.querySelector("#girl");
    const boy = document.querySelector("#boy");

    if (windowInnerWidth > 768) {
      const windowInnerWidth = window.innerWidth;

      girl.addEventListener("mouseover", mouseOverGirl);
      girl.addEventListener("mouseout", mouseOutGirl);

      boy.addEventListener("mouseover", mouseOverBoy);
      boy.addEventListener("mouseout", mouseOutBoy);

      function mouseOverGirl() {
        block.style.backgroundImage = "url('/image/contact-lines-left.svg')";
      }

      function mouseOutGirl() {
        block.style.backgroundImage = "url('/image/contact-lines.svg')";
      }

      function mouseOverBoy() {
        block.style.backgroundImage = "url('/image/contact-lines-right.svg')";
      }

      function mouseOutBoy() {
        block.style.backgroundImage = "url('/image/contact-lines.svg')";
      }
    }
    if (windowInnerWidth < 768) {
      block.style.backgroundImage = "";
    }
  });
})();
