document.addEventListener("DOMContentLoaded", function() {
    // Obtén el formulario
    const form = document.getElementById('login_form');
    
    // Agrega un event listener para el evento 'submit' del formulario
    form.addEventListener('submit', function(event) {
    });
});

function handleRegister() {
    // Muestra un mensaje de alerta
    alert('Inicio de sesión correcto');

    // Redirige a la página de inicio de sesión
    window.location.href = 'Pagina_Usuario.html';

    // Retorna false para prevenir el envío del formulario
    return false;
}