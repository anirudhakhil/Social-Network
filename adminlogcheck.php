<?php

if(!isset($_SESSION['username'])){
session_start();
}

if (isset($_POST['username']) && isset($_POST['password']))
{
$username=$_POST['username'];
$password=$_POST['password'];
    if($_POST['username']=="admin" && $_POST['password']=="admin@123")
	{
		
		$_SESSION['username']=$_POST['username'];
		$_SESSION['password']=$_POST['password'];
	}
	else
	{
		session_destroy();
		header("Location:adminlogin.php ");
		
	}
}	
else if(!isset($_SESSION['username']))
{
	session_destroy();
	header("Location:adminlogin.php ");
}	

?>