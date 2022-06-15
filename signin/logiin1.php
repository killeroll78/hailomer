<!DOCTYPE html>
<html>
<meta charset="utf-8"> 
<title>Login</title>
<link rel="stylesheet" href="star.css" /> 
</head>
<body>
<div class="page-banner overlay-dark bg-image" style="background: url(wollega.jpeg); background-image: cover;background-size: auto", style="background-origin: center; align-items: center;", style="background-size:100%;", style="background-position:auto;">
    <div class="banner-section">
       <!-- .container -->
    </div> <!-- .banner-section -->
  </div>
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
	echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
	}
    }else{
?>
<div class="form">
<h1>Log In</h1>
<form action="" method="POST" name="login">
<input type="text" name="username" placeholder="username" required />
<input type="password" name="password" placeholder="Password" required />
<br>
<input name="submit" type="submit" value="Login" />
</form>
<p>Not registered yet? <a href='registration.php'>Register Here</a></p>
</div>
<?php } ?>

</body>
</html>
