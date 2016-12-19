<?php
require '../Models/Connexion.php';
session_start();
if ($_SESSION['valid_user'] != true) {

    header('Location: login.php');
    die();
}
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Portail | SagemCom</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Augment Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- Bootstrap Core CSS -->
        <link href="../css/bootstrap.min.css" rel='stylesheet' type='text/css' />
        <!-- Custom CSS -->
        <link href="../css/style.css" rel='stylesheet' type='text/css' />
        <!-- Graph CSS -->
        <link href="../css/font-awesome.css" rel="stylesheet"> 
        <!-- jQuery -->
        <link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
        <!-- lined-icons -->
        <link rel="stylesheet" href="../css/icon-font.min.css" type='text/css' />
        <!-- //lined-icons -->

        <script type="text/javascript" src="../js/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="../jqwidgets-ver3.9.1/jqxcore.js"></script>
        <script type="text/javascript" src="../jqwidgets-ver3.9.1/jqxdraw.js"></script>
        <script type="text/javascript" src="../jqwidgets-ver3.9.1/jqxchart.core.js"></script>
        <script type="text/javascript" src="../jqwidgets-ver3.9.1/jqxdata.js"></script>
        <script type="text/javascript" src="../jqwidgets-ver3.9.1/jqxbuttons.js"></script>
        <script type="text/javascript" src="../jqwidgets-ver3.9.1/jqxmenu.js"></script>
        <script type="text/javascript" src="../jqwidgets-ver3.9.1/jqxlistbox.js"></script>
        <script type="text/javascript" src="../jqwidgets-ver3.9.1/jqxdropdownlist.js"></script>
        <script type="text/javascript" src="../jqwidgets-ver3.9.1/jqxgrid.js"></script>
        <script type="text/javascript" src="../jqwidgets-ver3.9.1/jqxgrid.selection.js"></script>
        <script type="text/javascript" src="../jqwidgets-ver3.9.1/jqxgrid.pager.js"></script>
        <script type="text/javascript" src="../jqwidgets-ver3.9.1/jqxgrid.filter.js"></script>
        <script type="text/javascript" src="../jqwidgets-ver3.9.1/jqxcheckbox.js"></script>
        <script type="text/javascript" src="../jqwidgets-ver3.9.1/jqxrangeselector.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                // prepare the data
                var source =
                        {
                            datatype: "csv",
                            datafields: [
                                {name: 'Field1'},
                                {name: 'Field2'}
                            ],
                            url: '../csv/ChartSpecifique.csv'
                        };
                var dataAdapter = new $.jqx.dataAdapter(source);
                // prepare jqxChart settings
                var settings = {
                    title: "Chart Spécifique",
                    description: "------",
                    enableAnimations: true,
                    showLegend: true,
                    padding: {left: 15, top: 5, right: 20, bottom: 5},
                    titlePadding: {left: 10, top: 0, right: 0, bottom: 10},
                    source: dataAdapter,
                    xAxis:
                            {
                                dataField: 'Field1',
                                valuesOnTicks: true
                            },
                    colorScheme: 'scheme02',
                    seriesGroups:
                            [
                                {
                                    alignEndPointsWithIntervals: false,
                                    type: 'splinearea',
                                    series: [
                                        {dataField: 'Field2', opacity: 0.7}

                                    ]
                                }

                            ]
                };
                // setup the chart
                $('#chart').jqxChart(settings);
            });
        </script>
    </head> 
    <body>
        <div class="page-container">
            <!--/content-inner-->
            <div class="left-content">
                <div class="inner-content">
                    <!-- header-starts -->
                    <div class="header-section">
                        <!--menu-right-->
                        <div class="top_menu">

                            <!--/profile_details-->
                            <div class="profile_details_left">
                                <ul class="nofitications-dropdown">



                                    <li class="dropdown note">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell-o"></i> </a>


                                    </li>	
                                    <li class="dropdown note">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i> </a>

                                    </li>		   							   		
                                    <div class="clearfix"></div>	
                                </ul>
                            </div>
                            <div class="clearfix"></div>	
                            <!--//profile_details-->
                        </div>
                        <!--//menu-right-->
                        <div class="clearfix"></div>
                    </div>

                    <!-- //header-ends -->
                    <!--//outer-wp-->
                    <div class="outter-wp">
                        <!--/sub-heard-part-->
                        <div class="sub-heard-part">
                            <ol class="breadcrumb m-b-0">
                                <li><a href="index.html">Accueil</a></li>
                                <li class="active">Rapport </li>
                            </ol>
                        </div>	
                        <!--/sub-heard-part-->
                        <!--/forms-->
                        <div class="forms-main"> 





                            <!--/forms-inner-->
                            <div class="forms-inner">
                                <!--/set-1-->

                                <div class="set-1">
                                    <div class="graph-2 general">
                                        <h2 class="inner-tittle two">Formulaire de rapport</h2>

                                        <div class="grid-1">
                                            <div class="form-body" >
                                                <form class="form-horizontal" method="post" action=../Controllers/Query.php >
                                                    <div class="form-group">
                                                        <label for="selector1" class="col-sm-2 control-label" >Cube</label>
                                                        <div class="col-sm-8"><select name="selector1" id="selector1" class="form-control1">
                                                                <option><?php $cube = connect()->findOneCube(null, array('CUBE_NAME' => 'Sagem'));
