<?php
    include 'conectaDB.php';
    class Alumnos{

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

    }
?>