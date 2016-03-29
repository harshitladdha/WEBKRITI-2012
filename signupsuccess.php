<html>
<head>
<link rel="icon" type="image/png" href="logo.png"/>
<title>SIGNED UP SUCCESSFULLY
</title>
<style>
.shad{
box-shadow: 0px 0px 9px rgba(0,0,0,0.20);
background-color: 	#F8F8FF;
width:1333;
}
</style>
</head>
<body bgcolor=#778899>
<?php
include("header.php");
?>
<div class="shad"><br><br>
<h3 align="center">YOU HAVE SIGNED UP SUCCESSFULLY</h3><br>
<p align="center"><?php


echo "your username is : "; echo $_SESSION['username'];
echo "<br><br><a href=\"login_success.php\"><b>View Results Here!!</b></a>";
?></p><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>
<?php
include("footer.php");
?>
</body>

</html>