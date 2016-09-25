 <?php
$roll_no=$_POST['roll_no'];
$name=$_POST['name'];
$password=md5($_POST['password']);
$gender=$_POST['gender'];
$dept=$_POST['dept'];
$dob_dd=$_POST['dob_dd'];	 
$dob_mm=$_POST['dob_mm'];
$dob_yy=$_POST['dob_yy'];
$dob=$dob_dd.'/'.$dob_mm.'/'.$dob_yy;
$email=$_POST['email'];
$mobile=$_POST['mobile'];


include"db.php";

$q= "SELECT roll_no FROM sign_up WHERE roll_no='$roll_no'";
$table = mysqli_query($v,$q);
$no=mysqli_num_rows($table);
 if($no==1){echo"ROLL NUMBER ALREADY TAKENNN!!!";}

$s="insert into sign_up (roll_no, name, password, gender, dept, dob, email, mobile) values('$roll_no','$name','$password','$gender','$dept','$dob', '$email', '$mobile')";
mysqli_query($v,$s);
header("Location:log.php");


?>