<?php
session_start();
include '../includes/dbconn.php';

$name = '';
$photo = 'no-image.jpg';
$brand = '';
$description = '';
$features = '';
$category = '';
$isFeatured = '';


// Edit Products
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $photo = $_FILES["photo"]["name"];
  $brand = $_POST['brand'];
  $price = $_POST['price'];
  $description = $_POST['description'];
  $isActive = $_POST['isActive'];
  $isFeatured = $_POST['isFeatured'];
  $category = $_POST['category'];
  $stock = $_POST['stock'];

  try {

    // Code to Upload FIles
    $target_path =  "uploads/products/";
    $target_path = $target_path . basename(
      $_FILES['photo']['name']
    );

    if (move_uploaded_file($_FILES['photo']['tmp_name'], $target_path)) {
      '<script>console.log("File uploaded successfully!");</script>';
    } else {
      '<script>console.log("Sorry, file not uploaded, please try again!");</script>';
    }
    // Code to Upload Files

    $query = mysqli_query($mysqli, "INSERT INTO products (name,photo,brand,description,price,stock,isActive,isFeatured,category) values ('$name','$photo','$brand','$description','$price','$stock','$isActive','$isFeatured','$category')");
  } catch (Exception $e) {
    $message = 'Unable to add new product.' . $e;
    throw new Exception('Unable to save details. Please try again later.', 0, $e);
  }

  if ($mysqli->affected_rows == 0) {
    echo '<script>alert("Cannot Add Product");</script>';
    header("Location:../admin/add-product.php");
  } else {
    echo '<script>alert("Product Added Succesfully");window.location.href="./dashboard.php";</script>';
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Strumo | Add new guitar</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css" />
  <link rel="stylesheet" href="../assets/css/style.css" />
  <link rel="stylesheet" href="../assets/css/bootstrap.css" />
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
  <!-- daterange picker -->

  <!-- Theme style -->
  <link rel="stylesheet" href="css/adminlte.min.css" />

  <link rel="icon" type="image/x-icon" href="../assets/images/logos/webw.png" />

</head>

<body>
  <?php
  include '../includes/aside.php';
  ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="container">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container d-flex justify-content-center">
        <b class="font">
          <h1>Add New Guitar</h1>
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
      <div class="card-body font">
        <form method="POST" id="ProductDetails" enctype="multipart/form-data">
          <div class="form-row">
            <div class="form-group col-md-6 col-lg-6">
              <label>Guitar Name</label>
              <input type="text" name="name" id="name" class="form-control border-1 border-secondary" value="" required placeholder="Guitar Name">
            </div>

            <div class="form-group col-md-6 col-lg-6">
              <label>Photo URL</label>
              <input type="file" name="photo" id="photo" class="form-control border-1 border-secondary" required placeholder="Photo URL">
            </div>

            <div class="form-group col-sm-4">
              <label>Price</label>
              <input type="number" name="price" id="price" required placeholder="Price" class="form-control border-1 border-secondary">
            </div>

            <div class="form-group col-sm-4">
              <label>Category</label>
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

            <div class="form-group col-sm-4">
              <label>Brand</label>
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

            <div class="form-group col-md-8 col-lg-12">
              <label>Guitar Description:</label>
              <textarea name="description" id="description" cols="10" rows="5" class="form-control border-1 border-secondary" required placeholder="Guitar Description"></textarea>
            </div>

            <div class="form-group col-sm-4">
              <label>Is Active</label>
              <select name="isActive" required autocomplete="off" class="form-control border-1 border-secondary combobox" id="isActive">
                <option value="1">Active</option>
                <option value="2">Inactive</option>
              </select>
            </div>

            <div class="form-group col-sm-4">
              <label>Is Featured</label>
              <select name="isFeatured" required autocomplete="off" class="form-control border-1 border-secondary combobox" id="isFeatured">
                <option value="1">Active</option>
                <option value="2">Inactive</option>
              </select>
            </div>

            <div class="form-group col-sm-4">
              <label>Stock</label>
              <input type="number" name="stock" id="stock" required placeholder="Stock" class="form-control border-1 border-secondary">
            </div>

            <div class="form-group col-md-12">
              <input type="submit" value="ADD" name="submit_prod" id="submit" class="btn bg-dark text-white" />
              <input type="reset" value="RESET" name="" id="submit" class="btn bg-purple" />
            </div>
          </div>
        </form>
      </div>
    </section>
  </div>
  <?php
  require '../includes/footer.php'; ?>
</body>

</html>