<?php
// if (isset($_POST['fecha_nacimiento'])) {

// }
$platos = array(
    1 => array("nombre" => "Arroz con Pollo", "precio" => 20),
    2 => array("nombre" => "Lomo Saltado", "precio" => 25),
    3 => array("nombre" => "Ceviche", "precio" => 30),
    4 => array("nombre" => "Pollo a la Brasa", "precio" => 35),
    5 => array("nombre" => "Tallarines Verdes", "precio" => 20),
);
$bebidas = array(
    1 => array("nombre" => "Coca Cola", "precio" => 5),
    2 => array("nombre" => "Sprite", "precio" => 5),
    3 => array("nombre" => "Fanta", "precio" => 5),
    4 => array("nombre" => "Agua Mineral", "precio" => 3),
    5 => array("nombre" => "Jugo de Naranja", "precio" => 7),
    6 => array("nombre" => "Limonada", "precio" => 6),
);
$iDplato = $_POST["cbxPlatos"];
$cantidadPlato = $_POST["txtCantidadPlato"];
$total = $platos[$iDplato]['precio'] * $cantidadPlato;

$iDbebidas = $_POST["cbxBebidas"];
$cantidadbebidas = $_POST["txtCantidadBebidas"];
$totalBebidas = $bebidas[$iDbebidas]['precio'] * $cantidadbebidas;

echo $platos[$iDplato]['nombre'] . " : " . $cantidadPlato . " x s/. " . $platos[$iDplato]['precio'] . " =  " . $total;
echo $bebidas[$iDbebidas]['nombre'] . " : " . $cantidadbebidas . " x s/. " . $bebidas[$iDbebidas]['precio'] . " =  " . $totalBebidas;

