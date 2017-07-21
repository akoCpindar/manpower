<?php

$module = (isset($_GET['mod']) && $_GET['mod'] != '') ? $_GET['mod'] : '';
$sub = (isset($_GET['sub']) && $_GET['sub'] != '') ? $_GET['sub'] : '';
$action = (isset($_GET['act']) && $_GET['act'] != '') ? $_GET['act'] : '';

switch($sub){
	case 'admin':
		require_once 'add/add_admin.php';
	break;
	case 'company':
		require_once 'add/add_company.php';
	break;
	case 'services':
		require_once 'add/add_services.php';
	break;
	case 'applicant':
		require_once 'add/add_applicant.php';
	break;
	case 'assign_applicant':
		require_once 'add/add_assign_applicants.php';
	break;
	default:
		require_once 'applicant/applicant_list.php';
}
?>