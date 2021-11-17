<?php
$estado_session = session_status();
if($estado_session == PHP_SESSION_NONE)
{
session_start();
}
if (isset($_SESSION['loggedUserName'])) {

    

?>
<h1 class="titulo"></h1>

<p class="home">Bienvenido, espero disfrute de pasar un rato en este blog, no se arrepentira</p>
<?php
}else {?>
<?php    
    header("location: ?menu=401");
exit();}?>