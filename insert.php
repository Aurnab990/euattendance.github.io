<?php
	if(isset($_POST["btnsubmit"]))
	{
		extract($_POST);
		include "z_db.php";

		$query = "INSERT INTO  `add_students1`(`Name` ,  `ID` ,  `mobile` ,  `email`) VALUES('$name','$id','$mobile','$email')";

		$q = mysqli_query($con,$query)or die("insert error");
		
			print "<script>";
			print "alert('Student add successfully....');";
			print "self.location='index.php';";
			print "</script>";
		
	}
	
?>
	