<?php
$conn = mysqli_connect("localhost", "root", "", "testingdb");
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

// // $sql = "SELECT * from result_table;";
// $sql = "INSERT INTO result_table (`student_ID`,`department_result`)  select report_table.student_ID,student_placement_form.choice1 from report_table INNER JOIN student_placement_form on report_table.student_ID=student_placement_form.student_ID where student_placement_form.choice1=1  AND student_placement_form.student_ID NOT IN(SELECT student_ID FROM result_table) order by report_table.total desc limit 3;";

// $sql .=  "INSERT INTO result_table (`student_ID`,`department_result`)  select report_table.student_ID,student_placement_form.choice1 from report_table INNER JOIN student_placement_form on report_table.student_ID=student_placement_form.student_ID where student_placement_form.choice1=2 AND student_placement_form.student_ID NOT IN(SELECT student_ID FROM result_table) order by report_table.total desc limit 3;";
// $sql .=  "INSERT INTO result_table (`student_ID`,`department_result`)  select report_table.student_ID,student_placement_form.choice1 from report_table INNER JOIN student_placement_form on report_table.student_ID=student_placement_form.student_ID where student_placement_form.choice1=3 AND student_placement_form.student_ID NOT IN(SELECT student_ID FROM result_table) order by report_table.total desc limit 3;";
// $sql .=  "INSERT INTO result_table (`student_ID`,`department_result`)  select report_table.student_ID,student_placement_form.choice1 from report_table INNER JOIN student_placement_form on report_table.student_ID=student_placement_form.student_ID where student_placement_form.choice1=4 AND student_placement_form.student_ID NOT IN(SELECT student_ID FROM result_table) order by report_table.total desc limit 3;";
// $sql .=  "INSERT INTO result_table (`student_ID`,`department_result`)  select report_table.student_ID,student_placement_form.choice1 from report_table INNER JOIN student_placement_form on report_table.student_ID=student_placement_form.student_ID where student_placement_form.choice1=5 AND student_placement_form.student_ID NOT IN(SELECT student_ID FROM result_table) order by report_table.total desc limit 3;";
// $sql .=  "INSERT INTO result_table (`student_ID`,`department_result`)  select report_table.student_ID,student_placement_form.choice1 from report_table INNER JOIN student_placement_form on report_table.student_ID=student_placement_form.student_ID where student_placement_form.choice1=6 AND student_placement_form.student_ID NOT IN(SELECT student_ID FROM result_table) order by report_table.total desc limit 3;";
// $sql .=  "INSERT INTO result_table (`student_ID`,`department_result`)  select report_table.student_ID,student_placement_form.choice1 from report_table INNER JOIN student_placement_form on report_table.student_ID=student_placement_form.student_ID where student_placement_form.choice1=7 AND student_placement_form.student_ID NOT IN(SELECT student_ID FROM result_table) order by report_table.total desc limit 3;";
// $sql .=  "INSERT INTO result_table (`student_ID`,`department_result`)  select report_table.student_ID,student_placement_form.choice1 from report_table INNER JOIN student_placement_form on report_table.student_ID=student_placement_form.student_ID where student_placement_form.choice1=8 AND student_placement_form.student_ID NOT IN(SELECT student_ID FROM result_table) order by report_table.total desc limit 3;";
// $sql .=  "INSERT INTO result_table (`student_ID`,`department_result`)  select report_table.student_ID,student_placement_form.choice1 from report_table INNER JOIN student_placement_form on report_table.student_ID=student_placement_form.student_ID where student_placement_form.choice1=9 AND student_placement_form.student_ID NOT IN(SELECT student_ID FROM result_table) order by report_table.total desc limit 3;";
// $sql .=  "INSERT INTO result_table (`student_ID`,`department_result`)  select report_table.student_ID,student_placement_form.choice1 from report_table INNER JOIN student_placement_form on report_table.student_ID=student_placement_form.student_ID where student_placement_form.choice1=10 AND student_placement_form.student_ID NOT IN(SELECT student_ID FROM result_table) order by report_table.total desc limit 3;";
// $sql .=  "INSERT INTO result_table (`student_ID`,`department_result`)  select report_table.student_ID,student_placement_form.choice1 from report_table INNER JOIN student_placement_form on report_table.student_ID=student_placement_form.student_ID where student_placement_form.choice1=11 AND student_placement_form.student_ID NOT IN(SELECT student_ID FROM result_table) order by report_table.total desc limit 3;";
// $sql .=  "INSERT INTO result_table (`student_ID`,`department_result`)  select report_table.student_ID,student_placement_form.choice1 from report_table INNER JOIN student_placement_form on report_table.student_ID=student_placement_form.student_ID where student_placement_form.choice1=12 AND student_placement_form.student_ID NOT IN(SELECT student_ID FROM result_table) order by report_table.total desc limit 3;";
// $sql .=  "INSERT INTO result_table (`student_ID`,`department_result`)  select report_table.student_ID,student_placement_form.choice1 from report_table INNER JOIN student_placement_form on report_table.student_ID=student_placement_form.student_ID where student_placement_form.choice1=13 AND student_placement_form.student_ID NOT IN(SELECT student_ID FROM result_table) order by report_table.total desc limit 3;";
// $sql .=  "INSERT INTO result_table (`student_ID`,`department_result`)  select report_table.student_ID,student_placement_form.choice1 from report_table INNER JOIN student_placement_form on report_table.student_ID=student_placement_form.student_ID where student_placement_form.choice1=14 AND student_placement_form.student_ID NOT IN(SELECT student_ID FROM result_table) order by report_table.total desc limit 3;";
// $sql .=  "INSERT INTO result_table (`student_ID`,`department_result`)  select report_table.student_ID,student_placement_form.choice1 from report_table INNER JOIN student_placement_form on report_table.student_ID=student_placement_form.student_ID where student_placement_form.choice1=15 AND student_placement_form.student_ID NOT IN(SELECT student_ID FROM result_table) order by report_table.total desc limit 3;";
// $result = $conn->multi_query($sql);



