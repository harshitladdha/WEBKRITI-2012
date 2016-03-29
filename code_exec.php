
    <?php
	
    session_start();
    include('connection.php');
	$firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
	$username=$_POST['username'];
    $password=$_POST['password'];

    
	
	mysql_query("INSERT INTO members(firstname,lastname,email,username,password)VALUES('$firstname','$lastname','$email','$username', '$password')")
	or die(mysql_error());
	
	mysql_query("INSERT INTO students(username)VALUES('$username')")
	or die(mysql_error());
    
    mysql_close($con);
	$_SESSION['username'] = $username;
	$_SESSION['password'] = $password;
	header("location:signupsuccess.php");

    ?>