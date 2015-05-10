

<?php


$student_id="1234";
$f_name="f_name";
$f_occu="f_occu";
$f_edu="f_edu";
$f_income="f_income";
$m_name="m_name";
$m_occu="m_occu";
$m_edu="m_edu";
$m_income="m_income";
$category="category";
$ph="ph";
$minority="minority";
$nationality="nationality";
$religion="religion";
$dob="dob";
$blood_gr="blood_gr";
$sport_quota="sport_quota";
$name_of_last_school="name_of_last_school";
$bpl="bpl";
$extra_caricular="extra_caricular";
$game_sport="game_sport";
$lg="lg";
$addr_lg="addr_lg";
$rail_bus="rail_bus";
$scholar="scholar";
$hons="hons";
$sub1="sub1";
$sub2="sub2";
//$sub3="sub2";
$previous_add="previous_add";
$lang1_name="lang1_name";
$lang1_fm="lang1_fm";
$lang1_om="lang1_om";
$sub1_name="sub1_name";
$sub1_th_fm="sub1_th_fm";
$sub1_th_om="sub1_th_om";
$sub1_pr_fm="sub1_pr_fm";
$sub1_pr_om="sub1_pr_om";
$sub2_name="sub2_name";
$sub2_th_fm="sub2_th_fm";
$sub2_th_om="sub2_th_om";
$sub2_pr_fm="sub2_pr_fm";
$sub2_pr_om="sub2_pr_om";
$sub2_fm="$sub2_th_fm+$sub2_pr_fm";
//$sub3_fm="$sub3_th_fm+$sub3_pr_fm";
//$sub4_fm="$sub4_th_fm+$sub4_pr_fm";
$sub3_th_om="sub3_th_om";
$sub4_th_om="sub4_th_om";
$sub3_th_fm="sub3_th_fm";
$sub4_th_fm="sub4_th_fm";
$sub3_pr_fm="sub3_pr_fm";
$sub4_pr_fm="sub4_pr_fm";
$sub3_pr_om="sub3_pr_om";
$sub4_pr_om="sub4_pr_om";
$sub3_name="sub3_name";
$sub4_name="sub4_name";
$sub1_fm="$sub1_th_fm+$sub1_pr_fm";
$sub3_fm="$sub3_th_fm+$sub3_pr_fm";
$sub4_fm="$sub4_th_fm+$sub4_pr_fm";
$sub1_total_om="$sub1_th_om+$sub1_pr_om";
$sub2_total_om="$sub2_th_om+$sub2_pr_om";
$sub3_total_om="$sub3_th_om+$sub3_pr_om";
$sub4_total_om="$sub4_th_om+$sub4_pr_om";
$lang2_name="lang2_name";
$lang2_fm="lang2_fm";
$lang2_om="lang2_om";
$address="address";
$gender=" gender";

























$style = file_get_contents('style.css');


$html='<html>
<head>

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
<div style="text-align:center;">
	<h3> Student Application Form</h3>
    <h4>Anynomus University</h4> 
    <!--img style=\"float:right\" src=\"".$imagename."\" width=\"90\" /-->
