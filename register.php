<?php
	include("db.php");
	if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['repeatpassword']))
	{
		$username = mysqli_real_escape_string($_POST['username']);
		$password = sha1($_POST['password']);
		$repeatpassword = sha1($_POST['repeatpassword']);
		$sql= mysqli_query($conn,"SELECT username FROM usersystem WHERE username = '".$username."'");
		if (mysqli_num_rows($sql)>0)
			{
				die("Username taken.");
			}
		if ($password != $repeatpassword)
			{
				die("Passwords do not match.");
			}
			{
				mysqli_query($conn,"INSERT INTO usersystem (username, password) VALUES	('$username','$password')") or die (mysqli_error());
				header("Location: registrationsuccess.php");
			}
	}
?>