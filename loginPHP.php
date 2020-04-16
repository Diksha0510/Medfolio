<?php
include("mysql.php");
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = $_POST["email"];
    $pass = $_POST["password"];
    $error="";
    if(Authentication($email,md5($pass)) == 0){
        $error = "Invalid Login Credentials!";
    }
    else{
          if($_SESSION["type"]=="doctor")
          {
            // session_start();
            header('Location: doctor_profile.php');
          }
          else {
            // session_start();
            header('Location: patients_profile.php');
          }
    }
}

?>
