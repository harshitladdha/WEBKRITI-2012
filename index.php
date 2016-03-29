<html>
<head>
<link rel="icon" type="image/png" href="logo.png"/>
<title>
ABV IIITM | GWALIOR 
</title>
<script type="text/javascript">
<!--
//preload images
var image1=new Image()
image1.src="iiitm1.gif"
var image2=new Image()
image2.src="iiitm2.gif"
var image3=new Image()
image3.src="iiitm3.gif"
//-->
</script>

<style>
a:link{color:#778899;text-decoration:none;}
.shad{
box-shadow: 0px 0px 9px rgba(0,0,0,0.20);
background-color: 	#F8F8FF;
width:1333px;
}
.ver_rule{
border-left:2px ridge #FFFF66;
border-right:2px ridge #FFFF66;
}
.log{
background-color:#DCDCDC;
box-shadow: 0px 0px 9px rgba(0,0,0,0.20);
position:relative;
left:20px;
z-index:0;
}
</style>
</head>
<body bgcolor=#778899>
<?php
include("header.php");
?>
<div class="shad">
<table>
<br><br>
<tr>
<td>
<div class="log">	
<table align="center">
<tr>	
<?php	
      
if(! isset($_SESSION['username']))
{
if(! isset($_SESSION['password']))
{


	echo "<td align=\"center\">
		<form name=\"form1\" method=\"post\" action=\"checklogin.php\">
		<b>Login Here</b>
			<table>
			
				<tr>
					<td>Username:</td><td><input name=\"username\" type=\"text\" id=\"username\" value=\"username\" style=\"background-color:#F8F8FF;\"></td>
				</tr>
				<tr>
					<td>Password:</td><td><input name=\"password\" type=\"password\" id=\"password\" value=\"password\" style=\"background-color:#F8F8FF;\"></td>
				</tr>
				<tr>
					<td align=\"center\"><input type=\"submit\" name=\"Submit\" value=\"Login\" style=\"position:relative; left:70px\"></td><td align=\"right\"><a href=\"signup.php\">SIGN UP</a></td>
				</tr>
			
			</table>
		</form>	
		</td>" ;
		}}
		
		else{echo "Welcome, "; echo $_SESSION['username']; echo "! ";
		
			echo " <a href=\"login_success.php\">view results!</a>";
			}
		
		
		?>
</tr>	   
</table>
</div>
<table>
	<tr>
        <td><br><br><br><br><br><br><br><br><br><br><br><br><br></td>
	</tr>
</table>

</td>

<td align="center">

<a href="javascript:slidelink()">
<a href="photo gallery.php"><img style="height:360px;width:600px;border:6px double #545565;" name="slide" src="iiitm1.gif" alt=""/></a></a>
<script type="text/javascript">
<!--
var step=1
var whichimage=1
function slideit(){
if (!document.images)
return
document.images.slide.src=eval("image"+step+".src")
whichimage=step
if (step<3)
step++
else
step=1
setTimeout("slideit()",1800)
}
slideit()
function slidelink(){
if (whichimage==1)
window.location="link1.htm"
else if (whichimage==2)
window.location="link2.htm"
else if (whichimage==3)
window.location="link3.htm"
}
//-->
</script>

</td>

<td>
<b>Latest @ IIITM</b>
<hr color="#8B0000" size="5px">
<ul>
<li>IIITM Gwalior stands among Top 25 Engineering Colleges in India.(25th in the Top Best Professional Colleges in India by Outlook-MDRA Survey 2010: India s Best Professional Colleges) and India Today Survey 2012</li>
<li><div style="text-decoration:blink">Java workshop organised by AASF</div></li>
<li>DST Sponsored National Training Programme on Soft Computing Techniques for Optimization</li>
<li>IIITM Gwalior Awarded Dewang Mehta Business School Awards for Best IT curriculum in B -schools (Got 18th Business School Affairs & Dewang Mehta Business School Awards)</li>
<li><div style="text-decoration:blink">Admission started for 2 Years Full-Time MBA Programmes (2013-2015 Batch)</div></li>
<br>
</ul>
</td>
</tr>

<tr>
<td>
<b>Placement @ IIITM<b>
<hr color="#8B0000" size="5px">
<p>Campus recruitment 2013 starts!</p>
<a href="http://www.microsoft.com"><img src="plac5.png" height="48px" width="220px"></a>
<a href="http://www.facebook.com"><img src="facebook.jpg" height="50px" width="220px"></a>
<a href="http://www.directi.com"><img src="plac1.jpg" height="48px" width="220px"></a>
<br><br><br><br><br><br>
</td>
<td>
<b>INSTITUTE ACHIEVEMENTS</b>
<hr color="#8B0000" size="5px">
<div class="ver_rule">
<ul>

<li>Our Chairman Dr. M N Buch is honored with PADMA BHUSHAN.(2010-11)</li>
<li>IIITM Gwalior now ISO 9001-2008 Certified Institution</li>
<li>IIITM Gwalior stands among Top 25 Engineering Colleges in India</li>
<li>IIITM Gwalior got A++ Rank in Best B-Schools Survey 2010 by Business India</li>
<li>IIITM ranked 38 by MBA Universe.com in Best B Schools of India</li>
<li>Started five new and innovative programmes of MBA , M.Tech. and PhD and a Dual Degree Postgraduate Integrated Programme.</li>
<li>Visioning, designing and construction of the Institute campus on 60 hectares land. Hostels, academic, teaching areas and administrative buildings are completed.</li>
<li>Developing and designing new academic programme with dynamic Curriculum</li>
<li>Institute has been accorded Deemed University status.</li>
<li>Established MDP and CEP centers offering Management Development programmes, Faculty Development programmes and collaborative courses for working executives.</li>
<li>Institute has acquired the reputation of a national resource.</li>
</ul>
</div>
</td>


<td>


<b>Quick Links</b>
<hr color="#8B0000" size="5px">

<ul type="square">
<li>
<a href="http://www.aasfiiitm.com">Aasf</a>
</li>
<li>
<a href="http://www.ecelliiitm.org">E-Cell</a>
</li>
<li>
<a href="http://www.iiitm.blogspot.com">IIITM Blog</a>
</li>
<li>
<a href="http://www.iiitm.ac.in/IBM/">IBM Center Of Excellence</a>
</li>
<li>
<a href="http://www.infotsav.org" style=link:text-decoration:none;>Infotsav</a>
</li>
<li>
<a href="http://www.aurora2013.org">Aurora</a>
</li>
<li>
<a href="http://www.twaran.iiitm.ac.in">Twaran</a>
</li>
<li>
<a href="http://www.tfp.iiitm.in">Tfp</a>
</li>
<li>
<a href="http://www.gwalior7.com">Gwalior 7</a> 
</li>
<li>
<a href="http://www.spoj.com">Spoj</a>
</li>
</ul>

<br><br><br><br>

</td>
</table>


</div>
<?php
include("footer.php")
?>
</body>
</html>