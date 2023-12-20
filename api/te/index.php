<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table id="tab">
        <thead>
            <tr class="Selected">
                <th field="cedula">Cedula</th>
                <th field="nombre">Nombre</th>
                <th field="apellido">Apellido</th>
                <th field="direccion">Direccion</th>
                <th field="telefono">Telefono</th>
            </tr>
        </thead>
        <tbody></tbody>
    </table>
    <form id="fe" method="post" data-operation="insertar">
        <input type="text" id="cedula" name="cedula" placeholder="Cedula"><br>
        <input type="text" id="nombre" name="nombre" placeholder="Nombre"><br>
        <input type="text" id="apellido" name="apellido" placeholder="Apellido"><br>
        <input type="text" id="direccion" name="direccion" placeholder="direccion"><br>
        <input type="text" id="telefono" name="telefono" placeholder="Telefono"><br>
        <input type="submit" id="enviar" name="enviar" value="Enviar"><br>
    </form>
    <input type="submit" id="editar" name="editar" value="Editar">
    <input type="submit" id="eliminar" name="eliminar" value="Eliminar">
</body>
<script src="getData.js"></script>
<script src="getRow.js"></script>
<script src="formInput.js"></script>
<script src="ins_upd.js"></script>
<script src="delete.js"></script>
</html>