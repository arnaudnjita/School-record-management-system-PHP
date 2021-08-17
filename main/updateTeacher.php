<?php
session_start();
include('../connect.php');
$id = $_POST['memi'];
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

  //do your write to the database filename and other details   
$sql = "UPDATE teachers
        SET first_name=?,last_name=?, gender=?, dob=?, nationality=?, phone=?, class=?, specialty=?, yoe=?
        WHERE id=?";
$q = $db->prepare($sql);
$q->execute(array($a,$b,$c,$d,$e,$f,$g,$h,$i,$id));
header("location: teachers2.php");

?>