<?php
// Datos que deseas actualizar
$data = array(
    'cedula' => '1801', // El valor que deseas actualizar
    'nombre' => 'Carlos',
    'apellido' => 'Alvarado',
    'direccion' => 'EE.UU',
    'telefono' => '1223456789'
);

// Convertir los datos a formato JSON
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
print_r($response);
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
?>
