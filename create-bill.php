<?php
$some_data = array(
    'userSecretKey'=>'ox2aeanw-l7ge-va40-nszx-3ebq61x8vqpt',
    'categoryCode'=>'lyrcicz9',
    'billName'=>'Membership Subscription',
    'billDescription'=>'Subscription for 1 month - RM60',
    'billPriceSetting'=>0,
    'billPayorInfo'=>1,
    'billAmount'=>100,
    'billReturnUrl'=>'https://broncogym.site',
    'billCallbackUrl'=>'https://broncogym.site/paystatus',
    'billExternalReferenceNo' => 'AFR341DFI',
    'billTo'=>'John Doe',
    'billEmail'=>'jd@gmail.com',
    'billPhone'=>'0194342411',
    'billSplitPayment'=>0,
    'billSplitPaymentArgs'=>'',
    'billPaymentChannel'=>'0',
    'billContentEmail'=>'Thank you for purchasing our product!',
    'billChargeToCustomer'=>1,
    'billExpiryDate'=>'17-12-2020 17:00:00',
    'billExpiryDays'=>3
);  

$curl = curl_init();
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_URL, 'https://toyyibpay.com/index.php/api/createBill');  
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $some_data);

$result = curl_exec($curl);
$info = curl_getinfo($curl);  
curl_close($curl);
$obj = json_decode($result);
echo $result; 

?>
