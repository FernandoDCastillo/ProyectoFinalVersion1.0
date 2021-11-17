<div class="row">
    <h1>Publicaciones</h1>
    <table class="table table-dark table-striped">
        <tr>
            <th>Numero publicacion</th>
            <th>Titulo</th>
            <th>Contenido</th>
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
                    foreach($sqlPublicaciones as $verPublicacion){ ?>
                <tr>
                    <td><?php echo $verPublicacion->id_publicacion?></td>
                    <td><?php echo $verPublicacion->titulo?></td>
                    <td><?php echo $verPublicacion->contenido?></td>
                </tr>
                <?php }?>
            
        </tbody>
    </table>
</div>

<?php 


}?>


