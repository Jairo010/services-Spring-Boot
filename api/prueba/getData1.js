function getDatos() {
    document.getElementById("aceptar").addEventListener("click",function(){
        var cuenta = document.getElementById("cuenta").value;
        console.log(cuenta);
        var xhttp = new XMLHttpRequest();
        xhttp.open("GET","http://localhost/quintosoa/prueba/api.php?cuenta="+cuenta);
        xhttp.onload = () =>{
            var data = JSON.parse(xhttp.responseText);
            var table = document.getElementById("tab").getElementsByTagName("tbody")[0];
            table.innerHTML = "";
            for (let i = 0; i < data.length; i++) {
                var row = table.insertRow(i);
                var c1 = row.insertCell(0);
                var c2 = row.insertCell(1);
                var c3 = row.insertCell(2);
                var c4 = row.insertCell(3);

                c1.innerHTML = data[i].numCuenta;
                if (data[i].tipo === "retiro") {
                    c2.innerHTML = data[i].cantidad;
                    c4.innerHTML = data[i].tipo;
                } else {
                    c3.innerHTML = data[i].cantidad;
                    c4.innerHTML = data[i].tipo;
                }

            }
        }
        xhttp.send();
    });
}

document.addEventListener("DOMContentLoaded",function(){
    getDatos();
});