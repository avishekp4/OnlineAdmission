<?php
 //Inialize session
if(!isset($_SESSION)){
   session_start();
} /*
// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['name'])) {
header('Location: firstpage.html');
}
$now = time(); // Checking the time now when home page starts.

        if ($now > $_SESSION['expire']) {
			session_unset(); 
            session_destroy();
            echo "Your session has expired! <a href='firstpage.html'>Start here</a>";
			exit();
        }
				*/
	function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}	
	
/*		
function aggr($num1,$num2,$num3,$num4,$lan1,$lan2)
{
   $min=min($num1,$num2,$num3,$num4);
 
   $best_of_3=$num1+$num2+$num3+$num4-$min;
   //$div=$best_of_3/4;
   $aggr=$lan2+$lan1+$best_of_3;
  return $aggr;
 
}	
     
function aggr_other($num1,$num2,$num3,$num4,$lan1,$lan2)
{
   $min=min($num1,$num2,$num3,$num4);
 
   $best_of_3=$num1+$num2+$num3+$num4-$min;
   $div=$best_of_3/4;
             $aggr=$lan2+$lan1+$div;
  return $aggr;
 
}	


function exat_aggr_scince_commerceToarts($lan1,$lan2,$num1_th_fm,$num1_pr_fm,$num1_obm_th,$num1_obm_pr,$num2_th_fm,$num2_pr_fm,$num2_obm_th,$num2_obm_pr,$num3_th_fm,$num3_pr_fm,$num3_obm_th,$num3_obm_pr,$num4_th_fm,$num4_pr_fm,$num4_obm_th,$num4_obm_pr)
{   
	if($num1_th_fm<100)
	 {
		$num1 = ($num1_obm_th*100)/$num1_th_fm;
     }
     else
    {
		$num1 = $num1_obm_th+$num1_obm_pr;     
	}
	
	if($num2_th_fm<100)
	 {
		$num2 = ($num2_obm_th*100)/$num2_th_fm;
     }
     else
    {
		$num2 = $num2_obm_th+$num2_obm_pr;     
	}
	
	if($num3_th_fm<100)
	 {
		$num3 = ($num3_obm_th*100)/$num3_th_fm;
     }
     else
    {
		$num3 = $num3_obm_th+$num3_obm_pr;     
	}
	
	if($num4_th_fm<100)
	 {
		$num4 = ($num4_obm_th*100)/$num4_th_fm;
     }
     else
    {
		$num4 = $num4_obm_th+$num4_obm_pr;     
	}
	
	
	$min=min($num1,$num2,$num3,$num4);//echo $min;
	$best_of_3=$num1+$num2+$num3+$num4-$min;//echo $best_of_3;
    $div=$best_of_3/4;
    $aggr=$lan2+$lan1+$div;
    return $aggr;
	
}
*/

include'connect.php';
include 'function.php';
$n=0;
$m=1;
$student_id=$_SESSION['name'];
//$student_id="jhjhj122";
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
$dob=date("Y-m-d",strtotime($_GET['dob']));//echo $dob;
 
$blood_gr=$_GET['blood_gr'];
$sport_quota=$_GET['sport_quota'];
$name_of_last_school=$_GET['name_of_last_school'];
$name_of_last_school=mysqli_real_escape_string($conn,$name_of_last_school);
$bpl=$_GET['bpl'];
$extra_caricular=$_GET['extra_caricular'];
$extra_caricular = mysqli_real_escape_string($conn, $extra_caricular);

$game_sport=$_GET['game_sport'];
$game_sport = mysqli_real_escape_string($conn, $game_sport);

