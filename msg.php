<?php

include"logcheck.php";

include"db.php";
$roll_no = $_POST['roll_no'];
$message = $_POST['message'];
$sender=$_SESSION['id'];
$name=$_SESSION['id2'];
$q="INSERT INTO message (roll_no,message,sender,name) values ('$roll_no', '$message', '$sender','$name')";
mysqli_query($v,$q);
header("Location:compose.php");

?>