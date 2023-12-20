

document.addEventListener("DOMContentLoaded",function(){
    var aceptar = document.getElementById("acepta");
    aceptar.addEventListener("submit",function () {
        var curso = document.getElementById("curso").value;
        var paralelo = document.getElementById("paralelo").value;
     
    //getData();
    //var formdata = new FormData();
    var table = document.getElementById("table");
    table.innerHTML="";
    fetch("http://localhost/quintosoa/prueba/api.php?curso="+curso+"&paralelo="+paralelo,{
        method: "GET"
    })
    .then(response => response.json())
    .then(data => {
        for (let i = 0; i < data.length; i++) {
            var row = table.insertRow(i);
            var c1 = row.insertCell(0);
            var c2 = row.insertCell(1);
            var c3 = row.insertCell(2);
            var c4 = row.insertCell(3);
            var c5 = row.insertCell(4);
            var c6 = row.insertCell(5);

            c1.innerHTML = data[i].cedula;
            c2.innerHTML = data[i].nombre;
            c3.innerHTML = data[i].apellido;
            c4.innerHTML = data[i].curso_per;
            c5.innerHTML = data[i].paralelo_per;
            c6.innerHTML = '<a href="'+data[i].cedula+'">Editar</a>';
        }
    });
});
});