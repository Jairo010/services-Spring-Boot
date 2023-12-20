<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>

<body>
    <table id="table">
        <thead>
            <tr class="selected">
                <th field="cedula">Cedula</th>
                <th field="nombre">Nombre</th>
                <th field="apellido">Apellido</th>
                <th field="direccion">Direccion</th>
                <th field="telefono">Telefono</th>
            </tr>
        </thead>
        <tbody></tbody>
    </table>

    <form id="fe" method="post" data-operation="insert"><br>
        <input type="text" id="cedula" name="cedula" placeholder="Cedula"><br>
        <input type="text" id="nombre" name="nombre" placeholder="nombre"><br>
        <input type="text" id="apellido" name="apellido" placeholder="apellido"><br>
        <input type="text" id="direccion" name="direccion" placeholder="direccion"><br>
        <input type="text" id="telefono" name="telefono" placeholder="telefono"><br>
        <input type="submit" name="enviar" id="enviar" value="Enviar"><br>
    </form>
    <input type="submit" id="update" name="update" value="Actualizar">
    <input type="submit" id="delete" name="delete" value="Eliminar">
</body>
<script src="js/getData.js"></script>
<script src="js/send_update.js"></script>
<script src="js/selectRow.js"></script>
<script src="js/setImputs.js"></script>
<script src="js/delete.js"></script>
</html>