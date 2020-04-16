<?php
include('mysql.php');
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $aan=$_POST["aadhar_number"];
  $name=$_POST["aadhar_name"];
  fetchData($aan);
  echo $_SESSION["age"];
}
 ?>
