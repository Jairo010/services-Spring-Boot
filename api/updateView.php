<?php
    //include_once 'select.php';
    //$data = crud::selectStudents();
    //$dataDecode = json_decode($data);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .selected {
            background-color: #f5f5f5; /* Color de fondo para filas seleccionadas */
        }
    </style>
    
</head>
<body>
<table id="dg">
        <thead>
            <tr class="selected">
                <th field = "cedula">Id</th>
                <th field = "nombre">Name</th>
                <th field = "apellido">Last Name</th>
                <th field = "direccion">Address</th>
                <th field = "telefono">Phone</th>
            </tr>
            
        </thead>
        <tbody></tbody>
        <input type="submit" value="Datos" name="datos" id="datos">
    </table>

    <div>
        <form id="fe"  method="post"  data-operation="insertar"><br>
            <input type="text" id="cedula" name="cedula" placeholder="Cedula"><br>
            <input type="text" id="nombre" name="nombre" placeholder="Nombre"><br>
            <input type="text" id="apellido" name="apellido" placeholder="Apellido"><br>
            <input type="text" id="direccion" name="direccion" placeholder="Direccion"><br>
            <input type="text" id="telefono" name="telefono" placeholder="Telefono"><br>
            <input type="submit" name="aceptar" value="Aceptar">
        </form>
    </div>
    <div>
        <input type="submit" name="editar" id="editar" value="Editar">
    </div>
</body>

<script type="text/javascript" src="carga.js"></script>
<script type="text/javascript" src="row.js"></script>
<script type="text/javascript" src="selected.js"></script>
<script type="text/javascript" src="setForm.js"></script>
<script type="text/javascript" src="update.js"></script>
</html>