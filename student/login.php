<?php include("server.php")?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<!-- <link rel="stylesheet" type="text/css" href="des.css"> -->
	<style>
		.login{
    margin: 50px 400px;
    border: 1px solid black;
    width: 600px;
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
.error{
    color: #ff0000;
}
		</style>
</head>
<body>
    <?php

$name  = $password = "";
$studentarr =  $passwordarr = "";

    if($_SERVER["REQUEST_METHOD"] == "POST") {

        if(empty($_POST["Student_Id"])){
            $studentarr = "Id is requiered";
        }
        else{
            $name = test_input($_POST["Student_Id"]);
        }
    
        if(empty($_POST["password"])){
            $passwordarr = "password required";
        }
        else{
            $password = test_input($_POST["password"]);
        }
    }
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
    ?>
	
<div class="login">
	<form method="post" action="student_manage.php"> 

		<h1>login</h1>
			<label>Student Id</label>
			<input type="text" name="Student_Id">
            <span class="error">*<?php echo $studentarr ?></span>
			<label>Password</label>
			<input type="password" name="password">
            <span class="error">*<?php echo $passwordarr ?></span>
			<button type="submit" class="btn" name="login_user">Login</button>
		<p>
			Not yet a member? <a href="register.php">Sign up</a>
		</p>
	</form>
</div>
</body>
</html>