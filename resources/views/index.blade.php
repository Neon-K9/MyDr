<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Our main goal is for our patients to find the perfect doctor and schedule an appointment in the easiest way possible. This journey needs to be pleasant, so we are always willing to help." />
        <meta name="keywords" content="doctor, schedule, consultation, online, schedule appointment, clinic"/>
        <meta name="author" content="Kamlesh Patil"/>
        <title>M.D. | Online Appointment Scheduling</title>
        <link rel="icon" href="{{ asset('img/landing/favicon.png') }}">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('css/landing/bootstrap.min.css') }}">
        <!-- animate CSS -->
        <link rel="stylesheet" href="{{ asset('css/landing/animate.css') }}">
        <!-- owl carousel CSS -->
        <link rel="stylesheet" href="{{ asset('css/landing/owl.carousel.min.css') }}">
        <!-- themify CSS -->
        <link rel="stylesheet" href="{{ asset('css/landing/themify-icons.css') }}">
        <!-- flaticon CSS -->
        <link rel="stylesheet" href="{{ asset('css/landing/flaticon.css') }}">
        <!-- magnific popup CSS -->
        <link rel="stylesheet" href="{{ asset('css/landing/magnific-popup.css') }}">
        <!-- nice select CSS -->
        <link rel="stylesheet" href="{{ asset('css/landing/nice-select.css') }}">
        <!-- swiper CSS -->
        <link rel="stylesheet" href="{{ asset('css/landing/slick.css') }}">
        <!-- style CSS -->
        <link rel="stylesheet" href="{{ asset('css/landing/style.css') }}">
    </head>
    <body>
        <!--::header part start::-->
        <header class="main_menu home_menu">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <a class="navbar-brand" href="{{ route('index') }}"> <img src="{{ asset('img/landing/logo.png') }}"
                                    alt="logo"> M.D.
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse main-menu-item justify-content-center"
                                id="navbarSupportedContent">
                                <ul class="navbar-nav align-items-center">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="#">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#about">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#services">Services</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#doctors">Doctors</a>
                                    </li>
                                </ul>
                            </div>
                            <a class="btn_2 d-none d-lg-block" href="{{ route('login') }}">Log In</a>
                            <a class="btn d-none d-lg-block" href="{{ route('register') }}">Register</a>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header part end-->

        <!-- banner part start-->
        <section class="banner_part">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-xl-5">
                        <div class="banner_text">
                            <div class="banner_text_iner">
                                <h5>We are here for you</h5>
                                <h1>Best Doctors</h1>
                                <p>Here at MyDr. find your trusted doctor <br> with very easy scheduling and differentiated services</p>
                                <a href="{{ route('login') }}" class="btn_2">Schedule your appointment</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="banner_img">
                            <img src="{{ asset('img/landing/doctors1.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner part start-->

        <!-- about us part start-->
        <section class="about_us padding_top" id="about">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-6 col-lg-6">
                        <div class="about_us_img">
                            <img src="{{ asset('img/landing/calendar.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-5">
                        <div class="about_us_text">
                            <h2>About us</h2>
                            <p>Our main goal is that our patients find the doctor
                                 perfect and schedule an appointment in the easiest way possible. This journey
                                 it needs to be pleasant, so we are always willing to help. </p>
                            <div class="banner_item">
                                <div class="single_item">
                                    <img src="{{ asset('img/landing/icon/banner_1.svg') }}" alt="">
                                    <h5>Doctors</h5>
                                </div>
                                <div class="single_item">
                                    <img src="{{ asset('img/landing/icon/banner_2.svg') }}" alt="">
                                    <h5>Scheduling</h5>
                                </div>
                                <div class="single_item">
                                    <img src="{{ asset('img/landing/icon/banner_3.svg') }}" alt="">
                                    <h5>Qualified</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about us part end-->

        <!-- feature_part start-->
        <section class="feature_part" id="services">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <div class="section_tittle text-center">
                            <h2>Our services</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-3 col-sm-12">
                        <div class="single_feature">
                            <div class="single_feature_part">
                                <span class="single_feature_icon"><img src="{{ asset('img/landing/children.png') }}"
                                        alt=""></span>
                                <h4>Pediatrics</h4>
                                <p>Our mission is to offer preventive support,
                                     so that children and teenagers
                                     grow up healthy and happy.</p>
                            </div>
                        </div>
                        <div class="single_feature">
                            <div class="single_feature_part">
                                <span class="single_feature_icon"><img src="{{ asset('img/landing/heart.png') }}"
                                        alt=""></span>
                                <h4>Cardiology</h4>
                                <p>Our cardiologists are highly qualified
                                     to identify the diseases of one of the main
                                     organs of the human body.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <div class="single_feature_img">
                            <img src="{{ asset('img/landing/doctors2.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-12">
                        <div class="single_feature">
                            <div class="single_feature_part">
                                <span class="single_feature_icon"><img src="{{ asset('img/landing/eye.png') }}"
                                        alt=""></span>
                                <h4>Ophthalmology</h4>
                                <p>Care for diseases that affect the eyes and the
                                     vision are conducted by our eye doctors.</p>
                            </div>
                        </div>
                        <div class="single_feature">
                            <div class="single_feature_part">
                                <span class="single_feature_icon"><img src="{{ asset('img/landing/bone.png') }}"
                                        alt=""></span>
                                <h4>Orthopedics</h4>
                                <p>Our orthopedists took care of your bones, muscles, joints,
                                     ligaments and other components of your system.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- feature_part start-->

        <!-- our depertment part start-->
        <section class="our_depertment section_padding" id="doctors">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-xl-12">
                        <div class="depertment_content">
                            <div class="row justify-content-center">
                                <div class="col-xl-8">
                                    <h2>Our Doctors</h2>
                                    <div class="row">
                                        <div class="col-lg-4 col-sm-4">
                                            <img class="img-shape" src="{{ asset('img/pictures/1.jpg') }}" alt="doctor">
                                            <h3>Dr. Joshi</h3>
                                            <p>Cardiologist</p>
                                        </div>
                                        <div class="col-lg-4 col-sm-4">
                                            <img class="img-shape" src="{{ asset('img/pictures/2.jpg') }}" alt="doctor">
                                            <h3>Dr. Sharma</h3>
                                            <p>Pediatrician</p>
                                        </div>
                                        <div class="col-lg-4 col-sm-4">
                                            <img class="img-shape" src="{{ asset('img/pictures/3.jpg') }}" alt="doctor">
                                            <h3>Dr. Patel</h3>
                                            <p>Ophthalmologist</p>
                                        </div>
                                        <div class="col-lg-4 col-sm-4">
                                            <img class="img-shape" src="{{ asset('img/pictures/4.jpg') }}" alt="doctor">
                                            <h3>Dr. Jain</h3>
                                            <p>Orthopedist</p>
                                        </div>
                                        <div class="col-lg-4 col-sm-4">
                                            <img class="img-shape" src="{{ asset('img/pictures/5.jpg') }}" alt="doctor">
                                            <h3>Dr. Tiwari</h3>
                                            <p>Pediatrician</p>
                                        </div>
                                        <div class="col-lg-4 col-sm-4">
                                            <img class="img-shape" src="{{ asset('img/pictures/6.jpg') }}" alt="doctor">
                                            <h3>Dr. Pathak</h3>
                                            <p>orthopedist</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- our depertment part end-->

        <!-- footer part start-->
        <footer class="footer-area">
            <div class="copyright_part">
                <div class="container">
                    <div class="row align-items-center">
                        <p class="footer-text m-0 col-lg-8 col-md-12">
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved
                        </p>
                        <div class="col-lg-4 col-md-12 text-center text-lg-right footer-social">
                            <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"> <i class="ti-twitter"></i> </a>
                            <a href="#"><i class="ti-instagram"></i></a>
                            <a href="#"><i class="ti-skype"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer part end-->

        <!-- jquery plugins here-->
        <script src="{{ asset('js/landing/jquery-1.12.1.min.js') }}"></script>
        <!-- popper js -->
        <script src="{{ asset('js/landing/popper.min.js') }}"></script>
        <!-- bootstrap js -->
        <script src="{{ asset('js/landing/bootstrap.min.js') }}"></script>
        <!-- owl carousel js -->
        <script src="{{ asset('js/landing/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('js/landing/jquery.nice-select.min.js') }}"></script>
        <!-- contact js -->
        <script src="{{ asset('js/landing/jquery.ajaxchimp.min.js') }}"></script>
        <script src="{{ asset('js/landing/jquery.form.js') }}"></script>
        <script src="{{ asset('js/landing/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('js/landing/mail-script.js') }}"></script>
        <script src="{{ asset('js/landing/contact.js') }}"></script>
        <!-- custom js -->
        <script src="{{ asset('js/landing/custom.js') }}"></script>
    </body>
</html>
