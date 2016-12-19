<?php
require_once '../../autoload.php';

require '../Models/database.php';
use phpOlap\Layout\FlashMessages;


session_start();
if ($_SESSION['valid_user'] != true) {

    header('Location: login.php');
    die();
}

$msg = new FlashMessages();
$id = 0;
 if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
       
    }


if (!empty($_POST)) {
    // keep track post values
    $id = (int)$_POST['id'];
    
    // delete data
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "DELETE FROM Utilisateur WHERE PK_User = :PK_User";
    $q = $pdo->prepare($sql);
    $q->bindValue(':PK_User', $id, PDO::PARAM_INT);
    $q->execute();
    $msg->success('Utilisateur a été bien supprimé'); 
    $msg->display();
    Database::disconnect();
}
?>