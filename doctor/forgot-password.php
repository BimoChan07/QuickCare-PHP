<?php
session_start();
error_reporting(0);
include('./includes/dbconn.php');

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$phone = $_POST['phone'];
	$newpassword = md5($_POST['newpassword']);
	$sql = "SELECT username FROM doctor WHERE username=:username and phone=:phone";
	$query = $dbh->prepare($sql);
	$query->bindParam(':username', $username, PDO::PARAM_STR);
	$query->bindParam(':phone', $phone, PDO::PARAM_STR);
	$query->execute();
	$results = $query->fetchAll(PDO::FETCH_OBJ);
	if ($query->rowCount() > 0) {
		$con = "update doctor set password=:newpassword where username=:username and phone=:phone";
		$chngpwd1 = $dbh->prepare($con);
		$chngpwd1->bindParam(':username', $username, PDO::PARAM_STR);
		$chngpwd1->bindParam(':phone', $phone, PDO::PARAM_STR);
		$chngpwd1->bindParam(':newpassword', $newpassword, PDO::PARAM_STR);
		$chngpwd1->execute();
		echo "<script>alert('Your Password succesfully changed');</script>";
	} else {
		echo "<script>alert('Email id or Mobile no is invalid');</script>";
	}
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

	<title>QuickCare | Forgot Page</title>


	<link rel="stylesheet" href="libs/bower/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="libs/bower/material-design-iconic-font/dist/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" href="libs/bower/animate.css/animate.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/core.css">
	<link rel="stylesheet" href="assets/css/misc-pages.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900,300">
	<script type="text/javascript">
		function valid() {
			if (document.chngpwd.newpassword.value != document.chngpwd.confirmpassword.value) {
				alert("New Password and Confirm Password Field do not match  !!");
				document.chngpwd.confirmpassword.focus();
				return false;
			}
			return true;
		}
	</script>
</head>

<body class="simple-page">
	<div id="back-to-home">
		<a href="../index.php" class="btn btn-outline btn-default"><i class="fa fa-home zoomIn"></i></a>
	</div>
	<div class="simple-page-wrap">
		<div class="simple-page-logo">

			<span style="color: white"><i class="fa fa-gg"></i></span>
			<span style="color: white">QuickCare</span>

		</div><!-- logo -->
		<div class="simple-page-form" id="login-form">
			<h4 class="form-title m-b-xl text-center">Reset Your Password</h4>
			<form method="post" name="chngpwd" onSubmit="return valid();">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Username" required="true" name="username">
				</div>

				<div class="form-group">
					<input type="text" class="form-control" name="phone" placeholder="Mobile Number" required="true">
				</div>
				<div class="form-group">
					<input class="form-control" type="password" name="newpassword" placeholder="New Password"
						required="true" />
				</div>
				<div class="form-group">
					<input class="form-control" type="password" name="confirmpassword" placeholder="Confirm Password"
						required="true" />
				</div>


				<input type="submit" class="btn btn-outline-dark" name="submit" value="RESET">
			</form>
		</div><!-- #login-form -->

		<div class="simple-page-footer">
			<p style="color: white">Do you have an account ?<a href="login.php"> SIGN IN</a></p>

		</div><!-- .simple-page-footer -->


	</div><!-- .simple-page-wrap -->
</body>

</html>