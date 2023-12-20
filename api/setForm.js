
    // Agregar un controlador de eventos al botón "Editar"
    document.getElementById("editar").addEventListener("click", function () {
        // Obtener la fila seleccionada (que tiene la clase "selected")
        var selectedRow = document.querySelector("#dg tbody tr.selected");
        if (selectedRow) {
            // Obtener los valores de las celdas de la fila seleccionada
            var cedula = selectedRow.cells[0].textContent;
            var nombre = selectedRow.cells[1].textContent;
            var apellido = selectedRow.cells[2].textContent;
            var direccion = selectedRow.cells[3].textContent;
            var telefono = selectedRow.cells[4].textContent;

            // Establecer los valores en los campos del formulario
            document.getElementById("cedula").value = cedula;
            document.getElementById("nombre").value = nombre;
            document.getElementById("apellido").value = apellido;
            document.getElementById("direccion").value = direccion;
            document.getElementById("telefono").value = telefono;
        } else {
            console.log("No se ha seleccionado ninguna fila para editar.");
        }
    });

