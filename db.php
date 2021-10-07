<?php
	session_start();
	//replace with db info
	$host="localhost"; // localhost ou IP da hospedagem
    $userdb="username"; // usuario com permissao full
    $passdb="pass"; // senha do usuario
    $database="database"; //banco de dados
	$conn = mysqli_connect($host, $userdb, $passdb) or die('Failed to connect: ' . mysqli_error());
	mysqli_select_db($conn, $database) or die('Failed to access database');
	//login function
function user_login($username, $password)
{
	//prevent mysql injection
	$username = mysqli_real_escape_string($username);
	//query
	$sql = mysqli_query($conn,"SELECT * FROM usersystem where username = '".$username."' AND password = '".$password."' LIMIT 1");
	$rows = mysqli_num_rows($sql);
		if ($rows<=0)
			{
				echo "incorrect username/password";
			}
			else
			{
				$_SESSION['username']=$username;
				header("Location: home.php");
			}
}
?>
