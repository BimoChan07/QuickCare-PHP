<?php
session_start();
include '../includes/dbconnect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>QuickCare | View Appointment</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css" />
    <link rel="stylesheet" href="../assets/css/style.css" />
    <link rel="stylesheet" href="../assets/css/bootstrap.css" />
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
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

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- SELECT2 EXAMPLE -->
                <div class="card card-default">
                </div>
            </div>

            <?php
            $q = mysqli_query($mysqli, "SELECT * FROM appointment");
            $rr = mysqli_num_rows($q);
            if (!$rr) {
                echo "<h2 style='color:red'>No any appointment found !!!</h2>";
            } else {
                ?>
                <h2 class="font mt-1 mb-3">All Appointment</h2>

                <table class="table table-bordered table-hover mb-2">

                    <tr class=" success">
                        <th>S.No</th>
                        <th>Appointment Number</th>
                        <th>Patient Name</th>
                        <th>Contact</th>
                        <th>Email</th>
                        <th>Appointment Date</th>
                        <th>Appointment Time</th>
                        <th>Specialization</th>
                        <th>Doctor's Name</th>
                        <th>Message</th>
                        <th>Apply Date</th>
                        <th>Remarks</th>
                        <th>Status</th>
                        <th>Updation Date</th>
                    </tr>
                    <?php

                    $i = 1;
                    while ($row = mysqli_fetch_assoc($q)) {
                        echo "<tr>";
                        echo "<td>" . $i . "</td>";
                        echo "<td>" . $row['AppointmentNumber'] . "</td>";
                        ?>
                        <?php

                        echo "<td>" . $row['Name'] . "</td>";
                        echo "<td>" . $row['MobileNumber'] . "</td>";
                        echo "<td>" . $row['Email'] . "</td>";
                        echo "<td>" . $row['AppointmentDate'] . "</td>";
                        echo "<td>" . $row['AppointmentTime'] . "</td>";
                        echo "<td>" . $row['Specialization'] . "</td>";
                        echo "<td>" . $row['Doctor'] . "</td>";
                        echo "<td>" . $row['Message'] . "</td>";
                        echo "<td>" . $row['ApplyDate'] . "</td>";
                        echo "<td>" . $row['Remark'] . "</td>";
                        echo "<td>" . $row['Status'] . "</td>";
                        echo "<td>" . $row['UpdationDate'] . "</td>";
                        ?>
                        <!-- <td><a href="javascript:DeleteProducts('<?php echo $row['id']; ?>')" class="btn btn-danger">Delete</a></td> -->

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
    <script>
        function DeleteProducts(id) {
            if (confirm("Do you want to delete the doctor?")) {
                alert("Dooctor Deleted");
                window.location.href = "deleteDoctor.php?id=" + id;
            }
        }
    </script>
    <?php
    require '../includes/footer.php'; ?>
</body>


</html>