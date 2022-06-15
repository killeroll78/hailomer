
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>placement_form</title>
<script src="jquery.min.js"></script>
<script src="jquery-ui.js"></script>
<style>
ul {
 padding:0px;
 margin: 0px;
}
#response {
 padding:10px;
 background-color:#9F9;
 border:2px solid #396;
 margin-bottom:20px;
}
#list li {
 margin: 0 0 3px;
 padding:8px;
 background-color:#00CCCC;
 color:#fff;
 list-style: none;
 border: #CCCCCC solid 1px;
}
body{
align-items : center;
padding-left :200px;
}
input{
align-items : center;
border-radius : 20px;
margin-bottom: 20px;
padding: 10px;

}
</style>
<script type="text/javascript">
$(document).ready(function(){  
   function slideout(){
  setTimeout(function(){
  $("#response").slideUp("slow", function () {
 });
 }, 2000);
 }
  
   $("#response").hide();
   $(function() {
  $("#list ul").sortable({ opacity: 0.8, cursor: 'move', update: function() {
    var order = $(this).sortable("serialize") + '&update=update';
    $.post("updatelist.php", order, function(theResponse){
  $("#response").html(theResponse);
  $("#response").slideDown('slow');
  slideout();
    });                
   }         
    });
   });
 
}); 
</script>
</head>
<body>
<div id="container" style="width:300px;">
 <div id="list">
 <div id="response"> </div>
   <ul>
     <script>
       function disp_alert() {
         if(confirm("ok"));
window.location="../Admin/student_dashboard.php";
       }
       </script>
     <?php
     
$conn = new mysqli('localhost','root','','testingdb');
if ($conn->connect_error) {
    die('Error : ('. $conn->connect_errno .') '. $conn->connect_error);
}
$results = $conn->query("SELECT id,listorder, text FROM dragdrop ORDER BY listorder ASC");
 while($row = $results->fetch_assoc()) {
  $id=$row['id'];
  $text=$row['text'];
  $listone = $row['listorder'];
    ?>
     <li id="arrayorder_<?php echo $id ?>"><?php echo ""?> <?php echo $text; ?>
       <div class="clear"></div>
     </li>
     <?php } ?>
   </ul>
 </div>
</div>
<?php
session_start();
$placechecker = "SELECT student_placement_form.student_ID FROM student_placement_form INNER JOIN student_table ON(student_placement_form.student_ID=student_table.student_ID) where username =  '" . $_SESSION["username"] . "'";
$placementcheker1 = $conn->query($placechecker);
if($placementcheker1){


	$rows1 = mysqli_num_rows($placementcheker1);
	if($rows1 > 0){
		echo "<div>
<h3>you submitted your placement form previously so changes will not be made here.</h3>
<br/>Click here to go <a href='../Admin/student_dashboard.php'>back</a></div>";
    
    // header("Location:student_dashboard.php");
	}
  else{

// if (isset($_REQUEST['student_ID'])){
// $student_ID= stripslashes($_REQUEST['student_ID']);
// $student_iD= mysqli_real_escape_string($conn,$student_ID);
$query3="INSERT INTO `student_placement_form`(`choice1`, `choice2`, `choice3`, `choice4`, `choice5`, `choice6`, `choice7`, `choice8`, `choice9`, `choice10`, `choice11`, `choice12`, `choice13`, `choice14`,`choice15`,`student_ID`) VALUES ((SELECT `id` from `dragdrop` WHERE listorder=1),(SELECT `id` from `dragdrop` WHERE listorder=2),(SELECT `id` from `dragdrop` WHERE listorder=3),(SELECT `id` from `dragdrop` WHERE listorder=4),(SELECT `id` from `dragdrop` WHERE listorder=5),(SELECT `id` from `dragdrop` WHERE listorder=6),(SELECT `id` from `dragdrop` WHERE listorder=7),(SELECT `id` from `dragdrop` WHERE listorder=8),(SELECT `id` from `dragdrop` WHERE listorder=9),(SELECT `id` from `dragdrop` WHERE listorder=10),(SELECT `id` from `dragdrop` WHERE listorder=11),(SELECT `id` from `dragdrop` WHERE listorder=12),(SELECT `id` from `dragdrop` WHERE listorder=13),(SELECT `id` from `dragdrop` WHERE listorder=14),(SELECT `id` from `dragdrop` WHERE listorder=15),(SELECT student_ID from student_table where username = '" . $_SESSION["username"] . "'))";
$result2= mysqli_query($conn,$query3);
if($result2){
echo "updated succefully";
echo "<div>
<h3>if you finish .</h3>
<br/>Click here to go <a href='../Admin/student_dashboard.php'>back</a></div>";
}
// }                                                                                                                                                                                                                                                                                                                                     
// else{
// echo "please enter your id below";
?>
<!-- <form name="registration" action="" method="post">
<input type="text" placeholder="student_ID" name="student_ID" required></input>
<button type="submit" name="submit" value="Register">submit</button>
</div>
</form> -->
<?php }} ?>

</body>
</html>



