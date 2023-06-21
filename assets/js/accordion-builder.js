let AccContainer = document.querySelectorAll(".accordion-container");

AccContainer.forEach((AccordionHtml) => {
  let AccordionButton = AccordionHtml.querySelectorAll(".icon-wrapper");
  let AccordionParagraph = AccordionHtml.querySelectorAll(".para-container");
  let AccText = AccordionHtml.querySelectorAll(".acc-text");
  for (let i = 0; i < AccText.length; i++) {
  AccText[i].innerHTML='open';
  }
  AccordionButton.forEach((button, buttonIndex) => {
    button.addEventListener("click", (e) => {
      e.stopPropagation();
      for (let i = 0; i < AccordionParagraph.length; i++) {
        if (i !== buttonIndex) {
          AccordionParagraph[i].classList.remove("active");
          AccText[i].innerHTML = "open";
        }
      }

      if (AccordionParagraph[buttonIndex].classList.contains("active")) {
        AccordionParagraph[buttonIndex].classList.remove("active");
        AccText[buttonIndex].innerHTML = "open";
      } else {
        AccordionParagraph[buttonIndex].classList.add("active");
        AccText[buttonIndex].innerHTML = "close";
      }
    });
  });
});
