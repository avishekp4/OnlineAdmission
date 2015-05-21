<?php
 //Inialize session
if(!isset($_SESSION)){
   session_start();
} 
// Check, if username session is NOT set then this page will jump to login page

if (!isset($_SESSION['name'])) {
header('Location: index.html');
}
$now = time(); // Checking the time now when home page starts.

        if ($now > $_SESSION['expire']) {
			session_unset(); 
            session_destroy();
            echo "Your session has expired! <a href='firstpage.html'>Start here</a>";
			exit();
        }

		
	function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}	
	
include'connect.php';
include 'function.php';
$n=0;
$m=1;
$student_id=$_SESSION['name'];
//$student_id="jhjhj122";
$f_name=mysqli_real_escape_string($conn,$_GET['f_name']);
$f_occu=mysqli_real_escape_string($conn,$_GET['f_occu']);
$f_edu=mysqli_real_escape_string($conn,$_GET['f_edu']);
$f_income=mysqli_real_escape_string($conn,$_GET['f_income']);
$m_name=mysqli_real_escape_string($conn,$_GET['m_name']);
$m_occu=mysqli_real_escape_string($conn,$_GET['m_occu']);
$m_edu=mysqli_real_escape_string($conn,$_GET['m_edu']);
$m_income=mysqli_real_escape_string($conn,$_GET['m_income']);
$category=$_GET['category'];
$ph=$_GET['ph'];
$minority=$_GET['minority'];
$nationality=mysqli_real_escape_string($conn,$_GET['nationality']);
$religion=mysqli_real_escape_string($conn,$_GET['religion']);
$dob=date("Y-m-d",strtotime($_GET['dob']));//echo $dob;
$blood_gr=mysqli_real_escape_string($conn,$_GET['blood_gr']);
$sport_quota=$_GET['sport_quota'];
$name_of_last_school=$_GET['name_of_last_school'];
$name_of_last_school=mysqli_real_escape_string($conn,$name_of_last_school);
$bpl=$_GET['bpl'];
$extra_caricular=$_GET['extra_caricular'];
$extra_caricular = mysqli_real_escape_string($conn, $extra_caricular);

$game_sport=$_GET['game_sport'];
$game_sport = mysqli_real_escape_string($conn, $game_sport);
$pin=mysqli_real_escape_string($conn,$_GET['pin']);
$lg=$_GET['lg'];
$addr_lg=mysqli_real_escape_string($conn,$_GET['addr_lg']);
$rail_bus=mysqli_real_escape_string($conn,$_GET['rail_bus']);
$scholar=$_GET['scholar'];
$scholar_detail=mysqli_real_escape_string($conn,$_GET['scholar_detail']);
//$hons=$_GET['hons'];//$hons=strtoupper($hons);
$sub1=$_GET['sub1'];
$sub2=$_GET['sub2'];
//$sub3=$_GET['sub2'];
$previous_add=$_GET['previous_add'];
$lang1_name=$_GET['lang1_name'];
$lang1_th_fm=$_GET['lang1_th_fm'];
$lang1_pr_fm=$_GET['lang1_pr_fm'];
$lang1_th_om=$_GET['lang1_th_om'];
$lang1_pr_om=$_GET['lang1_pr_om'];
$sub1_name=$_GET['sub1_name'];//echo $sub1_name;
$sub1_th_fm=$_GET['sub1_th_fm'];
$sub1_th_om=$_GET['sub1_th_om'];
$sub1_pr_fm=$_GET['sub1_pr_fm'];
$sub1_pr_om=$_GET['sub1_pr_om'];
$sub2_name=$_GET['sub2_name'];//echo $sub2_name;//$sub2_name=strtoupper($sub2_name);
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
$sub3_name=$_GET['sub3_name'];//echo $sub3_name;
$sub4_name=$_GET['sub4_name'];//echo $sub4_name;
$sub1_fm=$sub1_th_fm+$sub1_pr_fm;
$sub3_fm=$sub3_th_fm+$sub3_pr_fm;
$sub4_fm=$sub4_th_fm+$sub4_pr_fm;
$sub1_total_om=$sub1_th_om+$sub1_pr_om;
$sub2_total_om=$sub2_th_om+$sub2_pr_om;
$sub3_total_om=$sub3_th_om+$sub3_pr_om;
$sub4_total_om=$sub4_th_om+$sub4_pr_om;
$lang2_name=$_GET['lang2_name'];
$lang2_th_fm=$_GET['lang2_th_fm'];
$lang2_pr_fm=$_GET['lang2_pr_fm'];
$lang2_th_om=$_GET['lang2_th_om'];
$lang2_pr_om=$_GET['lang2_pr_om'];
$address=mysqli_real_escape_string($conn,$_GET['address']);
$gender= $_GET['gender'];
$lang1_om=$lang1_th_om+$lang1_pr_om;
$lang2_om=$lang2_th_om+$lang2_pr_om;
$lang1_fm=$lang1_th_fm+$lang1_pr_fm;
$lang2_fm=$lang2_th_fm+$lang2_pr_fm;
$pin=$_GET['pin'];
$pv_y  =$_GET['pv_y'];
$pv_class =$_GET['pv_class'];
$pv_roll =$_GET['pv_roll'];
$pv_regn =$_GET['pv_regn'];


$stream=strtolower($_GET['stream']);
//echo $stream;           $sub1_th_fm,$sub1_pr_fm,$sub1_th_om,$sub1_pr_om;




//Getting iformation about application
$apply_hons=$_GET["apply_hons"];
$apply_gen=isset($_GET["apply_gen"]);




//GEtting infor mation of hons 
$hons=$_GET['hons'];
$hons_side_sub1=$_GET['sub1'];//Subjects with hons 
$hons_side_sub2=$_GET['sub2'];
$hons_side_sub3=$_GET['sub3'];
$hons_side_sub4=$_GET['sub4'];
//$session=$_GET['session'];//print $session;
$tran_id=$_GET['tran_id'];
$tran_date=$_GET['tran_date'];


