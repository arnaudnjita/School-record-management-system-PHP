<?php
session_start();
include('../connect.php');
$id = $_POST['memi'];
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


  //do your write to the database filename and other details   
$sql = "UPDATE students 
        SET first_name=?,last_name=?, dob=?, pob=?, matricule=?, gender=?,nationality=?, class=?,specialty=?,doa=?,parent_name=?,parent_phone=?
        WHERE id=?";
$q = $db->prepare($sql);
$q->execute(array($a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l,$id));
header("location: students2.php");

?>