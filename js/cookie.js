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

  setTimeout(displayModal, 30000);
  setTimeout(displayCockies, 1000);

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
    cookieContainer.style.display = "none";
  });
})();
