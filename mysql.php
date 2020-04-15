<?php 
    function DatabaseConnection()
    {
        $servername = "localhost";
        $db_username = "newuser";
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
            }
            catch(PDOException $exception_error)
            {
                echo "Error".$exception_error->getMessage();
            }
    }

    function checkEmailName($email,$uid){
		try
		{
			$connection = DatabaseConnection();
			$stmt = $connection->prepare("select UID from Register where EMAIL = :email");
			$stmt->bindParam(":email",$email);
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
?>