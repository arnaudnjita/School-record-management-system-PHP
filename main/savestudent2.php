<?php
session_start();
include('../connect.php');
$a = $_POST['first_name'];
$b = $_POST['last_name'];
$c = $_POST['dob'];
$d = $_POST['pob'];
$e = $_POST['matricule'];
$f = $_POST['gender'];
$g = $_POST['nationality'];
$h = $_POST['class'];
$i = $_POST['specialty'];
$j = $_POST['doa'];
$k = $_POST['parent_name'];
$l = $_POST['parent_phone'];
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
$sql = "INSERT INTO students (first_name,last_name,dob,pob,matricule,gender,nationality,class,specialty,doa,parent_name,parent_phone,file) VALUES (:a,:b,:c,:d,:e,:f,:g,:h, :i, :j, :k, :l, :m)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c,':d'=>$d,':e'=>$e,':f'=>$f,':g'=>$g,':h'=>$h, ':i'=>$i,':j'=>$j, ':k'=>$k, ':l'=>$l, ':m'=>$file_name_new));
header("location: students2.php");

	}
?>