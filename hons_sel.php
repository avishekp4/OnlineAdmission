<?php
include 'connect.php';
//$student_id=$_GET['student_id'];
$student_id='12456';
$lang1_name=$_GET['lang1_name'];
$lang1_fm=$_GET['lang1_fm'];
$lang1_om=$_GET['lang1_om'];
$sub1_name=$_GET['sub1_name'];
$sub1_th_fm=$_GET['sub1_th_fm'];
$sub1_th_om=$_GET['sub1_th_om'];
$sub1_pr_fm=$_GET['sub1_pr_fm'];
$sub1_pr_om=$_GET['sub1_pr_om'];
$sub2_name=$_GET['sub2_name'];//$sub2_name=strtoupper($sub2_name);
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
$sub3_name=$_GET['sub3_name'];
$sub4_name=$_GET['sub4_name'];
$sub1_fm=$sub1_th_fm+$sub1_pr_fm;
$sub3_fm=$sub3_th_fm+$sub3_pr_fm;
$sub4_fm=$sub4_th_fm+$sub4_pr_fm;
$sub1_total_om=$sub1_th_om+$sub1_pr_om;
$sub2_total_om=$sub2_th_om+$sub2_pr_om;
$sub3_total_om=$sub3_th_om+$sub3_pr_om;
$sub4_total_om=$sub4_th_om+$sub4_pr_om;




$sql="REPLACE INTO `main`( `lang1_name`, `lang1_fm`, `lang1_om`, `sub1_name`, `sub1_th_fm`, `sub1_th_om`, `sub1_pr_fm`, `sub1_pr_om`, `sub2_name`, `sub2_th_fm`, `sub2_th_om`, `sub2_pr_fm`, `sub2_pr_om`, `sub2_fm`, `sub3_fm`, `sub4_fm`, `sub3_th_om`, `sub4_th_om`, `sub3_th_fm`, `sub4_th_fm`, `sub3_pr_fm`, `sub4_pr_fm`, `sub3_pr_om`, `sub4_pr_om`, `sub3_name`, `sub4_name`, `sub1_fm`, `sub1_total_om`, `sub2_total_om`, `sub3_total_om`, `sub4_total_om`, `lang2_name`, `lang2_fm`, `lang2_om`, `student_id`) VALUES ('$lang1_name','$lang1_fm','$lang1_om','$sub1_name','$sub1_th_fm','$sub1_th_om','$sub1_pr_fm','$sub1_pr_om','$sub2_name','$sub2_th_fm','$sub2_th_om','$sub2_pr_fm','$sub2_pr_om','$sub2_fm','$sub3_fm','$sub4_fm','$sub3_th_om','$sub4_th_om','$sub3_th_fm','$sub4_th_fm','$sub3_pr_fm','$sub4_pr_fm','$sub3_pr_om','$sub4_pr_om','$sub3_name','$sub4_name','$sub1_fm','$sub1_total_om','$sub2_total_om','$sub3_total_om','$sub4_total_om','$lang2_name','$lang2_fm','$lang2_om')where `student_id`='$student_id'";




//$sql="insert into auth (`student_id`) values('hddh11s')";
$result=mysqli_query($conn,$sql);
echo "OK";
?>
