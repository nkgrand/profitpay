(() => {
  // const block = document.querySelector(".section-contacts__contacts");
  // const girl = document.querySelector("#girl");
  // const boy = document.querySelector("#boy");

  // const windowInnerWidth = window.innerWidth;
  // console.log(windowInnerWidth);

  // girl.addEventListener("mouseover", mouseOverGirl);
  // girl.addEventListener("mouseout", mouseOutGirl);

  // boy.addEventListener("mouseover", mouseOverBoy);
  // boy.addEventListener("mouseout", mouseOutBoy);

  // function mouseOverGirl() {
  //   if (windowInnerWidth > "955") {
  //     block.style.backgroundImage = "url('/image/contact-lines-left.svg')";
  //   }
  // }

  // function mouseOutGirl() {
  //   if (windowInnerWidth > "955") {
  //     block.style.backgroundImage = "url('/image/contact-lines.svg')";
  //   }
  // }

  // function mouseOverBoy() {
  //   if (windowInnerWidth > "955") {
  //     block.style.backgroundImage = "url('/image/contact-lines-right.svg')";
  //   }
  // }

  // function mouseOutBoy() {
  //   if (windowInnerWidth > "955") {
  //     block.style.backgroundImage = "url('/image/contact-lines.svg')";
  //   }
  // }

  window.addEventListener("mouseover", function () {
    const windowInnerWidth = window.innerWidth;
    const block = document.querySelector(".section-contacts__contacts");
    const girl = document.querySelector("#girl");
    const boy = document.querySelector("#boy");
    console.log(windowInnerWidth);

    if (windowInnerWidth > 768) {
      const windowInnerWidth = window.innerWidth;
      console.log(windowInnerWidth);

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
      console.log("хуй");
      block.style.backgroundImage = "";
    }
  });
})();
