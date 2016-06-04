<!DOCTYPE html>
<html>
	<head>
		<title>Cart</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/mainCSS.css">
	</head>
	
	<body>
	<?php include("navTop/navMember.php") ?>
	<div class="jumbotron" style="margin-top: 50px;" align="center">
		<h2>Your Cart</h2>
		<table>
			<tr>
				<th>Name</th>
				<th>Unit Price</th>
				<th>Amount</th>
				<th>Total</th>
				<th></th>
			</tr>
			<tr>
				<td>Nasi Lemak</td>
				<td>RM6</td>
				<td>2</td>
				<td>RM12</td>
				<td><button id="delete">X</button></td>
					
			</tr>
			
			<tr>
				<td>Chicken Rice</td>
				<td>RM5</td>
				<td>1</td>
				<td>RM5</td>
				<td><button id="delete2">X</button></td>
			</tr>
			
			<tr>
			<td colspan=5> 
							<hr/>
							</td>
			</tr>

			<tr>
				<td></td>
				<td></td>
				<td>Grand Total:</td>
				<td><p id="price">RM17</p></td>
				<td></td>
			</tr>
		</table>


						<?php
				  //DO NOT CHANGE
				  $merchant_id = "MOLWallet_Dev1";
				  $verifykey   = "c6c5cdaabf772a366e1b5ba8a512afac";
				  $orderid     = "TEAM_NAME".rand(1,9999999);

				  //Change the location
				  $returnurl   = "http://localhost/AngelHack/return.php";
				  $callbackurl = "http://localhost/AngelHack/callback.php";

				  //CHANGE THE VALUE ONLY 
				  //THE VALUE IS JUST A SAMPLE
				  $Payment_URL = "https://pay.molpay.com/MOLPay/pay/";
				  $amount      = "17";
				  $bill_name   = "Yoona";
				  $bill_email  = "yoona@gmail.com";
				  $bill_mobile = "60163218880";
				  $bill_desc   = "Food Delivery";
				  $country     = "MY";
				  $currency    = "MYR";
				  $channel     = "MOLWallet";
				  $langcode    = "en";
				  $vcode       = md5($amount.$merchant_id.$orderid.$verifykey); 

				  //DO NOT CHANGE
				   $param   =  [
				         'orderid'    => $orderid,
				         'channel'    => $channel,
				         'currency'   => $currency,
				         'amount'   => $amount,
				         'bill_name'  => $bill_name,
				         'bill_email' => $bill_email,
				         'bill_mobile'  => $bill_mobile,
				         'bill_desc'  => $bill_desc,
				         'returnurl'  => $returnurl,
				         'callbackurl'  => $callbackurl,
				         'vcode'    => $vcode,
				         'country'    => $country,
				         'langcode'   => $langcode,
				            ];
				  
				?>


		<form action="<?php echo $Payment_URL.$merchant_id.'/'; ?>" method="POST">
            <?php
            foreach($param as $key => $value){
            echo "<input type='hidden' class='form-control' id='".$key." 'name='".$key."' value='".$value."'>";
            }  
            ?>
            
            <button type="submit">CheckOut</button>
         </form>
	</div>
			<script>
		
			var button1 = document.getElementById("delete");
			button1.addEventListener("click", function(){
    document.getElementById("price").innerHTML = "RM5";
	SomeDeleteRowFunction(this);
})

			var button2 = document.getElementById("delete2");
			button2.addEventListener("click", function(){
    document.getElementById("price").innerHTML = "RM12";
	SomeDeleteRowFunction(this);
})

    function SomeDeleteRowFunction(o) {
     var p=o.parentNode.parentNode;
         p.parentNode.removeChild(p);
		 
    }
		</script>	
		
	</body>

</html>