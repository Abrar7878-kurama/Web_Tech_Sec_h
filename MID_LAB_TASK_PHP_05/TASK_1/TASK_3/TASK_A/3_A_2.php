<?php
	
	if(isset($_POST['submit']))
	
	{

		$date = $_POST['mydate'];
		
		if($date == "")
		{
			echo "Null Submission";
		}

		else
		{
			echo "Successful.";
			echo "<br>";
			echo $date;
		}
	}
	
?>