</div>
<form action="pdfgen.php"method="get"name="Student" enctype="multipart/form-data">
<div><h>Personal Information</h>
    <table id="one-column-emphasis">  

	<tr>
             <td>Fathers Name</td>
             <td><input type="text"name="f_name" id="f_name" ></td>
     
             <td> Occupation</td>
             <td><input type="text"name="f_occu" id="f_occu"  >
             </td>
             <td> Education</td>
             <td><input type="text"name="f_edu" id="f_edu"  >
             </td>
             <td>Monthely Income</td>
             <td><div class="input-group"><span class="input-group-addon">&#8377</span>
			 <input type="text" id="appendedPrependedInput" name="f_income" class="form-control">
             </div>
			 </td>
     </tr>
     <tr>
             <td>Mothers  Name</td>
             <td><input type="text"name="m_name" id="m_name" ></td>
     
             <td> Occupation</td>
             <td><input type="text"name="m_occu" id="m_occu"  >
             </td>
     
             <td> Education</td>
             <td><input type="text"name="m_edu" id="m_edu"  >
             </td>

    
             <td>Monthely Income</td>             
             <td><div class="input-group"><span class="input-group-addon">&#8377</span>
			 <input type="text" id="appendedPrependedInput" name="m_income" class="form-control">
             </div>
			 </td>
     </tr>




    <tr>
             <td>Gender</td>
             <td><input type="radio" name="gender" id="gender" value="male">Male <input type="radio" name="gender"id="gender" value="female">Female</td>
    
             <td>Blood Group</td>
             <td><input type="text" name="blood_gr"   id="blood_gr" size="3"></td>
     
             <td>Date Of Birth</td>
             <td><input type="date" name="dob"   id="dob"></td>
     
             <td>Category</td>
             <td><select name="category">
             
             	<option value="gen">GENERAL</option>
                 <option value="sc">SC</option>
                 <option value="st">ST</option>
                 <option value="obca">OBC-A</option>
             <option value="obcb">OBC-B</option>

            </select>
             </td>
     </tr>

     <tr>
             <td>Phycially Handicaped</td>
             <td><input type="radio" name="ph" id="ph" value="yes">Yes
             	<input type="radio" name="ph" id="ph" value="no">No</td>
              <td>Religion</td>
     	     <td><input type ="text" name="religion" id="religion" size="5"></td>
             <td>Minority</td>
             <td><select name="minority">
                <option value="yes">Yes</option>
                <option value="no" selected>No</option>
            </seelect>
            </td>
             <td>Nationality</td>
             <td><input type ="text" name="nationality" id="nationality" size="4"></td>
     </tr><tr>
             <td>Sports Quota</td>
             <td><input type ="radio" name="sport_quota" id="sport_quota" value="yes">Yes<input type ="radio" name="sport_quota" id="sports_quota" value="no">No</td>
    
             <td>Extra Caricular</td>
             <td><textarea name="extra_caricular" id="extra_cari"></textarea></td>
     
             <td>Name of School Lastattend</td>
             <td><input type ="text" name="name_of_last_school" id="name_of_last_school"></td>
     
             <td>BPL</td>
             <td><input type ="radio" name="bpl" id="bpl" value="yes">Yes<input type ="radio" name="bpl" id="bpl" value="no">No</td>
     </tr>
     <tr>
             <td>Games And Sports with Level</td>
             <td><textarea name="game_sport" id="game_sport"></textarea></td>
     
         <td>Address</td>
         <td><textarea name ="address"id="address"></textarea></td>    
     
             <td>Local Gurdain</td>
             <td><input type="text" name="lg" id="local_gurdain"></td>
     
         <td>Address Of local Gurdian</td>
         <td><textarea name ="addr_lg"id="address_lg"></textarea></td>    
     </tr> 
     <tr>
             <td>Nearest Railway Station/Bus stop</td>
             <td><input type="text" name="rail_bus" id="rail"></td>
     
             <td>Scholarship</td>
             <td><select name="scholar" id="scholar"onchange="myFunction()">

             <option value="yes">Yes</option>
             <option value="no">No</option>

             </select></td>
             <td><input type="hidden" name="scholar_detail" id="scholar_detail"placeholder="Give details of scholarship" ></td>

     
             <td>Previous Admission</td>
             <td><input type="text" name="previous_add" id="previous_add"></td>
     </tr>



</table>
</div>	

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











<div>
	<input type="submit" id="submit" name="submit" onclick="return validate();"> 
</div>




<div>
<p>
	Upload Image
</p>
<input type="file" name="image">

</div>

</form>
</div>


</body>
</html>';



$html2='<html>

<head>
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
<div style="text-align:center;">
	<h3> Student Application Form</h3>
    <h4>Anynomus University</h4> 
    
</div>
<div><h4>Student Infromation</h4>


</div>







<div><h>Personal Information</h>
    <table id="one-column-emphasis">

	<tr>
             <td>Fathers Name</td>
             <td>'.$f_name.'</td>
     
             <td> Occupation</td>
             <td>'.$f_occu.'</td>
             <td> Education</td>
             <td>'.$f_edu.'</td>
             <td>Monthely Income</td>
             <td>'.$f_income.'</td>
     </tr>
     <tr>
             <td>Mothers  Name</td>
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
             <td>Phycially Handicaped</td>
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
     
             <td>Local Gurdain</td>
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




<h4> Application Detail</h4>  
<table class="tg" >
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
    <td class="tg-30rh">'.$hons.'</td>
    <td class="tg-30rh">'.$sub1.'</td>
    <td class="tg-30rh">'.$sub2.'</td>
  </tr>
</table>



<div>
<p>I hearby accknowledge above information are correct...</p>
                                                            

<p>Student Signature  Signature</p>


</div>
</body>
</html>';








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
$mpdf->WriteHTML($html2);
//$mpdf->WriteHTML('hi');
$mpdf->Output();//For direct out put in browser

//$mpdf->Output($filename,'F');//for saving in current directory fource fully  for letter use 
//$mpdf->Output($filename,'D');//downlode in browser
//echo $html;

exit;
?>
