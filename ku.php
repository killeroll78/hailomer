<?php

$conn = mysqli_connect("localhost","root","","testingdb");
if($conn){


}
$sql1 = "SELECT max_no_of_seats from department_table where department_ID = 1;";
$result = $conn->query($sql1);
$result2 = mysqli_fetch_row($result);
$result3 = $result2[0];
// $result3 = intval($result3);
// echo $result3;

$sql2 = "SELECT max_no_of_seats from department_table where department_ID=2;";

$result4 = $conn->query($sql2);
$result5 = mysqli_fetch_row($result4);
$result6 = $result5[0];

// echo $result6;


$sql3 = "SELECT max_no_of_seats from department_table where department_ID=3;";


$result7 = $conn->query($sql3);
$result8 = mysqli_fetch_row($result7);
$result9 = $result8[0];

// echo $result9;


$sql4 = "SELECT max_no_of_seats from department_table where department_ID=4;";

$result10 = $conn->query($sql4);
$result11 = mysqli_fetch_row($result10);
$result12 = $result11[0];


$sql5 = "SELECT max_no_of_seats from department_table where department_ID=5;";

$result13 = $conn->query($sql5);
$result14 = mysqli_fetch_row($result13);
$result15 = $result14[0];

$sql6 = "SELECT max_no_of_seats from department_table where department_ID=6;";

$result16 = $conn->query($sql6);
$result17 = mysqli_fetch_row($result16);
$result18 = $result17[0];




$sql7 = "SELECT max_no_of_seats from department_table where department_ID=7;";



$result19 = $conn->query($sql7);
$result20 = mysqli_fetch_row($result19);
$result21 = $result20[0];


$sql8 = "SELECT max_no_of_seats from department_table where department_ID=8;";

$result22 = $conn->query($sql8);
$result23 = mysqli_fetch_row($result22);
$result24 = $result23[0];

$sql9 = "SELECT max_no_of_seats from department_table where department_ID=9;";


$result25 = $conn->query($sql9);
$result26 = mysqli_fetch_row($result25);
$result27 = $result26[0];



$sql10 = "SELECT max_no_of_seats from department_table where department_ID=10;";


$result28 = $conn->query($sql10);
$result29 = mysqli_fetch_row($result28);
$result30 = $result29[0];


$sql11 = "SELECT max_no_of_seats from department_table where department_ID=11;";

$result31 = $conn->query($sql11);
$result32 = mysqli_fetch_row($result31);
$result33 = $result32[0];


$sql12 = "SELECT max_no_of_seats from department_table where department_ID=12;";

$result34 = $conn->query($sql12);
$result35 = mysqli_fetch_row($result34);
$result36 = $result35[0];

$sql13 = "SELECT max_no_of_seats from department_table where department_ID=13;";


$result37 = $conn->query($sql13);
$result38 = mysqli_fetch_row($result37);
$result39 = $result38[0];

$sql14 = "SELECT max_no_of_seats from department_table where department_ID=14;";

$result40 = $conn->query($sql14);
$result41 = mysqli_fetch_row($result40);
$result42 = $result41[0];

$sql15 = "SELECT max_no_of_seats from department_table where department_ID=15;";

$result43 = $conn->query($sql15);
$result44 = mysqli_fetch_row($result43);
$result45 = $result44[0];

