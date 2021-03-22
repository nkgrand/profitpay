(() => {
  const mainBlock = document.querySelector(".section-team__team-list");
  const person1 = document.querySelector("#person1");
  const person1Detailed = document.querySelector(".person1_detailed");
  const person2 = document.querySelector("#person2");
  const person2Detailed = document.querySelector(".person2_detailed");
  const person3 = document.querySelector("#person3");
  const person3Detailed = document.querySelector(".person3_detailed");
  const person4 = document.querySelector("#person4");
  const person4Detailed = document.querySelector(".person4_detailed");
  const person5 = document.querySelector("#person5");
  const person5Detailed = document.querySelector(".person5_detailed");
  const person6 = document.querySelector("#person6");
  const person6Detailed = document.querySelector(".person6_detailed");

  person1.addEventListener("click", function () {
    mainBlock.style.visibility = "hidden";
    person1Detailed.style.visibility = "visible";
  });

  person1Detailed.addEventListener("click", function () {
    person1Detailed.style.visibility = "hidden";
    mainBlock.style.visibility = "visible";
  });

  person2.addEventListener("click", function () {
    mainBlock.style.visibility = "hidden";
    person2Detailed.style.visibility = "visible";
  });

  person2Detailed.addEventListener("click", function () {
    person2Detailed.style.visibility = "hidden";
    mainBlock.style.visibility = "visible";
  });

  person3.addEventListener("click", function () {
    mainBlock.style.visibility = "hidden";
    person3Detailed.style.visibility = "visible";
  });

  person3Detailed.addEventListener("click", function () {
    person3Detailed.style.visibility = "hidden";
    mainBlock.style.visibility = "visible";
  });

  person4.addEventListener("click", function () {
    mainBlock.style.visibility = "hidden";
    person4Detailed.style.visibility = "visible";
  });

  person4Detailed.addEventListener("click", function () {
    person4Detailed.style.visibility = "hidden";
    mainBlock.style.visibility = "visible";
  });

  person5.addEventListener("click", function () {
    mainBlock.style.visibility = "hidden";
    person5Detailed.style.visibility = "visible";
  });

  person5Detailed.addEventListener("click", function () {
    person5Detailed.style.visibility = "hidden";
    mainBlock.style.visibility = "visible";
  });

  person6.addEventListener("click", function () {
    mainBlock.style.visibility = "hidden";
    person6Detailed.style.visibility = "visible";
  });

  person6Detailed.addEventListener("click", function () {
    person6Detailed.style.visibility = "hidden";
    mainBlock.style.visibility = "visible";
  });
})();
