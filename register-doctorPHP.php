<?php
	include("mysql.php");
	if($_SERVER["REQUEST_METHOD"] == "POST"){
        // $uid = $_POST["userid"];
        $username = $_POST["nme"];
		$email = $_POST["mail"];
		$pass = $_POST["pass"];
		$repass = $_POST["rp_pass"];
    $din=$_POST["din"];
    $aan=$_POST["aan"];
    $yor=$_POST["yor"];
    $type="doctor";
    $mc=$_FILES["mc"]["name"];
    $medical_cert = "/var/www/html/Medfolio/medical_certificate/";
    $mc_target_file = $medical_cert.basename($_FILES["mc"]["name"]);
		$mc_FileType = strtolower(pathinfo($mc_target_file,PATHINFO_EXTENSION));
    if(!(move_uploaded_file($_FILES["mc"]["tmp_name"],$mc_target_file)))
      $errorFile="could not save file";
		if(strlen($pass) < 8){
			$errorPass = "Password Should be of 8 characters";
			if(strcmp($pass,$repass) != 0)
				$errorRepass = "Password Doesnt Match";
		}
		if(checkEmailAadhaar($email, $aan) == 1)
			$errorE = "Email Id or Aadhaar Number already exists.";

		if($errorPass == "" and $errorRepass == "" and $errorE == ""){
            insertDataDoc($username, $email, md5($pass), $din, $aan, $yor, $type, $mc);
			session_destroy();
			session_start();
      header("Location: doctor_profile.php");
		}
	}
?>
