<?php
require '../Controllers/Chartfunctions.php';
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
        <link rel="stylesheet" href="../jqwidgets-ver3.9.1/jqwidgets/styles/jqx.base.css" type="text/css" />
        <script type="text/javascript" src="../js/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="../jqwidgets-ver3.9.1/jqxcore.js"></script>
        <script type="text/javascript" src="../jqwidgets-ver3.9.1/jqxdraw.js"></script>
        <script type="text/javascript" src="../jqwidgets-ver3.9.1/jqxchart.core.js"></script>
        <script type="text/javascript" src="../jqwidgets-ver3.9.1/jqxdata.js"></script>
        <script type="text/javascript" src="../jqwidgets-ver3.9.1/jqxbuttons.js"></script>
        <script type="text/javascript" src="../jqwidgets-ver3.9.1/jqxscrollbar.js"></script>
        <script type="text/javascript" src="../jqwidgets-ver3.9.1/jqxmenu.js"></script>
        <script type="text/javascript" src="../jqwidgets-ver3.9.1/jqxgrid.js"></script>
        <script type="text/javascript" src="../jqwidgets-ver3.9.1/jqxgrid.edit.js"></script>
        <script type="text/javascript" src="../jqwidgets-ver3.9.1/jqxgrid.selection.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                var source2 =
                        {
                            datatype: "csv",
                            datafields: [
                                {name: 'Entité', type: 'string'},
                                {name: 'Nbr recruté 2015', type: 'int'},
                                {name: 'Taux recrutement 2015', type: 'float'},
                                {name: 'Nbr recruté 2016', type: 'int'},
                                {name: 'Taux recrutement 2016', type: 'float'}
                            ],
                            url: '../csv/EmbaucheGRID.csv'

                        };
                var dataAdapter2 = new $.jqx.dataAdapter(source2);

                $("#jqxgrid").jqxGrid(
                        {
                            width: 600,
                            height: 400,
                            source: dataAdapter2,
                            selectionmode: 'singlecell',
                            columns: [
                                {text: 'Entité', datafield: 'Entité', width: '30%'},
                                {text: 'Nbr recruté 2015', datafield: 'Nbr recruté 2015', width: '15%'},
                                {text: 'Taux recrutement 2015', datafield: 'Taux recrutement 2015', width: '20%', cellsformat: 'p2'},
                                {text: 'Nbr recruté 2016', datafield: 'Nbr recruté 2016', width: '15%'},
                                {text: 'Taux recrutement 2016', datafield: 'Taux recrutement 2016', width: '20%', cellsformat: 'p2'}

                            ]
                        });
                var sourceRemp =
                        {
                            datatype: "csv",
                            datafields: [
                                {name: 'Diplome', type: 'string'},
                                {name: 'tauxRecrutement 2015', type: 'float'}
                            ],
                            url: '../csv/TauxRDiplome.csv'
                        };
                var dataAdapterRemp = new $.jqx.dataAdapter(sourceRemp, {async: false, autoBind: true, loadError: function (xhr, status, error) {
                        alert('Error loading "' + sourceRemp.url + '" : ' + error);
                    }});
                // prepare jqxChart settings
                var settings = {
                    title: "Taux de Recrutement par Diplome  ",
                    description: "Le diplome le plus recruté  en 2015",
                    enableAnimations: true,
                    showLegend: false,
                    showBorderLine: true,
                    legendPosition: {left: 520, top: 140, width: 100, height: 100},
                    padding: {left: 5, top: 5, right: 5, bottom: 5},
                    titlePadding: {left: 0, top: 0, right: 0, bottom: 10},
                    source: dataAdapterRemp,
                    colorScheme: 'scheme02',
                    seriesGroups:
                            [
                                {
                                    type: 'pie',
                                    showLabels: true,
                                    series:
                                            [
                                                {
                                                    dataField: 'tauxRecrutement 2015',
                                                    displayText: 'Diplome',
                                                    labelRadius: 120,
                                                    initialAngle: 15,
                                                    radius: 170,
                                                    centerOffset: 0,
                                                    formatSettings: {sufix: '%', decimalPlaces: 2}
                                                }
                                            ]
                                }
                            ]
                };
                // setup the chart
                $('#chartTauxRDiplome').jqxChart(settings);
                // prepare chart data as an array
                var source1 =
                        {
                            datatype: "csv",
                            datafields: [
                                {name: 'Année'},
                                {name: 'NbrRecruté Achat'},
                                {name: 'NbrRecruté ADT'},
                                {name: 'NbrRecruté AQF'},
                                {name: 'NbrRecruté ATR'},
                                {name: 'NbrRecruté Cellules Divers Prestation Sieges'},
                                {name: 'NbrRecruté Comptabilité Contrôle de gestion'},
                                {name: 'NbrRecruté Contrôle Inerne'},
                                {name: 'NbrRecruté Dev des moyens'},
                                {name: 'NbrRecruté Dev TEST ATR'},
                                {name: 'NbrRecruté Dev TEST DECODEUR'},
                                {name: 'NbrRecruté direction'},
                                {name: 'NbrRecruté ENERGIE'},
                                {name: 'NbrRecruté Gestion Indus'},
                                {name: 'NbrRecruté Indus ADT'},
                                {name: 'NbrRecruté Indus ATR'},
                                {name: 'NbrRecruté Indus Energie'},
                                {name: 'NbrRecruté Informatique'},
                                {name: 'NbrRecruté IT MANUFACTURING'},
                                {name: 'NbrRecruté Logistique'},
                                {name: 'NbrRecruté Logistique centrale'},
                                {name: 'NbrRecruté Maintenance'},
                                {name: 'NbrRecruté Maintenance ENERGIE'},
                                {name: 'NbrRecruté Personnel en Transfert'},
                                {name: 'NbrRecruté PROCESS ATR'},
                                {name: 'NbrRecruté PROCESS CENTRAL'},
                                {name: 'NbrRecruté Process U2'},
                                {name: 'NbrRecruté Process Energie'},
                                {name: 'NbrRecruté PROJET MES'},
                                {name: 'NbrRecruté Qualité'},
                                {name: 'NbrRecruté Qualité Indus BB'},
                                {name: 'NbrRecruté RH'},
                                {name: 'NbrRecruté SURETE'},
                                {name: 'NbrRecruté TEST ADT'},
                                {name: 'NbrRecruté TEST ATR'},
                                {name: 'NbrRecruté TEST Energie'}
                            ],
                            url: '../csv/RepartionEmbauche.csv'

                        };
                var dataAdapter1 = new $.jqx.dataAdapter(source1);
                // prepare jqxChart settings
                var settings = {
                    title: "Repartition de l'embauche ",
                    description: "Nombre des matricules recrutés par entité",
                    enableAnimations: true,
                    showLegend: true,
                    padding: {left: 5, top: 5, right: 5, bottom: 5},
                    titlePadding: {left: 90, top: 0, right: 0, bottom: 10},
                    source: dataAdapter1,
                    xAxis:
                            {
                                dataField: 'Année',
                                gridLines: {visible: true}
                            },
                    colorScheme: 'scheme01',
                    seriesGroups:
                            [
                                {
                                    type: 'column',
                                    columnsGapPercent: 50,
                                    seriesGapPercent: 0,
                                    valueAxis:
                                            {
                                                visible: true,
                                                unitInterval: 10,
                                                minValue: 0,
                                                maxValue: 100,
                                                title: {text: "Nombre des matricules recrutés"}
                                            },
                                    series: [
                                        {dataField: 'NbrRecruté Achat', displayText: 'Achat'},
                                        {dataField: 'NbrRecruté ADT', displayText: 'ADT'},
                                        {dataField: 'NbrRecruté AQF', displayText: 'AQF'},
                                        {dataField: 'NbrRecruté ATR', displayText: 'ATR'},
                                        {dataField: 'NbrRecruté Cellules Divers Prestation Sieges', displayText: 'Cellules Divers Prestation Sieges'},
                                        {dataField: 'NbrRecruté Comptabilité Contrôle de gestion', displayText: 'Comptabilité Contrôle de gestion'},
                                        {dataField: 'NbrRecruté Contrôle Inerne', displayText: 'Contrôle Inerne'},
                                        {dataField: 'NbrRecruté Dev des moyens', displayText: 'Dev des moyens'},
                                        {dataField: 'NbrRecruté Dev TEST ATR', displayText: 'Dev TEST ATR'},
                                        {dataField: 'NbrRecruté Dev TEST DECODEUR', displayText: 'Dev TEST DECODEUR'},
                                        {dataField: 'NbrRecruté direction', displayText: 'direction'},
                                        {dataField: 'NbrRecruté ENERGIE', displayText: 'ENERGIE'},
                                        {dataField: 'NbrRecruté Gestion Indus', displayText: 'Gestion Indus'},
                                        {dataField: 'NbrRecruté Indus ADT', displayText: 'Indus ADT'},
                                        {dataField: 'NbrRecruté Indus ATR', displayText: 'Indus ATR'},
                                        {dataField: 'NbrRecruté Indus Energie', displayText: 'Indus Energie'},
                                        {dataField: 'NbrRecruté Informatique', displayText: 'Informatique'},
                                        {dataField: 'NbrRecruté IT MANUFACTURING', displayText: 'IT MANUFACTURING'},
                                        {dataField: 'NbrRecruté Logistique', displayText: 'Logistique'},
                                        {dataField: 'NbrRecruté Logistique centrale', displayText: 'Logistique centrale'},
                                        {dataField: 'NbrRecruté Maintenance', displayText: 'Maintenance'},
                                        {dataField: 'NbrRecruté Maintenance ENERGIE', displayText: 'Maintenance ENERGIE'},
                                        {dataField: 'NbrRecruté Personnel en Transfert', displayText: 'Personnel en Transfert'},
                                        {dataField: 'NbrRecruté PROCESS ATR', displayText: 'PROCESS ATR'},
                                        {dataField: 'NbrRecruté PROCESS CENTRAL', displayText: 'PROCESS CENTRAL'},
                                        {dataField: 'NbrRecruté Process U2', displayText: 'Process U2'},
                                        {dataField: 'NbrRecruté Process Energie', displayText: 'Process Energie'},
                                        {dataField: 'NbrRecruté PROJET MES', displayText: 'PROJET MES'},
                                        {dataField: 'NbrRecruté Qualité', displayText: 'Qualité'},
                                        {dataField: 'NbrRecruté Qualité Indus BB', displayText: 'Qualité Indus BB'},
                                        {dataField: 'NbrRecruté RH', displayText: 'RH'},
                                        {dataField: 'NbrRecruté SURETE', displayText: 'SURETE'},
                                        {dataField: 'NbrRecruté TEST ADT', displayText: 'TEST ADT'},
                                        {dataField: 'NbrRecruté TEST ATR', displayText: 'TEST ATR'},
                                        {dataField: 'NbrRecruté TEST Energie', displayText: 'TEST Energie'}
                                    ]
                                }
                            ]
                };
                // setup the chart
                $('#jqxChart').jqxChart(settings);

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
                    <div class="outter-wp">	
                        <div class="candile"> 
                            <h3 class="sub-tittle">Suivi de l'embauche </h3>
                            <?php ChartEmbauche() ?>
                            <div class="row-one">  
                                <div class="col-md-7">
                                    <div id="jqxgrid" style="font-size: 13px; font-family: Verdana; "></div>  
                                </div>
                                <div class="col-md-5">
                                    <div id='chartTauxRDiplome' style="width: 450px; height: 400px;"></div>
                                </div>


                            </div>

                            <div class="clearfix"></div>
                        </div>
                        <div class="candile">
                            <div class="candile-inner">  
                                <div id='jqxChart' style="width:950px; height:400px"></div>

                            </div>
                        </div>


                        <!--//outer-wp-->
                    </div>
                    <!--footer section start-->
                    <footer>
                        <p>&copy 2016 Sagemcom . Tous les droits sont réservés </p>
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

