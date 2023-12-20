document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("fe").addEventListener("submit", function(event) {
        event.preventDefault(); // Evitar el envío del formulario por defecto

        // Obtener datos del formulario
        var formData = new FormData(this);

        // Realizar una solicitud POST al servicio web
        fetch('http://localhost/quintosoa/api.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            // Manipular la respuesta del servicio
            console.log('Datos insertados:', data);

            document.getElementById("cedula").value = '';
            document.getElementById("nombre").value = '';
            document.getElementById("apellido").value = '';
            document.getElementById("direccion").value = '';
            document.getElementById("telefono").value = '';

            cargarDatosEnTabla();
        })
        .catch(error => {
            console.error('Error al insertar datos: ', error);
        });
    });
});