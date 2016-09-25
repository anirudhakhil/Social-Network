<html>
<head>
<title>SocialNet</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<style>
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}
.button1 {
    background-color: white; 
    color: black; 
    border: 2px solid #4CAF50;
}

.button1:hover {
    background-color: #4CAF50;
    color: white;
}

.button2 {
    background-color: white; 
    color: black; 
    border: 2px solid #008CBA;
}

.button2:hover {
    background-color: #008CBA;
    color: white;
</style>
</head>
<div class="main_resize">
    <div class="content"></div>
      <div class="content_bg"></div>
        <div class="mainbar"></div>
      
<?php include"menu_nav.php"; ?>
<?php include"sidebar.php"; ?>
        </div>
<div class="main">
  <div class="main_resize">
    <div class="content">
      <div class="content_bg">
        <div class="mainbar">
          <div class="article">
            
			<CENTER><br><br>
<h2>Type Of LOGIN</h2>
<table align='center'>

		  <tr>
		  <form method='post' action="adminlogin.php">
		  <button class="button button1">Admin LOGIN</button>
		  </form>
		  <form method='post' action="login.php">
          <button class="button button2">User LOGIN</button>
		  </form>
		  </tr>
		  </table>


</table>
			<div class="clr"></div>
          </div>
         </div>
        <div class="clr"></div>
      </div>
    </div>
  </div>
</div>
</html>