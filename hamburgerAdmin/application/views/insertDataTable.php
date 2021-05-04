<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<base href="<?php print(base_url()); ?>" >
	<title>Lumino - Dashboard</title>
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/font-awesome.min.css" rel="stylesheet">
	<link href="assets/css/datepicker3.css" rel="stylesheet">
	<link href="assets/css/styles.css" rel="stylesheet">
	<link href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" rel="stylesheet">
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Lumino</span>Admin</a>
				<ul class="nav navbar-top-links navbar-right">
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-envelope"></em><span class="label label-danger">15</span>
					</a>
						<ul class="dropdown-menu dropdown-messages">
							<li>
								<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
									<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
									</a>
									<div class="message-body"><small class="pull-right">3 mins ago</small>
										<a href="#"><strong>John Doe</strong> commented on <strong>your photo</strong>.</a>
									<br /><small class="text-muted">1:24 pm - 25/03/2015</small></div>
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
									<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
									</a>
									<div class="message-body"><small class="pull-right">1 hour ago</small>
										<a href="#">New message from <strong>Jane Doe</strong>.</a>
									<br /><small class="text-muted">12:27 pm - 25/03/2015</small></div>
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<div class="all-button"><a href="#">
									<em class="fa fa-inbox"></em> <strong>All Messages</strong>
								</a></div>
							</li>
						</ul>
					</li>
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-bell"></em><span class="label label-info">5</span>
					</a>
						<ul class="dropdown-menu dropdown-alerts">
							<li><a href="#">
								<div><em class="fa fa-envelope"></em> 1 New Message
									<span class="pull-right text-muted small">3 mins ago</span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-heart"></em> 12 New Likes
									<span class="pull-right text-muted small">4 mins ago</span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-user"></em> 5 New Followers
									<span class="pull-right text-muted small">4 mins ago</span></div>
							</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>

	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">Username</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li class="active"><a href="index.php/Home/hamburgerData"><em class="fa fa-dashboard">&nbsp;</em>Hambugerek</a></li>
			<li><a href="index.php/Home/hozzavaloData"><em class="fa fa-calendar">&nbsp;</em>Hozzávalók</a></li>
			<li><a href="index.php/Home/kategoriaData"><em class="fa fa-calendar">&nbsp;</em> Kategóriák</a></li>
			<li><a href="index.php/Home/felhasznaloData"><em class="fa fa-bar-chart">&nbsp;</em>Felhasználók</a></li>
			<li><a href="index.php/Home/logout"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Új recept felvétele</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Új recept felvétele</h1>
			</div>
		</div><!--/.row-->

        	<div class="panel panel-default">
				<div class="panel-heading">
					Regisztrálás
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em>
						</span>
					<div class="panel-body">
						<form class="form-horizontal" action="index.php/Home/addNewRecipe" method="POST">
							<fieldset>
								<!-- Name input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="nev">Hamburger neve</label>
									<div class="col-md-4">
									<input class="form-control" type="text" name="nev" placeholder="Hamburger neve">
									</div>									
								</div>
								<!-- Hozzavalo input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="hozzavalo1">Hozzávaló 1</label>
									<div class="col-md-4">
									<input class="form-control" type="text" name="hozzavalo1" placeholder="hozzávaló">									
									</div>
								</div>
                                <!-- Hozzavalo input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="hozzavalo2">Hozzávaló 2</label>
									<div class="col-md-4">
									<input class="form-control" type="text" name="hozzavalo2" placeholder="hozzávaló">									
									</div>
								</div>
                                <!-- Hozzavalo input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="hozzavalo3">Hozzávaló 3</label>
									<div class="col-md-4">
									<input class="form-control" type="text" name="hozzavalo3" placeholder="hozzávaló">								
									</div>
								</div>
                                <!-- Hozzavalo input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="hozzavalo4">Hozzávaló 4</label>
									<div class="col-md-4">
									<input class="form-control" type="text" name="hozzavalo4" placeholder="hozzávaló">								
									</div>
								</div>
                                <!-- Hozzavalo input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="hozzavalo5">Hozzávaló 5</label>
									<div class="col-md-4">
									<input class="form-control" type="text" name="hozzavalo5" placeholder="hozzávaló">							
									</div>
								</div>
                                <!-- Hozzavalo input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="hozzavalo6">Hozzávaló 6</label>
									<div class="col-md-4">
									<input class="form-control" type="text" name="hozzavalo6" placeholder="hozzávaló">			
									</div>
								</div>
                                <!-- Hozzavalo input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="hozzavalo7">Hozzávaló 7</label>
									<div class="col-md-4">
									<input class="form-control" type="text" name="hozzavalo7" placeholder="hozzávaló">
									</div>
								</div>
								<!-- recept rovid leirasa body -->
								<div class="form-group">
									<label class="col-md-3 control-label" for="rovid_leiras">Rövid leírás</label>
									<div class="col-md-9">
										<textarea class="form-control" id="rovid_leiras" name="rovid_leiras" placeholder="Recept rövid leírása" rows="5"></textarea>
									</div>
								</div>
                                <!-- recept leirasa body -->
								<div class="form-group">
									<label class="col-md-3 control-label" for="elkeszites">Elkészítés</label>
									<div class="col-md-9">
										<textarea class="form-control" id="elkeszites" name="elkeszites" placeholder="Recept leírása" rows="15"></textarea>
									</div>
								</div>
								<!-- megjelentetetes body -->
								<div class="form-group">
									<label class="col-md-3 control-label" for="megjelenhet_e">Recept engedélyezése</label>
									<div class="col-md-3">
										<select class="form-control" name="megjelenhet_e" id="megjelenhet_e">
											<option value="1">Megjelenhet</option>
											<option value="0">Nem jelenhet meg</option>
										</select>
									</div>
								</div>
								<!-- megjelentetetes body -->
								<div class="form-group">
									<label class="col-md-3 control-label" for="kategoria">Kategória</label>
									<div class="col-md-3">
										<select class="form-control" name="kategoria" id="kategoria">
											<option value="1">Ranchero Burger</option>
											<option value="2">Diablo burger</option>
											<option value="3">Colorado burger</option>
										</select>
									</div>
								</div>
								<!-- Form actions -->
								<div class="form-group">
									<div class="col-md-10 control-label">
										<button type="submit" class="btn btn-sm btn-primary"><a href="index.php/Home/hamburgerData" ></a>Mégse</button>
									</div>
									<div class="col-md-1 control-label">
										<button class="btn btn-sm btn-warning">Új recept felvétele</button>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
				</div>
			</div><!--/.col-->
		
</div>	<!--/.main-->

	<script src="assets/js/jquery-1.11.1.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/chart.min.js"></script>
	<script src="assets/js/chart-data.js"></script>
	<script src="assets/js/easypiechart.js"></script>
	<script src="assets/js/easypiechart-data.js"></script>
	<script src="assets/js/bootstrap-datepicker.js"></script>
	<script src="assets/js/custom.js"></script>
	<script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

</body>
</html>
