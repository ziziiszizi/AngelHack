<?php
  $vkey ="c6c5cdaabf772a366e1b5ba8a512afac"; //Replace xxxxxxxxxx with your MOLPay Verify Key
  
  /********************************
  *Don't change below parameters
  ********************************/
  $tranID 	=	isset($_POST['tranID']) ? $_POST['tranID'] : '';
  $orderid 	=	isset($_POST['orderid']) ? $_POST['orderid'] : '';
  $status 	=	isset($_POST['status']) ? $_POST['status'] : '';
  $merchant	=	isset($_POST['domain']) ? $_POST['domain'] : '';
  $amount 	=	isset($_POST['amount']) ? $_POST['amount'] : '';
  $currency	=	isset($_POST['currency']) ? $_POST['currency'] : '';
  $appcode 	=	isset($_POST['appcode']) ? $_POST['appcode'] : '';
  $paydate 	=	isset($_POST['paydate']) ? $_POST['paydate'] : '';
  $skey		=	isset($_POST['skey']) ? $_POST['skey'] : ''; //Security key return by MOLPay
  
  /***********************************************************
  * To verify the data integrity sending by MOLPay
  ************************************************************/
  $key0 = md5($tranID.$orderid.$status.$merchant.$amount.$currency);
  $key1 = md5($paydate.$merchant.$key0.$appcode.$vkey);
  //key1 : Security key generated on Merchant system
  
  $verify_hash = false;
  if($skey === $key1) {
    $verify_hash = true;
  } else if($skey != $key1) {
    $verify_hash = false;
  }
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Payment Successful </title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/mainCSS.css">
	</head>

	<body>
	<?php include("navTop/navMember.php") ?>
	<div style="margin-top: 50px;" align="center">
	<p> Payment is Successful! Press the button and direct you to the food trackng page. <p>

		<form>
         <input type="button" value="Redirect Me" onclick="Redirect();" />
      	</form>
     </div>
      	<script type="text/javascript">
         <!--
            function Redirect() {
               window.location="requester.php";
            }
         //-->
      </script>
     </body>
</html>