//GETTING GENERAL STREAM INFROMATION
$general_subject=$_GET['GeneralSub'];//Holds the array of all general subject's
$general_stream=$_GET['general-stream'];
$gtran_id=$_GET['gtran_id'];
$gtran_date=$_GET['gtran_date'];
$count_general=count($general_subject);//count number of general subject 

/*/echo $sub1_name;
echo $sub4_name;
echo $sub3_name;
echo $sub2_name;*/

//-------------

$sub1_name=strtolower($sub1_name);
$sub2_name=strtolower($sub2_name);
$sub3_name=strtolower($sub3_name);
$sub4_name=strtolower($sub4_name);
$lang1_name=strtolower($lang1_name);
$lang2_name=strtolower($lang2_name);
//Inside for loop


$sub_list=array($sub1_name=>$sub1_total_om,$sub2_name=>$sub2_total_om,$sub3_name=>$sub3_total_om,$sub4_name=>$sub4_total_om,$lang1_name=>$lang1_om,$lang2_name=>$lang2_om);

//var_dump($sub_list);
$arts_hons=array("hindi" , "bengali", "english", "history", "political science", "philosophy", "sanskrit" );
$science_hons=array("physics" , "chemistry" , "mathematics" , "zoology" , "botany" , "geography(science)" , "geography(arts)","geography" );
$com_hons=array("accountancy","economics","economics(science)","economics(arts)");
//echo print_r($arts_hons);
//echo "<br>";
$only_sub_list=array($sub1_name,$sub2_name,$sub3_name,$sub4_name);

$arts=array("geography","history","polscience","education","nutrition","sociology","political science","geology","psychology" ,"philosophy","music");

//echo "point 01<br>";

$sql="select * from auth where student_id <=>'$student_id'";
$result = mysqli_query($conn,$sql);
if (!$result) {
	die("No result 1" . mysqli_error($conn));
}
$row = @mysqli_fetch_array($result);
$name_of_student=$row['name_of_student'];
$mob=$row['mobile_no'];
$examination=$row['examination'];
$board=$row['board'];
$roll_no =$row['roll_no'];
$year_of_passing=$row['year_of_passing'];





//$phd=$_GET['phd'];

//$yop=$row['yop'];
//$board=$row['board'];

//$style = file_get_contentsInside for loop('style.css');
//$jornal = $_GET['jornal'];

$filename=$student_id.".pdf";


//*/Inside for loop

$style = file_get_contents('style.css');
$style2=file_get_contents('marks_table.css');




//echo "point 02 before insert in main<br>";


//Insert in Main
$sql2="REPLACE INTO `main`(`f_name`, `f_occu`, `f_edu`, `f_income`, `m_name`, `m_occu`, `m_edu`, `m_income`, `category`, `ph`, `minority`, `nationality`, `religion`, `dob`, `blood_gr`, `sport_quota`, `name_of_last_school`, `bpl`, `extra_caricular`, `game_sport`, `lg`, `addr_lg`, `rail_bus`, `scholar`,`previous_add`, `lang1_name`, `lang1_fm`, `lang1_om`, `sub1_name`, `sub1_th_fm`, `sub1_th_om`, `sub1_pr_fm`, `sub1_pr_om`, `sub2_name`, `sub2_th_fm`, `sub2_th_om`, `sub2_pr_fm`, `sub2_pr_om`, `sub2_fm`, `sub3_fm`, `sub4_fm`, `sub3_th_om`, `sub4_th_om`, `sub3_th_fm`, `sub4_th_fm`, `sub3_pr_fm`, `sub4_pr_fm`, `sub3_pr_om`, `sub4_pr_om`, `sub3_name`, `sub4_name`, `sub1_fm`, `sub1_total_om`, `sub2_total_om`, `sub3_total_om`, `sub4_total_om`, `lang2_name`, `lang2_fm`, `lang2_om`, `student_id`, `address`,`gender`,`pin`,`pv_y`,`pv_class`,`pv_roll`,`pv_regn`,`scholar_detail`,`stream`) VALUES ('$f_name','$f_occu','$f_edu','$f_income','$m_name','$m_occu','$m_edu','$m_income','$category','$ph','$minority','$nationality','$religion','$dob','$blood_gr','$sport_quota','$name_of_last_school','$bpl','$extra_caricular','$game_sport','$lg','$addr_lg','$rail_bus','$scholar','$previous_add','$lang1_name','$lang1_fm','$lang1_om','$sub1_name','$sub1_th_fm','$sub1_th_om','$sub1_pr_fm','$sub1_pr_om','$sub2_name','$sub2_th_fm','$sub2_th_om','$sub2_pr_fm','$sub2_pr_om','$sub2_fm','$sub3_fm','$sub4_fm','$sub3_th_om','$sub4_th_om','$sub3_th_fm','$sub4_th_fm','$sub3_pr_fm','$sub4_pr_fm','$sub3_pr_om','$sub4_pr_om','$sub3_name','$sub4_name','$sub1_fm','$sub1_total_om','$sub2_total_om','$sub3_total_om','$sub4_total_om','$lang2_name','$lang2_fm','$lang2_om','$student_id','$address','$gender','$pin','$pv_y','$pv_class','$pv_roll','$pv_regn','$scholar_detail','$stream')";
//echo $sql2;

$result2 = mysqli_query($conn,$sql2);
if (!$result2) {
	die("No result 2 " . mysqli_error($conn));
}


//FINDING HONSS SUBJECT AND CORRESPONDING MP AND AGGR FOR EACH VALLU OF HONS ARRAY


$no_of_related=count($hons);
#ECHO $no_of_related;
#print_r($hons);echo '<br/>';
#print_r($sub_list);echo '<br/>';
#print_r($session);echo '<br/>';
#echo $sub_list[$hons[0]];
#echo array_key_exists($hons[0],$sub_list);
#echo "before for";
//store meritepoint
$merit=array();
$gmerit=array();
$hmerit=array();
//echo "after insert before aggr &mp 03 <br>";

