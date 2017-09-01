<?php
    require "connect.php";
include "function_test_input.php";
$nameErr = $emailErr = $passwordErr = $replayPasswordErr = "";
$usnermae = $email = $password = $replayPassword = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["username"])) {
    $nameErr = "username is required";
  } else {
    $username = test_input($_POST["username"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$username)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  if (empty($_POST["password"])) {
    $passwordErr = "password is required";
  } else {
    $password = test_input($_POST["password"]);
      // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$password)) {
      $passwordErr = "Only letters and white space allowed"; 
    }
  }
      if (empty($_POST["replayPassword"])) {
    $replayPasswordErr = "password is required";
  } else {
    $replayPassword = test_input($_POST["replayPassword"]);
          // looking for password and replay password are equel
          if($replayPassword != $password){
              $replayPasswordErr = "password is not equel to replay password";
          }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
    if(empty($nameErr) || empty($emailErr) || empty($passwordErr) || empty($replayPasswordErr)){
        try{
        $password = md5($password);
        $sql = "INSERT INTO `login-sys`(`username`, `password`, `email`) VALUES (?,?,?)";
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
    else{
        echo $nameErr + $emailErr + $passwordErr + $replayPasswordErr;
    }
}
?>