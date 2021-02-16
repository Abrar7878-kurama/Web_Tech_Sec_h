<!DOCTYPE html>
<html>
<head>
	<title>Date input</title>
</head>
<body>

	<form method="POST" action="">
		<fieldset>
			<legend>Date</legend>
			Date: <input type="date" name="mydate" value=""> 
				  <input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>

<?php
	
	if(isset($_POST['submit']))
	{
		$date = $_POST['mydate'];

		if($date == "")
		{
			echo "Invalid request!!!";
		}
		else
		{
			echo "successful!!!"; 
			echo "<br>";
			echo $date;
		}
	}
	
?>