//$aggr=aggr($sub1_total_om,$sub2_total_om,$sub3_total_om,$sub4_total_om,$lang1_om,$lang2_om);
//$aggr_arts=aggr_toarts($lang1_om,$lang2_om,$sub1_th_fm,$sub1_pr_fm,$sub1_th_om,$sub1_pr_om,$sub2_th_fm,$sub2_pr_fm,$sub2_th_om,$sub2_pr_om,$sub3_th_fm,$sub3_pr_fm,$sub3_th_om,$sub3_pr_om,$sub4_th_fm,$sub4_pr_fm,$sub4_th_om,$sub4_pr_om);
$maxnum_sub=highmarks($sub_list,$only_sub_list);
//echo $maxnum_sub;

/* Uncomment for serial no  In pdf */
$sql = "SELECT serial_no FROM `student_tran` WHERE serial_no in(Select max(serial_no) from student_tran)";
$result = mysqli_query($conn,$sql);
$row = @mysqli_fetch_array($result);
$last_serial=$row['serial_no'];


if($apply_hons=='yes'){



for($i=0;$i < $no_of_related; $i++)  //Merite point calculation for hons stars here
{
 $aggr=aggr($sub1_total_om,$sub2_total_om,$sub3_total_om,$sub4_total_om,$lang1_om,$lang2_om);
 //echo "<br>Return from science aggr".$aggr."<br>";
 //echo "$aggr_arts=aggr_toarts($lang1_om,$lang2_om,$sub1_th_fm,$sub1_th_om,$sub2_th_fm,$sub2_th_om,$sub3_th_fm,$sub3_th_om,$sub4_th_fm,$sub4_th_om)";
  //$aggr_arts=aggr_toarts($lang1_om,$lang2_om,$sub1_th_fm,$sub1_th_om,$sub2_th_fm,$sub2_th_om,$sub3_th_fm,$sub3_th_om,$sub4_th_fm,$sub4_th_om);

 //echo "<br>return from artsaggr".$aggr_arts."<br>";
	
	
	
	#echo "Inside for loop";
	//echo "point Forloop in the loop hons <br>";

$hons[$i]=strtolower($hons[$i]);
$related=array();
//$aggr=aggr($sub1_total_om,$sub2_total_om,$sub3_total_om,$sub4_total_om,$lang1_om,$lang2_om);
//$aggr_scToarts=exat_aggr_scince_commerceToarts($lan1,$lan2, $sub1_th_fm,$sub1_pr_fm,$sub1_th_om,$sub1_pr_om,$sub2_th_fm,$sub2_pr_fm,$sub2_th_om,$sub2_pr_om,$sub3_th_fm,$sub3_pr_fm,$sub3_th_om,$sub3_pr_om,$sub4_th_fm,$sub4_pr_fm,$sub4_th_om,$sub4_pr_om);

if(in_array($hons[$i],$arts_hons))
{  
   $mp=merit_arts($hons[$i],$arts_hons,$aggr,$only_sub_list,$lang1_om,$lang2_om,$merit,$stream,$sub_list,$arts,$history_relatedSubject, $philosophy_relatedSubject ,$political_science_relatedSubject);
}
//FOR HONS IN SCIENCE SUBJECT
if(in_array($hons[$i],$science_hons))
{
$mp=merit_science($hons[$i],$science_hons,$sub_list,$aggr,$merit);
 }
 
//FOR HONS IN COMMERCE  
//echo "before com hons";
if(in_array($hons[$i],$com_hons))
{//echo "inside com honshear";

//echo "merit_commerce($hons[$i],$com_hons,$aggr,$sub_list,$maxnum_sub,$merit)";

	$mp=merit_commerce($hons[$i],$com_hons,$aggr,$sub_list,$maxnum_sub,$merit,$stream);
//echo "marit ".$mp	;
}


//echo "point 05 in the loop hons <br>";


$hons_minor=array($hons_side_sub1[$i],$hons_side_sub2[$i],$hons_side_sub3[$i],$hons_side_sub4[$i]);
$minor=hons2minor($hons_minor);
//echo "hi".$minor[0];
//echo $minor[1];
$k=generateRandomString();
$hons_name=strtolower($hons[$i]);
$date_i=date("Y-m-d",strtotime($tran_date[$i]));
array_push($hmerit,$mp);
if($hons_name=="geography(science)"||$hons_name=="geography(arts)")
{$hons_name="geography";
	}
if($hons_name=="economics(science)"||$hons_name=="economics(arts)")
{$hons_name="economics";
	}
	/*
if(in_array($hons[$i],$arts_hons))
{
 $aggr=aggr_toarts($lang1_om,$lang2_om,$sub1_th_fm,$sub1_th_om,$sub2_th_fm,$sub2_th_om,$sub3_th_fm,$sub3_th_om,$sub4_th_fm,$sub4_th_om);

}*/
$sqlh1="INSERT INTO `kgpcollege`.`".$hons_name."_honours` (`student_id`, `aggregate`, `merit_point`,`student_name`,`board`,`category`,`ph`,`subject_id`) VALUES ('$student_id','$aggr','$mp','$name_of_student','$board','$category','$ph','$k')";
$sqlh2="insert into student_tran(`student_id`,`subject_id`,`stran_id`,`stran_date`)values('$student_id','$k','$tran_id[$i]','$date_i')";
$sqlh3="insert into `hons_subject`(`student_id`,`subject_id`,`hons_name`,`sub1`,`sub2`) values('$student_id','$k','$hons[$i]','$minor[$n]','$minor[$m]')";	

#echo $sql3;
$resulth1 = mysqli_query($conn,$sqlh1);

if (!$resulth1) {
	die("No result h1" . mysqli_error($conn));
}

$resulth2 = mysqli_query($conn,$sqlh2);

if (!$resulth2) {
	die("No result h2" . mysqli_error($conn));
}

$resulth3 = mysqli_query($conn,$sqlh3);

if (!$resulth3) {
	die("No result h3" . mysqli_error($conn));
}



}
}

