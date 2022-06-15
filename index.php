<?php
$conn = mysqli_connect("localhost", "root", "", "testingdb");
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

// $sql = "SELECT * from result_table;";
// $sql .= "INSERT INTO result_table (`student_ID`,`department_result`)  select report_table.student_ID,student_placement_form.choice1 from report_table INNER JOIN student_placement_form on report_table.student_ID=student_placement_form.student_ID where student_placement_form.choice1=1 order by report_table.total desc;";
// $sql .=  "INSERT INTO result_table (`student_ID`,`department_result`)  select report_table.student_ID,student_placement_form.choice1 from report_table INNER JOIN student_placement_form on report_table.student_ID=student_placement_form.student_ID where student_placement_form.choice1=2 order by report_table.total desc;";
// $sql .=  "INSERT INTO result_table (`student_ID`,`department_result`)  select report_table.student_ID,student_placement_form.choice1 from report_table INNER JOIN student_placement_form on report_table.student_ID=student_placement_form.student_ID where student_placement_form.choice1=3 order by report_table.total desc;";
// $sql .=  "INSERT INTO result_table (`student_ID`,`department_result`)  select report_table.student_ID,student_placement_form.choice1 from report_table INNER JOIN student_placement_form on report_table.student_ID=student_placement_form.student_ID where student_placement_form.choice1=4 order by report_table.total desc;";
// $sql .=  "INSERT INTO result_table (`student_ID`,`department_result`)  select report_table.student_ID,student_placement_form.choice1 from report_table INNER JOIN student_placement_form on report_table.student_ID=student_placement_form.student_ID where student_placement_form.choice1=5 order by report_table.total desc;";
// $sql .=  "INSERT INTO result_table (`student_ID`,`department_result`)  select report_table.student_ID,student_placement_form.choice1 from report_table INNER JOIN student_placement_form on report_table.student_ID=student_placement_form.student_ID where student_placement_form.choice1=6 order by report_table.total desc;";
// $sql .=  "INSERT INTO result_table (`student_ID`,`department_result`)  select report_table.student_ID,student_placement_form.choice1 from report_table INNER JOIN student_placement_form on report_table.student_ID=student_placement_form.student_ID where student_placement_form.choice1=7 order by report_table.total desc;";
// $sql .=  "INSERT INTO result_table (`student_ID`,`department_result`)  select report_table.student_ID,student_placement_form.choice1 from report_table INNER JOIN student_placement_form on report_table.student_ID=student_placement_form.student_ID where student_placement_form.choice1=8 order by report_table.total desc;";
// $sql .=  "INSERT INTO result_table (`student_ID`,`department_result`)  select report_table.student_ID,student_placement_form.choice1 from report_table INNER JOIN student_placement_form on report_table.student_ID=student_placement_form.student_ID where student_placement_form.choice1=9 order by report_table.total desc;";
// $sql .=  "INSERT INTO result_table (`student_ID`,`department_result`)  select report_table.student_ID,student_placement_form.choice1 from report_table INNER JOIN student_placement_form on report_table.student_ID=student_placement_form.student_ID where student_placement_form.choice1=10 order by report_table.total desc;";
// $sql .=  "INSERT INTO result_table (`student_ID`,`department_result`)  select report_table.student_ID,student_placement_form.choice1 from report_table INNER JOIN student_placement_form on report_table.student_ID=student_placement_form.student_ID where student_placement_form.choice1=11 order by report_table.total desc;";
// $sql .=  "INSERT INTO result_table (`student_ID`,`department_result`)  select report_table.student_ID,student_placement_form.choice1 from report_table INNER JOIN student_placement_form on report_table.student_ID=student_placement_form.student_ID where student_placement_form.choice1=12 order by report_table.total desc;";
// $sql .=  "INSERT INTO result_table (`student_ID`,`department_result`)  select report_table.student_ID,student_placement_form.choice1 from report_table INNER JOIN student_placement_form on report_table.student_ID=student_placement_form.student_ID where student_placement_form.choice1=13 order by report_table.total desc;";
// $sql .=  "INSERT INTO result_table (`student_ID`,`department_result`)  select report_table.student_ID,student_placement_form.choice1 from report_table INNER JOIN student_placement_form on report_table.student_ID=student_placement_form.student_ID where student_placement_form.choice1=14 order by report_table.total desc;";
// $sql .=  "INSERT INTO result_table (`student_ID`,`department_result`)  select report_table.student_ID,student_placement_form.choice1 from report_table INNER JOIN student_placement_form on report_table.student_ID=student_placement_form.student_ID where student_placement_form.choice1=15 order by report_table.total desc;";
// $result = $conn->multi_query($sql);


// if ($result) {
// 	echo "placed successfully";
// }
// else{
// 	echo "failed";
// }


// for ($i = 0; $i <=14; $i++) {

	
// 	if($i==1){
	$sql18 = "INSERT INTO result_table(student_ID,department_result)
			select   report_table.student_ID,choice2 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice2=1 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=1))
		;";
		$sql18 .= "INSERT INTO result_table(student_ID,department_result)
		select   report_table.student_ID,choice2 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice2=2 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=2))
	;";
	$sql18 .= "INSERT INTO result_table(student_ID,department_result)
	select   report_table.student_ID,choice2 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice2=3 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=3))
