<?php

if(isset($_COOKIE['userid']))
{
	header('location:home.php');
}

if($_SERVER['REQUEST_METHOD']=='POST')
{
	$userid=$_POST['userid'];
	$password=$_POST['password'];

	//Validate From the Database


	setcookie('userid',$userid);
	//Login is complete, redirect to home page
	header('location:home.php');
}



?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<form action="" method="post">
		<table>
			<tr>
				<td>User Id</td>
				<td><input type="text" name="userid"></td>
				<td></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="checkbox" name="keeplogin"> Keep me logged in</td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="command"></td>
				<td></td>
			</tr>
		</table>
	</form>
</body>
</html>