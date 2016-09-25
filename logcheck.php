<?php

if(!isset($_SESSION['id'])){
session_start();
}
if(isset($_POST['roll_no']) && isset($_POST['password']))
{
 include"db.php";
 $roll_no=$_POST['roll_no'];
 $password=$_POST['password'];
 $k="SELECT roll_no,password,name FROM sign_up WHERE roll_no='$roll_no' and password=md5('$password')";
 $table = mysqli_query($v,$k);
 $no=mysqli_num_rows($table);
   if($no>0)
   {      $_SESSION['id']=$roll_no;
			$arr=mysqli_fetch_array($table);
		  $_SESSION['id2']=$arr['name'];
    }
   else
    {
		
      session_destroy();
	  header("Location:login.php");
    }  
 }
 else if(!isset($_SESSION['id']))
 {
	 
  session_destroy();
  header("Location:login.php");
 }
?>