<?php

if(!isset($_SESSION)){
   session_start();
}
/*
if (!isset($_SESSION['name'])) {
header('Location: index.html');
}

$now = time(); // Checking the time now when home page starts.

      if ($now > $_SESSION['expire']) {
       session_unset(); 
       session_destroy();
         echo "Your session has expired! <a href='index.html'>Start here</a>";
		 exit();
        }
        
*/
/*
//Inialize session
//if(!isset($_SESSION)){
  //  session_start();
//}

// Check, if username session is NOT set then this page will jump to login page
//if (!isset($_SESSION['name'])) {
//header('Location: index.html');
///}
//setcookie("test_cookie", "test", time() + 10, '/');
///echo "fllgflgfkgflgkfg";
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
<head><link rel="stylesheet" href="jquery-ui.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="bootstrap.min.css">

<!-- jQuery library -->
<script src="jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="bootstrap.min.js"></script>
<script src="jquery-ui.js"></script>
<script src="jquery.validate.min.js"></script>

<link rel="stylesheet" type="text/css" href="style.css">
<script src="jquery.chained.min.js"></script>  
<script>
$(document).ready(function(){
$("#dob").datepicker({changeMonth:true,
changeYear:true,
showButtonPanal:true,
yearRange:'1970:2010'});});
</script>

    <!--script>
function validate()
{ 
   if(document.getElementById('jornal').value==="")
   {
     alert( "Please provide jornal no" );
     document.getElementById('jornal').focus();
     return false;
   }
   return true;
}
    </script-->










<style type="text/css">
	textarea {
    resize: none;
}

	.col-wide {
  width: 270px;
}

.col-narrow {
  width: 216px;
}

.col-normal {
  width: 219px;
}

#custom-fields {
  table-layout: fixed;
  width: 657px;
}
	
	
	
	
	
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
    <h3>Kharagpur College Admission  Form</h3>
    <h4>Session 2015-2016</h4> 
    <!--img style=\"float:right\" src=\"".$imagename."\" width=\"90\" /-->
    <!--img style="float:right" src="image_place_holder.png" height="300"width="400"/-->
</div>
<form action="pdfgen.php" method="get" name="Student" enctype="multipart/form-data" id="id">
<div>
	<h4>Personal Information</h4>
    <table id="one-column-emphasis">  

    <tr>
             <td>Father's Name</td>
             <td><input type="text"name="f_name" id="f_name" class="text-uppercase"></td>
     
             <td> Occupation</td>
             <td><input type="text"name="f_occu" id="f_occu" class="text-uppercase" >
             </td>
             <td> Education</td>
             <td><input type="text"name="f_edu" id="f_edu"class="text-uppercase"  >
             </td>
             <td>Monthely Income</td>
             <td><div class="input-group"><span class="input-group-addon">&#8377</span>
             <input type="text" id="appendedPrependedInput" name="f_income" class="form-control">
             </div>
             </td>
     </tr>
     <tr>
             <td>Mother's  Name</td>
             <td><input type="text"name="m_name" id="m_name"class="text-uppercase" ></td>
     
             <td> Occupation</td>
             <td><input type="text"name="m_occu" id="m_occu" class="text-uppercase" >
             </td>
     
             <td> Education</td>
             <td><input type="text"name="m_edu" id="m_edu"class="text-uppercase"  >
             </td>

    
             <td>Monthely Income</td>             
             <td><div class="input-group"><span class="input-group-addon">&#8377</span>
             <input type="text" id="appendedPrependedInput" name="m_income" class="form-control">
             </div>
             </td>
     </tr>




    <tr>
             <td>Gender</td>
             <td><select name="gender">
                <option value="Male">Male</option>
                 <option value="Female">Female</option>
                 <option value="Transgender">Transgender</option>
			</select>    
             <td>Blood Group</td>
             <td><input type="text" name="blood_gr"   id="blood_gr" size="4"class="text-uppercase"></td>
     
             <td>Date Of Birth</td>
             <td><input type="text" name="dob"   id="dob"></td>
     
             <td>Category</td>
             <td><select name="category">
             
                <option value="GEN">GENERAL</option>
                 <option value="SC">SC</option>
                 <option value="ST">ST</option>
                 <option value="OBC-A">OBC-A</option>
             <option value="OBC-B">OBC-B</option>

            </select>
             </td>
     </tr>

     <tr>
             <td>Physical Disability</td>
             <td><input type="radio" name="ph" id="ph" value="yes">Yes
                <input type="radio" name="ph" id="ph" value="no">No</td>
              <td>Religion</td>
             <td><input type ="text" name="religion" id="religion" size="5"class="text-uppercase"></td>
             <td>Minority</td>
             <td><select name="minority">
                <option value="yes">Yes</option>
                <option value="no" selected>No</option>
            </select>
            </td>
             <td>Nationality</td>
             <td><input type ="text" name="nationality" id="nationality" size="5"class="text-uppercase"></td>
     </tr>
     <tr>
             <!--<td>Sports Quota</td>
             <td><input type ="radio" name="sport_quota" id="sport_quota" value="yes">Yes<input type ="radio" name="sport_quota" id="sports_quota" value="no">No</td>
    -->
             <td>Extracurricular</td>
             <td><textarea name="extra_caricular" id="extra_cari"class="text-uppercase"></textarea></td>
     
             <td>Name of School Last Attended</td>
             <td><input type ="text" name="name_of_last_school" id="name_of_last_school"class="text-uppercase"></td>
     
             <td>Below Proverty Line</td>
             <td><input type ="radio" name="bpl" id="bpl" value="yes">Yes<input type ="radio" name="bpl" id="bpl" value="no">No</td>
    
			<td>Local Gurdian's Name</td>
             <td><input type="text" name="lg" id="local_gurdain" class="text-uppercase"></td>
    
     </tr>
     <tr>
             <td>Games And Sports with Level</td>
             <td><textarea name="game_sport" id="game_sport"class="text-uppercase"></textarea></td>
     
         <td>Address</td>
         <td><textarea name ="address"id="address"class="text-uppercase"></textarea></td>    
     
             <td>PIN</td>
             <td><input type="text" name="pin"></td>
     
         <td>Address Of local Gurdian</td>
         <td><textarea name ="addr_lg"id="address_lg" class="text-uppercase"></textarea></td>    
     </tr> 
     <tr>
             <td>Nearest Railway Station/Bus stop</td>
             <td><input type="text" name="rail_bus" id="rail" class="text-uppercase"></td>
			  
			  
     
             <td>Scholarship</td>
             <td><select name="scholar" id="scholar" class="text-uppercase" onchange="myFunction()">

             <option value="yes">Yes</option>
             <option value="no"selected>No</option>

             </select>
             <input type="hidden" name="scholar_detail" id="scholar_detail" class="text-uppercase" placeholder="Give details of scholarship" ></td>

     <td></td><td></td><td></td><td></td>
             
			 
	 </tr>
     <tr>	 
	 
	         
			 <td>Previous Admission</td>
			 
			 <td><select name="previous_add" id="previous_add" class="text-uppercase" onchange="show_hide1()">

             <option value="yes">Yes</option>
             <option value="no"selected>No</option>

             </select>
			 
			 
             <td> <input type="hidden" name="pv_y" id="pv_y" class="text-uppercase"placeholder="Year:"></td>
			 <td> <input type="hidden" name ="pv_class" id="pv_class" class="text-uppercase"placeholder="Class"></td>
			 <td> <input type="hidden" name ="pv_roll" id="pv_roll" class="text-uppercase"placeholder="Roll"></td>
			 <td><input type="hidden" name="pv_regn" id="pv_regn"placeholder="University Regn. No. with year."></td>
     <td></td><td></td>
     </tr>

</table>
</div>  
<!----------------------------------------------10+2 details ---------------------------------------------->
<div>
    <h4>Details of 10+2 </h4>
</div>

Enter Stream:
<select name ="stream"id="stream" onchange="updateSelect(this.id)">
    <option value="Arts">Arts</option>
    <option value="Science">Science</option>
    <option value="Commerce">Commerce</option>
</select>

<table id="one-column-emphasis">
  <tr>
    <th rowspan="2">Subject Name</th>
    <th colspan="2"><select name="lang1_name">
			<option value="Bengali" Selected>Bengali</option>
			<option value="Hindi">Hindi</option>
			<option value="Nepali">Nepali</option>
			<option value="Urdu">Urdu</option>
			<option value="Santhali">Santhali</option>
			<option value="Odia">Odia</option>
			<option value="Telegu">Telegu</option>
			<option value="Gujrati">Gujrati</option>
			<option value="Punjabi">Punjabi</option>
			<option value="English">English</option>
    </select> </th>
    <th colspan="2"><select name="lang2_name">
			<option value="Bengali">Bengali</option>
			<option value="Hindi">Hindi</option>
			<option value="Nepali">Nepali</option>
			<option value="Alt_Eng">Alt. English</option>
			<option value="English" Selected>English</option>
    </select> </th>
    <!--<th colspan="2"><input type="text" name="lang1_name" size="7"class="text-uppercase" placeholder="Language"></th>
    <th colspan="2"><input type="text" name="lang2_name" size="7"class="text-uppercase"value="ENGLISH" readonly></th>
    -->
    <th colspan="2">  <select id="hs_sub_2" name="sub1_name" >
					</select>
	</th>
    <th colspan="2">  <select id="hs_sub_3"name="sub2_name">
                      </select>
    </th>
    <th colspan="2"> <select id="hs_sub_4"name="sub3_name">
					</select>
    </th>
    <th colspan="2">  <select id="hs_sub_5"name="sub4_name">
					</select>
	 </th>
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
    <td>Th</td>
    <td>Pr</td>
    <td>Th</td>
    <td>Pr</td>
  </tr>
  <tr>
    <td>Full<br>Marks</td>
    <td><input type = "text"name="lang1_th_fm" id="lang1_th_fm"       size="2" ></td>
	 <td><input type = "text"name="lang1_pr_fm" id="lang1_pr_fm"       size="2" ></td>
	  <td><input type = "text"name="lang2_th_fm" id="lang2_th_fm"       size="2"onfocus="checkDuplicates()" ></td>
	   <td><input type = "text"name="lang2_pr_fm" id="lang2_pr_fm"       size="2" ></td>
    
    <td><input type="text" name="sub1_th_fm"  id="sub1_th_fm"   size="2"></td>
    <td><input type="text" name="sub1_pr_fm"  id="sub1_pr_fm"   size="2"></td>
    <td><input type="text" name="sub2_th_fm"  id="sub2_th_fm"   size="2"></td>
    <td><input type="text" name="sub2_pr_fm"    size="2"></td>
    <td><input type="text" name="sub3_th_fm"size="2"></td>
    <td><input type="text" name="sub3_pr_fm"size="2"></td>
    <td><input type="text" name="sub4_th_fm"size="2"></td>
    <td><input type="text" name="sub4_pr_fm"size="2"></td>
  </tr>
  <tr>
    <td>Marks <br>Obtained</td>
   <td><input type = "text"name="lang1_th_om" id="lang1_th_om"       size="2" ></td>
	 <td><input type = "text"name="lang1_pr_om" id="lang1_pr_om"       size="2" ></td>
	  <td><input type = "text"name="lang2_th_om" id="lang2_th_om"       size="2"onfocus="checkDuplicates()" ></td>
	   <td><input type = "text"name="lang2_pr_om" id="lang2_pr_om"       size="2" ></td>   


   
    <td><input type="text" name="sub1_th_om"  id="sub1_th_om"  size="2"></td>
    <td><input type="text" name="sub1_pr_om"  id="sub1_pr_om"   size="2"></td>
    <td><input type="text" name="sub2_th_om"  id="sub2_th_om"          size="2"></td>
    <td><input type="text" name="sub2_pr_om"    id="sub2_pr_om"     size="2"></td>
    <td><input type="text" name="sub3_th_om"   id="sub3_th_om"            size="2"></td>
    <td><input type="text" name="sub3_pr_om"   id="sub3_pr_om"        size="2"></td>
    <td><input type="text" name="sub4_th_om"  id="sub4_th_om"       size="2"></td>
    <td><input type="text" name="sub4_pr_om"    id = "sub4_pr_om"           size="2"></td>
  </tr>
</table>

<!-- ------------------------------------Honours -selection   ------------------------------------------------------->
<p>Applying For
<input type="checkbox" value="yes" name="apply_hons"id="apply_hons">Honours</input>
<input type="checkbox" value="yes" name="apply_gen"id="apply_gen">General</input>
</p>
<h4> Honours Selection</h4> 
<table class="tg" id="custom-fields">
  <colgroup>
    <col class="col-wide" />
    <col class="col-narrow" />
    <col class="col-normal" />
    <col class="col-normal" />
    <col class="col-normal" />
    <col class="col-normal" />
    <col class="col-normal" />
    <col class="col-normal" />
    <col class="col-normal" />
    <col class="col-normal" />
  </colgroup>
  <tr>
    <th class="tg-hgcj" rowspan="2">
      <br />Honours
    </th>
    <th class="tg-hgcj" colspan="4">General</th>
    <th class="tg-hgcj" colspan="2">Bank Transaction Details</th>
    <th class="tg-hgcj" rowspan="2">Add More</th>
  </tr>
  <tr>
    <td class="tg-093g">Sub1</td>
    <td class="tg-093g">Sub2</td>
    <td class="tg-093g">Sub3</td>
    <td class="tg-093g">Sub4</td>
    <td class="tg-093g">Bank Transaction id</td>
    <td class="tg-093g">Bank Transaction date</td>
  </tr>
  <tr>
    <td class="tg-30rh">
      <select name="hons[]" id="select1-0"   onfocus="applysto()" >
        <option value="Hindi"  >Hindi  </option>
        <option value="Bengali">Bengali</option>
        <option value="English">English</option>
        <option value="History">History</option>
        <option value="Political Science">Political Science</option>
        <option value="Philosophy">Philosophy</option>
        <option value="Sanskrit">Sanskrit</option>
        <option value="Geography(Arts)">Geography (Arts)</option>
        <option value="Economics(Arts)">Economics (Arts)</option>
        <option value="Physics">Physics</option>
        <option value="Chemistry">Chemistry</option>
        <option value="Mathematics">Mathematics</option>
        <option value="Zoology">Zoology</option>
        <option value="Botany">Botany</option>
        <option value="Geography(Science)">Geography (Science)</option>
        <option value="Economics(Science)">Economics (Science)</option>
        <option value="Accountancy">Accountancy</option>
</select>
      <!--select id="ddl2" name="session[]">
      </select-->
    </td>
    <td class="tg-30rh">
      <select name="sub1[]" id="select2-0">
      </select>
    </td>
    <td class="tg-30rh">
      <select name="sub2[]" id="select3-0">
      </select>
    </td>
    <td class="tg-30rh">
      <select name="sub3[]" id="select4-0">
      </select>
    </td>
    <td class="tg-30rh">
      <select name="sub4[]" id="select5-0">
      </select>
    </td>
    <td class="tg-30rh">
      <input type="text" name="tran_id[]" id="tranid-0" onfocus="checkDuplicatesHons(0)"/>
    </td>
    <td class="tg-30rh">
      <input type="text" name="tran_date[]" class="datepicker"/>
    </td>
    <td><a href="javascript:void(0);" class="addCF">Add</a>
    </td>
  </tr>
</table>



<!------------------------------------------------GENERAL SELECTION------------------------------------------------------       -->


<h4>General Selection</h4>

<table class="tg" id="custom-fields1">
  <colgroup>
    <col class="col-wide" />
    <col class="col-narrow" />
    <col class="col-normal" />
    <col class="col-normal" />
    <col class="col-normal" />
  </colgroup>
  <tr>
    <th class="tg-hgcj" rowspan="2">
      <br />General Stream With Session
    </th>
    <th class="tg-hgcj" rowspan="2">Subject Combination</th>
    <th class="tg-hgcj" colspan="2">Bank Transaction Details</th>
    <th class="tg-hgcj" rowspan="2">Add More</th>
  </tr>
  <tr>
    
    <td class="tg-093g">Bank Transaction id</td>
    <td class="tg-093g">Bank Transaction date</td>
  </tr>
  <tr>
    <td class="tg-30rh">
      <select id ="general_stream-0" name="general-stream[]"  onfocus="applysto()">
		  <option value="B.A. General(Day Shift)">B.A. General(Day Shift)</option>
		  <option value="B.A. General(Day Shift)With Geography">B.A. General(Day Shift)With Geography</option>
		  <option value="B.A. General(Morning Shift)"> B.A. General(Morning Shift)</option>
		  <option value="B.Sc. General[Pure. Science]">B.Sc. General [Pure. Science]</option>
	      <option value="B.Sc. General[Bio. Science]">B.Sc. General[Bio. Science]</option>
	      <option value="B.Com. General"> B.Com. General</option>
	  </select>
    </td>
    <td class="tg-30rh">
      
<select name="GeneralSub[]"id="gen_select-0" >
	
<option value="Bengali,English,Pol.Sc. " class="B.A. General(Morning Shift)"> Bengali,English,     Pol.Sc. </option>
<option value="Bengali,English,Physical Education "class="B.A. General(Morning Shift)"> Bengali,English,     Physical Education </option>
<option value="Bengali,English,Philosophy     "class="B.A. General(Morning Shift)"> Bengali,English,     Philosophy     </option>        
<option value="Bengali,English,History             "class="B.A. General(Morning Shift)"> Bengali,English,     History              
<option value="Bengali,English,Physical Education "class="B.A. General(Morning Shift)"> Bengali,English,     Physical Education     </option>        
<option value="Bengali,English,Economics "class="B.A. General(Morning Shift)"> Bengali,English,     Economics            </option>   
<option value="Bengali,English,     Physical Education  "class="B.A. General(Morning Shift)"> Bengali,English,     Physical Education    </option>       
<option value="Bengali,Pol.Sc.,   Philosophy  "class="B.A. General(Morning Shift)"> Bengali,Pol.Sc.,     Philosophy         </option>   
<option value="Bengali,Pol.Sc.,     History            "class="B.A. General(Morning Shift)"> Bengali,Pol.Sc.,     History            </option>     
<option value="Bengali,Pol.Sc.,     Physical Education"class="B.A. General(Morning Shift)"> Bengali,Pol.Sc.,     Physical Education</option>         
<option value="Bengali Pol.Sc.,     Economics        "class="B.A. General(Morning Shift)"> Bengali Pol.Sc.,     Economics        </option>     
<option value="Bengali Pol.Sc.,     Physical Education  "class="B.A. General(Morning Shift)"> Bengali Pol.Sc.,     Physical Education  </option>           
<option value="Bengali,Philosophy,  Economics        "class="B.A. General(Morning Shift)"> Bengali,Philosophy,  Economics        </option>  
<option value="English,Philosophy,  Economics        "class="B.A. General(Morning Shift)"> English,Philosophy,  Economics         </option>     
<option value="English,Pol.Sc.,     History           "class="B.A. General(Morning Shift)"> English,Pol.Sc.,     History           </option>             
<option value="English,Pol.Sc.,     Physical Education "class="B.A. General(Morning Shift)"> English,Pol.Sc.,     Physical Education </option>        
<option value="English,Pol.Sc.,     Economics         "class="B.A. General(Morning Shift)"> English,Pol.Sc.,     Economics         </option>   
<option value="English,Pol.Sc.,     Physical Education"class="B.A. General(Morning Shift)"> English,Pol.Sc.,     Physical Education </option>           
<option value="Bengali,Philosophy,  History           "class="B.A. General(Morning Shift)"> Bengali,Philosophy,  History           </option>     
<option value="English,Philosophy,  History           "class="B.A. General(Morning Shift)"> English,Philosophy,  History           </option>   
<option value="English,Pol.Sc.,     Philosophy        "class="B.A. General(Morning Shift)"> English,Pol.Sc.,     Philosophy        </option>  
<option value="Pol.Sc.,Philosophy,  Economics"class="B.A. General(Morning Shift)"> Pol.Sc.,Philosophy,  Economics          </option>  
<option value="Pol.Sc.,Philosophy,  History"class="B.A. General(Morning Shift)"> Pol.Sc.,Philosophy,  History</option>  
<option value="Bengali,History               "class="B.A. General(Day Shift)With Geography">                     Bengali,History            </option>                               
<option value="Bengali,Sociology             "class="B.A. General(Day Shift)With Geography">                     Bengali,Sociology          </option>                               
<option value="Bengali,Economics             "class="B.A. General(Day Shift)With Geography">                     Bengali,Economics          </option>                             
<option value="Bengali,Sanskrit              "class="B.A. General(Day Shift)With Geography">                     Bengali,Sanskrit           </option>                             
<option value="Bengali,Political Science     "class="B.A. General(Day Shift)With Geography">                     Bengali,Political Science  </option>                               
<option value="Hindi,History                 "class="B.A. General(Day Shift)With Geography">                     Hindi,History              </option>                           
<option value="Hindi,Sociology               "class="B.A. General(Day Shift)With Geography">                     Hindi,Sociology            </option>                             
<option value="Hindi,Economics               "class="B.A. General(Day Shift)With Geography">                     Hindi,Economics            </option>                         
<option value="Hindi,Sanskrit                "class="B.A. General(Day Shift)With Geography">                     Hindi,Sanskrit             </option>                           
<option value="Hindi,Political Science       "class="B.A. General(Day Shift)With Geography">                     Hindi,Political Science    </option>                           
<option value="History,Sanskrit              "class="B.A. General(Day Shift)With Geography">                     History,Sanskrit           </option>                             
<option value="History,Political Science     "class="B.A. General(Day Shift)With Geography">                     History,Political Science  </option>                               
<option value="Sociology,Sanskrit            "class="B.A. General(Day Shift)With Geography">                     Sociology,Sanskrit         </option>                           
<option value="Sociology,Political Science   "class="B.A. General(Day Shift)With Geography">                     Sociology,Political Science</option>                               
<option value="Economics,Sanskrit            "class="B.A. General(Day Shift)With Geography">                     Economics,Sanskrit         </option>                             
<option value="Economics,Political Science   "class="B.A. General(Day Shift)With Geography">                     Economics,Political Science</option>                         
<option value="Sanskrit,Political Science    "class="B.A. General(Day Shift)With Geography">                     Sanskrit,Political Science </option>                         
<option value="History,Bengali,Sanskrit"class="B.A. General(Day Shift)">    History,Bengali,Sanskrit</option>
<option value="History,Sanskrit,Philosophy"class="B.A. General(Day Shift)">      History,Sanskrit,Philosophy</option>
<option value="History,Political Science,English"class="B.A. General(Day Shift)">      History,Political Science,English</option>
<option value="History,Bengali,Political Science"class="B.A. General(Day Shift)">      History,Bengali,Political Science</option>
<option value="History,Bengali,English"class="B.A. General(Day Shift)">      History,Bengali,English</option>
<option value="History,Sanskrit,Bengali,"class="B.A. General(Day Shift)">      History,Sanskrit,Bengali,</option>
<option value="History,Sanskrit,Political Science"class="B.A. General(Day Shift)">      History,Sanskrit,Political Science</option>
<option value="History,Sanskrit,English"class="B.A. General(Day Shift)">      History,Sanskrit,English</option>
<option value="History,Philosophy,Bengali"class="B.A. General(Day Shift)">      History,Philosophy,Bengali</option>
<option value="History,Philosophy,Sanskrit"class="B.A. General(Day Shift)">      History,Philosophy,Sanskrit</option>
<option value="History,Philosophy,Political Science"class="B.A. General(Day Shift)">      History,Philosophy,Political Science</option>
<option value="History,Philosophy,English"class="B.A. General(Day Shift)">      History,Philosophy,English</option>
<option value="History,Political Science,English"class="B.A. General(Day Shift)">      History,Political Science,English</option>
<option value="History,Hindi,Sanskrit"class="B.A. General(Day Shift)">      History,Hindi,Sanskrit</option>
<option value="History,Hindi,Philosophy"class="B.A. General(Day Shift)">      History,Hindi,Philosophy</option>
<option value="History,Hindi,Political Science"class="B.A. General(Day Shift)">      History,Hindi,Political Science</option>
<option value="History,Hindi,English"class="B.A. General(Day Shift)">      History,Hindi,English</option>
<option value="History,Mathematics,Philosophy"class="B.A. General(Day Shift)">      History,Mathematics,Philosophy</option>
<option value="History,Mathematics,Political Science"class="B.A. General(Day Shift)">      History,Mathematics,Political Science</option>
<option value="History,Mathematics,English"class="B.A. General(Day Shift)">      History,Mathematics,English</option>
<option value="Sociology,Bengali,Sanskrit"class="B.A. General(Day Shift)">      Sociology,Bengali,Sanskrit</option>
<option value="Sociology,Sanskrit,Philosophy"class="B.A. General(Day Shift)">      Sociology,Sanskrit,Philosophy</option>
<option value="Sociology,Philosophy,Political Science"class="B.A. General(Day Shift)">      Sociology,Philosophy,Political Science</option>
<option value="Sociology,Political Science,English"class="B.A. General(Day Shift)">      Sociology,Political Science,English</option>
<option value="Sociology,Bengali,Philosophy"class="B.A. General(Day Shift)">      Sociology,Bengali,Philosophy</option>
<option value="Sociology,Bengali,Political Science"class="B.A. General(Day Shift)">      Sociology,Bengali,Political Science</option>
<option value="Sociology,Bengali,English"class="B.A. General(Day Shift)">      Sociology,Bengali,English</option>
<option value="Sociology,Sanskrit,Political Science"class="B.A. General(Day Shift)">      Sociology,Sanskrit,Political Science</option>
<option value="Sociology,Sanskrit,English"class="B.A. General(Day Shift)">      Sociology,Sanskrit,English</option>
<option value="Sociology,Philosophy,Bengali"class="B.A. General(Day Shift)">      Sociology,Philosophy,Bengali</option>
<option value="Sociology,Hindi,Sanskrit"class="B.A. General(Day Shift)">      Sociology,Hindi,Sanskrit</option>
<option value="Sociology,Hindi,Philosophy"class="B.A. General(Day Shift)">      Sociology,Hindi,Philosophy</option>
<option value="Sociology,Hindi,Political Science"class="B.A. General(Day Shift)">      Sociology,Hindi,Political Science</option>
<option value="Sociology,Hindi,English"class="B.A. General(Day Shift)">      Sociology,Hindi,English</option>
<option value="Sociology,Mathematics,Philosophy"class="B.A. General(Day Shift)">      Sociology,Mathematics,Philosophy</option>
<option value="Sociology,Mathematics,Political Science"class="B.A. General(Day Shift)">      Sociology,Mathematics,Political Science</option>
<option value="Sociology,Mathematics,English"class="B.A. General(Day Shift)">      Sociology,Mathematics,English</option>
<option value="Economics,Bengali,Sanskrit"class="B.A. General(Day Shift)">      Economics,Bengali,Sanskrit</option>
<option value="Economics,Sanskrit,Philosophy"class="B.A. General(Day Shift)">      Economics,Sanskrit,Philosophy</option>
<option value="Economics,Philosophy,Political Science"class="B.A. General(Day Shift)">      Economics,Philosophy,Political Science</option>
<option value="Economics,Political Science,English"class="B.A. General(Day Shift)">      Economics,Political Science,English</option>
<option value="Economics,Bengali,Philosophy"class="B.A. General(Day Shift)">      Economics,Bengali,Philosophy</option>
<option value="Economics,Bengali,Political Science"class="B.A. General(Day Shift)">      Economics,Bengali,Political Science</option>
<option value="Economics,Bengali,English"class="B.A. General(Day Shift)">      Economics,Bengali,English</option>
<option value="Economics,Sanskrit,Political Science"class="B.A. General(Day Shift)">      Economics,Sanskrit,Political Science</option>
<option value="Economics,Sanskrit,English"class="B.A. General(Day Shift)">      Economics,Sanskrit,English</option>
<option value="Economics,Philosophy,Bengali"class="B.A. General(Day Shift)">      Economics,Philosophy,Bengali</option>
<option value="Economics,Hindi,Sanskrit"class="B.A. General(Day Shift)">      Economics,Hindi,Sanskrit</option>
<option value="Economics,Hindi,Philosophy"class="B.A. General(Day Shift)">      Economics,Hindi,Philosophy</option>
<option value="Economics,Hindi,Political Science"class="B.A. General(Day Shift)">      Economics,Hindi,Political Science</option>
<option value="Economics,Hindi,English"class="B.A. General(Day Shift)">      Economics,Hindi,English</option>
<option value="Economics,Mathematics,Philosophy"class="B.A. General(Day Shift)">      Economics,Mathematics,Philosophy</option>
<option value="Economics,Mathematics,Political Science"class="B.A. General(Day Shift)">      Economics,Mathematics,Political Science</option>
<option value="Economics,Mathematics,English"class="B.A. General(Day Shift)">      Economics,Mathematics,English</option>
<option value="Bengali,Sanskrit,Philosophy"class="B.A. General(Day Shift)">      Bengali,Sanskrit,Philosophy</option>
<option value="Bengali,Philosophy,Political Science"class="B.A. General(Day Shift)">      Bengali,Philosophy,Political Science</option>
<option value="Bengali,Political Science,English"class="B.A. General(Day Shift)">      Bengali,Political Science,English</option>
<option value="Hindi,Sanskrit,Philosophy"class="B.A. General(Day Shift)">      Hindi,Sanskrit,Philosophy</option>
<option value="Hindi,Philosophy,Political Science"class="B.A. General(Day Shift)">      Hindi,Philosophy,Political Science</option>
<option value="Hindi,Political Science,English"class="B.A. General(Day Shift)">      Hindi,Political Science,English</option>
<option value="Sanskrit,Philosophy,Political Science"class="B.A. General(Day Shift)">      Sanskrit,Philosophy,Political Science</option>
<option value="Sanskrit,Political Science,English"class="B.A. General(Day Shift)">      Sanskrit,Political Science,English</option>
<option value="Philosophy,Political Science,English"class="B.A. General(Day Shift)">      Philosophy,Political Science,English</option>
<option value="Mathematics,Philosophy,Political Science"class="B.A. General(Day Shift)">      Mathematics,Philosophy,Political Science</option>
<option value="MathematicsPolitical Science,English"class="B.A. General(Day Shift)">      MathematicsPolitical Science,English</option>
<option value="Mathematics,History,Sociology"class="B.A. General(Day Shift)">      Mathematics,History,Sociology</option>
<option value="Mathematics,History,Economics"class="B.A. General(Day Shift)">      Mathematics,History,Economics</option>
<option value="Mathematics,Philosophy,English"class="B.A. General(Day Shift)">      Mathematics,Philosophy,English</option>
<option value="Mathematics,Philosophy,Economics"class="B.A. General(Day Shift)">      Mathematics,Philosophy,Economics</option>
<option value="Mathematics,Political Science,English"class="B.A. General(Day Shift)">      Mathematics,Political Science,English</option>
<option value="Mathematics,English,History"class="B.A. General(Day Shift)">      Mathematics,English,History</option>
 <option class="B.Sc. General[Pure. Science]"value="Mathematics, Physics, Chemistry"			>Mathematics,Physics, Chemistry</option>
 <option class="B.Sc. General[Pure. Science]"value="Mathematics , Physics, Computer Science	">	Mathematics , Physics, Computer Science</option>
 <option class="B.Sc. General[Pure. Science]"value="Mathematics, Economics, Computer Science">			Mathematics, Economics, Computer Science</option>
 <option class="B.Sc. General[Pure. Science]"value="Mathematics, Economics, Geography	"	>		Mathematics, Economics, Geography</option>
 <option class="B.Sc. General[Pure. Science]"value="Mathematics, Economics,English		"	>	Mathematics, Economics,English</option>
 <option class="B.Sc. General[Pure. Science]"value="Mathematics, Geography, History	"		>	Mathematics, Geography, History</option>
 <option class="B.Sc. General[Pure. Science]"value="Mathematics, Geography,Sociology "		>Mathematics, Geography,Sociology </option>																			
 <option class="B.Sc. General[Pure. Science]"value="Mathematics, Geography, Economics">	Mathematics, Geography, Economics</option>
<option value="Chemistry,Zoology,Botany"  class="B.Sc. General[Bio. Science]">Chemistry,Zoology,Botany</option>
<option value="Zoology,Botany,Physiology" class="B.Sc. General[Bio. Science]">Zoology,Botany,Physiology</option>
<option value="Buiness Thoughts,Ethics and Management, Business Laws,Financial Accounting " class= "B.Com. General">Buiness Thoughts,Ethics and Management, Business Laws,Financial Accounting</option>
<option value="Buiness Thoughts,Ethics and Management, Business Laws,Buiness Mathematics and Statistics"class= "B.Com. General">Buiness Thoughts,Ethics and Management, Business Laws,Buiness Mathematics and Statistics</option>
<option value="Business Laws,Financial Accounting,Business Mathematics and Statistics"class= "B.Com. General">Business Laws,Financial Accounting,Business Mathematics and Statistics</option>
</select>
		  
     
    </td>
    <td class="tg-30rh">
      <input type="text" name="gtran_id[]" id="gtranid-0" onfocus=""/>
    </td>
    <td class="tg-30rh">
      <input type="text" name="gtran_date[]" class="datepicker"/>
    </td>
    <td><a href="javascript:void(0);" class="addCF1">Add</a>
    </td>
  </tr>
</table>

<br/>
<br/>
<br/>

<div>
    <input type="submit" id="submit" name="submit" value="Submit" > 
</div>

</form>


<script>
function myFunction() {
    var x = document.getElementById("scholar").value;
    if(x === "yes")
document.getElementById("scholar_detail").type = "textarea";
    else
    document.getElementById("scholar_detail").type = "hidden";

}
function show_hide1() {
    var x = document.getElementById("previous_add").value;
    if(x === "yes")
    {document.getElementById("pv_y").type = "textarea";
	document.getElementById("pv_class").type = "textarea";
	document.getElementById("pv_roll").type = "textarea";
	document.getElementById("pv_regn").type = "textarea";
    }
	else
    {
	document.getElementById("pv_y").type = "hidden";
	document.getElementById("pv_class").type = "hidden";
	document.getElementById("pv_roll").type = "hidden";
	document.getElementById("pv_regn").type = "hidden";
}
}

</script>


<script type="text/javascript">
 

    
    function disable_select(){
     if(document.getElementById("stream").value === 'SCIENCE'){
     
            var sub1=document.getElementById("sub1_name").value;
            var sub2=document.getElementById('sub2_name').value;
            var sub3=document.getElementById('sub3_name').value;
            var sub4=document.getElementById('sub4_name').value;
            if(sub1==='MATH')
                {
                    var m_no=document.getElementById('sub1_th_om').value;
                    if (m_no<30)
               {
                   document.getElementById('ddl').options[1].disabled= true;
                          return;
               }
     
     
                }
   
               if(sub2==='MATH')
               {
                  var m_no=document.getElementById('sub2_th_om').value;
                   if (m_no<30)
                   {
                  document.getElementById('ddl').options[1].disabled= true;
                   /*'''//$("#ddl option[value='Physics']").hide();*/
                   return;
                   }
                 
                 
                }
                   if(sub3==='MATH')
                   {
                    var m_no=document.getElementById('sub3_th_om').value;
                     if (m_no<30)
                     {
                       document.getElementById('ddl').options[1].disabled= true;
                       return;
                     }
                     
                     
                   }
                   if(sub4==='MATH')
                   {
                    var m_no=document.getElementById('sub4_th_om').value;
                     if (m_no<30)
                     {
                       document.getElementById('ddl').options[1].disabled= true;
                       return;
                     }
                     
                     
                   }
            }
   return
}
//function myFunction1() {
 //  var k=confirm("Are you sure to submit ,Once submit Information can't be changed");
   // alert(k);
   // if(k=='true')
   // { $("#submit").attr("disabled", true);
   //    $('#id').submit();
		//return true;
	//	}
	//else
	// return false;	
