<?php

    function DatabaseConnection()
    {
        $servername = "localhost";
        $db_username = "root";
        $db_password = "Diksha@asd123";
        $dbname = "Medfolio";
        try{
            $connection = new PDO("mysql:host=localhost;dbname=Medfolio", "root", "Diksha@asd123");
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "abcd";
            return $connection;
        }
        catch(PDOException $error){
            echo "Error".$error->getMessage();
            die();
        }
    }
    function insertData($name, $email, $pass, $aan, $type)
    {
        try
            {
                $connection=DatabaseConnection();
                $stmt = $connection->prepare("insert into Register (NAME, EMAIL, PASSWORD, AADHAAR_NUMBER, TYPE) VALUES (:name, :email, :password, :aadhar, :type)");
                $stmt->bindParam(":name", $name);
                $stmt->bindParam(":email",$email);
                $stmt->bindParam(":password",$pass);
                $stmt->bindParam(":aadhar", $aan);
                $stmt->bindParam(":type", $type);
                $stmt->execute();
                $stmt1= $connection->prepare("select UID from Register where EMAIL = :email");
                $stmt1->bindParam(":email", $email);
                $stmt1->execute();
                $count=$stmt1->rowCount();
                if($count > 0)
                {
                  $_SESSION["uid"]=$row["UID"];
                }
                $stmt = $connection->prepare("insert into PATIENT (UID, NAME, AADHAAR_NUMBER) VALUES (:uid, :name, :aadhar)");
                $stmt->bindParam(":uid", $_SESSION["uid"]);
                $stmt->bindParam(":name", $name);
                $stmt->bindParam(":aadhar", $aan);
                $stmt->execute();
            }
            catch(PDOException $exception_error)
            {
                echo "Error".$exception_error->getMessage();
            }

    }
    function insertDataDoc($name, $email, $pass, $din, $aan, $yor, $type, $mc )
    {
      try
      {
        $connection = DatabaseConnection();
        $stmt = $connection->prepare("insert into Register (NAME, EMAIL, PASSWORD, AADHAAR_NUMBER, TYPE) VALUES (:name, :email, :password, :aadhar, :type)");
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":email",$email);
        $stmt->bindParam(":password",$pass);
        $stmt->bindParam(":aadhar", $aan);
        $stmt->bindParam(":type",$type);
        $stmt->execute();
        $stmt1= $connection->prepare("select UID from Register where EMAIL = :email");
        $stmt1->bindParam(":email", $email);
        $stmt1->execute();
        $count=$stmt1->rowCount();
        if($count > 0)
        {
          $_SESSION["uid"]=$row["UID"];
        }
        $stmt = $connection->prepare("insert into DOCTOR (UID, DIN, YOR, MEDICAL_CERTIFICATE) VALUES (:uid, :din, :yor, :mc)");
        $stmt->bindParam(":uid", $_SESSION["uid"]);
        $stmt->bindParam(":din",$din);
        $stmt->bindParam(":yor",$yor);
        $stmt->bindParam(":mc", $mc);
        $stmt->execute();
        $stmt = $connection->prepare("insert into PATIENT (UID, NAME, AADHAAR_NUMBER) VALUES (:uid, :name, :aadhar)");
        $stmt->bindParam(":uid", $_SESSION["uid"]);
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":aadhar", $aan);
        $stmt->execute();
      }
      catch (PDOException $exception_error)
      {
        echo "Error".$exception_error->getMessage();
      }

    }
    function checkEmailAadhaar($email, $aan){
		try
		{
			$connection = DatabaseConnection();
			$stmt = $connection->prepare("select EMAIL, AADHAAR_NUMBER from Register where EMAIL = :email or AADHAAR_NUMBER = :adhar");
			$stmt->bindParam(":email",$email);
      $stmt->bindParam(":adhar",$aan);
			$stmt->execute();
			$count = $stmt->rowCount();
			if($count > 0){
				return 1;
			}
		}
		catch(PDOException $exception_error)
		{
			echo "Error".$exception_error->getMessage();
		}
    }
    function Authentication($email, $pass){
		try
		{
			$connection = DatabaseConnection();
			$stmt = $connection->prepare("select EMAIL, PASSWORD, TYPE from Register where EMAIL = :email and PASSWORD = :password");
			$stmt->bindParam(":email",$email);
			$stmt->bindParam(":password",$pass);
			$stmt->execute();
			$count = $stmt->rowCount();
			if($count > 0){
        $_SESSION["type"]=$row["TYPE"];
           $stmt1= $connection->prepare("select UID from Register where EMAIL = :email");
        $stmt1->bindParam(":email", $email);
        $stmt1->execute();
        $count=$stmt1->rowCount();
        if($count > 0)
        {
          $_SESSION["uid"]=$row["UID"];
        }
				return 1;
			}
			else{
				return 0;
			}
		}
		catch(PDOException $exception_error)
		{
			echo "Error".$exception_error->getMessage();
		}
    }
    function addDetails($age ,$gender ,$height ,$weight ,$bloodgroup ,$medication ,$allergy ,$diseases ,$medical_report ,$other_documents ,$other_details)
    {
      try
        {
          $connection = DatabaseConnection();
          $stmt = $connection->prepare("insert into PATIENT (AGE, GENDER, HEIGHT, WEIGHT, BLOOD_GROUP, MEDICATION, MEDICAL_REPORT, EXTRA_DOCUMENTS, OTHER_DETAILS) VALUES (:age, :gender, :height, :weight, :bloodgroup, :medication, :medical_rep, :extra_doc, :other_det) where UID = :uid");
          $stmt->bindParam(":age", $age);
          $stmt->bindParam(":gender",$gender);
          $stmt->bindParam(":height",$height);
          $stmt->bindParam(":weight", $weight);
          $stmt->bindParam(":bloodgroup",$bloodgroup);
          $stmt->bindParam(":medication", $medication);
          $stmt->bindParam(":medical_rep", $medical_report);
          $stmt->bindParam(":extra_doc", $extra_documents);
          $stmt->bindParam(":other_det", $other_details);
          $stmt->bindParam(":uid", $_SESSION["uid"]);
          $stmt->execute();
        }
        catch(PDOException $except_error )
        {
          echo $except_error;
        }
    }
    function fetchData($aan)
    {
      try {
        $connection=DatabaseConnection();
        $stmt = $connection->prepare("select AGE, GENDER, HEIGHT, WEIGHT, BLOOD_GROUP, MEDICATION, MEDICAL_REPORT, EXTRA_DOCUMENTS, OTHER_DETAILS from PATIENT where AADHAAR_NUMBER = :aan");
        $stmt->bindParam(":aan", $aan);
        $stmt->execute();
        $count=$stmt->rowCount();
        if($count>0)
        {
          $_SESSION["age"=$row["AGE"];
          $_SESSION["gender"]=$row["GENDER"];
          $_SESSION["height"]=$row["HEIGHT"];
          $_SESSION["weight"]= $row["WEIGHT"];
          $_SESSION["bloodgroup"]=$row["BLOOD_GROUP"];
          $_SESSION["medication"]=$row["MEDICATION"];
          $_SESSION["medical_rep"]=$row["MEDICAL_REPORT"];
          $_SESSION["extra_doc"]=$row["EXTRA_DOCUMENTS"];
          $_SESSION["other_det"]=$row["OTHER_DETAILS"];
        }
        else {
          echo "This person is not registered";
        }
      } catch (PDOException $except_error) {
        echo $except_error;
      }

    }
    ?>
<!-- Create table Register (UID INT(10) SIGNED AUTO_INCREMENT PRIMARY KEY, NAME VARCHAR(50) NOT NULL, EMAIL VARCHAR(50) NOT NULL, PASSWORD VARCHAR(30) NOT NULL, AADHAAR_NUMBER INT(16) NOT NULL, TYPE VARCHAR(10) NOT NULL);
Query OK, 0 rows affected, 2 warnings (1.79 sec)

mysql> create table DOCTOR(UID INT, DIN INT(20), YOR INT(16), MEDICAL_CERTIFICATE VARCHAR(30), FOREIGN KEY (UID) REFERENCES Register (UID));
Query OK, 0 rows affected, 2 warnings (1.13 sec)

mysql> CREATE TABLE PATIENT(UID INT, NAME VARCHAR(50), AADHAAR_NUMBER INT(16), AGE INT(4), GENDER CHAR(6), HEIGHT FLOAT, WEIGHT FLOAT, BLOOD_GROUP CHAR(6), MEDICATION TEXT, ALLERGY TEXT, DISEASES TEXT, MEDICAL_REPORT VARCHAR(15), EXTRA_DOCUMENTS VARCHAR(15), OTHER_DETAILS TEXT, FOREIGN KEY(UID) REFERENCES Register (UID)); -->
<!-- change the name of the file doctoes_check_pateints to doctors_check_patients -->
<!-- display the details of the patient on the doctors_check_patient page -->
<!-- Haven't included the PHP.php files into the actual files -->
<!-- I havent implemented the sign out button and the forgot password has also not been done -->
