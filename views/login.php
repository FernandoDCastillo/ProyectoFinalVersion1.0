<?php
$estado_session = session_status();
if($estado_session == PHP_SESSION_NONE)
{
session_start();
}
if (isset($_SESSION['loggedUserName'])) {
    header("location: ?menu=401");
	exit();
?>
<?php
}else {?>
<div class="row text-center login-page">
	   <div class="col-md-12 login-form">
	      <form action="./controller/login.php" method="post"> 			
				<div class="row">
					<div class="col-md-12 login-form-header">
					<img id ="logo" src = "./images/logo_login.png">
					</div>
				</div>
				<div class="row">
				<div class="col-md-12 login-from-row">
					<input name="email" type="text" placeholder="Usuario" required/>
				</div>
				</div>
				<div class="row">
				<div class="col-md-12 login-from-row">
					<input name="password" type="password" placeholder="Contraseña" required/>
				</div>
				</div>
				<div class="row">
				<div class="col-md-12 login-from-row">
					<button class="btn btn-info">Entrar</button>
				</div>
				</div>
	    	</form>
		</div>
</div>
<?php } ?>