if($apply_gen=='yes')
{
//echo "point 06 BEfore Calculating GENERAL SUBJECT <br>";


//insert General subject information in table and insert bank-transactrion in corresponding table



for($i=0;$i<$count_general;$i++)
{

   if(checkPassMark($sub_list)) {
       $aggr = aggr($sub1_total_om, $sub2_total_om, $sub3_total_om, $sub4_total_om, $lang1_om, $lang2_om);
   }
   else{
       $aggr=0;
   }//$aggr_arts=aggr_toarts($lang1_om,$lang2_om,$sub1_th_fm,$sub1_th_om,$sub2_th_fm,$sub2_th_om,$sub3_th_fm,$sub3_th_om,$sub4_th_fm,$sub4_th_om);
$k=generateRandomString();
$general_stream_name=strtolower($general_stream[$i]);
//$general_stream_name=strtolower($general_stream[$i]);
//echo $general_stream_name;

//if($general_stream_name == "b.a. general(day shift)"||$general_stream_name=="b.a. general(morning shift)")
//{$aggr=$aggr_arts;
	//}
		
array_push($gmerit,$aggr);
$sql4="insert into `general_subject`(`student_id`,`subject_id`,`stream`,`subject_name`) values('$student_id','$k','$general_stream[$i]','$general_subject[$i]')";	
$sql5="insert into `$general_stream_name`(`student_id`,`subject_id`,`name`,`board`,`category`,`aggr`)values('$student_id','$k','$name_of_student','$board','$category','$aggr')";	
//echo $sql5;
$gdate_i=date("Y-m-d",strtotime($gtran_date[$i]));
$sql6="insert into student_tran(`student_id`,`subject_id`,`stran_id`,`stran_date`)values('$student_id','$k','$gtran_id[$i]','$gdate_i')";
	
//echo $sql6;	
$result4 = mysqli_query($conn,$sql4);

if (!$result4) {
	die("No result 3" . mysqli_error($conn));
}	
$result5 = mysqli_query($conn,$sql5);

if (!$result5) {
	die("No result 5" . mysqli_error($conn));
}	
$result6 = mysqli_query($conn,$sql6);

if (!$result6) {
	die("No result 6" . mysqli_error($conn));

}	
	
$gdate_i = date_format(date_create_from_format('Y-m-d', $gdate_i), 'd-m-Y');
	
	
}

}

//echo "point 07 exit gen gen <br>";
$imagename="image_place_holder.png";//Path of pdf place holder



$dob = date_format(date_create_from_format('Y-m-d', $dob), 'd-m-Y');
$aggr=aggr($sub1_total_om,$sub2_total_om,$sub3_total_om,$sub4_total_om,$lang1_om,$lang2_om);

/*
$main_html='<!doctype html>
<html>
<head>

</head>
<body>
';
*/
$main_html='';

if($apply_hons=='yes'){
for($i=0;$i<$no_of_related;$i++){
//	$tran_date[$i] = date_format(date_create_from_format('Y-m-d', $tran_date[$i]), 'd-m-Y'));

$hons_minor=array($hons_side_sub1[$i],$hons_side_sub2[$i],$hons_side_sub3[$i],$hons_side_sub4[$i]);
$minor=hons2minor($hons_minor);
$html='
<table style="text-align: left; width: 100%;" border="0" cellpadding="0"
cellspacing="0">
<tbody>
<tr>
<td style="vertical-align: top; width: 211px;">
<h2><span style="font-size: 10px;">Form
No.&nbsp;'.($last_serial+1+$i).'</span></h2>
</td>
<td style="vertical-align: top; width: 686px; text-align: center;">
<h2>Kharagpur College</h2>
</td>
</tr>
<tr>
<td colspan="1" rowspan="2"
style="vertical-align: top; width: 211px;">
<h2><img style="width: 84px; height: 83px;" alt="" src="Logo.jpg"
align="left"></h2>
</td>
<td style="vertical-align: top; width: 686px; text-align: center;"><strong>ADMISSION
FORM</strong></td>
</tr>
<tr align="center">
<td style="vertical-align: top; width: 686px; text-align: center;"><strong>2015-2016</strong></td>
</tr>
</tbody>
</table>  

<p><strong>1 <sup>ST </sup>Year&nbsp;B.A./B.Sc./B.Com.</strong></p>

<p>HONOURS/GENERAL&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;DAY/MORNING/EVENING -SHIFT</p>
</div>

<table align="center" border="1" cellpadding="1" cellspacing="1" style="width: 700px;">
	<thead>
		<tr>
			<th colspan="5" scope="col">(For Office Use Only)</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td style="text-align: center;">Subject</td>
			<td style="text-align: center;">Docket No</td>
			<td style="text-align: center;">Merit Point</td>
			<td style="text-align: center;">Date of Admission</td>
			<td style="text-align: center;">College Roll No</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>'.$hmerit[$i].'</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
	</tbody>
</table>

<p>1. Name in Full : &nbsp;'.stripslashes($name_of_student).'</p>

<p>2. Date of Birth : &nbsp;'.$dob.'  &nbsp;3.Sex : &nbsp;'.$gender.' &nbsp; &nbsp;4. Blood Group :'.$blood_gr.'</p>

<p>5.a) Father&#39;s Name : '.stripslashes($f_name).'</p>

<p>&nbsp; &nbsp;b) Father&#39;s Education: &nbsp;'.stripslashes($f_edu).'&nbsp; c)Father&#39;s Occupation:&nbsp;'.stripcslashes($f_occu).'&nbsp; d)Monthly&nbsp;Income:&nbsp; Rs.'.stripcslashes($f_income).'</p>

