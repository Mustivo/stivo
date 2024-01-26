<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title></title>
</head>
<body>
<div class="container">
    <div class="row">
    <div class="col-sm-6 navbar">
			<div class="col">
			<h4 class="text-center text-warning samp">Create An Account</h4>
			<p class="small text-center">Create an account at the first time.</p>
			<a href="index.php" class="nav nav-link text-center text-warning border border-warning">Back</a>
			</div>
		</div>
						<div class="col-sm-6 mt-5">
	<form method="POST" action="" class="border p-5 rounded" style="box-shadow: 5px 0px 10px">
		<div class="form-group">
		<label>FullName</label>
		<input type="text" class="form-control" name="fname" placeholder="Enter Your Name" required>
		</div>
		<div class="form-group">
		<label>Email</label>
		<input type="email" class="form-control" name="email" placeholder="Enter Your Email" required>
		</div>
		<div class="form-group">
		<label>ID</label>
		<input type="number" class="form-control" name="id" placeholder="Enter Your Identification number" required>
		</div>
		<div class="form-group">
		<label>Password</label>
		<input type="password" class="form-control" name="password" placeholder="Enter Your Password" required>
		</div>
		<div class="form-group">
		<label>ConfrimPassword</label>
		<input type="password" class="form-control" name="cpassword" placeholder="Confrim Your Password" required>
		</div>
		<button type="submit" class="btn btn-outline-warning" name="signup">SignUp</button>
		<div class="row justify-content-center">
		<p class="pr-1">Create an account</p>
		 <a href="login.php"  class="text-warning">LogIn Here</a> 
		</div>
	<?php
	include "connection.php";
	if(isset($_POST['signup'])){
		$fname = $_POST['fname'];
		$email = $_POST['email'];
		$id = $_POST['id'];
		$password = $_POST['password'];
		$cpassword = $_POST['cpassword'];
		// if (strlen($password) > 8) {
		// 	echo "<h5 class='text-danger text-center'>password must have 8 characters</h5>";
		// }

		if($password != $cpassword){
			echo"<h5 class='text-danger text-center'>Password does not match</h5";
		}
		else{
			$insert = "INSERT INTO company VALUES('','$fname','$email','$id','$password','$cpassword',NOW())";
			mysqli_query($con,$insert);
			header('location:login.php');
		}
	}
?>
</form>
	</div>
</div>
  </div>
</body>
</html>