// Agregar un controlador de eventos al botón "Obtener Datos"
document.getElementById("datos").addEventListener("click", function () {
    // Obtener la fila seleccionada (que tiene la clase "selected")
    var selectedRow = document.querySelector("#dg tbody tr.selected");

    if (selectedRow) {
        // Obtener el valor de la celda de la columna "cedula" de la fila seleccionada
        var cedula =  selectedRow.cells[0].textContent;

        // Realizar una solicitud DELETE al servicio web para eliminar el registro
        fetch('http://localhost/quintosoa/api.php?cedula=' + cedula, {
            method: 'DELETE'
        })
        .then(response => response.json())
        .then(data => {
            // Manipular la respuesta del servicio
            console.log('Se ha eliminado correctamente:', data);

            // Recargar los datos en la tabla después de la eliminación
            cargarDatosEnTabla();
        })
        .catch(error => {
            console.error('Error al eliminar el dato: ', error);
        });

        // Ahora, 'cedula' contiene el valor de la cédula de la fila seleccionada
        console.log("Valor de la cédula de la fila seleccionada:", cedula);

    } else {
        console.log("Error al seleccionar una fila.");
    }
});


