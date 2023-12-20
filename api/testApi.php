<?php
//////////////GET////////////////////////////////
 // Inicializar el recurso cURL 
 $curl = curl_init();

// Establecer la URL de la API 
curl_setopt($curl, CURLOPT_URL, 'http://tu-dominio.com/api.php');

// Indicar que se quiere recibir la respuesta como una cadena 
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

// Ejecutar la petición y guardar la respuesta 
$response = curl_exec($curl);

// Cerrar el recurso cURL 
curl_close($curl);

// Convertir la respuesta de JSON a un array asociativo de PHP 
$data = json_decode($response, true);

// Mostrar el resultado por pantalla o hacer lo que quieras con el array $data 
print_r($data,true); 


/////////////////////////////////////////////////////////////////

//////////////POST/////////////////
// Inicializar el recurso cURL
$curl = curl_init();

// Establecer la URL de la API
curl_setopt($curl, CURLOPT_URL, 'http://tu-dominio.com/api.php');

// Indicar que se quiere enviar una petición POST
curl_setopt($curl, CURLOPT_POST, true);

// Establecer los datos que se quieren enviar por POST
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

// Indicar que se quiere recibir la respuesta como una cadena
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

// Ejecutar la petición y guardar la respuesta
$response = curl_exec($curl);

// Cerrar el recurso cURL
curl_close($curl);

// Mostrar el resultado por pantalla o hacer lo que quieras con la cadena $response
echo $response;

////////////////POST ENVIAR DATOS//////////////////
// Establecer la URL de la API
$url = 'http://tu-dominio.com/api.php';

// Codificar los datos que se quieren enviar por POST
$data_string = http_build_query($data);

// Crear un contexto con las opciones para la petición HTTP
$options = array(
  'http' => array(
    'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
    'method'  => 'POST',
    'content' => $data_string,
  ),
);

$context = stream_context_create($options);

// Leer el contenido de la URL usando el contexto creado
$response = file_get_contents($url, false, $context);

// Mostrar el resultado por pantalla o hacer lo que quieras con la cadena $response
echo $response;

////////////////PUT//////////////////

// Inicializar el recurso cURL
$curl = curl_init();

// Establecer la URL de la API
curl_setopt($curl, CURLOPT_URL, 'http://tu-dominio.com/api.php');

// Indicar que se quiere enviar una petición PUT
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'PUT');

// Establecer los datos que se quieren enviar por PUT
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

// Indicar que se quiere recibir la respuesta como una cadena
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

// Ejecutar la petición y guardar la respuesta
$response = curl_exec($curl);

// Cerrar el recurso cURL
curl_close($curl);

// Mostrar el resultado por pantalla o hacer lo que quieras con la cadena $response
echo $response;

///////////PUT ENVIAR DATOS/////////////

// Establecer la URL de la API
$url = 'http://tu-dominio.com/api.php';

// Codificar los datos que se quieren enviar por PUT
$data_string = http_build_query($data);

// Crear un contexto con las opciones para la petición HTTP
$options = array(
  'http' => array(
    'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
    'method'  => 'PUT',
    'content' => $data_string,
  ),
);

$context = stream_context_create($options);

// Leer el contenido de la URL usando el contexto creado
$response = file_get_contents($url, false, $context);

// Mostrar el resultado por pantalla o hacer lo que quieras con la cadena $response
echo $response;

/////////DELETE////////////
// Inicializar el recurso cURL
$curl = curl_init();

// Establecer la URL de la API
curl_setopt($curl, CURLOPT_URL, 'http://tu-dominio.com/api.php');

// Indicar que se quiere enviar una petición DELETE
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'DELETE');

// Indicar que se quiere recibir la respuesta como una cadena
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

// Ejecutar la petición y guardar la respuesta
$response = curl_exec($curl);

// Cerrar el recurso cURL
curl_close($curl);

// Mostrar el resultado por pantalla o hacer lo que quieras con la cadena $response
echo $response;

//////////DELETE OPCION 2/////////

// Establecer la URL de la API
$url = 'http://tu-dominio.com/api.php';

// Crear un contexto con las opciones para la petición HTTP
$options = array(
  'http' => array(
    'method'  => 'DELETE',
  ),
);

$context = stream_context_create($options);

// Leer el contenido de la URL usando el contexto creado
$response = file_get_contents($url, false, $context);

// Mostrar el resultado por pantalla o hacer lo que quieras con la cadena $response
echo $response;

?>