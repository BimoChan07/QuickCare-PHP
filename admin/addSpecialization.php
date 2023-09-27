<?php
session_start();
include '../includes/dbconnect.php';

$name = '';
$photo = 'no-image.jpg';
$brand = '';
$description = '';
$features = '';
$category = '';
$isFeatured = '';


// Edit Products
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $sname = $_POST['specialization'];
  $date = date("Y-m-d H:i:s");

try{
      $query = mysqli_query($mysqli, "INSERT INTO specialization (Specialization,CreationDate) values ('$sname','$date')");

  if ($mysqli->affected_rows == 0) {
    echo '<script>alert("Cannot Add Specialization");</script>';
    header("Location:../admin/addSpecialization.php");
  } else {
    echo '<script>alert("Specialization Added Succesfully");window.location.href="./dashboard.php";</script>';
  }
} catch(Exception $e){
  echo '<script>alert("Cannot Add Specialization");</script>';
  header("Location:../admin/addSpecialization.php");
}
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>QuickCare | Add new specialization</title>

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

  <link rel="icon" type="image/x-icon" href="../assets/images/logos/quickcarew.png" />

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
          <h1>Add New Specialization</h1>
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
              <label>Specialization</label>
              <input type="text" name="specialization" id="specialization" class="form-control border-1 border-secondary" value="" required placeholder="Specialization">
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