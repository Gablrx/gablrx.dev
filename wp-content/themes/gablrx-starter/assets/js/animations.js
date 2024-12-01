/* animations.js */
// Sélection de l'élément à animer
const typingText = document.getElementById('typing-text');

if (typingText) { // Vérifie si l'élément existe
    const text = typingText.dataset.text; // Récupère le texte via un attribut data

    // Définir les vitesses pour l'animation
    const minTypingSpeed = 80;  // Vitesse minimale entre chaque lettre (en ms)
    const maxTypingSpeed = 350; // Vitesse maximale entre chaque lettre (en ms)
    const underscoreBlinkSpeed = 500; // Vitesse du clignotement de l'underscore

    let index = 0;

    // Fonction pour générer un délai de frappe aléatoire entre minTypingSpeed et maxTypingSpeed
    function getRandomTypingSpeed() {
        return Math.floor(Math.random() * (maxTypingSpeed - minTypingSpeed + 1)) + minTypingSpeed;
    }

    // Fonction d'animation pour écrire le texte lettre par lettre
    function type() {
        if (index < text.length) {
            typingText.innerHTML = text.slice(0, index + 1) + '<span class="underscore">_</span>';
            index++;
            setTimeout(type, getRandomTypingSpeed()); // Utilise un délai aléatoire
        } else {
            // Retirer l'underscore permanent et lancer le clignotement
            typingText.innerHTML = text;
            blinkUnderscore();
        }
    }

    // Fonction pour le clignotement de l'underscore
    function blinkUnderscore() {
        const underscore = document.createElement('span');
        underscore.classList.add('underscore');
        underscore.textContent = '_';
        typingText.appendChild(underscore);

        setInterval(() => {
            underscore.classList.toggle('opacity-0'); // Toggle l'opacité pour le clignotement
        }, underscoreBlinkSpeed);
    }

    document.addEventListener("DOMContentLoaded", () => {
        // Ajouter un délai avant de démarrer l'animation
        setTimeout(() => {
            type();

        }, 250); // Délai de 1 seconde (1000 ms)
    });
}
