<?php 
	session_start();

	// variable declaration
	$Student_Id = "";
	$roomno = "";
	$errors = array(); 
	$_SESSION['success'] = "";
	// connect to database
	$conn = mysqli_connect('localhost', 'root', '', 'ndbms');

	// REGISTER USER
	if (isset($_POST['sub_user'])) {
		$complaint_date = mysqli_real_escape_string($conn, $_POST['complaint_date']);
		$Student_Id = mysqli_real_escape_string($conn, $_POST['Student_Id']);
		$phoneno = mysqli_real_escape_string($conn, $_POST['phoneno']);
		$roomno = mysqli_real_escape_string($conn, $_POST['roomno']);
		$complaint_type = mysqli_real_escape_string($conn, $_POST['complaint_type']);
		$description = mysqli_real_escape_string($conn, $_POST['description']);

		// form validation: ensure that the form is correctly filled
		if (empty($Student_Id)) { array_push($errors, "Student_Id is required"); }
		if (empty($complaint_type)) { array_push($errors, "complaint_type is required"); }
		if (empty($roomno)) { array_push($errors, "Email is required"); }
		if (empty($complaint_date)) { array_push($errors, "date is required"); }

		

		// register user if there are no errors in the form i really dont know what to write at this moment but my father is standing next to me and i am watching fucking wolf of the wallstreet so i have to pretend like i am doing some important work so thats why i am came here
		if (count($errors) == 0) {
			$query = "INSERT INTO complaints (complaint_date, Student_Id, phoneno, roomno, complaint_type, description) 
					  VALUES ('$complaint_date','$Student_Id','$phoneno', '$roomno', '$complaint_type','$description')";
			$results1 = mysqli_query($conn, $query);


			if (mysqli_query($conn , $query ) == 1) {
				
				$_SESSION['success'] = "Your complaint is registered";
				header('location: problem.php');
			}
			else {
				array_push($errors, "Wrong input");
			}

			$_SESSION['success'] = "Your complaint is registered ";
			header('location: problem.php');
		}
		else {
			array_push($errors, "Wrong input1");
		}
	}
?>
 
