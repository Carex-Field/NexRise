document.addEventListener("DOMContentLoaded", function () {
  // Header
  const header = document.querySelector(".l-header");
  let lastScroll = 0;
  const threshold = 80;
  window.addEventListener("scroll", function () {
    const currentScroll = window.pageYOffset;
    if (currentScroll > lastScroll && currentScroll > threshold) {
      header.classList.remove("is-visible");
      header.classList.add("is-hidden");
    } else if (currentScroll < lastScroll) {
      header.classList.remove("is-hidden");
      header.classList.add("is-visible");
    }
    lastScroll = currentScroll;
  });

  // SP-Menu
  const spMenu = document.getElementById("sp-menu");
  const nav = document.querySelector(".l-header__nav");
  const body = document.body;
  function toggleMenu() {
    spMenu.classList.toggle("is-open");
    nav.classList.toggle("is-open");
    body.classList.toggle("is-fixed");
  }
  spMenu.addEventListener("click", toggleMenu);

  // カウントアップ
  const numbers = document.querySelectorAll(".c-card2__result__number");
  if (!numbers.length) return;

  numbers.forEach((numberElement) => {
    const target = parseInt(numberElement.dataset.number, 10);
    let current = 0;
    const duration = 1500;
    const stepTime = 16;
    const totalSteps = duration / stepTime;
    const increment = target / totalSteps;

    function updateCounter() {
      current += increment;
      if (current < target) {
        numberElement.textContent = Math.floor(current);
        requestAnimationFrame(updateCounter);
      } else {
        numberElement.textContent = target;
      }
    }

    const observer = new IntersectionObserver(
      (entries) => {
        if (entries[0].isIntersecting) {
          updateCounter();
          observer.disconnect();
        }
      },
      { threshold: 0.5 },
    );
    observer.observe(numberElement);
  });
});
