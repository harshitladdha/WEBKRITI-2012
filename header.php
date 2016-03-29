
<div class="header">
<div class="logo"><a href="index.php"><img src="logo.png" height="115px" alt="institute logo"></a> </div>

<p class="institute_name"><font face="times, times new roman, serif" size="5"><b>INDIAN INSTITUTE OF INFORMATION TECHNOLOGY AND MANAGEMENT, GWALIOR.</b></font></p>


<nav >
	<ul>
		<li><a href="index.php">HOME </a></li>
		<li><a href="#">ABOUT US </a>
		    <ul>
				<li><a href="vision & mission.php">VISION & MISSION</a></li>
				<li><a href="quality policy.php">QUALITY POLICY</a></li>
			</ul>
		</li>
		<li><a href="#">ACADEMICS </a>
		    <ul>
				<li><a href="programs.php">PROGRAMS</a></li>
				<li><a href="training programs.php">TRAINING PROGRAMS</a></li>
			</ul>
		</li>
		<li><a href="#">ADMISSIONS </a>
		    <ul>
				<li><a href="ipg.php">IPG</a></li>
				<li><a href="m tech.php">M.Tech</a></li>
				<li><a href="mba.php">MBA</a></li>
			</ul>
		</li>
		<li><a href="#">CAMPUS </a>
		    <ul>
				<li><a href="hostels.php">HOSTEL</a></li>
				<li><a href="library.php">LIBRARY</a></li>
				<li><a href="sports.php">SPORTS</a></li>
			</ul>
		</li>
		<li><a href="#">MEDIA </a>
		    <ul>
				<li><a href="video gallery.php">VIDEO GALLERY</a></li>
				<li><a href="photo gallery.php">PHOTO GALLERY</a></li>
			</ul>
		</li>
		<li><a href="#">EVENTS </a>
		    <ul>
				<li><a href="urja.php">URJA</a></li>
				<li><a href="infotsav.php">INFOTSAV</a></li>
				<li><a href="twaran.php">TWARAN</a></li>
				<li><a href="aurora.php">AURORA</a></li>
			</ul>
		</li>
		<li><a href="#">CONTACT </a>
		    <ul>
				<li><a href="telephone directory.php">TELEPHONE DIRECTORY</a></li>
				<li><a href="how to reach.php">HOW TO REACH</a></li>
		    </ul>
		</li>
	</ul>
</nav>
<div class="nav1">
	<a href="main_login.php"><?php  
										session_start();
											if(! isset($_SESSION['username'])){
													if(! isset($_SESSION['password'])){
															echo "LOGIN";
																							}}
											else{echo "<a href=\"logout.php\">LOGOUT</a>";}												
												?></a>
</div>

</div>


<style>
.nav1{position:absolute;
width:50px;
left:1200px;
top:63px;
background: #efefef; 
	background: linear-gradient(top, #efefef 0%, #bbbbbb 100%);  
	background: -moz-linear-gradient(top, #efefef 0%, #bbbbbb 100%); 
	background: -webkit-linear-gradient(top, #efefef 0%,#bbbbbb 100%); 
	box-shadow: 0px 0px 9px rgba(0,0,0,0.20);
	padding: 19 35px;
	border-radius: 5px;  
	list-style: none;
	display: inline-table;
}

nav{width:1100px;
position:absolute;
top:45px;
left:130px;
z-index:2;
}


nav ul ul {
	display: none;
}

	nav ul li:hover > ul {
		display: block;
	}
nav ul {
	background: #efefef; 
	background: linear-gradient(top, #efefef 0%, #bbbbbb 100%);  
	background: -moz-linear-gradient(top, #efefef 0%, #bbbbbb 100%); 
	background: -webkit-linear-gradient(top, #efefef 0%,#bbbbbb 100%); 
	box-shadow: 0px 0px 9px rgba(0,0,0,0.20);
	padding: 0 5px;
	border-radius: 5px;  
	list-style: none;
	position: relative;
	display: inline-table;
}
	nav ul:after {
		content: ""; clear: both; display: block;
	}
nav ul li {
	float: left;
}
	nav ul li:hover {
		background: #4b545f;
		background: linear-gradient(top, #4f5964 0%, #5f6975 40%);
		background: -moz-linear-gradient(top, #4f5964 0%, #5f6975 40%);
		background: -webkit-linear-gradient(top, #4f5964 0%,#5f6975 40%);
	}
		nav ul li:hover a {
			color: #fff;
		}
	
	nav ul li a {
		display: block; padding: 20px 30px;
		color: #858585; text-decoration: none;
	}
nav ul ul {
	background: #5f6975; border-radius: 8px; padding: 0;
	position: absolute; top: 90%;
}
	nav ul ul li {
		float: none; 
		border-top: 1px solid #6b727c;
		border-bottom: 1px solid #575f6a;
		position: relative;
	}
		nav ul ul li a {
			padding: 10px 15px;
			color: #ffcc00;
		}	
			nav ul ul li a:hover {
				background: #4b545f;
			}
nav ul ul ul {
	position: absolute; left: 100%; top:0;
}








p.institute_name
{
position:absolute;
top:9px;
left:180px;
width:1100px;
}


.header{
	width:1333px;
	background-color:#DCDCDC;
}





</style>