<?php
	include('../connect.php');
	$id=$_GET['id'];
	$result = $db->prepare("DELETE FROM students WHERE id= :memid");
	$result->bindParam(':memid', $id);
	$result->execute();
	
	header ("location: students2.php");
?>