<?php
// Define el ID que deseas eliminar
$id_a_eliminar = 14; // Reemplaza esto con el ID que deseas eliminar

// URL de la API que maneja las solicitudes DELETE
$api_url = 'http://localhost/quintosoa/api.php?cedula=' . $id_a_eliminar;

// Configura la solicitud DELETE
$options = array(
    'http' => array(
        'method' => 'DELETE',
    ),
);

$context = stream_context_create($options);

// Realiza la solicitud DELETE
$response = file_get_contents($api_url, false, $context);

// Maneja la respuesta (puede ser JSON)
if ($response === false) {
    echo "Error al realizar la solicitud DELETE.";
} else {
    $responseData = json_decode($response, true);
    if ($responseData !== null) {
        // Procesa la respuesta JSON, si es necesario
        print_r($responseData);
    } else {
        echo "Respuesta no válida del servicio web.";
    }
}
?>
