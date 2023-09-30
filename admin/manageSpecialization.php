<?php
session_start();
include '../includes/dbconnect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>QuickCare | Manage Specialization</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css" />
    <link rel="stylesheet" href="../assets/css/style.css" />
    <link rel="stylesheet" href="../assets/css/bootstrap.css" />
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/adminlte.min.css" />
    <link rel="icon" type="image/x-icon" href="../assets/images/quickcarew.png" />

</head>

<body>
    <?php
    include '../includes/aside.php';
    ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="container">
        <!-- Content Header (Page header) -->
        <section class="content-header">


            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- SELECT2 EXAMPLE -->
                    <div class="card card-default">
                    </div>
                </div>


                <?php
                $q = mysqli_query($mysqli, "SELECT * FROM specialization");
                $rr = mysqli_num_rows($q);
                if (!$rr) {
                    echo "<h2 style='color:red'>No any specialization exists !!!</h2>";
                } else {
                    ?>
                    <script>
                        function DeleteSpecialization(id) {
                            if (confirm("Do you want to delete?")) {
                                alert("Specialization Deleted Successfully")
                                window.location.href = "deleteSpecialization.php?id=" + id;
                            }
                        }
                    </script>
                    <b class="hov font">
                        <h2 class="mb-4">All Specializations</h2>
                    </b>

                    <table class="table table-hover table-bordered">
                        <tr>
                            <th colspan="8"><a href="addSpecialization.php">Add New Specialization</a></th>
                        </tr>
                        <tr class="success">
                            <th>S.No</th>
                            <th>Specialization</th>
                            <th>Creation Date</th>

                            <th>Delete</th>
                        </tr>
                        <?php


                        $i = 1;
                        while ($row = mysqli_fetch_assoc($q)) {

                            echo "<tr>";
                            echo "<td>" . $i . "</td>";
                            echo "<td>" . $row['Specialization'] . "</td>";
                            echo "<td>" . $row['CreationDate'] . "</td>";

                            ?>

                            <td><a href="javascript:DeleteSpecialization('<?php echo $row['ID']; ?>')"
                                    class="btn btn-danger">Delete</a>
                            </td>
                            <?php
                            echo "</tr>";
                            $i++;
                        }
                        ?>

                    </table>
                <?php } ?>
            </section>
        </section>
    </div>
    <?php
    require '../includes/footer.php'; ?>
</body>

</html>