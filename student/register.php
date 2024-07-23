<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<!-- <link rel="stylesheet" type="text/css" href="des.css"> -->
	<style>
		.login{
    margin: 50px 400px;
    border: 1px solid black;
    width: 700px;
    height: auto;
    background-image: url("images.jpeg");
    color: white;
    border-radius: 20px;
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.75);
    background-size: cover;
    background-position: center;
    overflow: hidden;
}
form{
    display: block;
    box-sizing: border-box;
    padding: 40px;
    width: 100%;
    height: 100%;
    backdrop-filter: brightness(40%);
    flex-direction: column;
    display: flex;
    gap: 5px;
}
h1{
    font-weight: normal;
    font-size: 24px;
    text-shadow: 0px 0px 2px rgba(0, 0, 0, 0.5);
    margin-bottom: 60px;

}
label{
    color: rgba(255, 255, 255, 0.8);
    text-transform: uppercase;
    font-size: 10px;
    letter-spacing: 2px;
    padding-left: 10px;
}
input{
    background: rgba(255, 255, 255, 0.3);
    height: 40px;
    line-height: 40px;
    border-radius: 20px;
    padding: 0px 20px;
    border: none;
    margin-bottom: 20px;
    color: white;
}
button{
    background: rgb(45, 126, 231);
    height: 40px;
    line-height: 40px;
    border-radius: 40px;
    border: none;
    margin: 10px 0px;
    box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
    color: white;
    font-size: 12px;
    text-transform: uppercase;
}
a{
    margin-top: 40px;
    padding: 20px;
    color: orange;
    font-size: 10px;
}
		</style>
</head>
<body>

	<div class="login">
	<form method="post" action="register.php">
        <?php include('errors.php'); ?>
         <h1>register</h1>
			<label>Student Id</label>
			<input type="text" name="Student_Id" value="<?php echo $Student_Id; ?>">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
			<label>Password</label>
			<input type="password" name="password_1">
			<label>Confirm password</label> 
			<input type="password" name="password_2">
			<label>Room No.</label>
			<input type="text" name="roomno">
			<button type="submit" class="btn" name="reg_user">Register</button>
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>
	</form>
	</div>
</body>
</html>