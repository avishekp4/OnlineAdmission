<?php
// Inialize session
//if(!isset($_SESSION)){
  //  session_start();
//}
// Check, if username session is NOT set then this page will jump to login page
//if (!isset($_SESSION['name'])) {
//header('Location: firstpage.php');
//}


include'connect.php';
//$student_id=$_SESSION['name'];
$student_id="1234";
$f_name=$_GET['f_name'];
$f_occu=$_GET['f_occu'];
$f_edu=$_GET['f_edu'];
$f_income=$_GET['f_income'];
$m_name=$_GET['m_name'];
$m_occu=$_GET['m_occu'];
$m_edu=$_GET['m_edu'];
$m_income=$_GET['m_income'];
$category=$_GET['category'];
$ph=$_GET['ph'];
$minority=$_GET['minority'];
$nationality=$_GET['nationality'];
$religion=$_GET['religion'];
$dob=$_GET['dob'];
$blood_gr=$_GET['blood_gr'];
$sport_quota=$_GET['sport_quota'];
$name_of_last_school=$_GET['name_of_last_school'];
$bpl=$_GET['bpl'];
$extra_caricular=$_GET['extra_caricular'];
$game_sport=$_GET['game_sport'];
$lg=$_GET['lg'];
$addr_lg=$_GET['addr_lg'];
$rail_bus=$_GET['rail_bus'];
$scholar=$_GET['scholar'];
$hons=$_GET['hons'];
$sub1=$_GET['sub1'];
$sub2=$_GET['sub2'];
//$sub3=$_GET['sub2'];
$previous_add=$_GET['previous_add'];
$lang1_name=$_GET['lang1_name'];
$lang1_fm=$_GET['lang1_fm'];
$lang1_om=$_GET['lang1_om'];
$sub1_name=$_GET['sub1_name'];
$sub1_th_fm=$_GET['sub1_th_fm'];
$sub1_th_om=$_GET['sub1_th_om'];
$sub1_pr_fm=$_GET['sub1_pr_fm'];
$sub1_pr_om=$_GET['sub1_pr_om'];
$sub2_name=$_GET['sub2_name'];
$sub2_th_fm=$_GET['sub2_th_fm'];
$sub2_th_om=$_GET['sub2_th_om'];
$sub2_pr_fm=$_GET['sub2_pr_fm'];
$sub2_pr_om=$_GET['sub2_pr_om'];
$sub2_fm=$sub2_th_fm+$sub2_pr_fm;
//$sub3_fm=$sub3_th_fm+$sub3_pr_fm;
//$sub4_fm=$sub4_th_fm+$sub4_pr_fm;
$sub3_th_om=$_GET['sub3_th_om'];
$sub4_th_om=$_GET['sub4_th_om'];
$sub3_th_fm=$_GET['sub3_th_fm'];
$sub4_th_fm=$_GET['sub4_th_fm'];
$sub3_pr_fm=$_GET['sub3_pr_fm'];
$sub4_pr_fm=$_GET['sub4_pr_fm'];
$sub3_pr_om=$_GET['sub3_pr_om'];
$sub4_pr_om=$_GET['sub4_pr_om'];
$sub3_name=$_GET['sub3_name'];
$sub4_name=$_GET['sub4_name'];
$sub1_fm=$sub1_th_fm+$sub1_pr_fm;
$sub3_fm=$sub3_th_fm+$sub3_pr_fm;
$sub4_fm=$sub4_th_fm+$sub4_pr_fm;
$sub1_total_om=$sub1_th_om+$sub1_pr_om;
$sub2_total_om=$sub2_th_om+$sub2_pr_om;
$sub3_total_om=$sub3_th_om+$sub3_pr_om;
$sub4_total_om=$sub4_th_om+$sub4_pr_om;
$lang2_name=$_GET['lang2_name'];
$lang2_fm=$_GET['lang2_fm'];
$lang2_om=$_GET['lang2_om'];
$address=$_GET['address'];
$gender= $_GET['gender'];










/*///
$sql="select * from student_basic_info where student_id <=>'$student_id'";
$result = mysqli_query($conn,$sql);
if (!$result) {
	die("No result " . mysqli_error());
}
$row = @mysqli_fetch_array($sql);
$student_name=$row['student_name'];
$fathers_name=$row['fathers_name'];
$dob=$row['dob'];
$address=$_GET['address'];
$gender=$_GET['gender'];
$category=$_GET['category'];
$phd=$_GET['phd'];

//$yop=$row['yop'];
//$board=$row['board'];

$style = file_get_contents('style.css');
$jornal = $_GET['jornal'];

$filename=$student_id."pdf";




















*/