<p>6.a) Mothers&#39;s Name :&nbsp;'.stripcslashes($m_name).'</p>

<p>&nbsp; &nbsp;b) Mothers&#39;s&nbsp;Education: &nbsp;'.stripslashes($m_edu).'&nbsp; c)Mothers&#39;s&nbsp;Occupation:&nbsp; '.stripslashes($m_occu).' &nbsp; d )Monthly&nbsp;Income:&nbsp; Rs.'.stripslashes($m_income).'</p>

<p>7. a)Address for Communication:&nbsp;'.stripslashes($address).'</p>

<p> &nbsp; &nbsp;PIN:- &nbsp; '.stripslashes($pin).' &nbsp; &nbsp;b)Telephone/Mobile No: &nbsp;'.stripslashes($mob).'</p>

<p>8. a) Nationality: &nbsp;'.stripslashes($nationality).' &nbsp; &nbsp; b) Religion:  &nbsp;'.stripslashes($religion).'</p>

<p>9. Caste :<span style="font-size:9px;">( Certificate issued by the competent authority should be enclosed for SC/ST/OBC)</span>.'.$category.'</p>

<p>
10. Whether admission sought in Physically Challenged / Sport&#39;sQuota <span style="font-size:9px;">(Relevant Certificates to be attached)</span>:.'.$ph.'</p>

<p>11. Name of the School last attended :'.stripslashes($name_of_last_school).'</p>

<p>12. Details of Marks Obtained in Last Examination :</p>

<p>&nbsp; &nbsp; &nbsp; a) Name of Exam: .&nbsp; &nbsp; '.stripslashes($examination).' &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;b)Name Of the Board/Council/Univ :&nbsp; &nbsp; '.stripslashes($board).'</p>

<p>&nbsp; &nbsp; &nbsp; c) Roll &nbsp;No.:&nbsp; &nbsp; '.stripslashes($roll_no).'Year Of Passing :&nbsp; &nbsp; '.stripslashes($year_of_passing).'</p>

<p>&nbsp; &nbsp; &nbsp; d) Marks Obtained:&nbsp;</p>

<table align="center" border="1" cellpadding="1" cellspacing="1" style="width: 700px;">
	<tbody>
		<tr>
			<td rowspan="2" style="text-align: center;">Subject</td>
			<td style="text-align: center;">Vernacular</td>
			<td rowspan="2" style="text-align: center;">English</td>
			<td colspan="2" rowspan="1" style="text-align: center;">'.$sub1_name.'</td>
			<td colspan="2" rowspan="1" style="text-align: center;">'.$sub2_name.'</td>
			<td colspan="2" rowspan="1" style="text-align: center;">'.$sub3_name.'</td>
			<td colspan="2" rowspan="1" style="text-align: center;">'.$sub4_name.'</td>
		    			<td rowspan="2" style="text-align: center;">Aggregate</td>

		</tr>
		<tr>
			<td style="text-align: center;">'.$lang1_name.'</td>
			<td style="text-align: center;">Th.</td>
			<td style="text-align: center;">Pr.</td>
			<td style="text-align: center;">Th.</td>
			<td style="text-align: center;">Pr.</td>
			<td style="text-align: center;">Th.</td>
			<td style="text-align: center;">Pr.</td>
			<td style="text-align: center;">Th.</td>
			<td style="text-align: center;">Pr.</td>
		</tr>
		<tr>
			<td style="text-align: center;">Full Marks</td>
			<td style="text-align: center;">'.$lang1_fm.'</td>
			<td style="text-align: center;">'.$lang2_fm.'</td>
			<td style="text-align: center;">'.$sub1_th_fm.'</td>
			<td style="text-align: center;">'.$sub1_pr_fm.'</td>
			<td style="text-align: center;">'.$sub2_th_fm.'</td>
			<td style="text-align: center;">'.$sub2_pr_fm.'</td>
			<td style="text-align: center;">'.$sub3_th_fm.'</td>
			<td style="text-align: center;">'.$sub3_pr_fm.'</td>
			<td style="text-align: center;">'.$sub4_th_fm.'</td>
			<td style="text-align: center;">'.$sub4_pr_fm.'</td>
			<td colspan="1" rowspan="2" style="text-align: center;">'.$aggr.'</td>

		</tr>
		<tr>
			<td style="text-align: center;">Marks Obtained</td>
			<td style="text-align: center;">'.$lang1_om.'</td>
			<td style="text-align: center;">'.$lang2_om.'</td>
			<td style="text-align: center;">'.$sub1_th_om.'</td>
			<td style="text-align: center;">'.$sub1_pr_om.'</td>
			<td style="text-align: center;">'.$sub2_th_om.'</td>
			<td style="text-align: center;">'.$sub2_pr_om.'</td>
			<td style="text-align: center;">'.$sub3_th_om.'</td>
			<td style="text-align: center;">'.$sub3_pr_om.'</td>
			<td style="text-align: center;">'.$sub4_th_om.'</td>
			<td style="text-align: center;">'.$sub4_pr_om.'</td>
		</tr>
	</tbody>
</table>

<p>13. Subjects Applied For:</p>



<table align="center" border="1" cellpadding="1" cellspacing="1" style="width: 500px;">
	<tbody>
		<tr>
			<td>&nbsp;Honours</td>
			<td>Subjects Taken</td>
			<td colspan="3" rowspan="1">Compulsory</td>
		</tr>
		<tr>
			<td>'.$hons[$i].'</td>
			<td>'.$minor[$n].','.$minor[$m].'</td>
			<td>ENGC</td>
			<td>BNGMor HINM</td>
			<td>ENVS</td>
		</tr>
	</tbody>
</table>



<p>14 . Bank Transaction No/Journal No/Id-&nbsp;&nbsp;'.$tran_id[$i].'&nbsp;&nbsp;b)Transaction Date-&nbsp;&nbsp;'.$tran_date[$i].'</p>

