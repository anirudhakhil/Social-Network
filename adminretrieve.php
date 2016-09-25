<?php 

include"adminlogcheck.php";
include"db.php";
$sql="SELECT * FROM message  WHERE roll_no='$_SESSION[username]'";
$r=mysqli_query($v,$sql);
echo "<table width='600' border='2'>";
echo "<th>MESSAGE</th>";
echo "<th>RECEIVED FROM</th>";
echo "<th>TIME</th></tr>";
while($res=mysqli_fetch_array($r))
{
echo "<tr><td align='center'> <a href='adminfullmsg.php?name=$res[1]'>View</a> </td><td align='center'><b>$res[4]</b>($res[2])</td><td align='center'>$res[3]</td>";
echo "<tr>";
}
echo "</table>"
?>
