<?php
	include("db.php");
	if (isset($_POST['newpassword']) && isset($_POST['confirmnewpassword']))
	{
	$newpass = sha1($_POST['newpassword']);
	$newpassconfirm = sha1($_POST['confirmnewpassword']);
	$username = $_SESSION['username'];
	//query
	$password= sha1($_POST['currentpass']);
	$sql = mysqli_query($conn,"SELECT * FROM usersystem where username = '".$username."' AND password = '".$password."' LIMIT 1");
	
	$rows = mysqli_num_rows($sql);
	
		if ($rows<=0)
			{
				die("Incorrect password");
			}
		if ($newpass != $newpassconfirm)
			{
				die ("new passwords do not match");
			}
 
			{
				mysqli_query($conn,"update usersystem SET password='$newpass' where username='$username'") or die (mysqli_error());
				header("Location: accountupdated.php");
							
			}
	}
?>