<p style="text-align: right;">Full Signature of the Candidate with date</p>

<div style="page-break-after: always"><span style="display: none;">&nbsp;</span></div>

<p>15. Whether belongs to BPL Family:&nbsp;&nbsp;'.$bpl.' &nbsp; &nbsp;<span style="font-size:9px;">(Attested copy of BPL card should be enclosed)</span></p>

<p>16. Extra Curricular Activities : &nbsp;&nbsp;'.stripslashes($extra_caricular).'</p>

<p>17.Game &amp; Sports with Level :&nbsp;&nbsp;'.stripslashes($sport_quota).'</p>

<p>18.Name of Local Guardian :&nbsp;&nbsp;'.stripslashes($lg).'</p>

<p>19.Address of Local Guardian :&nbsp;&nbsp;'.stripslashes($addr_lg).'</p>

<p>20. Whether receive any Scholarship /Financial Assistance (if yes,give details):&nbsp;&nbsp;'.stripslashes($scholar_detail).'</p>

<p>21. If you previously admitted in this College, state :</p>

<p>&nbsp;Year :&nbsp;&nbsp;'.$pv_y.'&nbsp;Class:&nbsp;&nbsp; '.$pv_class.'&nbsp;Roll: '.$pv_roll.'&nbsp; University Regn. No. with year: &nbsp;'.$pv_regn.'</p>

<p style="text-align: center;"><span style="color:#FFFFFF;"><strong><span style="background-color:#000000;">GUARDIAN&#39;S DECLARATION</span></strong></span></p>

<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;I hereby undertake to defray all educational expenses of my Son /Daughter/ Ward &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Sri/Smt./Kumari '.stripslashes($name_of_student).'and promice that he /she shall abide by college regulations and discipline in force or that may be in force time to time .</p>

<p style="text-align: justify;">&nbsp;</p>

<p>Date:&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Full Signature of the&nbsp;Guardian</p>

<p>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span style="color:#FFFFFF;"><strong><span style="background-color:#000000;">DECLARATION BY CANDIDATE</span></strong></span></p>

<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; I hereby declare that I shall abide by all the Rules &amp; Regulations of the College &nbsp;and Vidyasagar University. I also declare that &nbsp;I shall have no objection if I am debarred from filling up the form for University Examination, for failing to secure at least 75% class attendance as per V.U. Circular No. VU/IC/CIR/108/97-98 dated 17 July 1997.</p>

<p>Date . &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Full Signature of the Candidate &nbsp;</p>

<p><br/><br/><br/><br/><br/><br/><br/></p>
<table align="center" border="1" cellpadding="1" cellspacing="1" style="width: 500px;">
	<tbody>
		<tr>
			<td>
			<p>Remarks&nbsp;</p>
			</td>
			<td colspan="2">
			<p>May be admitted</p>
			</td>
		</tr>
		<tr>
			<td>
			<p>&nbsp;</p>
			</td>
			<td>
			<p>Dealing Staff Admission Counter&nbsp;</p>

			<p>Kharagpur College</p>
			</td>
			<td>
			<p>Principal /Teacher in Charge</p>

			<p>Kharagpur College</p>
			</td>
		</tr>
	</tbody>
</table>
<pagebreak>
';

$main_html=$main_html.$html;
}

}

if($apply_gen=='yes')
{
	
	for($i=0;$i<$count_general;$i++){
	//	$gtran_date[$i] = date_format(date_create_from_format('Y-m-d', $gtran_date[$i]), 'd-m-Y'));

$html='
<div>
<table style="text-align: left; width: 100%;" border="0" cellpadding="0"
cellspacing="0">
<tbody>
<tr>
<td style="vertical-align: top; width: 211px;">
<h2><span style="font-size: 10px;">Form
No.&nbsp;'.($last_serial+1+$i+$no_of_related).'</span></h2>
</td>
<td style="vertical-align: top; width: 686px; text-align: center;">
<h2>Kharagpur College</h2>
</td>
</tr>
<tr>
<td colspan="1" rowspan="2"
style="vertical-align: top; width: 211px;">
<h2><img style="width: 84px; height: 83px;" alt="" src="Logo.jpg"
align="left"></h2>
</td>
<td style="vertical-align: top; width: 686px; text-align: center;"><strong>ADMISSION
FORM</strong></td>
</tr>
<tr align="center">
<td style="vertical-align: top; width: 686px; text-align: center;"><strong>2015-2016</strong></td>
</tr>
</tbody>
</table> 


<p><strong>1 <sup>ST </sup>Year&nbsp;B.A./B.Sc./B.Com.</strong></p>

<p>HONOURS/GENERAL&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;DAY/MORNING/EVENING -SHIFT</p>
</div>

<table align="center" border="1" cellpadding="1" cellspacing="1" style="width: 700px;">
	<thead>
		<tr>
			<th colspan="5" scope="col">(For Office Use Only)</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td style="text-align: center;">Subject</td>
			<td style="text-align: center;">Docket No</td>
			<td style="text-align: center;">Merit Point</td>
			<td style="text-align: center;">Date of Admission</td>
			<td style="text-align: center;">College Roll No</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>'.$gmerit[$i].'</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
	</tbody>
</table>

<p>1. Name in Full : &nbsp;'.stripslashes($name_of_student).'</p>

<p>2. Date of Birth : &nbsp;'.$dob.'  &nbsp;3.Sex : &nbsp;'.$gender.' &nbsp; &nbsp;4. Blood Group :'.$blood_gr.'</p>

<p>5.a) Father&#39;s Name : '.stripslashes($f_name).'</p>

<p>&nbsp; &nbsp;b) Father&#39;s Education: &nbsp;'.stripslashes($f_edu).'&nbsp; c)Father&#39;s Occupation:&nbsp;'.stripcslashes($f_occu).'&nbsp; d)Monthly&nbsp;Income:&nbsp; Rs.'.stripcslashes($f_income).'</p>

