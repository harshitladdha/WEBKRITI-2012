
<?php
session_start();
session_destroy();



$_SESSION['currentpage'];
 if($_SESSION['currentpage'] == "login_success.php" || $_SESSION['currentpage'] == "signupsuccess.php")
 {

	header("location:index.php");
 }
else{
Header ("Location:" . $_SESSION['currentpage'] );
}
?>
