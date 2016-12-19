<?php
session_start();
if($_SESSION['valid_user']!=true){

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
</head> 
<body>
<?php include '../Controllers/Connexion.php';
?>
   <div class="page-container">
   <!--/content-inner-->
	<div class="left-content">
	   <div class="inner-content">
		<!-- header-starts -->
			<div class="header-section">
						<!--menu-right-->
						<div class="top_menu">
						        <div class="main-search">
											<form>
											   <input type="text" value="Search" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Search';}" class="text"/>
												<input type="submit" value="">
											</form>
									<div class="close"><img src="images/cross.png" /></div>
								</div>
									<div class="srch"><button></button></div>
									<script type="text/javascript">
										 $('.main-search').hide();
										$('button').click(function (){
											$('.main-search').show();
											$('.main-search text').focus();
										}
										);
										$('.close').click(function(){
											$('.main-search').hide();
										});
									</script>
							<!--/profile_details-->
								<div class="profile_details_left">
									<ul class="nofitications-dropdown">
									       <li class="dropdown note">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope-o"></i> <span class="badge">3</span></a>

												
													<ul class="dropdown-menu two first">
														<li>
															<div class="notification_header">
																<h3>You have 3 new messages  </h3> 
															</div>
														</li>
														<li><a href="#">
														   <div class="user_img"><img src="images/1.jpg" alt=""></div>
														   <div class="notification_desc">
															<p>Lorem ipsum dolor sit amet</p>
															<p><span>1 hour ago</span></p>
															</div>
														   <div class="clearfix"></div>	
														 </a></li>
														 <li class="odd"><a href="#">
															<div class="user_img"><img src="images/in.jpg" alt=""></div>
														   <div class="notification_desc">
															<p>Lorem ipsum dolor sit amet </p>
															<p><span>1 hour ago</span></p>
															</div>
														  <div class="clearfix"></div>	
														 </a></li>
														<li><a href="#">
														   <div class="user_img"><img src="images/in1.jpg" alt=""></div>
														   <div class="notification_desc">
															<p>Lorem ipsum dolor sit amet </p>
															<p><span>1 hour ago</span></p>
															</div>
														   <div class="clearfix"></div>	
														</a></li>
														<li>
															<div class="notification_bottom">
																<a href="#">See all messages</a>
															</div> 
														</li>
													</ul>
										</li>
										
							<li class="dropdown note">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell-o"></i> <span class="badge">5</span></a>

									<ul class="dropdown-menu two">
										<li>
											<div class="notification_header">
												<h3>You have 5 new notification</h3>
											</div>
										</li>
										<li><a href="#">
											<div class="user_img"><img src="images/in.jpg" alt=""></div>
										   <div class="notification_desc">
											<p>Lorem ipsum dolor sit amet</p>
											<p><span>1 hour ago</span></p>
											</div>
										  <div class="clearfix"></div>	
										 </a></li>
										 <li class="odd"><a href="#">
											<div class="user_img"><img src="images/in5.jpg" alt=""></div>
										   <div class="notification_desc">
											<p>Lorem ipsum dolor sit amet </p>
											<p><span>1 hour ago</span></p>
											</div>
										   <div class="clearfix"></div>	
										 </a></li>
										 <li><a href="#">
											<div class="user_img"><img src="images/in8.jpg" alt=""></div>
										   <div class="notification_desc">
											<p>Lorem ipsum dolor sit amet </p>
											<p><span>1 hour ago</span></p>
											</div>
										   <div class="clearfix"></div>	
										 </a></li>
										 <li>
											<div class="notification_bottom">
												<a href="#">See all notification</a>
											</div> 
										</li>
									</ul>
							</li>	
						<li class="dropdown note">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i> <span class="badge blue1">9</span></a>
										<ul class="dropdown-menu two">
										<li>
											<div class="notification_header">
												<h3>You have 9 pending task</h3>
											</div>
										</li>
										<li><a href="#">
												<div class="task-info">
												<span class="task-desc">Database update</span><span class="percentage">40%</span>
												<div class="clearfix"></div>	
											   </div>
												<div class="progress progress-striped active">
												 <div class="bar yellow" style="width:40%;"></div>
											</div>
										</a></li>
										<li><a href="#">
											<div class="task-info">
												<span class="task-desc">Dashboard done</span><span class="percentage">90%</span>
											   <div class="clearfix"></div>	
											</div>
										   
											<div class="progress progress-striped active">
												 <div class="bar green" style="width:90%;"></div>
											</div>
										</a></li>
										<li><a href="#">
											<div class="task-info">
												<span class="task-desc">Mobile App</span><span class="percentage">33%</span>
												<div class="clearfix"></div>	
											</div>
										   <div class="progress progress-striped active">
												 <div class="bar red" style="width: 33%;"></div>
											</div>
										</a></li>
										<li><a href="#">
											<div class="task-info">
												<span class="task-desc">Issues fixed</span><span class="percentage">80%</span>
											   <div class="clearfix"></div>	
											</div>
											<div class="progress progress-striped active">
												 <div class="bar  blue" style="width: 80%;"></div>
											</div>
										</a></li>
										<li>
											<div class="notification_bottom">
												<a href="#">See all pending task</a>
											</div> 
										</li>
									</ul>
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
								    
                                                                        <h3 class="sub-tittle">Liste d'utilisateurs</h3>
									    <div id="chart2"></div>
                                                                            <h4><a href = "../Controllers/logout.php">Sign Out</a></h4>
                                                                             <form name="frmSearch" method="post" action="listePersonne.php">
  <div class="search-box">
  
  <input type="text" placeholder="Name" name="search[name]" class="demoInputBox" value="<?php echo $name; ?>" />
  <input type="submit" name="go" class="btn" value="Search">
  </div>
</form>
            <div class="row">
              <p>
                    <a href="choix.php" class="btn btn-success">Ajouter</a>
                </p>
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>Nom</th>
                      <th>Login</th>
                      <th>Mot de passe</th>
                      <th>Email</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php		
                   while ($row = sqlsrv_fetch_array($sql)){
                            echo '<tr>';
                            echo '<td>'. $row['nom'] . '</td>';
                            echo '<td>'. $row['prenom'] . '</td>';
                            echo '<td>'. $row['login'] . '</td>';
                            echo '<td>'. $row['pwd'] . '</td>';
                            echo '<td width=250>';
                                echo '<a class="btn" href="detailsPersonne.php?id='.$row['id_P'].'">Voir</a>';
                                echo ' ';
                                echo '<a class="btn btn-success" href="modifierPersonne.php?id='.$row['id_P'].'">Modifier</a>';
                                echo ' ';
                                echo '<a class="btn btn-danger" href="supprimerPersonne.php?id='.$row['id_P'].'">Bloquer</a>';
                                echo '</td>';
                            echo '</tr>';

                       

                            
                   }
        
                  ?>




                  </tbody>
            </table>

                  <?php
                  if($id>1)
                    {
                        
                        echo "<a href='?id=".($id-1)."' class='button'>PRECEDENT </a> ";
                    }
                    if($id!=$total)
                    {
                        
                        echo "<a href='?id=".($id+1)."' class='button'> SUIVANT </a>";
                    }
                    ?>
                    
                    <?php

                            for($i=1;$i<=$total;$i++)
                            {
                                if($i==$id) { echo "<li class='current'>".$i."</li>"; }
                                 
                                else { echo "<li><a href='?id=".$i."'>".$i."</a></li>"; }
                            }
                      ?>
        </div>       
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
									  <a href="accueil.php"><img src="images/ad.png"></a>
									  <a href="accueil.php"><span class=" name-caret">Mehdoini Abdallah </span></a>
									 <p>Administrateur Base de données</p>
									<ul>
									<li><a class="tooltips" href="accueil.php"><span>Profil</span><i class="lnr lnr-user"></i></a></li>
										<li><a class="tooltips" href="listePersonne.php"><span>Configuration</span><i class="lnr lnr-cog"></i></a></li>
										<li><a class="tooltips" href="logout.php"><span>Déconnecter</span><i class="lnr lnr-power-switch"></i></a></li>
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
										 <li id="menu-academico" ><a href="Formulaire.php"><i class="fa fa-file-text-o"></i> <span>Rapport</span> </a>
											
							                         </li>
									        <li><a href="#"><i class="lnr lnr-pencil"></i> <span>Administration</span></a></li>
									
				
								  </ul>
								</div>
							  </div>
							  <div class="clearfix"></div>		
							</div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
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




