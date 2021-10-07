<?php include('header.php'); ?> 
    
		<div id="main"><?php 

			if (!isset($_SESSION['username']))
			{
				echo('<h3>Register a new account</h3>
            			<form action="register.php" method="post">
            	<p>Username:</p> <input name="username" type="text" />
                <p>Password:</p> <input name="password" type="password" />
                <p>Repeat password:</p> <input name="repeatpassword" type="password" />
                <br>
                <input type="submit" value="Go" />
				<br>
				<p><b>Warning:</b> Because BitWallet does not ask for your email address, your account <b>cannot</b> be recovered if you lose or forget your password!
            
            </form>');
			}
			else
			{
				echo('<p><b>Error:</b> User already logged in!');
			}
			?>

		</div>
        
</div>
<?php include('footer.php'); ?> 