// if ($result) {
// 	echo "placed successfully";
//     // header("Location:second.php");
// }
// else{
// 	echo "failed";
// }




$sql = "INSERT INTO result_table (`student_ID`,`department_result`)  select report_table.student_ID,student_placement_form.choice8 from report_table INNER JOIN student_placement_form on report_table.student_ID=student_placement_form.student_ID where student_placement_form.choice8=1  AND student_placement_form.student_ID NOT IN(SELECT student_ID FROM result_table) order by report_table.total desc limit 3;";

$sql .= "INSERT INTO testerr(student_ID,department_result)
 SELECT result_table.student_ID,result_table.department_result from result_table inner join student_table on (result_table.student_ID=student_table.student_ID) inner join report_table on (result_table.student_ID=report_table.student_ID) WHERE result_table.department_result=1 order by report_table.total desc limit 3;";

$sql .= "DELETE FROM result_table WHERE department_result = 1 AND student_ID NOT IN(SELECT student_ID FROM testerr);";

// $sql .= " DELETE FROM result_table WHERE student_ID IN (SELECT result_table.student_ID FROM result_table INNER JOIN report_table ON (result_table.student_ID=report_table.student_ID) WHERE department_result =1  ORDER BY report_table.total DESC )LIMIT 1;";

$sql .= "INSERT INTO result_table (`student_ID`,`department_result`)  select report_table.student_ID,student_placement_form.choice8 from report_table INNER JOIN student_placement_form on report_table.student_ID=student_placement_form.student_ID where student_placement_form.choice8=2  AND student_placement_form.student_ID NOT IN(SELECT student_ID FROM result_table) order by report_table.total desc limit 3;";

