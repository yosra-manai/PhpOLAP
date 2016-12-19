<?php

$dbName = 'SagemDW';

$dbHost = 'localhost';

$dbUsername = 'user-PC\user';

/* $dbUserPassword = 'admin'; */

$connectionInfo = array("Database" => "SagemDW", "CharacterSet" => "UTF-8");
$conn = sqlsrv_connect($dbHost, $connectionInfo);

/*
  if( $conn ) {
  echo "Connexion établie.<br />";
  }else{
  echo "La connexion n'a pu être établie.<br />";
  die( print_r( sqlsrv_errors(), true));
  }
 */
?>

