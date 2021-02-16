

<!DOCTYPE html>
<html>
<head>
	<title>Email input</title>
</head>
<body>

	<form method="POST" action="">
		<fieldset>
			<legend>NAME</legend>
			Email: <input type="email" name="myemail" value="<?php if(isset($_POST['myemail'])){ echo $_POST['myemail']; }?> ">
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
		}
	}
	
?>