//}


$('#id').submit(function(){
var c=confirm("Are you sure to submit? No Information can be changed after submission. Download and print the PDF file. Printed PDF file along with photocopy of testimonials are required in the college during counselling");
//alert(c);
 if(c =="true" )
  $("#submit").attr("disabled", true);
 return c;
});



//$(function(){
    // $("#submit").click(function () {
    //   $("#submit").attr("disabled", true);
    //   $('#id').submit();
    // });
   //});
        
</script>
<script>
	var jsonObj2 ={"Arts":["Political Science","Education","Journalism & Mass Comm","Philosophy","History","Geography","Computer Application","Sociology","Nutrition","Economics","Sociology","Anthropology","Psychology","Environment Studies","Sanskrit","Psychology","Pali","Mathematics","Persian","Agronomy","Arabic","Philosophy","French","Anthropology","Agronomy"],"Science":["Physics","Chemistry","Mathematics","Biological Science","Statistics","Computer Science","Geology","Nutrition","Economics","Psychology","Geography","Computer Application","Anthropology","Environment Studies","Agronomy"],"Commerce":["Accountancy","BusinessStudies","CommercialLaw&PreliminariesofAuditing","Costing&Taxation","Economics","ComputerApplication","Mathematics","BusinessOrganisation&Management","EconomicGeography","BusinessEconomicsincludingBusinessMathematics","EnvironmentStudies"]};
