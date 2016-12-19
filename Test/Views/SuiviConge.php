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
                                {name: 'Diplome', type: 'string'},
                                {name: 'NbrJr Congé 2013', type: 'int'},
                                {name: 'NbrJr Congé 2014', type: 'int'},
                                {name: 'NbrJr Congé 2015', type: 'int'},
                                {name: 'NbrJr Congé 2016', type: 'int'}
                            ],
                            url: '../csv/CongeGRID.csv'
                        };
                var dataAdapter = new $.jqx.dataAdapter(source2);
                var cellsrenderer = function (row, columnfield, value, defaulthtml, columnproperties) {
                    var valueDiplome = $("#jqxgrid").jqxGrid('getcellvalue', row, 'Diplome');
                    if ((value > 12 && valueDiplome === 'Autre ou Opérateur') || (value > 30 && ((valueDiplome === 'Technicien') || (valueDiplome === 'Ingenieur/Chef Service') || (valueDiplome === 'Maitrise')))) {
                        return '<span style="margin: 4px; int: ' + columnproperties.cellsalign + '; color: #ff0000;">' + value + '</span><img src ="../images/rouge.png"/>';
                    }
                    else {
                        return '<span style="margin: 4px; int: ' + columnproperties.cellsalign + '; color: #0000ff;">' + value + '</span>';
                    }
                };

                $("#jqxgrid").jqxGrid(
                        {
                            width: 1000,
                            height: 350,
                            filterable: true,
                            sortable: true,
                            source: dataAdapter,
                            columns: [
                                {text: 'Matricule', datafield: 'Matricule', width: '15%'},
                                {text: 'Diplome', datafield: 'Diplome', width: '30%'},
                                {text: 'Calendrier 2013', datafield: 'NbrJr Congé 2013', width: '15%', cellsrenderer: cellsrenderer},
                                {text: 'Calendrier 2014', datafield: 'NbrJr Congé 2014', width: '15%', cellsrenderer: cellsrenderer},
                                {text: 'Calendrier 2015', datafield: 'NbrJr Congé 2015', width: '15%', cellsrenderer: cellsrenderer},
                                {text: 'Calendrier 2016', datafield: 'NbrJr Congé 2016', width: '15%', cellsrenderer: cellsrenderer}
                            ]
                        });
                // prepare the data
                var sourceConge =
                        {
                            datatype: "csv",
                            datafields: [
                                {name: 'Année'},
                                {name: 'Nbr Accepté'},
                                {name: 'Nbr Jour Congé'}
                            ],
                            url: '../csv/Conge.csv'

                        };
                var dataAdapterConge = new $.jqx.dataAdapter(sourceConge);

                // prepare jqxChart settings
                var settings = {
                    title: "Congé",
                    description: "Nombre des matricules en Congé vs Nombre de jour en congé",
                    enableAnimations: true,
                    showLegend: true,
                    padding: {left: 15, top: 5, right: 30, bottom: 5},
                    titlePadding: {left: 90, top: 0, right: 0, bottom: 10},
                    source: dataAdapterConge,
                    xAxis: {
                        dataField: 'Année',
                        showGridLines: true
                    },
                    colorScheme: 'scheme02',
                    seriesGroups:
                            [
                                {
                                    type: 'column',
                                    series:
                                            [
                                                {dataField: 'Nbr Accepté', displayText: 'Nombre des matricule autorisés en congé'},
                                                {dataField: 'Nbr Jour Congé', displayText: 'Nombre de jour en congé'}
                                            ]
                                }
                            ]
                };
                // setup the chart
                $('#chartCongé').jqxChart(settings);
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
                        <!--/charts-->
                        <div class="charts">
                            <div class="chrt-inner">
                                <div class="chrt-bars">

                                    <h3 class="sub-tittle">Suivi du Congé </h3>
                                    <div id="chart2"></div>
                                    <?php ChartCongé() ?>

                                    <div id="jqxgrid" style="font-size: 13px; font-family: Verdana; "></div>
                                    <div id='chartCongé' style="width:600px; height:400px"></div>


                                </div>
                            </div>
                            <!--/charts-inner-->
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
                        <li><a class="tooltips" href="../Contollers/logout.php"><span>Déconnecter</span><i class="lnr lnr-power-switch"></i></a></li>
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
                                <li id="menu-academico-avaliacoes" ><a href="SuiviCongé.php">Suivi du congés</a></li>
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

