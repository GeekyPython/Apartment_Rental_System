<?php session_start();
require_once('dbconnection.php');

//Code for Registration 
if(isset($_POST['signup']))
{
    $flat_id=$_POST['flat_id'];
    $oname=$_POST['oname'];
    $password=$_POST['password'];
    $contact=$_POST['contact'];
    $msg=mysqli_query($con,"insert into newowner(flat_id,oname,password,contact) values('$flat_id','$oname','$password','$contact')");
if($msg)
{
	echo "<script>alert('Registration successfully');</script>";
}
else
{
    echo "<script>alert('Enter Details Properly');</script>";
}
}

?>


<html>

<head>
	<title>Registration Page</title>
	<link rel='stylesheet' href="stylepage.css" type='text/css' />
	<link rel="stylesheet" href="newstyle.css">
</head>

<body>

<div class="main">
	<h1></h1>
	<div class="demo">
		<hr>
		<h2>Register</h2>
		<hr>
		<div class="register">
			<form name="registration" method="post" action="" enctype="multipart/form-data">
				<p>Flat ID </p>
				<input type="text" class="text" value="" placeholder="Flat Id" name="flat_id" required >
				<p>Flat Owner Name </p>
                <input type="text" class="text" value="" placeholder="Owner Name" name="oname"  required >
                <p>Password</p>
				<input type="password" class="text" value="" placeholder="Password" name="password"  required >
				<p>Contact No. </p>
				<input type="text" class="text" value="" placeholder="Contact info" name="contact"  required>
				<div class="sign-up">
					<input type="reset" value="Reset">
				    <input type="submit" name="signup"  value="Register" >
				</div>
			</form>
		</div>
	</div>
</div>
<footer>
	<button><a href="home.php">Home</a></button>
</footer>
</body>
</html>