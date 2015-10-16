<?php

include 'conexion.php';

if (isset($_POST['user']) && !empty($_POST['user']) &&
        isset($_POST['pw']) && !empty($_POST['pw'])) {
    $con = mysql_connect($host, $user, $pw)or
            die('Error al conectar a la servidor');
    mysql_select_db($db, $con)or
            die('Error al conectar a la db');

    $sel = mysql_query("SELECT USER,PW FROM tbUser WHERE USER='$_POST[user]'", $con);
    $session = mysql_fetch_array($sel);

    if($_POST['pw'] == $session['PW']) {
        $_SESSION['username'] = $_POST['user'];
        echo 'sesion exitosa';
    }  else {
        echo 'contraseña o usuario erroneo';
    }
} else {
    echo 'error';
    
}
