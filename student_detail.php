<?php
//Inialize session
//if(!isset($_SESSION)){
  //  session_start();
//}

// Check, if username session is NOT set then this page will jump to login page
//if (!isset($_SESSION['name'])) {
//header('Location: firstpage.html');
///}
/*///echo "fllgflgfkgflgkfg";
$student_id=$_SESSION['name'];
include 'connect.php';
echo "2";
$sql="select * from student_basic_info where student_id <=>'$student_id'";echo $sql;
$result = mysqli_query($conn,$sql);//echo "4";
if (!$result) {echo "5";
	die("No result " . mysqli_error());
}
$row = @mysqli_fetch_array($sql);echo $row;
$student_name=$row['student_name'];echo "7";
$fathers_name=$row['fathers_name'];
$dob=$row['dob'];
echo $dob;echo "9";
echo $student_name;echo "10";
*/
?>
<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>




	<link rel="stylesheet" type="text/css" href="style.css">
	

	<script>
function validate()
{ 
   if(document.getElementById('jornal').value=="")
   {
     alert( "Please provide jornal no" );
     document.getElementById('jornal').focus();
     return false;
   }
   return true;
}
	</script>










<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;border-color:#ccc;margin:0px auto;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:9px 9px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#fff;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:9px 9px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#f0f0f0;}
.tg .tg-30rh{font-style:italic;text-align:center}
.tg .tg-093g{font-weight:bold;font-style:italic;text-align:center}
.tg .tg-hgcj{font-weight:bold;text-align:center}
</style>




</head>	



<body>

<div class="container">
<div style=\"text-align:center;\">
	<h3> Student Application Form</h3>
    <h4>Anynomus University</h4> 
    <!--img style=\"float:right\" src=\"".$imagename."\" width=\"90\" /-->
</div>


<p style="float:right"><a href="logout.php" target="_parent">Logout</a></p>

<form action="pdfgen.php"method="get"name="Student" enctype="multipart/form-data">
<div><h>Personal Information</h>
    <table id="one-column-emphasis">  

	<tr>
             <td>Fathers Name</td>
             <td><input type="text"name="f_name" id="fathers_name" ></td>
     
             <td> Occupation</td>
             <td><input type="text"name="f_occu" id="fathers_occupation"  >
             </td>
            <td> Education</td>
             <td><input type="text"name="f_edu" id="fathers_occupation"  >
             </td>

    
             <td>Monthely Income</td>
             <td><input type="text" name="f_income">
             </td>
     </tr>
     <tr>
             <td>Mothers  Name</td>
             <td><input type="text"name="m_name" id="m_name" ></td>
     
             <td> Occupation</td>
             <td><input type="text"name="m_occu" id="m_occupation"  >
             </td>
     
             <td> Education</td>
             <td><input type="text"name="m_edu" id="m_edu"  >
             </td>

    
             <td>Monthely Income</td>
             <td><input type="text" name="m_income">
             </td>
     </tr>




    <tr>
             <td>Gender</td>
             <td><input type="radio" name="gender" id="gender" value="male">Male <input type="radio" name="gender"id="gender" value="female">Female</td>
    
             <td>Blood Group</td>
             <td><input type="text" name="blood_gr"   id="blood_gr"></td>
     
             <td>Date Of Birth</td>
             <td><input type="date" name="dob"   id="dob"></td>
     </tr>
     <tr>
             <td>Category</td>
             <td><select name="category">
             
             	<option value="gen">GENERAL</option>
                 <option value="sc">SC</option>
                 <option value="st">ST</option>
                 <option value="obca">OBC-A</option>
             <option value="obcb">OBC-B</option>

            </select>
             </td>
     
             <td>Phycially Handicaped</td>
             <td><input type="radio" name="ph" id="ph" value="yes">Yes
             	<input type="radio" name="ph" id="ph" value="no">No</td>
    
     	     <td>Religion</td>
     	     <td><input type ="text" name="religion" id="religion"></td>
     </tr>
     <tr>
             <td>Minority</td>
             <td><select name="minority">
                <option value="yes">Yes</option>
                <option value="no" selected>No</option>
            </seelect>
            </td>
     </tr>

     <tr>
             <td>Nationality</td>
             <td><input type ="text" name="nationality" id="nationality"></td>
     </tr>


     <tr>
             <td>Sports Quota</td>
             <td><input type ="radio" name="sport_quota" id="sport_quota" value="yes">Yes<input type ="radio" name="sports_quota" id="sports_quota" value="no">No</td>
     </tr>
    <tr>
             <td>Extra Caricular</td>
             <td><textarea name="extra_caricular" id="extra_cari"></textarea></td>
     </tr>
    <tr>
             <td>Name of School Lastattend</td>
             <td><input type ="text" name="name_of_last_school" id="name_of_last_school"></td>
     </tr>
     <tr>
             <td>BPL</td>
             <td><input type ="radio" name="bpl" id="bpl" value="yes">Yes<input type ="radio" name="bpl" id="bpl" value="no">No</td>
     </tr>
     <tr>
             <td>Games And Sports with Level</td>
             <td><textarea name="game_sport" id="game_sport"></textarea></td>
     </tr>


     <tr>
         <td>Address</td>
         <td><textarea name ="address"id="address"></textarea></td>    
     </tr> 
    <tr>
             <td>Local Gurdain</td>
             <td><input type="text" name="lg" id="local_gurdain"></td>
     </tr>


     <tr>
         <td>Address Of local Gurdian</td>
         <td><textarea name ="addr_lg"id="address_lg"></textarea></td>    
     </tr> 
     <tr>
             <td>Nearest Railway Station/Bus stop</td>
             <td><input type="text" name="rail_bus" id="rail"></td>
     </tr>
     <tr>
             <td>Scholarship</td>
             <td><select name="scholar" id="scholar"onchange="myFunction()">

             <option value="yes">Yes</option>
             <option value="no">No</option>

             </select></td>
             <td><input type="hidden" name="scholar_detail" id="scholar_detail"placeholder="Give details of scholarship" ></td>

     </tr>

