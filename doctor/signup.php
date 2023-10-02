
<?php 
session_start();
error_reporting(0);
include('../includes/dbconn.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;600&family=Roboto:wght@300;400;700&display=auto" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/logos/quickcarew.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/logos/quickcarew.png" />
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="../assets/css/libs.bundle.css" />
    <link rel="stylesheet" href="../assets/css/bootstrap.css" />
    <link rel="stylesheet" href="../assets/css/style.css" />
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script type="text/javascript" src="../assets/js/login.js"></script>
    <!-- Fix for custom scrollbar if JS is disabled-->
    <noscript>
        <style>
               .simplebar-content-wrapper {
                overflow: auto;
            }
        </style>
    </noscript>

    <title>QuickCare | Doctor's Signup</title>

</head>

<body class="font" background="../assets/images/banners/opa.png">

    <section class="">
        <div class="container">
            <div class="d-flex justify-content-center align-items-center mt-2">

                <div class="col-5 d-flex justify-content-center">
                    <div class="card text-black border" style="border-radius: 25px;">
                        <div class="card-body p-3">
                            <span class="d-flex justify-content-end">
                                <a href="../index.php" class="myA">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="25" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
</svg>
                                </a>
                            </span>
                            <img class="d-flex justify-content-center m-auto img-fluid" width="35%" src="../assets/images/logos/quickcare.png" />
                            <h4 class="text-center mb-3">Signup as a Doctor</h4>
                            <form action="reqAdminSignup.php" role="form" name="form" class="mx-1 mx-md-4" id="form" method="POST" enctype="multipart/form-data">

                                <div class="form-group mb-2">
                                    <input type="text" required name="fname" id="fname" placeholder="Name" class="form-control border-secondary" />
                                </div>
                                <div class="row mb-2">
                                    <div class="col-auto col-md-5 form-group">
                                    <input type="number" required name="phone" id="phone" class="form-control border-secondary" placeholder="Phone Number" />
                                    <span class="text-danger phone-not-found"></span>
                                </div>

                                    <div class="col-auto col-md-7 form-group">
                                    <input type="email" required name="email" id="email" class="form-control border-secondary" placeholder="Email" />
                                </div>

                                <div class="form-group">
                                    <label>License Photo</label>
                                    <input type="file" name="license" id="license" class="form-control border-secondary mb-2"
                                        required placeholder="License Photo" />
                                </div>

                                <div class="form-group">
                                    <select class="form-control mb-2 border-secondary" name="specializationid">
                                        <option value="" class="">Choose Specialization</option>
                                        <?php
                                            $sql1="SELECT * from specialization";
                                            $query1 = $dbh -> prepare($sql1);
                                            $query1->execute();
                                            $results1=$query1->fetchAll(PDO::FETCH_OBJ);
                                            
                                            $cnt=1;
                                            if($query1->rowCount() > 0)
                                            {
                                                foreach($results1 as $row1)
                                                {
                                                    ?>
                                        <option value="<?php  echo htmlentities($row1->ID);?>"><?php echo htmlentities($row1->Specialization);?></option><?php $cnt=$cnt+1;}} ?> 
                                    </select>
                                    
		                        </div>
                                
                                <div class="form-group mb-2">
                                    <input type="text" required name="username" id="username" class="form-control border-secondary" placeholder="Username" minlength="6"/>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="input-group">
                                        <input type="password" class="form-control border-secondary" name="password" id="password" placeholder="Password" onfocus="toggleVisibility()" aria-label=" Recipient's username" aria-describedby="button-addon2" pattern="^(?=.*\d)(?=.*[a-zA-Z]).{8,}$"/>
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary" onclick="togglePassword()" type=" button" id="button-addon2">Show</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="input-group mb-2">
                                        <input type="password" class="form-control border-secondary" name="cpassword" id="cpassword" placeholder="Confirm Password" onfocus="toggleCVisibility()" aria-label=" Recipient's username" aria-describedby="button-addon2" pattern="^(?=.*\d)(?=.*[a-zA-Z]).{8,}$"/>
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary" onclick="toggleCPassword()" type=" button" id="button-addon3">Show</button>
                                        </div>
                                    </div>
                                </div>

                                <div class=" text-white form-group mt-2">
                                    <input type="submit" value="Submit" name="login" id="login" class="btn btn-dark text-white d-flex justify-content-center m-auto" />
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