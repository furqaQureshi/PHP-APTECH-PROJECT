<?php
include "./database.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $doctor_name = $_POST["name"];
    $doctor_password = $_POST["password"];
    $query = "SELECT * FROM doctors WHERE email = '{$doctor_name}' OR password = '{$doctor_password}'";
    $save = mysqli_query($con, $query);
    $result = mysqli_fetch_assoc($save);
}
?>

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
                        <h4>Doctor Login</h4>
                    </div>
                    <form action="" method="POST">
                        <div class="form-group">
                            <label>Doctor Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <label>Doctor Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Your Password">
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-xs-6">
                                    <button class="btn btn-blue btn-effect" style=" background: #29b1fd; color: #f6f6f6;">Login</button>
                                </div>
                                <div class="col-xs-6 text-right">
                                    <a href="./doctorRegister.php">Don't have account? Sign Up</a>
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
</body>

</html>