<?php 
$estado_session = session_status();
if($estado_session == PHP_SESSION_NONE)
{
session_start();
}
if (isset($_SESSION['loggedUserName'])) {
    $_correo =  $_SESSION['loggedUserName'];
?>

<div class="row">
    <form  action="./controller/publicar.php" method="post">
    <input type="hidden" name="email" value="<?php echo $_correo?>"><br>
    <label for="titulo">Titulo</label><br>
    <input type="text" name="titulo"><br>

    <label for="contenido">Contenido</label><br>
    <input type="text" name="contenido"><br>

    <input type="submit" value="submit">
    </form>
</div>

<?php
}else {?>
<?php 

}?>

