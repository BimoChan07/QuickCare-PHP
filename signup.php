<!DOCTYPE html>
<html lang="en">

<!-- Head -->

<head>
    <!-- Page Meta Tags-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <!-- Custom Google Fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;600&family=Roboto:wght@300;400;700&display=auto" rel="stylesheet">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/images/logos/webw.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/logos/webw.png" />
    <link rel="mask-icon" href="./assets/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="./assets/css/libs.bundle.css" />

    <!-- Main CSS -->
    <link rel="stylesheet" href="./assets/css/bootstrap.css" />
    <link rel="stylesheet" href="./assets/css/style.css" />
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script type="text/javascript" src="./assets/js/login.js"></script>
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
    <title>Strumo | Login</title>

</head>

<body class="font bg-dark">

    <!-- Main Section-->
    <!-- <section class="mt-0 overflow-hidden vh-100 d-flex justify-content-center align-items-center p-5 "> -->
    <section class="">
        <div class="container">
            <div class="d-flex justify-content-center align-items-center mt-4">

                <div class="col-5 d-flex justify-content-center m-auto">
                    <div class="card mb-5 mt-5 text-black border" style="border-radius: 25px;">
                        <div class="card-body p-4 mt-1">
                            <span class="d-flex justify-content-end">
                                <a href="./index.php" class="myA">Go Back</a>
                            </span>
                            <img class="d-flex justify-content-center m-auto img-fluid" width="35%" src="./assets/images/logos/quickcare.png" />
                            <h4 class="text-center mb-3">Signup</h4>
                            <form action="regdb.php" name="form" class="mx-1 mx-md-4" id="form" method="POST" enctype="multipart/form-data">

                                <div class="form-group mb-2">
                                    <input type="text" required name="fname" id="fname" placeholder="Name" class="form-control border-secondary" />
                                </div>

                                <div class="form-group mb-2">
                                    <input type="number" required name="age" id="age" class="form-control border-secondary" placeholder="Age" />
                                </div>

                                <div class="form-group mb-2">
                                    <input type="phone" required name="phone" id="phone" class="form-control border-secondary" placeholder="Phone Number" />
                                    <span class="text-danger phone-not-found"></span>
                                </div>

                                <div class="form-group mb-2">
                                    <input type="username" required name="username" id="username" class="form-control border-secondary" placeholder="Username" />
                                </div>

                                <div class="form-group mb-2">
                                    <div class="input-group mb-3">
                                        <input type="password" class="form-control border-secondary" name="password" id="password" placeholder="Password" onfocus="toggleVisibility()" aria-label=" Recipient's username" aria-describedby="button-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary" onclick="togglePassword()" type=" button" id="button-addon2">Show</button>
                                        </div>
                                    </div>
                                </div>

                                <div class=" text-white form-group mt-3">
                                    <input type="submit" value="Submit" name="login" id="login" class="btn btn-dark text-white d-flex justify-content-center m-auto" />
                                </div>
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