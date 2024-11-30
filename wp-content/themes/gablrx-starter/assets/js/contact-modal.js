/* contact-modal.js */

// Une fois que le DOM est entièrement chargé :
document.addEventListener('DOMContentLoaded', function () {

    const openModalButtons = document.querySelectorAll('.open-contact-modal'); // Tous les elmts qui ouvrent la modale de contact
    const contactModal = document.getElementById('contactModal'); // La fenêtre de la modale

    openModalButtons.forEach(button => { // Pour chaque bouton 
        button.addEventListener('click', function () {

            contactModal.style.display = 'block'; // Afficher la modale de contact.
        });
    });

    // Si l'utilisateur clique en dehors du form, fermer la modale
    window.onclick = function (event) {
        if (event.target === contactModal) {
            contactModal.style.display = 'none';
        }
    };
});