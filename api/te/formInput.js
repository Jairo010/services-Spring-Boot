document.getElementById("editar").addEventListener("click",function(){
    var rowSelected = document.querySelector("#tab tbody tr.selected");
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
});