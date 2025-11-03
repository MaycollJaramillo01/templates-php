(function () {
  const supportsObserver = 'IntersectionObserver' in window;
  const prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  function applyBaseClass(el, mode) {
    const map = {
      'from-bottom': 'a-from-bottom',
      'from-left': 'a-from-left',
      'zoom': 'a-zoom'
    };
    const base = map[mode] || map['from-bottom'];
    el.classList.add(base);
  }

  function initAnimation() {
    const animated = document.querySelectorAll('[data-anim]');
    if (!animated.length) return;

    animated.forEach((el) => {
      applyBaseClass(el, el.getAttribute('data-anim'));
      const delay = parseInt(el.getAttribute('data-anim-delay') || '0', 10);
      if (delay) {
        el.style.transitionDelay = `${delay}ms`;
      }
    });

    if (!supportsObserver || prefersReduced) {
      animated.forEach((el) => el.classList.add('is-in'));
      return;
    }

    const observer = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-in');
          observer.unobserve(entry.target);
        }
      });
    }, {
      threshold: 0.15
    });

    animated.forEach((el) => observer.observe(el));
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initAnimation);
  } else {
    initAnimation();
  }
})();
