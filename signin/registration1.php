<!DOCTYPE html>
<html>
	<style>
		label{
			padding: auto;
			margin: auto;
		}
		select{
			padding:auto;
			margin:auto;
		}
		option{
			padding: auto;
			margin: auto;
		}
	</style>
<meta charset="utf-8">
<link rel="stylesheet" href="star.css" />
</head>
<body>
<?php
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['student_ID'])){
        // removes backslashes
	$student_ID = stripslashes($_REQUEST['student_ID']);
        //escapes special characters in a string
	$student_ID = mysqli_real_escape_string($con,$student_ID);
	$first_name = stripslashes($_REQUEST['first_name']);
	$first_name = mysqli_real_escape_string($con,$first_name);
	$middle_names = stripslashes($_REQUEST['middle_names']);
	$middle_names = mysqli_real_escape_string($con,$middle_names);
	$last_name = stripslashes($_REQUEST['last_name']);
	$last_name = mysqli_real_escape_string($con,$last_name);

	$gender = stripslashes($_REQUEST['gender']);
	$gender = mysqli_real_escape_string($con,$gender);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	$confirm_password = stripslashes($_REQUEST['confirm_password']);
	$confirm_password = mysqli_real_escape_string($con,$confirm_password);
	$phone_number = stripslashes($_REQUEST['phone_number']);
	$phone_number=mysqli_real_escape_string($con,$phone_number);
	$region = stripslashes($_REQUEST['region']);
	$region = mysqli_real_escape_string($con,$region);
	$health_status = stripslashes($_REQUEST['health_status']);
	$health_status = mysqli_real_escape_string($con,$health_status);
	$username = stripslashes($_REQUEST['username']);
	$username = mysqli_real_escape_string($con,$username);
	
	$cheker = "SELECT * from student_table where username='$username'";
	$cheker1 = $con->query($cheker);
	$rows1 = mysqli_num_rows($cheker1);
	if($rows1 > 0){
		echo "change you user name";
	}

else{
	if($password ==$confirm_password){
		$k = strlen($password);
		if($k> 8){

	

        $query = "INSERT into `report_table` (student_ID,gender,region,health_status)
VALUES ('$student_ID','$gender', '$region','$health_status')";
$query1 = "INSERT into `student_table` (student_ID,first_name,middle_name,last_name,password,confirm_password,gender,region,health_status,username,phone_number)
VALUES ('$student_ID', '$first_name','$middle_names' ,'$last_name','$password','$password', '$gender','$region','$health_status','$username','$phone_number')";
$result = mysqli_query($con,$query);
$result1 = mysqli_query($con,$query1);
        if($result){
            echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
        }}
		else{
			echo "password must be greater than 8";
		}

	}
	else{
		echo "passwords do not much";
	}
}	
    }else{
?>
<div class="form">
<h1>Registration</h1>
<form name="registration" action="" method="post">
<input type="number" name="student_ID" placeholder="student ID" required />

<select name="gender" placeholder="gender" required>
 <option disabled =""selected="">Gender</option>
<option value="male">male</option>
<option value="female">female</option>
</select>
<input type="text" name="first_name" placeholder="First Name" required />
<input type="text" name="middle_names" placeholder="Middle Name" required />
<input type="text" name="last_name" placeholder="Last Name" required />
<!-- <input type="text" name="gender" placeholder="gender" required /> -->
<!-- <input type="text" name="region" placeholder="region" required /> -->
<!-- <input type="text" name="health_status" placeholder="health_status" required /> -->
<input type="text" name="username" placeholder="Username" required />
<input type="text" name="phone_number" placeholder="Phone Number" required />


<!-- <input type="text" name="region" placeholder="region" required /> -->
	<label>
						<select name="region" id="region">
							<option disabled =""selected="">Enter  Your Region</option>
							<option value="addis abeba">addis abeba</option>
							<option value="amhara">amhara</option>
							<option value="oromia">oromia</option>
							<option value="somalia">somalia</option>
							<option value="afar">afar</option>
							<option value="tigray">tigray</option>
							<option value="SNNP">SNNP</option>
							<option value="sidama">sidama</option>
							<option value="southwestern">southwestern</option>
							<option value="amhara">amhara</option>
							<option value="gambela">gambela</option>
							<option value="amhara">benishan gumuz</option>
							
		
						</select>
						</label>
<!-- <input type="text" name="health_status" placeholder="health_status" required /> -->
<lable>
	<select name="health_status" id="health_status">
	<option disabled =""selected="">Enter  Your Health Status</option>
	<option value="disabled">disabled</option>
	<option value="normal">normal</option>
	
	</select> 
<input type="password" name="password" placeholder="Password" required title="8 characters minimum" />
<input type="password" name="confirm_password" placeholder="retype password" required title="8 characters minimum" />
<input type="submit" name="submit" value="Register" />
<a href=login.php><h6>have an account?</h6></a>
</form>
</div>
<?php } ?>
</body>
</html>
