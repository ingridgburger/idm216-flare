document.addEventListener('DOMContentLoaded', () => { 

  const navToggle = document.getElementById('nav-toggle');
  const navLinks = document.querySelectorAll('nav .nav-menu a');
  if (!navToggle) return;

  function closeMenu(e) {
    if (navToggle.checked) {
      navToggle.checked = false;
    }
  }

  navLinks.forEach(link => {
    link.addEventListener('click', closeMenu);
  });
});