;";
$sql18 .= "INSERT INTO result_table(student_ID,department_result)
		select   report_table.student_ID,choice2 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice2=4 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=4))
	;";
	$sql18 .= "INSERT INTO result_table(student_ID,department_result)
	select   report_table.student_ID,choice2 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice2=5 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=5))
;";
$sql18 .= "INSERT INTO result_table(student_ID,department_result)
		select   report_table.student_ID,choice2 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice2=6 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=6))
	;";
	$sql18 .= "INSERT INTO result_table(student_ID,department_result)
	select   report_table.student_ID,choice2 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice2=7 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=7))
;";
$sql18 .= "INSERT INTO result_table(student_ID,department_result)
		select   report_table.student_ID,choice2 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice2=8 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=8))
	;";
	$sql18 .= "INSERT INTO result_table(student_ID,department_result)
	select   report_table.student_ID,choice2 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice2=9 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=9))
;";
$sql18 .= "INSERT INTO result_table(student_ID,department_result)
		select   report_table.student_ID,choice2 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice2=10 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=10))
	;";
	$sql18 .= "INSERT INTO result_table(student_ID,department_result)
	select   report_table.student_ID,choice2 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice2=11 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=11))
;";
$sql18 .= "INSERT INTO result_table(student_ID,department_result)
		select   report_table.student_ID,choice2 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice2=12 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=12))
	;";
	$sql18 .= "INSERT INTO result_table(student_ID,department_result)
	select   report_table.student_ID,choice2 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice2=13 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=13))
;";
$sql18 .= "INSERT INTO result_table(student_ID,department_result)
		select   report_table.student_ID,choice2 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice2=14 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=14))
	;";
	$sql18 .= "INSERT INTO result_table(student_ID,department_result)
	select   report_table.student_ID,choice2 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice2=15 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=15))
;";

	
    $resulter = $conn->multi_query($sql18);
			if ($resulter) {
				echo "updated";
				// $i++;
			}
else{
    echo "not updated";
}



//         }
		
//         elseif($i==2){
// 			$sql22 = "INSERT INTO testerr(student_ID,department_result)
//             select   report_table.student_ID,choice3 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice3=1 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=1));";
                    
//                     $sql22 .= "INSERT INTO testerr(student_ID,department_result)
//             select   report_table.student_ID,choice3 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice3=2 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=2));";
        
//         $sql22 .= "INSERT INTO testerr(student_ID,department_result)
//             select   report_table.student_ID,choice3 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice3=3 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=3));";
        
//         $sql22 .= "INSERT INTO testerr(student_ID,department_result)
//         select   report_table.student_ID,choice3 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice3=4 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=4));";
        
//         $sql22 .= "INSERT INTO testerr(student_ID,department_result)
//         select   report_table.student_ID,choice3 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice3=5 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=5));";
        
//         $sql22 .= "INSERT INTO testerr(student_ID,department_result)
//         select   report_table.student_ID,choice3 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice3=6 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=6));";
        
//         $sql22 .= "INSERT INTO testerr(student_ID,department_result)
//             select   report_table.student_ID,choice3 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice3=7 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=7));";
        
//         $sql22 .= "INSERT INTO testerr(student_ID,department_result)
//             select   report_table.student_ID,choice3 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice3=8 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=8));";
        
//         $sql22 .= "INSERT INTO testerr(student_ID,department_result)
//         select   report_table.student_ID,choice3 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice3=9 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=9));";
        
//         $sql22 .= "INSERT INTO testerr(student_ID,department_result)
//             select   report_table.student_ID,choice3 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice3=10 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=10));";
        
//         $sql22 .= "INSERT INTO testerr(student_ID,department_result)
//             select   report_table.student_ID,choice3 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice3=11 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=11));";
        
//         $sql22 .= "INSERT INTO testerr(student_ID,department_result)
//         select   report_table.student_ID,choice3 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice3=12 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=12));";
        
//         $sql22 .= "INSERT INTO testerr(student_ID,department_result)
//             select   report_table.student_ID,choice3 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice3=13 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=13));";
        
//         $sql22 .= "INSERT INTO testerr(student_ID,department_result)
//             select   report_table.student_ID,choice3 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice3=14 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=14));";
        
//         $sql22 .= "INSERT INTO testerr(student_ID,department_result)
//             select   report_table.student_ID,choice3 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice3=15 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=15));";
        
        
//                     $resulter = $conn->multi_query($sql22);
//                     if ($resulter) {
//                         echo "updated";
//                     }
//                     else{
//                         echo "not updated";
//                     }


//         }
//         elseif($i==3){

//             $sql27 = "INSERT INTO testerr(student_ID,department_result)
// 			select   report_table.student_ID,choice4 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice4=1 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=1));";
			
