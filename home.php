<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>SocialNet</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<link href="../axZm/axZm.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="tooplate_logo1(1).png"></script>


</head>
<body>
<div class="main">
  <div class="main_resize">
  <?php include"header.php"; ?>
    <div class="content">
      <div class="content_bg">
        <div class="mainbar">
          <div class="article" >
            <h2><span>WELCOME</span> HOME</h2>
			<h3>PUBLIC POSTS:</h3>
		<?php 
         include"db.php";
         $sql="SELECT * FROM news_post";
         $r=mysqli_query($v,$sql);
		 echo "<table>";
          while($res=mysqli_fetch_array($r))
          {
			echo "<tr><td><h3>$res[2]($res[1]) says :</h3></td>  <td><h3> '$res[0]'</h3></td><h3><td>&nbsp;&nbsp;$res[3]</h3></td><br></tr>";
          }
		  echo"</table>";
		
		?>
	        <div class="clr"></div>
            
            <div class="clr"></div>
          </div>
          
        </div>
<?php include"sidebar.php"; ?>
        <div class="clr"></div>
      </div>
    </div>
  </div>
  
  <DIV id="AZplayerParentContainer" style="margin: 5px 0px 0px 10px; width: 602px; min-height: 400px; color: gray;">
<DIV style="margin: 0; padding-top: 100px; padding-left: 200px; min-height: 225px; background: url(../axZm/icons/ajax-loader-bar.gif) center center no-repeat;">
</DIV>
</DIV>
</div>

</html>