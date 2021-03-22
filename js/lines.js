(() => {
  const girl = document.querySelector("#girl");
  const boy = document.querySelector("#boy");

  girl.addEventListener("mouseover", mouseOverGirl);
  boy.addEventListener("mouseover", mouseOverBoy);

  function mouseOverGirl() {
    console.log("mouse on girl");
  }

  function mouseOverBoy() {
    console.log("mouse on boy");
  }
})();
