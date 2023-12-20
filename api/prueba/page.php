<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="page.php" method="post" id="acepta">
        <input type="text" id="curso" name="curso" placeholder="Curso">
        <input type="text" id="paralelo" name="paralelo" placeholder="Paralelo">
        <input type="submit" id="aceptar" name="aceptar" value="Aceptar">
    </form>
    <table>
        <thead>
            <tr>
                <th>Cedula</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Curso</th>
                <th>Paralelo</th>
            </tr>
        </thead>
        <tbody id="table"></tbody>
    </table>
</body>
<script src="getData.js"></script>
</html>