<?php include('server4.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="des.css">
    <style>
        #department{
            /* margin-bottom: 20px; */
        }
        </style>
</head>
<body>
	
	<div class="login">
	<form method="post" action="register2.php">

		<?php include('errors.php'); ?>
         <h1>Staff Registration</h1>
			<label>Staff Name</label>
			<input type="text" name="staffname" value="<?php echo $staffname; ?>">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
			<label>Phone No.</label>
			<input type="text" name="phone_no">
			<label>Registration Date</label>
			<input type="date" name="reg_date" value="<?php echo date("Y-m-d h:i:s");?>">
			<label for="department">Department</label>
    		<select id="department" name="department">
      			<option value="Electricity issue">Electricity issue</option>
      			<option value="Carpentry issue">Carpentry issue</option>
      			<option value="leakage issue">leakage issue</option>
      			<option value="Cleaning/housekeeping issue">Cleaning/housekeeping issue</option>
      			<option value="Mess food issue">Mess food issue</option>
      			<option value="Other issue">Other issue</option>
    		</select>
			<button type="submit" class="btn" name="reg2_user">Add to List</button>
	</form>
    </div>
</body>
</html>