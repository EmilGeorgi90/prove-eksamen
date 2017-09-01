<?php
require "connect.php";
include "function_test_input.php";
$username = $_COOKIE[$cookie_name];
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
print_r($target_file);
$fileToUploadErr = $imgAltErr = $descriptionErr = $typeErr = $classErr = $cardSetErr = $cardNameErr = $usernameErr = "";
$fileToUpload = $imgAlt = $description = $type = $class = $cardSet = $cardName  = "";
//checking for the file is empty
  if (empty($_POST["fileToUpload"])) {
    $fileToUploadErr = "you need to upload imgae";
  } else {
    $fileToUpload = $target_file;
  }
      if (empty($_POST["imgAlt"])) {
    $imgAltErr = "imgAlt is required";
  } else {
    $imgAlt = test_input($_POST["imgAlt"]);
          // looking for password and replay password are equel
  }
  
  if (empty($_POST["description"])) {
    $descriptionErr = "description is required";
  } else {
    $description = test_input($_POST["description"]);
    // check if e-mail address is well-formed
  }
  if (empty($_POST["type"])) {
    $typeErr = "type is required";
  } else {
    $type = test_input($_POST["type"]);
      // check if name only contains letters and whitespace
  }
      if (empty($_POST["class"])) {
    $classErr = "class is required";
  } else {
    $class = test_input($_POST["class"]);
          // looking for password and replay password are equel
  }
  
  if (empty($_POST["cardSet"])) {
    $cardSetErr = "cardSet is required";
  } else {
    $cardSet = test_input($_POST["cardSet"]);
    // check if e-mail address is well-formed
  }
  if (empty($_POST["cardName"])) {
    $cardNameErr = "cardName is required";
  } else {
    $cardName = test_input($_POST["cardName"]);
    // check if e-mail address is well-formed
  }

    if(empty($fileToUploadErr) || empty($imgAltErr) || empty($descriptionErr) || empty($typeErr) || empty($classErr) || empty($cardSetErr) ||  empty($cardNameErr)){
        try{
            $target_file = "include/$target_file";
        $sql = "INSERT INTO `content`(`imgSrc`, `imgAlt`, `description`, `type`, `class`, `cardSet`, `cardName`, `username`) VALUES (?,?,?,?,?,?,?,?)";
        $statement = $conn->prepare($sql);
        $statement->bindParam(1, $target_file);
            $statement->bindParam(2, $imgAlt);
            $statement->bindParam(3, $description);
            $statement->bindParam(4, $type);
            $statement->bindParam(5, $class);
            $statement->bindParam(6, $cardSet);
            $statement->bindParam(7, $cardName);
            $statement->bindParam(8, $_COOKIE[$cookie_name]);
            $statement->execute();
        header("location:../index.php");
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }

    }
?>