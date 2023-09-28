<?php
session_start();
include './includes/dbconnect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>QuickCare | View Doctors</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css" />
    <link rel="stylesheet" href="./assets/css/style.css" />
    <link rel="stylesheet" href="./assets/css/bootstrap.css" />
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="./assets/css/adminlte.min.css" />
    <link rel="icon" type="image/x-icon" href="assets/images/logos/quickcarew.png" />
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta name="keywords" content="" />
    <!-- Custom Google Fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
        href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;600&family=Roboto:wght@300;400;700&display=auto"
        rel="stylesheet" />
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/images/favicon/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/images/logos/quickcarew.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/logos/quickcarew.png" />
    <link rel="mask-icon" href="./assets/images/favicon/safari-pinned-tab.svg" color="#5bbad5" />
    <meta name="msapplication-TileColor" content="#da532c" />
    <meta name="theme-color" content="#ffffff" />
    <!-- Vendor CSS -->
    <link rel="stylesheet" href="./assets/css/libs.bundle.css" />
    <!-- Main CSS -->
    <link rel="stylesheet" href="./assets/css/theme.bundle.css" />
    <link rel="stylesheet" href="./assets/css/style.css" />
    <link rel="stylesheet" href="./assets/css/bootstrap.css" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">




</head>

<body>
    <?php
    include './includes/header.php';
    ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="container">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container d-flex justify-content-center font">

                <b>
                    <h1>View Doctors</h1>
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
            $q = mysqli_query($mysqli, "SELECT * FROM doctor");
            $rr = mysqli_num_rows($q);
            if (!$rr) {
                echo "<h2 style='color:red'>No doctors found !!!</h2>";
            } else {
                ?>
                <h2>All Doctors</h2>

                <table class="table table-bordered table-hover mb-2">

                    <tr class=" success">
                        <th>S.No</th>
                        <th>Fullname</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Specialization</th>
                        <th>Username</th>
                    </tr>
                    <?php

                    $i = 1;
                    while ($row = mysqli_fetch_assoc($q)) {
                        echo "<tr>";
                        echo "<td>" . $i . "</td>";
                        echo "<td>" . $row['fullname'] . "</td>";
                        ?>
                        <?php

                        echo "<td>" . $row['phone'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "<td>" . $row['specialization'] . "</td>";
                        echo "<td>" . $row['username'] . "</td>";

                        ?>

                        <?php

                        $i++;
                    }
                    ?>

                </table>
            <?php } ?>
        </section>
    </div>

    <?php

    ?>

    <?php
    require './includes/footer.php'; ?>
</body>


</html>