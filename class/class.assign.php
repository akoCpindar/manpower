<?php
class Assign{
	public $db;
	
	public function __construct(){
		$this->db = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
		if(mysqli_connect_errno()){
			echo "Error: Could connect to Database.";
			exit;
		}
	}
	
	public function get_session(){
		if(isset($_SESSION['login']) && $_SESSION['login'] == true){
			return true;
		}
		else{
			return false;
		}
	}
	public function new_assign($app_id,$service,$company,$reason){
		$sql="SELECT * FROM tbl_assign WHERE app_id='$app_id'";
		$check=$this->db->query($sql);
		$count_row=$check->num_rows;
		
		if($count_row == 0){
			$sql="INSERT INTO tbl_assign(app_id,ass_service,ass_company,ass_reason,ass_status,ass_time,ass_date)VALUES('$app_id','$service','$company','$reason','Active',NOW(),NOW())";
			
			$result=mysqli_query ($this->db,$sql) or
			die (mysqli_error() . " - Data cannot be inserted.");
			return $result;
		}
		else{
			return false;
		}
	}
	public function update_assign($app_id,$service,$company,$reason,$id){
		$sql="UPDATE tbl_assign SET app_id='$app_id', ass_service='$service', ass_company='$company', ass_reason='$reason' WHERE ass_id='$id'";
			
		$result=mysqli_query ($this->db,$sql) or
		die (mysqli_error() . " - Data cannot be inserted.");
		return $result;
		
	}
	public function all_assign(){
		$sql="SELECT * FROM tbl_assign";
		$result=mysqli_query($this->db,$sql);
		while($row=mysqli_fetch_assoc($result)){
			$list[] = $row;
		}
		return $list;
	}
	public function all_specific_assign($id){
		$sql="SELECT * FROM tbl_assign WHERE ass_id = '$id'";
		$result=mysqli_query($this->db,$sql);
		while($row=mysqli_fetch_assoc($result)){
			$list[] = $row;
		}
		return $list;
	}
}
?>