<tr>
             <td>Previous Admission</td>
             <td><input type="text" name="previous_add" id="previous_add"></td>
     </tr>



</table>
</div>	


<!--div>
	<h>Payment Details</h>
	<table id="one-column-emphasis"> 
	<tr> <td >
	Jornal No / Draft No / Transaction Id:<input type="text" name ="jornal" id="jornal" required></td>
	<td >
    Bank Name:<input type = "text" name = "bank_name" id="bank_name"></td ><td >
    Branch Name:<input type ="text" name = "branch_name" id = "branch_name"></td ><td >
    Branch Address:<input type ="text" name = "branch_address" id = "branch_address"></td ><td >
    Payment Method:<select name="pay_method"><option value ="challan">Bank Challan</option>
                                             <option value ="dd">Demand Draft</option>
                                             <option value ="By Self">By self</option>
                                             </select> </td > <td >  
    Payment Amount :<input type = "text" name ="amount" id = "amount"></td><td> 
    Payment Date   :<input type = "date" name = "pay_date" id="pay_date"></td >
    </td>
   </tr>
  </table>
</div-->	
<!--div>
	<h>Examination Passed<h></div>
<div>
<table id="one-column-emphasis">

<tr>
	<th>Exam Name</th>
	<th>Board</th>
    <th>Year</th>
	<th>Percentage</th>
</tr>
<tr>
	<td><input type = "text" name = "exam1" id="exam1"></td>
	<td><input type = "text" name = "board1" id="board1"></td>
	<td><input type = "text" name = "year1" id="year1"></td>
	<td><input type = "text" name = "subject_taken1" id="subject_taken1"></td>
	<td><input type = "text" name = "percent1" id="percent1"></td>
</tr>
<tr>
	<td><input type ="text" name="exam2" id="exam2"></td>
	<td><input type ="text"name="board2" id="board2"></td>
	<td><input type ="text" name="year2" id="year2"></td>
	<td><input type ="text" name="subject_taken2" id="subject_taken2"></td>
	<td><input type ="text" name="percent2" id="percent2"></td>
