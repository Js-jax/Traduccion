const accordianItemHeaders = document.querySelectorAll(
  ".auto-group-nug3-Br7"
);

accordianItemHeaders.forEach(accordianItemHeader => {
  accordianItemHeader.addEventListener("click", () => {
    const current = document.querySelector(".auto-group-nug3-Br7.active");

    if (current && current !== accordianItemHeader) {
      current.classList.toggle("active");
      current.nextElementSibling.style.maxHeight = 0;
    }
    accordianItemHeader.classList.toggle("active");

    const accordianItemBody = accordianItemHeader.nextElementSibling;

    if (accordianItemHeader.classList.contains("active")) {
      accordianItemBody.style.maxHeight = accordianItemBody.scrollHeight + "px";
    } else {
      accordianItemBody.style.maxHeight = 0;
    }
  });
});
