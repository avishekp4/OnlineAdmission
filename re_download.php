<?php
 //Inialize session
if(!isset($_SESSION)){
   session_start();
}
// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['name'])) {
header('Location: firstpage.html');
}
$now = time(); // Checking the time now when home page starts.

        if ($now > $_SESSION['expire']) {
			session_unset(); 
            session_destroy();
            echo "Your session has expired! <a href='firstpage.html'>Start here</a>";
        }
        






include'connect.php';
$student_id=$_SESSION['name'];

$sql="select * from auth where student_id <=>'$student_id'";
$result = mysqli_query($conn,$sql);
if (!$result) {
	die("No result " . mysqli_error());
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

//$style = file_get_contents('style.css');
//$jornal = $_GET['jornal'];

$filename=$student_id.".pdf";


//*/

$style = file_get_contents('style.css');
$style2=file_get_contents('marks_table.css');






//Insert in Main
$sql2="select * from main where student_id <=> '$student_id'";
//echo $sql2;
$result2 = mysqli_query($conn,$sql2);
if (!$result2) {
	die("No result1 " . mysqli_error($conn));
}
$row1 = @mysqli_fetch_array($result2);




$html="<html>

<head>
<style type=\"text/css\">
.tg  {border-collapse:collapse;border-spacing:0;border-color:#ccc;margin:0px auto;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:9px 9px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#fff;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:9px 9px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#f0f0f0;}
.tg .tg-30rh{font-style:italic;text-align:center}
.tg .tg-093g{font-weight:bold;font-style:italic;text-align:center}
.tg .tg-hgcj{font-weight:bold;text-align:center}
</style>




</head>	
<body>
<div style=\"text-align:center;\">
	<h3> Student Application Form</h3>
    <h4>Anynomus University</h4> 
    
</div>
<div><h4>Student Infromation</h4>
<table id=\"one-column-emphasis\">  

	<tr>
             <td>Name</td>
             <td>{$name_of_student}</td>
     
             <td>Mobile</td>
             <td>{$mob}</td>
             <td> Examination</td>
             <td>{$examination}</td>
        </tr>
        <tr>     
             <td>Board</td>
             <td>{$board}</td>
             <td>Roll-No</td>
             <td>{$roll_no}</td>
             <td>Year of Passing</td>
              <td>{$year_of_passing}</td>
             
     </tr>
</table>







<div><h>Personal Information</h>
    <table id=\"one-column-emphasis\">

	<tr>
             <td>Fathers Name</td>
             <td>{$row1['f_name']}</td>
     
             <td> Occupation</td>
             <td>{$row1['f_occu']}</td>
             <td> Education</td>
             <td>{$row1['f_edu']}</td>
             <td>Monthely Income</td>
             <td>{$row1['f_income']}</td>
     </tr>
     <tr>
             <td>Mothers  Name</td>
             <td>{$row1['m_name']}</td>
     
             <td> Occupation</td>
             <td>{$row1['m_occu']}
             </td>
     
             <td> Education</td>
             <td>{$row1['m_edu']}
             </td>

    
             <td>Monthely Income</td>             
             <td>{$row1['m_income']}
			 </td>
     </tr>




    <tr>
             <td>Gender</td>
             <td>{$row1['gender']}</td>
    
             <td>Blood Group</td>
             <td>{$row1['blood_gr']}</td>
     
             <td>Date Of Birth</td>
             <td>{$row1['dob']}</td>
     
             <td>Category</td>
             <td>{$row1['category']}
             </td>
     </tr>

     <tr>
             <td>Phycially Handicaped</td>
             <td>{$row1['ph']}
              <td>Religion</td>
     	     <td>{$row1['religion']}
             <td>Minority</td>
             <td>{$row1['minority']} 
             </td>
             <td>Nationality</td>
             <td>{$row1['nationality']}</td>
     </tr>
     <tr>
             <td>Sports Quota</td>
             <td>{$row1['sport_quota']}</td>
    
             <td>Extra Caricular</td>
             <td>{$row1['extra_caricular']}</td>
     
             <td>Name of School Lastattend</td>
             <td>{$row1['name_of_last_school']}</td>
     
             <td>BPL</td>
             <td>{$row1['bpl']}</td>
     </tr>
     <tr>
             <td>Games And Sports with Level</td>
             <td>{$row1['game_sport']}</td>
     
         <td>Address</td>
         <td>{$row1['address']}</td>    
     
             <td>Local Gurdain</td>
             <td>{$row1['lg']}</td>
     
         <td>Address Of local Gurdian</td>
         <td>{$row1['addr_lg']}</td>    
     </tr> 
     <tr>
             <td>Nearest Railway Station/Bus stop</td>
             <td>{$row1['rail_bus']}</td>
     
             <td>Scholarship</td>
             <td>{$row1['scholar']}</td>
            

     
             <td>Previous Admission</td>
             <td>{$row1['previous_add']}</td>
     </tr>



</table>
</div>	

<div>
	<h4>Details of 10+2 </h4>
</div>


<table id=\"one-column-emphasis\">
  <tr>
    <th rowspan=\"2\">Subject</th>
    <th rowspan=\"2\">{$row1['lang1_name']}</th>
    <th rowspan=\"2\">{$row1['lang2_name']}</th>
    <th colspan=\"2\">{$row1['sub1_name']}</th>
    <th colspan=\"2\">{$row1['sub2_name']}</th>
    <th colspan=\"2\">{$row1['sub3_name']}</th>
    <th colspan=\"2\">{$row1['sub4_name']}</th>
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
    <td>{$row1['lang1_fm']}</td>
    <td>{$row1['lang2_fm']}</td>
    <td>{$row1['sub1_th_fm']}</td>
    <td>{$row1['sub1_pr_fm']}</td>
    <td>{$row1['sub2_th_fm']}</td>
    <td>{$row1['sub2_pr_fm']}</td>
    <td>{$row1['sub3_th_fm']}</td>
    <td>{$row1['sub3_pr_fm']}</td>
    <td>{$row1['sub4_th_fm']}</td>
    <td>{$row1['sub4_pr_fm']}</td>
  </tr>
  <tr>
    <td>Marks <br>om</td>
    <td>{$row1['lang1_om']}</td>
    <td>{$row1['lang2_om']}</td>
    <td>{$row1['sub1_th_om']}</td>
    <td>{$row1['sub1_pr_om']}</td>
    <td>{$row1['sub2_th_om']}</td>
    <td>{$row1['sub2_pr_om']}</td>
    <td>{$row1['sub3_th_om']}</td>
    <td>{$row1['sub3_pr_om']}</td>
    <td>{$row1['sub4_th_om']}</td>
    <td>{$row1['sub4_pr_om']}</td>
  </tr>
</table>




<h4> Application Detail</h4>  
<table class=\"tg\" >
<colgroup>
<col style=\"width: 222px\">
<col style=\"width: 216px\">
<col style=\"width: 219px\">
</colgroup>
  <tr>
    <th class=\"tg-hgcj\" rowspan=\"2\"><br>Honours</th>
    <th class=\"tg-hgcj\" colspan=\"2\">General</th>
  </tr>
  <tr>
    <td class=\"tg-093g\">Sub1</td>
    <td class=\"tg-093g\">Sub2</td>
  </tr>
  <tr>
    <td class=\"tg-30rh\">{$row1['hons']}</td>
    <td class=\"tg-30rh\">{$row1['sub1']}</td>
    <td class=\"tg-30rh\">{$row1['sub2']}</td>
  </tr>
</table>



<div>
<p>I hearby accknowledge above information are correct...</p>
                                                            

<p>Student Signature  Signature</p>


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
$mpdf->WriteHTML($html);
//$mpdf->WriteHTML('hi');
//$mpdf->Output();//For direct out put in browser

//$mpdf->Output($filename,'F');//for saving in current directory fource fully  for letter use 
$mpdf->Output($filename,'D');//downlode in browser
//echo $html;

exit;
?>