//Insert in Main
$sql2="INSERT INTO `main`(`f_name`, `f_occu`, `f_edu`, `f_income`, `m_name`, `m_occu`, `m_edu`, `m_income`, `category`, `ph`, `minority`, `nationality`, `religion`, `dob`, `blood_gr`, `sport_quota`, `name_of_last_school`, `bpl`, `extra_caricular`, `game_sport`, `lg`, `addr_lg`, `rail_bus`, `scholar`, `hons`, `sub1`, `sub2`, `previous_add`, `lang1_name`, `lang1_fm`, `lang1_om`, `sub1_name`, `sub1_th_fm`, `sub1_th_om`, `sub1_pr_fm`, `sub1_pr_om`, `sub2_name`, `sub2_th_fm`, `sub2_th_om`, `sub2_pr_fm`, `sub2_pr_om`, `sub2_fm`, `sub3_fm`, `sub4_fm`, `sub3_th_om`, `sub4_th_om`, `sub3_th_fm`, `sub4_th_fm`, `sub3_pr_fm`, `sub4_pr_fm`, `sub3_pr_om`, `sub4_pr_om`, `sub3_name`, `sub4_name`, `sub1_fm`, `sub1_total_om`, `sub2_total_om`, `sub3_total_om`, `sub4_total_om`, `lang2_name`, `lang2_fm`, `lang2_om`, `student_id`, `address`,`gender`) VALUES ('$f_name','$f_occu','$f_edu','$f_income','$m_name','$m_occu','$m_edu','$m_income','$category','$ph','$minority','$nationality','$religion','$dob','$blood_gr','$sport_quota','$name_of_last_school','$bpl','$extra_caricular','$game_sport','$lg','$addr_lg','$rail_bus','$scholar','$hons','$sub1','$sub2','$previous_add','$lang1_name','$lang1_fm','$lang1_om','$sub1_name','$sub1_th_fm','$sub1_th_om','$sub1_pr_fm','$sub1_pr_om','$sub2_name','$sub2_th_fm','$sub2_th_om','$sub2_pr_fm','$sub2_pr_om','$sub2_fm','$sub3_fm','$sub4_fm','$sub3_th_om','$sub4_th_om','$sub3_th_fm','$sub4_th_fm','$sub3_pr_fm','$sub4_pr_fm','$sub3_pr_om','$sub4_pr_om','$sub3_name','$sub4_name','$sub1_fm','$sub1_total_om','$sub2_total_om','$sub3_total_om','$sub4_total_om','$lang2_name','$lang2_fm','$lang2_om','$student_id','$address','$gender')";
echo $sql2;
$result2 = mysqli_query($conn,$sql2);
if (!$result2) {
	die("No result1 " . mysqli_error($conn));
}

echo "Submitted";


/*$html="<html>
<body>
<div style=\"text-align:center;\">
	<h3> Student Application Form</h3>
    <h4>Anynomus University</h4> 
    
</div>


<div>
<h>Personal Information</h>
<table id=\"one-column-emphasis\">

<tr>
	<td>Student Name</td><td>".$student_name."</td>
</tr>
<tr>
	<td>Fathers Name</td><td>".$fathers_name."</td>
</tr>
<tr>
	<td>Date of birth</td>
	<td>".$dob."</td>
    <td>Gender</td>
    <td>".$gender."</td>
    <td>Category</td>
    <td>".$category."</td>

</tr>



<!--tr>
	<td>Year of passing</td><td>".$yop."</td>
</tr>
<tr>
	<td>Board</td><td>".$board."</td>
</tr>
<tr>
	<td>Date of Birth</td><td>".$dob."</td>
</tr-->
</table>
</div>

<div>
<h>Examination Passed<h>

<table id=\"one-column-emphasis\">

<tr>
	<th>Exam Name</th>
	<th>Board</th>
    <th>Year</th>
	<th>Percentage</th>
</tr>
<tr>
	<td>".$exam1."</td>
	<td>".$board1."</td>
	<td>".$year1."</td>
	<td>".$percent1."</td>
</tr>
<tr>
	<td>".$exam2."</td>
	<td>".$board2."</td>
	<td>".$year2."</td>
	<td>".$percent2."</td>
</tr>

</table>
</div>

<div>
	<h>Details of 10+2 </h>
<table id=\"one-column-emphasis\" repeat_header=\"1\">

<tr>
	<th>Subject</th>
	<th>Fllmarks</th>
    <th>Obtained Marks</th>
	<th>Percentage</th>
</tr>
<tr>
	<td>".$subject1."</td>
	<td>".$fullmarks1."</td>
	<td>".$obtained1."</td>
	<td>".$hs_percent1."</td>
</tr>
<tr>
	<td>".$subject2."</td>
	<td>".$fullmarks2."</td>
	<td>".$obtained2."</td>
	<td>".$hs_percent2."</td>
</tr>
<tr>
	<td>".$subject3."</td>
	<td>".$fullmarks3."</td>
	<td>".$obtained3."</td>
	<td>".$hs_percent3."</td>
</tr>
<tr>
	<td>".$subject4."</td>
	<td>".$fullmarks4."</td>
	<td>".$obtained4."</td>
	<td>".$hs_percent4."</td>
</tr>
</table>
</div>
<div>
 <h>Payment Information<h>
  <p>Jornal No /DD /Transaction No-".$jornal."
     Payment Date:".$pay_date."
     Bank Name:".$bank_name."<p>

</div>



<div>
<p>I hearby accknowledge above information are correct...</p>
<!--p>Student Signature</p>                                                               <p style=\"float:right\">Gurdian Signature</p-->

<p>Student Signature &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gurdian Signature</p>


</div>
</body>
</html>";
//echo $html;
include('mpdf/mpdf.php');
$mpdf= new mPDF();
$mpdf=new mPDF('win-1252','A4','','',20,15,48,25,10,10); 
$mpdf->useOnlyCoreFonts = true;    // false is default
$mpdf->SetProtection(array('print'));
$mpdf->SetTitle("Application");
$mpdf->SetAuthor("..........");
$mpdf->SetWatermarkText("Submitted");
$mpdf->showWatermarkText = false;
$mpdf->watermark_font = 'DejaVuSansCondensed';
$mpdf->watermarkTextAlpha = 0.1;




$mpdf->SetDisplayMode('fullpage');
$mpdf->SetHeader('Referenceno-{DATE jmYmmsshh}{PAGENO}');
$mpdf->SetFooter('|{PAGENO}|');

$mpdf->WriteHTML($style,1);
$mpdf->WriteHTML($html,2);
//$mpdf->WriteHTML('hi');
$mpdf->Output();//For direct out put in browser

//$mpdf->Output($filename,'F');//for saving in current directory fource fully  for letter use 
//$mpdf->Output($filename,'D');//downlode in browser


exit;*/
?>
