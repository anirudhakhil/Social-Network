<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>SocialNet</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="main_resize">
    <div class="content">
      <div class="content_bg">
        <div class="mainbar"></div>
<?php include"sidebar1.php"; ?>
      </div>
    </div>
  </div>
  <div class="main">
  <div class="main_resize">
    <div class="content">
      <div class="content_bg">
        <div class="mainbar">
	 <div class="article"><br>	
<center><h2>Post Your News</h2><br></center>
<form name='Post_News' action='publicpostnews.php' method='post' onsubmit='return validate();'>
<table align='center'>
<tr><th><textarea cols='40' rows='10' type='text' name='newspost' id='newspost'></textarea></th></tr>
<tr><td></td><strong>Note:<u>This post is seen by everyone who visits this website.&nbsp; Please be aware of what you are posting.</u></strong></td></tr>
<tr><td align='center'><br><input type='submit' value='POST NEWS' style="background-color:blue; color:#ffffff; padding:5px; font-weight: bold;"></td></tr>
</table>
</form>
<script type="text/javascript">
 		
function validate()
 {
     var newspost = document.getElementById('newspost').value;	
if(newspost == "") { alert("You cannot post an empty One!"); return false;}	 
return true;
 }
 </script>


</body>
</HTML>
