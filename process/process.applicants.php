<?php 
include '../library/config.php';
include '../class/class.applicants.php';

$action=(isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

switch($action){
	case 'add':
		add();
	break;
	case 'edit':
		edit();
	break;
	default:
	header("location:../index.php?mod=applicants");
} 
 function add(){
	$fname = $_POST['fname'];
	$mname = $_POST['mname'];
	$lname = $_POST['lname'];
	$age = $_POST['age'];
	$gender = $_POST['gender'];
	$bday = $_POST['bday'];
	$address = $_POST['address'];
	$mobile = $_POST['mobile'];
	$email = $_POST['email'];
	
	$applicants = new Applicants();
	$result = $applicants->new_applicant($fname,$mname,$lname,$age,$gender,$bday,$address,$mobile,$email);
	if($result){
		header("location:../index.php?mod=applicants");
	}
	else{
		header("location:../index.php?mod=applicants");
	}
 }
 function edit(){
	$id = $_POST['id'];
	$fname = $_POST['fname'];
	$mname = $_POST['mname'];
	$lname = $_POST['lname'];
	$age = $_POST['age'];
	$gender = $_POST['gender'];
	$bday = $_POST['bday'];
	$address = $_POST['address'];
	$mobile = $_POST['mobile'];
	$email = $_POST['email'];
	
	$applicants = new Applicants();
	$result = $applicants->update_applicant($fname,$mname,$lname,$age,$gender,$bday,$address,$mobile,$email,$id);
	if($result){
		header("location:../index.php?mod=applicants");
	}
	else{
		header("location:../index.php?mod=applicants");
	}
 }
?>