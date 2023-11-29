
const phonePopup = document.querySelectorAll(".accordion-title");

phonePopup.forEach((phonePopup) => {
  phonePopup.addEventListener("click", () => {
    const height = phonePopup.nextElementSibling.scrollHeight;
    console.log(height);
    phonePopup.classList.toggle("active-header");
    if (phonePopup.classList.contains("active-header")) {
     phonePopup.nextElementSibling.style.maxHeight = `${height}px`;
    } else {
    phonePopup.nextElementSibling.style.maxHeight = "0px";
    }


  });
});
