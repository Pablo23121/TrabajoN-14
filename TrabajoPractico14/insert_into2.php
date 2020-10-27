<?php
 include("conexion.php");

 $juego = $_POST['juego'];
 $consola = $_POST['consola'];
 $precio = $_POST['precio'];
 $direccion = $_POST['direccion'];

$consulta_slq = "INSERT INTO pedido(juego,consola,precio,direccion) VALUES ('$juego','$consola','$precio','$direccion')";

$envio_consulta = $conexion->query($consulta_slq);

header("Location: pagina.php");
 ?>
