<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<base href="<?php print(base_url()); ?>" >
	<title>Lumino - Login</title>
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/datepicker3.css" rel="stylesheet">
	<link href="assets/css/styles.css" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<div class="row col-12">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Log in</div>
				<!--panel body-->
				<div class="panel-body">
					<form role="form" method="POST" action="index.php/Home/login">
						<fieldset>
							<div class="form-group">
								<?php print(form_error('usercheck')); ?>
								<input class="form-control" placeholder="E-mail" name="email" type="text" value="<?php print(set_value('email'));?>">
								<div class="form_error">
										<?php print(form_error('email')); ?>
								</div>
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password" value="">
								<div class="form_error" style="color: red;">
										<?php print(form_error('password')); ?>
								</div>
							</div>
							<div class="checkbox">
								<label>
									<input name="remember" type="checkbox" value="Remember Me">Remember Me
								</label>
							</div>
							<button type="submit" class="btn btn-primary">Bejelentkezés</button>
						</fieldset>
					</form>
					</div>
				</div>
			</div><!--/.col-->
		</div>
	</div>	<!--/.main-->


<script src="assets/js/jquery-1.11.1.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
