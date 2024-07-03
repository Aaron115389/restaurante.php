<?php
include_once './php/productos.php'

?>
<!DOCTYPE html>
<html>

<head>
    <title>EL DELICIOSO</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
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
                <form action="./detalle_pedido.php" method="post">
                    <div class="products">
                        <h3 class="title">Platos</h3>
                        <div class="item">
                            <select class="form-control" name="cbxPlatos">
                                <?php foreach ($platos as $key  => $plato) : ?>
                                <option value="<?= $key ?>"> <?= $plato['nombre'] ?> - s/. <?= $plato['precio'] ?>
                                </option>
                                <?php endforeach; ?>


                            </select>
                            <p class="item-description">Selecciona un producto</p>
                            <div class="form-group col-sm-8">
                                <label for="cantidad-producto">Cantidad</label>
                                <input id="cantidad-producto" type="text" class="form-control"
                                    placeholder="Ingrese la cantidad" aria-label="Ingrese la cantidad"
                                    aria-describedby="basic-addon1" name="txtCantidadPlato">
                            </div>
                        </div>
                    </div>
                    <div class="products">
                        <h3 class="title">Bebidas</h3>
                        <div class="item">
                            <select class="form-control" name="cbxBebidas">
                                <?php foreach ($bebidas as $key  => $bebidas) : ?>
                                <option value="<?= $key ?>"> <?= $bebidas['nombre'] ?> - s/. <?= $bebidas['precio'] ?>
                                </option>
                                <?php endforeach; ?>
                            </select>
                            <p class="item-description">Selecciona una bebida</p>
                            <div class="form-group col-sm-8">
                                <label for="cantidad-bebida">Cantidad</label>
                                <input id="cantidad-bebida" type="text" class="form-control"
                                    placeholder="Ingrese la cantidad" aria-label="Ingrese la cantidad"
                                    aria-describedby="basic-addon1" name="txtCantidadBebidas">
                            </div>
                        </div>
                        <h3 class="title">Total</h3>
                        <button type="submit" class="btn btn-primary btn-block" id="guardar-pedido"
                            name="btnGuardar">Guardar
                            Pedido</button>
                    </div>
                </form>
            </div>
            <!-- <div class="card-details">
                <h3 class="title">Boleta Electronica</h3>
                <div class="row">
                    <div class="form-group col-sm-7">
                        <label for="nombre-apellido">Nombre y Apellido del Cliente</label>
                        <input id="nombre-apellido" type="text" class="form-control"
                            placeholder="Ingrese el Nombre y Apellido" aria-label="Ingrese el Nombre y Apellido"
                            aria-describedby="basic-addon1">
                    </div>
                    <div class="form-group col-sm-8">
                        <label for="dni">DNI</label>
                        <input id="dni" type="text" class="form-control" placeholder="Ingrese el DNI"
                            aria-label="Ingrese el DNI" aria-describedby="basic-addon1">
                    </div>
                    <div class="form-group col-sm-8">
                        <label for="numero-celular">Numero de Celular</label>
                        <input id="numero-celular" type="text" class="form-control" placeholder="Ingrese el numero"
                            aria-label="Ingrese el numero" aria-describedby="basic-addon1">
                    </div>
                    <div class="beverages">
                        <h3 class="title">Tipo de Pago</h3>
                        <div class="item">
                            <select class="form-control">
                                <option value="Efectivo">Efectivo</option>
                                <option value="Tarjeta">Tarjeta</option>
                                <option value="Transferencia">Transferencia</option>
                            </select>
                            <p class="item-description">Seleccione un Tipo de Pago</p>
                        </div>
                    </div>
                    <div class="form-group col-sm-12">
                        <button type="button" class="btn btn-primary btn-block">Generar Boleta</button>
                    </div>
                </div>
            </div> -->


        </section>
    </main>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>

</html>