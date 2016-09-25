<?php

include"logcheck.php";

include"db.php";
$newspost = $_POST['newspost'];
$sender=$_SESSION['id'];
$name=$_SESSION['id2'];
$q="INSERT INTO news_post (newspost,sender,name) values ('$newspost', '$sender','$name')";
mysqli_query($v,$q);
header("Location:Post_news.php");

?>