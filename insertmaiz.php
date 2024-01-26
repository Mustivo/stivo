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
	<h2 class="text-center pt-5 pb-2 text-warning border-warning" style="border-bottom: 1px solid">Maize Form Field</h2>
	<div class="row d-flex justify-content-between">
	<a href="homepage.php" style="float: left;" class="nav nav-link text-warning">Preview</a>
	<a href="selectmaize.php" style="float: right;" class="nav nav-link text-warning">View Report</a>
	</div>
	<div class="row">
	<div class="col-sm-6 navbar mt-5">
			<div class="col">
			<h4 class="text-center text-warning samp">Fill Form</h4>
			<p class="small text-center">Fill the blank to report your data, makesure that you fill all field form if not could not saved.</p>
			</div>
		</div>
		<div class="col-sm-6 mt-5">
	<form method="POST" action="" class="border p-4 rounded" style="box-shadow: 2px 2px 10px">
					<?php
	include "connection.php";
	if (isset($_POST['save'])) {
		$pname = $_POST['pname'];
		$punit = $_POST['punit'];
		$PQauntity = $_POST['PQauntity'];

		$totalprice = floatval($punit) * floatval($PQauntity);


		if (empty($pname)) {
			echo "<h5 class='small text-danger'>Epmty Name Field</h5>";
		}
		elseif(empty($punit)){
			echo "<h5 class='small text-danger'>Epmty Unit Field </h5>";
		}
		elseif (empty($PQauntity)) {
			echo "<h5 class='small text-danger'>Epmty Qauntity Field</h5>";
		}
		else{
			$insert = "INSERT INTO XYZ VALUES('','$pname','$punit','$PQauntity','$totalprice',NOW())";
			mysqli_query($con,$insert);
			header('location:selectmaize.php');
		}
	}

	?>
		<div class="form-group">
		<label>ProductType</label>
		<input type="text" class="form-control" name="pname" placeholder="Enter ProductType">
		</div>
		<div class="form-group">
		<label>Product_price_Unit</label>
		<input type="number" class="form-control" name="punit" placeholder="Enter Product_price_Unit">
		</div>
		<div class="form-group">
		<label>ProductQauntity</label>
		<input type="number" name="PQauntity" class="form-control" step="0.01" min="0" placeholder="Enter ProductQauntity">
		</div>
		<button type="submit" class="btn btn-outline-warning" name="save">Save Record</button>
	</form>
	</div>
		
</div>
  </div>
</body>
</html>