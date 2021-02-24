<!DOCTYPE html>
<html>
<head>
	<title></title>
<style>
	form
	{
		border:2px solid;
		margin-left:400px;
		width:400px;
		text-align:center;

	}
	input
	{
		padding:10px;
		margin:20px;
	}
	
</style>
</head>
<body>
	<form name="myform" action="<?php echo base_url()?>first/registrationForm" method="POST">
		<table>
			<h1>Registration form</h1>
			<tr><td>
				First Name:</td><td><input type="text" name="firstname" placeholder="firstname" pattern=".{3,}"   required title="3 characters minimum" maxlength="25"></td></tr>
			<tr><td>
				Last Name:</td><td><input type="text" name="lastname"  placeholder="lastname" pattern=".{3,}"   required title="3 characters minimum"  maxlength="25"></td></tr>
			<tr><td>
				Username:</td><td><input type="text" name="username" placeholder="username" required pattern=".{3,}"   required title="3 characters minimum" maxlength="10"></td></tr>
			<tr><td>	
				Mobile:</td><td><input type="text" name="mobile"  placeholder="phoneno" required minlength="10"maxlength="10"></td></tr>
				<tr><td>	
				Email:</td><td><input type="email" name="email"  placeholder="email" required></td></tr>
			<tr><td>
				Password:</td><td><input type="password" name="password" placeholder="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}"></td></tr>
				</table>
				<input type="submit" name="register" align="center">
		
	</form>
</body>
</html>