<?php
    session_start();
    if ($_SESSION["email"]) {
        
}else{
    header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <title>Document</title>
</head>
<body>
    <div class="container my-5">
        <h2 class="text-center pt-5 pb-2 text-warning border-warning" style="border-bottom: 1px solid">Edit Record</h2>
    <a href="selectmaize.php" style="float: right;" class="nav nav-link text-warning">Preview</a>
    <div class="container col-sm-12 d-flex">
        <div class="col-sm-5 navbar">
            <div class="col">
            <h4 class="text-warning text-center">Edit data</h4>
            <p class="small text-center">If you write samething as mistake you can edit..</p>
            </div>
        </div>
    <?php
    include "connection.php";
    $storeid= $_GET["upid"];
    $select="SELECT * FROM xyz WHERE p_id='$storeid'";
    $query=mysqli_query($con,$select);
    while ($rows=mysqli_fetch_array($query)) {
    ?>
    <div class="container">
<form  action="" method="post" class="border p-5 rounded" style="box-shadow: 5px 0px 10px">
		<div class="form-group">
		<label>ProductType</label>
		<input type="text" value="<?php echo $rows['p_name']?>" class="form-control" name="pname">
		</div>
		<div class="form-group">
		<label>Product_price_Unit</label>
		<input type="number" value="<?php echo $rows['p_unit']?>" class="form-control" name="punit">
	</div>
		<div class="form-group">
		<label>ProductQauntity</label>
		<input type="number" value="<?php echo $rows['p_qauntity']?>" class="form-control" name="PQauntity" step="0.01">
	<button type="submit" name="button" class="btn btn-outline-warning mt-3">Update</button>
	</form>
    </div>
    </div>
    <?php
    if (isset($_POST["button"])) {
        $pty= $_POST["pname"];
        $pp= $_POST["punit"];
        $pq= $_POST["PQauntity"];
		$totalprice = floatval($pp) * floatval($pq);

        $update="UPDATE xyz SET p_name='$pty',p_unit='$pp',p_qauntity='$pq',total_price='$totalprice' WHERE p_id='$storeid'";
        $query=mysqli_query($con,$update);
        header("location: selectmaize.php");

        
    }
    }
    ?>
</body>
</html>