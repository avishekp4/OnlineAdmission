
<?php

// Inialize session

// Include database connection settings

include 'connect.php';


$dept_name=$_GET['dept_name'];
$board=$_GET['board'];
$category=$_GET['category'];

echo "Principal In Department View<br>";
echo  $dept_name." Department ";

echo "<p>Total no of Available  Seat </p>";



//$sql="SELECT * from `".$dept_name."_honours` order by merit_point DESC";

if($board=='wbchse'){

$sql="SELECT * from `".$dept_name."` where  board='wbchse' order by aggr DESC";
//echo"<br>".$sql;
}
else{
	
	$sql="SELECT * from `".$dept_name."` where  board <>'wbchse' order by aggr DESC";
	}
	


$result=mysqli_query($conn,$sql);

$result=mysqli_query($conn,$sql);

$rowno = 1;
echo"<table border='1'>
<tr>
	<th>Rank</th>
	<th>Student Name</th>
        <th>Board<t/h>
        <th>Aggregate</th> 
        <th>Category</th>
        <th>Physical Disability</th>
        <th>Remarks</th>
</tr>";
		
		
	while($row = @mysqli_fetch_array($result))
{
echo "<tr>";
	echo"<td>".$rowno."</td>";	
	echo"<td>".$row['name']."</td>";
     echo"<td>".$row['board']."</td>";
	
	echo"<td>".$row['aggr']."</td>";
	echo"<td>".$row['category']."</td>";
	echo"<td>".$row['ph']."</td>";
	echo"<td>".$row['remarks']."</td>";
echo "</tr>";		
$rowno=$rowno+1;
}
echo "</table>";		
 // mysqli_close($conn); 
?>
