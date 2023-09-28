<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

</head>

<header id="header">
    <nav class="navbar navbar-expand-lg navbar-light bg-white flex-column border-0">
        <div class="container-fluid">
            <div class="container px-4 w-75">
                <div class="navbar-brand">
                    <a href="./index.php"><img class="img-fluid" width="18%" src="./assets/images/logos/quickcare.png"
                            href="./index.php" alt="Strumo" /></a>
                    <a class="navbar-brand text-dark a" style="font-family:'Trebuchet MS'; font-size:30px;"
                        href="./index.php"><strong class="hov">QuickCare</strong></a>
                </div>
            </div>
            <div class="container w-75" style="font-family:'Lora', serif; font-size:14px;">
                <button class="navbar-toggler text-white" type="button" data-toggle="collapse"
                    data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Menu-->
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-3 mb-lg-0 ms-lg-4 text-dark">
                        <li class="nav-item dropdown dropdown position-static">
                            <a class="nav-link " href="./index.php">
                                <h6>Home</h6>
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#about">
                                <h6>About</h6>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <?php
                            if (!isset($_SESSION['username'])) {
                                echo '<a class="nav-link" href="login.php">
                                <h6>Appointment</h6>
                            </a>';
                            } else {
                                echo '<a class="nav-link" href="appointment.php">
                                <h6>Appointment</h6>
                            </a>';
                            }
                            ?>
                        </li>
                        <li class="nav-item dropdown">
                            <?php
                            if (!isset($_SESSION['username'])) {
                                echo '<a class="nav-link" href="login.php">
                                <h6>Booking</h6>
                            </a>';
                            } else {
                                echo '<a class="nav-link" href="booking.php">
                                <h6>Booking</h6>
                            </a>';
                            } ?>
                        </li>


                        <li class="nav-item">
                            <?php
                            if (isset($_SESSION['username'])) {
                                echo '<a class="nav-link"><h6>' . $_SESSION['username'];
                                '</h6></a>';
                            } else {
                                echo '<a class="nav-link" href="./register.php">
                                <h6>Login</h6>
                            </a>';
                            }
                            ?>
                            </h6></a>
                        </li>
                        <li class="nav-item">
                            <!-- <a class="nav-link a text-light px-4" href="./logout.php"><b class=" hov"> -->
                            <?php if (isset($_SESSION['username'])) {
                                echo '<div class="dropdown">
                                <a class="nav-link " href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <h6><i class="bi bi-gear text-dark"></i>

                                </h6></a>
                                <div class="dropdown-menu border-secondary" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="./useredit.php">Edit Profile</a>
                                    <a class="dropdown-item" href="./logout.php">Logout</a>
                                </div>
                            </div>';
                            }
                            ?>
                            </h6></a>
                        </li>


                    </ul>
                    <!-- / Menu-->
                </div>
                <!-- / Main Navigation-->
            </div>
        </div>

    </nav>
</header>