<?php
$estado_session = session_status();
if($estado_session == PHP_SESSION_NONE)
{
    session_start();
}
if (isset($_SESSION['loggedUserName'])) {
?>
  <header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="?menu=home">Inicio</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="?menu=reviews">Reviews</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?menu=misComentarios">Mis comentarios</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?menu=comentarios">Comentarios</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?menu=acercaDe">Acerca de</a>
              </li>
              <li class ="nav-item">
                <a class="nav-link" href="?menu=logout">Logout</a>
              </li>
            </ul>
      </div>
    </div>
  </nav>
</header>
<?php
}else{ ?>
  <header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="?menu=home">Inicio</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="?menu=reviews">Reviews</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?menu=acercaDe">Acerca de</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?menu=login">Iniciar sesion</a>
              </li>
            </ul>
      </div>
    </div>
  </nav>
</header>
  <?php	}?>

