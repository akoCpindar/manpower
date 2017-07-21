<?php 
include '../library/config.php';
include '../class/class.admin.php';

$action=(isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

switch($action){
	case 'add':
		add();
	break;
	default:
	header("location:../index.php?mod=admin");
} 
 function add(){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];
	$lname = $_POST['lname'];
	$fname = $_POST['fname'];
	
	$admin = new Admin();
	$result = $admin->new_admin($username,$password,$cpassword,$lname,$fname);
	if($result){
		header("location:../index.php?mod=admin");
	}
	else{
		header("location:../index.php?mod=admin");
	}
 }
?>