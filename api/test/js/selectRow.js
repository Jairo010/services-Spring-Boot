document.addEventListener("DOMContentLoaded",function(){
    var tabla = document.getElementById("table");
    var tbody = tabla.querySelector("tbody");
    var rowSelected = null;

    tbody.addEventListener("click", function(event){
        var row = event.target.closest("tr");
        console.log(row);
        if (row) {
            if (rowSelected) {
                rowSelected.classList.remove("selected");
            }
            row.classList.add("selected");
            rowSelected = row;
        }
    });
});