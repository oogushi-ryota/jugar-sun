// ▼アコーディオン
export function initAccordion() {
  const animTiming = {
    duration: 300,
    easing: "ease-in-out",
  };

  const closingAnimation = (answer) => [
    { height: answer.offsetHeight + "px", opacity: 1 },
    { height: 0, opacity: 0 },
  ];

  const openingAnimation = (answer) => [
    { height: 0, opacity: 0 },
    { height: answer.offsetHeight + "px", opacity: 1 },
  ];

  document.querySelectorAll(".js-accordion").forEach((el) => {
    const summary = el.querySelector(".js-summary");
    const answer = el.querySelector(".js-accordion-details");

    summary.addEventListener("click", (e) => {
      e.preventDefault();

      if (el.hasAttribute("open")) {
        const closingAnim = answer.animate(closingAnimation(answer), animTiming);
        closingAnim.onfinish = () => {
          el.removeAttribute("open");
          el.classList.remove("is-open");
        };
      } else {
        el.setAttribute("open", "true");
        el.classList.add("is-open");
        answer.animate(openingAnimation(answer), animTiming);
      }
    });
  });
}
// ▲アコーディオン