<?php
$some_data = array(
  'userSecretKey'=>'ox2aeanw-l7ge-va40-nszx-3ebq61x8vqpt',
  'categoryCode'=>'q8a0a6bb',
  'billName'=>'Car Rental WXX123',
  'billDescription'=>'Car Rental WXX123 On Sunday',
  'billPriceSetting'=>0,
  'billPayorInfo'=>1,
  'billAmount'=>100,
  'billReturnUrl'=>'http://bizapp.my',
  'billCallbackUrl'=>'http://bizapp.my/paystatus',
  'billExternalReferenceNo' => 'AFR341DFI',
  'billTo'=>'John Doe',
  'billEmail'=>'jd@gmail.com',
  'billPhone'=>'0194342411',
  'billSplitPayment'=>0,
  'billSplitPaymentArgs'=>'',
  'billPaymentChannel'=>'0',
  'billContentEmail'=>'Thank you for purchasing our product!',
  'billChargeToCustomer'=>1
);  

$curl = curl_init();
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_URL, 'https://dev.toyyibpay.com/index.php/api/createBill');  
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $some_data);

$result = curl_exec($curl);
curl_close($curl);
$obj = json_decode($result);

// Check if response contains the bill code
if (isset($obj[0]->BillCode)) {
    $billCode = $obj[0]->BillCode;
    // Redirect to the payment page with the bill code
    header("Location: https://dev.toyyibpay.com/$billCode");
    exit();
} else {
    echo "Failed to create bill. Please try again.";
}
