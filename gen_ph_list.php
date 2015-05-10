
<?php

// Inialize session

// Include database connection settings

include 'connect.php';


$dept_name=$_GET['dept_name'];
$board=$_GET['board'];

$category=$_GET['category'];


echo  $dept_name." department ";
echo "<p>Total no of Available seat 50</p>";

if($board=='wbchse'){
$sql="SELECT * from `".$dept_name."_honours` where ph='yes' and board='wbchse' order by merit_point DESC";
}
else{
	
	$sql="SELECT * from `".$dept_name."_honours` where ph='yes' and board <>'wbchse' order by merit_point DESC";
	}
	
	
$result=mysqli_query($conn,$sql);

$rowno = 1;
echo"<table border='1'>
<tr>
	<th>Rank</th>
	<th>Student Name</th>
        <th>Board<t/h>
        <th>Merit Point</th> 
        <th>Category</th>
        <th>Physical Disability</th>
        <th>Remarks</th>
</tr>";
		
		
	while($row = @mysqli_fetch_array($result))
{
echo "<tr>";
	echo"<td>".$rowno."</td>";	
	echo"<td>".$row['student_name']."</td>";
     echo"<td>".$row['board']."</td>";
	
	echo"<td>".$row['merit_point']."</td>";
	echo"<td>".$row['category']."</td>";
	echo"<td>".$row['ph']."</td>";
	echo"<td>".$row['Remarks']."</td>";
echo "</tr>";		
$rowno=$rowno+1;
}
echo "</table>";		
 // mysqli_close($conn); 
?>
