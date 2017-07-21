<?php
class Services{
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
	public function new_service($service){
		$sql="SELECT * FROM tbl_services WHERE ser_title='$service'";
		$check=$this->db->query($sql);
		$count_row=$check->num_rows;
		
		if($count_row == 0){
			$sql="INSERT INTO tbl_services(ser_title,ser_status,ser_time,ser_date)VALUES('$service','Active',NOW(),NOW())";
			
			$result=mysqli_query ($this->db,$sql) or
			die (mysqli_error() . " - Data cannot be inserted.");
			return $result;
		}
		else{
			return false;
		}
	}
	public function all_services(){
		$sql="SELECT * FROM tbl_services";
		$result=mysqli_query($this->db,$sql);
		while($row=mysqli_fetch_assoc($result)){
			$list[] = $row;
		}
		return $list;
	}
	public function all_services_active(){
		$sql="SELECT * FROM tbl_services WHERE ser_status='Active'";
		$result=mysqli_query($this->db,$sql);
		while($row=mysqli_fetch_assoc($result)){
			$list[] = $row;
		}
		return $list;
	}
	public function edit_services($id,$service){
		$sql="UPDATE tbl_services SET ser_title='$service' WHERE ser_id='$id'";
		$result=mysqli_query ($this->db,$sql) or
		die (mysqli_error() . " - Data cannot be inserted.");
		return $result;
	}
	public function specificService($id){
		$sql="SELECT * FROM tbl_services WHERE ser_id='$id'";
		$result=mysqli_query($this->db,$sql);
		while($row=mysqli_fetch_assoc($result)){
			$list[] = $row;
		}
		return $list;
	}
	public function remove_services($id){
		$sql="UPDATE tbl_services SET ser_status='Remove' WHERE ser_id='$id'";
		$result=mysqli_query ($this->db,$sql) or
		die (mysqli_error() . " - Data cannot be inserted.");
		return $result;
	}
	public function archive_services($id){
		$sql="UPDATE tbl_services SET ser_status='Active' WHERE ser_id='$id'";
		$result=mysqli_query ($this->db,$sql) or
		die (mysqli_error() . " - Data cannot be inserted.");
		return $result;
	}
}
?>