echo $cube->getName()
?></option>
                                                            </select></div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="selector1" class="col-sm-2 control-label" >Colonnes</label>
                                                        <div class="col-sm-8"><select name="colonne" id="selector2" class="form-control1">
                                                                <?php foreach ($cube->getMeasures() as $measure): ?>
                                                                    <option value="<?php echo "[Measures]" . ".[" . $measure->getCaption() . "]" ?>" ><?php echo "[Measures]" . ".[" . $measure->getCaption() . "]" ?>
                                                                    <?php endforeach; ?>
                                                            </select></div>
                                                    </div>


                                                    <div class="form-group">

                                                        <label for="selector1" class="col-sm-2 control-label" >Lignes</label>
                                                        <div class="col-sm-8"><select name="ligne" disabled="true" id="selector3" class="form-control1">
                                                                <option value="">--</option>
                                                                <option class="[Measures].[Acc Poin] [Measures].[Nombre Recruté] [Measures].[Hrs Supp] [Measures].[Nbr Accepté HSupp] [Measures].[TauxTempsSupp] [Measures].[TauxRecrutement] [Measures].[Nbr Absenté] [Measures].[Nbr Hrs Absence] [Measures].[Nbr Retardé] [Measures].[TauxAbsenteisme] [Measures].[tauxRemplacement] [Measures].[Nombre Demissionné] [Measures].[TauxDepart]">[Dim Date].[Année - Mois - Jour].[Année]</option>
                                                                <option class="[Measures].[Acc Poin] [Measures].[Nombre Recruté] [Measures].[Hrs Supp] [Measures].[Nbr Accepté HSupp] [Measures].[TauxTempsSupp] [Measures].[TauxRecrutement] [Measures].[Nbr Absenté] [Measures].[Nbr Hrs Absence] [Measures].[Nbr Retardé] [Measures].[TauxAbsenteisme] [Measures].[tauxRemplacement] [Measures].[Nombre Demissionné] [Measures].[TauxDepart]">[Dim Date].[Année - Mois - Jour].[Mois]</option>
                                                                <option class="[Measures].[Acc Poin] [Measures].[Nombre Recruté] [Measures].[Hrs Supp] [Measures].[Nbr Accepté HSupp] [Measures].[TauxTempsSupp] [Measures].[TauxRecrutement] [Measures].[Nbr Absenté] [Measures].[Nbr Hrs Absence] [Measures].[Nbr Retardé] [Measures].[TauxAbsenteisme] [Measures].[tauxRemplacement] [Measures].[Nombre Demissionné] [Measures].[TauxDepart]">[Dim Date].[Année - Mois - Jour].[Jour]</option>
                                                                <option class="[Measures].[Acc Poin] [Measures].[Nombre Recruté] [Measures].[Hrs Supp] [Measures].[Nbr Accepté HSupp] [Measures].[TauxTempsSupp] [Measures].[TauxRecrutement] [Measures].[Nbr Absenté] [Measures].[Nbr Hrs Absence] [Measures].[Nbr Retardé] [Measures].[TauxAbsenteisme] [Measures].[tauxRemplacement] [Measures].[Nombre Demissionné] [Measures].[TauxDepart]">[Dim Date].[Jour De La Semaine].[Jour De La Semaine]</option>
                                                                <option class="[Measures].[Acc Poin] [Measures].[Nombre Recruté] [Measures].[Hrs Supp] [Measures].[Nbr Accepté HSupp] [Measures].[TauxTempsSupp] [Measures].[TauxRecrutement] [Measures].[Nbr Absenté] [Measures].[Nbr Hrs Absence] [Measures].[Nbr Retardé] [Measures].[TauxAbsenteisme] [Measures].[tauxRemplacement] [Measures].[Nombre Demissionné] [Measures].[TauxDepart]">[Dim Date].[Année - Semaine - Jour].[Année]</option>
                                                                <option class="[Measures].[Acc Poin] [Measures].[Nombre Recruté] [Measures].[Hrs Supp] [Measures].[Nbr Accepté HSupp] [Measures].[TauxTempsSupp] [Measures].[TauxRecrutement] [Measures].[Nbr Absenté] [Measures].[Nbr Hrs Absence] [Measures].[Nbr Retardé] [Measures].[TauxAbsenteisme] [Measures].[tauxRemplacement] [Measures].[Nombre Demissionné] [Measures].[TauxDepart]">[Dim Date].[Année - Semaine - Jour].[Semaine]</option>
                                                                <option class="[Measures].[Acc Poin] [Measures].[Nombre Recruté] [Measures].[Hrs Supp] [Measures].[Nbr Accepté HSupp] [Measures].[TauxTempsSupp] [Measures].[TauxRecrutement] [Measures].[Nbr Absenté] [Measures].[Nbr Hrs Absence] [Measures].[Nbr Retardé] [Measures].[TauxAbsenteisme] [Measures].[tauxRemplacement] [Measures].[Nombre Demissionné] [Measures].[TauxDepart]">[Dim Date].[Année - Semaine - Jour].[Jour]</option>
                                                                <option class="[Measures].[Acc Poin] [Measures].[Nombre Recruté] [Measures].[Hrs Supp] [Measures].[Nbr Accepté HSupp] [Measures].[TauxTempsSupp] [Measures].[TauxRecrutement] [Measures].[Nbr Absenté] [Measures].[Nbr Hrs Absence] [Measures].[Nbr Retardé] [Measures].[TauxAbsenteisme] [Measures].[tauxRemplacement] [Measures].[Nombre Demissionné] [Measures].[TauxDepart]">[Dim Date].[Année - Semestre - Trimestre - Mois - Jour].[Année]</option>
                                                                <option class="[Measures].[Acc Poin] [Measures].[Nombre Recruté] [Measures].[Hrs Supp] [Measures].[Nbr Accepté HSupp] [Measures].[TauxTempsSupp] [Measures].[TauxRecrutement] [Measures].[Nbr Absenté] [Measures].[Nbr Hrs Absence] [Measures].[Nbr Retardé] [Measures].[TauxAbsenteisme] [Measures].[tauxRemplacement] [Measures].[Nombre Demissionné] [Measures].[TauxDepart]">[Dim Date].[Année - Semestre - Trimestre - Mois - Jour].[Semestre]</option>
                                                                <option class="[Measures].[Acc Poin] [Measures].[Nombre Recruté][Measures].[Hrs Supp] [Measures].[Nbr Accepté HSupp] [Measures].[TauxTempsSupp] [Measures].[TauxRecrutement] [Measures].[Nbr Absenté] [Measures].[Nbr Hrs Absence] [Measures].[Nbr Retardé] [Measures].[TauxAbsenteisme] [Measures].[tauxRemplacement] [Measures].[Nombre Demissionné] [Measures].[TauxDepart]">[Dim Date].[Année - Semestre - Trimestre - Mois - Jour].[Trimestre]</option>
                                                                <option class="[Measures].[Acc Poin] [Measures].[Nombre Recruté] [Measures].[Hrs Supp] [Measures].[Nbr Accepté HSupp] [Measures].[TauxTempsSupp] [Measures].[TauxRecrutement] [Measures].[Nbr Absenté] [Measures].[Nbr Hrs Absence] [Measures].[Nbr Retardé] [Measures].[TauxAbsenteisme] [Measures].[tauxRemplacement] [Measures].[Nombre Demissionné] [Measures].[TauxDepart]">[Dim Date].[Année - Semestre - Trimestre - Mois - Jour].[Mois]</option>
                                                                <option class="[Measures].[Acc Poin] [Measures].[Nombre Recruté] [Measures].[Hrs Supp] [Measures].[Nbr Accepté HSupp] [Measures].[TauxTempsSupp] [Measures].[TauxRecrutement] [Measures].[Nbr Absenté] [Measures].[Nbr Hrs Absence] [Measures].[Nbr Retardé] [Measures].[TauxAbsenteisme] [Measures].[tauxRemplacement] [Measures].[Nombre Demissionné] [Measures].[TauxDepart]">[Dim Date].[Année - Semestre - Trimestre - Mois - Jour].[Jour]</option>
                                                                <option class="[Measures].[Acc Poin] [Measures].[Nombre Recruté] [Measures].[Hrs Supp] [Measures].[Nbr Accepté HSupp] [Measures].[TauxTempsSupp] [Measures].[TauxRecrutement] [Measures].[Nbr Absenté] [Measures].[Nbr Hrs Absence] [Measures].[Nbr Retardé] [Measures].[TauxAbsenteisme] [Measures].[tauxRemplacement] [Measures].[Nbr Accepté] [Measures].[Nbr Jour Congé] [Measures].[Durée] [Measures].[Entree Sortie Nombre]">[Dim Effectifs].[Diplome].[Diplome]</option>
                                                                <option class="[Measures].[Acc Poin] [Measures].[Nombre Recruté] [Measures].[Hrs Supp] [Measures].[Nbr Accepté HSupp] [Measures].[TauxTempsSupp] [Measures].[TauxRecrutement] [Measures].[Nbr Absenté] [Measures].[Nbr Hrs Absence] [Measures].[Nbr Retardé] [Measures].[TauxAbsenteisme] [Measures].[tauxRemplacement] [Measures].[Nbr Accepté] [Measures].[Nbr Jour Congé] [Measures].[Durée] [Measures].[Entree Sortie Nombre]">[Dim Effectifs].[Effectif].[Effectif]</option>
                                                                <option class="[Measures].[Acc Poin] [Measures].[Nombre Recruté] [Measures].[Hrs Supp] [Measures].[Nbr Accepté HSupp] [Measures].[TauxTempsSupp] [Measures].[TauxRecrutement] [Measures].[Nbr Absenté] [Measures].[Nbr Hrs Absence] [Measures].[Nbr Retardé] [Measures].[TauxAbsenteisme] [Measures].[tauxRemplacement] [Measures].[Nbr Accepté] [Measures].[Nbr Jour Congé] [Measures].[Durée] [Measures].[Entree Sortie Nombre]">[Dim Effectifs].[Entité].[Entité]</option>
                                                                <option class="[Measures].[Acc Poin] [Measures].[Nombre Recruté] [Measures].[Hrs Supp] [Measures].[Nbr Accepté HSupp] [Measures].[TauxTempsSupp] [Measures].[TauxRecrutement] [Measures].[Nbr Absenté] [Measures].[Nbr Hrs Absence] [Measures].[Nbr Retardé] [Measures].[TauxAbsenteisme] [Measures].[tauxRemplacement] [Measures].[Nbr Accepté] [Measures].[Nbr Jour Congé] [Measures].[Durée] [Measures].[Entree Sortie Nombre]">[Dim Effectifs].[Matricule].[Matricule]</option>
                                                                <option class="[Measures].[Acc Poin] [Measures].[Nombre Recruté] [Measures].[Hrs Supp] [Measures].[Nbr Accepté HSupp] [Measures].[TauxTempsSupp] [Measures].[TauxRecrutement] [Measures].[Nbr Absenté] [Measures].[Nbr Hrs Absence] [Measures].[Nbr Retardé] [Measures].[TauxAbsenteisme] [Measures].[tauxRemplacement] [Measures].[Nbr Accepté] [Measures].[Nbr Jour Congé] [Measures].[Durée] [Measures].[Entree Sortie Nombre]">[Dim Effectifs].[Nomprenom].[Nomprenom]</option>

                                                                <option class="[Measures].[Nombre Demissionné] [Measures].[TauxDepart]">[Dim Depart].[Matricule].[Matricule]</option>
                                                                <option class="[Measures].[Nombre Demissionné] [Measures].[TauxDepart]">[Dim Depart].[Ufserv].[Ufserv]</option>

                                                                <option class="[Measures].[Nbr Accepté] [Measures].[Nbr Jour Congé]">[Auj].[Année - Mois - Jour].[Année]</option>
                                                                <option class="[Measures].[Nbr Accepté] [Measures].[Nbr Jour Congé]">[Auj].[Année - Mois - Jour].[Mois]</option>
                                                                <option class="[Measures].[Nbr Accepté] [Measures].[Nbr Jour Congé]">[Auj].[Année - Mois - Jour].[Jour]</option>
                                                                <option class="[Measures].[Nbr Accepté] [Measures].[Nbr Jour Congé]">[Auj].[Jour De La Semaine].[Jour De La Semaine]</option>
                                                                <option class="[Measures].[Nbr Accepté] [Measures].[Nbr Jour Congé]">[Auj].[Année - Semaine - Jour].[Année]</option>
                                                                <option class="[Measures].[Nbr Accepté] [Measures].[Nbr Jour Congé]">[Auj].[Année - Semaine - Jour].[Semaine]</option>
                                                                <option class="[Measures].[Nbr Accepté] [Measures].[Nbr Jour Congé]">[Auj].[Année - Semaine - Jour].[Jour]</option>
                                                                <option class="[Measures].[Nbr Accepté] [Measures].[Nbr Jour Congé]">[Auj].[Année - Semestre - Trimestre - Mois - Jour].[Année]</option>
                                                                <option class="[Measures].[Nbr Accepté] [Measures].[Nbr Jour Congé]">[Auj].[Année - Semestre - Trimestre - Mois - Jour].[Semestre]</option>
                                                                <option class="[Measures].[Nbr Accepté] [Measures].[Nbr Jour Congé]">[Auj].[Année - Semestre - Trimestre - Mois - Jour].[Trimestre]</option>
                                                                <option class="[Measures].[Nbr Accepté] [Measures].[Nbr Jour Congé]">[Auj].[Année - Semestre - Trimestre - Mois - Jour].[Mois]</option>
                                                                <option class="[Measures].[Nbr Accepté] [Measures].[Nbr Jour Congé]">[Auj].[Année - Semestre - Trimestre - Mois - Jour].[Jour]</option>
                                                                <option class="[Measures].[Nbr Accepté] [Measures].[Nbr Jour Congé]">[Duj].[Année - Mois - Jour].[Année]</option>
                                                                <option class="[Measures].[Nbr Accepté] [Measures].[Nbr Jour Congé]">[Duj].[Année - Mois - Jour].[Mois]</option>
                                                                <option class="[Measures].[Nbr Accepté] [Measures].[Nbr Jour Congé]">[Duj].[Année - Mois - Jour].[Jour]</option>
                                                                <option class="[Measures].[Nbr Accepté] [Measures].[Nbr Jour Congé]">[Duj].[Jour De La Semaine].[Jour De La Semaine]</option>
                                                                <option class="[Measures].[Nbr Accepté] [Measures].[Nbr Jour Congé]">[Duj].[Année - Semaine - Jour].[Année]</option>
                                                                <option class="[Measures].[Nbr Accepté] [Measures].[Nbr Jour Congé]">[Duj].[Année - Semaine - Jour].[Semaine]</option>
                                                                <option class="[Measures].[Nbr Accepté] [Measures].[Nbr Jour Congé]">[Duj].[Année - Semaine - Jour].[Jour]</option>
                                                                <option class="[Measures].[Nbr Accepté] [Measures].[Nbr Jour Congé]">[Duj].[Année - Semestre - Trimestre - Mois - Jour].[Année]</option>
                                                                <option class="[Measures].[Nbr Accepté] [Measures].[Nbr Jour Congé]">[Duj].[Année - Semestre - Trimestre - Mois - Jour].[Semestre]</option>
                                                                <option class="[Measures].[Nbr Accepté] [Measures].[Nbr Jour Congé]">[Duj].[Année - Semestre - Trimestre - Mois - Jour].[Trimestre]</option>
                                                                <option class="[Measures].[Nbr Accepté] [Measures].[Nbr Jour Congé]">[Duj].[Année - Semestre - Trimestre - Mois - Jour].[Mois]</option>
                                                                <option class="[Measures].[Nbr Accepté] [Measures].[Nbr Jour Congé]">[Duj].[Année - Semestre - Trimestre - Mois - Jour].[Jour]</option>

                                                                <option class="[Measures].[Durée] [Measures].[Entree Sortie Nombre]">[Date Entree].[Année - Mois - Jour].[Année]</option>
                                                                <option class="[Measures].[Durée] [Measures].[Entree Sortie Nombre]">[Date Entree].[Année - Mois - Jour].[Mois]</option>
                                                                <option class="[Measures].[Durée] [Measures].[Entree Sortie Nombre]">[Date Entree].[Année - Mois - Jour].[Jour]</option>
                                                                <option class="[Measures].[Durée] [Measures].[Entree Sortie Nombre]">[Date Entree].[Jour De La Semaine].[Jour De La Semaine]</option>
                                                                <option class="[Measures].[Durée] [Measures].[Entree Sortie Nombre]">[Date Entree].[Année - Semaine - Jour].[Année]</option>
                                                                <option class="[Measures].[Durée] [Measures].[Entree Sortie Nombre]">[Date Entree].[Année - Semaine - Jour].[Semaine]</option>
                                                                <option class="[Measures].[Durée] [Measures].[Entree Sortie Nombre]">[Date Entree].[Année - Semaine - Jour].[Jour]</option>
                                                                <option class="[Measures].[Durée] [Measures].[Entree Sortie Nombre]">[Date Entree].[Année - Semestre - Trimestre - Mois - Jour].[Année]</option>
                                                                <option class="[Measures].[Durée] [Measures].[Entree Sortie Nombre]">[Date Entree].[Année - Semestre - Trimestre - Mois - Jour].[Semestre]</option>
                                                                <option class="[Measures].[Durée] [Measures].[Entree Sortie Nombre]">[Date Entree].[Année - Semestre - Trimestre - Mois - Jour].[Trimestre]</option>
                                                                <option class="[Measures].[Durée] [Measures].[Entree Sortie Nombre]">[Date Entree].[Année - Semestre - Trimestre - Mois - Jour].[Mois]</option>
                                                                <option class="[Measures].[Durée] [Measures].[Entree Sortie Nombre]">[Date Entree].[Année - Semestre - Trimestre - Mois - Jour].[Jour]</option>
                                                                <option class="[Measures].[Durée] [Measures].[Entree Sortie Nombre]">[Date Sortie].[Année - Mois - Jour].[Année]</option>
                                                                <option class="[Measures].[Durée] [Measures].[Entree Sortie Nombre]">[Date Sortie].[Année - Mois - Jour].[Mois]</option>
                                                                <option class="[Measures].[Durée] [Measures].[Entree Sortie Nombre]">[Date Sortie].[Année - Mois - Jour].[Jour]</option>
                                                                <option class="[Measures].[Durée] [Measures].[Entree Sortie Nombre]">[Date Sortie].[Jour De La Semaine].[Jour De La Semaine]</option>
                                                                <option class="[Measures].[Durée] [Measures].[Entree Sortie Nombre]">[Date Sortie].[Année - Semaine - Jour].[Année]</option>
                                                                <option class="[Measures].[Durée] [Measures].[Entree Sortie Nombre]">[Date Sortie].[Année - Semaine - Jour].[Semaine]</option>
                                                                <option class="[Measures].[Durée] [Measures].[Entree Sortie Nombre]">[Date Sortie].[Année - Semaine - Jour].[Jour]</option>
                                                                <option class="[Measures].[Durée] [Measures].[Entree Sortie Nombre]">[Date Sortie].[Année - Semestre - Trimestre - Mois - Jour].[Année]</option>
                                                                <option class="[Measures].[Durée] [Measures].[Entree Sortie Nombre]">[Date Sortie].[Année - Semestre - Trimestre - Mois - Jour].[Semestre]</option>
                                                                <option class="[Measures].[Durée] [Measures].[Entree Sortie Nombre]">[Date Sortie].[Année - Semestre - Trimestre - Mois - Jour].[Trimestre]</option>
                                                                <option class="[Measures].[Durée] [Measures].[Entree Sortie Nombre]">[Date Sortie].[Année - Semestre - Trimestre - Mois - Jour].[Mois]</option>
                                                                <option class="[Measures].[Durée] [Measures].[Entree Sortie Nombre]">[Date Sortie].[Année - Semestre - Trimestre - Mois - Jour].[Jour]</option>
                                                                <option class="[Measures].[Durée] [Measures].[Entree Sortie Nombre]">[Dim Zone].[ZoneSpecifique].[SagemZone]</option>

                                                            </select></div>
                                                    </div>

                                                    <script src="../js/jquery.chained.js" type="text/javascript" charset="utf-8"></script>
                                                    <script type="text/javascript" charset="utf-8">
