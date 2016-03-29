<div class="this">
</div>

<div class="col">

<div class="social">
<a href="http://www.facebook.com/iiitm"><img src="fb.png" width="50px"></a>
<a href="http://www.twitter.com/iiitm"><img src="Twitter.png" width="50px"></a>
<a href="http://www.facebook.com/iiitm"><img src="g+.png" width="50px"></a>
<a href="http://www.linkedin.com/groups?gid=60036"><img src="linked.png" width="50px"></a>
<a href="http://www.iiitm.blogspot.in/"><img src="blog.png" width="50px"></a>
<a href="http://www.youtube.co.in/"><img src="Youtube.png" width="50px"></a>
<a href="http://en.wikipedia.org/wiki/IIITM"><img src="wiki.png" width="50px"></a>
<a href="mailto:director@iiitm.ac.in"><img src="email.png" width="50px"></a>


</div><br><br>
<div class="footer"><p align="center">
<b>copyright &#169 2013, Ankit & Harshit. All rights reserved.</b></p>
</div>
</div>


<?php
$currentFile = $_SERVER["PHP_SELF"];
$parts = Explode('/', $currentFile);


$_SESSION['currentpage'] = $parts[count($parts) - 1];

?>

<style>
.col{
position:relative;
background-color: #DCDCDC;
width:1333px;
}


.this {
width:1333px;
border-top: 4px solid #778899; 
position:relative;


}

.footer{
position:relative;
}

.social{
position:absolute;
left:900px;
}
</style>