$lg=$_GET['lg'];
$addr_lg=$_GET['addr_lg'];
$rail_bus=$_GET['rail_bus'];
$scholar=$_GET['scholar'];
//$hons=$_GET['hons'];//$hons=strtoupper($hons);
$sub1=$_GET['sub1'];
$sub2=$_GET['sub2'];
//$sub3=$_GET['sub2'];
$previous_add=$_GET['previous_add'];
$lang1_name=$_GET['lang1_name'];
$lang1_fm=$_GET['lang1_fm'];
$lang1_om=$_GET['lang1_om'];
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
$lang2_fm=$_GET['lang2_fm'];
$lang2_om=$_GET['lang2_om'];
$address=$_GET['address'];
$gender= $_GET['gender'];
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
	die("No result 1" . mysqli_error());
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
$sql2="REPLACE INTO `main`(`f_name`, `f_occu`, `f_edu`, `f_income`, `m_name`, `m_occu`, `m_edu`, `m_income`, `category`, `ph`, `minority`, `nationality`, `religion`, `dob`, `blood_gr`, `sport_quota`, `name_of_last_school`, `bpl`, `extra_caricular`, `game_sport`, `lg`, `addr_lg`, `rail_bus`, `scholar`,`previous_add`, `lang1_name`, `lang1_fm`, `lang1_om`, `sub1_name`, `sub1_th_fm`, `sub1_th_om`, `sub1_pr_fm`, `sub1_pr_om`, `sub2_name`, `sub2_th_fm`, `sub2_th_om`, `sub2_pr_fm`, `sub2_pr_om`, `sub2_fm`, `sub3_fm`, `sub4_fm`, `sub3_th_om`, `sub4_th_om`, `sub3_th_fm`, `sub4_th_fm`, `sub3_pr_fm`, `sub4_pr_fm`, `sub3_pr_om`, `sub4_pr_om`, `sub3_name`, `sub4_name`, `sub1_fm`, `sub1_total_om`, `sub2_total_om`, `sub3_total_om`, `sub4_total_om`, `lang2_name`, `lang2_fm`, `lang2_om`, `student_id`, `address`,`gender`) VALUES ('$f_name','$f_occu','$f_edu','$f_income','$m_name','$m_occu','$m_edu','$m_income','$category','$ph','$minority','$nationality','$religion','$dob','$blood_gr','$sport_quota','$name_of_last_school','$bpl','$extra_caricular','$game_sport','$lg','$addr_lg','$rail_bus','$scholar','$previous_add','$lang1_name','$lang1_fm','$lang1_om','$sub1_name','$sub1_th_fm','$sub1_th_om','$sub1_pr_fm','$sub1_pr_om','$sub2_name','$sub2_th_fm','$sub2_th_om','$sub2_pr_fm','$sub2_pr_om','$sub2_fm','$sub3_fm','$sub4_fm','$sub3_th_om','$sub4_th_om','$sub3_th_fm','$sub4_th_fm','$sub3_pr_fm','$sub4_pr_fm','$sub3_pr_om','$sub4_pr_om','$sub3_name','$sub4_name','$sub1_fm','$sub1_total_om','$sub2_total_om','$sub3_total_om','$sub4_total_om','$lang2_name','$lang2_fm','$lang2_om','$student_id','$address','$gender')";
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

//echo "after insert before aggr &mp 03 <br>";

//$aggr=aggr($sub1_total_om,$sub2_total_om,$sub3_total_om,$sub4_total_om,$lang1_om,$lang2_om);
//$aggr_arts=aggr_toarts($lang1_om,$lang2_om,$sub1_th_fm,$sub1_pr_fm,$sub1_th_om,$sub1_pr_om,$sub2_th_fm,$sub2_pr_fm,$sub2_th_om,$sub2_pr_om,$sub3_th_fm,$sub3_pr_fm,$sub3_th_om,$sub3_pr_om,$sub4_th_fm,$sub4_pr_fm,$sub4_th_om,$sub4_pr_om);
$maxnum_sub=highmarks($sub_list,$only_sub_list);
echo $maxnum_sub;