$sql .= "INSERT INTO testerr(student_ID,department_result)
 SELECT result_table.student_ID,result_table.department_result from result_table inner join student_table on (result_table.student_ID=student_table.student_ID) inner join report_table on (result_table.student_ID=report_table.student_ID) WHERE result_table.department_result=2 order by report_table.total desc limit 3;";

$sql .= "DELETE FROM result_table WHERE department_result = 2 AND student_ID NOT IN(SELECT student_ID FROM testerr);";
// // $sql .= " DELETE FROM result_table WHERE student_ID IN (SELECT result_table.student_ID FROM result_table INNER JOIN report_table ON (result_table.student_ID=report_table.student_ID) WHERE department_result =2  ORDER BY report_table.total DESC )LIMIT 1;";

$sql .= "INSERT INTO result_table (`student_ID`,`department_result`)  select report_table.student_ID,student_placement_form.choice8 from report_table INNER JOIN student_placement_form on report_table.student_ID=student_placement_form.student_ID where student_placement_form.choice8=3  AND student_placement_form.student_ID NOT IN(SELECT student_ID FROM result_table) order by report_table.total desc limit 3;";

$sql .= "INSERT INTO testerr(student_ID,department_result)
 SELECT result_table.student_ID,result_table.department_result from result_table inner join student_table on (result_table.student_ID=student_table.student_ID) inner join report_table on (result_table.student_ID=report_table.student_ID) WHERE result_table.department_result=3 order by report_table.total desc limit 3;";

$sql .= "DELETE FROM result_table WHERE department_result = 3 AND student_ID NOT IN(SELECT student_ID FROM testerr);";

// // $sql .= " DELETE FROM result_table WHERE student_ID IN (SELECT result_table.student_ID FROM result_table INNER JOIN report_table ON (result_table.student_ID=report_table.student_ID) WHERE department_result =3  ORDER BY report_table.total DESC )LIMIT 1;";

$sql .= "INSERT INTO result_table (`student_ID`,`department_result`)  select report_table.student_ID,student_placement_form.choice8 from report_table INNER JOIN student_placement_form on report_table.student_ID=student_placement_form.student_ID where student_placement_form.choice8=4  AND student_placement_form.student_ID NOT IN(SELECT student_ID FROM result_table) order by report_table.total desc limit 3;";

$sql .= "INSERT INTO testerr(student_ID,department_result)
 SELECT result_table.student_ID,result_table.department_result from result_table inner join student_table on (result_table.student_ID=student_table.student_ID) inner join report_table on (result_table.student_ID=report_table.student_ID) WHERE result_table.department_result=4 order by report_table.total desc limit 3;";

$sql .= "DELETE FROM result_table WHERE department_result = 4 AND student_ID NOT IN(SELECT student_ID FROM testerr);";

// // $sql .= " DELETE FROM result_table WHERE student_ID IN (SELECT result_table.student_ID FROM result_table INNER JOIN report_table ON (result_table.student_ID=report_table.student_ID) WHERE department_result =4  ORDER BY report_table.total DESC )LIMIT 1;";

$sql .= "INSERT INTO result_table (`student_ID`,`department_result`)  select report_table.student_ID,student_placement_form.choice8 from report_table INNER JOIN student_placement_form on report_table.student_ID=student_placement_form.student_ID where student_placement_form.choice8=5  AND student_placement_form.student_ID NOT IN(SELECT student_ID FROM result_table) order by report_table.total desc limit 3;";

$sql .= "INSERT INTO testerr(student_ID,department_result)
 SELECT result_table.student_ID,result_table.department_result from result_table inner join student_table on (result_table.student_ID=student_table.student_ID) inner join report_table on (result_table.student_ID=report_table.student_ID) WHERE result_table.department_result=5 order by report_table.total desc limit 3;";

$sql .= "DELETE FROM result_table WHERE department_result = 5 AND student_ID NOT IN(SELECT student_ID FROM testerr);";

// // $sql .= " DELETE FROM result_table WHERE student_ID IN (SELECT result_table.student_ID FROM result_table INNER JOIN report_table ON (result_table.student_ID=report_table.student_ID) WHERE department_result =5  ORDER BY report_table.total DESC )LIMIT 1;";

