<?php

// Inialize session

// Include database connection settings
//include("con.php");
include 'connect.php';


function generateRandomString($length = 6) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}











$val1=$_GET["student_name"];
//echo $val;
$val2=$_GET["mobile"];
$val3=$_GET["exam"];
$val4=$_GET["board"];
$val5=$_GET["roll"];
$val6=$_GET["yop"];


//MySql Injection
//$val = stripslashes($val);
//$val1 = stripslashes($val1);
//$val = mysql_real_escape_string($val);
//$val1 = mysql_real_escape_string($val1);







//Encription using hash

//$encrypted_mypassword=md5($val1);
//$val1=$encrypted_mypassword;
// Retrieve username and password from database according to user's input
//$login = "SELECT * FROM login_table WHERE username <=>'$val' and password<=>'$val1'" ;
$login="SELECT * FROM `auth` WHERE  `name_of_student`='$val1' and`mobile_no`='$val2'and `examination`='$val3'and `board`='$val4'and`roll_no`='$val5'and `year_of_passing`='$val6'";




$result=mysqli_query($conn,$login);
$row = mysqli_num_rows($result);

//if($row!='NULL'){
//$row1 = @mysqli_fetch_array($result);


// Check username and password match
if ($row == 1) 
	{
		
		
		$row1 = @mysqli_fetch_array($result);
		
		//if(!isset($_SESSION)){
    session_start();
//}
		
		
		
		$_SESSION['name'] = $row1['student_id'];
       header("Location:previous_user.php");

}

else
{	
$student_id=generateRandomString(7);
$new_value="insert into auth (`student_id`, `name_of_student`, `mobile_no`, `examination`, `board`, `roll_no`, `year_of_passing`)values('$student_id','$val1','$val2','$val3','$val4','$val5','$val6')";
$insert_new_value=mysqli_query($conn,$new_value);
if (!$insert_new_value) {
	die("No result1 " . mysqli_error($conn));
}
 session_start();
$_SESSION['name'] = $row1['student_id'];

	header("Location:education.php");

}
?>










 
