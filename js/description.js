const card = document.querySelector(".card");
const description_content = document.querySelector(".description-content");
const description = document.querySelector(".description");

card.addEventListener("click", () => {
   description_content.classList.add("open");
   description.classList.add("close");
});

description_content.addEventListener("click", () => {
   description_content.classList.remove("open");
   description.classList.remove("close");
});