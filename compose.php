<?php




include"logcheck.php"; 
?>
<html>
<head>
<title>SocialNet</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="style.css" rel="stylesheet" type="text/css" />    
</head>
<body>
<div class="content">
      <div class="content_bg">
	  <div class="mainbar">	  
<CENTER><br><br>
<h1>COMPOSE</h1><br>
<form name='compose' action='msg.php' method='post' onSubmit='return validate();'>
<table align='center'>
<tr><td><th align='right' valign='middle'>Roll Number:</th></td><td><input type='text' name='roll_no' id='roll_no'></td></tr>
</table>
<br>
<textarea cols='40' rows='10' type='text' name='message' id='message'></textarea>
<h3>Write your Text above</h3>
<input type='submit' value='Send Message' style="background-color:green; color:#ffffff; padding:4px; font-weight: bold;">
</form>
</div>
<?php include"sidebar1.php"; ?>
        <div class="clr"></div>
      </div>
</div>

<script type="text/javascript">
 		
function validate()
 {
     var message = document.getElementById('message').value;	
if(message == "") { alert("Message should not be Empty!"); return false;}	 
var roll_no = document.getElementById('roll_no').value;
if(roll_no == "") { alert("Roll Number should not be Empty!"); return false;}	 
return true;
 }
 </script>

</body>


</html>
