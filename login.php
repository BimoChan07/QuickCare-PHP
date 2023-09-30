<!doctype html>
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
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;600&family=Roboto:wght@300;400;700&display=auto"
        rel="stylesheet">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/images/logos/quickcarew.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/logos/quickcarew.png" />
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
    <title>QuickCare | Login</title>

</head>

<body class="font" background="./assets/images/banners/opa.png">

    <section class="">
        <div class="container">
            <div class="d-flex justify-content-center align-items-center mt-3">
                <div class="col-md-5 d-flex justify-content-center m-auto">
                    <div class="card mt-3 wid text-black border" style="border-radius: 20px;">
                        <div class="card-body p-4 m-0">
                            <span class="d-flex justify-content-end">
                                <a href="./index.php" class="myA">Go Back</a>
                            </span>

                            <form name="myForm" class="font" method="POST" action="./logdb.php">
                                <img class="d-flex justify-content-center m-auto img-fluid" width="40%"
                                    src="./assets/images/logos/quickcare.png" />
                                <h3 class="text-center mb-3 fs-2">Login</h3>
                                <div class="form-group">
                                    <label for="username">
                                        <h5>Username: <span class=" text-danger">*</span></h5>
                                    </label>
                                    <input type="text" id="username" name="username" required placeholder="Username"
                                        class="form-control border-secondary" />
                                </div>

                                <div class="form-group">
                                    <label for="password" class="mt-3">
                                        <h5>Password: <span class="text-danger">*</span></h5>
                                    </label>
                                    <div class="input-group mb-1">
                                        <input type="password" class="form-control border-secondary" name="password"
                                            id="password" placeholder="Password" onfocus="toggleVisibility()"
                                            aria-label=" Recipient's username" aria-describedby="button-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary" onclick="togglePassword()"
                                                type=" button" id="button-addon2">Show</button>
                                        </div>
                                    </div>
                                </div>

                                <div class=" text-white">
                                    <button name="login" id="login"
                                        class="d-flex m-auto justify-content-center btn btn-dark text-white form group mt-3">Login</button>
                                </div>
                                <div class="form-group d-flex justify-content-center mt-3">
                                    Don't have an account? &nbsp
                                    <a href="./signup.php" class="myA">Sign Up</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Main Section-->
    <!-- Theme JS -->
    <!-- Vendor JS -->
    <script src="./assets/js/vendor.bundle.js"></script>
    <!-- Theme JS -->
    <script src="./assets/js/theme.bundle.js"></script>
</body>

</html>