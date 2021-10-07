<?php include('header.php'); ?> 
    
		<div id="main"><?php 

			if (!isset($_SESSION['username']))
			{
				echo('
			Success! You may now log in.');
			}
			else
			{
				echo('<b>Error:</b> User already logged in');
			}
			?>

		</div>
        
</div>
<?php include('footer.php'); ?> 
