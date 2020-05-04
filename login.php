<?php session_start();
require_once('dbconnection.php');

if(isset($_POST['login']))
{
$password=$_POST['password'];
$dec_password=$password;
$useremail=$_POST['flat_id'];
$ret= mysqli_query($con,"SELECT * FROM newowner WHERE flat_id='$useremail' and password='$dec_password'");
$num=mysqli_fetch_array($ret);
if($num>0)
{
$extra="home.php";
$_SESSION['login']=$_POST['flat_id'];
$_SESSION['name']=$num['oname'];
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
else
{
echo "<script>alert('Invalid username or password');</script>";
exit();
}
}

?>

<html>

<head>
	<title>Login</title>
	<link rel='stylesheet' href="style2.css" type='text/css' />
</head>

<body>
<div class="main">
    <div class="basic">
		<hr>
		<h2>Login</h2>
		<hr>
		<div class="facts">
		    <form name="login" action="" method="post">
				<br><input type="text" class="text" name="flat_id" value="" placeholder="Enter your flat id"  ><a href="#" class=" icon email"></a>
				<br><br><br><input type="password" value="" name="password" placeholder="Enter valid password"><a href="#" class=" icon lock"></a>
				<div class="submit1">
					<input type="submit" name="login" value="LOG IN" >
				</div>
            </form>
        </div>
	</div>
</div>
</body>
</html>