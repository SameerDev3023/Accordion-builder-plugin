let AccContainer = document.querySelectorAll(".accordion-container");
  AccContainer.forEach((AccordionHtml, index) => {
  let AccordionButton = AccordionHtml.querySelectorAll(".icon-wrapper");
  let AccordionParagraph = AccordionHtml.querySelectorAll(".para-container");
  for (let j = 0; j < AccordionButton.length; j++) {
    AccordionButton[j].addEventListener("click", (e) => {
      for (let i = 0; i < AccordionParagraph.length; i++) {
        if (i !== j) {
          AccordionParagraph[i].classList.remove("active");
        }
      }
      if (AccordionParagraph[j].classList.contains("active")) {
        AccordionParagraph[j].classList.remove("active");
      } else {
        AccordionParagraph[j].classList.add("active");
      }
    });
  }
});