// 			$sql27 .= "INSERT INTO testerr(student_ID,department_result)
// 			select   report_table.student_ID,choice4 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice4=2 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=2));";
			
// 			$sql27 .= "INSERT INTO testerr(student_ID,department_result)
// 			select   report_table.student_ID,choice4 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice4=3 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=3));";
			
// 			$sql27 .= "INSERT INTO testerr(student_ID,department_result)
// 			select   report_table.student_ID,choice4 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice4=4 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=4));";
			
// 			$sql27 .= "INSERT INTO testerr(student_ID,department_result)
// 			select   report_table.student_ID,choice4 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice4=5 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=5));";
			
// 			$sql27 .= "INSERT INTO testerr(student_ID,department_result)
// 			select   report_table.student_ID,choice4 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice4=6 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=6));";
			
// 			$sql27 .= "INSERT INTO testerr(student_ID,department_result)
// 			select   report_table.student_ID,choice4 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice4=7 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=7));";
			
// 			$sql27 .= "INSERT INTO testerr(student_ID,department_result)
// 			select   report_table.student_ID,choice4 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice4=8 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=8));";
			
// 			$sql27 .= "INSERT INTO testerr(student_ID,department_result)
// 			select   report_table.student_ID,choice4 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice4=9 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=9));";
			
// 			$sql27 .= "INSERT INTO testerr(student_ID,department_result)
// 			select   report_table.student_ID,choice4 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice4=10 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=10));";
			
// 			$sql27 .= "INSERT INTO testerr(student_ID,department_result)
// 			select   report_table.student_ID,choice4 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice4=11 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=11));";
			
// 			$sql27 .= "INSERT INTO testerr(student_ID,department_result)
// 			select   report_table.student_ID,choice4 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice4=12 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=12));";
			
// 			$sql27 .= "INSERT INTO testerr(student_ID,department_result)
// 			select   report_table.student_ID,choice4 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice4=13 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=13));";
			
// 			$sql27 .= "INSERT INTO testerr(student_ID,department_result)
// 			select   report_table.student_ID,choice4 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice4=14 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=14));";
			
// 			$sql27 .= "INSERT INTO testerr(student_ID,department_result)
// 			select   report_table.student_ID,choice4 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice4=15 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=15));";
			

// 			$resulter = $conn->multi_query($sql27);
// 			if ($resulter) {
// 				echo "updated";
// 			}
//             else{
//                 echo "not updated";
//             }
//         }
// elseif($i==4){
//     $sql33 = "INSERT INTO testerr(student_ID,department_result)
//     select   report_table.student_ID,choice5 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice5=1 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=1));";

// $sql33 .= "INSERT INTO testerr(student_ID,department_result)
// select   report_table.student_ID,choice5 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice5=2 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=2));";

// $sql33 .= "INSERT INTO testerr(student_ID,department_result)
//     select   report_table.student_ID,choice5 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice5=3 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=3));";

// $sql33 .= "INSERT INTO testerr(student_ID,department_result)
// select   report_table.student_ID,choice5 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice5=4 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=4));";

// $sql33 .= "INSERT INTO testerr(student_ID,department_result)
//     select   report_table.student_ID,choice5 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice5=5 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=5));";

// $sql33 .= "INSERT INTO testerr(student_ID,department_result)
//     select   report_table.student_ID,choice5 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice5=6 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=6));";

// $sql33 .= "INSERT INTO testerr(student_ID,department_result)
// select   report_table.student_ID,choice5 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice5=7 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=7));";

// $sql33 .= "INSERT INTO testerr(student_ID,department_result)
// select   report_table.student_ID,choice5 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice5=8 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=8));";


// $sql33 .= "INSERT INTO testerr(student_ID,department_result)
//     select   report_table.student_ID,choice5 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice5=9 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=9));";

// $sql33 .= "INSERT INTO testerr(student_ID,department_result)
// select   report_table.student_ID,choice5 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice5=10 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=10));";

// $sql33 .= "INSERT INTO testerr(student_ID,department_result)
//     select   report_table.student_ID,choice5 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice5=11 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=11));";

// $sql33 .= "INSERT INTO testerr(student_ID,department_result)
//     select   report_table.student_ID,choice5 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice5=12 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=12));";

// $sql33 .= "INSERT INTO testerr(student_ID,department_result)
//     select   report_table.student_ID,choice5 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice5=13 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=13));";

// $sql33 .= "INSERT INTO testerr(student_ID,department_result)
//     select   report_table.student_ID,choice5 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice5=14 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=14));";

// $sql33 .= "INSERT INTO testerr(student_ID,department_result)
//     select   report_table.student_ID,choice5 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice5=15 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=15));";

//     $resulter = $conn->multi_query($sql33);
//     if ($resulter) {
//         echo "updated";
//     }
//     else{
//         echo "not updated";
//     }

// }
// elseif($i==5){
//     $sql40 = "INSERT INTO testerr(student_ID,department_result)
//     select   report_table.student_ID,choice6 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice6=1 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=1));";

