<?php
include "./database.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $doctor_name = $_POST["name"];
    $mobile_no  = $_POST["mobile_no"];
    $doctor_password = md5($_POST["password"]);
    $doctor_education = $_POST["education"];
    $file_name = $_FILES["doctor_image"]["name"];
    $tmp_name = $_FILES["doctor_image"]["tmp_name"];
    move_uploaded_file($tmp_name, "../doctorImages/" . $file_name);
    $doctor_age = $_POST["doctor_age"];
    $doctor_location = $_POST["doctor_location"];
    $sql = "INSERT INTO doctors (name,mobile_no, password,education,doctor_image,doctor_age,doctor_location) VALUES ('$doctor_name','$mobile_no', '$doctor_password', '$doctor_education','$file_name','$doctor_age','$doctor_location')";
    $save = mysqli_query($con, $sql);
    if($save){
        header("location: doctorLogin.php");
    }
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
                        <h4>Doctor Register</h4>
                    </div>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Doctor Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <label>Doctor Mobile No</label>
                            <input type="number" name="mobile_no" class="form-control" placeholder="Your Email">
                        </div>
                        <div class="form-group">
                            <label>Doctor Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Your Password">
                        </div>
                        <div class="form-group">
                            <label>Doctor Eduction</label>
                            <input type="text" name="education" class="form-control" placeholder="Your Password">
                        </div>
                        <div class="form-group">
                            <label>Doctor Image</label>
                            <input type="file" name="doctor_image" class="form-control" placeholder="Your Password">
                        </div>
                        <div class="form-group">
                            <label>Doctor Age</label>
                            <input type="number" name="doctor_age" class="form-control" placeholder="Your Password">
                        </div>
                        <div class="form-group">
                            <label>Doctor Location</label>
                            <input type="text" name="doctor_location" class="form-control" placeholder="Your Password">
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-xs-6">
                                    <button class="btn btn-blue btn-effect" style=" background: #29b1fd;color: #f6f6f6;">Register</button>

                                </div>
                                <div class="col-xs-6 text-right">
                                    <a href="./userLogin.php">Doctor Login</a>
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