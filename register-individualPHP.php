
<?php
	include('mysql.php');
	if($_SERVER["REQUEST_METHOD"] == "POST"){
        // $uid = $_POST["userid"];
        $username = $_POST["name"];
		$email = $_POST["mail"];
		$pass = $_POST["pass"];
		$repass = $_POST["rp_pass"];
    $aan=$_POST["aan"];
    $type="individual";
		if(strlen($pass) < 8){
			$errorPass = "Password Should be of 8 characters";
			if(strcmp($pass,$repass) != 0)
				$errorRepass = "Password Doesnt Match";
		}
		if(checkEmailAadhaar($email, $aan) == 1)
			$errorE = "Email Id or Aadhaar Number already exists.";

		if($errorPass == "" and $errorRepass == "" and $errorE == ""){
            insertData($username, $email, md5($pass), $aan, $type);
			session_destroy();
			session_start();
      header("Location: patients_profile.php");
		}
	}
?>
