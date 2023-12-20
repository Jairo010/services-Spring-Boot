document.getElementById("editar").addEventListener("click", function () {
    document.getElementById("fe").setAttribute("data-operation", "editar");
});

document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("fe").addEventListener("submit", function(event) {
        event.preventDefault(); // Evitar el envío del formulario por defecto

        // Obtener datos del formulario
        var formData = new FormData(this);
        var operation = this.getAttribute("data-operation");

        // Determinar si se debe hacer una solicitud POST o PUT
        var method = operation === 'insertar' ? 'POST' : 'PUT';

        // Construir la URL según la operación
        var url = 'http://localhost/quintosoa/api.php';
        if (method === 'PUT') {
            // Obtener los datos del formulario y construir un objeto JSON
            var data = {
                cedula: formData.get("cedula"),
                nombre: formData.get("nombre"),
                apellido: formData.get("apellido"),
                direccion: formData.get("direccion"),
                telefono: formData.get("telefono")
            };

            // Realizar la solicitud al servicio web
            fetch(url, {
                method: method,
                body: JSON.stringify(data)
            })
            .then(response => response.json())
            .then(data => {
                // Manipular la respuesta del servicio
                console.log('Datos actualizados:', data);

                // Limpiar los campos del formulario
                this.reset();

                // Reiniciar el atributo personalizado para futuras inserciones
                this.setAttribute("data-operation", "insertar");

                cargarDatosEnTabla();
            })
            .catch(error => {
                console.error('Error al actualizar datos: ', error);
            });
        } else {
            // Para solicitudes POST, mantén el código anterior
            // ...
            fetch(url, {
            method: method,
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            // Manipular la respuesta del servicio
            console.log('Datos insertados:', data);

            this.reset();

            cargarDatosEnTabla();
        })
        .catch(error => {
            console.error('Error al insertar datos: ', error);
        });
        }
    });
});

