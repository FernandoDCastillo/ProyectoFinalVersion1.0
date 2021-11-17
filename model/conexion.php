<?php
    include 'conectaDB.php';
    class conexion{

        public $id_publicacion;
        public $titulo;
        public $contenido;

        public function __construct($id_publicacion, $titulo, $contenido) {  
            $this->id_publicacion = $id_publicacion;
            $this->titulo = $titulo;
            $this->contenido = $contenido;
        }  

    public static function login($_email, $_pass) {
            $mysqli = conectadb::dbmysql();
            $stmt = $mysqli->prepare('SELECT email, pass FROM usuarios WHERE email = ? and pass = ?');
            $stmt->bind_param('ss', $_email, $_pass);
            $stmt->execute();
            $resultado = $stmt->get_result();
            while ($filasql = mysqli_fetch_array($resultado)) {
            // Imprimir por Arreglo Asociado
            echo $filasql['email'] . ' ';
            echo $filasql['pass'] . ' ';
            // initialize session variables
            session_start();
            // $_SESSION['loggedDataTime'] = datatime();
            $_SESSION['loggedUserName'] = $filasql['email'] ;
            }
            $acceso = false;
            if ($stmt->affected_rows == 1) {
            $acceso = true;
            }
            $mysqli->close();
            return $acceso;
            }
        

        public static function verPublicaciones(){
            $correo = $_SESSION['loggedUserName'];
            $mysqli = conectadb::dbmysql();
            $consulta = "SELECT * from publicaciones where correo = '$correo'";
            echo ('<br>');
        // echo ($consulta);
        $resultado = mysqli_query($mysqli, $consulta);
        if (!$resultado) {
            echo 'No pudo Realizar la consulta a la base de datos';
            exit;
        }
        $listaPublicaciones = [];
        while ($publicaciones = mysqli_fetch_array($resultado)) {
            $listaPublicaciones[] = new conexion($publicaciones['id_publicacion'], $publicaciones['titulo'],$publicaciones['contenido']);
        }
        $mysqli->close();
        return $listaPublicaciones;
        } 


        public static function insertarPublicacion($_titulo,$_contenido,$_email){
            $mysqli = conectadb::dbmysql();
            $stmt = $mysqli->prepare('INSERT into publicaciones(id_publicacion,titulo,contenido, correo) VALUE (NULL, ?,?,?)');
            $stmt->bind_param('sss', $_titulo,$_contenido,$_email);
            $stmt->execute();
            $resultado = $stmt->get_result();
            $acceso = false;
            if ($stmt->affected_rows == 1) {
                $acceso = true;
            }
            $mysqli->close();
            return $acceso;
        
        }    

    }
?>