<?php
include '../includes/dbconn.php';
session_start();

extract($_POST);
if (isset($update)) {
	mysqli_query($mysqli, "UPDATE products SET name='$name',price='$price',brand='$brand',stock='$stock', description='$description' where productid='" . $_GET['pid'] . "'");
	$err = "<font color='blue'>Product updated </font>";
	echo '<script>
	alert("Product Updated");
	window.location.href="manageProd.php";
	</script>';
}

//select old product

$q = mysqli_query($mysqli, "SELECT * FROM products WHERE productid='" . $_GET['pid'] . "'");
$res = mysqli_fetch_array($q);
?>
<?php
include '../includes/aside.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Strumo | Update Product</title>
	<link rel="stylesheet" href="../assets/css/style.css" />
	<link rel="stylesheet" href="../assets/css/bootstrap.css" />
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
	<link rel="icon" type="image/x-icon" href="../assets/images/logos/webw.png" />
	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
	<link rel="stylesheet" href="css/adminlte.min.css" />

</head>

<body>
	<div class="container">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<div class="container d-flex justify-content-center mt-3">
				<b class="font">
					<h1>Update Existing Product</h1>
				</b>
			</div>
		</section>

		<!-- Main content -->
		<section class="content">
			<div class="container-fluid">
				<!-- SELECT2 EXAMPLE -->
				<div class="card card-default">

				</div>
			</div>
			<!-- /.card-header -->
			<div class="border border-secondary card-body font m-auto rounded-3 w-50">
				<form method="POST" class="">
					<div class="form-group mb-3">
						<div class="col-sm-4"><?php echo @$err; ?></div>
					</div>

					<div class="form-group mb-3">
						<b>Enter Guitar Name</b>
						<input type="text" name="name" value="<?php echo $res['name']; ?>" class="mt-2 border-secondary form-control" />
					</div>

					<div class="form-group mb-3">
						<b>Enter Price</b>
						<input type="text" name="price" value="<?php echo $res['price']; ?>" class="mt-2 border-secondary form-control" />
					</div>

					<div class="form-group mb-3">
						<b>Category</b>
						<select name="category" required class="form-control border-1 border-secondary combobox" id="category">
							<option default>Category</option>
							<option value="Acoustic">Acoustic</option>
							<option value="SemiAcous">Semi-Acoustic</option>
							<option value="Bass">Bass</option>
							<option value="Electric">Electric</option>
							<option value="Classical">Classical</option>
							<option value="Ukulele">Ukulele</option>
						</select>
					</div>

					<div class="form-group mb-3">
						<b>Brand</b>
						<select name="brand" required autocomplete="off" class="form-control border-1 border-secondary combobox" id="brand">
							<option default>Brand</option>
							<option value="Enya">Enya</option>
							<option value="Fender">Fender</option>
							<option value="Hex">Hex</option>
							<option value="Ibanez">Ibanez</option>
							<option value="Mantra">Mantra</option>
							<option value="Taylor">Taylor</option>
							<option value="Yamaha">Yamaha</option>
						</select>
					</div>

					<div class="form-group mb-3">
						<b>Enter Available Stock</b>
						<input type="text" name="stock" class="mt-2 border-secondary form-control" value="<?php echo $res['stock']; ?>">
					</div>

					<div class="form-group mb-3">
						<b>Enter Description</b>
						<textarea name="description" cols="10" rows="5" class="mt-2 border-secondary form-control"><?php echo $res['description']; ?></textarea>
					</div>

					<div class="text-white form-group mt-4">
						<input type="submit" value="Update" name="update" class="btn btn-primary" />
						<input type="reset" class="btn btn-dark" />
					</div>
				</form>
			</div>
		</section>

	</div>
	<?php
	require '../includes/footer.php'; ?>
</body>


</html>