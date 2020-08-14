<!DOCTYPE html>
<html>
<head>
<title>Enter your details</title>
</head>
<?php include "header.php";?>
<style>
.form-style{
	text-align:center;
    align:center;
}

input{
	display: inline-block;
	float: center;
	width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}

input[type=submit]{
	width:10%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
label{
    display: inline-block;
	width:50px;
    text-align: left;
}
</style>
<div class="form-style">
<h4>Enter your details:</h4>
<form action="pay.php" method="post" accept-charset="utf-8">
<div class="form-group">
	<label for="name">Name</label>
	<input type="text" id="name" name="name" class="form-control" placeholder="Enter your name" required>
</div>
<div class="form-group">
	<label for="email">E-mail</label>
	<input type="email" id="email" name="email" class="form-control" placeholder="Enter your email" required>
</div>
<div class="form-group">
	<label for="phone">Phone No</label>
	<input type="tel" id="phone" name="phone" pattern="[789][0-9]{9}" class="form-control" placeholder="Enter your Phone No" required>
</div>
<div class="form-group">
	<label for="amount">Amount To Pay</label>
	<input type="number" id="amount" name="amount" class="form-control" placeholder="Enter the amount to pay" required>
</div>
<div class="form-group">
	<input type="submit" name="submit" class="btn btn-danger btn-lg" value="Click to donate">
</div>
</form>	
</div>

<?php include "footer.php";?>
</html>	