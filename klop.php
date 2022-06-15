<?php
$conn = mysqli_connect("localhost", "root", "", "testingdb");
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT max_no_of_seats from department_table where department_ID=1";
$result = $conn->query($sql);
$result2 = mysqli_fetch_row($result);
$result3 = $result2[0];
echo $result3;
if($result3 == 2){
    echo "hailomer";

}
else{
    echo "haile";
}
// print_r($result2);
// print_r(array_values($result2));
// $result3 = ltrim($result2,"Array ( [0] =>");
// print_r($result3);
// $r1 = "Hello";
// $r2 = md5($r1);
// if($r2 == "8b1a99534611296a827abf8c47804d7") {
//     echo "hello killer";
// }
// else {
//     echo "die";
// }
// extract($result2);
// print_r($result2);
// $last_names = array_column($result2, 'max_no_of_seats');
// print_r($last_names);

// print_r($klo);
// printf($result2);