$(function () {
$("#selector3").chained("#selector2");
});</script>

                                                    <div class="submit" ><input type="submit" value="Générer " ></div>
                                                </form>


                                            </div>


                                        </div>
                                    </div>

                                </div>

                                <!--//forms-inner-->
                                <div class="candile"> 
                                    <div class="candile-inner">
                                        <div id='chart' style="width:1000px; height:400px"></div>
                                    </div>

                                </div>
                            </div>

                        </div> 

                        <!--//forms-->	
                        <div class="clearfix"></div>  

                    </div>
                    <!--//outer-wp-->


                    <!--footer section start-->
                    <footer>
                        <p>&copy 2016 Sagemcom . Tous les droits sont réservés </a></p>
                    </footer>
                    <!--footer section end-->
                </div>
            </div>
            <!--//content-inner-->
            <!--/sidebar-menu-->
            <div class="sidebar-menu">
                <header class="logo">
                    <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="accueil.php"> <span id="logo"> <h1>Portail</h1></span> 
                            <!--<img id="logo" src="" alt="Logo"/>--> 
                    </a> 
                </header>
                <div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
                <!--/down-->
                <div class="down">	
                    <a href="accueil.php"><img src="../images/ad.png"></a>

                    <ul>
                        <li><a class="tooltips" href="Profil.php"><span>Profil</span><i class="lnr lnr-user"></i></a></li>
                        <li><a class="tooltips" href="Administration.php"><span>Configuration</span><i class="lnr lnr-cog"></i></a></li>
                        <li><a class="tooltips" href="../Controllers/logout.php"><span>Déconnecter</span><i class="lnr lnr-power-switch"></i></a></li>
                    </ul>
                </div>
                <!--//down-->
                <div class="menu">
                    <ul id="menu" >
                        <li><a href="accueil.php"><i class="fa fa-tachometer"></i> <span>Tableau de bord</span></a></li>
                        <li id="menu-academico" ><a href="#"><i class="fa fa-table"></i><span>Modules</span> <span class="fa fa-angle-right" style="float: right"></span></a>
                            <ul id="menu-academico-sub" >
                                <li id="menu-academico-avaliacoes" ><a href="SuiviEmbauche.php">Suivi de l'embauche </a></li>
                                <li id="menu-academico-boletim" ><a href="SuiviAbsenteisme.php">Suivi de l'absentéisme</a></li>
                                <li id="menu-academico-avaliacoes" ><a href="SuiviES.php">Suivi de E/S</a></li>
                                <li id="menu-academico-avaliacoes" ><a href="SuiviSupp.php">Suivi du temps supplémentaire</a></li>
                                <li id="menu-academico-avaliacoes" ><a href="SuiviConge.php">Suivi du congés</a></li>
                                <li id="menu-academico-avaliacoes" ><a href="SuiviDepart.php">Suivi du depart</a></li>

                            </ul>
                        </li>
                        <li id="menu-academico" ><a href="Formulaire.php"><i class="fa fa-file-text-o"></i> <span>Rapport personnalisé</span> </a>

                        </li>
                        <li><a href="Administration.php"><i class="lnr lnr-pencil"></i> <span>Administration</span></a></li>


                    </ul>
                </div>
            </div>
            <div class="clearfix"></div>		
        </div>
        <script>
            var toggle = true;

            $(".sidebar-icon").click(function () {
                if (toggle)
                {
                    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
                    $("#menu span").css({"position": "absolute"});
                }
                else
                {
                    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
                    setTimeout(function () {
                        $("#menu span").css({"position": "relative"});
                    }, 400);
                }

                toggle = !toggle;
            });
        </script>
        <!--js -->
        <script src="../js/jquery.nicescroll.js"></script>
        <script src="../js/scripts.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>
    </body>
</html>