<p>6.a) Mothers&#39;s Name :&nbsp;'.stripcslashes($m_name).'</p>

<p>&nbsp; &nbsp;b) Mothers&#39;s&nbsp;Education: &nbsp;'.stripslashes($m_edu).'&nbsp; c)Mothers&#39;s&nbsp;Occupation:&nbsp; '.stripslashes($m_occu).' &nbsp; d )Monthly&nbsp;Income:&nbsp; Rs.'.stripslashes($m_income).'</p>

<p>7. a)Address for Communication:&nbsp;'.stripslashes($address).'</p>

<p> &nbsp; &nbsp;PIN:- &nbsp; '.stripslashes($pin).' &nbsp; &nbsp;b)Telephone/Mobile No: &nbsp;'.stripslashes($mob).'</p>

<p>8. a) Nationality: &nbsp;'.stripslashes($nationality).' &nbsp; &nbsp; b) Religion:  &nbsp;'.stripslashes($religion).'</p>

<p>9. Caste :<span style="font-size:9px;">( Certificate issued by the competent authority should be enclosed for SC/ST/OBC)</span>.'.$category.'</p>

<p>
10. Whether admission sought in Physically Challenged / Sport&#39;sQuota <span style="font-size:9px;">(Relevant Certificates to be attached)</span>:.'.$ph.'</p>

<p>11. Name of the School last attended :'.stripslashes($name_of_last_school).'</p>

<p>12. Details of Marks Obtained in Last Examination :</p>

<p>&nbsp; &nbsp; &nbsp; a) Name of Exam: .&nbsp; &nbsp; '.stripslashes($examination).' &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;b)Name Of the Board/Council/Univ :&nbsp; &nbsp; '.stripslashes($board).'</p>

<p>&nbsp; &nbsp; &nbsp; c) Roll &nbsp;No.:&nbsp; &nbsp; '.stripslashes($roll_no).'Year Of Passing :&nbsp; &nbsp; '.stripslashes($year_of_passing).'</p>

<p>&nbsp; &nbsp; &nbsp; d) Marks Obtained:&nbsp;</p>

<table align="center" border="1" cellpadding="1" cellspacing="1" style="width: 700px;">
	<tbody>
		<tr>
			<td rowspan="2" style="text-align: center;">Subject</td>
			<td style="text-align: center;">Vernacular</td>
			<td rowspan="2" style="text-align: center;">English</td>
			<td colspan="2" rowspan="1" style="text-align: center;">'.$sub1_name.'</td>
			<td colspan="2" rowspan="1" style="text-align: center;">'.$sub2_name.'</td>
			<td colspan="2" rowspan="1" style="text-align: center;">'.$sub3_name.'</td>
			<td colspan="2" rowspan="1" style="text-align: center;">'.$sub4_name.'</td>
		    			<td rowspan="2" style="text-align: center;">Aggregate</td>

		</tr>
		<tr>
			<td style="text-align: center;">'.$lang1_name.'</td>
			<td style="text-align: center;">Th.</td>
			<td style="text-align: center;">Pr.</td>
			<td style="text-align: center;">Th.</td>
			<td style="text-align: center;">Pr.</td>
			<td style="text-align: center;">Th.</td>
			<td style="text-align: center;">Pr.</td>
			<td style="text-align: center;">Th.</td>
			<td style="text-align: center;">Pr.</td>
		</tr>
		<tr>
			<td style="text-align: center;">Full Marks</td>
			<td style="text-align: center;">'.$lang1_fm.'</td>
			<td style="text-align: center;">'.$lang2_fm.'</td>
			<td style="text-align: center;">'.$sub1_th_fm.'</td>
			<td style="text-align: center;">'.$sub1_pr_fm.'</td>
			<td style="text-align: center;">'.$sub2_th_fm.'</td>
			<td style="text-align: center;">'.$sub2_pr_fm.'</td>
			<td style="text-align: center;">'.$sub3_th_fm.'</td>
			<td style="text-align: center;">'.$sub3_pr_fm.'</td>
			<td style="text-align: center;">'.$sub4_th_fm.'</td>
			<td style="text-align: center;">'.$sub4_pr_fm.'</td>
			<td colspan="1" rowspan="2" style="text-align: center;">'.$aggr.'</td>

		</tr>
		<tr>
			<td style="text-align: center;">Marks Obtained</td>
			<td style="text-align: center;">'.$lang1_om.'</td>
			<td style="text-align: center;">'.$lang2_om.'</td>
			<td style="text-align: center;">'.$sub1_th_om.'</td>
			<td style="text-align: center;">'.$sub1_pr_om.'</td>
			<td style="text-align: center;">'.$sub2_th_om.'</td>
			<td style="text-align: center;">'.$sub2_pr_om.'</td>
			<td style="text-align: center;">'.$sub3_th_om.'</td>
			<td style="text-align: center;">'.$sub3_pr_om.'</td>
			<td style="text-align: center;">'.$sub4_th_om.'</td>
			<td style="text-align: center;">'.$sub4_pr_om.'</td>
		</tr>
	</tbody>
</table>

<p>13. Subjects Applied For:</p>



<table align="center" border="1" cellpadding="1" cellspacing="1" style="width: 500px;">
	<tbody>
		<tr>
			<td>&nbsp;General</td>
			<td>Subjects Taken</td>
			<td colspan="3" rowspan="1">Compulsory</td>
		</tr>
		<tr>
			<td>'.$general_stream[$i].'</td>
			<td>'.$general_subject[$i].'</td>
			<td>ENGC</td>
			<td>BNGMor HINM</td>
			<td>ENVS</td>
		</tr>
	</tbody>
</table>




<p>14 . Bank Transaction No/Journal No/Id-&nbsp;&nbsp;'.$tran_id[$i].'&nbsp;&nbsp;b)Transaction Date-&nbsp;&nbsp;'.$tran_date[$i].'</p>

