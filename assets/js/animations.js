(function () {
  const animatedElements = document.querySelectorAll('[data-animate]');
  if (!('IntersectionObserver' in window) || animatedElements.length === 0) {
    animatedElements.forEach((el) => el.classList.add('animate-visible'));
    return;
  }

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add('animate-visible');
          observer.unobserve(entry.target);
        }
      });
    },
    {
      threshold: 0.25,
      rootMargin: '0px 0px -40px 0px',
    }
  );

  animatedElements.forEach((element, index) => {
    element.style.transitionDelay = `${index * 60}ms`;
    observer.observe(element);
  });
})();
