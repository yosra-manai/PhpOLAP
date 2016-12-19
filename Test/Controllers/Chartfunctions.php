<?php

require '../Models/Connexion.php';

use phpOlap\Layout\Table\CsvTableLayout;

function ChartAccueil() {
    $resultSetRecru = connect()->statement("
    SELECT {[Measures].[Nombre Demissionné],[Measures].[Nombre Recruté]} ON COLUMNS,[Dim Date].[Année - Mois - Jour].[Année] ON ROWS FROM [Sagem]
    ");
    $fp = fopen('..\csv\Recru.csv', 'w');
    $csv = new CsvTableLayout($resultSetRecru);
    $res = $csv->generate();
    fputs($fp, $res);
    fclose($fp);
    $resultSetRemp = connect()->statement("WITH MEMBER [Measures].[Taux] AS '[Measures].[tauxRemplacement] * 100' 
    SELECT [Measures].[Taux] ON COLUMNS, [Dim Date].[Année - Mois - Jour].[Année] ON ROWS FROM [Sagem]
    ");
    $fp2 = fopen('..\csv\Remplacement.csv', 'w');
    $csv2 = new CsvTableLayout($resultSetRemp);
    $res2 = $csv2->generate();
    fputs($fp2, $res2);
    fclose($fp2);
    $resultSetDuree = connect()->statement("
    SELECT Crossjoin([Measures].[Durée],{[Date Entree].[Année - Mois - Jour].[Calendrier 2014]:[Date Entree].[Année - Mois - Jour].[Calendrier 2016]}) ON COLUMNS, [Dim Zone].[ZoneSpecifique].[SagemZone] ON ROWS FROM [Sagem] 
    ");
    $fp1 = fopen('..\csv\ES.csv', 'w');
    $csv1 = new CsvTableLayout($resultSetDuree);

    $res1 = $csv1->generate();
    fputs($fp1, $res1);
    fclose($fp1);
}

function ChartES() {
    $resultSetNbr = connect()->statement("
    SELECT CrossJoin([Measures].[Entree Sortie Nombre],Union([Dim Zone].[ZoneSpecifique].[SagemZone].&[2],[Dim Zone].[ZoneSpecifique].[SagemZone].&[5])) ON COLUMNS,[Dim Effectifs].[Entité].[Entité] ON ROWS FROM [Sagem]
    ");
    $fp1 = fopen('..\csv\ESNbr.csv', 'w');
    $csv1 = new CsvTableLayout($resultSetNbr);

    $res1 = $csv1->generate();
    fputs($fp1, $res1);
    fclose($fp1);

    $resultSetGRID = connect()->statement("
    SELECT CrossJoin([Measures].[Durée],[Dim Zone].[ZoneSpecifique].[SagemZone]) ON COLUMNS,[Dim Effectifs].[Matricule].[Matricule] ON ROWS FROM [Sagem]
    ");
    $handle = fopen('..\csv\ESGRID.csv', 'w');
    $Csv = new CsvTableLayout($resultSetGRID);

    $result = $Csv->generate();
    fputs($handle, $result);
    fclose($handle);
}

function ChartCongé() {

    $resultSetCongéGRID = connect()->statement("
    SELECT crossJoin([Measures].[Nbr Jour Congé],[Duj].[Année - Mois - Jour].[Calendrier 2013]:[Duj].[Année - Mois - Jour].[Calendrier 2016]) ON COLUMNS,crossjoin([Dim Effectifs].[Matricule].[Matricule],[Dim Effectifs].[Diplome].[Diplome]) ON ROWS FROM [Sagem]
    
    ");
    $fp1 = fopen('..\csv\CongeGRID.csv', 'w');
    $csv1 = new CsvTableLayout($resultSetCongéGRID);

    $res1 = $csv1->generate();
    fputs($fp1, $res1);
    fclose($fp1);
    $resultSetCongéPeriode = connect()->statement("
    SELECT {[Measures].[Nbr Accepté],[Measures].[Nbr Jour Congé]} ON COLUMNS,{[Duj].[Année - Mois - Jour].[Calendrier 2013]:[Duj].[Année - Mois - Jour].[Calendrier 2016]} ON ROWS FROM [Sagem]
    ");
    $fp2 = fopen('..\csv\Conge.csv', 'w');
    $csv2 = new CsvTableLayout($resultSetCongéPeriode);
    $res2 = $csv2->generate();
    fputs($fp2, $res2);
    fclose($fp2);
}

function ChartEmbauche() {
    $resultSet4 = connect()->statement("
    SELECT Crossjoin([Measures].[Nombre Recruté],[Dim Effectifs].[Entité].[Entité]) ON COLUMNS, [Dim Date].[Année - Mois - Jour].[Année] ON ROWS FROM [Sagem]
    
    ");
    $fp1 = fopen('..\csv\RepartionEmbauche.csv', 'w');
    $csv1 = new CsvTableLayout($resultSet4);

    $res1 = $csv1->generate();
    fputs($fp1, $res1);
    fclose($fp1);
    $resultSet5 = connect()->statement("WITH MEMBER [Measures].[Taux] AS '[Measures].[TauxRecrutement] * 100'
SELECT Union(Crossjoin({[Measures].[Nombre Recruté],[Measures].[Taux]}, [Dim Date].[Année - Mois - Jour].[Calendrier 2015]),Crossjoin({[Measures].[Nombre Recruté],[Measures].[Taux]},[Dim Date].[Année - Mois - Jour].[Calendrier 2016])) ON COLUMNS,[Dim Effectifs].[Entité].[Entité]  ON ROWS FROM [Sagem]
    
    ");
    $fp2 = fopen('..\csv\EmbaucheGRID.csv', 'w');
    $csv2 = new CsvTableLayout($resultSet5);

    $res2 = $csv2->generate();
    fputs($fp2, $res2);
    fclose($fp2);
    $resultSet6 = connect()->statement("WITH MEMBER [Measures].[Taux] AS '[Measures].[TauxRecrutement] * 100' 
    SELECT crossJoin([Measures].[Taux],[Dim Date].[Année - Mois - Jour].[Calendrier 2015]) ON COLUMNS,[Dim Effectifs].[Diplome].[Diplome] ON ROWS FROM [Sagem]
    
    ");
    $fp3 = fopen('..\csv\TauxRDiplome.csv', 'w');
    $csv3 = new CsvTableLayout($resultSet6);

    $res3 = $csv3->generate();
    fputs($fp3, $res3);
    fclose($fp3);
}

function ChartDepart() {
    $resultSet4 = connect()->statement("
    SELECT Crossjoin([Measures].[Nombre Demissionné],[Dim Depart].[Ufserv].[Ufserv]) ON COLUMNS, [Dim Date].[Année - Mois - Jour].[Année] ON ROWS FROM [Sagem]
    
    ");
    $fp = fopen('..\csv\RepartionDepart.csv', 'w');
    $csv1 = new CsvTableLayout($resultSet4);

    $res1 = $csv1->generate();
    fputs($fp, $res1);
    fclose($fp);
    $resultSet5 = connect()->statement("WITH MEMBER [Measures].[Taux] AS '[Measures].[TauxDepart] * 100'
    SELECT Union(Crossjoin({[Measures].[Nombre Demissionné],[Measures].[Taux]}, [Dim Date].[Année - Mois - Jour].[Calendrier 2015]),Crossjoin({[Measures].[Nombre Demissionné],[Measures].[Taux]},[Dim Date].[Année - Mois - Jour].[Calendrier 2016])) ON COLUMNS,[Dim Depart].[Ufserv].[Ufserv]  ON ROWS FROM [Sagem]
    
    ");
    $fp = fopen('..\csv\DepartGRID.csv', 'w');
    $csv2 = new CsvTableLayout($resultSet5);

    $res2 = $csv2->generate();
    fputs($fp, $res2);
    fclose($fp);
}

function ChartRetard() {
    $resultSet3 = connect()->statement("
    SELECT {[Measures].[Nbr Retardé],[Measures].[Nbr Absenté]} ON COLUMNS,{[Dim Date].[Année - Mois - Jour].[janvier 2015]:[Dim Date].[Année - Mois - Jour].[février 2016]} ON ROWS FROM [Sagem] 
    
    ");
    $fp = fopen('..\csv\EvolutionRetard.csv', 'w');
    $csv = new CsvTableLayout($resultSet3);

    $res = $csv->generate();
    fputs($fp, $res);
    fclose($fp);
}

function ChartAccPoin() {
    $resultSet = connect()->statement("
    SELECT CrossJoin([Measures].[Acc Poin],[Dim Date].[Jour De La Semaine].&[6]:[Dim Date].[Jour De La Semaine].&[7])ON COLUMNS,[Dim Effectifs].[Entité].[Entité]ON ROWS FROM [Sagem]
    
    ");
    $fp = fopen('..\csv\AccPoin.csv', 'w');
    $csv = new CsvTableLayout($resultSet);

    $res = $csv->generate();
    fputs($fp, $res);
    fclose($fp);
}

function ChartSupp() {

    $resultSetSuppGRID = connect()->statement("
    SELECT crossJoin([Measures].[Hrs Supp],[Dim Date].[Jour De La Semaine].&[6]:[Dim Date].[Jour De La Semaine].&[7],[Dim Date].[Année - Mois - Jour].[Calendrier 2016]) ON COLUMNS,[Dim Effectifs].[Matricule].[Matricule] ON ROWS FROM [Sagem]
    
    ");
    $fp1 = fopen('..\csv\SuppGRID.csv', 'w');
    $csv1 = new CsvTableLayout($resultSetSuppGRID);

    $res1 = $csv1->generate();
    fputs($fp1, $res1);
    fclose($fp1);
    $resultSetSuppPeriode = connect()->statement("
    SELECT CrossJoin([Measures].[Nbr Accepté HSupp],[Dim Effectifs].[Entité].[Entité])ON COLUMNS,[Dim Date].[Année - Mois - Jour].[Mois].&[2015-01-01T00:00:00]: [Dim Date].[Année - Mois - Jour].[Mois].&[2016-02-01T00:00:00]ON ROWS FROM [Sagem]
    ");
    $fp2 = fopen('..\csv\Supp.csv', 'w');
    $csv2 = new CsvTableLayout($resultSetSuppPeriode);
    $res2 = $csv2->generate();
    fputs($fp2, $res2);
    fclose($fp2);
    $resultSetTauxSupp = connect()->statement("WITH MEMBER [Measures].[Taux] AS '[Measures].[TauxTempsSupp] * 100'
    SELECT crossJoin([Measures].[Taux],[Dim Date].[Année - Mois - Jour].[Calendrier 2016]) ON COLUMNS,[Dim Effectifs].[Diplome].[Diplome] ON ROWS FROM [Sagem]
    ");
    $fp3 = fopen('..\csv\TauxSupp.csv', 'w');
    $csv3 = new CsvTableLayout($resultSetTauxSupp);
    $res3 = $csv3->generate();
    fputs($fp3, $res3);
    fclose($fp3);
}

?>
