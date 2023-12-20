<?php
    include_once 'conexion.php';
    include_once 'update.php';
    $con = new Conexion();
    $conn = $con->connect();

    $id = $_GET['id'];

    $sql = "SELECT * FROM estudiante where cedula='$id';";
    $resul = $conn->prepare($sql);
    $resul->execute();

    $resultado = $resul->fetch();
    $conn = null;

    if(isset($_POST['aceptar'])){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Recibe los datos del formulario
            $data = array(
                'cedula' => $_POST['id'],
                'nombre' => $_POST['nombre'],
                'apellido' => $_POST['apellido'],
                'direccion' => $_POST['direccion'],
                'telefono' => $_POST['telefono']
            );
        
            // Convierte los datos a formato JSON
            $data_json = json_encode($data);
        
            // URL de tu servicio web
            $url = 'http://localhost/quintosoa/api.php';
        
            // Configuración del contexto para una solicitud PUT
            $options = array(
                'http' => array(
                    'method' => 'PUT',
                    'header' => 'Content-Type: application/json',
                    'content' => $data_json
                )
            );
        
            $context = stream_context_create($options);
        
            // Realizar la solicitud PUT
            $response = file_get_contents($url, false, $context);
            echo json_encode($response);
            // Manejar la respuesta (puede ser JSON)
            if ($response === false) {
                echo "Error al realizar la solicitud PUT.";
            } else {
                $responseData = json_decode($response, true);
                if ($responseData !== null) {
                    // Procesar la respuesta JSON
                    // Puedes mostrar o procesar la respuesta según tus necesidades
                    print_r($responseData);
                } else {
                    echo "Respuesta no válida del servicio web.";
                }
            }
        }
        
        header('location:updateView.php');
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" >
        <input type="hidden" name="id" value="<?php echo $resultado['cedula']?>">
        <input type="text" name="nombre" value="<?php echo $resultado['nombre']?>">
        <br>
        <br>
        <input type="text" name="apellido" value="<?php echo $resultado['apellido']?>">
        <br>
        <br>
        <input type="text" name="direccion" value="<?php echo $resultado['direccion']?>">
        <br>
        <br>
        <input type="text" name="telefono" value="<?php echo $resultado['telefono']?>"> 
        <br>
        <br>
        <input type="submit" name="aceptar" value="Aceptar">   
    </form>
</body>
</html>