// $sql40 .= "INSERT INTO testerr(student_ID,department_result)
// select   report_table.student_ID,choice6 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice6=2 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=2));";

// $sql40 .= "INSERT INTO testerr(student_ID,department_result)
// select   report_table.student_ID,choice6 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice6=3 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=3));";
// $sql40 .= "INSERT INTO testerr(student_ID,department_result)
// select   report_table.student_ID,choice6 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice6=4 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=4));";
// $sql40 .= "INSERT INTO testerr(student_ID,department_result)
// select   report_table.student_ID,choice6 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice6=5 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=5));";
// $sql40 .= "INSERT INTO testerr(student_ID,department_result)
// select   report_table.student_ID,choice6 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice6=6 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=6));";
// $sql40 .= "INSERT INTO testerr(student_ID,department_result)
// select   report_table.student_ID,choice6 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice6=7 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=7));";
// $sql40 .= "INSERT INTO testerr(student_ID,department_result)
// select   report_table.student_ID,choice6 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice6=8 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=8));";
// $sql40 .= "INSERT INTO testerr(student_ID,department_result)
// select   report_table.student_ID,choice6 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice6=9 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=9));";
// $sql40 .= "INSERT INTO testerr(student_ID,department_result)
// select   report_table.student_ID,choice6 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice6=10 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=10));";
// $sql40 .= "INSERT INTO testerr(student_ID,department_result)
// select   report_table.student_ID,choice6 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice6=11 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=11));";
// $sql40 .= "INSERT INTO testerr(student_ID,department_result)
// select   report_table.student_ID,choice6 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice6=12 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=12));";
// $sql40 .= "INSERT INTO testerr(student_ID,department_result)
// select   report_table.student_ID,choice6 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice6=13 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=13));";
// $sql40 .= "INSERT INTO testerr(student_ID,department_result)
// select   report_table.student_ID,choice6 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice6=14 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=14));";
// $sql40 .= "INSERT INTO testerr(student_ID,department_result)
// select   report_table.student_ID,choice6 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice6=15 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=15));";


//     $resulter = $conn->multi_query($sql40);
//     if ($resulter) {
//         echo "updated";
//     }
//     else{
//         echo "not updated";
//     }


// }
// elseif($i==6){
// 	$sql48 = "INSERT INTO testerr(student_ID,department_result)
// 	select   report_table.student_ID,choice7 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice7=1 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=1));";
// $sql48 .= "INSERT INTO testerr(student_ID,department_result)
// select   report_table.student_ID,choice7 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice7=2 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=2));";
// $sql48 .= "INSERT INTO testerr(student_ID,department_result)
// select   report_table.student_ID,choice7 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice7=3 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=3));";
// 	$sql48 .= "INSERT INTO testerr(student_ID,department_result)
// 	select   report_table.student_ID,choice7 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice7=4 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=4));";
// 		$sql48 .= "INSERT INTO testerr(student_ID,department_result)
// 		select   report_table.student_ID,choice7 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice7=5 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=5));";
// 	$sql48 .= "INSERT INTO testerr(student_ID,department_result)
// 	select   report_table.student_ID,choice7 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice7=6 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=6));";
// 		$sql48 .= "INSERT INTO testerr(student_ID,department_result)
// 		select   report_table.student_ID,choice7 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice7=7 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=7));";
// $sql48 .= "INSERT INTO testerr(student_ID,department_result)
// select   report_table.student_ID,choice7 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice7=8 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=8));";
// 	$sql48 .= "INSERT INTO testerr(student_ID,department_result)
// 	select   report_table.student_ID,choice7 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice7=9 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=9));";
// $sql48 .= "INSERT INTO testerr(student_ID,department_result)
// select   report_table.student_ID,choice7 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice7=10 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=10));";
// 			$sql48 .= "INSERT INTO testerr(student_ID,department_result)
// 			select   report_table.student_ID,choice7 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice7=11 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=12));";
// 	$sql48 .= "INSERT INTO testerr(student_ID,department_result)
// 	select   report_table.student_ID,choice7 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice7=13 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=13));";
// $sql48 .= "INSERT INTO testerr(student_ID,department_result)
// select   report_table.student_ID,choice7 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice7=14 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=14));";
// $sql48 .= "INSERT INTO testerr(student_ID,department_result)
// select   report_table.student_ID,choice7 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice7=15 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=15));";
																								

// 			$resulter = $conn->multi_query($sql48);
// 			if ($resulter) {
// 				echo "updated";
// 			}
//             else{
//                 echo "not updated";
//             }

// }
// elseif($i==7){
//     $sql57 = "INSERT INTO testerr(student_ID,department_result)
//     select   report_table.student_ID,choice8 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice8=1 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=1));";
            
