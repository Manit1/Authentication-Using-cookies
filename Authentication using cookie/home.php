<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<div id="login-form" style="margin-bottom:50px">
		<!-- Show this if user is not logged in -->
		<?php if(!isset($_COOKIE['userid'])) { ?>
		<div>
			<a href="login.php">Login</a> | 
			<a href="register.php">Register
		</div>

		<?php } else { ?>

		<!-- Show this if user is logged in -->
		<div>
			<span>Welcome <?php echo $_COOKIE['userid']; ?></span> | 
			<a href="logout.php">Logout</a>
		</div>

		<?php } ?>
	</div>

	<div>
	<a href="home.php">Home</a> |
	<a href="product.php">Product</a> |
	<a href="account.php">Account</a> 
	</div>

	<div>
		<h1>Home Page</h1>
	</div>
</body>
</html>