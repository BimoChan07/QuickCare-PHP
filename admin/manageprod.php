<?php
session_start();
include '../includes/dbconn.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Strumo | Manage Product</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css" />
    <link rel="stylesheet" href="../assets/css/style.css" />
    <link rel="stylesheet" href="../assets/css/bootstrap.css" />
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
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
            <div class="container d-flex justify-content-center font">

                <b>
                    <h1>Manage Guitars</h1>
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

            <?php
            $q = mysqli_query($mysqli, "SELECT * FROM products");
            $rr = mysqli_num_rows($q);
            if (!$rr) {
                echo "<h2 style='color:red'>No any products found !!!</h2>";
            } else {
            ?>
                <h2>All Products</h2>

                <table class="table table-bordered table-hover mb-2">
                    <tr>
                        <th colspan="8"><a href="add-product.php">Add New Product</a></th>
                    </tr>
                    <tr class=" success">
                        <th>S.No</th>
                        <th>Name</th>
                        <th>Photo</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Delete</th>
                        <th>Update</th>
                    </tr>
                    <?php

                    $i = 1;
                    while ($row = mysqli_fetch_assoc($q)) {
                        echo "<tr>";
                        echo "<td>" . $i . "</td>";
                        echo "<td>" . $row['brand'] . ' ' . $row['name'] . "</td>";
                    ?>
                        <td class="w-25 "><img class="img-fluid w-75" src="../admin/uploads/products/<?php echo $row['photo']; ?>" alt="" />
                            <?php
                            echo "<td>" . $row['description'] . "</td>";
                            echo "<td>" . $row['price'] . "</td>";
                            echo "<td>" . $row['stock'] . "</td>";
                            ?>
                        <td><a href="javascript:DeleteProducts('<?php echo $row['productid']; ?>')" class="btn btn-danger">Delete</a></td>

                    <?php
                        echo "<td><a href='updateProd.php?page=updateProd&pid=" . $row['productid'] . "' class='btn btn-secondary'>Update</a></td>";
                        echo "</tr>";
                        $i++;
                    }
                    ?>

                </table>
            <?php } ?>
        </section>
    </div>

    <?php

    ?>
    <script>
        function DeleteProducts(id) {
            if (confirm("Do you want to delete this product?")) {
                alert("Product Deleted");
                window.location.href = "deleteprod.php?id=" + id;
            }
        }
    </script>
    <?php
    require '../includes/footer.php'; ?>
</body>


</html>