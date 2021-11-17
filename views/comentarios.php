<?php 
$estado_session = session_status();
if($estado_session == PHP_SESSION_NONE)
{
session_start();
}
if (isset($_SESSION['loggedUserName'])) {
    $_correo =  $_SESSION['loggedUserName'];
?>
<h1 class="titulo">¡Tus comentarios importan !</h1>
<p class="home">En este apartado dejo la oportunidad para que puedas redactar un comentario empezando con el titulo de este y seguido de un breve texto <br>
Gracias a sus comentarios, el blog de reviews puede permanecer de alta calidad :D</p>
<div class="row sugerencias">
    <form  class="form-sugerencias" action="./controller/publicar.php" method="post">
    <input type="hidden" name="email" value="<?php echo $_correo?>"><br>

    <label class="sugerencias-titulo" for="titulo">Titulo</label><br>
    <input type="text" name="titulo"><br>

    <label class="sugerencias-contenido" for="contenido">Contenido</label><br>
    <textarea type="text" name="contenido" cols="40" rows="5"></textarea><br>

    <input type="submit" value="submit">
    </form>
</div>

<?php
}else {?>
<?php 
        header("location: ?menu=401");
        exit();
}?>

