<?php include"adminlogcheck.php";
$msg=$_GET['name'];
 ?>

<html>
<head>
<style> 
.textbox {
    background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAABClpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wUmlnaHRzPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvcmlnaHRzLyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczpkYz0iaHR0cDovL3B1cmwub3JnL2RjL2VsZW1lbnRzLzEuMS8iIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1wUmlnaHRzOk1hcmtlZD0iVHJ1ZSIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ1M1IFdpbmRvd3MiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NzI3NTdDRTExNUFCMTFFMUE5NURCRkMwMEFDNjhEQUMiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NzI3NTdDRTIxNUFCMTFFMUE5NURCRkMwMEFDNjhEQUMiPiA8ZGM6cmlnaHRzPiA8cmRmOkFsdD4gPHJkZjpsaSB4bWw6bGFuZz0ieC1kZWZhdWx0Ij5DcmVhdGl2ZSBDb21tb25zIEF0dHJpYnV0aW9uIE5vbi1Db21tZXJjaWFsIE5vIERlcml2YXRpdmVzPC9yZGY6bGk+IDwvcmRmOkFsdD4gPC9kYzpyaWdodHM+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjcyNzU3Q0RGMTVBQjExRTFBOTVEQkZDMDBBQzY4REFDIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjcyNzU3Q0UwMTVBQjExRTFBOTVEQkZDMDBBQzY4REFDIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+SoKR9AAAAH5JREFUeNpi/P//PwMlgImBQsDS39/fAKTrydTfyESBZhCoR/bCAig9AYgZceAFaGpRwiARKlEAxPOx2AYSS4CqSYSHAZoimEQCGh+rZmwGYDOEAZdmXAZgMwSrZnwGMKBpSMSZDghEUyLtUyIS+z+5eaGRAgc0Mg54bgQIMAAD7RsCMDpK7QAAAABJRU5ErkJggg==) no-repeat 10px 4px #FFF;
    height: 25px;
    width: 275px;
    border: 1px solid #848484;
    padding-left: 30px;
}
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
        <h1><a href="#"><span>Message</span> </a></h1>
      </div>
	  </div>
<div class="content">
      <div class="content_bg">
        <div class="mainbar"style="padding-top:30px;">
		<div class="article"style="height:400px;background-color:#EFEBE9;">           
            <div class="clr"></div>
			<div>
			<h2><?php echo"$msg"; ?></h2>
			</div
			 <div class="clr"></div>
          </div>
        </div>
		
        <?php include "adminsidebar.php"; ?> 
        <div class="clr"></div>
      </div>
    </div>
</div>	
</div>
</body>
</html>