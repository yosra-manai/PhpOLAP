<?php

require '../Models/Connexion.php';

use phpOlap\Mdx\Query;
use phpOlap\Layout\Table\CsvTableLayout;

$colonne = $_REQUEST['colonne'];
$ligne = $_REQUEST['ligne'];

$query = new Query("[Sagem]");
$query->addElement("$colonne", "COL");
$query->addElement("$ligne ", "ROW");

$requete = $query->toMdx();

$resultSet = connect()->statement("$requete");
$fp = fopen('..\csv\ChartSpecifique.csv', 'w');
$csv = new CsvTableLayout($resultSet);
$res = $csv->generate();
fputs($fp, $res);
fclose($fp);

header('Location: ../Views/Formulaire.php');
