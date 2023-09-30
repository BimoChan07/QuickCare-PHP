<?php
include('./includes/dbconn.php');
include('./includes/dbconnect.php');
session_start();
if (isset($_POST['submit'])) {
}
?>
<!doctype html>
<html lang="en">

<head>
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



    <!-- Fix for custom scrollbar if JS is disabled-->
    <noscript>
        <style>
            /**
          * Reinstate scrolling for non-JS clients
          */
            .simplebar-content-wrapper {
                overflow: auto;
            }
        </style>
    </noscript>
    <!-- Page Title -->
    <title>QuickCare | Appointment</title>


    <script>
        function getdoctors(val) {
            alert(val);
            $.ajax({

                type: "POST",
                url: "get_doctors.php",
                data: 'sp_id=' + val,
                success: function (data) {
                    $("#doctorlist").html(data);
                }
            });
        }
    </script>
</head>

<body id="top">

    <main>

        <?php include_once('includes/header.php'); ?>

        <section class="section-padding" id="booking">
            <div class="container">

                <?php
                $username = $_SESSION['username'];
                $q = mysqli_query($mysqli, "SELECT * FROM reports WHERE username='$username'");
                $rr = mysqli_num_rows($q);
                if (!$rr) {
                    echo "<h2 style='color:red'>No reports found !!!</h2>";
                } else {
                    ?>

                    <div class="widget-body">
                        <div class="table-responsive">

                            <h2 class="mb-4">My Report</h2>
                            <table class="table mt-3 table-hover table-bordered">
                                <tr class="success">
                                    <th>S.No</th>
                                    <th>Appointment Number</th>
                                    <th>Name</th>
                                    <th>Apppointment Date</th>
                                    <th>Apppointment Time</th>
                                    <th>Apply Date</th>
                                    <th>Status</th>
                                    <th>Remark</th>
                                </tr>
                                <?php


                                $i = 1;
                                while ($row = mysqli_fetch_assoc($q)) {

                                    echo "<tr>";
                                    echo "<td>" . $i . "</td>";
                                    echo "<td>" . $row['AppointmentNumber'] . "</td>";
                                    echo "<td>" . $row['Name'] . "</td>";
                                    echo "<td>" . $row['AppointmentDate'] . "</td>";
                                    echo "<td>" . $row['AppointmentTime'] . "</td>";
                                    echo "<td>" . $row['ApplyDate'] . "</td>";
                                    echo "<td>" . $row['Status'] . "</td>";
                                    echo "<td>" . $row['Remark'] . "</td>";
                                    ?>


                                    <?php

                                    $i++;
                                }
                                ?>

                            </table>
                        <?php } ?>
                    </div>

                </div>
            </div>
        </section>

    </main>
    <?php include_once('includes/footer.php'); ?>
    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/scrollspy.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>