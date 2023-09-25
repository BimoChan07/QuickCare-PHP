<?php
include('./includes/dbconn.php');
    if(isset($_POST['submit']))
  {
    $name=$_POST['name'];
    $mobnum=$_POST['phone'];
    $email=$_POST['email'];
    $appdate=$_POST['date'];
    $aaptime=$_POST['time'];
    $specialization=$_POST['specialization'];
    $doctorlist=$_POST['doctorlist'];
    $message=$_POST['message'];
    $aptnumber=mt_rand(100000000, 999999999);
    $cdate=date('Y-m-d');

if($appdate<=$cdate){
       echo '<script>alert("Appointment date must be greater than todays date")</script>';
} else {
    $sql="insert into appointment(AppointmentNumber,Name,MobileNumber,Email,AppointmentDate,AppointmentTime,Specialization,Doctor,Message)values(:aptnumber,:name,:mobnum,:email,:appdate,:aaptime,:specialization,:doctorlist,:message)";
    $query=$dbh->prepare($sql);
    $query->bindParam(':aptnumber',$aptnumber,PDO::PARAM_STR);
    $query->bindParam(':name',$name,PDO::PARAM_STR);
    $query->bindParam(':mobnum',$mobnum,PDO::PARAM_STR);
    $query->bindParam(':email',$email,PDO::PARAM_STR);
    $query->bindParam(':appdate',$appdate,PDO::PARAM_STR);
    $query->bindParam(':aaptime',$aaptime,PDO::PARAM_STR);
    $query->bindParam(':specialization',$specialization,PDO::PARAM_STR);
    $query->bindParam(':doctorlist',$doctorlist,PDO::PARAM_STR);
    $query->bindParam(':message',$message,PDO::PARAM_STR);

 $query->execute();
   $LastInsertId=$dbh->lastInsertId();
   if ($LastInsertId>0) {
    echo '<script>alert("Your Appointment Request Has Been Send. We Will Contact You Soon")</script>';
echo "<script>window.location.href ='index.php'</script>";
  }
  else
    {
         echo '<script>alert("Something Went Wrong. Please try again")</script>';
    }
}
}
?>
<head>
    <!-- Page Meta Tags-->
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta name="keywords" content="" />
    <!-- Custom Google Fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;600&family=Roboto:wght@300;400;700&display=auto" rel="stylesheet" />
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
    <link rel="stylesheet" href="./assets/css/theme.bundle.css" />
    <link rel="stylesheet" href="./assets/css/style.css" />
    <link rel="stylesheet" href="./assets/css/bootstrap.css" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">



    <!-- Fix for custom scrollbar if JS is disabled-->
    <noscript>
        <style>
            /**
          * Reinstate scrolling for non-JS clients
          */
            .simplebar-content-wrapper {
                overflow: auto;
            }
        </style>
    </noscript>
    <!-- Page Title -->
    <title>QuickCare | Home</title>
</head>
<script>
function getdoctors(val) {
  //  alert(val);
    $.ajax({
    type: "POST",
    url: "get_doctors.php",
    data:'sp_id='+val,
    success: function(data){
    $("#doctorlist").html(data);
}
});
}
</script>
    </head>
<body>
    <?php
    include './includes/header.php';
    ?>
<div class="container">
     
                    <div class="row">
                    
                        <div class="col-lg-8 col-12 mx-auto">
                            <div class="booking-form">
                                
                                <h2 class="text-center mb-lg-3 mb-2">Book an appointment</h2>
                            
                                <form role="form" method="post">
                                    <div class="container">
                                        <div class="mb-3">
                                            <input type="text" name="name" id="name" class="form-control" placeholder="Full name" required='true'>
                                        </div>

                                        <div class="mb-3">
                                            <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email address" required='true'>
                                        </div>
                                   
                                        <div class="mb-3">
                                            <input type="telephone" name="phone" id="phone" class="form-control" placeholder="Enter Phone Number" maxlength="10">
                                        </div>

                                        <div class="mb-3">
                                            <input type="date" name="date" id="date" value="" class="form-control">
                                            
                                        </div>

                                            <div class="mb-3">
                                            <input type="time" name="time" id="time" value="" class="form-control">
                                            
                                        </div>

                                        <div class="col-lg-6 col-12">
                                    <select onChange="getdoctors(this.value);"  name="specialization" id="specialization" class="form-control" required>
                                        <option value="">Select specialization</option>
                                        <!--- Fetching States--->
                                        <?php
                                        $sql="SELECT * FROM specialization";
                                        $stmt=$dbh->query($sql);
                                        $stmt->setFetchMode(PDO::FETCH_ASSOC);
                                        while($row =$stmt->fetch()) { 
                                        ?>
                                        <option value="<?php echo $row['ID'];?>"><?php echo $row['Specialization'];?></option>
                                        <?php }?>
                                    </select>
</div>


    <div class="col-lg-6 col-12">
<select name="doctorlist" id="doctorlist" class="form-control">
<option value="">Select Doctor</option>
</select>
</div>



                                        <div class="col-12">
                                            <textarea class="form-control" rows="5" id="message" name="message" placeholder="Additional Message"></textarea>
                                        </div>

                                        <div class="col-lg-3 col-md-4 col-6 mx-auto">
                                            <button type="submit" class="form-control" name="submit" id="submit-button">Book Now</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </main>
        <?php include_once('includes/footer.php');?>
        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/scrollspy.min.js"></script>
        <script src="js/custom.js"></script>
    </body>
</html>