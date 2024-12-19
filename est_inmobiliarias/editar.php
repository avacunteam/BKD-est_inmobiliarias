<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

$json = file_get_contents('php://input');

$params = json_decode($json);

require ("../conexion.php");

$editar = "UPDATE est_inmobiliarias SET nombres = '$params -> nombres', correo = '$params -> correo WHERE id = $params -> id";
mysqli_query($conexion, $editar) or die('no edito');

class Result {}

$response = new Result();
$response -> resultado = 'OK';
$response -> mensaje = 'datos modificados';

header('content-Type: aplication/json');
echo json_encode($response);
?>
