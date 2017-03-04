<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="register.css" type="text/css" rel="stylesheet"/>
<script>
function myf()
{
    var x = document.forms["myform"]["id"].value.length;
	if (isNaN(x) || x < 5 || x > 12) {
        alert("Userid must be of length 5 to 12");
		return false;
    } 
	 var y = document.forms["myform"]["pass"].value.length;
	if ( isNaN(y) || y < 7 || y > 12) {
        alert("Password must be of length 7 to 12");
		return false;
    }
	var z= document.forms["myform"]["user"].value;
var letter= /^[A-Za-z]+$/;
if(z.match(letter))
{
alert('Your name have accepted : you can try another');  
      return true;  
      }  
      else  
      {  
      alert('Please input alphabet characters only');  
      return false;  
      }  

	
}
</script>

</head>

<body style="background-image:url(img/teal_example.jpg); background-size:cover;">
<form name="myform" action="afterreg.php" onsubmit="return myf()"  method="post">
<h1 align="center" style="color:#55EDF4; font-size:70px;" > REGISTER </h1>
<table align="center">
<tr> <h1 align="center" style="color:#55EDF4;" > All fields marked * are compulsary </h1></tr>
 <tr>
 <td><label style="color:#55EDF4;">First Name*</label></td>
 <td><input type="text" name="fname" placeholder="FULL NAME"/></td></tr>
  <tr>
  <tr>
 <td><label style="color:#55EDF4;">Middle Name</label></td>
 <td><input type="text" name="mname" placeholder="MIDDLE NAME"/></td></tr>
  <tr>
  <tr>
 <td><label style="color:#55EDF4;">Last Name</label></td>
 <td><input type="text" name="lname" placeholder="LAST NAME"/></td></tr>
  <tr>
 <td><label style="color:#55EDF4;">Gender*</label></td>
 <td class="change" style="color:#55EDF4;">Male<input type="radio" name="gender" value="male"/>
 Female<input type="radio" name="gender" value="female"/></td></tr>
 <tr>
 <td><label style="color:#55EDF4;">Email *</label></td>
 <td><input type="email" name="email" placeholder="EMAIL"/></td></tr>
  <tr>
 <td><label style="color:#55EDF4;">Contact No. *</label></td>
 <td><input type="number" name="contact" placeholder="PHONE NUMBER"/></td></tr>
  <tr>
 <td><label style="color:#55EDF4;">City</label></td>
 <td><input type="text" name="city" placeholder="CITY"/></td></tr>
  <tr>
 <td><label style="color:#55EDF4;">Address *</label></td>
 <td><input type="text" name="address" placeholder="ADDRESS"/></td></tr>
  <tr>
 <td><label style="color:#55EDF4;">Username *</label></td>
 <td><input type="text" name="user" placeholder="USERNAME"/></td>
 <td><button type="button" onClick="check()">Check</button></td>
 </tr>
  <tr>
 <td><label style="color:#55EDF4;">Password *</label></td>
 <td><input type="password" name="pass" placeholder="PASSWORD"/></td></tr>
 <tr>
 <td><label style="color:#55EDF4;">User Id *</label></td>
 <td><input type="number" name="id" placeholder="ID"/></td></tr>
  
 <tr><td></td>
 <td><input type="submit" value="Register" name="Register"/></td></tr>
 </table>
</form>

</body>
</html>