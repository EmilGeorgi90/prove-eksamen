<?php
include "connect.php";
session_start();
setcookie($cookie_name,$cookie_value, time() - (86400 * 30), "/");
session_destroy();
header("location:../index.php");
?>