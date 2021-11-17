<?php
if (filter_input_array(INPUT_POST)) {
$_email = trim(filter_input(INPUT_POST, 'email'));
$_pswd = trim(filter_input(INPUT_POST, 'password'));
include_once '../model/conexion.php';
$loginok = conexion::login($_email, $_pswd);
echo '<br> LoginOk = ';
print_r($loginok);
if ($loginok){
header("location: ../index.php?menu=bienvenido");
} else{
echo 'Usuario No Existe o password Incorrecto';
}
}
?>