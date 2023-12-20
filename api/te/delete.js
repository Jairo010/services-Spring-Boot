document.addEventListener("DOMContentLoaded", function(){
    document.getElementById("eliminar").addEventListener("click", function(){
        var rowSelected = document.querySelector("#tab tbody tr.selected");
        var cedula = rowSelected.cells[0].textContent;

        var url = "http://localhost/quintosoa/test/api.php?cedula="+cedula;

        fetch(url,{
            method: "DELETE"
        })
        .then(response => response.json())
        .then(data => {
            console.log("Datos eliminados correctamente",data);
            getDataTable();
        })
        .catch(error =>{
            console.error("Error",error);
        })
    });
});