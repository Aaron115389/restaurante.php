<?php
include_once './php/productos.php';
include_once './php/pedidos.php';
session_start();
$total = 0;

if (!isset($_SESSION['detalle_pedido'])) {
    $_SESSION['detalle_pedido'] = array();
}

if (isset($_POST['btnGuardar'])) {
    $iDPlato = $_POST["cbxPlatos"];
    $cantidadPlato = $_POST["txtCantidadPlato"];

    // Verifica si la variable $platos y $iDPlato están definidas y tienen datos
    if (isset($platos[$iDPlato])) {
        $precioPlato = $platos[$iDPlato]['precio'];
        $subTotalPlato = $platos[$iDPlato]['precio'] * $cantidadPlato;
    } else {
        $precioPlato = 0;
        $subTotalPlato = 0;
    }

    $iDBebida = $_POST["cbxBebidas"];
    $cantidadBebida = $_POST["txtCantidadBebidas"];

    // Verifica si la variable $bebidas y $iDBebida están definidas y tienen datos
    if (isset($bebidas[$iDBebida])) {
        $precioBebida = $bebidas[$iDBebida]['precio'];
        $subTotalBebidas = $bebidas[$iDBebida]['precio'] * $cantidadBebida;
    } else {
        $precioBebida = 0;
        $subTotalBebidas = 0;
    }

    $producto_agregado = agregarProductoAlPedido($iDPlato, $cantidadPlato, $subTotalPlato, $iDBebida, $cantidadBebida, $subTotalBebidas);

    if ($producto_agregado) {
        echo '<script>
                document.addEventListener("DOMContentLoaded", function() {
                    Swal.fire({
                        title: "Éxito",
                        text: "Producto agregado",
                        icon: "success",
                        timer: 1500,
                        showConfirmButton: false,
                    });
                });
            </script>';
    } else {

        echo '<script>
                document.addEventListener("DOMContentLoaded", function() {
                    Swal.fire({
                        title: "Error",
                        text: "Error en agregar Producto",
                        icon: "error",
                        showConfirmButton: false,
                        timer: 1500
                    });
                });
            </script>';
    }
}

// Calcular el total después de cargar la página
foreach ($_SESSION['detalle_pedido'] as $item) {
    $total += $item['subtotal'];
}

// Procesar el formulario cuando se limpie el detalle del pedido
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['limpiar_pedido'])) {
    $_SESSION['detalle_pedido'] = array(); // Limpiar el detalle del pedido
    $total = 0; // Establecer el total a cero

}
?>
<!DOCTYPE html>
<html>

<head>
    <title>EL DELICIOSO | Pedido</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="Js.Js"></script>
    <link rel="stylesheet" href="./css/estilos.css">
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

                <div class="card mt-3 p-3">
                    <h4>Detalle de Pedido:</h4>

                    <div class="col-3 mb-2">
                        <a href="./index.php" class="btn btn-success btn-block">
                            <i class="fas fa-plus"></i> Añadir Producto
                        </a>
                    </div>
                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Cantidad</th>
                                        <th>Precio</th>
                                        <th>Sub Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($_SESSION['detalle_pedido'] as $item) : ?>
                                    <tr>
                                        <td><?= $item['nombre'] ?></td>
                                        <td><?= $item['cantidad'] ?></td>
                                        <td><?= $item['precio'] ?></td>
                                        <td><?= $item['subtotal'] ?></td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="row mt-4">
                            <div class="col-12 text-end">
                                <h4>Total: <strong><?= $total ?></strong></h4>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="ml-3 ">
                            <form method="POST" action="">
                                <button type="submit" name="limpiar_pedido"
                                    class="btn btn-danger btn-block">Limpiar</button>
                            </form>
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