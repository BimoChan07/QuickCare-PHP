<?php
session_start();
include '../includes/dbconnect.php';
// Handle admin actions
if (isset($_POST['action']) && isset($_POST['doctor_id'])) {
    $doctorId = $_POST['doctor_id'];

    if ($_POST['action'] == 'accept') {
        // Get doctor data from pending_doctors table
        $sql = "SELECT * FROM pending_doctors WHERE id=$doctorId";
        $result = $mysqli->query($sql);
        $rr = mysqli_num_rows($result);


        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();

            // Insert the doctor's information into accepted_doctors table
            $insertSql = "INSERT INTO doctor(fullname,phone,email,license,specialization,username,password)VALUES ('" . $row['fullname'] . "', '" . $row['phone'] . "', '" . $row['email'] . "','" . $row['license'] . "', '" . $row['specialization'] . "', '" . $row['username'] . "', '" . $row['password'] . "')";
            if ($mysqli->query($insertSql) === TRUE) {
                echo "<script>alert('Doctor registered.');</script>";
            } else {
                echo "Error accepting doctor: " . $mysqli->error;
            }

            // Delete the doctor's information from pending_doctors table
            $deleteSql = "DELETE FROM pending_doctors WHERE id=$doctorId";
            $mysqli->query($deleteSql);
        }
    } elseif ($_POST['action'] == 'reject') {
        // Delete the doctor's information from pending_doctors table
        $sql = "DELETE FROM pending_doctors WHERE id=$doctorId";
        if ($mysqli->query($sql) === TRUE) {
            echo "<script>alert('Doctor registration rejected.');</script>";
        } else {
            echo "Error rejecting doctor: " . $mysqli->error;
        }
    }
}

// Fetch pending doctor signups for admin review
$sql = "SELECT * FROM pending_doctors";
$result = $mysqli->query($sql);
?>

<!DOCTYPE html>
<html>

<head>
    <title>QuickCare | Manage User</title>

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

<body class="font">
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
            <h2 class="font mt-2 mb-3">Pending Doctors Registration</h2>
            <?php
            $q = mysqli_query($mysqli, "SELECT * FROM pending_doctors");
            $rr = mysqli_num_rows($q);
            if (!$rr) {
                echo "<h2 class='font' style='color:red'>No pending registrations!!!</h2>";
            } else {
                ?>
                <table class="table table-bordered table-hover mb-2">
                    <tr class="success">
                        <th>Name</th>
                        <th>Username</th>
                        <th>License Photo</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                    <?php
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row['fullname'] . "</td>";
                            echo "<td>" . $row['username'] . "</td>";
                            ?>
                            <td class="w-25 "><img class="img-fluid w-75"
                                    src="../admin/uploads/license/<?php echo $row['license']; ?>" alt="" />

                                <?php
                                echo "<td>" . $row['email'] . "</td>";
                                echo "<td>
                        <form method='post' action='" . $_SERVER['PHP_SELF'] . "'>
                            <input type='hidden' name='doctor_id' value='" . $row['id'] . "'>
                            <button type='submit' class='btn btn-success' name='action' value='accept'>Accept</button>
                            <button type='submit' class='btn btn-danger' name='action' value='reject'>Reject</button>
                        </form>
                      </td>";
                                echo "</tr>";
                        }
                    }
            } ?>
            </table>
</body>

</html>