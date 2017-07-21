<?php
include 'library/config.php';
include 'class/class.admin.php';

$admin = new Admin();
$error = '<br>';
if($admin->get_session()){
	header('location: index.php');
}
if(isset($_REQUEST['submit'])){
	extract($_REQUEST);
	$login = $admin->check_login($username,$password);
	if($login){
		session_start();
		$error = '<br>';
		header('location: index.php');
	}
}
?>
<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Admin | Login</title>
		<link rel="icon" href="../../../public/images/icon/favicon.ico" type="image/x-icon"/>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/dataTables.css">
		<link rel="stylesheet" href="css/font-awesome.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/theme-default.css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container-fluid admin-login-container-page">
			<div class="row panel-wrapper">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
					<img src="images/logo.png" class="logolabel">
				</div>

				<div class="panel-body panel-body-custom">
					<div class="row">
						<div class="col-lg-12">

							<form id="login-form" action="" method="post" role="form" style="display: block;">
								
								<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
								<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
									
								<div class="form-group">
									<div class="row">
										<div class="col-sm-6 col-sm-offset-3">
											<input type="submit" name="submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="LogIn">
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- jQuery -->
		<script src="js/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="js/bootstrap.js"></script>
		<script src="js/dataTables.js"></script>
		<script src="js/jquery.dataTables.js"></script>
	</body>
</html>