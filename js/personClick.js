(() => {
  const person = document.querySelectorAll(".section-team__item");
  const personDetailed = document.querySelectorAll(".person_detailed");
  const mainBlock = document.querySelector(".section-team__team-list");

  arrOfPerson = Array.from(person);
  arrOfDetailedPersons = Array.from(personDetailed);

  arrOfPerson.forEach((element, index) => {
    element.addEventListener("click", function () {
      mainBlock.style.visibility = "hidden";
      arrOfDetailedPersons[index].style.visibility = "visible";

      arrOfDetailedPersons[index].addEventListener("click", function () {
        arrOfDetailedPersons[index].style.visibility = "hidden";
        mainBlock.style.visibility = "visible";
      });
    });
  });
})();
