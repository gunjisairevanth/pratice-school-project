<?php
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");
require('../functions/functions.php');
// following files need to be included
require_once("./lib/config_paytm.php");
require_once("./lib/encdec_paytm.php");

$paytmChecksum = "";
$paramList = array();
$isValidChecksum = "FALSE";
$status=$_POST["STATUS"];
$TXNID = $_POST["TXNID"];
$ORDERID  =$_POST["ORDERID"];
mysqli_query($con,"update payments set trx_id='$TXNID',status='$status' where order_id='$ORDERID';");
$paramList = $_POST;
$paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg

//Verify all parameters received from Paytm pg to your application. Like MID received from paytm pg is same as your application’s MID, TXN_AMOUNT and ORDER_ID are same as what was sent by you to Paytm PG for initiating transaction etc.
$isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); //will return TRUE or FALSE string.


if($isValidChecksum == "TRUE") {
	
	if ($_POST["STATUS"] == "TXN_SUCCESS") {
		echo "
		<div style='text-align: center;'>
		<img src='sucess.gif' style='width: 200px; margin-top: 200px; height: auto;'/>
		<p style='font-family: arial; font-size: 30px;'>Payment Approved</p>
		<p style='font-family: arial; font-size: 15px;'>TXN ID : $TXNID</p>
		<script>
		setInterval(function(){
			window.location.replace('../orders.php');
		},2000);
		</script>
		</div>";
		//Process your transaction here as success transaction.
		//Verify amount & order id received from Payment gateway with your application's order id and amount.
	}
	else {
			echo "
		<div style='text-align: center;'>
		<img src='fail.png' style='width: 600px; margin-top: 200px; height: auto;'/>
		<p style='font-family: arial; font-size: 20px;'>Please wait... we will redirect to home page</p>
		<p style='font-family: arial; font-size: 15px;'>TXN ID : $TXNID</p>
		<script>
		setInterval(function(){
			window.location.replace('../index.php');
		},3000);
		</script>
		</div>";
		mysqli_query($con,"update cart set order_id is NULL where order_id='$ORDERID';");
	}

}


?>