(function () {
  const slider = document.querySelector('[data-slider]');
  if (!slider) return;

  const track = slider.querySelector('[data-slider-track]');
  const slides = Array.from(slider.querySelectorAll('[data-slide]'));
  const prevButton = slider.querySelector('[data-slider-prev]');
  const nextButton = slider.querySelector('[data-slider-next]');
  const dotsContainer = slider.querySelector('[data-slider-dots]');
  const dotLabel = slider.dataset.dotLabel || '';

  let current = 0;
  let intervalId;

  const createDots = () => {
    slides.forEach((_, index) => {
      const dot = document.createElement('button');
      dot.type = 'button';
      dot.className = 'slider-dot';
      const aria = dotLabel ? `${dotLabel} ${index + 1}` : `${index + 1}`;
      dot.setAttribute('aria-label', aria);
      dot.addEventListener('click', () => goToSlide(index));
      dotsContainer.appendChild(dot);
    });
  };

  const updateDots = () => {
    const dots = dotsContainer.querySelectorAll('.slider-dot');
    dots.forEach((dot, index) => {
      dot.classList.toggle('active', index === current);
    });
  };

  const goToSlide = (index) => {
    current = (index + slides.length) % slides.length;
    track.style.transform = `translateX(-${current * 100}%)`;
    updateDots();
    resetInterval();
  };

  const nextSlide = () => goToSlide(current + 1);
  const prevSlide = () => goToSlide(current - 1);

  const startInterval = () => {
    intervalId = window.setInterval(nextSlide, 6000);
  };

  const resetInterval = () => {
    if (intervalId) {
      window.clearInterval(intervalId);
    }
    startInterval();
  };

  const init = () => {
    createDots();
    updateDots();
    startInterval();

    if (prevButton) prevButton.addEventListener('click', prevSlide);
    if (nextButton) nextButton.addEventListener('click', nextSlide);

    slider.addEventListener('mouseenter', () => intervalId && clearInterval(intervalId));
    slider.addEventListener('mouseleave', resetInterval);

    window.addEventListener('visibilitychange', () => {
      if (document.hidden) {
        intervalId && clearInterval(intervalId);
      } else {
        resetInterval();
      }
    });
  };

  init();
})();
