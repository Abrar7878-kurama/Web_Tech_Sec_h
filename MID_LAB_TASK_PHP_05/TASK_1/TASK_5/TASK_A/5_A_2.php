<?php
	
	if(isset($_POST['submit']))
	
	{

		$degree = $_POST['degree'];
		
		if($degree == "")
		{
			echo "Null Submission";
		}

		else
		{
			foreach ($_POST['degree'] as $degree)
			 {
				echo $degree;
				echo "<br>"; 
			}
			
		}
	}
	else
	{
		echo "Please select at least one degree!!!";
	}
	
?>