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
                        <li class="nav-item details" role="presentation" style="margin: 10px;"><a class="nav-link" href="doctors_check_pateints.html"><button class="btn btn-light" type="submit" style="color: grey;border-radius: 0;border-color: grey;font-family: Montserrat, sans-serif;">Check Patients Details</button></a></li>
                        <li
                            class="nav-item details" role="presentation" style="margin: 10px;"><a class="nav-link" href="add_details_doctors.html"><button class="btn btn-light" type="submit" style="color: grey;border-radius: 0;border-color: grey;font-family: Montserrat, sans-serif;text-decoration: none;">Add/Edit Details</button></a></li>
                            <li
                                class="nav-item d-inline float-right" role="presentation" style="margin: 10px;"><a class="nav-link" href="doctor_profile.html"><button class="btn btn-light" type="submit" style="color: grey;border-radius: 0;border-color: grey;font-family: Montserrat, sans-serif;">{Doctor's Name}</button></a></li>
                                <li class="nav-item details"
                                    role="presentation" style="margin: 10px;"><a class="nav-link" href="#"><button class="btn btn-light" type="submit" style="color: grey;border-radius: 0;border-color: grey;font-family: Montserrat, sans-serif;text-decoration: none;">SignOut</button></a></li>
                    </ul>
                </div>
        </div>
    </nav>
    <div class="container" style="padding-top: 50px;padding-bottom: 50px;margin-bottom: 20px;">
        <h2 style="font-family: Montserrat, sans-serif;padding-bottom: 20px;"><strong>Patient's Details</strong></h2>
        <p style="font-family: Montserrat, sans-serif;"><em>These are the information, entered by the patient's herslef/himself. We do not approve of any details.</em></p>
        <form method="GET">
            <div class="form-group" placeholder="Age"><label style="font-family: Montserrat, sans-serif;"><strong>Name</strong></label><input class="form-control d-inline name" type="text" required="" placeholder="John Doe" style="font-family: Montserrat, sans-serif;" readonly=""></div>
            <div class="form-group"
                placeholder="Age"><label style="font-family: Montserrat, sans-serif;"><strong>Age</strong></label><input class="form-control age" type="number" min="0" max="150" style="font-family: Montserrat, sans-serif;" placeholder="20" required="" readonly=""></div>
            <div
                class="form-group" placeholder="Age"><label class="d-block" style="font-family: Montserrat, sans-serif;"><strong>Gender</strong></label>
                <div class="form-check d-inline" style="margin: 10px;"><input class="form-check-input" type="radio" id="formCheck" name="sex" value="M" disabled=""><label class="form-check-label" for="formCheck-1" style="font-family: Montserrat, sans-serif;">Male</label></div>
                <div class="form-check d-inline"
                    style="margin: 10px;"><input class="form-check-input" type="radio" id="formCheck" name="sex" value="F" disabled=""><label class="form-check-label" for="formCheck-2" style="font-family: Montserrat, sans-serif;">Female</label></div>
                <div class="form-check d-inline"
                    style="margin: 10px;"><input class="form-check-input" type="radio" id="formCheck" name="sex" value="O" disabled=""><label class="form-check-label" for="formCheck-3" style="font-family: Montserrat, sans-serif;">Others</label></div>
    </div>
    <div class="form-group" placeholder="Age"><label style="font-family: Montserrat, sans-serif;"><strong>Height (in ft)</strong></label><input class="form-control d-inline height" type="text" required="" placeholder="5.8" style="font-family: Montserrat, sans-serif;" readonly=""></div>
    <div class="form-group"
        placeholder="Age"><label style="font-family: Montserrat, sans-serif;"><strong>Weight (in kgs)</strong></label><input class="form-control d-inline weight" type="text" required="" placeholder="62 kg" style="font-family: Montserrat, sans-serif;" readonly=""></div>
    <div
        class="form-group" placeholder="Age"><label style="font-family: Montserrat, sans-serif;"><strong>Bloodgroup</strong></label><select class="form-control bgp'" style="font-family: Montserrat, sans-serif;" required="" readonly=""><option value="">Select Your Blood Group</option><option value="A+">A +ve</option><option value="A-">A -ve</option><option value="B+">B +ve</option><option value="B-">B -ve</option><option value="AB+">AB +ve</option><option value="AB-">AB -ve</option><option value="O+">O +ve</option><option value="O-">O -ve</option></select></div>
        <div
            class="form-group" placeholder="Age"><label style="font-family: Montserrat, sans-serif;"><strong>Medication</strong></label><input class="form-control medic" type="text" required="" placeholder="Medicine 1, Medicine 2, Medicine 3 ..." style="font-family: Montserrat, sans-serif;"
                readonly=""></div>
            <div class="form-group" placeholder="Age"><label style="font-family: Montserrat, sans-serif;"><strong>Allergy</strong></label><input class="form-control allergy" type="text" required="" placeholder="If you have any allergy, elaborate..." style="font-family: Montserrat, sans-serif;"
                    readonly=""></div>
            <div class="form-group" placeholder="Age"><label style="font-family: Montserrat, sans-serif;"><strong>Diseases</strong></label><input class="form-control diseases" type="text" required="" placeholder="If you have any diseases, elaborate..." style="font-family: Montserrat, sans-serif;"
                    readonly=""></div>
            <div class="form-group" placeholder="Age"><label class="d-block" style="font-family: Montserrat, sans-serif;"><strong>Medical Report</strong></label><a href="#">Medical_Report.pdf</a></div>
            <div class="form-group" placeholder="Age"><label class="d-block" style="font-family: Montserrat, sans-serif;"><strong>Extra Documents</strong></label><a href="#">Extra_Documents.pdf</a></div>
            <div class="form-group" placeholder="Age"><label style="font-family: Montserrat, sans-serif;"><strong>Other Details</strong></label><input class="form-control extra" type="text" required="" placeholder="If you want to provide any extra infromation..." style="font-family: Montserrat, sans-serif;"
                    readonly=""></div><button class="btn btn-outline-dark btn-block" type="submit" style="font-family: Montserrat, sans-serif;margin-top: 20px;">Back</button></form>
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