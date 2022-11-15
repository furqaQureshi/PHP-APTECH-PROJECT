<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Cariera - Job Board HTML Template">
    <meta name="keywords" content="cariera job board, HTML Template, job board html, job listing, job portal, job postings, jobs, recruiters, recruiting, recruitment">
    <meta name="author" content="GnoDesign">
    <title>Cariera - Job Board HTML Template</title>
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="apple-touch-icon-precomposed" href="images/apple-touch-icon.png">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,400i,700,800|Varela+Round" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/responsive.css">
</head>

<body>
    <?php
    include "./navbar.php";
    ?>
    <section class="ptb80" id="login">
        <div class="container">
            <div class="col-md-6 col-md-offset-3 col-xs-12">
                <div class="login-box">
                    <div class="login-title">
                        <h4>Patient Detail</h4>
                    </div>
                    <form action="#">
                        <div class="form-group">
                            <label>Patient Name</label>
                            <input type="text" class="form-control" placeholder="Patient Name">
                        </div>
                        <div class="form-group">
                            <label>Patient Gender</label>
                            <select name="patient_gender" class="form-select form-control">
                                <option value="">Select Patient</option>
                                <option value="women">Women</option>
                                <option value="men">Men</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Patient City</label>
                            <input type="text" class="form-control" placeholder="Patient City">
                        </div>
                        <div class="form-group">
                            <label>Patient Date Of Birth</label>
                            <input type="date" class="form-control" placeholder="Patient Date-Of-Birth">
                        </div>
                        <div class="form-group">
                            <label>Patient Mobile Number</label>
                            <input type="number" class="form-control" placeholder="Patient Mobile Number">
                        </div>
                        <div class="form-group">
                            <label>Patient Address</label>
                            <input type="text" class="form-control" placeholder="Patient Address">
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <button class="btn btn-blue btn-lg btn-block" style=" background: #29b1fd;
                               color: #f6f6f6;">Patient Add</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <?php
    include "./footer.php";
    ?>
    <!-- <script src="../js/jquery-3.1.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bootstrap-select.min.js"></script>
    <script src="../js/swiper.min.js"></script>
    <script src="../js/jquery.ajaxchimp.js"></script>
    <script src="../js/jquery.countTo.js"></script>
    <script src="../js/jquery.inview.min.js"></script>
    <script src="../js/jquery.magnific-popup.min.js"></script>
    <script src="../js/jquery.easypiechart.min.js"></script>
    <script src="../js/jquery-ui.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/tinymce/tinymce.min.js"></script>
    <script src="../js/countdown.js"></script>
    <script src="../js/isotope.min.js"></script>
    <script src="../js/custom.js"></script> -->

</body>

</html>