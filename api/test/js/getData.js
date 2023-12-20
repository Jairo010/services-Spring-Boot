function getDataTable(){
    var xhttp = new XMLHttpRequest();
    xhttp.open("GET","http://localhost/quintosoa/test/api.php");
    xhttp.onload = () =>{
        var data = JSON.parse(xhttp.responseText);
        var table = document.getElementById("table").getElementsByTagName("tbody")[0];
        table.innerHTML = "";
        for (let i = 0; i < data.length; i++) {
            var row = table.insertRow(i);
            var c1 = row.insertCell(0);
            var c2 = row.insertCell(1);
            var c3 = row.insertCell(2);
            var c4 = row.insertCell(3);
            var c5 = row.insertCell(4);
            
            c1.innerHTML = data[i].cedula;
            c2.innerHTML = data[i].nombre;
            c3.innerHTML = data[i].apellido;
            c4.innerHTML = data[i].direccion;
            c5.innerHTML = data[i].telefono;
        }
    };
    xhttp.send();
}

document.addEventListener("DOMContentLoaded", function(){
    getDataTable();
});