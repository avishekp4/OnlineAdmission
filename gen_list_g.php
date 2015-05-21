
<?php

// Inialize session

// Include database connection settings

include 'connect.php';


$dept_name=$_GET['dept_name'];
$board=$_GET['board'];
$category=$_GET['category'];

echo "Principal In Department View<br>";
echo  strtoupper($dept_name)." Department ";

echo "<p>Total no of Available  Seat </p>";



//$sql="SELECT * from `".$dept_name."_honours` order by merit_point DESC";

if($board=='wbchse'){

//$sql="SELECT * from `".$dept_name."` where  board='wbchse' order by aggr DESC";

    $sql="SELECT serial_no,p.name,gender,p.board,f.year_of_passing,p.aggr,p.category,p.ph  from `$dept_name` as p,`student_tran` as s ,main as t,auth as f where p.board='wbchse' and s.subject_id=p.subject_id and s.student_id=t.student_id and s.student_id=f.student_id order by aggr DESC";


    echo"<br>".$sql;
}
else{

    //$sql="SELECT * from `".$dept_name."` where  board <>'wbchse' order by aggr DESC";
    $sql="SELECT serial_no,p.name,gender,p.board,f.year_of_passing,p.aggr,p.category,p.ph  from `$dept_name` as p,`student_tran` as s ,main as t,auth as f where p.board<>'wbchse' and s.subject_id=p.subject_id and s.student_id=t.student_id and s.student_id=f.student_id order by aggr DESC";
}



$result=mysqli_query($conn,$sql);

$result=mysqli_query($conn,$sql);

$rowno = 1;
echo "<table border='1'>
<tr>
	<th>Rank</th>
        <th>Form No</th>
	<th>Student Name</th>
	<th>Sex</th>
        <th>Board</th>
        <th>Year Of Passing</th>
        <th>Merit Point</th> 
        <th>Remarks</th>
        
        
</tr>";


while($row = @mysqli_fetch_array($result))
{
    echo "<tr>";
    echo"<td>".$rowno."</td>";
    echo "<td>".$row['serial_no']."</td>";
    echo"<td>".$row['name']."</td>";
    echo "<td>".$row['gender']."</td>";
    echo"<td>".$row['board']."</td>";
    echo "<td>".$row['year_of_passing']."</td>";
    echo"<td>".$row['aggr']."</td>";
    echo"<td>".$row['category'].",".$row['ph']."</td>";
    //echo"<td>".$row['ph']."</td>";

    echo "</tr>";
    $rowno=$rowno+1;
}
echo "</table>";
// mysqli_close($conn);
?>
