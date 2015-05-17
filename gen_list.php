
<?php

// Inialize session

// Include database connection settings

include 'connect.php';


$dept_name=$_GET['dept_name'];
$board=$_GET['board'];
$category=$_GET['category'];


echo  $dept_name." department ";
echo "<p>Total no of Available seat 50</p>";


//$sql="SELECT * from `".$dept_name."_honours` order by merit_point DESC";

if($board=='wbchse'){
//$sql="SELECT * from `".$dept_name."_honours`,student_tran where  board='wbchse' and order by merit_point DESC";
$sql="SELECT * from `".$dept_name."_honours` as p,`student_tran` as s ,main as t,auth as f where p.board='wbchse' and s.subject_id=p.subject_id and s.student_id=t.student_id and s.student_id=f.student_id order by merit_point DESC";

}
else{
	
//	$sql="SELECT * from `".$dept_name."_honours` where  board <>'wbchse' order by merit_point DESC";

$sql="SELECT * from `".$dept_name."_honours` as p,`student_tran` as s ,main as t,auth as f where p.board<>'wbchse' and s.subject_id=p.subject_id and s.student_id=t.student_id and s.student_id=f.student_id order by merit_point DESC";

	}
	
echo $sql;

$result=mysqli_query($conn,$sql);

$result=mysqli_query($conn,$sql);

$rowno = 1;
echo"<table border='1'>
<tr>
	<th>Rank</th>
		<th>Form No</th>
		<th>Student Name</th>
		<th>Sex</th>
        <th>Board<t/h>
        <th>Year Of Passing</th>
        <th>Merit Point</th> 
        <th>Remarks</th>
        <th>Physical Disability</th>
        
</tr>";
		
		
	while($row = @mysqli_fetch_array($result))
{
echo "<tr>";
	echo"<td>".$rowno."</td>";	
	echo "<td>".$row['serial_no']."</td>";
	echo"<td>".$row['student_name']."</td>";
	echo "<td>".$row['gender'];
     echo"<td>".$row['board']."</td>";
     echo "<td>".$row['year_of_passing']."</td>";	
	echo"<td>".$row['merit_point']."</td>";
	echo"<td>".$row['category']."</td>";
	echo"<td>".$row['ph']."</td>";
	
echo "</tr>";
$rowno=$rowno+1;
}
echo "</table>";		
 // mysqli_close($conn); 
?>