</tr>

</table>
</div-->
<div>
	<h4>Details of 10+2 </h4>
</div>





















<table id="one-column-emphasis">
  <tr>
    <th rowspan="2">Subject</th>
    <th rowspan="2"><input type="text" name="lang1_name" placeholder="Language1" size="7"></th>
    <th rowspan="2"><input type="text" name="lang2_name" placeholder="Language1"size="7"></th>
    <th colspan="2"><input type="text" name="sub1_name" placeholder="Subject1"size="7"></th>
    <th colspan="2"><input type="text" name="sub2_name" placeholder="Subject2"size="7"></th>
    <th colspan="2"><input type="text" name="sub3_name" placeholder="Subject3"size="7"></th>
    <th colspan="2"><input type="text" name="sub4_name" placeholder="Subject4"size="7"></th>
  </tr>
  <tr>
    <td>Th</td>
    <td>Pr</td>
    <td>Th</td>
    <td>Pr</td>
    <td>Th</td>
    <td>Pr</td>
    <td>Th</td>
    <td>Pr</td>
  </tr>
  <tr>
    <td>Full<br>Marks</td>
    <td><input type = "text"name="lang1_fm" id="lang1_fm"size="2"></td>
    <td><input type = "text"name="lang2_fm" id="lang2_fm"size="2"></td>
    <td><input type="text" name="sub1_th_fm"size="2"></td>
    <td><input type="text" name="sub1_pr_fm"size="2"></td>
    <td><input type="text" name="sub2_th_fm"size="2"></td>
    <td><input type="text" name="sub2_pr_fm"size="2"></td>
    <td><input type="text" name="sub3_th_fm"size="2"></td>
    <td><input type="text" name="sub3_pr_fm"size="2"></td>
    <td><input type="text" name="sub4_th_fm"size="2"></td>
    <td><input type="text" name="sub4_pr_fm"size="2"></td>
  </tr>
  <tr>
    <td>Marks <br>om</td>
    <td><input type = "text" name="lang1_om" id="lang1_om"size="2"></td>
    <td><input type = "text" name="lang2_om" id="lang2_om"size="2"></td>
    <td><input type="text" name="sub1_th_om"size="2"></td>
    <td><input type="text" name="sub1_pr_om"size="2"></td>
    <td><input type="text" name="sub2_th_om"size="2"></td>
    <td><input type="text" name="sub2_pr_om"size="2"></td>
    <td><input type="text" name="sub3_th_om"size="2"></td>
    <td><input type="text" name="sub3_pr_om"size="2"></td>
    <td><input type="text" name="sub4_th_om"size="2"></td>
    <td><input type="text" name="sub4_pr_om"size="2"></td>
  </tr>
</table>

























<div>
	<h4> Application Detail</h4>  
<table class="tg" style="undefined;table-layout: fixed; width: 657px">
<colgroup>
<col style="width: 222px">
<col style="width: 216px">
<col style="width: 219px">
</colgroup>
  <tr>
    <th class="tg-hgcj" rowspan="2"><br>Honours</th>
    <th class="tg-hgcj" colspan="2">General</th>
  </tr>
  <tr>
    <td class="tg-093g">Sub1</td>
    <td class="tg-093g">Sub2</td>
  </tr>
  <tr>
    <td class="tg-30rh"><input type="text" name="hons"placeholder="Honours"></td>
    <td class="tg-30rh"><input type="text" name="sub1"placeholder="Subject1"></td>
    <td class="tg-30rh"><input type="text" name="sub2"placeholder="Subject2"></td>
  </tr>
</table>








</div>


<div>
	<input type="submit" id="submit" name="submit" onclick="return validate();"> 
</div>
</form>
</div class="container">
<script>
function myFunction() {
    var x = document.getElementById("scholar").value;
    if(x=="yes")
document.getElementById("scholar_detail").type = "textarea";
    else
    document.getElementById("scholar_detail").type = "hidden";

}


</script>


</body>
</html>