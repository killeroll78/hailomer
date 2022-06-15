<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
           background-image: url("techno.jpg");
        }
        
        form {
            /* border: 3px solid #f1f1f1; */
            width: 50%;
            margin: auto;
            margin-top: 150px;
        }
        
        input[type=text],
        input[type=password] {
            width: 50%;
            padding: 12px 20px;
            margin: auto;
            display: block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        
        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            /* margin: 10px 0; */
            margin: auto;
            margin-top: 20px;
            margin-bottom: 20px;
            border: none;
            cursor: pointer;
            width: 45%;
            display: block;
        }
        
        button:hover {
            opacity: 0.8;
        }
        
        .h2 {
            text-align: center;
            margin: auto;
            display: center;
        }
        
        g .cancelbtn {
            width: 50%;
            padding: 10px 18px;
            background-color: #f44336;
        }
        
        .container {
            padding: 16px;
            width: 50%;
            margin: auto;
            height: 40vh;
            background-color: rgba(118, 65, 240, 0.788);
        }
        
        span.psw {
            float: center;
            padding-top: 16px;
        }
        
        span.psw a {
            float: center;
            padding-top: 16px;
            text-decoration: none;
            color: black;
            font-weight: bolder;
        }
        /* Change styles for span and cancel button on extra small screens */
        
        @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }
            form {
                width: 100%;
                float: none;
            }
            .container {
                width: 100%;
            }
            .nebil{
            color:white;
            align-items: center;
            margin: center;
            margin-left: 400px;
            margin-top:100px;
        }
        .nebil a{
            text-decoration:none;
            color:#990000;

        }
            .cancelbtn {
                width: 50%;
            }
        }
        /* .container1 {
            color: black;
            font-size: 1em;
            padding: auto;
            margin: auto;
        } */
        
        .container label {
            margin: auto;
            display: center;
            float: center;
        }
        
        .container h2 {
            display: center;
            color: black;
            font-size: 1.5em;
            padding: auto;
            margin: auto;
            padding: 5px;
            display: block;
        }
    </style>
</head>


<body>

<?php
require('db.php');
session_start();


// If form submitted, insert values into the database.
if (isset($_POST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username);
	$new_password1 = stripslashes($_REQUEST['new_password']);
    $new_password = hash("sha256",$new_password1);
    $confirm_password1 = stripslashes($_REQUEST['confirm_password']);
    $confirm_password = hash("sha256",$confirm_password1);
    $confirm_password = mysqli_real_escape_string($con,$confirm_password);
    // $password = md5($password);
    // echo $password;

	$new_password = mysqli_real_escape_string($con,$new_password);
	//Checking is user existing in the database or not
        $query = "SELECT student_ID FROM `student_table` WHERE username='$username'";
// $query2="SELECT  id from users WHERE username='$username' and password='$password'";
// $result2=mysqli_query($con,$query2);
// $rows1 = mysqli_num_rows($result2);
	$result = mysqli_query($con,$query);
	$rows = mysqli_num_rows($result);
        if($rows>0){
            $k = strlen($new_password1);
            $k2 = strlen($confirm_password1);
            if($k>=9 && $k2>=9){
                if($k==$k2){

                
	    // $_SESSION['username'] = $username;
            // $GLOBALs ['username'] = $username;
            // Redirect user to index.php
	    // Header("Location: index1.php");
            // $_SESSION['username'] = $_POST['username'];
            // $ab= $_SESSION['username'] = $_POST['username'];
            // $GLOBALS['ab'];
            $kk = "UPDATE student_table set password='$new_password',confirm_password='$confirm_password' WHERE username='$username'";
            $kk1 = $con->query($kk);
            if($kk1){
                echo "<div class='nebil'>
<h3>Password changed .</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
            }
        // }elseif($rows1>0){
            // $_SESSION['username'] = $username;
            // header("Location: index2.php");

        }else{
	echo "<div class='form'>
<h3>Username Is Incorrect .</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
	}
    }}}else{
?>



    <form action="" method="post">

        <div class="container">
            <h2>FORGOT PASSWORD </h2>
            <hr>
            <label for="uname"><b> Username</b></label>
            <input type="text" placeholder="Enter your username" name="username" required>

            <label for="uname"><b> Password </b></label>
            <input type="password" placeholder="Enter your New Password" name="new_password" required>
            <label for="uname"><b> Password </b></label>
            <input type="password" placeholder="Enter your New Password" name="confirm_password" required>

            <button type="submit">OK</button>
            <span class=" psw "> click here to go <a href="registration.php">back</a></span>
        </div>
    </form>
    <?php } ?>
</body>

<!-- Mirrored from www.w3schools.com/howto/tryit.asp?filename=tryhow_css_login_form by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Mar 2021 17:13:19 GMT -->

</html>