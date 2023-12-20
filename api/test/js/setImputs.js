document.getElementById("update").addEventListener("click", function(){
    var rowSelected = document.querySelector("#table tbody tr.selected");
    if (rowSelected) {
        var cedula = rowSelected.cells[0].textContent;
        var nombre = rowSelected.cells[1].textContent;
        var apellido = rowSelected.cells[2].textContent;
        var direccion = rowSelected.cells[3].textContent;
        var telefono = rowSelected.cells[4].textContent;

        document.getElementById("cedula").value = cedula;
        document.getElementById("nombre").value = nombre;
        document.getElementById("apellido").value = apellido;
        document.getElementById("direccion").value = direccion;
        document.getElementById("telefono").value = telefono;
    } else {
        console.log("Ninguna fila seleccionada");
    }
});