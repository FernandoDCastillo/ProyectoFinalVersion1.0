<?php 

$var_getMenu = isset($_GET['menu']) ? $_GET['menu'] : 'inicio';

switch($var_getMenu){
    case "inicio":
        require_once('./views/home.php');
    break;
    case "reviews":
        require_once('./views/reviews.php');
    break;
    case "recomendaciones":
        include_once './model/alumnos.php';
        $sqlPublicaciones = alumnos::verPublicaciones();
        include_once('./views/recomendaciones.php');
    break;
    case "sugerencias":
        require_once('./views/sugerencias.php');
    break;
    case "acercaDe":
        require_once('./views/acercaDe.php');
    break;
    case "login":
        require_once('./views/login.php');
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