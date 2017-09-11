<?php
    require "connect.php";
include "function_test_input.php";
if ($_SERVER["REQUEST_METHOD"] == "POST")
$username = $_POST['username'];
$userLevel = $_POST['userLevel'];
$sql = "update login set userLevel = '$userLevel' where username = '$username'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
header("location:../index.php");
    // set the resulting array to associative
        print("thats not a valid login");
        header( "Refresh:5; url=../index.php", true, 303);

    
?>