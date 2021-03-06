<?php
  // session_start();
    function DatabaseConnection()
    {
        $servername = "localhost";
        $db_username = "username";
        $db_password = "password";
        $dbname = "Medfolio";
        try{
            $connection = new PDO("mysql:host=$servername;dbname=$dbname", $db_username, $db_password);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
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
                $row=$stmt1->fetch();
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
                $_SESSION["aan"]=$aan;
                $_SESSION["name"]=$name;
            }
            catch(PDOException $exception_error)
            {
                echo "Error".$exception_error->getMessage();
            }
    }
    function insertDataDoc($name, $email, $pass, $din, $aan, $yor, $type)
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
        $row=$stmt1->fetch();
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
        $stmt = $connection->prepare("insert into DOCTOR (UID, DIN, YOR) VALUES (:uid, :din, :yor)");
        $stmt->bindParam(":uid", $_SESSION["uid"]);
        $stmt->bindParam(":din", $din);
        $stmt->bindParam(":yor", $yor);
        $stmt->execute();
        $_SESSION["name"]=$name;
        $_SESSION["aan"]=$aan;
        $_SESSION["din"]=$din;
        $_SESSION["yor"]=$yor;
      }
      catch (PDOException $exception_error)
      {
        echo "Error".$exception_error->getMessage();
      }

    }
    function Authentication($email, $pass){
		try
		{
			$connection = DatabaseConnection();
			$stmt = $connection->prepare("select UID, NAME, AADHAAR_NUMBER, TYPE from Register where EMAIL = :email and PASSWORD = :password");
			$stmt->bindParam(":email", $email);
			$stmt->bindParam(":password", $pass);
			$stmt->execute();
      $row=$stmt->fetch();
			$count = $stmt->rowCount();
			if($count > 0){
        $_SESSION["aan"]=$row["AADHAAR_NUMBER"];
        $_SESSION["type"]=$row["TYPE"];
        $_SESSION["name"]=$row["NAME"];
        $_SESSION["uid"]=$row["UID"];

        if($_SESSION["type"] == "doctor")
        {
          $stmt = $connection->prepare("select DIN, YOR from DOCTOR where UID = :uid");
    			$stmt->bindParam(":uid", $_SESSION["uid"]);
    			$stmt->execute();
          $row=$stmt->fetch();
    			$count = $stmt->rowCount();
    			if($count > 0){
            $_SESSION["din"]=$row["DIN"];
            $_SESSION["yor"]=$row["YOR"];
          }
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
    function checkEmailAadhaar($email, $aan){
		try
		{
			$connection = DatabaseConnection();
			$stmt = $connection->prepare("select UID from Register where EMAIL = :email or AADHAAR_NUMBER = :adhar");
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
    function addDetails($age, $gender, $height, $weight, $bloodgroup, $medication, $allergy, $diseases, $other_details)
    {
      try
        {
          $connection = DatabaseConnection();
          $uid=(int)$_SESSION["uid"];
          $stmt = $connection->prepare("update PATIENT set AGE = :age, GENDER = :gender, HEIGHT = :height, WEIGHT = :weight, BLOOD_GROUP = :bloodgroup, MEDICATION = :medication, ALLERGY = :allergy, DISEASES = :diseases, OTHER_DETAILS = :other_det where UID = :uid");
          $stmt->bindParam(":age", $age);
          $stmt->bindParam(":gender", $gender);
          $stmt->bindParam(":height", $height);
          $stmt->bindParam(":weight", $weight);
          $stmt->bindParam(":bloodgroup", $bloodgroup);
          $stmt->bindParam(":medication", $medication);
          $stmt->bindParam(":allergy", $allergy);
          $stmt->bindParam(":diseases", $diseases);
          $stmt->bindParam(":other_det", $other_details);
          $stmt->bindParam(":uid", $uid);
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
        $stmt = $connection->prepare("select AGE, GENDER, HEIGHT, WEIGHT, BLOOD_GROUP, MEDICATION, ALLERGY, DISEASES, OTHER_DETAILS from PATIENT where AADHAAR_NUMBER = :aan");
        $stmt->bindParam(":aan", $aan);
        $stmt->execute();
        $row=$stmt->fetch();
        $count=$stmt->rowCount();
        if($count>0)
        {
          $_SESSION["age"]=$row["AGE"];
          $_SESSION["gender"]=$row["GENDER"];
          $_SESSION["height"]=$row["HEIGHT"];
          $_SESSION["weight"]= $row["WEIGHT"];
          $_SESSION["bloodgroup"]=$row["BLOOD_GROUP"];
          $_SESSION["medication"]=$row["MEDICATION"];
          $_SESSION["allergy"]=$row["ALLERGY"];
          $_SESSION["diseases"]=$row["DISEASES"];
          $_SESSION["other_det"]=$row["OTHER_DETAILS"];
          return 1;
        }
        else {
          echo "This person is not registered";
        }
      } catch (PDOException $except_error) {
        echo $except_error;
      }

    }
?>
