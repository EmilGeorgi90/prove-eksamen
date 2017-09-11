<?php

require "connect.php";
if($_COOKIE["userLevel"] > 1){
    $sql ="DELETE FROM `content` WHERE cardName = ?";    
    $stmt = $conn->prepare($sql); 
    $stmt->bindParam(1, $_POST["cardName"]);
    $stmt->execute();    
    header("location:../index.php");
}elseif ($_POST["cardName"] == $_SESSION['currentCard']){
    $sql ="DELETE FROM content where cardName = ? AND username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(1, $_POST["cardName"]);
    $stmt->bindParam(2, $_COOKIE["$cookie_name"]);
    $stmt->execute();
    header("Refresh:5; url=../index.php", true, 303);
}

 


?>