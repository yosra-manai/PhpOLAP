<?php
require '../Controllers/Chartfunctions.php';


?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Portail | SagemCom</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
        <script type="text/javascript" src="../jqwidgets-ver3.9.1/jqxdata.js"></script>
        <script type="text/javascript" src="../jqwidgets-ver3.9.1/jqxchart.core.js"></script>
        <script type="text/javascript" src="../jqwidgets-ver3.9.1/jqxdraw.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                // prepare the data
                var sourceRecru =
                        {
                            datatype: "csv",
                            datafields: [
                                {name: 'Année'},
                                {name: 'Nombre Demissionné'},
                                {name: 'Nombre Recruté'}
                            ],
                            url: '../csv/Recru.csv'

                        };
                var dataAdapterRecru = new $.jqx.dataAdapter(sourceRecru);

                // prepare jqxChart settings
                var settings = {
                    title: "Recrutement & Depart",
                    description: "Nombre des matricules demissioné vs Recruté (2007 - 2016)",
                    enableAnimations: true,
                    showLegend: true,
                    padding: {left: 15, top: 5, right: 30, bottom: 5},
                    titlePadding: {left: 90, top: 0, right: 0, bottom: 10},
                    source: dataAdapterRecru,
                    xAxis: {
                        dataField: 'Année',
                        showGridLines: true
                    },
                    colorScheme: 'scheme02',
                    seriesGroups:
                            [
                                {
                                    type: 'line',
                                    series:
                                            [
                                                {
                                                    dataField: 'Nombre Demissionné',
                                                    symbolType: 'square',
                                                    labels:
                                                            {
                                                                visible: true,
                                                                backgroundColor: '#FEFEFE',
                                                                backgroundOpacity: 0.2,
                                                                borderColor: '#7FC4EF',
                                                                borderOpacity: 0.7,
                                                                padding: {left: 5, right: 5, top: 0, bottom: 0}
                                                            }
                                                },
                                                {
                                                    dataField: 'Nombre Recruté',
                                                    symbolType: 'square',
                                                    labels:
                                                            {
                                                                visible: true,
                                                                backgroundColor: '#FEFEFE',
                                                                backgroundOpacity: 0.2,
                                                                borderColor: '#7FC4EF',
                                                                borderOpacity: 0.7,
                                                                padding: {left: 5, right: 5, top: 0, bottom: 0}
                                                            }
                                                }
                                            ]
                                }
                            ]
                };
                // setup the chart
                $('#chartRecru').jqxChart(settings);
                var sourceRemp =
                        {
                            datatype: "csv",
                            datafields: [
                                {name: 'Année', type: 'string'},
                                {name: 'tauxRemplacement', type: 'float'}
                            ],
                            url: '../csv/Remplacement.csv'
                        };
                var dataAdapterRemp = new $.jqx.dataAdapter(sourceRemp, {async: false, autoBind: true, loadError: function (xhr, status, error) {
                        alert('Error loading "' + sourceRemp.url + '" : ' + error);
                    }});
                // prepare jqxChart settings
                var settings = {
                    title: "Taux de Remplacement par année ",
                    description: "Nombre d'arrivée/ Nombre de départ",
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
                                                    dataField: 'tauxRemplacement',
                                                    displayText: 'Année',
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
                $('#chartRemp').jqxChart(settings);

                // prepare the data
                var sourceES =
                        {
                            datatype: "csv",
                            datafields: [
                                {name: 'Zone'},
                                {name: 'Durée 2014'},
                                {name: 'Durée 2015'},
                                {name: 'Durée 2016'}

                            ],
                            url: '../csv/ES.csv'

                        };
                var dataAdapterES = new $.jqx.dataAdapter(sourceES);

                // prepare jqxChart settings
                var settings = {
                    title: "Flux Entrée Sortie",
                    description: "Temps passé en min par zone(2014 - 2016)",
                    enableAnimations: true,
                    showLegend: true,
                    padding: {left: 15, top: 5, right: 30, bottom: 5},
                    titlePadding: {left: 90, top: 0, right: 0, bottom: 10},
                    source: dataAdapterES,
                    xAxis: {
                        dataField: 'Zone',
                        showGridLines: true
                    },
                    colorScheme: 'scheme06',
                    seriesGroups:
                            [
                                {
                                    type: 'splinearea',
                                    series: [
                                        {dataField: 'Durée 2014', displayText: 'Durée 2014'},
                                        {dataField: 'Durée 2015', displayText: 'Durée 2015'},
                                        {dataField: 'Durée 2016', displayText: 'Durée 2016'}
                                    ]
                                }
                            ]
                };
                // setup the chart
                $('#chartES').jqxChart(settings);

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
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i> <span class="badge blue1"></span></a>

                                    </li>
                                    <li class="dropdown note">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell-o"></i> <span class="badge"></span></a>
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
                        <!--custom-widgets-->
                        <div class="custom-widgets">
                            <div class="row-one">

                                <div class="col-md-3 widget">
                                    <?php
                                    $resultSetTauxR = connect()->statement("SELECT [Measures].[TauxRecrutement] ON COLUMNS,[Dim Date].[Année - Mois - Jour].[Année].&[2016-01-01T00:00:00] ON ROWS FROM [Sagem]");
                                    $dataSetTauxR = $resultSetTauxR->getDataSet();
                                    ?>
                                    <div class="stats-left ">
                                        <h5>Taux</h5>
                                        <h4>Recrutement</h4>
                                    </div>
                                    <div class="stats-right">
                                        <label><?php foreach ($dataSetTauxR as $data1) : echo $data1->getFormatedValue();
                                    endforeach; ?></label>
                                    </div>
                                    <div class="clearfix"> </div>	 
                                </div>
                                <div class="col-md-3 widget states-mdl">
                                    <?php
                                    $resultSetTauxD = connect()->statement("SELECT [Measures].[TauxDepart] ON COLUMNS,[Dim Date].[Année - Mois - Jour].[Année].&[2016-01-01T00:00:00] ON ROWS FROM [Sagem]");
                                    $dataSetTauxD = $resultSetTauxD->getDataSet();
                                    ?>
                                    <div class="stats-left">
                                        <h5>Taux</h5>
                                        <h4>Départ</h4>
                                    </div>
                                    <div class="stats-right">
                                        <label><?php foreach ($dataSetTauxD as $data2): echo $data2->getFormatedValue();
                                    endforeach; ?></label>
                                    </div>
                                    <div class="clearfix"> </div>	
                                </div>
                                <div class="col-md-3 widget states-thrd">
                                    <?php
                                    $resultSetTauxRe = connect()->statement("SELECT [Measures].[tauxRemplacement] ON COLUMNS,[Dim Date].[Année - Mois - Jour].[Année].&[2016-01-01T00:00:00] ON ROWS FROM [Sagem]");
                                    $dataSetTauxRe = $resultSetTauxRe->getDataSet();
                                    ?>
                                    <div class="stats-left">
                                        <h5>Taux</h5>
                                        <h4>Remplacement</h4>
                                    </div>
                                    <div class="stats-right">
                                        <label><?php foreach ($dataSetTauxRe as $data3): echo $data3->getFormatedValue();
                                                endforeach; ?></label>
                                    </div>
                                    <div class="clearfix"> </div>	
                                </div>
                                <div class="col-md-3 widget states-last">
                                    <?php
                                    $resultSetTauxA = connect()->statement("SELECT  [Measures].[TauxAbsenteisme] ON COLUMNS,[Dim Date].[Année - Mois - Jour].[Année].&[2016-01-01T00:00:00] ON ROWS FROM [Sagem]");
                                    $dataSetTauxA = $resultSetTauxA->getDataSet();
                                    ?>
                                    <div class="stats-left">
                                        <h5>Taux</h5>
                                        <h4>Absentéisme</h4>
                                    </div>
                                    <div class="stats-right">
                                        <label><?php foreach ($dataSetTauxA as $data4): echo $data4->getFormatedValue();
                                                endforeach; ?></label>
                                    </div>
                                    <div class="clearfix"> </div>	
                                </div>
                                <div class="clearfix"> </div>	
                            </div>
                        </div>
                        <!--//custom-widgets-->
                        <?php ChartAccueil() ?>
                        <div class="candile"> 
                            <div class="row-one">
                                <div class="col-md-7">
                                    <div id='chartRecru' style="width:600px; height:400px"></div>
                                </div>
                                <div class="col-md-5">
                                    <div id='chartRemp' style="width: 450px; height: 400px;"></div>
                                </div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <!--/charts-->
                        <div class="charts">
                            <div class="chrt-inner">
                                <div class="chrt-bars">

                                    <div class="col-md-12 chrt-two">
                                        <h3 class="sub-tittle">Statistiques Par Zone </h3>
                                        <div id="chart2"></div>

                                        <div id='chartES' style="width:450px; height:400px"></div>     


                                    </div>

                                    <div class="col-md-6 chrt-three">
                                        <h3 class="sub-tittle">Pointage </h3>
                                        <div id="chart2"></div>
                                        <?php ChartAccPoin() ?>
                                        <script type="text/javascript">
                                            $(document).ready(function () {
                                                // prepare chart data as an array
                                                var source =
                                                        {
                                                            datatype: "csv",
                                                            datafields: [
                                                                {name: 'Entité'},
                                                                {name: 'Acc Jr6'},
                                                                {name: 'Acc Jr7'}

                                                            ],
                                                            url: '../csv/AccPoin.csv'

                                                        };
                                                var dataAdapter = new $.jqx.dataAdapter(source);
                                                // prepare jqxChart settings
                                                var settings = {
                                                    title: "Persistence du pointage (Weekday)",
                                                    description: "Accumulation du pointage en min par entité ",
                                                    enableAnimations: false,
                                                    showLegend: true,
                                                    padding: {left: 15, top: 15, right: 15, bottom: 15},
                                                    titlePadding: {left: 90, top: 0, right: 0, bottom: 10},
                                                    source: dataAdapter,
                                                    xAxis:
                                                            {
                                                                dataField: 'Entité',
                                                                tickMarks: {
                                                                    visible: true,
                                                                    interval: 1
                                                                },
                                                                gridLines: {
                                                                    visible: true,
                                                                    interval: 1
                                                                }
                                                            },
                                                    valueAxis:
                                                            {
                                                                title: {text: 'Accumulation du pointage en min '},
                                                                labels: {horizontalAlignment: 'right'}
                                                            },
                                                    colorScheme: 'scheme04',
                                                    seriesGroups:
                                                            [
                                                                {
                                                                    type: 'column',
                                                                    columnsGapPercent: 20,
                                                                    seriesGapPercent: 20,
                                                                    columnsTopWidthPercent: 0,
                                                                    columnsBottomWidthPercent: 100,
                                                                    series: [
                                                                        {dataField: 'Acc Jr6', displayText: 'Acc Pointage Samedi'},
                                                                        {dataField: 'Acc Jr7', displayText: 'Acc Pointage Dimanche'}
                                                                    ]
                                                                }
                                                            ]
                                                };
                                                // setup the chart
                                                $('#chartContainer').jqxChart(settings);
                                            });
                                        </script>
                                        <div id='chartContainer' style="width:450px; height:400px;"/>

                                    </div>


                                </div>
                                <div class="clearfix"> </div>






                            </div>
                            <!--/charts-inner-->
                        </div>
                        <!--//outer-wp-->
                    </div>
                    <!--footer section start-->
                    <footer>
                        <p>&copy 2016 Sagemcom . Tous les droits sont réservés. </p>
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
