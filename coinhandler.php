
<?php
 require_once '/API/jsonRPCClient.php';
require_once '/connections/coin_details.php';
 error_reporting(E_WARNING | E_PARSE);
 $bitcoin = new jsonRPCClient('http://'.$user_rpc.':'.$pass_rpc.'@127.0.0.1:'.$port_rpc.'/');
  	$balance=$bitcoin->getbalance($_SESSION['username'],4);
	
	if (isset($address)){
		$address=$bitcoin->getaccountaddress($_SESSION['username']);
	}
	else
	{
		
		$address=$bitcoin->getnewaddress($_SESSION['username']);
	}
?>
