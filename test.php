<?php 
$nombre = $_POST["nombre"];
$descripcion = isset($_POST["desc"])?$_POST["desc"]:""; //Forma completa
$precio = $_POST["precio"];
$cantidad = isset($_POST ["cantidad"])?$_POST["cantidad"]:"";
$total = $cantidad * $precio;

echo "El producto tiene los siguientes datos: </br>";
echo "Nombre: $nombre </br>";
echo "Descripción: $descripcion </br>";
echo "Precio: $precio </br>";
echo "Total: $total </br>";

?>