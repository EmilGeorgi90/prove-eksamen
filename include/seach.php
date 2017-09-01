<?php
require_once "connect.php";
session_start();
if(empty($_POST['seach'])){
    session_destroy();
    
header("location: ../index.php");
}else{
    try{
$sql = "SELECT * FROM content where cardName = ? or userName = ? ORDER BY id desc ";
$stmt = $conn->prepare($sql);
$stmt->bindParam(1, $_POST['seach']);
$stmt->bindParam(2, $_POST['seach']);
$stmt->execute();
//while there are text in array
        
        
    if(empty($stmt)){
        session_destroy();
        header("location:../index.php");
        
    }else{
        
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $_SESSION['Articel'] = $stmt->fetchAll();
        header("location:../index.php");
    }}
catch(Expection $e){
$e->GetMessage();
}}

?>