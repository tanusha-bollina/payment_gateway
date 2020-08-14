<!DOCTYPE html>
<html>
<head>
<title>Thank you!</title>
</head>
<style>
table,th,td{
  border: 1px solid black;
}

th, td {
  padding: 10px;
}
</style>
<?php include 'header.php';?>
<h1><center>Thank You For Donating!</center></h1>

<?php

	include 'instamojo/Instamojo.php';
		$api = new Instamojo\Instamojo(
		'test_ef8e2cffde4e4a0cb49dd79f69f', 'test_ce9c8dc437c6fe89dbfe7d643a1', 
		'https://test.instamojo.com/api/1.1/');

	$payid=$_GET['payment_request_id'];
	try{
		$response=$api->paymentRequestStatus($payid);
?>
	<h2><center>Payment Details:</center></h2>
	<table align="center">
	<tr>
	<th>Payment ID:</th>
	<td><?=$response['payments'][0]['payment_id'];?></td>
	</tr>
	<tr>
	<th>Name of the Donator:</th>
	<td><?=$response['payments'][0]['buyer_name'];?></td>
	</tr>
	<tr>
	<th>Email of the Donator:</th>
	<td><?=$response['payments'][0]['buyer_email'];?></td>
	</tr>
	<tr>
	<th>Amount Donated:</th>
	<td><?=$response['payments'][0]['amount'];?></td>
	</tr>
<?php
	}
	catch(Exception $e){
		print("Error: ".$e->getMessage());
	}
?>


</html>