<?php
session_start();
include '../includes/dbconnect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>QuickCare | Manage Doctors</title>

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
            $q = mysqli_query($mysqli, "SELECT * FROM doctor");
            $rr = mysqli_num_rows($q);
            if (!$rr) {
                echo "<h2 style='color:red'>No doctors found !!!</h2>";
            } else {
                ?>
                <h2 class="font mt-2 mb-3">Manage Doctors</h2>

                <table class="table table-bordered table-hover mb-2">

                    <tr class=" success">
                        <th>S.No</th>
                        <th>Fullname</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Specialization</th>
                        <th>Username</th>
                        <th>Creation Date</th>
                        <th>Delete</th>
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
                        echo "<td>" . $row['CreationDate'] . "</td>";

                        ?>
                        <td><a href="javascript:DeleteDoctor('<?php echo $row['id']; ?>')" class="btn btn-danger">Delete</a>
                        </td>

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
        function DeleteDoctor(id) {
            if (confirm("Do you want to delete the doctor?")) {
                alert("Doctor Deleted");
                window.location.href = "deleteDoctor.php?id=" + id;
            }
        }
    </script>
    <?php
    require '../includes/footer.php'; ?>
</body>


</html>