<?php
session_start();	
?>

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
			<h4 class="text-center text-warning samp">LoginYour Cridential</h4>
			<p class="small text-center">Enter your identification</p>
			<a href="index.php" class="nav nav-link text-center text-warning border border-warning">Back</a>
			</div>
		</div>
				<div class="col-sm-6 mt-5">
	<form method="POST" action="" class="border p-5 rounded mt-5" style="box-shadow: 5px 0px 10px">
		<div class="form-group">
		<label>Email</label>
		<input type="email" class="form-control" name="email" placeholder="Enter Your Email">
		</div>
		<div class="form-group">
		<label>Password</label>
		<input type="password" class="form-control" name="password" placeholder="Enter Your Password">
		</div>
		<button type="submit" class="btn btn-outline-warning" name="login">LogIn</button>
		<div class="row justify-content-center">
		<p class="pr-1">I forgot password</p>
		 <a href="reset.php"  class="text-warning">reset password</a> 
		</div>
		<div class="row justify-content-center">
		 <a href="signup.php"  class="text-warning">SigUp Here</a> 
		</div>
		<?php
			include "connection.php";
			if (isset($_POST['login'])) {
				$email = $_POST['email'];
				$password = $_POST['password'];
				$select = "SELECT * FROM company WHERE email='$email' and password='$password'";
				$result = mysqli_query($con,$select) or die(mysqli_error($con));
				$rows = mysqli_num_rows($result);
				if($rows == 1){
					$_SESSION['email'] = $email;
					header('location:homepage.php');
					exit();
				}else{
					echo "<h5 class='text-center text-danger'>Incorrect Email or Password</h5>";
					
				}
			}
		?>
	</form>
	</div>
</div>
  </div>
</body>
</html>