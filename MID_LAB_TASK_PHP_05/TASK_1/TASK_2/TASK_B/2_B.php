<!DOCTYPE html>
<html>
<head>
	<title>Email input</title>
</head>
<body>

	<form method="POST" action="">
		<fieldset>
			<legend>EMAIL</legend>
			Email: <input type="email" name="myemail" value=""> 
				  <input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>

<?php
	
	if(isset($_POST['submit']))
	{
		$email = $_POST['myemail'];

		if($email == "")
		{
			echo "Invalid request!!!";
		}
		else
		{
			echo "successful!!!"; 
			echo "<br>";
			echo $email;
		}
	}
	
?>