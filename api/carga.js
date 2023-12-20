
function cargarDatosEnTabla() {
    
    // Realizar una solicitud GET al servicio web
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "http://localhost/quintosoa/api.php", true); 
    xhr.onreadystatechange = () => {
        if (xhr.readyState === 4 && xhr.status === 200) {
            var data = JSON.parse(xhr.responseText);
            console.log(data);
            if (data && data.length > 0) {
                // Obtener la referencia a la tabla
                var table = document.getElementById("dg").getElementsByTagName("tbody")[0];
                
                // Limpiar la tabla antes de agregar nuevos datos
                table.innerHTML = "";
                
                // Iterar a través de los datos y agregar filas a la tabla
                for (var i = 0; i < data.length; i++) {
                    var row = table.insertRow(i);
                    var cell1 = row.insertCell(0);
                    var cell2 = row.insertCell(1);
                    var cell3 = row.insertCell(2);
                    var cell4 = row.insertCell(3);
                    var cell5 = row.insertCell(4);

                    
                    // Asignar valores de los campos a las celdas de la fila
                    cell1.innerHTML = data[i].cedula;
                    cell2.innerHTML = data[i].nombre;
                    cell3.innerHTML = data[i].apellido;
                    cell4.innerHTML = data[i].direccion;
                    cell5.innerHTML = data[i].telefono;
                    
                }
            }
        }
    };
    xhr.send();
    
}

document.addEventListener("DOMContentLoaded", function () {
    // Llama a la función para cargar los datos en la tabla al cargar la página
    cargarDatosEnTabla();
    
});