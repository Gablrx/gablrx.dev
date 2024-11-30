// HEADER MENU TOGGLE
const menuToggle = document.getElementById('menu-toggle');
const mobileMenu = document.getElementById('mobile-menu');

// Ouvrir/Fermer le menu mobile
menuToggle.addEventListener('click', function (event) {
    mobileMenu.classList.toggle('hidden');
    event.stopPropagation(); // Empêche la propagation du clic vers le document
});

// Fermer le menu lorsque l'utilisateur clique sur un lien
document.querySelectorAll('#mobile-menu a').forEach(function (menuLink) {
    menuLink.addEventListener('click', function () {
        mobileMenu.classList.add('hidden');
    });
});

// Fermer le menu lorsque l'utilisateur clique en dehors
document.addEventListener('click', function (event) {
    if (!mobileMenu.classList.contains('hidden')) {
        const isClickInsideMenu = mobileMenu.contains(event.target);
        const isClickOnToggle = menuToggle.contains(event.target);

        if (!isClickInsideMenu && !isClickOnToggle) {
            mobileMenu.classList.add('hidden');
        }
    }
});


// Charger Particles.js
particlesJS.load('particles-js', '/gablrx.dev/wp-content/themes/gablrx-starter/assets/js/particles.json', function () {

});

