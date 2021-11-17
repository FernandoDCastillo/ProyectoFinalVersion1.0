<?php
if (filter_input_array(INPUT_POST)) {
    $_titulo = trim(filter_input(INPUT_POST, 'titulo'));
    $_contenido = trim(filter_input(INPUT_POST, 'contenido'));
    $_email = trim(filter_input(INPUT_POST, 'email'));
    include_once '../model/conexion.php';
    $loginok = conexion::insertarPublicacion($_titulo, $_contenido,$_email);
    echo '<br> LoginOk = ';
    print_r($loginok);
    if ($loginok){
    echo 'publicado';
    header("location: ../index.php?menu=inicio");
    } else{
    echo 'no publicado';
    }
    }
?>