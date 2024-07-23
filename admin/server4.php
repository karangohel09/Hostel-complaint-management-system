<?php 
	session_start();

	// variable declaration
	$staffname = "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$conn2 = mysqli_connect('localhost', 'root', '', 'ndbms');

	if (isset($_POST['reg2_user'])) {

		$staffname = mysqli_real_escape_string($conn2, $_POST['staffname']);
		$email = mysqli_real_escape_string($conn2, $_POST['email']);
		$phone_no = mysqli_real_escape_string($conn2, $_POST['phone_no']);
		$reg_date = mysqli_real_escape_string($conn2, $_POST['reg_date']);
		$department = mysqli_real_escape_string($conn2, $_POST['department']);


		if (empty($staffname)) { array_push($errors, "Staff name  is required"); }
		if (empty($phone_no)) { array_push($errors, "Phone No is required"); }
		if (empty($department)) { array_push($errors, "Department name is required"); }

		if (count($errors) == 0) {
			$query = "INSERT INTO staff (staffname, email, phone_no, reg_date, department) 
					  VALUES('$staffname', '$email', '$phone_no','$reg_date','$department')";
			mysqli_query($conn2, $query);
			$_SESSION['success'] = "Staff registered successfully ";
			header('location: admin_manage.php');
		}

	}
?>