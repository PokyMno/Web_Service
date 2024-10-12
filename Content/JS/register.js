document.addEventListener("DOMContentLoaded", function() {
    // Obtén el formulario
    const form = document.getElementById('register-form');
    
    // Agrega un event listener para el evento 'submit' del formulario
    form.addEventListener('submit', function(event) {
    });
});

function handleRegister() {
    // Muestra un mensaje de alerta
    alert('¡Te has registrado correctamente!');

    // Redirige a la página de inicio de sesión
    window.location.href = 'login.html';

    // Retorna false para prevenir el envío del formulario
    return false;
}