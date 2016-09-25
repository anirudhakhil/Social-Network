<?php 
include"logcheck.php";
include"db.php";
$sql="SELECT * FROM news_post  WHERE name='$_SESSION[id2]'";
$r=mysqli_query($v,$sql);
echo "<table width='600' border='2'>";
echo "<th>Your POST</th>";
echo "<th>TIME</th></tr>";
while($res=mysqli_fetch_array($r))
{
echo "<tr><td align='center'> <a href='fullpost.php?name=$res[0]'>View</a> </td><td align='center'><b>$res[3]</b></td>";
echo "<tr>";
}
echo "</table>";
?>
