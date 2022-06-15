<?php
session_start();
if(!isset($_SESSION["student_ID"])){
header("Location: login.php");
exit(); }
?>
