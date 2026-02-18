document.addEventListener("DOMContentLoaded", function () {
  const btns = document.querySelectorAll(".p-service__filter__btn");
  const cards = document.querySelectorAll(".p-service__card");

  btns.forEach((btn) => {
    btn.addEventListener("click", function () {
      const filter = this.dataset.filter;
      btns.forEach((btn) => btn.classList.remove("is-active"));
      this.classList.add("is-active");

      cards.forEach((card) => {
        card.classList.remove("is-fade-in");
        card.classList.add("is-fade-out");
      });
      setTimeout(() => {
        cards.forEach((card) => {
          const categories = card.dataset.category.split(" ");
          const shouldShow = filter === "all" || categories.includes(filter);
          if (shouldShow) {
            card.classList.remove("is-hidden");
          } else {
            card.classList.add("is-hidden");
          }
        });

        requestAnimationFrame(() => {
          cards.forEach((card) => {
            if (!card.classList.contains("is-hidden")) {
              card.classList.remove("is-fade-out");
              card.classList.add("is-fade-in");
            }
          });
        });
      }, 300);
    });
  });
});
