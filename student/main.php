<?php include('server2.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<!-- <link rel="stylesheet" type="text/css" href="des.css"> -->
	<style>
		.login{
    margin: 50px 400px;
    border: 1px solid black;
    width: 600px;
    height: auto;
    background-image: url("../images.jpeg");
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
    font-size: 20px;
}
#complaint_type{
    margin-bottom: 20px;
    border-radius: 20px;
}
     </style>
</head>
<body>
	

<div class="login">
	<form method="post" action="main.php">

        <h1>students complaint page</h1>
		<?php include('errors.php'); ?>

		    <label for="complaint_date">Date of Complaint:</label>
  		    <input type="date" id="complaint_date" name="complaint_date">
		    <label>Student Id</label>
		    <input type="text" name="Student_Id" value="<?php echo $Student_Id; ?>">
		    <label>Phone No.</label>
		    <input type="text" name="phoneno">
			<label>Room No.</label>
			<input type="text" name="roomno">
			<label for="complaint_type">Complaint Type</label>
    		<select id="complaint_type" name="complaint_type">
      			<option value="Electricity issue">Electricity issue</option>
      			<option value="Carpentry issue">Carpentry issue</option>
      			<option value="leakage issue">leakage issue</option>
      			<option value="Cleaning/housekeeping issue">Cleaning/housekeeping issue</option>
      			<option value="Mess food issue">Mess food issue</option>
      			<option value="Other issue">Other issue</option>
    		</select>
		<label for="description">Problem Description</label>
    	<textarea id="description" name="description" placeholder="Write something.." rows="5" cols="43"></textarea>
        <button type="submit" class="btn" name="sub_user">Submit</button>
		<p> <a href="a.php?logout='1'" style="color: red;">logout</a> </p>
				
	</form>		
</div>			
</body>
</html>