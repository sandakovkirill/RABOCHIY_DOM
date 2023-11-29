
const accordionTitles = document.querySelectorAll(".accordion-title");

accordionTitles.forEach((accordionTitle) => {
  accordionTitle.addEventListener("click", () => {
    const height = accordionTitle.nextElementSibling.scrollHeight;
    console.log(height);
    accordionTitle.classList.toggle("active-header");
    if (accordionTitle.classList.contains("active-header")) {
     accordionTitle.nextElementSibling.style.maxHeight = `${height}px`;
    } else {
    accordionTitle.nextElementSibling.style.maxHeight = "0px";
    }


  });
});