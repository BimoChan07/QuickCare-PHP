<?php
session_start();
include '../includes/dbconn.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Strumo | Manage User</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css" />
    <link rel="stylesheet" href="../assets/css/style.css" />
    <link rel="stylesheet" href="../assets/css/bootstrap.css" />
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/adminlte.min.css" />
    <link rel="icon" type="image/x-icon" href="../assets/images/webw.png" />

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
                    <h1>Manage User</h1>
                </b>
            </div>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- SELECT2 EXAMPLE -->
                    <div class="card card-default">
                    </div>
                </div>


                <?php
                $q = mysqli_query($mysqli, "SELECT * FROM users");
                $rr = mysqli_num_rows($q);
                if (!$rr) {
                    echo "<h2 style='color:red'>No any user exists !!!</h2>";
                } else {
                ?>
                    <script>
                        function DeleteUser(id) {
                            if (confirm("Do you want to delete this user?")) {
                                alert("User Deleted Successfully")
                                window.location.href = "deleteUsr.php?id=" + id;
                            }
                        }
                    </script>
                    <b class="hov font">
                        <h2 class="">All Users</h2>
                    </b>

                    <table class="table table-hover table-bordered">
                        <Tr class="success">
                            <th>S.No</th>
                            <th>User Name</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Contact</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Delete</th>
                        </tr>
                        <?php


                        $i = 1;
                        while ($row = mysqli_fetch_assoc($q)) {

                            echo "<tr>";
                            echo "<td>" . $i . "</td>";
                            echo "<td>" . $row['fullname'] . "</td>";
                            echo "<td>" . $row['email'] . "</td>";
                            echo "<td>" . $row['address'] . "</td>";
                            echo "<td>" . $row['phone'] . "</td>";
                            echo "<td>" . $row['username'] . "</td>";
                            echo "<td>" . $row['password'] . "</td>";
                        ?>

                            <td><a href="javascript:DeleteUser('<?php echo $row['id']; ?>')" class="btn btn-danger">Delete</a></td>
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