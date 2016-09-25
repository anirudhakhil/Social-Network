<HTML>
<head>
<title>SocialNet</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<BODY>
<CENTER><br><br>
<h2>Post Your News</h2><br>

<!-- HTML FORM CODE -->
<form name='Post_News' action='submit.php' method='post' onSubmit='return validate();'>
<table align='center'>
<tr><th align='right' valign='middle'>Department:</th><td>
<select name='dept' id='dept'>
 <option value=''>SELECT DEPARTMENT</option>
 <option value='All'>All Departments</option>
 <option value='CSE'>Computer Science & Engineering</option>
 <option value='IT'>Information Technology</option>
 <option value='ECE'>Electronics & Communication Engineering</option>
 <option value='CIVIL'>Civil Engineering</option>
 <option value='MECH'>Mechanical Engineering</option>
 <option value='EEE'>Electrical & Electronic Engineering</option>
</select>
</td></tr>
<tr><th align='right' valign='middle'>Year:</th><td><input type="checkbox" name="Year" value="1 year"></td></tr>
<tr><th align='right' valign='middle'>E-mail ID:</th><td><input type='text' name='email' id='email'></td></tr>
<tr><th align='right' valign='middle'>Mobile:</th><td><input type='text' name='mobile' id='mobile'></td></tr>
<tr><td colspan='2'><input type='checkbox' name='terms' id='terms'> I agree to the terms & conditions.</td></tr>

<tr><td></td><td align='left'><br><input type='submit' value='POST' style="background-color:green; color:#ffffff; padding:5px; font-weight: bold;"></td></tr>
</table>
</form>
</CENTER>

<!-- JAVASCRIPT VALIDATION CODE -->
<script type="text/javascript">
 		
function validate()
 {
   //Get Form Field Values to Variables
   var roll_no = document.getElementById('roll_no').value;	   
   var name = document.getElementById('name').value;	   
   var dept = document.getElementById('dept').value;	   
   var email = document.getElementById('email').value;	   
   var mobile = document.getElementById('mobile').value;	   

   //Validate Roll Number - Empty Check & 12 Digit Value Check
   if(roll_no == "") { alert("Roll Number should not be Empty!"); return false;}
   var rn = /^[0-9]{12}$/; //Regular Expression to match a value with exactly 12 digits 
   if(!rn.test(roll_no)) { alert("Invalid Roll Number! Enter a valid 12 Digit Roll Number"); return false;}

   //Validate Name - Empty Check & Only Characters Check
   if(name == "") { alert("Name should not be Empty!"); return false;}
   var nm = /^[A-Za-z ]{4,30}$/; //Regular Expression to match a value with exactly 12 digits 
   if(!nm.test(name)) { alert("Invalid Name! Name should contain only characters & spaces.\nIt should contain a minimum of 4 characters & maximum of 30 characters"); return false;}
   
   //Validate Password
   if(password == ""){alert("Password should not be empty"); return false;}
   if(conpassword!=password){alert("Pasword Confirmation invalid : Password did not match"); return false;}   
   
   
   //Validate Department - Make sure a department is selected
   if(dept == "") { alert("Please select a department!"); return false;}

   //Validate Email - Empty Check & Email Format Check
   if(email == "") { alert("Email should not be Empty!"); return false;}
   var atpos = email.indexOf("@"); //get the position of @ in the input email string
   var dotpos = email.lastIndexOf("."); //get the position (last occurrence) of .
   //Checks Min 2 chars in email name (ravi/abc12), domain name (gmail/yahoo) and domain type (.com/.net)
   if (atpos < 2 || dotpos <= atpos+2 || dotpos+2 >= email.length)   
      {
        alert("In-valid E-mail Address!");
        return false;
      }
	   
   //Validate Mobile - Empty Check & Mobile Format Check
   if(mobile == "") { alert("Mobile should not be Empty!"); return false;}
   var mb = /^[0-9]{10}$/; //Regular Expression to match a value with exactly 10 digits 
   if(!mb.test(mobile)) { alert("Invalid Mobile Number! Enter a valid 10 Digit Mobile Number"); return false;}
	   
   if(document.getElementById("terms").checked == false) { alert("Please select the terms & conditions checkbox"); return false;}
   return true;
}
</script> 


</BODY>
</HTML>
