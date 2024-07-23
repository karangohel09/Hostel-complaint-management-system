<?php include('server3.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="des.css">
</head>
<body>
	<div class="login">
	<form method="post" action="admin_studentdetail.php">
         <h1>Admin login</h1>
		<?php include('errors.php'); ?>

		
			<label>Admin Id</label>
			<input type="text" name="id">

			<label>Password</label>
			<input type="password" name="password">

			<button type="submit" class="btn" name="login_user1">Login</button>
	</form>
	</div>


</body>
</html>