function updateHS() {
    var newKey2 = $("#stream").val();
    $("#hs_sub_2").empty();
     $("#hs_sub_3").empty();
     $("#hs_sub_4").empty();
     $("#hs_sub_5").empty();
    if(newKey2 in jsonObj2) {
        var tmp = jsonObj2[newKey2];
        
        for(i = 0; i < tmp.length; i++)
        {
            $("<option>")
                .attr('value',tmp[i])
                .html(tmp[i])
                .appendTo('#hs_sub_2');
        }
    }
    
    
     if(newKey2 in jsonObj2) {
        var tmp = jsonObj2[newKey2];
        
        for(i = 0; i < tmp.length; i++)
        {
            $("<option>")
                .attr('value',tmp[i])
                .html(tmp[i])
                .appendTo('#hs_sub_3');
        }
    }
    
     if(newKey2 in jsonObj2) {
        var tmp = jsonObj2[newKey2];
        
        for(i = 0; i < tmp.length; i++)
        {
            $("<option>")
                .attr('value',tmp[i])
                .html(tmp[i])
                .appendTo('#hs_sub_4');
        }
    }
    
     if(newKey2 in jsonObj2) {
        var tmp = jsonObj2[newKey2];
        
        for(i = 0; i < tmp.length; i++)
        {
            $("<option>")
                .attr('value',tmp[i])
                .html(tmp[i])
                .appendTo('#hs_sub_5');
        }
    }
    
}

