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
    <nav class="navbar navbar-light navbar-expand-md" style="background-color: #ffffff;">
        <div class="container-fluid"><a class="navbar-brand d-xl-flex align-items-xl-center" href="#" style="font-family: Montserrat, sans-serif;"><br><div class="d-none d-xl-flex medfolio" style="padding-top: 15px;"><p class="d-inline d-xl-flex" style="color: rgba(239,29,54,0.9);"><strong>Med</strong></p><p class="d-inline"><strong>folio</strong></p><p><i class="fa fa-heartbeat heart" style="font-size: 18px;margin: 3px;"></i></p></div></a>
            <button
                data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse d-block" id="navcol-1">
                    <ul class="nav navbar-nav d-block d-xl-flex" style="width: 100%;">
                        <li class="nav-item d-inline float-right" role="presentation" style="margin: 10px;"><a class="nav-link" href="login.html"><button class="btn btn-light" type="submit" style="color: grey;border-radius: 0;border-color: grey;font-family: Montserrat, sans-serif;">Login</button></a></li>
                        <li class="nav-item d-inline float-right"
                            role="presentation" style="margin: 10px;"><a class="nav-link" href="#"><button class="btn btn-light" type="button" style="color: grey;border-radius: 0;border-color: grey;font-family: Montserrat, sans-serif;" disabled="">Register</button></a></li>
                    </ul>
                </div>
        </div>
    </nav>
    <div class="container" style="text-align: center;">
        <div class="d-block medfolio" style="padding-top: 15px;text-align: center;font-size: 60px;font-family: Montserrat, sans-serif;">
            <p class="d-inline" style="color: rgba(239,29,54,0.9);"><strong>Med</strong></p>
            <p class="d-inline"><strong>folio</strong></p>
            <p class="d-inline"><i class="fa fa-heartbeat d-inline heart" style="font-size: 60px;margin: 3px;"></i></p>
        </div>
    </div>
    <?php include('register_doctorPHP.php'); ?>
    <div class="login-clean">
        <h2 style="text-align: center;font-family: Montserrat, sans-serif;"><strong>REGISTER</strong></h2>
        <form method="post">
            <div class="illustration"><i class="far fa-heart"></i></div>
            <div class="form-group"><input class="form-control name" type="text" placeholder="Name" style="font-family: Montserrat, sans-serif;" required=""></div>
            <div class="form-group"><input class="form-control mail" type="text" placeholder="Email" style="font-family: Montserrat, sans-serif;" required="" inputmode="email"></div>
            <div class="form-group"><input class="form-control pass" type="password" placeholder="Password" style="font-family: Montserrat, sans-serif;" required=""></div>
            <div class="form-group"><input class="form-control rp_pass" type="password" placeholder="Repeat Password" style="font-family: Montserrat, sans-serif;" required=""></div>
            <div class="form-group"><input class="form-control din" type="text" placeholder="Doctor's Identification Number" style="font-family: Montserrat, sans-serif;" required=""></div>
            <div class="form-group"><input class="form-control aan" type="text" placeholder="Aadhar Number" style="font-family: Montserrat, sans-serif;" inputmode="numeric" required=""></div>
            <div class="form-group"><label style="font-family: Montserrat, sans-serif;margin-bottom: 2px;">Year of registration</label><input class="form-control" name="yor" type="date" required="" style="font-family: Montserrat, sans-serif;"></div>
            <div class="form-group"><label style="font-family: Montserrat, sans-serif;margin-bottom: 2px;">State Medical Council's&nbsp; Certificate</label><input type="file" class="mcc" name="mc" style="font-family: Montserrat, sans-serif;" required=""></div><button class="btn btn-primary btn-block"
                id="register_doctor" type="submit" style="border-radius: 0;border-color: grey;font-family: Montserrat, sans-serif;"><strong>Register</strong></button>
            <p style="font-family: Montserrat, sans-serif;color: rgb(24,173,0);margin-top: 20px;"><strong>Once your profile is validated we'll let you know through mail!</strong></p>
        </form>
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
