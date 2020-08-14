<?php
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$amount=$_POST['amount'];
	
	include 'instamojo/Instamojo.php';
	$api = new Instamojo\Instamojo(
	'test_ef8e2cffde4e4a0cb49dd79f69f', 'test_ce9c8dc437c6fe89dbfe7d643a1', 
	'https://test.instamojo.com/api/1.1/');
	
	try {
    $response = $api->paymentRequestCreate(array(
        "purpose" => "Donation",
        "amount" => $amount,
        "send_email" => true,
        "email" => $email,
		"donator_name"=>$name,
		"phone"=>$phone,
		"send_sms"=>true,
		"allow_repeated_payments"=>false,
        "redirect_url" => "http://localhost/PaymentGRIP/thankyou.php"
		//"webhook"=> 
        ));
    print_r($response);
	$pay_url=$response['longurl'];
	header("location:$pay_url");
	}
	catch (Exception $e) {
		print('Error: ' . $e->getMessage());
	}


?>	