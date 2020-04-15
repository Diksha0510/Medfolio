<?php
    include("mysql.php");
	if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_POST["name"];
		$email = $_POST["mail"];
		$pass = $_POST["pass"];
        $repass = $_POST["rp_pass"];
        $aan=$_POST["aan"];
        $type="Individual";
		if(strlen($pass) < 8){	
			$errorPass = "Password Should be of 8 characters";
			if(strcmp($pass,$repass) != 0)
				$errorRepass = "Password Doesnt Match";
		}
		if(checkEmailName($email,$uid) == 1)
			$errorE = "Username or Email Id already exists.";
		
		if($errorName == "" and $errorPass == "" and $errorRepass == "" and $errorE == ""){
            insertData($username, $email, md5($pass), $aan, $type);
			session_destroy();
            session_start();
            
			$_SESSION['utype'] = $type;
            // $suname = $_SESSION["uname"];
            if ($_SESSION['utype'] == 'doctor')
            {
                echo "Doctor Welcome";
                header("Location: doctor_profile.php");
            }
            else
            {
                echo "Individual Welcome";
                header("Location: patients_profile.php");
            }
                
		}
	}
?>