function goHome() {
  window.location.href = "/Jigyansa/index.php"; // Update path if homepage differs
}

function toggleMenu() {
  const nav = document.querySelector('.nav-links');
  nav.classList.toggle('active');
}

// Fix mobile dropdown tap behavior
document.addEventListener('DOMContentLoaded', () => {
  const dropdowns = document.querySelectorAll('.dropdown');

  dropdowns.forEach(dropdown => {
    const link = dropdown.querySelector('a');
    const submenu = dropdown.querySelector('.dropdown-menu');

    let isMobile = window.innerWidth <= 768;
    let clickedOnce = false;

    link.addEventListener('click', (e) => {
      if (isMobile) {
        if (!clickedOnce) {
          e.preventDefault(); // Stop from navigating
          submenu.style.display = 'block';
          clickedOnce = true;
        } else {
          clickedOnce = false; // Second click proceeds
        }
      }
    });

    // Reset on window resize
    window.addEventListener('resize', () => {
      isMobile = window.innerWidth <= 768;
      submenu.style.display = '';
      clickedOnce = false;
    });
  });
});
