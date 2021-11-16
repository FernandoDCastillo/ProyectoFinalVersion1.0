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
        require_once('./views/recomendaciones.php');
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
default:
        require_once('./views/home.php');
}

?>