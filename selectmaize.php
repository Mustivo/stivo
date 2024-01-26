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
	<div class="col-sm-12">
	<h2 class="text-center pt-5 pb-2 text-warning border-warning" style="border-bottom: 1px solid">Product Weekly Report</h2>
		<a href="insertmaiz.php" style="float: right;" class="nav nav-link text-warning">Add New</a>
		</div>
		<div class="table-responsive-sm">
	<table border="1" class="table mt-5 col-sm-12 table-bordered">
		<thead>
			<tr class="text-warning small">
				<th>No</th>
				<th>ProductType</th>
				<th>ProductUnit</th>
				<th>ProductQauntity</th>
				<th>TotalPrice</th>
				<th>Date&Time</th>
				<th colspan="2" class="text-center">Option</th>
			</tr>
		</thead>
		<tbody>
			<?php
				include "connection.php";
				$select = "SELECT * FROM XYZ";
				$x=1;
				$sql = mysqli_query($con,$select);
				while ($rows=mysqli_fetch_assoc($sql)) {
					?>
					<tr>
						<td><?php echo $x?></td>
						<td><?php echo $rows['p_name']?></td>
						<td><?php echo $rows['p_unit']?><span class="small text-warning">RWF</span></td>
						<td><?php echo $rows['p_qauntity']?><span class="small text-warning">kg</span></td>
						<td><?php echo $rows['total_price']?><span class="small text-warning">RWF</span></td>
						<td><?php echo $rows['p_time']?></td>
						<td><a class="nav nav-link text-danger" href="deletemaize.php?pid=<?php echo $rows['p_id']?>">Delete</a></td>
						<td><a href="up.php?upid=<?php echo $rows['p_id']?>" class="nav nav-link">Update</a></td>
					</tr>
					<?php
					$x++;
				}
			?>
		</tbody>
	</table>
</div>
	<!-- <table class="table-hover col-sm-12 my-5" style="background-color:gray;">
    <tr class="font-weight-bold font-italic bg-dark">
        <td>name</td>
        <td>class</td>
        <td>location</td>
    </tr>
    <tr>
        <td>fasho</td>
        <td>stivo</td>
        <td>bigey</td>
    </tr>
</table>
 -->	</div>
</body>
</html>