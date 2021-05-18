<!DOCTYPE html>
<html>
<head>
	<title>Sample Page</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style.css">
</head>
<body>
	<h1>Welcome to MOYATA</h1>
	<div id="login">
		<h2>Please Login</h2>

		<form method="POST" action="<?php echo base_url();?>login/login">
			<label for="email">Email</label>
				<input type="email" name="email" placeholder="email"> <br>
			<label for="password">Password</label>
				<input type="password" name="password" placeholder="*********"> <br>
			<button type="submit" id="submit-login">Login</button> <br>
			Do not have an account? <a href="<?php echo base_url();?>">Create a new account</a>
		</form>
	</div>

</body>
</html>