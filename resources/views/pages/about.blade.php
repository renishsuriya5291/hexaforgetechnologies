@extends('layouts.master')


@section('content')
    <main>
        <!-- ======slider-area-start=========================================== -->
        <div class="slider-area position-relative primary-bg">
            <div id="scene" class="position-absolute w-100 h-100">
                <img data-depth="0.20" class="shape page-shape-1 d-none d-lg-inline-block s-shape"
                    src="images/slider/page-shape/page-shape1.png" alt="#">
                <img data-depth="0.20" class="shape page-shape-2 d-none d-lg-inline-block s-shape"
                    src="images/slider/page-shape/page-shape2.png" alt="#">
                <img data-depth="0.20" class="shape page-shape-3 d-none d-lg-inline-block"
                    src="images/slider/page-shape/page-shape3.png" alt="#">
                <img data-depth="0.20" class="shape page-shape-4 d-none d-lg-inline-block"
                    src="images/slider/page-shape/page-shape4.png" alt="#">
                <img data-depth="0.20" class="shape page-shape-5 d-none d-lg-inline-block bounce-animate2"
                    src="images/slider/page-shape/page-shape5.png" alt="#">
                <img data-depth="0.20" class="shape page-shape-6 d-none d-lg-inline-block bounce-animate"
                    src="images/slider/page-shape/page-shape6.png" alt="#">
                <img data-depth="0.20" class="shape page-shape-7 d-none d-lg-inline-block s-shape"
                    src="images/slider/page-shape/page-shape1.png" alt="#">
            </div>
            <!-- /shape-slider -->

            <div class="single-page page-height d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div
                            class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12  d-flex align-items-center justify-content-center">
                            <div class="page-title mt-110 text-center">
                                <span class="theme-color f-700">Know more</span>
                                <h1 class="text-capitalize f-700 mt-10 mb-20">About Us</h1>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb justify-content-center bg-transparent">
                                        <li class="breadcrumb-item"><a class="secondary-color3" href="/">Home</a>
                                        </li>
                                        <li class="breadcrumb-item active text-capitalize secondary-color3"
                                            aria-current="page">About Us</li>
                                    </ol>
                                </nav>
                            </div><!-- /page title -->
                        </div><!-- /col -->
                    </div><!-- /row -->
                </div><!-- /container -->
                <!-- </div> -->
            </div>
        </div>
        <!-- slider-area-end  -->


        <!-- ====== about-area-start=========================================== -->
        <div class="about-us-about-area pt-200 pb-30 over-hidden">
            <div class="container">
                <div class="row align-items-start justify-content-center">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="about-us-left-content mb-65">
                            <div class="title">
                                <span class="theme-color f-700">Learn more about us</span>
                                <h3 class="f-700 mb-30">World leading agency that work for all</h3>
                                <p class="pb-10">HexaForge Technologies is an embodiment of visionary leadership, where innovation meets expertise.</p>
                                <p>Our founder, a seasoned professional, has cultivated a dynamic environment dedicated to shaping the future of technology solutions. At HexaForge, we believe in transcending boundaries and redefining possibilities.</p>
                            </div>
                            <div class="my-btn mt-47" data-aos="fade-up" data-aos-duration="2000">
                                <a href="/about" class="btn theme-bg text-capitalize f-18 f-700">view More</a>
                            </div><!-- /my-btn -->
                        </div><!-- /about-left-content -->
                    </div><!-- /col -->
                    <div class="col-xl-5 offset-lg-1 col-lg-5 col-md-9 col-sm-12 col-12">
                        <div class="about-us-img-wrapper mt-18 mb-100 d-flex justify-content-end ml-100">
                            <div class="home3-about-img bg-transparent position-relative z-index11 tilt">
                                <img class="about-us-img1 d-inline-block z-index-1" src="images/about/about-us-img1.jpg"
                                    alt="image">
                                <img class="about-us-img2 position-absolute d-inline-block z-index1"
                                    src="images/about/about-us-img2.jpg" alt="image">
                                <div class="about-us-marker white-bg text-center position-absolute z-index11">
                                    <div class="about-us-marker-text">
                                        <h3 class="f-700 text-center">
                                            <span class="theme-color d-block">20</span>
                                            Years of Success
                                        </h3>
                                    </div>
                                </div><!-- /about-us-marker -->
                                <div class="about-us-about-icon theme-bg position-absolute z-index11 text-center"
                                    data-aos="zoom-in" data-aos-duration="2000">
                                    <span class="white-color d-block pt-20 pb-20"><i
                                            class="fal fa-rocket-launch"></i></span>
                                </div>
                            </div><!-- /about-img -->
                        </div><!-- /home3-about-img-wrapper -->
                    </div><!-- /col -->
                </div><!-- /row -->
            </div><!-- /container -->
        </div>
        <!-- about-area-end -->


        <!-- ====== facts-area-start=========================================== -->
        <div class="home3-facts-area about-us-fact-area about-us-fact-bg">
            <div class="about-us-fact-bg bg-no-repeat pt-150 pb-140" data-aos="fade-up" data-aos-duration="2000"
                data-background="images/bg/about-us-fact-bg.png">
                <div class="container">
                    <div class="row align-items-center justify-content-center flex-column-reverse flex-lg-row">
                        <div class="col-xl-6  col-lg-7  col-md-9  col-sm-12 col-12">
                            <div class="row home3-facts-wrapper">
                                <div class="col-xl-6  col-lg-6  col-md-6  col-sm-6 col-12">
                                    <div
                                        class="home3-single-facts about-us-fact-wrapper white-bg text-center pt-45 pb-60 pl-40 pr-40 mb-30">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <span class="theme-color f-700 d-inline-block counter">40</span>
                                            <span class="per theme-color d-inline-block f-700">+</span>
                                        </div>
                                        <p class="black-color text-center f-700 mb-0">Our Client</p>
                                    </div> <!-- /home3-single-facts -->

                                    <div
                                        class="home3-single-facts about-us-fact-wrapper white-bg text-center pt-45 pb-60 pl-40 pr-40 mb-30">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <span class="theme-color f-700 d-inline-block counter">3.4</span>
                                            <span class="theme-color d-inline-block f-700">K+</span>
                                        </div>
                                        <p class="black-color text-center f-700 mb-0">Projects</p>
                                    </div> <!-- /home3-single-facts -->
                                </div><!-- /col -->
                                <div class="col-xl-6  col-lg-6  col-md-6  col-sm-6 col-12 ">
                                    <div
                                        class="home3-single-facts about-us-fact-wrapper home3-single-facts-margin white-bg text-center pt-45 pb-60 pl-40 pr-40 mb-30 mt-60">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <span class="theme-color f-700 d-inline-block counter">15</span>
                                            <span class="per theme-color d-inline-block f-700">+</span>
                                        </div>
                                        <p class="black-color text-center f-700 mb-0">Operating
                                            Countries</p>
                                    </div> <!-- /home3-single-facts -->
                                    <div
                                        class="home3-single-facts about-us-fact-wrapper white-bg text-center pt-45 pb-60 pl-40 pr-40 mb-30">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <span class="theme-color f-700 d-inline-block counter">87</span>
                                            <span class="per theme-color d-inline-block f-700">%</span>
                                        </div>
                                        <p class="black-color text-center f-700 mb-0">Again Hired By Same Client Ratio</p>
                                    </div> <!-- /home3-single-facts -->
                                </div><!-- /col -->
                            </div><!-- /row -->
                        </div><!-- /col -->
                        <div class="col-xl-5 offset-xl-1 col-lg-5 col-md-12 col-sm-12 col-12">
                            <div class="title">
                                <span class="theme-color f-700">Learn more about us</span>
                                <h3 class="f-700 mb-30">Numbers always tells the truth</h3>
                                <p class="pb-10">Numbers unveil reality, anchoring our commitment to transparency, reliability, and unwavering dedication in every endeavor.</p>
                            </div>
                        </div><!-- /col -->
                    </div><!-- /row -->
                </div><!-- /container -->
            </div><!-- /about-us-fact-bg -->
        </div>
        <!-- home3-facts-area about-us-fact-bg -end -->


        <!-- ====== specialty-area-start=========================================== -->
        <div class="speciality-area about-page pt-155 pb-105 over-hidden">
            <div class="container">
                <div class="row align-items-start">
                    <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
                        <div class="Speciality-left-content mb-20">
                            <div class="title">
                                <span class="theme-color f-700">Our Speciality</span>
                                <h3 class="f-700 mb-30">Why people treat us as best</h3>
                                <p class="pb-10">People recognize us as the best due to our unwavering commitment to excellence, innovative solutions, and unparalleled dedication to client success.</p>
                            </div>
                        </div><!-- /Speciality-left-content -->
                    </div><!-- /col -->
                    <div class="col-xl-6 offset-xl-1 col-lg-7 col-md-12 col-sm-12 col-12">
                        <div class="Speciality-right-content mt-15">
                            <div class="row">
                                <div class="col-xl-6  col-lg-6  col-md-6  col-sm-6 col-12">
                                    <div class="single-service-content transition3 mb-55">
                                        <div class="ser-icon d-inline-block text-center mb-22 transition5">
                                            <img class="h-100" src="images/icon/about-us-web.png" alt="image">
                                        </div><!-- /ser-icon -->
                                        <div class="service-text">
                                            <h6 class="f-700 mb-15">Graphical Interface</h6>
                                            <p>A sleek and intuitive graphical interface enhances user experiences, ensuring seamless interaction and visual appeal for optimal engagement.</p>
                                        </div>
                                    </div><!-- /single-service-content -->
                                </div><!-- /col -->
                                <div class="col-xl-6  col-lg-6  col-md-6  col-sm-6 col-12">
                                    <div class="single-service-content transition3 mb-55">
                                        <div class="ser-icon d-inline-block text-center mb-22 transition5">
                                            <img class="h-100" src="images/icon/about-us-code.png" alt="image">
                                        </div><!-- /ser-icon -->
                                        <div class="service-text">
                                            <h6 class="f-700 mb-15">Command Line Coding</h6>
                                            <p>Command line coding empowers efficient and precise control, enabling developers to streamline tasks and enhance productivity through text-based interactions.</p>
                                        </div>
                                    </div><!-- /single-service-content -->
                                </div><!-- /col -->
                                <div class="col-xl-6  col-lg-6  col-md-6  col-sm-6 col-12">
                                    <div class="single-service-content transition3 mb-55">
                                        <div class="ser-icon d-inline-block text-center mb-22 transition5">

                                            <img class="h-100" src="images/icon/about-us-folder.png" alt="image">
                                        </div><!-- /ser-icon -->
                                        <div class="service-text">
                                            <h6 class="f-700 mb-15">Super Fast Servers</h6>
                                            <p>Our super-fast servers ensure swift and reliable performance, delivering seamless experiences for users and optimal efficiency for businesses.</p>
                                        </div>
                                    </div><!-- /single-service-content -->
                                </div><!-- /col -->
                                <div class="col-xl-6  col-lg-6  col-md-6  col-sm-6 col-12">
                                    <div class="single-service-content transition3 mb-55">
                                        <div class="ser-icon d-inline-block text-center mb-22 transition5">
                                            <img class="h-100" src="images/icon/about-us-user.png" alt="image">
                                        </div><!-- /ser-icon -->
                                        <div class="service-text">
                                            <h6 class="f-700 mb-15">World Class Support</h6>
                                            <p>Experience world-class support that goes beyond expectations, providing timely assistance and expert guidance to ensure your success and satisfaction.</p>
                                        </div>
                                    </div><!-- /single-service-content -->
                                </div><!-- /col -->
                            </div><!-- /row -->
                        </div><!-- /Speciality-right-content -->
                    </div><!-- /col -->
                </div><!-- /row -->
            </div><!-- /container -->
        </div>
        <!-- Speciality-area-end -->


        <!-- ====== our-team-product-area-start=========================================== -->
        <div class="our-team-area about-us-team">
            <div class="our-team-bg bg-no-repeat pt-160" data-aos="fade-up" data-aos-duration="2000"
                data-background="images/bg/about-us-team-bg.png">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6  col-lg-7  col-md-9  col-sm-12 col-12">
                            <div class="title text-center">
                                <span class="theme-color f-700">Team Members</span>
                                <h4 class="f-700 mb-30">Our Amazing Team</h4>
                                <p>Our incredible team at HexaForge, experts in web, app development, UI/UX, image processing, computer vision, machine learning, and graphic design, forms the core of our success. With diverse skills and a passion for innovation, they bring visions to life, delivering solutions that surpass expectations and redefine excellence.</p>
                            </div><!-- /title -->
                        </div><!-- /col -->
                    </div>
                    {{-- <div class="row our-team-wrapper-margin pt-55">
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="our-team-wrapper position-relative mb-40">
                                <div class="single-team-img position-relative z-index1">
                                    <img class="w-100" src="images/team/team-img1.png" alt="image">
                                    <ul
                                        class="our-team-social-link text-center position-absolute left-0 right-0 z-index11 transition5">
                                        <li class="d-inline-block">
                                            <a class="text-center rounded-circle white-bg d-inline-block transition-3"
                                                href="#"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li class="d-inline-block">
                                            <a class="text-center rounded-circle white-bg d-inline-block transition-3"
                                                href="#"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li class="d-inline-block">
                                            <a class="text-center rounded-circle white-bg d-inline-block transition-3"
                                                href="https://www.instagram.com/hexaforgetechnologies/?igsh=NXRncW1yc2RlaWxk"><i class="fab fa-instagram"></i></a>
                                        </li>
                                    </ul><!-- /our-team-social-link -->
                                </div>
                                <div
                                    class="our-team-info transition5 position-absolute left-0 right-0 white-bg pl-25 pt-90 pb-15 pr-25">
                                    <span class="secondary-color">Founder & CEO</span>
                                    <h3 class="mt-1 f-700">Paul Harrison</h3>
                                </div><!-- /our-team-info -->
                            </div><!-- /our-team-wrapper -->
                        </div><!-- /col -->
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="our-team-wrapper position-relative mb-40">
                                <div class="single-team-img position-relative z-index1">
                                    <img class="w-100" src="images/team/team-img2.png" alt="image">
                                    <ul
                                        class="our-team-social-link text-center position-absolute left-0 right-0 z-index11 transition5">
                                        <li class="d-inline-block">
                                            <a class="text-center rounded-circle white-bg d-inline-block transition-3"
                                                href="#"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li class="d-inline-block">
                                            <a class="text-center rounded-circle white-bg d-inline-block transition-3"
                                                href="#"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li class="d-inline-block">
                                            <a class="text-center rounded-circle white-bg d-inline-block transition-3"
                                                href="https://www.instagram.com/hexaforgetechnologies/?igsh=NXRncW1yc2RlaWxk"><i class="fab fa-instagram"></i></a>
                                        </li>
                                    </ul><!-- /our-team-social-link -->
                                </div>
                                <div
                                    class="our-team-info transition5 position-absolute left-0 right-0 white-bg pl-25 pt-90 pb-15 pr-25">
                                    <span class="secondary-color">Founder & CTO</span>
                                    <h3 class="mt-1 f-700">Palmar Mew</h3>
                                </div><!-- /our-team-info -->
                            </div><!-- /our-team-wrapper -->
                        </div><!-- /col -->
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="our-team-wrapper position-relative mb-40">
                                <div class="single-team-img position-relative z-index1">
                                    <img class="w-100" src="images/team/team-img3.png" alt="image">
                                    <ul
                                        class="our-team-social-link text-center position-absolute left-0 right-0 z-index11 transition5">
                                        <li class="d-inline-block">
                                            <a class="text-center rounded-circle white-bg d-inline-block transition-3"
                                                href="#"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li class="d-inline-block">
                                            <a class="text-center rounded-circle white-bg d-inline-block transition-3"
                                                href="#"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li class="d-inline-block">
                                            <a class="text-center rounded-circle white-bg d-inline-block transition-3"
                                                href="https://www.instagram.com/hexaforgetechnologies/?igsh=NXRncW1yc2RlaWxk"><i class="fab fa-instagram"></i></a>
                                        </li>
                                    </ul><!-- /our-team-social-link -->
                                </div>
                                <div
                                    class="our-team-info transition5 position-absolute left-0 right-0 white-bg pl-25 pt-90 pb-15 pr-25">
                                    <span class="secondary-color">General Manager</span>
                                    <h3 class="mt-1 f-700">Tom Anderson</h3>
                                </div><!-- /our-team-info -->
                            </div><!-- /our-team-wrapper -->
                        </div><!-- /col -->
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="our-team-wrapper position-relative mb-40">
                                <div class="single-team-img position-relative z-index1">
                                    <img class="w-100" src="images/team/team-img4.png" alt="image">
                                    <ul
                                        class="our-team-social-link text-center position-absolute left-0 right-0 z-index11 transition5">
                                        <li class="d-inline-block">
                                            <a class="text-center rounded-circle white-bg d-inline-block transition-3"
                                                href="#"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li class="d-inline-block">
                                            <a class="text-center rounded-circle white-bg d-inline-block transition-3"
                                                href="#"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li class="d-inline-block">
                                            <a class="text-center rounded-circle white-bg d-inline-block transition-3"
                                                href="https://www.instagram.com/hexaforgetechnologies/?igsh=NXRncW1yc2RlaWxk"><i class="fab fa-instagram"></i></a>
                                        </li>
                                    </ul><!-- /our-team-social-link -->
                                </div>
                                <div
                                    class="our-team-info transition5 position-absolute left-0 right-0 white-bg pl-25 pt-90 pb-15 pr-25">
                                    <span class="secondary-color">HR Manager</span>
                                    <h3 class="mt-1 f-700">Renish Suriya</h3>
                                </div><!-- /our-team-info -->
                            </div><!-- /our-team-wrapper -->
                        </div><!-- /col -->
                    </div><!-- /row --> --}}
                </div><!-- /container -->
            </div><!-- /our-team-bg -->
        </div>
        <!-- our-team-area-end -->


        <!-- ====== partner-area-start=========================================== -->
        <div class="partner-area pt-100 pb-80 over-hidden">
            <div class="container">
                <div class="row align-items-start justify-content-center">
                    <div class="col-xl-6 col-lg-7 col-md-9 col-sm-12 col-12">
                        <div class="title text-center">
                            <span class="theme-color f-700">Working with big names</span>
                            <h3 class="f-700 mb-30">Our Trusted Partners</h3>
                            <p class="pb-10">At HexaForge, our success is woven into a tapestry of collaboration with trusted partners, creating a synergy that amplifies innovation and propels businesses towards new heights.</p>
                        </div>
                    </div><!-- /col -->
                </div><!-- /row -->
                <div class="row partner-wrapper pt-60 align-items-start">
                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6 col-12">
                        <div class="single-partner text-center mb-60">
                            <img src="images/brand/brand-img1.png" alt="image">
                        </div><!-- /single-partner -->
                    </div><!-- /col -->
                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6 col-12">
                        <div class="single-partner text-center mb-60">
                            <img src="images/brand/brand-img2.png" alt="image">
                        </div><!-- /single-partner -->
                    </div><!-- /col -->
                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6 col-12">
                        <div class="single-partner text-center mb-60">
                            <img src="images/brand/brand-img3.png" alt="image">
                        </div><!-- /single-partner -->
                    </div><!-- /col -->
                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6 col-12">
                        <div class="single-partner text-center mb-60">
                            <img src="images/brand/brand-img4.png" alt="image">
                        </div><!-- /single-partner -->
                    </div><!-- /col -->
                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6 col-12">
                        <div class="single-partner text-center mb-60">
                            <img src="images/brand/brand-img5.png" alt="image">
                        </div><!-- /single-partner -->
                    </div><!-- /col -->
                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6 col-12">
                        <div class="single-partner text-center mb-60">
                            <img src="images/brand/brand-img6.png" alt="image">
                        </div><!-- /single-partner -->
                    </div><!-- /col -->
                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6 col-12">
                        <div class="single-partner text-center mb-60">
                            <img src="images/brand/brand-img7.png" alt="image">
                        </div><!-- /single-partner -->
                    </div><!-- /col -->
                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6 col-12">
                        <div class="single-partner text-center mb-60">
                            <img src="images/brand/brand-img8.png" alt="image">
                        </div><!-- /single-partner -->
                    </div><!-- /col -->
                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6 col-12">
                        <div class="single-partner text-center mb-60">
                            <img src="images/brand/brand-img9.png" alt="image">
                        </div><!-- /single-partner -->
                    </div><!-- /col -->
                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6 col-12">
                        <div class="single-partner text-center mb-60">
                            <img src="images/brand/brand-img10.png" alt="image">
                        </div><!-- /single-partner -->
                    </div><!-- /col -->
                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6 col-12">
                        <div class="single-partner text-center mb-60">
                            <img src="images/brand/brand-img11.png" alt="image">
                        </div><!-- /single-partner -->
                    </div><!-- /col -->
                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6 col-12">
                        <div class="single-partner text-center mb-60">
                            <img src="images/brand/brand-img12.png" alt="image">
                        </div><!-- /single-partner -->
                    </div><!-- /col -->
                </div><!-- /row -->
            </div><!-- /container -->
        </div>
        <!-- partner-area-end -->

        <!-- ====== banner-area-start ========================================= -->
        <div class="banner-area service-page primary-bg" data-aos="fade-up" data-aos-duration="2000">
            <div class="container">
                <div class="banner-wrapper pt-100 pb-100 transition3">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-xl-9 col-lg-9  col-md-12 col-sm-12 col-12">
                            <div class="banner-content">
                                <h4 class="f-700 mb-18">HexaForge helps you to grow fast</h4>
                                <p class="mb-0">HexaForge accelerates your growth with cutting-edge solutions and a dynamic team dedicated to propelling your success forward swiftly.</p>
                            </div><!-- /work-banner-content -->
                        </div><!-- /col -->
                        <div class="col-xl-3 col-lg-3  col-md-12 col-sm-12 col-12">
                            <div class="banner-btn float-left float-lg-right">
                                <div class="my-btn">
                                    <a href="/service" class="btn theme-bg text-capitalize f-18 f-700">read more</a>
                                </div><!-- /my-btn -->
                            </div><!-- /work-banner-content -->
                        </div><!-- /col -->
                    </div><!-- /row -->
                </div><!-- /banner-wrapper -->
            </div><!-- /container -->
        </div>
        <!-- banner-area-end  -->


    </main>
@endsection