$sql .= "INSERT INTO result_table (`student_ID`,`department_result`)  select report_table.student_ID,student_placement_form.choice8 from report_table INNER JOIN student_placement_form on report_table.student_ID=student_placement_form.student_ID where student_placement_form.choice8=6  AND student_placement_form.student_ID NOT IN(SELECT student_ID FROM result_table) order by report_table.total desc limit 3;";

$sql .= "INSERT INTO testerr(student_ID,department_result)
 SELECT result_table.student_ID,result_table.department_result from result_table inner join student_table on (result_table.student_ID=student_table.student_ID) inner join report_table on (result_table.student_ID=report_table.student_ID) WHERE result_table.department_result=6 order by report_table.total desc limit 3;";

$sql .= "DELETE FROM result_table WHERE department_result = 6 AND student_ID NOT IN(SELECT student_ID FROM testerr);";

// // $sql .= " DELETE FROM result_table WHERE student_ID IN (SELECT result_table.student_ID FROM result_table INNER JOIN report_table ON (result_table.student_ID=report_table.student_ID) WHERE department_result =6  ORDER BY report_table.total DESC )LIMIT 1;";

$sql .= "INSERT INTO result_table (`student_ID`,`department_result`)  select report_table.student_ID,student_placement_form.choice8 from report_table INNER JOIN student_placement_form on report_table.student_ID=student_placement_form.student_ID where student_placement_form.choice8=7  AND student_placement_form.student_ID NOT IN(SELECT student_ID FROM result_table) order by report_table.total desc limit 3;";

$sql .= "INSERT INTO testerr(student_ID,department_result)
 SELECT result_table.student_ID,result_table.department_result from result_table inner join student_table on (result_table.student_ID=student_table.student_ID) inner join report_table on (result_table.student_ID=report_table.student_ID) WHERE result_table.department_result=7 order by report_table.total desc limit 3;";

$sql .= "DELETE FROM result_table WHERE department_result = 7 AND student_ID NOT IN(SELECT student_ID FROM testerr);";

// // $sql .= " DELETE FROM result_table WHERE student_ID IN (SELECT result_table.student_ID FROM result_table INNER JOIN report_table ON (result_table.student_ID=report_table.student_ID) WHERE department_result =7  ORDER BY report_table.total DESC )LIMIT 1;";

$sql .= "INSERT INTO result_table (`student_ID`,`department_result`)  select report_table.student_ID,student_placement_form.choice8 from report_table INNER JOIN student_placement_form on report_table.student_ID=student_placement_form.student_ID where student_placement_form.choice8=8  AND student_placement_form.student_ID NOT IN(SELECT student_ID FROM result_table) order by report_table.total desc limit 3;";

$sql .= "INSERT INTO testerr(student_ID,department_result)
 SELECT result_table.student_ID,result_table.department_result from result_table inner join student_table on (result_table.student_ID=student_table.student_ID) inner join report_table on (result_table.student_ID=report_table.student_ID) WHERE result_table.department_result=8 order by report_table.total desc limit 3;";

$sql .= "DELETE FROM result_table WHERE department_result = 8 AND student_ID NOT IN(SELECT student_ID FROM testerr);";

// // $sql .= " DELETE FROM result_table WHERE student_ID IN (SELECT result_table.student_ID FROM result_table INNER JOIN report_table ON (result_table.student_ID=report_table.student_ID) WHERE department_result =8  ORDER BY report_table.total DESC )LIMIT 1;";

$sql .= "INSERT INTO result_table (`student_ID`,`department_result`)  select report_table.student_ID,student_placement_form.choice8 from report_table INNER JOIN student_placement_form on report_table.student_ID=student_placement_form.student_ID where student_placement_form.choice8=9  AND student_placement_form.student_ID NOT IN(SELECT student_ID FROM result_table) order by report_table.total desc limit 3;";

