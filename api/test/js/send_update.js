document.getElementById("update").addEventListener("click",function(){
    document.getElementById("fe").setAttribute("data-operation","edit");
});

document.addEventListener("DOMContentLoaded",function(){
    document.getElementById("fe").addEventListener("submit",function(event){
        event.preventDefault();

        var formData = new FormData(this);
        var url ="http://localhost/quintosoa/test/api.php";
        var operation = this.getAttribute("data-operation");
        var method = operation === 'insert'? 'POST' : 'PUT';

        if (method === 'PUT') {
            var data={
                cedula: formData.get("cedula"),
                nombre: formData.get("nombre"),
                apellido: formData.get("apellido"),
                direccion: formData.get("direccion"),
                telefono: formData.get("telefono"),
            };
            fetch(url,{
                method:method,
                body: JSON.stringify(data)
            })
            .then(response =>response.json())
            .then(data =>{
                console.log("Datos actualizados correctamente:",data)
                this.reset();
                this.setAttribute("data-operation","insert");
                getDataTable();
            })
        } else {
            fetch(url,{
                method: method,
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                console.log("Datos insertados correctamente",data);
                this.reset();
                getDataTable();
            })
            .catch(error =>{
                console.error("Error",error);
            })
        }
    });
});