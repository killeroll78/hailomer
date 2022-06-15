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
	$password = stripslashes($_REQUEST['password']);
    $password = hash("sha256",$password);
    // echo $password;
	$password = mysqli_real_escape_string($con,$password);
	//Checking is user existing in the database or not
        $query = "SELECT student_ID FROM `student_table` WHERE username='$username'
and password='$password'";
$query2="SELECT  id from users WHERE username='$username' and password='$password'";
$result2=mysqli_query($con,$query2);
$rows1 = mysqli_num_rows($result2);
	$result = mysqli_query($con,$query);
	$rows = mysqli_num_rows($result);
        if($rows>0){
	    $_SESSION['username'] = $username;
            $GLOBALs ['username'] = $username;
            // Redirect user to index.php
	    Header("Location: index1.php");
            $_SESSION['username'] = $_POST['username'];
            $ab= $_SESSION['username'] = $_POST['username'];
            $GLOBALS['ab'];
        }elseif($rows1>0){
            $_SESSION['username'] = $username;
            header("Location: index2.php");

        }else{
	echo "<div class='nebil'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
	}
    }else{
?>



    <form action="" method="post">

        <div class="container">
            <h2>LOGIN </h2>
            <hr>
            <label for="uname"><b> Username</b></label>
            <input type="text" placeholder="Enter your username" name="username" required>

            <label for="uname"><b> Password </b></label>
            <input type="password" placeholder="Enter your Password" name="password" required>

            <button type="submit">LOGIN</button>
            <span class=" psw "> have you registerd?<a href="registration.php">  Register Here</a></span>
            <span class=" psw "> forgotten password?<a href="forget_pass.php"> Click Here</a></span>
        </div>
    </form>
    <?php } ?>
</body>

<!-- Mirrored from www.w3schools.com/howto/tryit.asp?filename=tryhow_css_login_form by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Mar 2021 17:13:19 GMT -->

</html>