(function () {
  function ready(fn) {
    if (document.readyState !== 'loading') {
      fn();
    } else {
      document.addEventListener('DOMContentLoaded', fn);
    }
  }

  ready(function () {
    const navToggle = document.querySelector('[data-nav-toggle]');
    const navMenu = document.querySelector('[data-nav-menu]');
    if (navToggle && navMenu) {
      navToggle.addEventListener('click', function () {
        const expanded = navToggle.getAttribute('aria-expanded') === 'true';
        navToggle.setAttribute('aria-expanded', String(!expanded));
        navMenu.classList.toggle('is-open');
      });
    }

    const yearTarget = document.querySelector('[data-current-year]');
    if (yearTarget) {
      yearTarget.textContent = new Date().getFullYear();
    }

    const socialModalTrigger = document.querySelector('[data-social-modal-open]');
    const socialModal = document.querySelector('[data-social-modal]');
    const socialClose = document.querySelector('[data-social-close]');

    function closeSocialModal() {
      if (socialModal) {
        socialModal.removeAttribute('open');
      }
    }

    if (socialModalTrigger && socialModal) {
      socialModalTrigger.addEventListener('click', function () {
        socialModal.setAttribute('open', 'true');
        const firstLink = socialModal.querySelector('a, button');
        if (firstLink) {
          firstLink.focus();
        }
      });
    }

    if (socialClose) {
      socialClose.addEventListener('click', closeSocialModal);
    }

    document.addEventListener('keydown', function (event) {
      if (event.key === 'Escape') {
        closeSocialModal();
      }
    });
  });
})();
