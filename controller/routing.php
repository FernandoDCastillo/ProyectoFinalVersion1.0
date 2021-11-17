<?php 

$var_getMenu = isset($_GET['menu']) ? $_GET['menu'] : 'inicio';

switch($var_getMenu){
    case "inicio":
        require_once('./views/home.php');
    break;
    case "reviews":
        require_once('./views/reviews.php');
    break;
    case "misComentarios":
        include_once './model/conexion.php';
        $sqlPublicaciones = conexion::verPublicaciones();
        include_once('./views/misComentarios.php');
    break;
    case "comentarios":
        require_once('./views/comentarios.php');
    break;
    case "acercaDe":
        require_once('./views/acercaDe.php');
    break;
    case "login":
        require_once('./views/login.php');
    break;
    case "bienvenido":
        require_once('./views/bienvenido.php');
    break;
    case "sov":
        require_once('./views/reviews/sov.php');
    break;  
    case "401":
        require_once('./views/error401.php');
    break; 
    case "logout":
        $session_destroy = session_destroy();
        header("location: ./index.php?menu=home");
        break;    
   
default:
        require_once('./views/home.php');
}

?>