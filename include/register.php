<?php
    require "connect.php";
include "function_test_input.php";
$usnermae = $email = $password = $replayPassword = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = test_input($_POST["username"]);

    $password = test_input($_POST["password"]);
    $replayPassword = test_input($_POST["replayPassword"]);
          if($replayPassword != $password){
            echo "you password is not equal";
        header( "Refresh:5; url=../index.php", true, 303);
          }else{
    $email = test_input($_POST["email"]);

        try{
        $password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO `login`(`username`, `password`, `email`) VALUES (?,?,?)";
        $statement = $conn->prepare($sql);
        $statement->bindParam(1, $username);
            
        $statement->bindParam(2, $password);
            
        $statement->bindParam(3, $email);
            $statement->execute();
        header("location:../index.php");
        setcookie($cookie_name,$cookie_value, time() + (86400 * 30), "/");
        }
        catch(PDOException $e){
            echo "email is allready in use". $e->getMessage();
        }
      }
}
?>