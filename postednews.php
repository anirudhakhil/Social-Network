<?php include"logcheck.php"; ?>

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
        <h1><a href="#"><span>Your Posts</span> </a></h1>
      </div>
	  </div>
<div class="content">
      <div class="content_bg">
        <div class="mainbar">
		<div class="article"style="overflow:scroll;height:400px;border:8px ;">   
            <br></br>
		    <b><?php include"postretrieve.php"; ?></b>        
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