//             $sql57 .= "INSERT INTO testerr(student_ID,department_result)
//     select   report_table.student_ID,choice8 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice8=2 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=2));";
//     $sql57 .= "INSERT INTO testerr(student_ID,department_result)
//     select   report_table.student_ID,choice8 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice8=3 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=3));";
//     $sql57 .= "INSERT INTO testerr(student_ID,department_result)
//     select   report_table.student_ID,choice8 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice8=4 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=4));";
//         $sql57 .= "INSERT INTO testerr(student_ID,department_result)
//         select   report_table.student_ID,choice8 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice8=5 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=5));";
//     $sql57 .= "INSERT INTO testerr(student_ID,department_result)
//     select   report_table.student_ID,choice8 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice8=6 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=6));";
//     $sql57 .= "INSERT INTO testerr(student_ID,department_result)
//     select   report_table.student_ID,choice8 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice8=7 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=7));";
//     $sql57 .= "INSERT INTO testerr(student_ID,department_result)
//     select   report_table.student_ID,choice8 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice8=8 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=8));";
//     $sql57 .= "INSERT INTO testerr(student_ID,department_result)
//     select   report_table.student_ID,choice8 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice8=9 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=9));";
//         $sql57 .= "INSERT INTO testerr(student_ID,department_result)
//         select   report_table.student_ID,choice8 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice8=10 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=10));";
//     $sql57 .= "INSERT INTO testerr(student_ID,department_result)
//     select   report_table.student_ID,choice8 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice8=11 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=11));";
//     $sql57 .= "INSERT INTO testerr(student_ID,department_result)
//     select   report_table.student_ID,choice8 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice8=12 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=12));";
//     $sql57 .= "INSERT INTO testerr(student_ID,department_result)
//     select   report_table.student_ID,choice8 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice8=13 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=13));";
//         $sql57 .= "INSERT INTO testerr(student_ID,department_result)
//         select   report_table.student_ID,choice8 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice8=14 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=14));";
//     $sql57 .= "INSERT INTO testerr(student_ID,department_result)
//     select   report_table.student_ID,choice8 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice8=15 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=15));";
                                                                                                        
    
//                 $resulter = $conn->multi_query($sql57);
//                 if ($resulter) {
//                     echo "updated";
//                 }

//                 else{

//                     echo "not updated";
//                 }
                


// }

// elseif($i==8){

//     $sql67 = "INSERT INTO testerr(student_ID,department_result)
// select   report_table.student_ID,choice9 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice9=1 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=1));";
// 		$sql67 .= "INSERT INTO testerr(student_ID,department_result)
// 		select   report_table.student_ID,choice9 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice9=2 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=2));";
				
// 				$sql67 .= "INSERT INTO testerr(student_ID,department_result)
// 				select   report_table.student_ID,choice9 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice9=3 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=3));";
// $sql67 .= "INSERT INTO testerr(student_ID,department_result)
// select   report_table.student_ID,choice9 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice9=4 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=4));";
// $sql67 .= "INSERT INTO testerr(student_ID,department_result)
// select   report_table.student_ID,choice9 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice9=5 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=5));";
// $sql67 .= "INSERT INTO testerr(student_ID,department_result)
// select   report_table.student_ID,choice9 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice9=6 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=6));";
// $sql67 .= "INSERT INTO testerr(student_ID,department_result)
// select   report_table.student_ID,choice9 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice9=7 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=7));";
// 	$sql67 .= "INSERT INTO testerr(student_ID,department_result)
// 	select   report_table.student_ID,choice9 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice9=8 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=8));";
// $sql67 .= "INSERT INTO testerr(student_ID,department_result)
// select   report_table.student_ID,choice9 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice9=9 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=9));";
// $sql67 .= "INSERT INTO testerr(student_ID,department_result)
// select   report_table.student_ID,choice9 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice9=10 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=10));";
// $sql67 .= "INSERT INTO testerr(student_ID,department_result)
// select   report_table.student_ID,choice9 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice9=11 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=11));";
// 	$sql67 .= "INSERT INTO testerr(student_ID,department_result)
// 	select   report_table.student_ID,choice9 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice9=12 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=12));";
// $sql67 .= "INSERT INTO testerr(student_ID,department_result)
// select   report_table.student_ID,choice9 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice9=13 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=13));";
// 	$sql67 .= "INSERT INTO testerr(student_ID,department_result)
// 	select   report_table.student_ID,choice9 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice9=14 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=14));";
// $sql67 .= "INSERT INTO testerr(student_ID,department_result)
// select   report_table.student_ID,choice9 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice9=15 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=15));";
																														

// 			$resulter = $conn->multi_query($sql67);
// 			if ($resulter) {
// 				echo "updated";
// 			}
			
// 			else {
//                 echo "not updated";
//             }
// }


// elseif($i==9){

