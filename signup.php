<html>
<head>
<link rel="icon" type="image/png" href="logo.png"/>
<title>
LEARNING MANAGEMENT SYSTEM.
</title>
<style>
.shad{
width:1333;
box-shadow: 0px 0px 9px rgba(0,0,0,0.20);
background-color: 	#F8F8FF;
}
fieldset {
 border:1px solid #888;
 border-right:1px solid #666;
 border-bottom:1px solid #666;
 width:400px;
 }
 legend {
 font-weight:bold;
 border:1px solid #888;
 border-right:1px solid #666;
 border-bottom:1px solid #666;
 padding: 0.5em;
 background-color:#666;
 color:#fff;
 text-shadow:0 -1px 0 #333;
 letter-spacing: 0.1em;
 text-transform:uppercase;
 }
 input {
 display:block;
 width:200px;
 float:left;
 margin-bottom:10px;
 }
 td.label {
 display:block;
 text-align:center;
 float:left;
 width:150px;
 padding-right: 20px;
 }
 
 br {
 clear:left;
 }
 .buttonsubmit {
 width: 50px;
 margin-left:95px;
 }


</style>
<script type="javascript/text">
var remarks;
</script>
    <script type="text/javascript">
    function validateForm()
    {
    var g=document.forms["reg"]["username"].value;
    var h=document.forms["reg"]["password"].value;
	var i=document.forms["reg"]["repassword"].value;
	var a=document.forms["reg"]["firstname"].value;
	var b=document.forms["reg"]["lastname"].value;
	var c=document.forms["reg"]["email"].value;
	var d=1;
	var e=1;
     if (g==null || g==""||h==null || h==""||c==null || c==""||b==null || b==""||a==null || a==""||i==null || i=="" )
     {
     
     d=0;
	 
     }
	if(i!==h){
	
	e=0;
	}
	if(d==0&&e==1){alert("All fields must be filled out");
	return false;
	}
	if(d==1&&e==0){alert("both passwords must be same");
	return false;
	}
	if(d==0&&e==0){alert("All fields must be filled out and both passwords must be same");
	return false;}
	
  }
    
    </script>
</head>
<body bgcolor="#778899">
<?php
include("header.php");
?>
<div class="shad">
<br><br>  
   <form name="reg" action="code_exec.php" onsubmit="return validateForm()" method="post">
	<table align="center">
	<tr>
	<td>
	<fieldset>
	<legend>Register Here!</legend>
	<table width="274" border="0" align="center" cellpadding="2" cellspacing="0">
	
	<tr> <td class="label">First Name:</td> <td><input type="text" name="firstname" value="" /></td></tr>
	<tr> <td class="label">Last Name:</td> <td><input type="text" name="lastname" value="" /></td></tr>
	<tr> <td class="label">Email:</td> <td><input type="text" name="email" value="" /></td></tr>
    <tr> <td class="label">Username:</td> <td><input type="text" name="username" value="" /></td> </tr>
    <tr> <td class="label">Password:</td> <td><input type="password" name="password" value=""/></td> </tr>
	<tr> <td class="label">Retype-Password:</td> <td><input type="password" name="repassword" value=""/></td> </tr>
    <tr> <td class="label"></td> <td><input name="submit" type="submit" value="Submit" /></td> </tr>
	
	</table>
	</fieldset>
	</td>
	</tr>
	</table>
    </form>
<br><br><br><br><br><br><br>
</div>
<?php
include("footer.php");
?>
	</body>
	</html>