<?php
	
	if(isset($_POST['submit']))
	
	{

		$gender = $_POST['gender'];
		
		if($gender == "")
		{
			echo "Null Submission";
		}

		else
		{
			echo "Successful.";
			echo "<br>";
			echo "Gender is:". $gender;
		}
	}
	
?>