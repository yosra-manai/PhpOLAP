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
        <script type="text/javascript" src="../jqwidgets-ver3.9.1/jqxdraw.js"></script>
        <script type="text/javascript" src="../jqwidgets-ver3.9.1/jqxchart.core.js"></script>
        <script type="text/javascript" src="../jqwidgets-ver3.9.1/jqxdata.js"></script>
        <script type="text/javascript" src="../jqwidgets-ver3.9.1/jqxbuttons.js"></script>
        <script type="text/javascript" src="../jqwidgets-ver3.9.1/jqxscrollbar.js"></script>
        <script type="text/javascript" src="../jqwidgets-ver3.9.1/jqxmenu.js"></script>
        <script type="text/javascript" src="../jqwidgets-ver3.9.1/jqxgrid.js"></script>
        <script type="text/javascript" src="../jqwidgets-ver3.9.1/jqxgrid.edit.js"></script>
        <script type="text/javascript" src="../jqwidgets-ver3.9.1/jqxgrid.selection.js"></script>
        <script type="text/javascript" src="../jqwidgets-ver3.9.1/jqxgrid.filter.js"></script>
        <script type="text/javascript" src="../jqwidgets-ver3.9.1/jqxgrid.sort.js"></script>
        <script type="text/javascript" src="../jqwidgets-ver3.9.1/jqxlistbox.js"></script>
        <script type="text/javascript" src="../jqwidgets-ver3.9.1/jqxdropdownlist.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                var source2 =
                        {
                            datatype: "csv",
                            datafields: [
                                {name: 'Matricule', type: 'string'},
                                {name: 'Samedi', type: 'int'},
                                {name: 'Dimanche', type: 'int'}
                            ],
                            url: '../csv/SuppGRID.csv'
                        };
                var dataAdapter = new $.jqx.dataAdapter(source2);


                $("#jqxgrid").jqxGrid(
                        {
                            width: 600,
                            height: 400,
                            filterable: true,
                            sortable: true,
                            source: dataAdapter,
                            columns: [
                                {text: 'Matricule', datafield: 'Matricule', width: '40%'},
                                {text: 'Samedi 2016', datafield: 'Samedi', width: '30%'},
                                {text: 'Dimanche 2016', datafield: 'Dimanche', width: '30%'}

                            ]
                        });
                var sourceRemp =
                        {
                            datatype: "csv",
                            datafields: [
                                {name: 'Entité', type: 'string'},
                                {name: 'tauxSupp 2016', type: 'float'}
                            ],
                            url: '../csv/TauxSupp.csv'
                        };
                var dataAdapterRemp = new $.jqx.dataAdapter(sourceRemp, {async: false, autoBind: true, loadError: function (xhr, status, error) {
                        alert('Error loading "' + sourceRemp.url + '" : ' + error);
                    }});
                // prepare jqxChart settings
                var settings = {
                    title: "Taux du temps Supplémenatire par Entité  ",
                    description: "taux  en 2016",
                    enableAnimations: true,
                    showLegend: false,
                    showBorderLine: true,
                    legendPosition: {left: 520, top: 140, width: 100, height: 100},
                    padding: {left: 5, top: 5, right: 5, bottom: 5},
                    titlePadding: {left: 0, top: 0, right: 0, bottom: 10},
                    source: dataAdapterRemp,
                    colorScheme: 'scheme04',
                    seriesGroups:
                            [
                                {
                                    type: 'pie',
                                    showLabels: true,
                                    series:
                                            [
                                                {
                                                    dataField: 'tauxSupp 2016',
                                                    displayText: 'Entité',
                                                    labelRadius: 170,
                                                    initialAngle: 15,
                                                    radius: 145,
                                                    centerOffset: 5,
                                                    formatSettings: {sufix: '%', decimalPlaces: 2}
                                                }
                                            ]
                                }
                            ]
                };
                // setup the chart
                $('#chartTauxSupp').jqxChart(settings);
                // prepare the data
                var sourceSupp =
                        {
                            datatype: "csv",
                            datafields: [
                                {name: 'Mois'},
                                {name: ' Achat'},
                                {name: ' ADT'},
                                {name: ' AQF'},
                                {name: ' ATR'},
                                {name: ' Cellules Divers Prestation Sieges'},
                                {name: ' Comptabilité Contrôle de gestion'},
                                {name: ' Contrôle Inerne'},
                                {name: ' Dev des moyens'},
                                {name: ' Dev TEST ATR'},
                                {name: ' Dev TEST DECODEUR'},
                                {name: ' direction'},
                                {name: ' ENERGIE'},
                                {name: ' Gestion Indus'},
                                {name: ' Indus ADT'},
                                {name: ' Indus ATR'},
                                {name: ' Indus Energie'},
                                {name: ' Informatique'},
                                {name: ' IT MANUFACTURING'},
                                {name: ' Logistique'},
                                {name: ' Logistique centrale'},
                                {name: ' Maintenance'},
                                {name: ' Maintenance ENERGIE'},
                                {name: ' Personnel en Transfert'},
                                {name: ' PROCESS ATR'},
                                {name: 'PROCESS CENTRAL'},
                                {name: ' Process U2'},
                                {name: ' Process Energie'},
                                {name: ' PROJET MES'},
                                {name: ' Qualité'},
                                {name: ' Qualité Indus BB'},
                                {name: ' RH'},
                                {name: ' SURETE'},
                                {name: ' TEST ADT'},
                                {name: ' TEST ATR'},
                                {name: ' TEST Energie'}

                            ],
                            url: '../csv/Supp.csv'

                        };
                var dataAdapterSupp = new $.jqx.dataAdapter(sourceSupp);

                // prepare jqxChart settings
                var settings = {
                    title: "Temps Supp",
                    description: "Nombre des matricules Effectués des temps Supplémentaire par entité",
                    enableAnimations: true,
                    showLegend: true,
                    padding: {left: 15, top: 5, right: 30, bottom: 5},
                    titlePadding: {left: 90, top: 0, right: 0, bottom: 10},
                    source: dataAdapterSupp,
                    xAxis: {
                        dataField: 'Mois',
                        showGridLines: true
                    },
                    colorScheme: 'scheme02',
                    seriesGroups:
                            [
                                {
                                    type: 'splinearea',
                                    series:
                                            [
                                                {dataField: ' Achat', displayText: 'Achat'},
                                                {dataField: ' ADT', displayText: 'ADT'},
                                                {dataField: ' AQF', displayText: 'AQF'},
                                                {dataField: ' ATR', displayText: 'ATR'},
                                                {dataField: ' Cellules Divers Prestation Sieges', displayText: 'Cellules Divers Prestation Sieges'},
                                                {dataField: ' Comptabilité Contrôle de gestion', displayText: 'Comptabilité Contrôle de gestion'},
                                                {dataField: ' Contrôle Inerne', displayText: 'Contrôle Inerne'},
                                                {dataField: ' Dev des moyens', displayText: 'Dev des moyens'},
                                                {dataField: ' Dev TEST ATR', displayText: 'Dev TEST ATR'},
                                                {dataField: ' Dev TEST DECODEUR', displayText: 'Dev TEST DECODEUR'},
                                                {dataField: ' direction', displayText: 'direction'},
                                                {dataField: ' ENERGIE', displayText: 'ENERGIE'},
                                                {dataField: ' Gestion Indus', displayText: 'Gestion Indus'},
                                                {dataField: ' Indus ADT', displayText: 'Indus ADT'},
                                                {dataField: ' Indus ATR', displayText: 'Indus ATR'},
                                                {dataField: ' Indus Energie', displayText: 'Indus Energie'},
                                                {dataField: ' Informatique', displayText: 'Informatique'},
                                                {dataField: ' IT MANUFACTURING', displayText: 'IT MANUFACTURING'},
                                                {dataField: ' Logistique', displayText: 'Logistique'},
                                                {dataField: ' Logistique centrale', displayText: 'Logistique centrale'},
                                                {dataField: ' Maintenance', displayText: 'Maintenance'},
                                                {dataField: ' Maintenance ENERGIE', displayText: 'Maintenance ENERGIE'},
                                                {dataField: ' Personnel en Transfert', displayText: 'Personnel en Transfert'},
                                                {dataField: ' PROCESS ATR', displayText: 'PROCESS ATR'},
                                                {dataField: ' PROCESS CENTRAL', displayText: 'PROCESS CENTRAL'},
                                                {dataField: ' Process U2', displayText: 'Process U2'},
                                                {dataField: ' Process Energie', displayText: 'Process Energie'},
                                                {dataField: ' PROJET MES', displayText: 'PROJET MES'},
                                                {dataField: ' Qualité', displayText: 'Qualité'},
                                                {dataField: ' Qualité Indus BB', displayText: 'Qualité Indus BB'},
                                                {dataField: ' RH', displayText: 'RH'},
                                                {dataField: ' SURETE', displayText: 'SURETE'},
                                                {dataField: ' TEST ADT', displayText: 'TEST ADT'},
                                                {dataField: ' TEST ATR', displayText: 'TEST ATR'},
                                                {dataField: ' TEST Energie', displayText: 'TEST Energie'}
                                            ]
                                }
                            ]
                };
                // setup the chart
                $('#chartSupp').jqxChart(settings);
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


                            <h3 class="sub-tittle">Suivi du Temps Supplémentaire </h3>
                            <div class="row-one">    
                                <?php ChartSupp() ?>
                                <div class="col-md-7">
                                    <div id="jqxgrid" style="font-size: 13px; font-family: Verdana; "></div>
                                </div>
                                <div class="col-md-5">
                                    <div id='chartTauxSupp' style="width: 450px; height: 400px;"></div>
                                </div>


                            </div>

                            <div class="clearfix"></div>
                        </div>
                        <div class="candile">
                            <div class="candile-inner">  
                                <div id='chartSupp' style="width:1000px; height:450px"></div>
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