//     $sql88 = "INSERT INTO testerr(student_ID,department_result)
// 		select   report_table.student_ID,choice10 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice10=1 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=1));";
// 		$sql88 .= "INSERT INTO testerr(student_ID,department_result)
// 		select   report_table.student_ID,choice10 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice10=2 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=2));";
// 	$sql88 .= "INSERT INTO testerr(student_ID,department_result)
// 	select   report_table.student_ID,choice10 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice10=3 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=3));";
// $sql88 .= "INSERT INTO testerr(student_ID,department_result)
// select   report_table.student_ID,choice10 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice10=4 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=4));";
// 	$sql88 .= "INSERT INTO testerr(student_ID,department_result)
// 	select   report_table.student_ID,choice10 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice10=5 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=5));";
// $sql88 .= "INSERT INTO testerr(student_ID,department_result)
// select   report_table.student_ID,choice10 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice10=6 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=6));";
// $sql88 .= "INSERT INTO testerr(student_ID,department_result)
// select   report_table.student_ID,choice10 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice10=7 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=7));";
// $sql88 .= "INSERT INTO testerr(student_ID,department_result)
// select   report_table.student_ID,choice10 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice10=8 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=8));";
// 	$sql88 .= "INSERT INTO testerr(student_ID,department_result)
// 	select   report_table.student_ID,choice10 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice10=9 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=9));";
// $sql88 .= "INSERT INTO testerr(student_ID,department_result)
// select   report_table.student_ID,choice10 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice10=10 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=10));";
// $sql88 .= "INSERT INTO testerr(student_ID,department_result)
// select   report_table.student_ID,choice10 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice10=11 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=11));";
// $sql88 .= "INSERT INTO testerr(student_ID,department_result)
// select   report_table.student_ID,choice10 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice10=12 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=12));";
// $sql88 .= "INSERT INTO testerr(student_ID,department_result)
// select   report_table.student_ID,choice10 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice10=13 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=13));";
// $sql88 .= "INSERT INTO testerr(student_ID,department_result)
// select   report_table.student_ID,choice10 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice10=14 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=14));";
// 	$sql88 .= "INSERT INTO testerr(student_ID,department_result)
// 	select   report_table.student_ID,choice10 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice10=15 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=15));";
																																																											


// 			$resulter = $conn->multi_query($sql88);
// 			if ($resulter) {
// 				echo "updated";
// 			}
//             else{
//                 echo "not updated";
//             }

// }
// elseif($i==10){
// 	$sql90 = "INSERT INTO testerr(student_ID,department_result)
// 		select   report_table.student_ID,choice11 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice11=1 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=1));";
// 		$sql90 .= "INSERT INTO testerr(student_ID,department_result)
// 		select   report_table.student_ID,choice11 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice11=2 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=2));";
// 			$sql90 .= "INSERT INTO testerr(student_ID,department_result)
// 			select   report_table.student_ID,choice11 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice11=3 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=3));";
// 		$sql90 .= "INSERT INTO testerr(student_ID,department_result)
// 		select   report_table.student_ID,choice11 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice11=4 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=4));";
// 		$sql90 .= "INSERT INTO testerr(student_ID,department_result)
// 		select   report_table.student_ID,choice11 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice11=5 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=5));";
// 			$sql90 .= "INSERT INTO testerr(student_ID,department_result)
// 			select   report_table.student_ID,choice11 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice11=6 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=6));";
// 		$sql90 .= "INSERT INTO testerr(student_ID,department_result)
// 		select   report_table.student_ID,choice11 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice11=7 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=7));";
// 		$sql90 .= "INSERT INTO testerr(student_ID,department_result)
// 		select   report_table.student_ID,choice11 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice11=8 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=8));";
// 		$sql90 .= "INSERT INTO testerr(student_ID,department_result)
// 		select   report_table.student_ID,choice11 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice11=9 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=9));";
// 		$sql90 .= "INSERT INTO testerr(student_ID,department_result)
// 		select   report_table.student_ID,choice11 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice11=10 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=10));";
// 		$sql90 .= "INSERT INTO testerr(student_ID,department_result)
// 		select   report_table.student_ID,choice11 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice11=11 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=11));";
// 		$sql90 .= "INSERT INTO testerr(student_ID,department_result)
// 		select   report_table.student_ID,choice11 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice11=12 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=12));";
// 		$sql90 .= "INSERT INTO testerr(student_ID,department_result)
// 		select   report_table.student_ID,choice11 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice11=13 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=13));";
// 			$sql90 .= "INSERT INTO testerr(student_ID,department_result)
// 			select   report_table.student_ID,choice11 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice11=14 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=14));";
// 		$sql90 .= "INSERT INTO testerr(student_ID,department_result)
// 		select   report_table.student_ID,choice11 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice11=15 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=15));";
																																						


// 			$resulter = $conn->multi_query($sql90);
// 			if ($resulter) {
// 				echo "updated";
// 			}
//             else{
//                 echo "not updated";
//             }

// }

// elseif($i==11){

