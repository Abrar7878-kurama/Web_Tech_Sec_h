<?php
	
	if(isset($_POST['submit']))
	
	{

		$blood = $_POST['blood'];
		
		if($blood == "")
		{
			echo "Null Submission";
		}

		else
		{
			echo "Successful.";
			echo "<br>";
			echo "Blood group is :". $blood;
		}
	}
	
?>