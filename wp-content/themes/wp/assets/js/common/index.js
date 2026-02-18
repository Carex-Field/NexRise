document.addEventListener("DOMContentLoaded", function () {
  //カウントアップ
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