$(document).ready(function() { 
 	$("#stream").change(updateHS);
    updateHS(); // For initial page load.
});
</script>






<script>
var x = 1;

$(document).ready(function() {
  $(".addCF").click(function() {
    $("#custom-fields").append([
      '<tr>',
      '<td class="tg-30rh">',
      '<select name ="hons[]" id="' + 'select1-' + x + '">',
        '<option value="Hindi"  >Hindi  </option>',
        '<option value="Bengali">Bengali</option>',
        '<option value="English">English</option>',
        '<option value="History">History</option>',
        '<option value="Political Science">Political Science</option>',
        '<option value="Philosophy">Philosophy</option>',
        '<option value="Sanskrit">Sanskrit</option>',
        '<option value="Geography(Arts)">Geography (Arts)</option>',
        '<option value="Economics(Arts)">Economics (Arts)</option>',
        '<option value="Physics">Physics</option>',
        '<option value="Chemistry">Chemistry</option>',
        '<option value="Mathematics">Mathematics</option>',
        '<option value="Zoology">Zoology</option>',
        '<option value="Botany">Botany</option>',
        '<option value="Geography(Science)">Geography (Science)</option>',
        '<option value="Economics(Science)">Economics (Science)</option>',
        '<option value="Accountancy">Accountancy</option>',      
      '</select> ',
      '<!--select id="ddl2" name="session[]"></select-->',
      '</td>',
      '<td class="tg-30rh">',
      '<select name="sub1[]" id="select2-' + x + '"></select>',
      '</td>',
      '<td class="tg-30rh">',
      '<select name="sub2[]" id="select3-' + x + '"></select>',
      '</td>',
      '<td class="tg-30rh">',
      '<select name="sub3[]" id="select4-' + x + '"></select>',
      '</td>',
      '<td class="tg-30rh">',
      '<select name="sub4[]" id="select5-' + x + '"></select>',
      '</td>',
      '<td class="tg-30rh">',
      '<input type="text" name="tran_id[]" id="tranid-' + x + '"onfocus="checkDuplicatesHons('+x+')""/>',
      '</td>',
      '<td class ="tg-30rh">',
      '<input type="text" name="tran_date[]" class="datepicker"/>',
      '</td>',
      '<td>',
      '<a href="javascript:void(0);" class="remCF">Remove</a>',
      '</td>',
      '</tr>'
    ].join(''));

    $('#select1-' + x).trigger('change');

    x++;
  });
  $("#custom-fields").on('click', '.remCF', function() {
    $(this).parent().parent().remove();
  });
});


