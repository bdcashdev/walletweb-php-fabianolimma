<?php include('header.php'); ?> 
        <div id="main">
        <?php
			if (isset($_SESSION['username']))
			{
			echo('<h3>Withdraw Bitcoin</h3>
            <form action="send.php" method="post"><p><b>Amount: </b><input type="text" name="amount" size="8" /> BTC </p>
            <p><b>Address: </b><input type="text" name="address" size="34" /></p>
            <input type="submit" value="SEND" /> </form>
            <br>
            <p>Warning: it may take up to 1-2 hours for the transaction to appear in the blockchain.</p>');
			}
			else
			{
			echo('<h3>Withdraw Bitcoin</h3><p><b>Error:</b> User not logged in.</p>');
			}
			?>

		</div>
        
</div>
<?php include('footer.php'); ?> 
