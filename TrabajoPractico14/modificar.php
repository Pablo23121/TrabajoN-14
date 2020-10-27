<?php
include("conexion.php");
 $id = $_REQUEST['id'];

 $juego = $_POST['juego'];
 $consola = $_POST['consola'];
 $precio = $_POST['precio'];
 $direccion = $_POST['direccion'];

 $query = "UPDATE pedido SET juego='$juego', consola='$consola', precio='$precio', Direccion='$direccion' WHERE id = '$id'";
 $envio = $conexion->query($query);

 header("Location: pagina.php");
 ?>
