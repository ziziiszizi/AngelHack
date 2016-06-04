<?php
  //DO NOT CHANGE
  $merchant_id = "MOLWallet_Dev1";
  $verifykey   = "c6c5cdaabf772a366e1b5ba8a512afac";
  $orderid     = "TEAM_NAME".rand(1,9999999);

  //Change the location
  $returnurl   = "http://localhost/MOL/return.php";
  $callbackurl = "http://localhost/MOL/callback.php";

  //CHANGE THE VALUE ONLY 
  //THE VALUE IS JUST A SAMPLE
  $Payment_URL = "https://pay.molpay.com/MOLPay/pay/";
  $amount      = "1.10";
  $bill_name   = "Lam Chen Riang";
  $bill_email  = "test@test.com";
  $bill_mobile = "0123456789";
  $bill_desc   = "Utilities bill";
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

<!DOCTYPE html>
<html lang="en">
   <head>
   <title>Payment</title>
   </head>

   <body>
      <div id="container">
         <form action="<?php echo $Payment_URL.$merchant_id.'/'; ?>" method="POST">
            <?php
            foreach($param as $key => $value){
            echo "<input type='hidden' class='form-control' id='".$key." 'name='".$key."' value='".$value."'>";
            }  
            ?>
            <p>Magic</p>
            <button type="submit">CheckOut</button>
         </form>
      <div>
   </body>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

</html>