var jsonObj = {"Hindi":[["History","Sociology","Economics",""],"Philosophy","Political Science","English"],"Bengali":[["History","Sociology",""],"Sanskrit","Philosophy","Political Science"],"English":[["History","Sociology","Economics",""],"Philosophy","Political Science",["Bengali","Hindi",""]],"History":["Philosophy"," Political Science",["Bengali"," Hindi",""]," English"],"Political Science":[[" History "," Sociology"," Economics",""],"Philosophy",["Bengali "," Hindi",""],"English"],"Philosophy":[[" History"," Sociology",""]," Sanskrit","Political Science",["Bengali","Hindi",""]],"Sanskrit":[["History","Sociology",""],"Philosophy","Bengali","English"],"Geography(Arts)":[["History "," Sociology",""],"Political Science",["Bengali","Hindi",""],"Sanskrit"],"Economics(Arts)":[["Bengali","Hindi",""],"Political Science","Philosophy","English"],"Physics":["Mathematics",["Chemistry"," Computer Science",""],"",""],"Chemistry":["Mathematics","Physics","",""],"Mathematics":[["Physics","Economics",""],["Chemistry(With Physics)","Computer Science(With Physics)",""],"Philosophy(With Eco/Pol.Sc.)","Political Science(With Eco/Phil.)"],"Zoology":["Botany",["Chemistry "," Physiology",""],"",""],"Botany":["Zoology",["Chemistry","Physiology",""],"",""],"Geography(Science)":["Mathematics","Economics","",""],"Economics(Science)":["Mathematics",["Computer Science","Political Science",""],"",""],"Accountancy":[["Business Thoughts","Ethics and Management"],"Business Laws","",""]};