// 	$sql103 = "INSERT INTO testerr(student_ID,department_result)
// 			select   report_table.student_ID,choice12 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice12=1 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=1));";
// 				$sql103 .= "INSERT INTO testerr(student_ID,department_result)
// 				select   report_table.student_ID,choice12 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice12=2 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=2));";
// 		$sql103 .= "INSERT INTO testerr(student_ID,department_result)
// 		select   report_table.student_ID,choice12 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice12=3 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=3));";
// 			$sql103 .= "INSERT INTO testerr(student_ID,department_result)
// 			select   report_table.student_ID,choice12 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice12=4 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=4));";
// 		$sql103 .= "INSERT INTO testerr(student_ID,department_result)
// 		select   report_table.student_ID,choice12 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice12=5 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=5));";
// 		$sql103 .= "INSERT INTO testerr(student_ID,department_result)
// 		select   report_table.student_ID,choice12 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice12=6 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=6));";
// 		$sql103 .= "INSERT INTO testerr(student_ID,department_result)
// 		select   report_table.student_ID,choice12 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice12=7 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=7));";
// 			$sql103 .= "INSERT INTO testerr(student_ID,department_result)
// 			select   report_table.student_ID,choice12 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice12=8 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=8));";
// 		$sql103 .= "INSERT INTO testerr(student_ID,department_result)
// 		select   report_table.student_ID,choice12 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice12=9 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=9));";
// 		$sql103 .= "INSERT INTO testerr(student_ID,department_result)
// 		select   report_table.student_ID,choice12 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice12=10 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=10));";
// 		$sql103 .= "INSERT INTO testerr(student_ID,department_result)
// 		select   report_table.student_ID,choice12 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice12=11 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=11));";
// 			$sql103 .= "INSERT INTO testerr(student_ID,department_result)
// 			select   report_table.student_ID,choice12 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice12=12 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=12));";
// 		$sql103 .= "INSERT INTO testerr(student_ID,department_result)
// 		select   report_table.student_ID,choice12 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice12=13 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=13));";
// 		$sql103 .= "INSERT INTO testerr(student_ID,department_result)
// 		select   report_table.student_ID,choice12 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice12=14 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=14));";
// 		$sql103 .= "INSERT INTO testerr(student_ID,department_result)
// 		select   report_table.student_ID,choice12 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice12=15 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=15));";
																															
				
// 			$resulter = $conn->multi_query($sql103);
// 			if ($resulter) {
// 				echo "updated";
// 			}
//             else{
//                 echo "not updated";
//             }

// }
// elseif($i==12){
//     $sql117 = "INSERT INTO testerr(student_ID,department_result)
// 			select   report_table.student_ID,choice13 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice13=1 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=1));";
// 	$sql117 .= "INSERT INTO testerr(student_ID,department_result)
// 	select   report_table.student_ID,choice13 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice13=2 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=2));";
// 		$sql117 .= "INSERT INTO testerr(student_ID,department_result)
// 		select   report_table.student_ID,choice13 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice13=3 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=3));";
// 		$sql117 .= "INSERT INTO testerr(student_ID,department_result)
// 		select   report_table.student_ID,choice13 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice13=4 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=4));";
// 		$sql117 .= "INSERT INTO testerr(student_ID,department_result)
// 		select   report_table.student_ID,choice13 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice13=5 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=5));";
// 		$sql117 .= "INSERT INTO testerr(student_ID,department_result)
// 		select   report_table.student_ID,choice13 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice13=6 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=6));";
// 		$sql117 .= "INSERT INTO testerr(student_ID,department_result)
// 		select   report_table.student_ID,choice13 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice13=7 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=7));";
// 		$sql117 .= "INSERT INTO testerr(student_ID,department_result)
// 		select   report_table.student_ID,choice13 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice13=8 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=8));";
// 		$sql117 .= "INSERT INTO testerr(student_ID,department_result)
// 		select   report_table.student_ID,choice13 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice13=9 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=9));";
// 		$sql117 .= "INSERT INTO testerr(student_ID,department_result)
// 		select   report_table.student_ID,choice13 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice13=10 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=10));";
// 		$sql117 .= "INSERT INTO testerr(student_ID,department_result)
// 		select   report_table.student_ID,choice13 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice13=11 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=11));";
// 		$sql117 .= "INSERT INTO testerr(student_ID,department_result)
// 		select   report_table.student_ID,choice13 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice13=12 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=12));";
// 		$sql117 .= "INSERT INTO testerr(student_ID,department_result)
// 		select   report_table.student_ID,choice13 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice13=13 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=13));";
// 		$sql117 .= "INSERT INTO testerr(student_ID,department_result)
// 		select   report_table.student_ID,choice13 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice13=14 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=14));";
// 		$sql117 .= "INSERT INTO testerr(student_ID,department_result)
// 		select   report_table.student_ID,choice13 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice13=15 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=15));";
																															

// 			$resulter = $conn->multi_query($sql117);
// 			if ($resulter) {
// 				echo "updated";
// 			}
//             else{
//                 echo "not updated";
//             }

