<?php
session_start();
error_reporting(0);
include('./includes/dbconn.php');
include('./includes/dbconnect.php');

if (strlen($_SESSION['damsid']) == 0) {
  header('location: logout.php');
} else {

  if (isset($_POST['submit'])) {
    $eid = $_GET['editid'];
    $aptid = $_GET['aptid'];
    $status = $_POST['status'];
    $remark = $_POST['remark'];

    // Update the appointment status and remark
    $sql = "UPDATE appointment SET Status=:status, Remark=:remark WHERE ID=:eid";
    $query = $dbh->prepare($sql);
    $query->bindParam(':status', $status, PDO::PARAM_STR);
    $query->bindParam(':remark', $remark, PDO::PARAM_STR);
    $query->bindParam(':eid', $eid, PDO::PARAM_STR);
    $query->execute();
  }


  ?>



  <!DOCTYPE html>
  <html lang="en">

  <head>

    <title>QuickCare | View Appointment Detail</title>

    <link rel="stylesheet" href="libs/bower/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="libs/bower/material-design-iconic-font/dist/css/material-design-iconic-font.css">
    <!-- build:css assets/css/app.min.css -->
    <link rel="stylesheet" href="libs/bower/animate.css/animate.min.css">
    <link rel="stylesheet" href="libs/bower/fullcalendar/dist/fullcalendar.min.css">
    <link rel="stylesheet" href="libs/bower/perfect-scrollbar/css/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/core.css">
    <link rel="stylesheet" href="assets/css/app.css">
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
              <div class="widget">
                <header class="widget-header">
                  <h4 class="widget-title" style="color: blue">Appointment Details</h4>
                </header><!-- .widget-header -->
                <hr class="widget-separator">
                <div class="widget-body">
                  <div class="table-responsive">
                    <?php
                    $eid = $_GET['editid'];
                    $sql = "SELECT * from appointment where ID=:eid";
                    $query = $dbh->prepare($sql);
                    $query->bindParam(':eid', $eid, PDO::PARAM_STR);
                    $query->execute();
                    $results = $query->fetchAll(PDO::FETCH_OBJ);

                    $cnt = 1;
                    if ($query->rowCount() > 0) {
                      foreach ($results as $row) { ?>
                        <table border="1" class="table table-bordered mg-b-0">
                          <tr>
                            <th>Appointment Number</th>
                            <td>
                              <?php echo $aptno = ($row->AppointmentNumber); ?>

                            </td>
                            <th>Patient Name</th>
                            <td>
                              <?php echo $row->Name;
                              ?>
                            </td>
                          </tr>

                          <tr>
                            <th>Mobile Number</th>
                            <td>
                              <?php echo $row->MobileNumber;
                              ?>
                            </td>
                            <th>Message</th>
                            <td>
                              <?php echo $row->Message;
                              ?>
                            </td>
                          </tr>
                          <tr>
                            <th>Appointment Date</th>
                            <td>
                              <?php echo $row->AppointmentDate;
                              ?>
                            </td>
                            <th>Appointment Time</th>
                            <td>
                              <?php echo $row->AppointmentTime;
                              ?>
                            </td>
                          </tr>

                          <tr>
                            <th>Apply Date</th>
                            <td>
                              <?php echo $row->ApplyDate;
                              ?>
                            </td>
                            <th>Appointment Final Status</th>

                            <td colspan="4">
                              <?php $status = $row->Status;

                              if ($row->Status == "") {
                                echo "Not yet updated";
                              }

                              if ($row->Status == "Approved") {
                                echo "Your appointment has been approved";
                              }


                              if ($row->Status == "Cancelled") {
                                echo "Your appointment has been cancelled";
                              }



                              ; ?>
                            </td>
                          </tr>
                          <tr>

                            <th>Username</th>
                            <td>
                              <?php echo $row->username;
                              ?>
                            </td>

                            <th>Remark</th>
                            <?php if ($row->Remark == "") { ?>

                              <td colspan="3">
                                <?php echo "Not Updated Yet"; ?>
                              </td>
                            <?php } else { ?>
                              <td colspan="3">
                                <?php echo htmlentities($row->Remark);
                                ?>
                              </td>
                            <?php } ?>

                          </tr>

                          <?php $cnt = $cnt + 1;
                      }
                    } ?>

                    </table>

                    <br>


                    <?php

                    if ($status == "") {
                      ?>
                      <button class="btn btn-primary waves-effect waves-light w-lg" data-toggle="modal"
                        data-target="#myModal">Take Action</button>

                    <?php } ?>
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                      aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Take Action</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <table class="table table-bordered table-hover data-tables">

                              <form method="post" name="submit">



                                <tr>
                                  <th>Remark :</th>
                                  <td>
                                    <textarea name="remark" placeholder="Remark" rows="12" cols="14"
                                      class="form-control wd-450" required="true"></textarea>
                                  </td>
                                </tr>

                                <tr>
                                  <th>Status :</th>
                                  <td>

                                    <select name="status" class="form-control wd-450" required="true">
                                      <option value="Approved" selected="true">Approved</option>
                                      <option value="Cancelled">Cancelled</option>

                                    </select>
                                  </td>
                                </tr>
                            </table>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" name="submit" class="btn btn-primary">Update</button>

                            </form>


                          </div>


                        </div>
                      </div>

                    </div>

                  </div>


                </div>
              </div>


            </div>
        </section>
      </div>
      <?php
      extract($_POST);
      if (isset($generate)) {
        mysqli_query($mysqli, "INSERT INTO reports (AppointmentNumber, Name, Username, MobileNumber, Email, AppointmentDate, AppointmentTime, ApplyDate, Status, Remark)
                  VALUES ('$AppointmentNumber', '$Name','$username', '$MobileNumber', '$Email', '$AppointmentDate', '$AppointmentTime', '$ApplyDate', '$Status', '$Remark')");
        $err = "<font color='blue'>Report Generation Failed </font>";
        echo '<script>
      alert("Report Generated");window.location.href="appointment-bwdates.php";
      </script>';
      }
      $eid = $_GET['editid'];
      $username = $_SESSION['username'];
      $q = mysqli_query($mysqli, "SELECT * FROM appointment WHERE ID=$eid");
      $res = mysqli_fetch_array($q);

      ?>
      <div class="container">
        <form name="generate" id="generate" class="form-group" method="POST">
          <input type="hidden" name="AppointmentNumber" value="<?php echo $res['AppointmentNumber']; ?>">
          <input type="hidden" name="Name" value="<?php echo $res['Name']; ?>">
          <input type="hidden" name="username" value="<?php echo $res['username']; ?>">
          <input type="hidden" name="MobileNumber" value="<?php echo $res['MobileNumber']; ?>">
          <input type="hidden" name="Email" value="<?php echo $res['Email']; ?>">
          <input type="hidden" name="AppointmentDate" value="<?php echo $res['AppointmentDate']; ?>">
          <input type="hidden" name="AppointmentTime" value="<?php echo $res['AppointmentTime']; ?>">
          <input type="hidden" name="ApplyDate" value="<?php echo $res['ApplyDate']; ?>">
          <input type="hidden" name="Status" value="<?php echo $res['Status']; ?>">
          <input type="hidden" name="Remark" value="<?php echo $res['Remark']; ?>">
          <button type="submit" name="generate" class="btn btn-success m-l-xl" id="generate">Generate
            Report</button>
        </form>
      </div>
      <?php include_once('includes/footer.php'); ?>
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
    <!-- endbuild -->
    <script src="libs/bower/moment/moment.js"></script>
    <script src="libs/bower/fullcalendar/dist/fullcalendar.min.js"></script>
    <script src="assets/js/fullcalendar.js"></script>
  </body>

  </html>
<?php }
?>