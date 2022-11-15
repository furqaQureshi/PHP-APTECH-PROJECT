<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no" />
    <meta name="description" content="Cariera - Job Board HTML Template" />
    <meta name="keywords" content="cariera job board, HTML Template, job board html, job listing, job portal, job postings, jobs, recruiters, recruiting, recruitment" />
    <meta name="author" content="GnoDesign" />
    <title>Main Title</title>
    <link rel="shortcut icon" href="../images/favicon.png" type="image/x-icon" />
    <link rel="apple-touch-icon-precomposed" href="images/apple-touch-icon.png" />
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,400i,700,800|Varela+Round" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="../css/owl.carousel.min.css" />
    <link rel="stylesheet" type="text/css" href="../css/swiper.min.css" />
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
    <link rel="stylesheet" type="text/css" href="../css/responsive.css" />
</head>

<body>
    <?php
    include '../Components/navbar.php';
    ?>
    <section class="main2">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide overlay-black" style="background: url('../images/slider.jpg');background-size: cover;">
                    <div class="slider-content container">
                        <div class="col-md-6 col-md-offset-6 col-xs-12 text-center">
                            <div class="section-title">
                                <h2 class="text-white">Doctors await!</h2>
                            </div>
                            <p class="text-white">
                                Consult with a reliable doctor over live video, 24/7, from anywhere in the world securely and privately.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide overlay-black" style="
              background: url('../images/slider1.jpg');
              background-size: cover;

            ">
                    <div class="slider-content container">
                        <div class="col-md-6 col-xs-12 text-center">
                            <div class="section-title">
                                <h2 class="text-white">Discovery of 15 novel genes for heart attacks</h2>
                            </div>

                            <p class="text-white">
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the industry's
                                standard dummy t ext ever since the 1500s..
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide overlay-black" style="
              background: url('../images/stethoscope-medical-health-doctor-macbook-laptop.jpg');
              background-size: cover;
            ">
                    <div class="slider-content container">
                        <div class="col-md-6 col-xs-12 text-center">
                            <div class="section-title">
                                <h2 class="text-white">Avail 10% Patient Care Relife</h2>
                            </div>

                            <p class="text-white">
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the industry's
                                standard dummy t ext ever since the 1500s..
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide overlay-black" style="
              background: url('../images/slider2.jpg');
              background-size: cover;
            ">
                    <!-- background-position: 50% 50%; -->
                    <div class="slider-content container">
                        <div class="col-md-6 col-xs-12 text-center">
                            <div class="section-title">
                                <h2 class="text-white">Our Your Next Physical Appointment By Paying </h2>
                            </div>

                            <p class="text-white">
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the industry's
                                standard dummy t ext ever since the 1500s..
                            </p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="swiper-button-prev"><i class="fa fa-angle-left"></i></div>
            <div class="swiper-button-next"><i class="fa fa-angle-right"></i></div>
        </div>
    </section>

    <section class="job-search ptb40">
        <div class="container">
            <form class="job-search-form row" action="#" method="get">
                <div class="col-md-3 col-sm-12 search-keywords">
                    <label for="search-keywords">Keywords</label>
                    <input type="text" name="search-keywords" id="search-keywords" placeholder="Keywords" />
                </div>
                <div class="col-md-3 col-sm-12 search-categories">
                    <label for="search-categories">Category</label>
                    <select name="search-categories" class="selectpicker" id="search-categories">
                        <option value="1">Accountance</option>
                        <option value="2">Banking</option>
                        <option value="3">Design & Art</option>
                        <option value="4">Developement</option>
                        <option value="5">Insurance</option>
                        <option value="6">IT Engineer</option>
                        <option value="7">Healthcare</option>
                        <option value="8">Marketing</option>
                        <option value="9">Management</option>
                    </select>
                </div>
                <div class="col-md-4 col-sm-12 search-location">
                    <label for="search-location">Location</label>
                    <input type="text" name="search-location" id="search-location" placeholder="Location" />
                </div>
                <div class="col-md-2 col-sm-12 search-submit">
                    <button type="submit" class="btn btn-blue btn-effect btn-large">
                        <i class="fa fa-search"></i>search
                    </button>
                </div>
            </form>
        </div>
    </section>
    <section class="ptb80" id="categories">
        <div class="container">
            <div class="section-title">
                <h2>Find doctors by health concern</h2>
            </div>

            <div class="row nomargin">
                <!-- Start of Category div -->
                <div class="col-md-3 col-sm-6 col-xs-12 cat-wrapper">
                    <div class="category ptb30">
                        <!-- Icon -->
                        <div class="category-icon">
                            <img src="https://static.marham.pk/assets/images/home-new/specialities/derma.png" height="80px">
                        </div>

                        <!-- Category Info - Title -->
                        <div class="category-info pt30">
                            <a href="./allDoctor.php">Dermatologist</a>
                            <!-- <p>(9 open positions)</p> -->
                        </div>

                        <!-- Category Description -->
                        <div class="category-descr">
                            <span>A gynecologist is a doctor who specializes in female reproductive health. They diagnose and treat issues related to the female reproductive tract.</span>
                        </div>
                    </div>
                </div>
                <!-- End of Category div -->

                <!-- Start of Category div -->
                <div class="col-md-3 col-sm-6 col-xs-12 cat-wrapper">
                    <div class="category ptb30">
                        <!-- Icon -->
                        <div class="category-icon">
                            <!-- <i class="fa fa-university"></i> -->
                            <img src="	https://static.marham.pk/assets/images/home-new/specialities/urologist.png" height="80px">

                        </div>

                        <!-- Category Info - Title -->
                        <div class="category-info pt30">
                            <a href="./allDoctor.php">Urologist</a>
                            <!-- <p>(9 open positions)</p> -->
                        </div>

                        <!-- Category Description -->
                        <div class="category-descr">
                            <span>Urology is known as a surgical specialty. Besides surgery, a urologist is a doctor with wisdom of internal medicine, pediatrics.</span>
                        </div>
                    </div>
                </div>
                <!-- End of Category div -->

                <!-- Start of Category div -->
                <div class="col-md-3 col-sm-6 col-xs-12 cat-wrapper">
                    <div class="category ptb30">
                        <!-- Icon -->
                        <div class="category-icon">
                            <!-- <i class="fa fa-pencil"></i> -->
                            <img src="	https://static.marham.pk/assets/images/home-new/specialities/gastroenterologist.png" height="80px">

                        </div>

                        <!-- Category Info - Title -->
                        <div class="category-info pt30">
                            <a href="./allDoctor.php">Gastroenterologist</a>
                            <!-- <p>(36 open positions)</p> -->
                        </div>

                        <!-- Category Description -->
                        <div class="category-descr">
                            <span>A Gastroenterologist must first complete a three-year Internal Medicine residency and is then eligible for additional specialized in Gastroenterology.</span>
                        </div>
                    </div>
                </div>
                <!-- End of Category div -->

                <!-- Start of Category div -->
                <div class="col-md-3 col-sm-6 col-xs-12 cat-wrapper">
                    <div class="category ptb30">
                        <!-- Icon -->
                        <div class="category-icon">
                            <!-- <i class="fa fa-umbrella"></i> -->
                            <img src="	https://static.marham.pk/assets/images/home-new/specialities/childspecialist.png" height="80px">

                        </div>

                        <!-- Category Info - Title -->
                        <div class="category-info pt30">
                            <a href="./allDoctor.php">Child Specialist</a>
                            <!-- <p>(6 open positions)</p> -->
                        </div>

                        <!-- Category Description -->
                        <div class="category-descr">
                            <span> A healthcare professional who is trained in the emotional and developmental needs of children. The child-life specialist helps.</span>
                        </div>
                    </div>
                </div>
                <!-- End of Category div -->
            </div>

            <div class="row pt40 nomargin">
                <!-- Start of Category div -->
                <div class="col-md-3 col-sm-6 col-xs-12 cat-wrapper">
                    <div class="category ptb30">
                        <!-- Icon -->
                        <div class="category-icon">
                            <!-- <i class="fa fa-desktop"></i> -->
                            <img src="https://static.marham.pk/assets/images/home-new/specialities/gynecologist.png" height="80px">

                        </div>

                        <!-- Category Info - Title -->
                        <div class="category-info pt30">
                            <a href="./allDoctor.php">Gynecologist</a>
                            <!-- <p>(22 open positions)</p> -->
                        </div>

                        <!-- Category Description -->
                        <div class="category-descr">
                            <span>A gynecologist is a doctor who specializes in female reproductive health. They diagnose and treat issues.</span>
                        </div>
                    </div>
                </div>
                <!-- End of Category div -->

                <!-- Start of Category div -->
                <div class="col-md-3 col-sm-6 col-xs-12 cat-wrapper">
                    <div class="category ptb30">
                        <!-- Icon -->
                        <div class="category-icon">
                            <!-- <i class="fa fa-line-chart"></i> -->
                            <img src="	https://static.marham.pk/assets/images/home-new/diseases/migrane.png" height="80px">

                        </div>
                        <div class="category-info pt30">
                            <a href="./allDoctor.php">Migraine</a>
                        </div>
                        <div class="category-descr">
                            <span>A migraine is usually a moderate or severe headache felt as a throbbing pain on 1 side of the head. Many people also have symptoms such as feeling sick.</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 cat-wrapper">
                    <div class="category ptb30">
                        <div class="category-icon">
                            <img src="https://static.marham.pk/assets/images/home-new/specialities/derma.png" height="80px">
                        </div>
                        <div class="category-info pt30">
                            <a href="./allDoctor.php">Psychiatrist</a>
                        </div>
                        <div class="category-descr">
                            <span>The assessment of subjects' depressive symptoms was performed by trained psychiatrists and psychologists..</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 cat-wrapper">
                    <div class="category ptb30">
                        <div class="category-icon">
                            <img src="https://static.marham.pk/assets/images/home-new/diseases/piles.png" height="80px">
                        </div>
                        <div class="category-info pt30">
                            <a href="./allDoctor.php">Piles</a>
                        </div>
                        <div class="category-descr">
                            <span>swellings containing enlarged blood vessels that are found inside or around the bottom In many cases, haemorrhoids don't cause symptoms.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ptb80" id="testimonials">
        <div class="container">
            <div class="section-title">
                <h2 class="text-white">Platinum doctors</h2>
            </div>
            <div class="owl-carousel testimonial">
                <div class="item">
                    <div class="review">
                        <blockquote>
                            Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has been the industry's standard dummy t
                            ext ever since the 1500s.
                        </blockquote>
                    </div>
                    <div class="customer">
                        <img src="../images/img/center.jpg" alt="" />
                        <h4 class="uppercase pt20">customer</h4>
                    </div>
                </div>
                <div class="item">
                    <div class="review">
                        <blockquote>
                            Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has been the industry's standard dummy t
                            ext ever since the 1500s.
                        </blockquote>
                    </div>
                    <div class="customer">
                        <img src="../images/img/center.jpg" alt="" />
                        <h4 class="uppercase pt20">customer</h4>
                    </div>
                </div>
                <div class="item">
                    <div class="review">
                        <blockquote>
                            Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has been the industry's standard dummy t
                            ext ever since the 1500s.
                        </blockquote>
                    </div>
                    <div class="customer">
                        <img src="../images/img/center.jpg" alt="" />
                        <h4 class="uppercase pt20">customer</h4>
                    </div>
                </div>
            </div>
        </div>
        <?php
        include './facilities.php';
        ?>
    </section>
    <?php
    include '../Components/footer.php'
    ?>
</body>

</html>