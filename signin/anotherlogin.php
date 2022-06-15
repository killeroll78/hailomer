<?php
	session_start();
	require('db.php');
	
	
	if (isset($_POST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	
	$sql = "SELECT student_ID FROM `student_table` WHERE username='$username'
    and password='$password'";
	$result = $conn->query($sql);        

    while($row = $result->fetch_assoc()) {
		if($password == $row["agent_password"]){
			echo "welcome you have successfully logeed in";
			$_SESSION["username"] = $username;
			header("Location: home.php");
		}
    }
	$sql = "SELECT client_password from client where client_id='$username'";
	$result = $conn->query($sql);        

    while($row = $result->fetch_assoc()) {
		if($password == $row["client_password"]){
			echo "welcome you have successfully logeed in";
			$_SESSION["username"] = $username;
			header("Location: clientHome.php");
		}
    }
}
	if(!isset($_SESSION["username"])){
		header("Location: index.php");
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