function updateSelect(e) {
  var targetId = e.target.id;
  var id = parseInt(targetId.match(/[\w\d]+\-(\d+)$/)[1], 10);

  var getOpts = function(raw) {
    raw = Array.isArray(raw) ? raw : [raw, ''];

    return raw.map(function(obj) {
      return new Option(obj, obj);
    });
  };

  var newKey = $('#select1-' + id).val();

  var mappings = [2, 3, 4, 5].reduce(function(map, val, index) {
    var key = '#select' + val + '-' + id;
    map[key] = index;
    return map;
  }, {});

  var selected = jsonObj[newKey];

  $.each(mappings, function (selector, index) {
    $(selector).empty().append(getOpts(selected[index]));
  });
}

$(document).ready(function() {
  $('#custom-fields').on('change', 'select[id^="select1-"]', updateSelect);     
  $('#select1-0').trigger('change'); // For initial page load.
});





</script>

<script>
	function checkDuplicates() {
  var selects = document.getElementsByTagName("select"),
      i,
      current,
      selected = {};
  for(i = 8; i <= 11; i++){
    current = selects[i].selectedIndex;
    if (selected[current]) {
      alert("Each Subject should be selected once.");
      return false;
    } else
      selected[current] = true;
  }
  return true;
}

function checkDuplicatesHons(id) {
	var k=13+5*parseInt(id);
	//alert(k);
  var selects = document.getElementsByTagName("select"),
      i,
      current,
      selected = {},flag=0;
      
  for(i = k; i <= k+3; i++){
    //current = selects[i].selectedIndex;
     
    current = selects[i].options[selects[i].selectedIndex].value;//for selecting actual value
    if(current=="")
      flag=flag+1;
   
   
   // alert(current);
    //if (selected[current]) {
     // alert("Each Subject should be selected once.");
     // return false;
  //  } else
     // selected[current] = true;
  }
  if(flag==2)
  return true;
  else 
    {  alert("Select two subject,Leave 2 blank");
      return false;}
}

function applysto(){
if(!($("#apply_gen" ).prop( "checked" ) || $( "#apply_hons" ).prop( "checked" )))
{
alert("Select Applying for Honours or General or Both");
}
}
</script>
<script>
	// -----------------Dynamically add row in general selection '''
var m = 1;

