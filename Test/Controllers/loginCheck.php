<?php

session_start();

require '../Models/conx.php';

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
$query = "SELECT * FROM Utilisateur WHERE Login = '$username' AND Pwd='$password'";
$params = array();
$options = array("Scrollable" => SQLSRV_CURSOR_KEYSET);
$result = sqlsrv_query($conn, $query, $params, $options);
$num = sqlsrv_num_rows($result);
if ($num == 1) {


    $_SESSION['valid_user'] = true;
    $_SESSION['username'] = $username;
    if ($rslt['Type_P'] == "ADMIN") {
        header('Location: ../Views/Administration.php');
        die();
    } else {
        header('Location: ../Views/Profil.php');
        die();
    }
} else {

    header('Location: ../Views/login.php');
    die();
}