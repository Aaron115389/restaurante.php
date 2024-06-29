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
$iDplato = $_POST["cbxPlatos"];
$cantidadPlato = $_POST["txtCantidadPlato"];
$total = $platos[$iDplato]['precio'] * $cantidadPlato;

echo $platos[$iDplato]['nombre'] . " : " . $cantidadPlato . " x s/. " . $platos[$iDplato]['precio'] . " =  " . $total;