// }
// elseif($i==13){
//     $sql132 = "INSERT INTO testerr(student_ID,department_result)
//     select   report_table.student_ID,choice14 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice14=1 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=1));";
// $sql132 .= "INSERT INTO testerr(student_ID,department_result)
// select   report_table.student_ID,choice14 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice14=2 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=2));";
// $sql132 .= "INSERT INTO testerr(student_ID,department_result)
// select   report_table.student_ID,choice14 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice14=3 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=3));";
// $sql132 .= "INSERT INTO testerr(student_ID,department_result)
// select   report_table.student_ID,choice14 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice14=4 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=4));";
// $sql132 .= "INSERT INTO testerr(student_ID,department_result)
// select   report_table.student_ID,choice14 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice14=5 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=5));";
// $sql132 .= "INSERT INTO testerr(student_ID,department_result)
// select   report_table.student_ID,choice14 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice14=6 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=6));";
// $sql132 .= "INSERT INTO testerr(student_ID,department_result)
// select   report_table.student_ID,choice14 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice14=7 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=7));";
// $sql132 .= "INSERT INTO testerr(student_ID,department_result)
// select   report_table.student_ID,choice14 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice14=8 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=8));";
// $sql132 .= "INSERT INTO testerr(student_ID,department_result)
// select   report_table.student_ID,choice14 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice14=9 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=9));";
// $sql132 .= "INSERT INTO testerr(student_ID,department_result)
// select   report_table.student_ID,choice14 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice14=10 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=10));";
// $sql132 .= "INSERT INTO testerr(student_ID,department_result)
// select   report_table.student_ID,choice14 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice14=11 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=11));";
// $sql132 .= "INSERT INTO testerr(student_ID,department_result)
// select   report_table.student_ID,choice14 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice14=12 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=12));";
// $sql132 .= "INSERT INTO testerr(student_ID,department_result)
// select   report_table.student_ID,choice14 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice14=13 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=13));";
// $sql132 .= "INSERT INTO testerr(student_ID,department_result)
// select   report_table.student_ID,choice14 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice14=14 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=14));";
// $sql132 .= "INSERT INTO testerr(student_ID,department_result)
// select   report_table.student_ID,choice14 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice14=15 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=15));";
                                                                
// $resulter = $conn->multi_query($sql132);
// if ($resulter) {
//     echo "updated";
// }
// else{
//     echo "not updated";
// }

// }
// elseif($i==14){$sql142 = "SELECT * FROM result_table;";
//     $sql142 .= "INSERT INTO testerr(student_ID,department_result)
//                     select   report_table.student_ID,choice15 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice15=1 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=1));";
//                 $sql142 .= "INSERT INTO testerr(student_ID,department_result)
//                 select   report_table.student_ID,choice15 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice15=2 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=2));";
//             $sql142 .= "INSERT INTO testerr(student_ID,department_result)
//             select   report_table.student_ID,choice15 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice15=3 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=3));";
//         $sql142 .= "INSERT INTO testerr(student_ID,department_result)
//         select   report_table.student_ID,choice15 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice15=4 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=4));";
//         $sql142 .= "INSERT INTO testerr(student_ID,department_result)
//         select   report_table.student_ID,choice15 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice15=5 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=5));";
//         $sql142 .= "INSERT INTO testerr(student_ID,department_result)
//         select   report_table.student_ID,choice15 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice15=6 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=6));";
//         $sql142 .= "INSERT INTO testerr(student_ID,department_result)
//         select   report_table.student_ID,choice15 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice15=7 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=7));";
//         $sql142 .= "INSERT INTO testerr(student_ID,department_result)
//         select   report_table.student_ID,choice15 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice15=8 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=8));";
//         $sql142 .= "INSERT INTO testerr(student_ID,department_result)
//         select   report_table.student_ID,choice15 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice15=9 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=9));";
//         $sql142 .= "INSERT INTO testerr(student_ID,department_result)
//         select   report_table.student_ID,choice15 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice15=10 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=10));";
//         $sql142 .= "INSERT INTO testerr(student_ID,department_result)
//         select   report_table.student_ID,choice15 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice15=11 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=11));";
//         $sql142 .= "INSERT INTO testerr(student_ID,department_result)
//         select   report_table.student_ID,choice15 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice15=12 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=12));";
//         $sql142 .= "INSERT INTO testerr(student_ID,department_result)
//         select   report_table.student_ID,choice15 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice15=13 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=13));";
//         $sql142 .= "INSERT INTO testerr(student_ID,department_result)
//         select   report_table.student_ID,choice15 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice15=14 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=14));";
//         $sql142 .= "INSERT INTO testerr(student_ID,department_result)
//         select   report_table.student_ID,choice15 from report_table,student_placement_form where report_table.student_ID =(SELECT  student_ID FROM student_placement_form where student_placement_form.choice15=15 and student_placement_form.student_ID not in (SELECT result_table.student_ID FROM result_table)) AND report_table.total > ALL(select   total from report_table where report_table.student_ID IN(SELECT  student_ID FROM result_table WHERE result_table.department_result=15));";
//         $resulter = $conn->multi_query($sql142);
//                 if ($resulter) {
//                     echo "updated";
//                 }
//                 else{
//                     echo "not updated";
//                 }
    
// }
// else{
//     echo "running";
    
// }

// }

