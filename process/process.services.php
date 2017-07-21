<?php 
include '../library/config.php';
include '../class/class.services.php';

$action=(isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

switch($action){
	case 'add':
		addService();
	break;
	case 'edit':
		editServices();
	break;
	case 'remove':
		removeServices();
	break;
	case 'archive':
		archiveServices();
	break;
	default:
	header("location:../index.php?mod=services");
} 
 function addService(){
	$service = $_POST['title'];
	
	$services = new Services();
	$result = $services->new_service($service);
	if($result){
		header("location:../index.php?mod=services");
	}
	else{
		header("location:../index.php?mod=services");
	}
 }

 function editServices(){
	$id = $_POST['id'];
	$service = $_POST['title'];
	
	$services = new Services();
	$result = $services->edit_services($id,$service);
	if($result){
		header("location:../index.php?mod=services");
	}
	else{
		header("location:../index.php?mod=services");
	}
 }

 function removeServices(){
	$id = $_GET['id'];
	
	$services = new Services();
	$result = $services->remove_services($id);
	if($result){
		header("location:../index.php?mod=services");
	}
	else{
		header("location:../index.php?mod=services");
	}
 }
 function archiveServices(){
	$id = $_GET['id'];
	
	$services = new Services();
	$result = $services->archive_services($id);
	if($result){
		header("location:../index.php?mod=services");
	}
	else{
		header("location:../index.php?mod=services");
	}
 }
?>