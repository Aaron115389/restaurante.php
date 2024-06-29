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

//echo $platos[$iDplato]['nombre'] . " : " . $cantidadPlato . " x s/. " . $platos[$iDplato]['precio'] . " =  " . $total;
//echo $bebidas[$iDbebidas]['nombre'] . " : " . $cantidadbebidas . " x s/. " . $bebidas[$iDbebidas]['precio'] . " =  " . $totalBebidas;
?>
<!DOCTYPE html>
<html>

<head>
    <title>EL DELICIOSO | Pedido</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <script src="Js.Js"></script>
    <link rel="stylesheet" href="../css/estilos.css">
</head>

<body>
    <main class="page payment-page">
        <section class="payment-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2>¡BIENVENIDOS!</h2>
                    <h2>Restaurante "El Delicioso"</h2>
                    <p>Si te estás preguntando cuál es el amor más sincero… Entra y encontrarás la respuesta</p>
                    <p> ¡Cualquier día es perfecto para darte un gusto!</p>
                </div>
                <div class="products">
                    <h3 class="title">Detalle de Pedido</h3>
                    <div class="item">

                        <div class="form-group col-sm-8">
                            <label for="cantidad-producto">
                                <?php echo $platos[$iDplato]['nombre'] . " s/." . $platos[$iDplato]['precio'] . " x " . $cantidadPlato ?>
                            </label>
                            <input id="cantidad-producto" type="text" class="form-control" placeholder="Ingrese la cantidad" aria-label="Ingrese la cantidad" aria-describedby="basic-addon1" name="txtCantidadPlato" value="<?php echo $total; ?>" readonly>

                        </div>
                    </div>
                </div>
            </div>

        </section>
    </main>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>

</html>