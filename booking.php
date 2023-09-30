<?php
include('./includes/dbconn.php');
include('./includes/dbconnect.php');
session_start();

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $username = $_SESSION['username'];
    $mobnum = $_POST['phone'];
    $appdate = $_POST['date'];
    $aaptime = $_POST['time'];
    $specialization = $_POST['specialization'];
    $doctorlist = $_POST['doctorlist'];
    $message = $_POST['message'];
    $aptnumber = mt_rand(100000000, 999999999);
    $cdate = date('Y-m-d');

    if ($appdate <= $cdate) {
        echo '<script>alert("Appointment date must be greater than todays date")</script>';
    } else {
        $sql = "insert into appointment(AppointmentNumber,Name,username,MobileNumber,Email,AppointmentDate,AppointmentTime,Specialization,Doctor,Message)values(:aptnumber,:name,:username,:mobnum,:email,:appdate,:aaptime,:specialization,:doctorlist,:message)";
        $query = $dbh->prepare($sql);
        $query->bindParam(':aptnumber', $aptnumber, PDO::PARAM_STR);
        $query->bindParam(':name', $name, PDO::PARAM_STR);
        $query->bindParam(':username', $username, PDO::PARAM_STR);
        $query->bindParam(':mobnum', $mobnum, PDO::PARAM_STR);
        $query->bindParam(':email', $email, PDO::PARAM_STR);
        $query->bindParam(':appdate', $appdate, PDO::PARAM_STR);
        $query->bindParam(':aaptime', $aaptime, PDO::PARAM_STR);
        $query->bindParam(':specialization', $specialization, PDO::PARAM_STR);
        $query->bindParam(':doctorlist', $doctorlist, PDO::PARAM_STR);
        $query->bindParam(':message', $message, PDO::PARAM_STR);

        $query->execute();
        $LastInsertId = $dbh->lastInsertId();
        if ($LastInsertId > 0) {
            echo '<script>alert("Your Appointment Request Has Been Send. We Will Contact You Soon")</script>';
            echo "<script>window.location.href ='index.php'</script>";
        } else {
            echo '<script>alert("Something Went Wrong. Please try again")</script>';
        }
    }
}
$user = $_SESSION['username'];
$q = mysqli_query($mysqli, "SELECT * FROM users WHERE username='$user'");
$row = mysqli_fetch_assoc($q);

?>

<!doctype html>
<html lang="en">

<head>
    <title>QuickCare | Booking</title>
    <!-- Page Meta Tags-->
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
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/images/logos/quickcare.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/logos/quickcare.png" />
    <link rel="mask-icon" href="./assets/images/favicon/safari-pinned-tab.svg" color="#5bbad5" />
    <meta name="msapplication-TileColor" content="#da532c" />
    <meta name="theme-color" content="#ffffff" />
    <!-- Vendor CSS -->
    <link rel="stylesheet" href="./assets/css/libs.bundle.css" />
    <!-- Main CSS -->
    <link rel="stylesheet" href="./assets/css/style.css" />
    <link rel="stylesheet" href="./assets/css/bootstrap.css" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->

    <link href="css/bootstrap-icons.css" rel="stylesheet">

    <link href="css/owl.carousel.min.css" rel="stylesheet">

    <link href="css/owl.theme.default.min.css" rel="stylesheet">

    <link href="css/templatemo-medic-care.css" rel="stylesheet">
    <script>
        function getdoctors(val) {
            //    alert(val);
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

<body class="font">

    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-5 col-12 mx-auto">
                <div class="booking-form">
                    <?php
                    if (!$_SESSION['username']) {
                        echo "<h2 style='color:red'>No appointment found !!!</h2>";
                    } else {
                        ?>

                        <form role="form" method="POST" class="border border-1 border-secondary" style="border-radius:15px">
                            <div class="container">
                                <span class="d-flex justify-content-end mt-3">
                                    <a href="./index.php" class="myA">Go Back</a>
                                </span>
                                <h2 class="text-center mb-lg-3 mb-2">Book Now</h2>
                                <div class="mb-2">
                                    <input type="text" name="name" id="name" value="<?php echo $row['fullname'] ?>"
                                        class="form-control" placeholder="Full name" required='true'>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-auto col-md-6 form-group">
                                        <input type="number" name="age" id="age" pattern="" class="form-control"
                                            placeholder="Age" value="<?php echo $row['age'] ?>" required='true'>
                                    </div>
                                    <div class="col-auto col-md-6 form-group">
                                        <input type="number" name="phone" id="phone" class="form-control"
                                            placeholder="Phone Number" value="<?php echo $row['phone'] ?>" maxlength="10">
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-auto col-md-6 form-group">
                                        <input type="email" name="email" id="email" pattern="" class="form-control"
                                            placeholder="Email" value="<?php echo $row['email'] ?>" required='true'>
                                    </div>

                                    <div class="col-auto col-md-6 form-group">
                                        <input type="text" name="username" id="username" placeholder="Username"
                                            class="form-control" value="<?php echo $row['username'] ?>">
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-auto col-md-6 form-group">
                                        <select onChange="getdoctors(this.value);" name="specialization" id="specialization"
                                            class="form-control" required>
                                            <option value="">Select specialization</option>
                                            <?php
                                            $sql = "SELECT * FROM specialization";
                                            $stmt = $dbh->query($sql);
                                            $stmt->setFetchMode(PDO::FETCH_ASSOC);
                                            while ($row = $stmt->fetch()) {
                                                ?>
                                                <option value="<?php echo $row['ID']; ?>">
                                                    <?php echo $row['Specialization']; ?>
                                                </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <select name="doctorlist" id="doctorlist" class="form-control">
                                            <option value="">Select Doctor</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-auto col-md-6 form-group ">
                                        <h6 class="mx-auto"> Enter booking date:</h6><input type="date" name="date"
                                            id="date" value="" class="form-control" placeholder="Enter your booking date">

                                    </div>

                                    <div class="col-auto col-md-6 form-group">
                                        <h6 class="mx-auto">Enter booking time:</h6><input type="time" name="time" id="time"
                                            value="" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group mb-3">
                                    <textarea class="form-control" rows="5" id="message" name="message"
                                        placeholder="Additional Message"></textarea>
                                </div>

                                <div class="col-lg-3 col-md-4 col-6 mx-auto mb-2">
                                    <button type="submit" class="form-control btn btn-outline-dark" name="submit"
                                        id="submit-button">Book Now</button>
                                </div>
                            </div>
                        </form>
                    <?php } ?>

                </div>
            </div>

        </div>
    </div>
    </section>
    </main>
    <!-- JAVASCRIPT FILES -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/scrollspy.min.js"></script>
    <script src="assets/js/custom.js"></script>
</body>

</html>