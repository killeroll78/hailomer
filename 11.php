<?php
$conn = mysqli_connect("localhost", "root", "", "testingdb");
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO result_table (`student_ID`,`department_result`)  select report_table.student_ID,student_placement_form.choice12 from report_table INNER JOIN student_placement_form on report_table.student_ID=student_placement_form.student_ID where student_placement_form.choice12=1  AND student_placement_form.student_ID NOT IN(SELECT student_ID FROM result_table) order by report_table.total desc limit 3;";

// $sql .= " DELETE FROM result_table WHERE student_ID IN (SELECT result_table.student_ID FROM result_table INNER JOIN report_table ON (result_table.student_ID=report_table.student_ID) WHERE department_result =1  ORDER BY report_table.total DESC )LIMIT 1;";

$sql .= "INSERT INTO result_table (`student_ID`,`department_result`)  select report_table.student_ID,student_placement_form.choice12 from report_table INNER JOIN student_placement_form on report_table.student_ID=student_placement_form.student_ID where student_placement_form.choice12=2  AND student_placement_form.student_ID NOT IN(SELECT student_ID FROM result_table) order by report_table.total desc limit 3;";

// $sql .= " DELETE FROM result_table WHERE student_ID IN (SELECT result_table.student_ID FROM result_table INNER JOIN report_table ON (result_table.student_ID=report_table.student_ID) WHERE department_result =2  ORDER BY report_table.total DESC )LIMIT 1;";

$sql .= "INSERT INTO result_table (`student_ID`,`department_result`)  select report_table.student_ID,student_placement_form.choice12 from report_table INNER JOIN student_placement_form on report_table.student_ID=student_placement_form.student_ID where student_placement_form.choice12=3  AND student_placement_form.student_ID NOT IN(SELECT student_ID FROM result_table) order by report_table.total desc limit 3;";

// $sql .= " DELETE FROM result_table WHERE student_ID IN (SELECT result_table.student_ID FROM result_table INNER JOIN report_table ON (result_table.student_ID=report_table.student_ID) WHERE department_result =3  ORDER BY report_table.total DESC )LIMIT 1;";

$sql .= "INSERT INTO result_table (`student_ID`,`department_result`)  select report_table.student_ID,student_placement_form.choice12 from report_table INNER JOIN student_placement_form on report_table.student_ID=student_placement_form.student_ID where student_placement_form.choice12=4  AND student_placement_form.student_ID NOT IN(SELECT student_ID FROM result_table) order by report_table.total desc limit 3;";

// $sql .= " DELETE FROM result_table WHERE student_ID IN (SELECT result_table.student_ID FROM result_table INNER JOIN report_table ON (result_table.student_ID=report_table.student_ID) WHERE department_result =4  ORDER BY report_table.total DESC )LIMIT 1;";

$sql .= "INSERT INTO result_table (`student_ID`,`department_result`)  select report_table.student_ID,student_placement_form.choice12 from report_table INNER JOIN student_placement_form on report_table.student_ID=student_placement_form.student_ID where student_placement_form.choice12=5  AND student_placement_form.student_ID NOT IN(SELECT student_ID FROM result_table) order by report_table.total desc limit 3;";

// $sql .= " DELETE FROM result_table WHERE student_ID IN (SELECT result_table.student_ID FROM result_table INNER JOIN report_table ON (result_table.student_ID=report_table.student_ID) WHERE department_result =5  ORDER BY report_table.total DESC )LIMIT 1;";

$sql .= "INSERT INTO result_table (`student_ID`,`department_result`)  select report_table.student_ID,student_placement_form.choice12 from report_table INNER JOIN student_placement_form on report_table.student_ID=student_placement_form.student_ID where student_placement_form.choice12=6  AND student_placement_form.student_ID NOT IN(SELECT student_ID FROM result_table) order by report_table.total desc limit 3;";

// $sql .= " DELETE FROM result_table WHERE student_ID IN (SELECT result_table.student_ID FROM result_table INNER JOIN report_table ON (result_table.student_ID=report_table.student_ID) WHERE department_result =6  ORDER BY report_table.total DESC )LIMIT 1;";

$sql .= "INSERT INTO result_table (`student_ID`,`department_result`)  select report_table.student_ID,student_placement_form.choice12 from report_table INNER JOIN student_placement_form on report_table.student_ID=student_placement_form.student_ID where student_placement_form.choice12=7  AND student_placement_form.student_ID NOT IN(SELECT student_ID FROM result_table) order by report_table.total desc limit 3;";

// $sql .= " DELETE FROM result_table WHERE student_ID IN (SELECT result_table.student_ID FROM result_table INNER JOIN report_table ON (result_table.student_ID=report_table.student_ID) WHERE department_result =7  ORDER BY report_table.total DESC )LIMIT 1;";

$sql .= "INSERT INTO result_table (`student_ID`,`department_result`)  select report_table.student_ID,student_placement_form.choice12 from report_table INNER JOIN student_placement_form on report_table.student_ID=student_placement_form.student_ID where student_placement_form.choice12=8  AND student_placement_form.student_ID NOT IN(SELECT student_ID FROM result_table) order by report_table.total desc limit 3;";