<p style="text-align: right;">Full Signature of the Candidate with date</p>

<div style="page-break-after: always"><span style="display: none;">&nbsp;</span></div>

<p>15. Whether belongs to BPL Family:&nbsp;&nbsp;'.$bpl.' &nbsp; &nbsp;<span style="font-size:9px;">(Attested copy of BPL card should be enclosed)</span></p>

<p>16. Extra Curricular Activities : &nbsp;&nbsp;'.stripslashes($extra_caricular).'</p>

<p>17.Game &amp; Sports with Level :&nbsp;&nbsp;'.stripslashes($sport_quota).'</p>

<p>18.Name of Local Guardian :&nbsp;&nbsp;'.stripslashes($lg).'</p>

<p>19.Address of Local Guardian :&nbsp;&nbsp;'.stripslashes($addr_lg).'</p>

<p>20. Whether receive any Scholarship /Financial Assistance (if yes,give details):&nbsp;&nbsp;'.stripslashes($scholar_detail).'</p>

<p>21. If you previously admitted in this College, state :</p>

<p>&nbsp;Year :&nbsp;&nbsp;'.$pv_y.'&nbsp;Class:&nbsp;&nbsp; '.$pv_class.'&nbsp;Roll: '.$pv_roll.'&nbsp; University Regn. No. with year: &nbsp;'.$pv_regn.'</p>

<p style="text-align: center;"><span style="color:#FFFFFF;"><strong><span style="background-color:#000000;">GUARDIAN&#39;S DECLARATION</span></strong></span></p>

<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;I hereby undertake to defray all educational expenses of my Son /Daughter/ Ward &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Sri/Smt./Kumari '.stripslashes($name_of_student).'&nbsp; and promise that he /she shall abide by college regulations and discipline in force or that may be in force time to time .</p>

<p style="text-align: justify;">&nbsp;</p>

<p>Date:&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Full Signature of the&nbsp;Guardian</p>

<p>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span style="color:#FFFFFF;"><strong><span style="background-color:#000000;">DECLARATION BY CANDIDATE</span></strong></span></p>

<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; I hereby declare that I shall abide by all the Rules &amp; Regulations of the College &nbsp;and Vidyasagar University. I also declare that &nbsp;I shall have no objection if I am debarred from filling up the form for University Examination, for failing to secure at least 75% class attendance as per V.U. Circular No. VU/IC/CIR/108/97-98 dated 17 July 1997.</p>

<p>Date . &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Full Signature of the Candidate &nbsp;</p>

<p><br/><br/><br/><br/><br/><br/><br/></p>
<table align="center" border="1" cellpadding="1" cellspacing="1" style="width: 500px;">
	<tbody>
		<tr>
			<td>
			<p>Remarks&nbsp;</p>
			</td>
			<td colspan="2">
			<p>May be admitted</p>
			</td>
		</tr>
		<tr>
			<td>
			<p>&nbsp;</p>
			</td>
			<td>
			<p>Dealing Staff Admission Counter&nbsp;</p>

			<p>Kharagpur College</p>
			</td>
			<td>
			<p>Principal /Teacher in Charge</p>

			<p>Kharagpur College</p>
			</td>
		</tr>
	</tbody>

</table><pagebreak>
';



$main_html=$main_html.$html;
}
		
}




//$end_string='</body></html>';
//$main_html=$main_html.$end_string;



$save=mysqli_real_escape_string($conn,$main_html);
$pdf_sql="replace into `pdf` (`student_id`,`pdf_string`)values('$student_id','$save')";
$result13 = mysqli_query($conn,$pdf_sql);

if (!$result13) {
	die("No result 13" . mysqli_error($conn));
}

$updateflag="update auth set `flag`='yes' where `student_id`='$student_id'";
//echo $updateflag;
	$result14 = mysqli_query($conn,$updateflag);

if (!$result14) {
	die("No result 14" . mysqli_error($conn));

	}
//echo $main_html;

//echo $html;
 //$html=urlencode ( $html );
//header("Location:after_submit.php?html=$html");
/*
include('mpdf/mpdf.php');
$mpdf= new mPDF();
//$mpdf=new mPDF('win-1252','A4','','',20,15,48,25,10,10); 
$mpdf = new mPDF('', 'Legal', 0, '', 12.7, 12.7, 14, 12.7, 8, 8);
//$mpdf->useOnlyCoreFonts = true;    // false is default
//$mpdf->SetProtection(array('print'));
$mpdf->SetTitle("Application");
$mpdf->use_kwt = true;
$mpdf->shrink_tables_to_fit;
//$mpdf->SetAuthor("..........");
//$mpdf->SetWatermarkText("Submitted");
//$mpdf->showWatermarkText = false;
//$mpdf->watermark_font = 'DejaVuSansCondensed';
//$mpdf->watermarkTextAlpha = 0.1;




$mpdf->SetDisplayMode('fullpage');
//$mpdf->SetHeader('Referenceno-{DATE jmYmmsshh}{PAGENO}');
//$mpdf->SetFooter('|{PAGENO}|');

//$mpdf->WriteHTML($style,1);
//$mpdf->WriteHTML($style2,1);
$mpdf->WriteHTML($main_html);
//$mpdf->WriteHTML('hi');


//$mpdf->Output($filename,'F');//for saving in current directory fource fully  for letter use 
//$mpdf->Output($filename,'D');//downlode in browser
//echo $html;
$mpdf->Output();
//For direct out put in browser
//echo "jjjjjj";
/*echo $html;
$link="<script type=\"text/javascript\">
'''window.location.href=\"firstpage.html\";'''
window.open('education.php','_self',false) 
</script>";
echo $link;

//header("Location:after_submit.php?merit[]=$merit&hons[]=$hons&session=$session");
//exit();
session_unset();
session_destroy();
//echo "Success Fully downloaded";
*/
?>
<html>
<body><a href="dlpdf.php">Click hear to download Pdf </a></body>
</html>




