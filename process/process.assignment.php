<?php 
include '../library/config.php';
include '../class/class.assign.php';

$action=(isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

switch($action){
	case 'add':
		add();
	break;
	case 'edit':
		edit();
	break;
	default:
	header("location:../index.php?mod=assign_applicant");
} 
 function add(){
	$app_id = $_POST['app_id'];
	$service = $_POST['service'];
	$company = $_POST['company'];
	$reason = $_POST['reason'];
	
	$assign = new Assign();
	$result = $assign->new_assign($app_id,$service,$company,$reason);
	if($result){
		header("location:../index.php?mod=assign_applicant");
	}
	else{
		header("location:../index.php?mod=assign_applicant");
	}
 }
 function edit(){
	$id = $_POST['id'];
	$app_id = $_POST['app_id'];
	$service = $_POST['service'];
	$company = $_POST['company'];
	$reason = $_POST['reason'];
	
	$assign = new Assign();
	$result = $assign->update_assign($app_id,$service,$company,$reason,$id);
	if($result){
		header("location:../index.php?mod=assign_applicant");
	}
	else{
		header("location:../index.php?mod=assign_applicant");
	}
 }
?>