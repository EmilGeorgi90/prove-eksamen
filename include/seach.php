<?php
require_once "connect.php";
session_start();
if(empty($_POST['seach']) and empty($_POST['filter'])){
    session_destroy();
    
}else{
    try{
$sql = "SELECT * FROM content where cardName = ? or userName = ? or class = ? ORDER BY id desc ";
$stmt = $conn->prepare($sql);
$stmt->bindParam(1, $_POST['seach']);
$stmt->bindParam(2, $_POST['seach']);
$stmt->bindParam(3, $_POST['filter']);
$stmt->execute();
//while there are text in array
        
        
    if(empty($stmt)){
        session_destroy();
        
    }else{
        
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $_SESSION['Articel'] = $stmt->fetchAll();
        echo "<table>
        <tr>
        <th></th>
        <th>Lastname</th>
        <th>Age</th>
        <th>Hometown</th>
        <th>Job</th>
        </tr>";
        while($row = $stmt->fetch()) {
            echo "<tr>";
            echo "<td>" . $row['imgSrc'] . "</td>";
            echo "<td>" . $row['imgAlt'] . "</td>";
            echo "<td>" . $row['description'] . "</td>";
            echo "<td>" . $row['type'] . "</td>";
            echo "<td>" . $row['class'] . "</td>";
            echo "<td>" . $row['cardSet'] . "</td>";
            echo "<td>" . $row['published'] . "</td>";
            echo "<td>" . $row['cardName'] . "</td>";
            echo "<td>" . $row['username'] . "</td>";
            echo "</tr>";
        }
    }}
catch(Expection $e){
$e->GetMessage();
}}

?>