$(document).ready(function() {
  $(".addCF1").click(function() {
    $("#custom-fields1").append([
       '<tr>',
    '<td class="tg-30rh">',
    
    
    ' <select id ="general_stream-'+m+'" name="general-stream[]"  onclick="">',
		 ' <option value="B.A. General(Day Shift)" >B.A. General(Day Shift)</option>',
		 ' <option value="B.A. General(Day Shift)With Geography" >B.A. General(Day Shift)With Geography</option>',
		  '<option value="B.A. General(Morning Shift)"> B.A. General(Morning Shift)</option>',
		  '<option value="B.Sc. General[Pure. Science]">B.Sc. General [Pure. Science]</option>',
	      '<option value="B.Sc. General[Bio. Science]">B.Sc. General[Bio. Science]</option>',
	      '<option value="B.Com. General"> B.Com. General</option>',
	  '</select>', 
      '</td>',
	  '<td class="tg-30rh">',
	   '<select name="GeneralSub[]" id= "gen_select-'+m+'" >',
		'<option value="Bengali,English,Pol.Sc." class="B.A. General(Morning Shift)"> Bengali,English,     Pol.Sc. </option>',
		'<option value="Bengali,English,Physical Education " class="B.A. General(Morning Shift)"> Bengali,English,     Physical Education </option>',
		'<option value="Bengali,English,Philosophy"  class="B.A. General(Morning Shift)"> Bengali,English,     Philosophy     </option>       ' ,
		'<option value="Bengali,English,History" class="B.A. General(Morning Shift)"> Bengali,English,     History    </option>      ' ,   
		'<option value="Bengali,English,Physical Education" class="B.A. General(Morning Shift)"> Bengali,English,     Physical Education     </option> ',       
		'<option value="Bengali,English,Economics" class="B.A. General(Morning Shift)"> Bengali,English,     Economics            </option>',   
		'<option value="Bengali,English,Physical Education" class="B.A. General(Morning Shift)"> Bengali,English,     Physical Education    </option> ',      
		'<option value="Bengali,Pol.Sc.,Philosophy" class="B.A. General(Morning Shift)"> Bengali,Pol.Sc.,     Philosophy         </option>  ', 
		'<option value="Bengali,Pol.Sc.,History" class="B.A. General(Morning Shift)"> Bengali,Pol.Sc.,     History            </option> ',    
		'<option value="Bengali,Pol.Sc.,Physical Education" class="B.A. General(Morning Shift)"> Bengali,Pol.Sc.,     Physical Education</option>    ',     
		'<option value="Bengali Pol.Sc.,Economics "class="B.A. General(Morning Shift)"> Bengali Pol.Sc.,     Economics        </option>     ',
		'<option value="Bengali Pol.Sc.,Physical Education "class="B.A. General(Morning Shift)"> Bengali Pol.Sc.,     Physical Education  </option>   ',        
		'<option value="Bengali,Philosophy,Economics  "class="B.A. General(Morning Shift)"> Bengali,Philosophy,  Economics        </option>  ',
		'<option value="English,Philosophy,Economics  "class="B.A. General(Morning Shift)"> English,Philosophy,  Economics         </option>  ',   
		'<option value="English,Pol.Sc.,History  "class="B.A. General(Morning Shift)"> English,Pol.Sc.,     History           </option>   ',          
		'<option value="English,Pol.Sc.,  Physical Education " class="B.A. General(Morning Shift)"> English,Pol.Sc.,     Physical Education </option>   ',     
		'<option value="English,Pol.Sc.,Economics" class="B.A. General(Morning Shift)"> English,Pol.Sc.,     Economics         </option>',   
		'<option value="English,Pol.Sc.,Physical Education" class="B.A. General(Morning Shift)"> English,Pol.Sc.,     Physical Education </option>   ',        
		'<option value="Bengali,Philosophy,  History" class="B.A. General(Morning Shift)"> Bengali,Philosophy,  History           </option>  ',   
		'<option value="English,Philosophy,  History  " class="B.A. General(Morning Shift)"> English,Philosophy,  History           </option> ',  
		'<option value="English,Pol.Sc.,     Philosophy " class="B.A. General(Morning Shift)"> English,Pol.Sc.,     Philosophy        </option> ', 
		'<option value="Pol.Sc.,Philosophy,  Economics  " class="B.A. General(Morning Shift)"> Pol.Sc.,Philosophy,  Economics          </option> ', 
		'<option value="Pol.Sc.,Philosophy,  History " class="B.A. General(Morning Shift)"> Pol.Sc.,Philosophy,  History</option>  ',
 '<option value="Bengali,History " class="B.A. General(Day Shift)With Geography">                     Bengali,History            </option>',
'<option value="Bengali,Sociology             "class="B.A. General(Day Shift)With Geography">                     Bengali,Sociology          </option>',                               
'<option value="Bengali,Economics             "class="B.A. General(Day Shift)With Geography">                     Bengali,Economics          </option>',                             
'<option value="Bengali,Sanskrit              "class="B.A. General(Day Shift)With Geography">                     Bengali,Sanskrit           </option>',                             
'<option value="Bengali,Political Science     "class="B.A. General(Day Shift)With Geography">                     Bengali,Political Science  </option>',                               
'<option value="Hindi,History                 "class="B.A. General(Day Shift)With Geography">                     Hindi,History              </option>',                           
'<option value="Hindi,Sociology               "class="B.A. General(Day Shift)With Geography">                     Hindi,Sociology            </option>',                             
'<option value="Hindi,Economics               "class="B.A. General(Day Shift)With Geography">                     Hindi,Economics            </option>',                         
'<option value="Hindi,Sanskrit                "class="B.A. General(Day Shift)With Geography">                     Hindi,Sanskrit             </option>',                           
'<option value="Hindi,Political Science       "class="B.A. General(Day Shift)With Geography">                     Hindi,Political Science    </option>',                           
'<option value="History,Sanskrit              "class="B.A. General(Day Shift)With Geography">                     History,Sanskrit           </option>',                             
'<option value="History,Political Science     "class="B.A. General(Day Shift)With Geography">                     History,Political Science  </option>',                               
'<option value="Sociology,Sanskrit            "class="B.A. General(Day Shift)With Geography">                     Sociology,Sanskrit         </option>',                           
'<option value="Sociology,Political Science   "class="B.A. General(Day Shift)With Geography">                     Sociology,Political Science</option>',                               
'<option value="Economics,Sanskrit            "class="B.A. General(Day Shift)With Geography">                     Economics,Sanskrit         </option>',                             
'<option value="Economics,Political Science   "class="B.A. General(Day Shift)With Geography">                     Economics,Political Science</option>',                         
'<option value="Sanskrit,Political Science    "class="B.A. General(Day Shift)With Geography">                     Sanskrit,Political Science </option>',                         
'<option value="History,Bengali,Sanskrit"class="B.A. General(Day Shift)">    History,Bengali,Sanskrit</option>',
'<option value="History,Sanskrit,Philosophy"class="B.A. General(Day Shift)">      History,Sanskrit,Philosophy</option>',
'<option value="History,Political Science,English"class="B.A. General(Day Shift)">      History,Political Science,English</option>',
'<option value="History,Bengali,Political Science"class="B.A. General(Day Shift)">      History,Bengali,Political Science</option>',
'<option value="History,Bengali,English"class="B.A. General(Day Shift)">      History,Bengali,English</option>',
'<option value="History,Sanskrit,Bengali,"class="B.A. General(Day Shift)">      History,Sanskrit,Bengali,</option>',
'<option value="History,Sanskrit,Political Science"class="B.A. General(Day Shift)">      History,Sanskrit,Political Science</option>',
'<option value="History,Sanskrit,English"class="B.A. General(Day Shift)">      History,Sanskrit,English</option>',
'<option value="History,Philosophy,Bengali"class="B.A. General(Day Shift)">      History,Philosophy,Bengali</option>',
'<option value="History,Philosophy,Sanskrit"class="B.A. General(Day Shift)">      History,Philosophy,Sanskrit</option>',
'<option value="History,Philosophy,Political Science"class="B.A. General(Day Shift)">      History,Philosophy,Political Science</option>',
'<option value="History,Philosophy,English"class="B.A. General(Day Shift)">      History,Philosophy,English</option>',
'<option value="History,Political Science,English"class="B.A. General(Day Shift)">      History,Political Science,English</option>',
'<option value="History,Hindi,Sanskrit"class="B.A. General(Day Shift)">      History,Hindi,Sanskrit</option>',
'<option value="History,Hindi,Philosophy"class="B.A. General(Day Shift)">      History,Hindi,Philosophy</option>',
'<option value="History,Hindi,Political Science"class="B.A. General(Day Shift)">      History,Hindi,Political Science</option>',
'<option value="History,Hindi,English"class="B.A. General(Day Shift)">      History,Hindi,English</option>',
'<option value="History,Mathematics,Philosophy"class="B.A. General(Day Shift)">      History,Mathematics,Philosophy</option>',
'<option value="History,Mathematics,Political Science"class="B.A. General(Day Shift)">      History,Mathematics,Political Science</option>',
'<option value="History,Mathematics,English"class="B.A. General(Day Shift)">      History,Mathematics,English</option>',
'<option value="Sociology,Bengali,Sanskrit"class="B.A. General(Day Shift)">      Sociology,Bengali,Sanskrit</option>',
'<option value="Sociology,Sanskrit,Philosophy"class="B.A. General(Day Shift)">      Sociology,Sanskrit,Philosophy</option>',
'<option value="Sociology,Philosophy,Political Science"class="B.A. General(Day Shift)">      Sociology,Philosophy,Political Science</option>',
'<option value="Sociology,Political Science,English"class="B.A. General(Day Shift)">      Sociology,Political Science,English</option>',
'<option value="Sociology,Bengali,Philosophy"class="B.A. General(Day Shift)">      Sociology,Bengali,Philosophy</option>',
'<option value="Sociology,Bengali,Political Science"class="B.A. General(Day Shift)">      Sociology,Bengali,Political Science</option>',
'<option value="Sociology,Bengali,English"class="B.A. General(Day Shift)">      Sociology,Bengali,English</option>',
'<option value="Sociology,Sanskrit,Political Science"class="B.A. General(Day Shift)">      Sociology,Sanskrit,Political Science</option>',
'<option value="Sociology,Sanskrit,English"class="B.A. General(Day Shift)">      Sociology,Sanskrit,English</option>',
'<option value="Sociology,Philosophy,Bengali"class="B.A. General(Day Shift)">      Sociology,Philosophy,Bengali</option>',
'<option value="Sociology,Hindi,Sanskrit"class="B.A. General(Day Shift)">      Sociology,Hindi,Sanskrit</option>',
'<option value="Sociology,Hindi,Philosophy"class="B.A. General(Day Shift)">      Sociology,Hindi,Philosophy</option>',
'<option value="Sociology,Hindi,Political Science"class="B.A. General(Day Shift)">      Sociology,Hindi,Political Science</option>',
'<option value="Sociology,Hindi,English"class="B.A. General(Day Shift)">      Sociology,Hindi,English</option>',
'<option value="Sociology,Mathematics,Philosophy"class="B.A. General(Day Shift)">      Sociology,Mathematics,Philosophy</option>',
'<option value="Sociology,Mathematics,Political Science"class="B.A. General(Day Shift)">      Sociology,Mathematics,Political Science</option>',
'<option value="Sociology,Mathematics,English"class="B.A. General(Day Shift)">      Sociology,Mathematics,English</option>',
'<option value="Economics,Bengali,Sanskrit"class="B.A. General(Day Shift)">      Economics,Bengali,Sanskrit</option>',
'<option value="Economics,Sanskrit,Philosophy"class="B.A. General(Day Shift)">      Economics,Sanskrit,Philosophy</option>',
'<option value="Economics,Philosophy,Political Science"class="B.A. General(Day Shift)">      Economics,Philosophy,Political Science</option>',
'<option value="Economics,Political Science,English"class="B.A. General(Day Shift)">      Economics,Political Science,English</option>',
'<option value="Economics,Bengali,Philosophy"class="B.A. General(Day Shift)">      Economics,Bengali,Philosophy</option>',
'<option value="Economics,Bengali,Political Science"class="B.A. General(Day Shift)">      Economics,Bengali,Political Science</option>',
'<option value="Economics,Bengali,English"class="B.A. General(Day Shift)">      Economics,Bengali,English</option>',
'<option value="Economics,Sanskrit,Political Science"class="B.A. General(Day Shift)">      Economics,Sanskrit,Political Science</option>',
'<option value="Economics,Sanskrit,English"class="B.A. General(Day Shift)">      Economics,Sanskrit,English</option>',
'<option value="Economics,Philosophy,Bengali"class="B.A. General(Day Shift)">      Economics,Philosophy,Bengali</option>',
'<option value="Economics,Hindi,Sanskrit"class="B.A. General(Day Shift)">      Economics,Hindi,Sanskrit</option>',
'<option value="Economics,Hindi,Philosophy"class="B.A. General(Day Shift)">      Economics,Hindi,Philosophy</option>',
'<option value="Economics,Hindi,Political Science"class="B.A. General(Day Shift)">      Economics,Hindi,Political Science</option>',
'<option value="Economics,Hindi,English"class="B.A. General(Day Shift)">      Economics,Hindi,English</option>',
'<option value="Economics,Mathematics,Philosophy"class="B.A. General(Day Shift)">      Economics,Mathematics,Philosophy</option>',
'<option value="Economics,Mathematics,Political Science"class="B.A. General(Day Shift)">      Economics,Mathematics,Political Science</option>',
'<option value="Economics,Mathematics,English"class="B.A. General(Day Shift)">      Economics,Mathematics,English</option>',
'<option value="Bengali,Sanskrit,Philosophy"class="B.A. General(Day Shift)">      Bengali,Sanskrit,Philosophy</option>',
'<option value="Bengali,Philosophy,Political Science"class="B.A. General(Day Shift)">      Bengali,Philosophy,Political Science</option>',
'<option value="Bengali,Political Science,English"class="B.A. General(Day Shift)">      Bengali,Political Science,English</option>',
'<option value="Hindi,Sanskrit,Philosophy"class="B.A. General(Day Shift)">      Hindi,Sanskrit,Philosophy</option>',
'<option value="Hindi,Philosophy,Political Science"class="B.A. General(Day Shift)">      Hindi,Philosophy,Political Science</option>',
'<option value="Hindi,Political Science,English"class="B.A. General(Day Shift)">      Hindi,Political Science,English</option>',
'<option value="Sanskrit,Philosophy,Political Science"class="B.A. General(Day Shift)">      Sanskrit,Philosophy,Political Science</option>',
'<option value="Sanskrit,Political Science,English"class="B.A. General(Day Shift)">      Sanskrit,Political Science,English</option>',
'<option value="Philosophy,Political Science,English"class="B.A. General(Day Shift)">      Philosophy,Political Science,English</option>',
'<option value="Mathematics,Philosophy,Political Science"class="B.A. General(Day Shift)">      Mathematics,Philosophy,Political Science</option>',
'<option value="MathematicsPolitical Science,English"class="B.A. General(Day Shift)">      MathematicsPolitical Science,English</option>',
'<option value="Mathematics,History,Sociology"class="B.A. General(Day Shift)">      Mathematics,History,Sociology</option>',
'<option value="Mathematics,History,Economics"class="B.A. General(Day Shift)">      Mathematics,History,Economics</option>',
'<option value="Mathematics,Philosophy,English"class="B.A. General(Day Shift)">      Mathematics,Philosophy,English</option>',
'<option value="Mathematics,Philosophy,Economics"class="B.A. General(Day Shift)">      Mathematics,Philosophy,Economics</option>',
'<option value="Mathematics,Political Science,English"class="B.A. General(Day Shift)">      Mathematics,Political Science,English</option>',
'<option value="Mathematics,English,History"class="B.A. General(Day Shift)">      Mathematics,English,History</option>',
 '<option class="B.Sc. General[Pure. Science]"value="Mathematics, Physics, Chemistry"	>Mathematics,Physics, Chemistry</option>',
 '<option class="B.Sc. General[Pure. Science]"value="Mathematics , Physics, Computer Science"	>	Mathematics , Physics, Computer Science</option>',
 '<option class="B.Sc. General[Pure. Science]"value="Mathematics, Economics, Computer Science">			Mathematics, Economics, Computer Science</option>',
 '<option class="B.Sc. General[Pure. Science]"value="Mathematics, Economics, Geography	"	>		Mathematics, Economics, Geography</option>',
 '<option class="B.Sc. General[Pure. Science]"value="Mathematics, Economics,English	">	Mathematics, Economics,English</option>',
 '<option class="B.Sc. General[Pure. Science]"value="Mathematics, Geography, History	">	Mathematics, Geography, History</option>',
' <option class="B.Sc. General[Pure. Science]"value="Mathematics, Geography,Sociology 	">			Mathematics, Geography,Sociology 	</option>	',																		
 '<option class="B.Sc. General[Pure. Science]"value="Mathematics, Geography, Economics	"	>	Mathematics, Geography, Economics</option>',
'<option value="Chemistry,Zoology,Botany" class="B.Sc. General[Bio. Science]">Chemistry,Zoology,Botany</option>',
'<option value="Zoology,Botany,Physiology" class="B.Sc. General[Bio. Science]">Zoology,Botany,Physiology</option>',
	'<option value="Buiness Thoughts,Ethics and Management, Business Laws,Financial Accounting " class= "B.Com. General">Buiness Thoughts,Ethics and Management, Business Laws,Financial Accounting</option>',
'<option value="Buiness Thoughts,Ethics and Management, Business Laws,Buiness Mathematics and Statistics"class= "B.Com. General">Buiness Thoughts,Ethics and Management, Business Laws,Buiness Mathematics and Statistics</option>',
'<option value="Business Laws,Financial Accounting,Business Mathematics and Statistics"class= "B.Com. General">Business Laws,Financial Accounting,Business Mathematics and Statistics</option>',
	'</select>',
      '</td>',
      '<td class="tg-30rh">',
      ' <input type="text" name="gtran_id[]" id="gtranid-'+m+'" onfocus=""/>',
      '</td>',
      '<td class="tg-30rh">',
      ' <input type="text" name="gtran_date[]"class="datepicker" />',
      '</td>',
      '<td><a href="javascript:void(0);" class="remCF1">Remove</a>',
      '</td>',
      '</tr>',
    ].join(''));
        
        $('#gen_select-'+m).chained('#general_stream-'+m); 

    m++;
  });
  $("#custom-fields1").on('click', '.remCF1', function() {
    $(this).parent().parent().remove();
  });
        $('#gen_select-0').chained('#general_stream-0'); 
});
	
	//$(function() {
    //$('select[name="general_stream[]"]').each(function() {
      //  var id = this.getAttribute('id');
       // $('#gen_select-'+id.substr(15,1)).chained('#'+id); 
    //});
