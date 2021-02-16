<!DOCTYPE html>
<html>
<head>
	<title>DEGREE</title>
</head>
<body>

	<form method="POST" action="">
		<fieldset>
			<legend>Degree</legend>
			<input type="checkbox" name="degree[]" value="SSC">SSC <br>
			<input type="checkbox" name="degree[]" value="HSC">HSC <br>
			<input type="checkbox" name="degree[]" value="BSC">BSc <br>
			<input type="checkbox" name="degree[]" value="MSC">MSc <br>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>

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
	
	
?>