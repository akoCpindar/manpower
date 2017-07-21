<?php
class Admin{
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


	public function check_login($username,$password){
		$sql = "SELECT * FROM tbl_admin WHERE 
		adm_username = '$username' AND adm_password='$password'";
		$result=mysqli_query($this->db,$sql);
		$userdata=mysqli_fetch_array($result);
		$count = $result->num_rows;
		if($count == 1){
			$_SESSION['login']=true;
			$_SESSION['id']= $userdata[adm_id];
			return true;
		}
		else{
			return false;
		}
	}
	public function new_admin($username,$password,$cpassword,$lname,$fname){
		
			$sql="INSERT INTO tbl_admin (adm_username,adm_password,adm_fname,adm_lname,adm_time_added,adm_date_added) VALUES('$username','$password','$lname','$fname',NOW(),NOW())";
			
			$result=mysqli_query ($this->db,$sql) or
			die (mysqli_error() . " - Data cannot be inserted.");
			return $result;
	}
	public function all_admin(){
		$sql="SELECT * FROM tbl_admin";
		$result=mysqli_query($this->db,$sql);
		while($row=mysqli_fetch_assoc($result)){
			$list[] = $row;
		}
		return $list;
	}
}
?>