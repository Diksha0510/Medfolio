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
    // $medical_report=$_FILES["medical_report"]["name"];
    // $other_documents=$_FILES["other_docs"]["name"];
    $other_details=$_POST["other_det"];
    // $medical_rep = "/home/diksha/Downloads/Medfolio/medical_report/";
    // $mr_target_file = rand(1000,100000).".".strtolower(pathinfo($mr_target_file,PATHINFO_EXTENSION));
    // if(!(move_uploaded_file($_FILES["medical_report"]["tmp_name"],$medical_rep.$mr_target_file)))
    //   $errorFile="could not save file";
    //   echo $errorFile;
    // $other_doc = "/var/www/html/Medfolio/other_documents/";
    // $od_target_file = $other_doc.basename($_FILES["other_docs"]["name"]);
    // $od_FileType = strtolower(pathinfo($od_target_file,PATHINFO_EXTENSION));
    // if(!(move_uploaded_file($_FILES["other_docs"]["tmp_name"],$od_target_file)))
    //   $errorFile="could not save file";
    addDetails($age, $gender, $height, $weight, $bloodgroup, $medication, $allergy, $diseases, $other_details);
  }
  ?>
<!-- create a folder medical_report to save the medical report inside Medfolio
create a folder other_documents to save the other documents inside Medfolio -->
