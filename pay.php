<?php
	include('MyMethods.php');

	if(isset($_POST['transactionid']))
	{
		$transactionid = $_POST['transactionid'];
		$res = updatePayment($transactionid);
	}
	else{		
		$res = addPayment($_POST);
	}

?>