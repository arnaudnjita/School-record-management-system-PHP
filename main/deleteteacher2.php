<?php
	include('../connect.php');
	$id=$_GET['id'];
	$result = $db->prepare("DELETE FROM teachers WHERE id= :memid");
	$result->bindParam(':memid', $id);
	$result->execute();
	
	header ("location: teachers2.php");
?>