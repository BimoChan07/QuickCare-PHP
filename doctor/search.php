<?php
session_start();
error_reporting(0);
include('includes/dbconn.php');
if (strlen($_SESSION['damsid'] == 0)) {
	header('location:logout.php');
} else {
	?>
	<!DOCTYPE html>
	<html lang="en">

	<head>
		<title>QuickCare | Search</title>

		<link rel="stylesheet" href="libs/bower/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="libs/bower/material-design-iconic-font/dist/css/material-design-iconic-font.css">
		<!-- build:css assets/css/app.min.css -->
		<link rel="stylesheet" href="libs/bower/animate.css/animate.min.css">
		<link rel="stylesheet" href="libs/bower/fullcalendar/dist/fullcalendar.min.css">
		<link rel="stylesheet" href="libs/bower/perfect-scrollbar/css/perfect-scrollbar.css">
		<link rel="stylesheet" href="assets/css/bootstrap.css">
		<link rel="stylesheet" href="assets/css/core.css">
		<link rel="stylesheet" href="assets/css/app.css">
		<link rel="icon" type="image/x-icon" href="../assets/images/logos/quickcarew.png" />

		<!-- endbuild -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900,300">
		<script src="libs/bower/breakpoints.js/dist/breakpoints.min.js"></script>
		<script>
			Breakpoints();
		</script>
	</head>

	<body class="menubar-left menubar-unfold menubar-light theme-primary">
		<!--============= start main area -->


		<?php include_once('includes/header.php'); ?>

		<?php include_once('includes/sidebar.php'); ?>



		<!-- APP MAIN ==========-->
		<main id="app-main" class="app-main">
			<div class="wrap">
				<section class="app-content">
					<div class="row">

						<div class="col-lg-12 col-12 mx-auto">
							<div class="booking-form">

								<h2 class="text-center mb-lg-3 mb-5">Search Appointment History by Appointment
									Number/Name/Mobile No</h2>

								<form role="form" method="post">
									<div class="row">
										<div class="col-lg-9">
											<input id="searchdata" type="text" name="searchdata" required="true"
												class="form-control" style="border-radius:5px"
												placeholder="Appointment No./Name/Mobile No.">
										</div>

										<div class="col-lg-3 col-md-4 col-6 mx-auto mt-5">
											<button type="submit" class="form-control btn btn-dark" name="search"
												id="submit-button">Check</button>
										</div>
									</div>
								</form>

							</div>
							<?php
							if (isset($_POST['search'])) {

								$sdata = $_POST['searchdata'];
								?>
								<h4 align="center">Result against "
									<?php echo $sdata; ?>" keyword
								</h4>

								<div class="widget-body">
									<div class="table-responsive">
										<table class="table table-bordered table-hover js-basic-example dataTable table-custom">
											<thead>
												<tr>
													<th>S.No</th>
													<th>Appointment Number</th>
													<th>Patient Name</th>
													<th>Mobile Number</th>
													<th>Email</th>
													<th>Status</th>
													<th>Remark</th>

												</tr>
											</thead>

											<tbody>
												<?php

												$sql = "SELECT * from appointment where AppointmentNumber like '$sdata%' || Name like '$sdata%' || MobileNumber like '$sdata%'";
												$query = $dbh->prepare($sql);
												$query->execute();
												$results = $query->fetchAll(PDO::FETCH_OBJ);

												$cnt = 1;
												if ($query->rowCount() > 0) {
													foreach ($results as $row) { ?>
														<tr>
															<td>
																<?php echo htmlentities($cnt); ?>
															</td>
															<td>
																<?php echo htmlentities($row->AppointmentNumber); ?>
															</td>
															<td>
																<?php echo htmlentities($row->Name); ?>
															</td>
															<td>
																<?php echo htmlentities($row->MobileNumber); ?>
															</td>
															<td>
																<?php echo htmlentities($row->Email); ?>
															</td>
															<?php if ($row->Status == "") { ?>

																<td>
																	<?php echo "Not Updated Yet"; ?>
																</td>
															<?php } else { ?>
																<td>
																	<?php echo htmlentities($row->Status); ?>
																</td>
															<?php } ?>

															<?php if ($row->Remark == "") { ?>

																<td>
																	<?php echo "Not Updated Yet"; ?>
																</td>
															<?php } else { ?>
																<td>
																	<?php echo htmlentities($row->Remark); ?>
																</td>
															<?php } ?>

														</tr>


													</tbody>

													<?php
													$cnt = $cnt + 1;
													}
												} else { ?>
												<tr>
													<td colspan="8"> No record found against this search</td>

												</tr>
											<?php }
							} ?>
									</table>
								</div>

							</div>
						</div>
				</section>

		</main>
		<?php include_once('includes/footer.php'); ?>
		<script src="libs/bower/jquery/dist/jquery.js"></script>
		<script src="libs/bower/jquery-ui/jquery-ui.min.js"></script>
		<script src="libs/bower/jQuery-Storage-API/jquery.storageapi.min.js"></script>
		<script src="libs/bower/bootstrap-sass/assets/javascripts/bootstrap.js"></script>
		<script src="libs/bower/jquery-slimscroll/jquery.slimscroll.js"></script>
		<script src="libs/bower/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
		<script src="libs/bower/PACE/pace.min.js"></script>
		<!-- endbuild -->

		<script src="assets/js/library.js"></script>
		<script src="assets/js/plugins.js"></script>
		<script src="assets/js/app.js"></script>
		<!-- endbuild -->
		<script src="libs/bower/moment/moment.js"></script>
		<script src="libs/bower/fullcalendar/dist/fullcalendar.min.js"></script>
		<script src="assets/js/fullcalendar.js"></script>
	</body>

	</html>
<?php } ?>