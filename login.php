<?php
$username= $_POST["username"];
$password= $_POST["password"];

$archivoUsuario = file_get_contents("cuentas/$username.txt");
$arrayArchivo = explode("\n",$archivoUsuario);

if($archivoUsuario[1]=== $password)  {
    setcookie ('logueado')




}


?>