<?php
		include_once "z_db.php";
		mysqli_query($con,"DELETE FROM `add_students1` WHERE `id` = ".$_GET["d"]." LIMIT 1;") or die("Delete member error");
	
		print "<script>";
				print "alert('Student Deleted succesfully.....');";
				print " self.location='viewmember.php';"; 
		print "</script>";
		
	
?>