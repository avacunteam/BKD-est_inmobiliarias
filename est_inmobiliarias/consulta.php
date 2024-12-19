<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

require ("../conexion.php");

$con = "SELECT * from est_inmobiliarias ORDER BY ID";
$res = mysqli_query($conexion, $con) or die ("no se realizo la consulta");

$vec=[];
while ($reg = mysqli_fetch_array($res)){
  $vec[]=$reg;
}
$cad=json_encode($vec);
echo $cad;
header('Content-type: application/json');
?>
