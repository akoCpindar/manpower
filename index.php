<?php
include 'library/config.php';
include 'class/class.services.php';
include 'class/class.applicants.php';
include 'class/class.company.php';
include 'class/class.admin.php';
include 'class/class.assign.php';

$module = (isset($_GET['mod']) && $_GET['mod'] != '') ? $_GET['mod'] : '';
$sub = (isset($_GET['sub']) && $_GET['sub'] != '') ? $_GET['sub'] : '';
$action = (isset($_GET['act']) && $_GET['act'] != '') ? $_GET['act'] : '';

$admin = new Admin();
if(!$admin->get_session()){
	header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Admin | Index</title>

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
		<div class="container-fluid admin-index-container-page">

			<!-- Horizontal Navigation Bar -->
			<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="sams logo" class="nav-logo"></a>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
				</div>
			</nav><!-- END OG NAVIGATION -->

			<!-- Vertical Navigation Bar -->
			<div class="nav-side-menu">
			    <div class="menu-list">
			    	<ul>
				        <li><a href="index.php?mod=applicants"><div width="100%"> &nbsp; Applicants </div></a></li>
				        <li><a href="index.php?mod=assign_applicant"><div width="100%"> &nbsp; Assign Applicant </div></a></li>
				        <li><a href="index.php?mod=services"><div width="100%"> &nbsp; Services </div></a></li>
			            <li><a href="index.php?mod=companies"><div width="100%"> &nbsp; Companies </div></a></li>
				        <li><a href="index.php?mod=admin"><div width="100%"> &nbsp; Admin </div></a></li>
				        <li><a href="library/logout.php"><div width="100%"> &nbsp; Logout</div></a></li>
			        </ul>
			     </div>
			</div> <!-- End of Vertical Navigation -->

			<div class="row">
				<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 page-content">
					<?php
						switch($module){
						case 'applicants':
							require_once 'applicant/applicant_list.php';
							break;
						case 'assign_applicant':
							require_once 'applicant/assign_applicant_list.php';
							break;
						case 'services':
							require_once 'services/services_list.php';
							break;
						case 'companies':
							require_once 'company/companies_list.php';
							break;
						case 'admin':
							require_once 'admin/admin_list.php';
							break;
						case 'add':
							require_once 'add/add.php';
							break;
						case 'edit':
							require_once 'edit/edit.php';
							break;
						default:
							require_once 'applicant/applicant_list.php';
						}
					?>
				</div>
			</div>
		
		</div> <!-- PAGE ENDING -->
		<!-- jQuery -->
		<script src="js/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="js/bootstrap.js"></script>
		<script src="js/dataTables.js"></script>
		<script src="js/jquery.dataTables.js"></script>
	</body>
</html>