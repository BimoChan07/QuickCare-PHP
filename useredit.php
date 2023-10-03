<?php
include './includes/dbconnect.php';
session_start();

extract($_POST);
if (isset($update)) {
    mysqli_query($mysqli, "UPDATE users SET fullname='$fname', email='$email',age='$age',phone='$phone',username='$username',password='$password' where username='" . $_SESSION['username'] . "'");
    $err = "<font color='blue'>Profile updated </font>";
    echo '<script>
	alert("Profile Updated");
	window.location.href="index.php";
	</script>';
}

//select old product

$q = mysqli_query($mysqli, "SELECT * FROM users WHERE username='" . $_SESSION['username'] . "'");
$res = mysqli_fetch_array($q);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>QuickCare | User Edit Profile</title>
    <link rel="icon" type="image/x-icon" href="../assets/images/logos/quickcarew.png" />

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css" />
    <link rel="stylesheet" href="./assets/css/style.css" />
    <link rel="stylesheet" href="./assets/css/bootstrap.css" />
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css" />

</head>

<body class="font" background="./assets/images/banners/123.jpg">
    <?php
    // require './includes/menu.php';
    ?>

    <section class="">
        <div class="container font">
            <div class="d-flex justify-content-center align-items-center">

                <div class="col-5 d-flex justify-content-center">
                    <div class="card text-black border opacity-75 m-4" style="border-radius: 25px;">
                        <div class="card-body px-4 py-0">
                            <a href="./index.php" class="myA d-flex justify-content-end"><i
                                    class="bi bi-arrow-left"></i></a>
                            <form method="POST" class="">

                                <img src="./assets/images/logos/quickcare.png" width="25%" alt="QuickCare"
                                    class="center">
                                <h5 class="text-dark`x` d-flex justify-content-center mt-1 mb-2">Edit Profile</h5>

                                <div class="form-group mb-2">
                                    <div class="col-sm-4">
                                        <?php echo @$err; ?>
                                    </div>
                                </div>

                                <div class="form-group mb-2">
                                    <b>New Name</b>
                                    <input type="text" name="fname" class="border-secondary form-control"
                                        value="<?php echo $res['fullname']; ?>">
                                </div>

                                <div class="row mb-2">
                                    <div class="col-auto col-md-5 form-group">
                                        <b>New Age</b>
                                        <input type="text" name="age" class="border-secondary form-control"
                                            value="<?php echo $res['age']; ?>">
                                    </div>
                                    <div class="col-auto col-md-7 form-group">

                                        <div class="form-group mb-2">
                                            <b>New Phone</b>
                                            <input type="text" name="phone" class="border-secondary form-control"
                                                value="<?php echo $res['phone']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group mb-2">
                                        <b>New Email</b>
                                        <input type="email" name="email" class="border-secondary form-control"
                                            value="<?php echo $res['email']; ?>">
                                    </div>

                                    <div class="form-group mb-2">
                                        <b>New Username</b>
                                        <input type="text" name="username" class="border-secondary form-control"
                                            value="<?php echo $res['username']; ?>">
                                    </div>

                                    <div class="form-group mb-2">
                                        <b>New Password</b>
                                        <input type="password" name="password" class="border-secondary form-control"
                                            value="<?php echo $res['password']; ?>">
                                    </div>

                                    <div class="text-white d-flex justify-content-center form-group mt-2 mb-2">
                                        <input type="submit" value="Update" name="update"
                                            class="btn btn-primary" />&nbsp;
                                        <a href="./index.php" class="btn btn-dark">Exit</a>
                                    </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</body>

</html>