<?php
$Usuario = $_POST["user"];
$Contrasenia = $_POST["pass"];
// el metodo post es para recolectar informacion ingresada por usuario y debe estar encriptada
$ckuser = "admin";
$ckpass = "1234";

if ($Usuario == $ckuser && $Contrasenia==$ckpass) {
  header ("location:https://www.potrerodigital.org");
} else {
  header ("location:error.html");
}
// Validamos los datos ingresados por el usuario
?>
