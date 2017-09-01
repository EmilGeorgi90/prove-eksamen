<?php
    require "connect.php";
include "function_test_input.php";
if ($_SERVER["REQUEST_METHOD"] == "POST")
$username = $_POST['username'];
$password = md5($_POST['password']);
$sql = "SELECT * FROM `login-sys`  WHERE username = ? AND password = ?";
    $stmt = $conn->prepare($sql);
$stmt->bindParam(1, $username);
$stmt->bindParam(2, $password);
    $stmt->execute();
    // set the resulting array to associative
    $result = $stmt->fetch(); 
    if(!empty($result)){
        setcookie($cookie_name,$result['username'], time() + (86400 * 30), "/");
         setcookie("userLevel",$result[$userLevel], time() + (86400 * 30), "/");
header("location:../index.php");
    }
    else
    {
        print("thats not a valid login");
    }

?>