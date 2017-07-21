<?php
class Company{
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
	public function new_company($name,$description,$address){
		
		$sql="INSERT INTO tbl_company(com_name,com_description,com_address) VALUES('$name','$description','$address')";
			
		$result=mysqli_query ($this->db,$sql) or
		die (mysqli_error() . " - Data cannot be inserted.");
		return $result;
	}
	public function all_company(){
		$sql="SELECT * FROM tbl_company";
		$result=mysqli_query($this->db,$sql);
		while($row=mysqli_fetch_assoc($result)){
			$list[] = $row;
		}
		return $list;
	}
	public function edit_company($id,$name,$description,$address){
		$sql="UPDATE tbl_company SET com_name='$name', com_description='$description', com_address='$address' WHERE com_id='$id'";
		$result=mysqli_query ($this->db,$sql) or
		die (mysqli_error() . " - Data cannot be inserted.");
		return $result;
	}
	public function specificCompany($id){
		$sql="SELECT * FROM tbl_company WHERE com_id='$id'";
		$result=mysqli_query($this->db,$sql);
		while($row=mysqli_fetch_assoc($result)){
			$list[] = $row;
		}
		return $list;
	}
}
?>