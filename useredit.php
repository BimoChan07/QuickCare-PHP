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

<body class="bg-dark">
    <?php
    // require './includes/menu.php';
    ?>

    <section class="">
        <div class="container font">
            <div class="d-flex justify-content-center align-items-center">

                <div class="d-flex justify-content-center m-auto mt-1 ">
                    <div class="card w-50 wid text-black border" style="border-radius: 21px;">
                        <div class="card-body">
                            <a href="./index.php" class="myA d-flex justify-content-end">Go back</a>
                            <form method="POST" class="mx-3 mx-md-5">

                                <img src="./assets/images/logos/quickcare.png" width="20%" alt="QuickCare"
                                    class="center">
                                <h5 class="text-dark`x` d-flex justify-content-center mt-1 mb-2">Edit Profile</h5>

                                <div class="form-group mb-2">
                                    <div class="col-sm-4">
                                        <?php echo @$err; ?>
                                    </div>
                                </div>

                                <div class="form-group mb-2">
                                    <b>Enter New Name</b>
                                    <input type="text" name="fname" class="border-secondary form-control"
                                        value="<?php echo $res['fullname']; ?>">
                                </div>

                                <div class="form-group mb-2">
                                    <b>Enter New Age</b>
                                    <input type="text" name="age" class="border-secondary form-control"
                                        value="<?php echo $res['age']; ?>">
                                </div>

                                <div class="form-group mb-2">
                                    <b>Enter New Phone No</b>
                                    <input type="text" name="phone" class="border-secondary form-control"
                                        value="<?php echo $res['phone']; ?>">
                                </div>
                                <div class="form-group mb-2">
                                    <b>Enter New Email</b>
                                    <input type="email" name="email" class="border-secondary form-control"
                                        value="<?php echo $res['email']; ?>">
                                </div>

                                <div class="form-group mb-2">
                                    <b>Enter New Username</b>
                                    <input type="text" name="username" class="border-secondary form-control"
                                        value="<?php echo $res['username']; ?>">
                                </div>

                                <div class="form-group mb-2">
                                    <b>Enter New Password</b>
                                    <input type="password" name="password" class="border-secondary form-control"
                                        value="<?php echo $res['password']; ?>">
                                </div>

                                <div class="text-white form-group mt-4 mb-3">
                                    <input type="submit" value="Update" name="update" class="btn btn-primary" />
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