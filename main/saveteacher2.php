<?php
session_start();
include('../connect.php');
$a = $_POST['first_name'];
$b = $_POST['last_name'];
$c = $_POST['gender'];
$d = $_POST['dob'];
$e = $_POST['nationality'];
$f = $_POST['phone'];
$g = $_POST['class'];
$h = $_POST['specialty'];
$i = $_POST['yoe'];
// query

$file_name  = strtolower($_FILES['file']['name']);
$file_ext = substr($file_name, strrpos($file_name, '.'));
$prefix = 'DAC-J_'.md5(time()*rand(1, 9999));
$prefix2 = substr(($prefix), 0,9);
$file_name_new = $prefix2.$file_ext;
$path = '../uploads/'.$file_name_new;


    /* check if the file uploaded successfully */
    if(@move_uploaded_file($_FILES['file']['tmp_name'], $path)) {

  //do your write to the database filename and other details   
$sql = "INSERT INTO teachers (first_name,last_name,gender,dob,nationality,phone,class,specialty,yoe,file) VALUES (:a,:b,:c,:d,:e,:f,:g,:h,:i,:m)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c,':d'=>$d,':e'=>$e,':f'=>$f,':g'=>$g,':h'=>$h, ':i'=>$i,':m'=>$file_name_new));
header("location: teachers2.php");

	}
?>