if($apply_hons=='yes'){



for($i=0;$i < $no_of_related; $i++)  //Merite point calculation for hons stars here
{
 $aggr=aggr($sub1_total_om,$sub2_total_om,$sub3_total_om,$sub4_total_om,$lang1_om,$lang2_om);
 //echo "<br>Return from science aggr".$aggr."<br>";
 //echo "$aggr_arts=aggr_toarts($lang1_om,$lang2_om,$sub1_th_fm,$sub1_th_om,$sub2_th_fm,$sub2_th_om,$sub3_th_fm,$sub3_th_om,$sub4_th_fm,$sub4_th_om)";
  $aggr_arts=aggr_toarts($lang1_om,$lang2_om,$sub1_th_fm,$sub1_th_om,$sub2_th_fm,$sub2_th_om,$sub3_th_fm,$sub3_th_om,$sub4_th_fm,$sub4_th_om);

 //echo "<br>return from artsaggr".$aggr_arts."<br>";
	
	
	
	#echo "Inside for loop";
	//echo "point Forloop in the loop hons <br>";

$hons[$i]=strtolower($hons[$i]);
$related=array();
//$aggr=aggr($sub1_total_om,$sub2_total_om,$sub3_total_om,$sub4_total_om,$lang1_om,$lang2_om);
//$aggr_scToarts=exat_aggr_scince_commerceToarts($lan1,$lan2, $sub1_th_fm,$sub1_pr_fm,$sub1_th_om,$sub1_pr_om,$sub2_th_fm,$sub2_pr_fm,$sub2_th_om,$sub2_pr_om,$sub3_th_fm,$sub3_pr_fm,$sub3_th_om,$sub3_pr_om,$sub4_th_fm,$sub4_pr_fm,$sub4_th_om,$sub4_pr_om);

if(in_array($hons[$i],$arts_hons))
{  
   $mp=merit_arts($hons[$i],$arts_hons,$aggr_arts,$only_sub_list,$lang1_om,$lang2_om,$merit,$stream,$sub_list,$arts);
}
//FOR HONS IN SCIENCE SUBJECT
if(in_array($hons[$i],$science_hons))
{
$mp=merit_science($hons[$i],$science_hons,$sub_list,$aggr,$merit);
 }
 
//FOR HONS IN COMMERCE  
if(in_array($hons[$i],$com_hons))
{ 
//echo "merit_commerce($hons,$com_hons,$aggr,$sub_list,$maxnum_sub,$merit);"

	$mp=merit_commerce($hons[$i],$com_hons,$aggr,$sub_list,$maxnum_sub,$merit);
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
if($hons_name=="geography(science)"||$hons_name=="geography(arts)")
{$hons_name="geography";
	}
if($hons_name=="economics(science)"||$hons_name=="economics(arts)")
{$hons_name="economics";
	}
if(in_array($hons[$i],$arts_hons))
{
 $aggr=aggr_toarts($lang1_om,$lang2_om,$sub1_th_fm,$sub1_th_om,$sub2_th_fm,$sub2_th_om,$sub3_th_fm,$sub3_th_om,$sub4_th_fm,$sub4_th_om);

}
$sqlh1="INSERT INTO `kgpcollege`.`".$hons_name."_honours` (`student_id`, `aggregate`, `merit_point`,`student_name`,`board`,`category`,`ph`) VALUES ('$student_id','$aggr','$mp','$name_of_student','$board','$category','$ph')";
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
{$aggr=aggr($sub1_total_om,$sub2_total_om,$sub3_total_om,$sub4_total_om,$lang1_om,$lang2_om);
 $aggr_arts=aggr_toarts($lang1_om,$lang2_om,$sub1_th_fm,$sub1_th_om,$sub2_th_fm,$sub2_th_om,$sub3_th_fm,$sub3_th_om,$sub4_th_fm,$sub4_th_om);

$k=generateRandomString();
$general_stream_name=strtolower($general_stream[$i]);
//$general_stream_name=strtolower($general_stream[$i]);
//echo $general_stream_name;

if($general_stream_name == "b.a. general(day shift)"||$general_stream_name=="b.a. general(morning shift)")
{$aggr=$aggr_arts;
	}
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
	
}

}

//echo "point 07 exit gen gen <br>";







//echo "Submitted";
$imagename="image_place_holder.png";//Path of pdf place holder

$main_html='<html>

<head>


<!-- Latest compiled and minified CSS -->
<link rel=\"stylesheet\" href=\bootstrap.min.css\">

<!-- jQuery library -->
<script src=\"jquery.min.js\"></script>

<!-- Latest compiled JavaScript -->
<script src=\"bootstrap.min.js\"></script>








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
';
if($apply_hons=='yes'){
for($i=0;$i<$no_of_related;$i++){
	
$hons_minor=array($hons_side_sub1[$i],$hons_side_sub2[$i],$hons_side_sub3[$i],$hons_side_sub4[$i]);
$minor=hons2minor($hons_minor);

$html='<div style="text-align:center;">
	<h3>Kharagpur College Admission  Form</h3>
    <h4>Session 2015-2016</h4> <img style="float:right" src="image_place_holder.png" height="155" width="125"/>
    
</div>
<div><h4>Student Information</h4>
<table id="one-column-emphasis">  

	<tr>
             <td>Name</td>
             <td>'.$name_of_student.'</td>
     
             <td>Mobile</td>
             <td>'.$mob.'</td>
             <td> Examination</td>
             <td>'.$examination.'</td>
        </tr>
        <tr>     
             <td>Board</td>
             <td>'.$board.'</td>
             <td>Roll-No</td>
             <td>'.$roll_no.'</td>
             <td>Year of Passing</td>
              <td>'.$year_of_passing.'</td>
             
     </tr>
</table>

</div>





<div><h>Personal Information</h>
    <table id="one-column-emphasis">

	<tr>
             <td>Father\'s Name</td>
             <td>'.$f_name.'</td>
     
             <td> Occupation</td>
             <td>'.$f_occu.'</td>
             <td> Education</td>
             <td>'.$f_edu.'</td>
             <td>Monthely Income</td>
             <td>'.$f_income.'</td>
     </tr>
     <tr>
             <td>Mother\'s  Name</td>
             <td>'.$m_name.'</td>
     
             <td> Occupation</td>
             <td>'.$m_occu.'
             </td>
     
             <td> Education</td>
             <td>'.$m_edu.'
             </td>

    
             <td>Monthely Income</td>             
             <td>'.$m_income.'
			 </td>
     </tr>




    <tr>
             <td>Gender</td>
             <td>'.$gender.'</td>
    
             <td>Blood Group</td>
             <td>'.$blood_gr.'</td>
     
             <td>Date Of Birth</td>
             <td>'.$dob.'</td>
     
             <td>Category</td>
             <td>'.$category.'
             </td>
     </tr>

     <tr>
             <td>Physical Disability</td>
             <td>'.$ph.'
              <td>Religion</td>
     	     <td>'.$religion.'
             <td>Minority</td>
             <td>'.$minority.' 
             </td>
             <td>Nationality</td>
             <td>'.$nationality.'</td>
     </tr>
     <tr>
             <td>Sports Quota</td>
             <td>'.$sport_quota.'</td>
    
             <td>Extra Caricular</td>
             <td>'.$extra_caricular.'</td>
     
             <td>Name of School Lastattend</td>
             <td>'.$name_of_last_school.'</td>
     
             <td>BPL</td>
             <td>'.$bpl.'</td>
     </tr>
     <tr>
             <td>Games And Sports with Level</td>
             <td>'.$game_sport.'</td>
     
         <td>Address</td>
         <td>'.$address.'</td>    
     
             <td>Local Gurdian</td>
             <td>'.$lg.'</td>
     
         <td>Address Of local Gurdian</td>
         <td>'.$addr_lg.'</td>    
     </tr> 
     <tr>
             <td>Nearest Railway Station/Bus stop</td>
             <td>'.$rail_bus.'</td>
     
             <td>Scholarship</td>
             <td>'.$scholar.'</td>
            

     
             <td>Previous Admission</td>
             <td>'.$previous_add.'</td>
     </tr>



</table>
</div>	

<div>
	<h4>Details of 10+2 </h4>
</div>


<table id="one-column-emphasis">
  <tr>
    <th rowspan="2">Subject</th>
    <th rowspan="2">'.$lang1_name.'</th>
    <th rowspan="2">'.$lang2_name.'</th>
    <th colspan="2">'.$sub1_name.'</th>
    <th colspan="2">'.$sub2_name.'</th>
    <th colspan="2">'.$sub3_name.'</th>
    <th colspan="2">'.$sub4_name.'</th>
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
    <td>'.$lang1_fm.'</td>
    <td>'.$lang2_fm.'</td>
    <td>'.$sub1_th_fm.'</td>
    <td>'.$sub1_pr_fm.'</td>
    <td>'.$sub2_th_fm.'</td>
    <td>'.$sub2_pr_fm.'</td>
    <td>'.$sub3_th_fm.'</td>
    <td>'.$sub3_pr_fm.'</td>
    <td>'.$sub4_th_fm.'</td>
    <td>'.$sub4_pr_fm.'</td>
  </tr>
  <tr>
    <td>Marks <br>om</td>
    <td>'.$lang1_om.'</td>
    <td>'.$lang2_om.'</td>
    <td>'.$sub1_th_om.'</td>
    <td>'.$sub1_pr_om.'</td>
    <td>'.$sub2_th_om.'</td>
    <td>'.$sub2_pr_om.'</td>
    <td>'.$sub3_th_om.'</td>
    <td>'.$sub3_pr_om.'</td>
    <td>'.$sub4_th_om.'</td>
    <td>'.$sub4_pr_om.'</td>
  </tr>
</table>




<h4> Honours Selection</h4>  
<table class="tg" style="undefined;table-layout: fixed; width: 657px"  id="customFields" >
<colgroup>
<col style="width: 222px">
<col style="width: 216px">
<col style="width: 219px">
<col style="width: 219px">
<col style="width: 219px">
<col style="width: 219px">

</colgroup>
  <tr>
    <th class="tg-hgcj" rowspan="2"><br>Honours</th>
    <th class="tg-hgcj" colspan="2">General</th>
    <th class="tg-hgcj" colspan="2">Bank Transaction Details</th>
  </tr>
  <tr>
    <td class="tg-093g">Sub1</td>
    <td class="tg-093g">Sub2</td>
    <td class="tg-093g">Bank Transaction id</td>
    <td class="tg-093g">Bank Transaction date</td>
  </tr>
  <tr>
    <td class="tg-30rh">'.$hons[$i].'</td>
    <td class="tg-30rh">'.$minor[$n].'</td>
    <td class="tg-30rh">'.$minor[$m].'</td>
    <td class ="tg-30rh">'.$tran_id[$i].'</td>
    <td class ="tg-30rh">'.$tran_date[$i].'</td>
  </tr>

</table>

<div>
<p> I, hereby, declare that, the entries made by me in the Application Form are complete and true to the
best of my knowledge and based on records. </p>
                                                            

<p>Student Signature &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gurdian Signature</p>


</div>
<pagebreak>';
$main_html=$main_html.$html;
}

}

if($apply_gen=='yes')
{
	
	for($i=0;$i<$count_general;$i++){
	//echo $general_subject[$i];

$html='<div style="text-align:center;">
	<h3>Kharagpur College Admission  Form</h3>
    <h4>Session 2015-2016</h4> <img style="float:right" src="image_place_holder.png" height="155" width="125"/>
    
</div>
<div><h4>Student Information</h4>
<table id="one-column-emphasis">  

	<tr>
             <td>Name</td>
             <td>'.$name_of_student.'</td>
     
             <td>Mobile</td>
             <td>'.$mob.'</td>
             <td> Examination</td>
             <td>'.$examination.'</td>
        </tr>
        <tr>     
             <td>Board</td>
             <td>'.$board.'</td>
             <td>Roll-No</td>
             <td>'.$roll_no.'</td>
             <td>Year of Passing</td>
              <td>'.$year_of_passing.'</td>
             
     </tr>
</table>

</div>





<div><h>Personal Information</h>
    <table id="one-column-emphasis">

	<tr>
             <td>Father\'s Name</td>
             <td>'.$f_name.'</td>
     
             <td> Occupation</td>
             <td>'.$f_occu.'</td>
             <td> Education</td>
             <td>'.$f_edu.'</td>
             <td>Monthely Income</td>
             <td>'.$f_income.'</td>
     </tr>
     <tr>
             <td>Mother\'s  Name</td>
             <td>'.$m_name.'</td>
     
             <td> Occupation</td>
             <td>'.$m_occu.'
             </td>
     
             <td> Education</td>
             <td>'.$m_edu.'
             </td>

    
             <td>Monthely Income</td>             
             <td>'.$m_income.'
			 </td>
     </tr>




    <tr>
             <td>Gender</td>
             <td>'.$gender.'</td>
    
             <td>Blood Group</td>
             <td>'.$blood_gr.'</td>
     
             <td>Date Of Birth</td>
             <td>'.$dob.'</td>
     
             <td>Category</td>
             <td>'.$category.'
             </td>
     </tr>

     <tr>
             <td>Physical Disability</td>
             <td>'.$ph.'
              <td>Religion</td>
     	     <td>'.$religion.'
             <td>Minority</td>
             <td>'.$minority.' 
             </td>
             <td>Nationality</td>
             <td>'.$nationality.'</td>
     </tr>
     <tr>
             <td>Sports Quota</td>
             <td>'.$sport_quota.'</td>
    
             <td>Extra Caricular</td>
             <td>'.$extra_caricular.'</td>
     
             <td>Name of School Lastattend</td>
             <td>'.$name_of_last_school.'</td>
     
             <td>BPL</td>
             <td>'.$bpl.'</td>
     </tr>
     <tr>
             <td>Games And Sports with Level</td>
             <td>'.$game_sport.'</td>
     
         <td>Address</td>
         <td>'.$address.'</td>    
     
             <td>Local Gurdian</td>
             <td>'.$lg.'</td>
     
         <td>Address Of local Gurdian</td>
         <td>'.$addr_lg.'</td>    
     </tr> 
     <tr>
             <td>Nearest Railway Station/Bus stop</td>
             <td>'.$rail_bus.'</td>
     
             <td>Scholarship</td>
             <td>'.$scholar.'</td>
            

     
             <td>Previous Admission</td>
             <td>'.$previous_add.'</td>
     </tr>



</table>
</div>	

<div>
	<h4>Details of 10+2 </h4>
</div>


<table id="one-column-emphasis">
  <tr>
    <th rowspan="2">Subject</th>
    <th rowspan="2">'.$lang1_name.'</th>
    <th rowspan="2">'.$lang2_name.'</th>
    <th colspan="2">'.$sub1_name.'</th>
    <th colspan="2">'.$sub2_name.'</th>
    <th colspan="2">'.$sub3_name.'</th>
    <th colspan="2">'.$sub4_name.'</th>
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
    <td>'.$lang1_fm.'</td>
    <td>'.$lang2_fm.'</td>
    <td>'.$sub1_th_fm.'</td>
    <td>'.$sub1_pr_fm.'</td>
    <td>'.$sub2_th_fm.'</td>
    <td>'.$sub2_pr_fm.'</td>
    <td>'.$sub3_th_fm.'</td>
    <td>'.$sub3_pr_fm.'</td>
    <td>'.$sub4_th_fm.'</td>
    <td>'.$sub4_pr_fm.'</td>
  </tr>
  <tr>
    <td>Marks <br>om</td>
    <td>'.$lang1_om.'</td>
    <td>'.$lang2_om.'</td>
    <td>'.$sub1_th_om.'</td>
    <td>'.$sub1_pr_om.'</td>
    <td>'.$sub2_th_om.'</td>
    <td>'.$sub2_pr_om.'</td>
    <td>'.$sub3_th_om.'</td>
    <td>'.$sub3_pr_om.'</td>
    <td>'.$sub4_th_om.'</td>
    <td>'.$sub4_pr_om.'</td>
  </tr>
</table>




<h4> General Selection</h4>  
<table class="tg" style="undefined;table-layout: fixed; width: 657px"  id="customFields" >
<colgroup>
<col style="width: 222px">
<col style="width: 216px">
<col style="width: 219px">
<col style="width: 219px">
<col style="width: 219px">


</colgroup>
  <tr>
    <th class="tg-hgcj" rowspan="2"><br>General Stream With Session</th>
    <th class="tg-hgcj" rowspan="2">Subject Combination</th>
    <th class="tg-hgcj" colspan="2">Bank Transaction Details</th>
  </tr>
  <tr>
 
    <td class="tg-093g">Bank Transaction id</td>
    <td class="tg-093g">Bank Transaction date</td>
  </tr>
  <tr>
    <td class="tg-30rh">'.$general_stream[$i].'</td>
    <td class="tg-30rh">'.$general_subject[$i].'</td>
    
    <td class ="tg-30rh">'.$gtran_id[$i].'</td>
    <td class ="tg-30rh">'.$gtran_date[$i].'</td>
  </tr>

</table>

<div>
<p> I, hereby, declare that, the entries made by me in the Application Form are complete and true to the
best of my knowledge and based on records. </p>
                                                            

<p>Student Signature &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gurdian Signature</p>


</div>
<pagebreak>';
$main_html=$main_html.$html;
}
		
}




$end_string='</body></html>';
$main_html=$main_html.$end_string;

//echo $main_html;

//echo $html;
 //$html=urlencode ( $html );
//header("Location:after_submit.php?html=$html");

include('mpdf/mpdf.php');
$mpdf= new mPDF();
//$mpdf=new mPDF('win-1252','A4','','',20,15,48,25,10,10); 
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

$mpdf->WriteHTML($style,1);
//$mpdf->WriteHTML($style2,1);
$mpdf->WriteHTML($main_html);
//$mpdf->WriteHTML('hi');


//$mpdf->Output($filename,'F');//for saving in current directory fource fully  for letter use 
//$mpdf->Output($filename,'D');//downlode in browser
//echo $html;
$mpdf->Output();//For direct out put in browser
//echo "jjjjjj";
/*echo $html;
$link="<script type=\"text/javascript\">
'''window.location.href=\"firstpage.html\";'''
window.open('education.php','_self',false) 
</script>";
echo $link;
*/
//header("Location:after_submit.php?merit[]=$merit&hons[]=$hons&session=$session");
//exit();
///session_unset();
//session_destroy();
?>

