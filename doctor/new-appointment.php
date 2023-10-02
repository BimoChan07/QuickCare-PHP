<?php
session_start();
error_reporting(0);
include('./includes/dbconn.php');
include('./includes/dbconnect.php');
if (strlen($_SESSION['damsid'] == 0)) {
	header('location:logout.php');
} else {



	?>
	<!DOCTYPE html>
	<html lang="en">

	<head>

		<title>QuickCare | New Appointment Detail</title>

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
						<!-- DOM dataTable -->
						<div class="col-md-12">
							<div class="widget" style="border-radius:15px">

								<header class="widget-header">
									<h4 class="widget-title">New Appointment</h4>
								</header><!-- .widget-header -->
								<div class="widget-body d-flex m-auto justify-content-center">

									Sort by:&nbsp;<select name="urgency" onchange="sortAppointments()" class="urgency">
										<option value="All">All</option>
										<option value="Normal">Normal</option>
										<option value="Urgent">Urgent</option>
									</select>
									<hr class="widget-separator">
									<div class="widget-body">
										<div class="table-responsive">
											<table
												class="table table-bordered table-hover js-basic-example dataTable table-custom">

												<thead>
													<tr>
														<th>S.No</th>
														<th>Appointment Number</th>
														<th>Patient Name</th>
														<th>Mobile Number</th>
														<th>Urgency</th>
														<th>Status</th>
														<th>Action</th>

													</tr>
												</thead>

												<tbody id="appointmentTableBody" name="appointmentTableBody">
													<?php
													$docid = $_SESSION['damsid'];
													$sql = "SELECT * from appointment where Status is null && Doctor=:docid";
													$query = $dbh->prepare($sql);
													$query->bindParam(':docid', $docid, PDO::PARAM_STR);
													$query->execute();
													$results = $query->fetchAll(PDO::FETCH_OBJ);

													$cnt = 1;
													if ($query->rowCount() > 0) {
														foreach ($results as $row) { ?>


															<tr class="<?php echo $row->priority ?>">
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
																<td class="urgency">
																	<?php echo htmlentities($row->priority); ?>
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

																<td><a href="view-appointment-detail.php?editid=<?php echo htmlentities($row->ID); ?>&&aptid=<?php echo htmlentities($row->AppointmentNumber); ?>"
																		class="btn btn-primary">View</a></td>

															</tr>
															<?php $cnt = $cnt + 1;
														}
													} ?>

												</tbody>
												<tfoot>

												</tfoot>
											</table>
										</div>
									</div><!-- .widget-body -->
								</div><!-- .widget -->
							</div><!-- END column -->


						</div><!-- .row -->
				</section><!-- .app-content -->
			</div><!-- .wrap -->
			<!-- APP FOOTER -->
			<?php include_once('includes/footer.php'); ?>
			<!-- /#app-footer -->
		</main>

		<script src="libs/bower/jquery/dist/jquery.js"></script>
		<script src="libs/bower/jquery-ui/jquery-ui.min.js"></script>
		<script src="libs/bower/jQuery-Storage-API/jquery.storageapi.min.js"></script>
		<script src="libs/bower/bootstrap-sass/assets/javascripts/bootstrap.js"></script>
		<script src="libs/bower/jquery-slimscroll/jquery.slimscroll.js"></script>
		<script src="libs/bower/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
		<script src="libs/bower/PACE/pace.min.js"></script>
		<script src="assets/js/library.js"></script>
		<script src="assets/js/plugins.js"></script>
		<script src="assets/js/app.js"></script>
		<script src="libs/bower/moment/moment.js"></script>
		<script src="libs/bower/fullcalendar/dist/fullcalendar.min.js"></script>
		<script src="assets/js/fullcalendar.js"></script>
		<script>
			const sortAppointments = () => {
				const select = document.querySelector('select[name="urgency"]');
				const value = select.value;
				const rows = document.querySelectorAll('#appointmentTableBody tr');
				rows.forEach(row => {
					console.log('row name', row.className)
					const urgency = row.querySelector('.urgency').textContent;
					if (value === row.className) {
						row.style.display = 'table-row';
					}
					else if (value === "All") {
						row.style.display = 'table-row';

					}
					else {
						row.style.display = 'none';
					}
				});
			}
		</script>
	</body>

	</html>
<?php } ?>