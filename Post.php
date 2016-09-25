<html>
<head>
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
<title>SocialNet</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="main">
  <div class="main_resize">
   <div class="header">
      <div class="logo">
        <h1><a href="#"><span>Welcome To Your</span> CLASSBOARD</a></h1>
      </div>
	  </div>
<div class="content">
      <div class="content_bg">
        <div class="mainbar">
		<div class="article">
          <!--  <h2><span>Recent</span> Posts</h2> -->
		  <h2>Type Of Post</h2>
		  <table>
		  <tr>
		  <form method='post' action="publicpost.php">
		  <button class="button button1">Click here for PUBLIC posts</button>
		  </form>
		  <form method='post' action="Post_News.php">
          <button class="button button2">Click here for PRIVATE posts</button>
		  </form>
		  </tr>
		  </table>
		  
		  
            <div class="clr"></div>
            
            <div class="clr"></div>
          </div>
        </div>
        <?php include "sidebar1.php"; ?> 
        <div class="clr"></div>
      </div>
    </div>
</div>	