<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Medfolio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700,800,900">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,900">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body>
  <?php include('mysql.php'); ?>
    <nav class="navbar navbar-light navbar-expand-md" style="background-color: #ffffff;">
        <div class="container-fluid"><a class="navbar-brand d-xl-flex align-items-xl-center" href="#" style="font-family: Montserrat, sans-serif;"><br><div class="d-none d-xl-flex medfolio" style="padding-top: 15px;"><p class="d-inline d-xl-flex" style="color: rgba(239,29,54,0.9);"><strong>Med</strong></p><p class="d-inline"><strong>folio</strong></p><p><i class="fa fa-heartbeat heart" style="font-size: 18px;margin: 3px;"></i></p></div></a>
            <button
                data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse d-block" id="navcol-1">
                    <ul class="nav navbar-nav d-block d-xl-flex" style="width: 100%;">
                        <li class="nav-item details" role="presentation" style="margin: 10px;"><a class="nav-link" href="doctors_check_patients.php"><button class="btn btn-light" type="submit" style="color: grey;border-radius: 0;border-color: grey;font-family: Montserrat, sans-serif;">Check Patients Details</button></a></li>
                        <li
                            class="nav-item details" role="presentation" style="margin: 10px;"><a class="nav-link" href="add_details_doctors.php"><button class="btn btn-light" type="submit" style="color: grey;border-radius: 0;border-color: grey;font-family: Montserrat, sans-serif;text-decoration: none;">Add/Edit Details</button></a></li>
                            <li
                                class="nav-item d-inline float-right" role="presentation" style="margin: 10px;"><a class="nav-link" href="#"><button class="btn btn-light active" type="submit" style="color: grey;border-radius: 0;border-color: grey;font-family: Montserrat, sans-serif;"><?php echo $_SESSION["name"]; ?></button></a></li>
                                <li class="nav-item details"
                                    role="presentation" style="margin: 10px;"><a class="nav-link" href="login.php"><button class="btn btn-light" type="submit" style="color: grey;border-radius: 0;border-color: grey;font-family: Montserrat, sans-serif;text-decoration: none;">SignOut</button></a></li>
                    </ul>
                </div>
        </div>
    </nav>
    <div class="container" style="padding-top: 50px;padding-bottom: 50px;margin-bottom: 20px;">
        <h1 id="d_name" style="text-align: center;font-family: Montserrat, sans-serif;"><strong><?php echo $_SESSION["name"]; ?></strong></h1>
        <div class="d-block" style="text-align: center;margin: 10px;">
            <p class="d-inline" style="text-align: center;font-family: Montserrat, sans-serif;">Aadhar Number:&nbsp;</p>
            <p class="d-inline aadhar_number" style="text-align: center;font-family: Montserrat, sans-serif;"><strong><?php echo $_SESSION["aan"]; ?></strong></p>
        </div>
        <div class="d-block" style="text-align: center;margin: 10px;">
            <p class="d-inline" style="text-align: center;font-family: Montserrat, sans-serif;">Doctor Identification Number:&nbsp;</p>
            <p class="d-inline aadhar_number" style="text-align: center;font-family: Montserrat, sans-serif;"><strong><?php echo $_SESSION["din"]; ?></strong></p>
        </div>
        <!-- <div class="d-block" style="text-align: center;margin: 10px;">
            <p class="d-inline" style="text-align: center;font-family: Montserrat, sans-serif;">State Medical Council:&nbsp;</p>
            <p class="d-inline aadhar_number" style="text-align: center;font-family: Montserrat, sans-serif;"><strong>{SMC}</strong></p>
        </div> -->
        <div class="d-block" style="text-align: center;margin: 10px;">
            <p class="d-inline" style="text-align: center;font-family: Montserrat, sans-serif;">Year of Registration:&nbsp;</p>
            <p class="d-inline aadhar_number" style="text-align: center;font-family: Montserrat, sans-serif;"><strong><?php echo $_SESSION["yor"]; ?></strong></p>
        </div>
        <div class="d-block" style="text-align: center;margin: 20px;">
            <h1 class="d-inline" style="padding: 5px;background-color: rgb(0,225,90);color: white;font-family: Montserrat, sans-serif;"><strong>Verified!</strong></h1>
        </div>
    </div>
    <div class="footer-clean" style="border-top: 1px solid grey;">
        <footer>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-4 col-md-3 item">
                        <h3 style="font-family: Montserrat, sans-serif;">About</h3>
                        <ul>
                            <li><a href="#" style="font-family: Montserrat, sans-serif;">Medfolio</a></li>
                            <li style="font-family: Montserrat, sans-serif;"><a href="#">Team</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a>
                        <p class="copyright">MEDFOLIO © 2020</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
</body>

</html>
