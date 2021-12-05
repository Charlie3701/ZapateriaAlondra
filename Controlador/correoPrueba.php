<?php
$destinatario = "ctorres.ct04@gmail.com";
$asunto = "Promoción de Productos Zapatería Alondra";
$message = "Obtenga promociones al realizar compras mayores a $300, lo esperamos en nuestra tienda
en León, Gto en la Zona Piel";
$remitente = "FROM: 17240387@leon.tecnm.mx"; 

mail($destinatario,$asunto,$message,$remitente);
header("Location: ../Vista/php/bienvenido.php");