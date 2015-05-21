<?php
/**
 * Created by PhpStorm.
 * User: VAIO
 * Date: 20-05-2015
 * Time: 11:49
 */


if(!isset($_SESSION)){
    session_start();
}

if (!isset($_SESSION['name'])) {
    header('Location: index.html');
}
//echo $_SESSION['name'];
include 'connect.php';
include 'mpdf/mpdf.php';

$main_html='<!doctype html>
<html>
<head>

</head>
<body>
';


$id=$_SESSION['name'];
$sql="select * from pdf where student_id ='$id'";
$result = mysqli_query($conn,$sql);
if (!$result) {
    die("No result " . mysqli_error($conn));
}
$row = @mysqli_fetch_array($result);
$main_html=$main_html.$row['pdf_string'];


//$main_html=htmlspecialchars($main_html);

$end_string='</body></html>';
$main_html=$main_html.$end_string;

$filename=$id.".pdf";
$mpdf= new mPDF();

$mpdf = new mPDF('', 'Legal', 0, '', 12.7, 12.7, 14, 12.7, 8, 8);
//$mpdf->useOnlyCoreFonts = true;    // false is default
//$mpdf->SetProtection(array('print'));
$mpdf->SetTitle("Application");
$mpdf->use_kwt = true;
$mpdf->shrink_tables_to_fit;
$mpdf->SetDisplayMode('fullpage');
$mpdf->WriteHTML($main_html);
$mpdf->Output($filename,'D');
//$mpdf->Output();
//
session_unset();
session_destroy();
//echo "Success Fully downloaded";
?>