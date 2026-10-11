// JS pour valider le formulaire d'inscription
document.addEventListener('DOMContentLoaded', function () {
  const form = document.querySelector('form');
  const username = document.getElementById('username');
  const email = document.getElementById('email');
  const password = document.getElementById('password');

  form.addEventListener('submit', function (e) {
    // Nettoyer les anciens messages d'erreur
    clearErrors();

    let isValid = true;

    // Vérification du nom d'utilisateur
    if (username.value.trim() === '') {
      showError(username, "Le nom d'utilisateur est requis.");
      isValid = false;
    }

    // Vérification de l'e-mail
    if (!validateEmail(email.value)) {
      showError(email, "Veuillez entrer une adresse email valide.");
      isValid = false;
    }

    // Vérification du mot de passe
    if (password.value.length < 6) {
      showError(password, "Le mot de passe doit contenir au moins 6 caractères.");
      isValid = false;
    }

    // Empêche l'envoi si le formulaire est invalide
    if (!isValid) {
      e.preventDefault();
    }
  });

  function showError(input, message) {
    const error = document.createElement('small');
    error.className = 'error-message';
    error.style.color = 'red';
    error.style.display = 'block';
    error.textContent = message;
    input.parentNode.insertBefore(error, input.nextSibling);
  }

  function clearErrors() {
    const errors = document.querySelectorAll('.error-message');
    errors.forEach(err => err.remove());
  }

  function validateEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email.toLowerCase());
  }
});
