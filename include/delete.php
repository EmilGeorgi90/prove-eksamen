<?php
require "connect.php";
include "getArticle.php";
$sql ="DELETE FROM `content` WHERE cardName = ?";
    $stmt = $conn->prepare($sql); 
    $stmt->bindParam(1, $_POST["cardName"]);
    $stmt->execute();
header("location:../index.php")

?>