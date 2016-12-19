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
$id = null;
if (!empty($_GET['id'])) {
    $id = $_REQUEST['id'];
    
}
if (!empty($_POST)) {
    
    // keep track post values
    $role = $_POST['role'];
    $id = (int)$_POST['id'];
    
   
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "UPDATE Utilisateur SET Type_P = :Type_P WHERE PK_User = :PK_User";
        $q = $pdo->prepare($sql);
        $q->bindValue(':Type_P',  $role, PDO::PARAM_STR);
        $q->bindValue(':PK_User', $id, PDO::PARAM_INT);
        $q->execute();
        $msg->success('Le Role a été bien modifié'); 
        $msg->display();
        Database::disconnect();
      
    
} 
?>