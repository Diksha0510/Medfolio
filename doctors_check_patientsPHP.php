<?php
include('mysql.php');
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $_SESSION["aan1"]=$_POST["aadhar_number"];
  $_SESSION["name1"]=$_POST["aadhar_name"];
    header('Location: details_output.php');
}
 ?>
