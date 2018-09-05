<?php

//LLamando los campos y almacenandolos en variables================
$nombre   = $_POST["name"];
$correo   = $_POST["mail"];
$telefono = $_POST["phone"];
$sitioweb = $_POST["website"];
$mensaje  = $_POST["message"];

//Datos para el correo================

$destinatario = "welcomhack@hotmail.com";
$asunto       = "Contacto desde Mi portafolio welcomhack1";

//Correo================
$carta  = "DE: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Telefono: $telefono \n";
$carta .= "Mensaje: $mensaje \n";


//Enviando mensaje ======================
mail($destinatario, $asunto, $carta);

//Redirije a una pagina de mensaje========
header("location:mensaje.html");

?>