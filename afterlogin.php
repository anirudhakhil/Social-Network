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
            <h2><span>Recent</span> Posts</h2>
            <h2><span>Welcome</span> <?php echo $_SESSION['id2']; ?></h2>
            <div class="clr"></div>
            
            <div class="clr"></div>
          </div>
        </div>
        <?php include "sidebar1.php"; ?> 
        <div class="clr"></div>
      </div>
    </div>
</div>
	</div>
	</body>
</html>