// $sql .= " DELETE FROM result_table WHERE student_ID IN (SELECT result_table.student_ID FROM result_table INNER JOIN report_table ON (result_table.student_ID=report_table.student_ID) WHERE department_result =8  ORDER BY report_table.total DESC )LIMIT 1;";

$sql .= "INSERT INTO result_table (`student_ID`,`department_result`)  select report_table.student_ID,student_placement_form.choice12 from report_table INNER JOIN student_placement_form on report_table.student_ID=student_placement_form.student_ID where student_placement_form.choice12=9  AND student_placement_form.student_ID NOT IN(SELECT student_ID FROM result_table) order by report_table.total desc limit 3;";

// $sql .= " DELETE FROM result_table WHERE student_ID IN (SELECT result_table.student_ID FROM result_table INNER JOIN report_table ON (result_table.student_ID=report_table.student_ID) WHERE department_result =9  ORDER BY report_table.total DESC )LIMIT 1;";

$sql .= "INSERT INTO result_table (`student_ID`,`department_result`)  select report_table.student_ID,student_placement_form.choice12 from report_table INNER JOIN student_placement_form on report_table.student_ID=student_placement_form.student_ID where student_placement_form.choice12=10  AND student_placement_form.student_ID NOT IN(SELECT student_ID FROM result_table) order by report_table.total desc limit 3;";

// $sql .= " DELETE FROM result_table WHERE student_ID IN (SELECT result_table.student_ID FROM result_table INNER JOIN report_table ON (result_table.student_ID=report_table.student_ID) WHERE department_result =10  ORDER BY report_table.total DESC )LIMIT 1;";

$sql .= "INSERT INTO result_table (`student_ID`,`department_result`)  select report_table.student_ID,student_placement_form.choice12 from report_table INNER JOIN student_placement_form on report_table.student_ID=student_placement_form.student_ID where student_placement_form.choice12=11  AND student_placement_form.student_ID NOT IN(SELECT student_ID FROM result_table) order by report_table.total desc limit 3;";

// $sql .= " DELETE FROM result_table WHERE student_ID IN (SELECT result_table.student_ID FROM result_table INNER JOIN report_table ON (result_table.student_ID=report_table.student_ID) WHERE department_result =11  ORDER BY report_table.total DESC )LIMIT 1;";

$sql .= "INSERT INTO result_table (`student_ID`,`department_result`)  select report_table.student_ID,student_placement_form.choice12 from report_table INNER JOIN student_placement_form on report_table.student_ID=student_placement_form.student_ID where student_placement_form.choice12=12  AND student_placement_form.student_ID NOT IN(SELECT student_ID FROM result_table) order by report_table.total desc limit 3;";

// $sql .= " DELETE FROM result_table WHERE student_ID IN (SELECT result_table.student_ID FROM result_table INNER JOIN report_table ON (result_table.student_ID=report_table.student_ID) WHERE department_result =12  ORDER BY report_table.total DESC )LIMIT 1;";

$sql .= "INSERT INTO result_table (`student_ID`,`department_result`)  select report_table.student_ID,student_placement_form.choice12 from report_table INNER JOIN student_placement_form on report_table.student_ID=student_placement_form.student_ID where student_placement_form.choice12=13  AND student_placement_form.student_ID NOT IN(SELECT student_ID FROM result_table) order by report_table.total desc limit 3;";

// $sql .= " DELETE FROM result_table WHERE student_ID IN (SELECT result_table.student_ID FROM result_table INNER JOIN report_table ON (result_table.student_ID=report_table.student_ID) WHERE department_result =13  ORDER BY report_table.total DESC )LIMIT 1;";

$sql .= "INSERT INTO result_table (`student_ID`,`department_result`)  select report_table.student_ID,student_placement_form.choice12 from report_table INNER JOIN student_placement_form on report_table.student_ID=student_placement_form.student_ID where student_placement_form.choice12=14  AND student_placement_form.student_ID NOT IN(SELECT student_ID FROM result_table) order by report_table.total desc limit 3;";

// $sql .= " DELETE FROM result_table WHERE student_ID IN (SELECT result_table.student_ID FROM result_table INNER JOIN report_table ON (result_table.student_ID=report_table.student_ID) WHERE department_result =14  ORDER BY report_table.total DESC )LIMIT 1;";

$sql .= "INSERT INTO result_table (`student_ID`,`department_result`)  select report_table.student_ID,student_placement_form.choice12 from report_table INNER JOIN student_placement_form on report_table.student_ID=student_placement_form.student_ID where student_placement_form.choice12=15  AND student_placement_form.student_ID NOT IN(SELECT student_ID FROM result_table) order by report_table.total desc limit 3;";

// $sql .= " DELETE FROM result_table WHERE student_ID IN (SELECT result_table.student_ID FROM result_table INNER JOIN report_table ON (result_table.student_ID=report_table.student_ID) WHERE department_result =15  ORDER BY report_table.total DESC )LIMIT 1;";

$result = $conn->multi_query($sql);
if($result){
	echo "done";
}

?>
<html>
    <head></head>
    <body>
        <a href="12.php">12th</a>
    </body>
</html>