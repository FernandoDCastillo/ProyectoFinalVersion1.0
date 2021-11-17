<div class="row">
    <h1 class="titulo">Tus comentarios</h1>
    <table class="table table-dark table-striped">
        <tr>
            <th width="20%">Numero publicacion</th>
            <th width="30%">Titulo</th>
            <th width="50%">Contenido</th>
        </tr>
        <tbody>
<?php
$estado_session = session_status();
if($estado_session == PHP_SESSION_NONE)
{
session_start();
}
if (isset($_SESSION['loggedUserName'])) {
?>
                <?php 
                    $contador=1;
                    foreach($sqlPublicaciones as $verPublicacion){ ?>
                <tr>
                    <td><?php echo $contador?></td>
                    <td><?php echo $verPublicacion->titulo?></td>
                    <td><?php echo $verPublicacion->contenido?></td>
                </tr>
                <?php 
                    $contador += 1;
            }?>
            
        </tbody>
    </table>
</div>

<?php 


}else{?>

<?php 
    header("location: ?menu=401");
	exit();
}?>
