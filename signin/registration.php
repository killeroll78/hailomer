<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f1f1f1;
            background-image: url('techno.jpg');
        }
        
        * {
            box-sizing: border-box;
        }
        /* Add padding to containers */
        
        .container {
            justify-content: center;
            align-items: center;
            padding: 16px;
            background-color: white;
            /* background-color: white; */
            width:40%;
            margin:auto;
            /* background-image: url('techno.jpg'); */
        }
        /* Full-width input fields */
        
        input[type=text],
        input[type=number],
        input[type=password], 
        select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  background: #f1f1f1;
}select {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }
        input[type=number]:focus,
        input[type=text]:focus,
        input[type=password]:focus {
            background-color: #ccc;
            outline: none;
        }
        /* Overwrite default styles of hr */
        
        hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
            
        }
        /* Set a style for the submit button */
        
        .registerbtn {
            background-color: #04AA6D;
            color: white;
            padding: 16px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
            display: inline;
        }
        
        .registerbtn:hover {
            opacity: 1;
        }
        /* Add a blue text color to links */
       
        
        .registerbtn:hover {
            opacity: 1;
        }
        
        /*  */
        
        a {
            color: dodgerblue;
        }
        /* Set a grey background color and center the text of the "sign in" section */
        
        .signin {
            background-color: #f1f1f1;
            text-align: center;
        }
        .container h1 p{
            margin:auto;
        }
input[type=number], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
.form {
	background-color: #bfff80;
	width: 300px;
	border: 2px solid yellowgreen;
	padding: 50px;
	margin: auto;
   display: inline-block;

	color: blue;


}
.form h3{
	color:white;
}
    </style>
</head>
<body>
<?php
// require('db.php');
$con = mysqli_connect("localhost","root","","testingdb");
// If form submitted, insert values into the database.
if (isset($_REQUEST['student_ID'])){
        // removes backslashes
	$student_ID = stripslashes($_REQUEST['student_ID']);
        //escapes special characters in a string
	$student_ID = mysqli_real_escape_string($con,$student_ID);
	$first_name = stripslashes($_REQUEST['first_name']);
	$first_name = mysqli_real_escape_string($con,$first_name);
	$middle_names = stripslashes($_REQUEST['middle_name']);
	$middle_names = mysqli_real_escape_string($con,$middle_names);
	$last_name = stripslashes($_REQUEST['last_name']);
	$last_name = mysqli_real_escape_string($con,$last_name);

	$gender = stripslashes($_REQUEST['gender']);
	$gender = mysqli_real_escape_string($con,$gender);
	$password1 = stripslashes($_REQUEST['password']);
    $password = hash("sha256",$password1);
	$password = mysqli_real_escape_string($con,$password);
    
	$confirm_password1 = stripslashes($_REQUEST['confirm_password']);
    $confirm_password = hash("sha256",$confirm_password1);
	$confirm_password = mysqli_real_escape_string($con,$confirm_password);
    
	$phone_number = stripslashes($_REQUEST['phone_number']);
	$phone_number=mysqli_real_escape_string($con,$phone_number);
	$region = stripslashes($_REQUEST['region']);
	$region = mysqli_real_escape_string($con,$region);
	$health_status = stripslashes($_REQUEST['health_status']);
	$health_status = mysqli_real_escape_string($con,$health_status);
	$username = stripslashes($_REQUEST['username']);
	$username = mysqli_real_escape_string($con,$username);

	$v = "SELECT * from student_table where student_ID='$student_ID'";
	$v1 = $con->query($v);
	$rows1 = mysqli_num_rows($v1);
	if($rows1 > 0){
		echo '<script>alert("this student ID is registered previously");</script>';
	}
    else {


		$v2 ="SELECT * from student_table where phone_number='$phone_number'";
		$v4=$con->query($v2);
		$rows1= mysqli_num_rows($v4);
		if($rows1 > 0){
			echo '<script>alert("this phone number is used");</script>';
		}
		else{
			$k = strlen($phone_number);
			if($k<=> 10)
			echo'<script>alert("please enter valid phone number");</script>';
else {


	
	$cheker = "SELECT * from student_table where username='$username'";
	$cheker1 = $con->query($cheker);
	$rows1 = mysqli_num_rows($cheker1);
	if($rows1 > 0){
		echo '<script>alert("username already taken");</script>';
	}

else{
	if($password1 ==$confirm_password1){
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
			echo '<script>alert("password must be greater than 8");</script>';
		}

	}
	else{
		echo '<script>alert("passwords do not match");</script>';
	}
}	
    }}}
    }else{
?>
    <form action="" method="post">
        <div class="container">
            <h1>Registration Form</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>
            <label for="student_ID"><b>ID number</b></label>
            <input type="number" placeholder="WU" name="student_ID" student_ID="student_ID" required>
            <label for="first_name"><b>First Name</b></label>
            <input type="text" placeholder="Enter your First Name" name="first_name" id="first_name" required>
            <!--  -->
            <label for="middle_name"><b>Middle Name</b></label>
            <input type="text" placeholder="Enter Middle Name" name="middle_name" id="middle_name" required>
            <!--  -->
            <label for="last_name"><b>Last Name</b></label>
            <input type="text" placeholder="Enter Last Name" name="last_name" id="last_name" required>
            <!--  -->
            <label for="username"><b>User Name</b></label>
            <input type="text" placeholder="Enter user name" name="username" id="username" required>
            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" id="password" required>
            <label for="confirm_password"><b>Repeat Password</b></label>
            <input type="password" placeholder="RE-Password" name="confirm_password" id="confirm_password" required>
            <!--  -->
            <label for="region"><b>Region:</b></label>
            <select name="region">
      <!-- name="feild of study" -->
      <option disabled selected>--enter your region--</option required>
      <i class="fa fa-hacker-news" aria-hidden="true"></i>
      <li><option value="Amhara">Amhara</option></li>
      <li><option value="oromia">oromia</option></li>
      <li><option value="Harar">Harar</option></li>
      <li><option value="SNNP">SNNP</option></li>
      <li><option value="Gambella">Gambella</option></li>
      <li><option value="Tigray">Tigray</option></li>
      <li><option value="Afar">Afar</option></li>
      <li><option value="Ethio-somali">Ethio-somali</option></li>
      <li><option value="Sidama">Sidama</option></li>
      <li><option value="western-south">western south</option></li>
      <li><option value="addis ababa">Addis Ababa</option></li>
      <li><option value="gumuz">benishan gumuz</option></li>
      <li><option value="Dire Dawa">Dire Dawa</option></li>
                </select><br>
            <hr>
            <label for="gender"><b>Gender</b></label required><br>
            <input type="radio" name="gender" value="male"> Male
            <input type="radio" name="gender" value="female"> Female
            <hr>
            <label for="phone_number"><b>Phone Number</b></label>
            <input type="number" placeholder="phone no including 0 " name="phone_number" id="phone_no" required><br>
            <hr>
            <!--  -->
            <label for="health"><b>Health Status:</b></label required>
            <select name="health_status">
      <!-- name="feild of study" -->
      <option disabled selected>health status</option>
      <i class="fa fa-hacker-news" aria-hidden="true"></i>
      <li><option value="normal">Normal</option></li>
      <li><option value="disabled">Disabled</option></li>
 </select>

            <hr>
            <button type="submit" class="registerbtn" value="register">Register</button>
           <!-- <button type="reset" class="reset">Reset</button> -->
        </div>
<div class="container signin">
            <p>Already have an account? <a href="login.php">Sign in</a>.</p>
        </div>
    </form>
    <?php } ?>
</body>

</html>