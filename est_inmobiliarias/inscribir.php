<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

$json = file_get_contents('php://input');

$params = json_decode($json);

require("../conexion.php");

$ins = "insert into est_inmobiliarias(nombres, correo) values ('$params -> nombres', '$params -> est_inmobiliarias', '$params -> correo', '$params -> est_inmobiliarias')";

mysqli_query($conexion, $ins) or die('fallo en la inscripción');

class Result {}

$response = new Result();
$response -> resultado = 'OK';
$response -> mensaje = 'Inscripción realizada';

header('content-Type: aplication/json');
echo json_encode($response);
?>
