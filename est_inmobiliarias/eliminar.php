<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

require ("../conexion.php");

$del = "DELETE from est_inmobiliarias WHERE id =" .$_GET['id'];
mysqli_query($conexion, $del) or die("no se elimino datos señalados");

class Result {}

$response = new Result();
$response -> resultado = 'OK';
$response -> mensaje = 'datos eliminados';

header('content-Type: aplication/json');
echo json_encode($response);
?>
