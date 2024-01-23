<?php
echo '<h2>Sesiones y Cookies</h2>';

setcookie("politica","true");
echo var_dump($_COOKIE);
if($_COOKIE["politica"]=="true"){
    echo "Has aceptado la privacidad";
}
else{
    echo "No hay cookies";
}

session_start();
$_SESSION["busqueda"]="camisa";

/*
 * Encriptacion md5
 * */