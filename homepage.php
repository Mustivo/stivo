<?php
	session_start();
	if ($_SESSION["email"]) {
		
}else{
	header("location:login.php");
}
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
	<div class="col-sm-6 d-flex justify-content-between mt-5">
		<h1 class="text-center text-warning borde-warning font-weight-bold samp" style="border-bottom: 1px solid">XYZ Cooperative Society</h1>
		</div>
		<div class="col-sm-6 text-center mt-5">
		<a href="insertmaiz.php"><button type="submit" class="btn btn-outline-warning mb-5">Report Your Data</button></a>	
		</div>
	</div>
    <div class="row">
    <div class="col-sm-6 py-3 px-5">
			<!-- <h4>hello <?php echo $_SESSION['email'];?></h4> -->
		<div class="row col-sm-12 mx-2">
		<img src="img/1.jpg" class="mr-4" width="45%" height="60%">
		<img src="img/2.jpg" width="45%" height="58%">
		</div>
		<p class="font-italic pt-3 small"><b class="text-warning">XYZ Cooperative Society</b> is a company of growing crops called Maize. It have deliverable Marks which sales theair product for producing another.</p>
		</div>
				<div class="col-sm-6">
			<div class="col mt-5">
				<div class="row my-5 py-5 navbar">
			<h2 class="text-warning samp pb-2">Record Data(Maize) </h2>
			
			<p class="small text-center">Report your weekly report click above button to recieve and rocord your data.</p>
			<a href="logout.php" class="nav nav-link text-warning offset-2"><button class="btn btn-outline-warning mt-4 mx-5">LogOut</button></a>
			</div>
			</div>
			</div>
</div>
  </div>
</body>
</html>