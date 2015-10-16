<?php

include("conexion.php");

if (isset($_POST['name']) && !empty($_POST['name']) &&
        isset($_POST['user']) && !empty($_POST['user']) &&
        isset($_POST['pw']) && !empty($_POST['pw']) &&
        isset($_POST['pw2']) && !empty($_POST['pw2']) &&
        isset($_POST['email']) && !empty($_POST['email']) &&
        $_POST['pw'] == $_POST['pw2']) {

    $con = mysql_connect($host, $user, $pw)or
            die('problemas al conectar server');

    mysql_select_db($db, $con)or
            die('Problemas al conectar a la base de datos');

    mysql_query("INSERT INTO tbUser (NOMBRE,USER,PW,EMAIL)"
            . "VALUES('$_POST[name]','$_POST[user]','$_POST[pw]','$_POST[email]')", $con);
//    $response = array("message" => 'Usuario registrado', "success" => true);
    header('Location: login.php');
} else {
//    $response = array("message" => 'Error, verifica todos los campos', "success" => false);
    echo 'Error';
}

//echo json_encode($response);