$sql .= "INSERT INTO testerr(student_ID,department_result)
 SELECT result_table.student_ID,result_table.department_result from result_table inner join student_table on (result_table.student_ID=student_table.student_ID) inner join report_table on (result_table.student_ID=report_table.student_ID) WHERE result_table.department_result=9 order by report_table.total desc limit 3;";

$sql .= "DELETE FROM result_table WHERE department_result = 9 AND student_ID NOT IN(SELECT student_ID FROM testerr);";

// // $sql .= " DELETE FROM result_table WHERE student_ID IN (SELECT result_table.student_ID FROM result_table INNER JOIN report_table ON (result_table.student_ID=report_table.student_ID) WHERE department_result =9  ORDER BY report_table.total DESC )LIMIT 1;";

$sql .= "INSERT INTO result_table (`student_ID`,`department_result`)  select report_table.student_ID,student_placement_form.choice8 from report_table INNER JOIN student_placement_form on report_table.student_ID=student_placement_form.student_ID where student_placement_form.choice8=10  AND student_placement_form.student_ID NOT IN(SELECT student_ID FROM result_table) order by report_table.total desc limit 3;";

$sql .= "INSERT INTO testerr(student_ID,department_result)
 SELECT result_table.student_ID,result_table.department_result from result_table inner join student_table on (result_table.student_ID=student_table.student_ID) inner join report_table on (result_table.student_ID=report_table.student_ID) WHERE result_table.department_result=10 order by report_table.total desc limit 3;";

$sql .= "DELETE FROM result_table WHERE department_result = 10 AND student_ID NOT IN(SELECT student_ID FROM testerr);";

// // $sql .= " DELETE FROM result_table WHERE student_ID IN (SELECT result_table.student_ID FROM result_table INNER JOIN report_table ON (result_table.student_ID=report_table.student_ID) WHERE department_result =10  ORDER BY report_table.total DESC )LIMIT 1;";

$sql .= "INSERT INTO result_table (`student_ID`,`department_result`)  select report_table.student_ID,student_placement_form.choice8 from report_table INNER JOIN student_placement_form on report_table.student_ID=student_placement_form.student_ID where student_placement_form.choice8=11  AND student_placement_form.student_ID NOT IN(SELECT student_ID FROM result_table) order by report_table.total desc limit 3;";

$sql .= "INSERT INTO testerr(student_ID,department_result)
 SELECT result_table.student_ID,result_table.department_result from result_table inner join student_table on (result_table.student_ID=student_table.student_ID) inner join report_table on (result_table.student_ID=report_table.student_ID) WHERE result_table.department_result=11 order by report_table.total desc limit 3;";

$sql .= "DELETE FROM result_table WHERE department_result = 11 AND student_ID NOT IN(SELECT student_ID FROM testerr);";

// // $sql .= " DELETE FROM result_table WHERE student_ID IN (SELECT result_table.student_ID FROM result_table INNER JOIN report_table ON (result_table.student_ID=report_table.student_ID) WHERE department_result =11  ORDER BY report_table.total DESC )LIMIT 1;";

$sql .= "INSERT INTO result_table (`student_ID`,`department_result`)  select report_table.student_ID,student_placement_form.choice8 from report_table INNER JOIN student_placement_form on report_table.student_ID=student_placement_form.student_ID where student_placement_form.choice8=12  AND student_placement_form.student_ID NOT IN(SELECT student_ID FROM result_table) order by report_table.total desc limit 3;";


$sql .= "INSERT INTO testerr(student_ID,department_result)
 SELECT result_table.student_ID,result_table.department_result from result_table inner join student_table on (result_table.student_ID=student_table.student_ID) inner join report_table on (result_table.student_ID=report_table.student_ID) WHERE result_table.department_result=12 order by report_table.total desc limit 3;";

