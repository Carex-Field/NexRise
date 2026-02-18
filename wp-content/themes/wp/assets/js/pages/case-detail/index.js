document.addEventListener("DOMContentLoaded", function () {
  const numberElement = document.querySelector(
    ".p-case-detail__result__number",
  );
  if (!numberElement) return;

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
      numberElement.textContent = target.toLocaleString();
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
