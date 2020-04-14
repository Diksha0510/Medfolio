<?php
include('mysql.php');
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $aan=$_POST[""];
  $name=$_POST[""];
  $details=fetchData($aan);
}
 ?>
