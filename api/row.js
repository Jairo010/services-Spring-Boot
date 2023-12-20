document.addEventListener("DOMContentLoaded", function () {
    var table = document.getElementById("dg");
    var tbody = table.querySelector("tbody");
    var selectedRow = null; // Variable para mantener el seguimiento de la fila seleccionada
    // Agregar un controlador de eventos al cuerpo de la tabla para manejar la selección de filas
    tbody.addEventListener("click", function (event) {
        var row = event.target.closest("tr"); // Obtener la fila que se hizo clic
        console.log(row);
        if (row) {
            // Desmarca la fila previamente seleccionada, si la hay
            if (selectedRow) {
                selectedRow.classList.remove("selected");
            }

            // Marcar la nueva fila seleccionada
            row.classList.add("selected");
            selectedRow = row;
    }
    });
});

