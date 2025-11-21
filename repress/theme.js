(function () {
  const toggle = document.querySelector('[data-menu-toggle]');
  const drawer = document.querySelector('[data-menu-drawer]');
  const backdrop = document.querySelector('[data-menu-backdrop]');

  if (!toggle || !drawer || !backdrop) return;

  const closeMenu = () => {
    drawer.classList.remove('is-open');
    backdrop.classList.remove('is-visible');
    document.body.classList.remove('drawer-open');
    toggle.setAttribute('aria-expanded', 'false');
  };

  const openMenu = () => {
    drawer.classList.add('is-open');
    backdrop.classList.add('is-visible');
    document.body.classList.add('drawer-open');
    toggle.setAttribute('aria-expanded', 'true');
  };

  toggle.addEventListener('click', () => {
    const isOpen = drawer.classList.contains('is-open');
    if (isOpen) {
      closeMenu();
    } else {
      openMenu();
    }
  });

  backdrop.addEventListener('click', closeMenu);

  document.addEventListener('keyup', (event) => {
    if (event.key === 'Escape' && drawer.classList.contains('is-open')) {
      closeMenu();
    }
  });
})();
