<?php
$dept_name=$_GET['dept_name'];
//echo "<a href=\"gen_list.php?dept_name=$dept_name\">Click To See General List</a><br/>";
//echo "<a href=\"sc_list.php?dept_name=$dept_name\">Click To See SC List</a><br/>";
//echo "<a href=\"st_list.php?dept_name=$dept_name\">Click To See ST List</a><br/>";
//echo "<a href=\"obc_a_list.php?dept_name=$dept_name\">Click To See OBC-A List</a><br/>";
//echo "<a href=\"obc_b_list.php?dept_name=$dept_name\">Click To See OBC-B List</a><br/>"; 
?>
<html>
<head>
	<script src="jquery.min.js"></script>
	<script src="jquery.chained.min.js"></script> 
	
	
	
	
	
	
<script>
function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
		var board=document.getElementById('board').value;
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET",str.toLowerCase()+"_list.php?dept_name=<?php echo strtolower($dept_name);?>&category="+str+"&board="+board,true);
        xmlhttp.send();
    }
}
</script>
</head>
<body>

<form>
<select name="board" id="board" onchange="showUser(document.getElementById('user').value)"  >
<option value="wbchse">WBCHSE</option>
<option value="other">OTHER</option>
</select>	
	
	
	
	
	
<select name="users" onchange="showUser(this.value)" id="user">
  <option value="">Select a Category:</option>
  <option value="GEN">GEN</option>
  <option value="GEN_PH">GEN-PH</option>
  
  
  <option value="SC">SC</option>
  <option value="SC_PH">SC-PH</option>
  <option value="ST">ST</option>
  <option value="ST_PH">ST-PH</option>
  
  <option value="OBC_A">OBC-A</option>
  <option value="OBC_A_PH">OBC-A PH</option>
  <option value="OBC_B">OBC-B</option>
  <option value="OBC_B_PH">OBC-B PH</option>
  </select>
</form>
<br>
<div id="txtHint"><b>Selected category list will be shown here</b></div>

</body>
</html>