$sql .= "DELETE FROM result_table WHERE department_result = 12 AND student_ID NOT IN(SELECT student_ID FROM testerr);";
// // $sql .= " DELETE FROM result_table WHERE student_ID IN (SELECT result_table.student_ID FROM result_table INNER JOIN report_table ON (result_table.student_ID=report_table.student_ID) WHERE department_result =12  ORDER BY report_table.total DESC )LIMIT 1;";

$sql .= "INSERT INTO result_table (`student_ID`,`department_result`)  select report_table.student_ID,student_placement_form.choice8 from report_table INNER JOIN student_placement_form on report_table.student_ID=student_placement_form.student_ID where student_placement_form.choice8=13  AND student_placement_form.student_ID NOT IN(SELECT student_ID FROM result_table) order by report_table.total desc limit 3;";

$sql .= "INSERT INTO testerr(student_ID,department_result)
 SELECT result_table.student_ID,result_table.department_result from result_table inner join student_table on (result_table.student_ID=student_table.student_ID) inner join report_table on (result_table.student_ID=report_table.student_ID) WHERE result_table.department_result=13 order by report_table.total desc limit 3;";

$sql .= "DELETE FROM result_table WHERE department_result = 13 AND student_ID NOT IN(SELECT student_ID FROM testerr);";

// // $sql .= " DELETE FROM result_table WHERE student_ID IN (SELECT result_table.student_ID FROM result_table INNER JOIN report_table ON (result_table.student_ID=report_table.student_ID) WHERE department_result =13  ORDER BY report_table.total DESC )LIMIT 1;";

$sql .= "INSERT INTO result_table (`student_ID`,`department_result`)  select report_table.student_ID,student_placement_form.choice8 from report_table INNER JOIN student_placement_form on report_table.student_ID=student_placement_form.student_ID where student_placement_form.choice8=14  AND student_placement_form.student_ID NOT IN(SELECT student_ID FROM result_table) order by report_table.total desc limit 3;";

$sql .= "INSERT INTO testerr(student_ID,department_result)
 SELECT result_table.student_ID,result_table.department_result from result_table inner join student_table on (result_table.student_ID=student_table.student_ID) inner join report_table on (result_table.student_ID=report_table.student_ID) WHERE result_table.department_result=14 order by report_table.total desc limit 3;";

$sql .= "DELETE FROM result_table WHERE department_result = 14 AND student_ID NOT IN(SELECT student_ID FROM testerr);";

// // $sql .= " DELETE FROM result_table WHERE student_ID IN (SELECT result_table.student_ID FROM result_table INNER JOIN report_table ON (result_table.student_ID=report_table.student_ID) WHERE department_result =14 ORDER BY report_table.total DESC )LIMIT 1;";

$sql .= "INSERT INTO result_table (`student_ID`,`department_result`)  select report_table.student_ID,student_placement_form.choice8 from report_table INNER JOIN student_placement_form on report_table.student_ID=student_placement_form.student_ID where student_placement_form.choice8=15  AND student_placement_form.student_ID NOT IN(SELECT student_ID FROM result_table) order by report_table.total desc limit 3;";

$sql .= "INSERT INTO testerr(student_ID,department_result)
 SELECT result_table.student_ID,result_table.department_result from result_table inner join student_table on (result_table.student_ID=student_table.student_ID) inner join report_table on (result_table.student_ID=report_table.student_ID) WHERE result_table.department_result=15 order by report_table.total desc limit 3;";

$sql .= "DELETE FROM result_table WHERE department_result = 15 AND student_ID NOT IN(SELECT student_ID FROM testerr);";
$sql .= "DELETE from testerr;";
// // $sql .= " DELETE FROM result_table WHERE student_ID IN (SELECT result_table.student_ID FROM result_table INNER JOIN report_table ON (result_table.student_ID=report_table.student_ID) WHERE department_result =15  ORDER BY report_table.total DESC )LIMIT 1;";

$result = $conn->multi_query($sql);
if($result){
	echo "done";
}
?>
<html>
    <head></head>
    <body>
        <a href="haile10.php">10th</a>
    </body>
</html>
