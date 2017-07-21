<?php
class Applicants{
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
	public function new_applicant($fname,$mname,$lname,$age,$gender,$bday,$address,$mobile,$email){
		
			$sql="INSERT INTO tbl_applicant(app_fname,app_lname,app_minitial,app_age,app_gender,app_birthdate,app_address,app_mobile,app_email,app_status,app_time_added,app_date_added)
			VALUES('$fname','$lname','$mname','$age','$gender','$bday','$address','$mobile','$email','Active',NOW(),NOW())";
			
			$result=mysqli_query ($this->db,$sql) or
			die (mysqli_error() . " - Data cannot be inserted.");
			return $result;
	}
	public function update_applicant($fname,$mname,$lname,$age,$gender,$bday,$address,$mobile,$email,$id){
		
			$sql="UPDATE tbl_applicant SET app_fname='$fname', app_lname='$lname', app_minitial='$mname', app_age='$age',app_gender='$gender',app_birthdate='$bday',app_address='$address',app_mobile='$mobile',app_email='$email' WHERE app_id='$id'";
			
			
			$result=mysqli_query ($this->db,$sql) or
			die (mysqli_error() . " - Data cannot be inserted.");
			return $result;
	}
	public function all_applicant(){
		$sql="SELECT * FROM tbl_applicant";
		$result=mysqli_query($this->db,$sql);
		while($row=mysqli_fetch_assoc($result)){
			$list[] = $row;
		}
		return $list;
	}
	public function specificApplicant($id){
		$sql="SELECT * FROM tbl_applicant WHERE app_id = '$id'";
		$result=mysqli_query($this->db,$sql);
		while($row=mysqli_fetch_assoc($result)){
			$list[] = $row;
		}
		return $list;
	}
	public function specificApplicantName($id){
		$sql="SELECT * FROM tbl_applicant WHERE app_id = '$id'";
		$result=mysqli_query($this->db,$sql);
		$row=mysqli_fetch_assoc($result);
		$name = $row['app_fname'] . ' ' . $row['app_lname'];
		return $name;
	}
}
?>