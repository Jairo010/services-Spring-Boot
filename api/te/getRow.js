document.addEventListener("DOMContentLoaded",function(){
    var table = document.getElementById("tab");
    var tbody = table.querySelector("tbody");
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