//});
	
	
	
	</script>
<script>

$('body').on('focus',".datepicker", function(){
    $(this).datepicker();
});
$(function() {
    $( "#dob" ).datepicker();
  });
</script>

 <script>
  // When the browser is ready...
  $(function() {
  
    // Setup form validation on the #register-form element
    $("#id").validate({
    
        // Specify the validation rules
        rules: {
            f_name: "required",
            m_name: "required",
            gender: "required",
			blood_gr:{
			required:true,
			minlength:2,
			maxlength:3
                     },
			dob:"required",
			category:"required",
			ph:"required",
			religion:"required",
			minority:"required",
			nationality:"required",
			name_of_last_school:"required",
			bpl:"required",
			address:"required",
			lg:"required",
			address_lg:"required",
			scholar:"required",
			previous_add:"required",
			lang1_th_fm : {number:true},
			lang1_pr_fm : {number:true},
			lang2_th_fm : {required:true,number:true},
			lang2_pr_fm : {number:true},
			sub1_th_fm:{required:true,number:true},
			sub1_pr_fm:{number:true},
			sub2_th_fm:{required:true,number:true},
			sub2_pr_fm:{number:true},
			sub3_th_fm:{required:true,number:true},
			sub3_pr_fm:{number:true},
			sub4_th_fm:{required:true,number:true},
			sub4_pr_fm:{number:true},
			lang1_th_om:{number:true},
			lang1_pr_om:{number:true},
			lang2_th_om: {required:true,number:true},
            lang2_pr_om: {number:true},
            sub1_th_om:{required:true,number:true},
            sub1_pr_om:{number:true},
            sub2_th_om:{required:true,number:true},
            sub2_pr_om:{number:true},
            sub3_th_om:{required:true,number:true},
            sub3_pr_om:{number:true},
            sub4_th_om:{required:true,number:true},
            sub4_pr_om:{number:true}
			
        },
        
        // Specify the validation error messages
            messages: {
            f_name: "Please enter your Father's name",
            m_name: "Please enter your Mothers' name",
            gender: "Please select Gender",         
			blood_gr: "Please enter Blood Group",                      
			dob: "Please Enter Your Date of Birth",                
			category:"Please Enter Category You belong" ,           
			ph:    "Please Select An option"            ,  
			religion:"Please Enter your religion"       ,     
			minority: "Please select the appropriate option"  ,         
			nationality:  "Enter your Nationality"       ,
			name_of_last_school: "name of school you last attend",
			bpl: "Please Select an Option "                ,
			address: "Please Enter Permanent Postal Address ",
			pin: "Please Enter PIN code",
			lg:       "Please Enter your Local Guardian name",           
			address_lg:"Please Enter address of your local guardian ",          
			scholar:   "Please Select appropriate Option" ,         
			previous_add:"Please enter Previous admission if any else enter No",        
			lang1_th_fm:  "Enter Th Full Marks ",          
			lang2_th_fm:  "Enter Th Full Marks", 
            lang1_pr_fm:"Enter Pr Full Marks ",
            lang2_pr_fm:"Enter Pr Full Marks",		
			sub1_th_fm: "Enter Th Full Marks",         
			sub1_pr_fm: "Enter Pr Full Marks",         
			sub2_th_fm:  "Enter  Th Full Marks",        
			sub2_pr_fm:  "Enter Pr Full Marks",        
			sub3_th_fm:  "Enter  Th Full Marks",        
			sub3_pr_fm:   "Enter Pr Full Marks",       
			sub4_th_fm:   "Enter  Th Full Marks",       
			sub4_pr_fm:  "Enter Pr Full Marks",        
			lang1_th_om:  "Enter Th Om Marks ",          
			lang2_th_om:  "Enter Th Om Marks", 
            lang1_pr_om: "Enter Pr Om Marks ",
            lang2_pr_om: "Enter Pr Om Marks",	    
			sub1_th_om:    "Enter  Marks Obtained  ",      
			sub1_pr_om:   "Enter  Marks Obtained  ",       
			sub2_th_om:    "Enter  Marks Obtained  ",      
			sub2_pr_om:    "Enter  Marks Obtained  ",      
			sub3_th_om:    "Enter  Marks Obtained  ",      
			sub3_pr_om:    "Enter  Marks Obtained  ",      
			sub4_th_om:   "Enter  Marks Obtained  ",       
			sub4_pr_om:    "Enter  Marks Obtained  "
			
        },
        
        submitHandler: function(form) {
            form.submit();
        }
    });

  });
</script>
</body>
</html>
    
