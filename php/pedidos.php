<?php

function agregarProductoAlPedido($iDPlato, $cantidadPlato, $total, $iDBebida, $cantidadBebida, $totalBebidas)
{
    global $platos, $bebidas; // Asegura que estas variables sean accesibles dentro de la función

    $detalle_pedido_item_plato = array(
        "nombre" => $platos[$iDPlato]['nombre'],
        "precio" => $platos[$iDPlato]['precio'],
        "cantidad" => $cantidadPlato,
        "subtotal" => $total
    );
    $detalle_pedido_item_bebida = array(
        "nombre" => $bebidas[$iDBebida]['nombre'],
        "precio" => $bebidas[$iDBebida]['precio'],
        "cantidad" => $cantidadBebida,
        "subtotal" => $totalBebidas
    );

    $_SESSION['detalle_pedido'][] = $detalle_pedido_item_plato;
    $_SESSION['detalle_pedido'][] = $detalle_pedido_item_bebida;
    return true;
}