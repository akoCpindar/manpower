<?php 
include '../library/config.php';
include '../class/class.company.php';

$action=(isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

switch($action){
	case 'add':
		addCompany();
	break;
	case 'edit':
		editCompany();
	break;
	default:
	header("location:../index.php?mod=companies");
} 
 function addCompany(){
	$name = $_POST['name'];
	$description = $_POST['description'];
	$address = $_POST['address'];
	
	$company = new Company();
	$result = $company-> new_company($name,$description,$address);
	if($result){
		header("location:../index.php?mod=companies");
	}
	else{
		header("location:../index.php?mod=companies");
	}
 }

 function editCompany(){
	$id = $_POST['id'];
	$name = $_POST['name'];
	$description = $_POST['description'];
	$address = $_POST['address'];
	
	$company = new Company();
	$result = $company->edit_company($id,$name,$description,$address);
	if($result){
		header("location:../index.php?mod=companies");
	}
	else{
		header("location:../index.php?mod=companies");
	}
 }
?>