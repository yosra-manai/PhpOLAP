<?php

$name = "";

$queryCondition = "";
if (!empty($_POST["search"])) {
    foreach ($_POST["search"] as $k => $v) {
        if (!empty($v)) {
            $queryCases = array("name");

            switch ($k) {
                case "name":
                    $name = $v;
                    $queryCondition .= $v;
                    break;
            }
        }
    }
}

$orderby = " ORDER BY PK_User DESC";
$sql2 = "SELECT * FROM Utilisateur where Nom LIKE '" . $queryCondition . "%'ORDER BY PK_User DESC ";

$start = 0;
$limit = 5;
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $start = ($id - 1) * $limit;
} else {
    $id = 1;
}

?>