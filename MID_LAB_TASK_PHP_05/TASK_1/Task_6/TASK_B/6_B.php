<!DOCTYPE html>
<html>
<head>
	<title>BLOOD GROUP</title>
</head>
<body>

	<form method="POST" action="#">
		<fieldset>
			<legend>BLOOD</legend>
			<select name="blood">
				<option>Please Select Blood Type</option>
				<option  value="A+">A+</option><br>
				<option  value="A-">A-</option><br>
				<option  value="B+">B+</option><br>
				<option  value="B-">B-</option><br>
				<option  value="AB+">AB+</option><br>
				<option  value="AB-">AB-</option><br>
				<option  value="O+">O+</option><br>
				<option  value="O-">O-</option><br>
				<input type="submit" name="submit" value="Submit">
			</select>
		</fieldset>
	</form>
</body>
</html>

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