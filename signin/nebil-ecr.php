<?php
// $abuky = "hello";
// $abuky1 = md5($abuky);
// echo $abuky1;
// $abuky4 = "5d41402abc4b2a76b9719d911017c592";
$abuky5 ="onetwo";
// $killer =  hash("512",$abuky5);
// echo $killer;
$password = hash("sha256", $abuky5);
echo $password;
// $abuky6 = md5($abuky5);
// $abuky7 = strlen($abuky6);
// $rr = strlen($password);
// echo $rr;
// if($abuky6 == $abuky4){
    // echo "password is correct";
    // echo $abuky7;
    // echo $abuky5;
    // echo $abuky6;
    // echo $abuky7;
// }
// else{
//  echo "password is not correct";
// }