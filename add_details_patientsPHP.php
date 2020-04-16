<?php
	include('mysql.php');
	if($_SERVER["REQUEST_METHOD"] == "POST"){

    $age=$_POST["age"];
    $gender=$_POST["sex"];
    $height=$_POST["height"];
    $weight=$_POST["weight"];
    $bloodgroup=$_POST["bgp"];
    $medication=$_POST["medic"];
    $allergy=$_POST["allergy"];
    $diseases=$_POST["diseases"];
    $other_details=$_POST["other_det"];
    // $medical_report=$_FILES[""]["name"];
    // $medical_rep = "/var/www/html/Medfolio/medical_report/";
    // $mr_target_file = $medical_rep.basename($_FILES[""]["name"]);
    // $mr_FileType = strtolower(pathinfo($mr_target_file,PATHINFO_EXTENSION));
    // if(!(move_uploaded_file($_FILES[""]["tmp_name"],$mr_target_file)))
    //   $errorFile="could not save file";
    // $other_documents=$_FILES[""]["name"];
    // $other_doc = "/var/www/html/Medfolio/other_documents/";
    // $od_target_file = $other_doc.basename($_FILES[""]["name"]);
    // $od_FileType = strtolower(pathinfo($od_target_file,PATHINFO_EXTENSION));
    // if(!(move_uploaded_file($_FILES[""]["tmp_name"],$od_target_file)))
    //   $errorFile="could not save file";
    addDetails($age, $gender, $height, $weight, $bloodgroup, $medication, $allergy, $diseases, $other_details);
  }
  ?>
<!-- create a folder medical_report to save the medical report inside Medfolio
create a folder other_documents to save the other documents inside Medfolio -->
