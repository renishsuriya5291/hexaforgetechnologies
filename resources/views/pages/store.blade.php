@extends('layouts.master')


@section('content')
    <main>
        <!-- ======slider-area-start=========================================== -->
        <div id="home" class="slider-area home7">
            <div id="scene" class="d-none"></div>
            <!-- /shape-slider -->
            <div class="single-slider slider-height7 d-flex align-items-center z-index-1">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-10  col-lg-10  col-md-11  col-sm-10 col-12 d-flex align-items-center">
                            <div class="slider-content text-center mt-190 pr-0">
                                <span class="f-700 theme-color d-block pb-1">Hello,</span>
                                <h1 class="f-700 pb-22 pr-0">We are <span class="theme-color">HexaForge!</span> A creative
                                    design agency based on Surat. We design for people everywhere.</h1>
                            </div>
                        </div><!-- /col -->
                    </div><!-- /row -->
                </div><!-- /container -->
            </div>
        </div>
        <!-- slider-area-end  -->


        <!-- ====== portfolio-area-start
                ==================================================== -->
        <div class="portfolio-area home6 home7 home8 over-hidden  portfolio-modal-content pb-170">
            <div class="portfolio-wrapper position-relative">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 text-center">
                            <div class="port-button mb-50 mt-50 portfolio-menu">
                                <button data-filter="*" class="active">All</button>
                                <button data-filter=".design">Web Design</button>
                                <button data-filter=".dev">Development</button>
                                <button data-filter=".creative-design">App Design </button>
                                <button style="display: none" data-filter=".marketing">Marketing</button>
                            </div><!-- /home6-portfolio-menu -->
                        </div><!-- /col -->
                    </div><!-- /row -->

                    <div class="row portfolio grid">
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 grid-item creative-design">
                            <div class="single-portfolio position-relative over-hidden mb-30">
                                <img class="w-100" src="images/ui1.PNG" alt="image">
                                <div class="port-content text-center position-absolute transition5 z-index11">
                                    <span class="theme-color d-inline-block" data-toggle="modal"
                                        data-target="#exampleModal-p1"><i class="far fa-external-link-alt"></i>
                                    </span>
                                </div><!-- /port-content -->
                                <div class="port-over-content position-absolute left-0 pl-40 pr-40 pb-30 pt-40 z-index11">
                                    <span class="text-white f-700 mb-2 d-block text-uppercase">Web Design</span>
                                    <h3 class="text-white">Website Development for eThemeStudio Corporation</h3>
                                </div>
                            </div><!-- /single-prot -->

                            <!-- Modal 1 start -->
                            <div class="modal fade" id="exampleModal-p1" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModal-p1" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="close-icon float-right pt-10 pr-10">
                                            <button type="button" class="close d-inline-block" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true"><i class="fa fa-times"></i></span>
                                            </button>
                                        </div>
                                        <div class="modal-content border-0">
                                            <div class="modal-body pl-50 pr-50 pt-10 pb-20">
                                                <div class="blog-modal-img">
                                                    <img class="w-100" src="images/portfolio/home8-portfolio-img1.jpg"
                                                        alt="product image 02">
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-7 col-lg-7  col-md-12 col-sm-12 col-12">
                                                        <div class="content-wrapper">
                                                            <h2 class="modal-title f-700">eThemeStudio Custom CMS</h2>
                                                            <p>
                                                                Duis aute irure dolor in reprehenderit in voluptate velit
                                                                esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum
                                                                dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                                                ad minim veniam, quis nostrud exercitation ullamco laboris
                                                                nisi ut aliquip ex ea commodo consequat. Excepteur sint
                                                                occaecat cupidatat non proident, sunt in culpa qui officia
                                                                deserunt mollit anim id est laborum.
                                                            </p>
                                                            <p>
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Dignissimos laudantium fuga molestiae, aut eius minus
                                                                reprehenderit.
                                                            </p>
                                                            <p class="mb-0">
                                                                Duis aute irure dolor in reprehenderit in voluptate velit
                                                                esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                                                                occaecat cupidatat non proident, sunt in culpa qui officia
                                                                deserunt mollit anim id est laborum.
                                                            </p>
                                                        </div>
                                                    </div><!-- /col -->
                                                    <div class="col-xl-5 col-lg-5  col-md-12 col-sm-12 col-12">
                                                        <div
                                                            class="meta-wrapper primary-bg mt-60 pt-40 pb-45 pr-20 pl-45 mt-40 mb-10">
                                                            <ul class="item-meta">
                                                                <li>
                                                                    Project Type : <span
                                                                        class="pl-2 black-color f-700">Graphic Design</span>
                                                                </li>
                                                                <li>
                                                                    Clien : <span
                                                                        class="pl-2 black-color f-700 f-poppins">Juwel
                                                                        Khan</span>
                                                                </li>
                                                                <li>
                                                                    Duration :<span class="pl-2 black-color f-700">2
                                                                        Weeks</span>
                                                                </li>
                                                                <li>
                                                                    Task : <span class="pl-2 black-color f-700">UI/UX,
                                                                        Frontend</span>
                                                                </li>
                                                                <li>
                                                                    Budget : <span
                                                                        class="pl-2 black-color f-700">$2000</span>
                                                                </li>
                                                            </ul>
                                                            <a href="#"
                                                                class="btn position-relative over-hidden text-white theme-bg theme-border2 text-uppercase mt-20 pt-2 pb-2">View
                                                                Live</a>
                                                        </div>
                                                    </div><!-- /col -->
                                                </div><!-- /row -->
                                                <div class="pro-modal-footer mt-30 mb-45">
                                                    <div class="row align-items-center justify-content-md-between">
                                                        <div class="col-xl-7 col-lg-7  col-md-12 col-sm-12 col-12">
                                                            <div class="modal-tags d-sm-flex align-items-center pt-25">
                                                                <h6
                                                                    class="primary-font-family mb-0 pr-15 black-color f-700">
                                                                    Tags :</h6>
                                                                <ul class="tag-list">
                                                                    <li class="d-inline-block pr-10 f-700">
                                                                        <a class="secondary-color3 d-block"
                                                                            href="#">Web Design</a>
                                                                    </li>
                                                                    <li class="d-inline-block pr-10 f-700">
                                                                        <a class="secondary-color3 d-block"
                                                                            href="#">Social Media</a>
                                                                    </li>
                                                                    <li class="d-inline-block pr-10 f-700">
                                                                        <a class="secondary-color3 d-block"
                                                                            href="#">Product</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div><!-- /col -->
                                                        <div class="col-xl-5 col-lg-5  col-md-12 col-sm-10 col-12">
                                                            <div
                                                                class="pro-modal-social-link d-flex align-items-center justify-content-lg-end pt-25">
                                                                <h6
                                                                    class="primary-font-family pr-15 f-700 mb-0 black-color">
                                                                    Share :</h6>
                                                                <ul class="social-link text-md-right">
                                                                    <li class="d-inline-block">
                                                                        <a class="facebook-color text-center pl-15 d-inline-block transition-3"
                                                                            href="#"><i
                                                                                class="fab fa-facebook-f"></i></a>
                                                                    </li>
                                                                    <li class="d-inline-block">
                                                                        <a class="twitter-color text-center pl-15 d-inline-block transition-3"
                                                                            href="#"><i
                                                                                class="fab fa-twitter"></i></a>
                                                                    </li>
                                                                    <li class="d-inline-block">
                                                                        <a class="google-plus-color text-center pl-15 d-inline-block transition-3"
                                                                            href="#"><i
                                                                                class="fab fa-google-plus-g"></i></a>
                                                                    </li>
                                                                    <li class="d-inline-block">
                                                                        <a class="linkedin-color text-center pl-15 d-inline-block transition-3"
                                                                            href="#"><i
                                                                                class="fab fa-linkedin-in"></i></a>
                                                                    </li>
                                                                </ul><!-- social-link -->
                                                            </div>
                                                        </div><!-- /col -->
                                                    </div> <!-- .row -->
                                                </div>
                                            </div><!-- /modal-body -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal 1 end -->

                        </div><!-- /col -->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 grid-item design">
                            <div class="single-portfolio position-relative over-hidden mb-30">
                                <img class="w-100" src="images/ui2.PNG" alt="image">
                                <div class="port-content text-center position-absolute transition5 z-index11">
                                    <span class="theme-color d-inline-block" data-toggle="modal"
                                        data-target="#exampleModal-p2"><i class="far fa-external-link-alt"></i>
                                    </span>
                                </div><!-- /port-content -->
                                <div class="port-over-content position-absolute left-0 pl-40 pr-40 pb-30 pt-40 z-index11">
                                    <span class="text-white f-700 mb-2 d-block text-uppercase">Web Design</span>
                                    <h3 class="text-white">When the musics over turn off the light</h3>
                                </div>
                            </div><!-- /single-prot -->

                            <!-- Modal 2 start -->
                            <div class="modal fade" id="exampleModal-p2" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModal-p2" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="close-icon float-right pt-10 pr-10">
                                            <button type="button" class="close d-inline-block" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true"><i class="fa fa-times"></i></span>
                                            </button>
                                        </div>
                                        <div class="modal-content border-0">
                                            <div class="modal-body pl-50 pr-50 pt-10 pb-20">
                                                <div class="blog-modal-img">
                                                    <img class="w-100" src="images/portfolio/home8-portfolio-img2.jpg"
                                                        alt="product image 02">
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-7 col-lg-7  col-md-12 col-sm-12 col-12">
                                                        <div class="content-wrapper">
                                                            <h2 class="modal-title f-700">eThemeStudio Blogging Tool
                                                            </h2>
                                                            <p>
                                                                Duis aute irure dolor in reprehenderit in voluptate velit
                                                                esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum
                                                                dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                                                ad minim veniam, quis nostrud exercitation ullamco laboris
                                                                nisi ut aliquip ex ea commodo consequat. Excepteur sint
                                                                occaecat cupidatat non proident, sunt in culpa qui officia
                                                                deserunt mollit anim id est laborum.
                                                            </p>
                                                            <p>
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Dignissimos laudantium fuga molestiae, aut eius minus
                                                                reprehenderit.
                                                            </p>
                                                            <p class="mb-0">
                                                                Duis aute irure dolor in reprehenderit in voluptate velit
                                                                esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                                                                occaecat cupidatat non proident, sunt in culpa qui officia
                                                                deserunt mollit anim id est laborum.
                                                            </p>
                                                        </div>
                                                    </div><!-- /col -->
                                                    <div class="col-xl-5 col-lg-5  col-md-12 col-sm-12 col-12">
                                                        <div
                                                            class="meta-wrapper primary-bg mt-60 pt-40 pb-45 pr-20 pl-45 mt-40 mb-10">
                                                            <ul class="item-meta">
                                                                <li>
                                                                    Project Type : <span
                                                                        class="pl-2 black-color f-700">Graphic
                                                                        Design</span>
                                                                </li>
                                                                <li>
                                                                    Clien : <span
                                                                        class="pl-2 black-color f-700 f-poppins">Juwel
                                                                        Khan</span>
                                                                </li>
                                                                <li>
                                                                    Duration :<span class="pl-2 black-color f-700">2
                                                                        Weeks</span>
                                                                </li>
                                                                <li>
                                                                    Task : <span class="pl-2 black-color f-700">UI/UX,
                                                                        Frontend</span>
                                                                </li>
                                                                <li>
                                                                    Budget : <span
                                                                        class="pl-2 black-color f-700">$2000</span>
                                                                </li>
                                                            </ul>
                                                            <a href="#"
                                                                class="btn position-relative over-hidden text-white theme-bg theme-border2 text-uppercase mt-20 pt-2 pb-2">View
                                                                Live</a>
                                                        </div>
                                                    </div><!-- /col -->
                                                </div><!-- /row -->
                                                <div class="pro-modal-footer mt-30 mb-45">
                                                    <div class="row align-items-center justify-content-md-between">
                                                        <div class="col-xl-7 col-lg-7  col-md-12 col-sm-12 col-12">
                                                            <div class="modal-tags d-sm-flex align-items-center pt-25">
                                                                <h6
                                                                    class="primary-font-family mb-0 pr-15 black-color f-700">
                                                                    Tags :</h6>
                                                                <ul class="tag-list">
                                                                    <li class="d-inline-block pr-10 f-700">
                                                                        <a class="secondary-color3 d-block"
                                                                            href="#">Web Design</a>
                                                                    </li>
                                                                    <li class="d-inline-block pr-10 f-700">
                                                                        <a class="secondary-color3 d-block"
                                                                            href="#">Social Media</a>
                                                                    </li>
                                                                    <li class="d-inline-block pr-10 f-700">
                                                                        <a class="secondary-color3 d-block"
                                                                            href="#">Product</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div><!-- /col -->
                                                        <div class="col-xl-5 col-lg-5  col-md-12 col-sm-10 col-12">
                                                            <div
                                                                class="pro-modal-social-link d-flex align-items-center justify-content-lg-end pt-25">
                                                                <h6
                                                                    class="primary-font-family pr-15 f-700 mb-0 black-color">
                                                                    Share :</h6>
                                                                <ul class="social-link text-md-right">
                                                                    <li class="d-inline-block">
                                                                        <a class="facebook-color text-center pl-15 d-inline-block transition-3"
                                                                            href="#"><i
                                                                                class="fab fa-facebook-f"></i></a>
                                                                    </li>
                                                                    <li class="d-inline-block">
                                                                        <a class="twitter-color text-center pl-15 d-inline-block transition-3"
                                                                            href="#"><i
                                                                                class="fab fa-twitter"></i></a>
                                                                    </li>
                                                                    <li class="d-inline-block">
                                                                        <a class="google-plus-color text-center pl-15 d-inline-block transition-3"
                                                                            href="#"><i
                                                                                class="fab fa-google-plus-g"></i></a>
                                                                    </li>
                                                                    <li class="d-inline-block">
                                                                        <a class="linkedin-color text-center pl-15 d-inline-block transition-3"
                                                                            href="#"><i
                                                                                class="fab fa-linkedin-in"></i></a>
                                                                    </li>
                                                                </ul><!-- social-link -->
                                                            </div>
                                                        </div><!-- /col -->
                                                    </div> <!-- .row -->
                                                </div>
                                            </div><!-- /modal-body -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal 2 end -->

                        </div><!-- /col -->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 grid-item design">
                            <div class="single-portfolio position-relative over-hidden mb-30">
                                <img class="w-100" src="images/ui3.PNG" alt="image">
                                <div class="port-content text-center position-absolute transition5 z-index11">
                                    <span class="theme-color d-inline-block" data-toggle="modal"
                                        data-target="#exampleModal-p3"><i class="far fa-external-link-alt"></i>
                                    </span>
                                </div><!-- /port-content -->
                                <div class="port-over-content position-absolute left-0 pl-40 pr-40 pb-30 pt-40 z-index11">
                                    <span class="text-white f-700 mb-2 d-block text-uppercase">Web Design</span>
                                    <h3 class="text-white">When the musics over turn off the light</h3>
                                </div>
                            </div><!-- /single-prot -->

                            <!-- Modal 3 start -->
                            <div class="modal fade" id="exampleModal-p3" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModal-p3" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="close-icon float-right pt-10 pr-10">
                                            <button type="button" class="close d-inline-block" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true"><i class="fa fa-times"></i></span>
                                            </button>
                                        </div>
                                        <div class="modal-content border-0">
                                            <div class="modal-body pl-50 pr-50 pt-10 pb-20">
                                                <div class="blog-modal-img">
                                                    <img class="w-100" src="images/portfolio/home8-portfolio-img3.jpg"
                                                        alt="product image 02">
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-7 col-lg-7  col-md-12 col-sm-12 col-12">
                                                        <div class="content-wrapper">
                                                            <h2 class="modal-title f-700">eThemeStudio Photo Editor
                                                            </h2>
                                                            <p>
                                                                Duis aute irure dolor in reprehenderit in voluptate velit
                                                                esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum
                                                                dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                                                ad minim veniam, quis nostrud exercitation ullamco laboris
                                                                nisi ut aliquip ex ea commodo consequat. Excepteur sint
                                                                occaecat cupidatat non proident, sunt in culpa qui officia
                                                                deserunt mollit anim id est laborum.
                                                            </p>
                                                            <p>
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Dignissimos laudantium fuga molestiae, aut eius minus
                                                                reprehenderit.
                                                            </p>
                                                            <p class="mb-0">
                                                                Duis aute irure dolor in reprehenderit in voluptate velit
                                                                esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                                                                occaecat cupidatat non proident, sunt in culpa qui officia
                                                                deserunt mollit anim id est laborum.
                                                            </p>
                                                        </div>
                                                    </div><!-- /col -->
                                                    <div class="col-xl-5 col-lg-5  col-md-12 col-sm-12 col-12">
                                                        <div
                                                            class="meta-wrapper primary-bg mt-60 pt-40 pb-45 pr-20 pl-45 mt-40 mb-10">
                                                            <ul class="item-meta">
                                                                <li>
                                                                    Project Type : <span
                                                                        class="pl-2 black-color f-700">Graphic
                                                                        Design</span>
                                                                </li>
                                                                <li>
                                                                    Clien : <span
                                                                        class="pl-2 black-color f-700 f-poppins">Juwel
                                                                        Khan</span>
                                                                </li>
                                                                <li>
                                                                    Duration :<span class="pl-2 black-color f-700">2
                                                                        Weeks</span>
                                                                </li>
                                                                <li>
                                                                    Task : <span class="pl-2 black-color f-700">UI/UX,
                                                                        Frontend</span>
                                                                </li>
                                                                <li>
                                                                    Budget : <span
                                                                        class="pl-2 black-color f-700">$2000</span>
                                                                </li>
                                                            </ul>
                                                            <a href="#"
                                                                class="btn position-relative over-hidden text-white theme-bg theme-border2 text-uppercase mt-20 pt-2 pb-2">View
                                                                Live</a>
                                                        </div>
                                                    </div><!-- /col -->
                                                </div><!-- /row -->
                                                <div class="pro-modal-footer mt-30 mb-45">
                                                    <div class="row align-items-center justify-content-md-between">
                                                        <div class="col-xl-7 col-lg-7  col-md-12 col-sm-12 col-12">
                                                            <div class="modal-tags d-sm-flex align-items-center pt-25">
                                                                <h6
                                                                    class="primary-font-family mb-0 pr-15 black-color f-700">
                                                                    Tags :</h6>
                                                                <ul class="tag-list">
                                                                    <li class="d-inline-block pr-10 f-700">
                                                                        <a class="secondary-color3 d-block"
                                                                            href="#">Web Design</a>
                                                                    </li>
                                                                    <li class="d-inline-block pr-10 f-700">
                                                                        <a class="secondary-color3 d-block"
                                                                            href="#">Social Media</a>
                                                                    </li>
                                                                    <li class="d-inline-block pr-10 f-700">
                                                                        <a class="secondary-color3 d-block"
                                                                            href="#">Product</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div><!-- /col -->
                                                        <div class="col-xl-5 col-lg-5  col-md-12 col-sm-10 col-12">
                                                            <div
                                                                class="pro-modal-social-link d-flex align-items-center justify-content-lg-end pt-25">
                                                                <h6
                                                                    class="primary-font-family pr-15 f-700 mb-0 black-color">
                                                                    Share :</h6>
                                                                <ul class="social-link text-md-right">
                                                                    <li class="d-inline-block">
                                                                        <a class="facebook-color text-center pl-15 d-inline-block transition-3"
                                                                            href="#"><i
                                                                                class="fab fa-facebook-f"></i></a>
                                                                    </li>
                                                                    <li class="d-inline-block">
                                                                        <a class="twitter-color text-center pl-15 d-inline-block transition-3"
                                                                            href="#"><i
                                                                                class="fab fa-twitter"></i></a>
                                                                    </li>
                                                                    <li class="d-inline-block">
                                                                        <a class="google-plus-color text-center pl-15 d-inline-block transition-3"
                                                                            href="#"><i
                                                                                class="fab fa-google-plus-g"></i></a>
                                                                    </li>
                                                                    <li class="d-inline-block">
                                                                        <a class="linkedin-color text-center pl-15 d-inline-block transition-3"
                                                                            href="#"><i
                                                                                class="fab fa-linkedin-in"></i></a>
                                                                    </li>
                                                                </ul><!-- social-link -->
                                                            </div>
                                                        </div><!-- /col -->
                                                    </div> <!-- .row -->
                                                </div>
                                            </div><!-- /modal-body -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal 3 end -->

                        </div><!-- /col -->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 grid-item creative-design">
                            <div class="single-portfolio position-relative over-hidden mb-30">
                                <img class="w-100" src="images/ui4.PNG" alt="image">
                                <div class="port-content text-center position-absolute transition5 z-index11">
                                    <span class="theme-color d-inline-block" data-toggle="modal"
                                        data-target="#exampleModal-p4"><i class="far fa-external-link-alt"></i>
                                    </span>
                                </div><!-- /port-content -->
                                <div class="port-over-content position-absolute left-0 pl-40 pr-40 pb-30 pt-40 z-index11">
                                    <span class="text-white f-700 mb-2 d-block text-uppercase">Web Design</span>
                                    <h3 class="text-white">When the musics over turn off the light</h3>
                                </div>
                            </div><!-- /single-prot -->

                            <!-- Modal 4 start -->
                            <div class="modal fade" id="exampleModal-p4" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModal-p4" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="close-icon float-right pt-10 pr-10">
                                            <button type="button" class="close d-inline-block" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true"><i class="fa fa-times"></i></span>
                                            </button>
                                        </div>
                                        <div class="modal-content border-0">
                                            <div class="modal-body pl-50 pr-50 pt-10 pb-20">
                                                <div class="blog-modal-img">
                                                    <img class="w-100" src="images/portfolio/home8-portfolio-img4.jpg"
                                                        alt="blog post image 02">
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-7 col-lg-7  col-md-12 col-sm-12 col-12">
                                                        <div class="content-wrapper">
                                                            <h2 class="modal-title f-700">eThemeStudio Accounting App
                                                            </h2>
                                                            <p>
                                                                Duis aute irure dolor in reprehenderit in voluptate velit
                                                                esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum
                                                                dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                                                ad minim veniam, quis nostrud exercitation ullamco laboris
                                                                nisi ut aliquip ex ea commodo consequat. Excepteur sint
                                                                occaecat cupidatat non proident, sunt in culpa qui officia
                                                                deserunt mollit anim id est laborum.
                                                            </p>
                                                            <p>
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Dignissimos laudantium fuga molestiae, aut eius minus
                                                                reprehenderit.
                                                            </p>
                                                            <p class="mb-0">
                                                                Duis aute irure dolor in reprehenderit in voluptate velit
                                                                esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                                                                occaecat cupidatat non proident, sunt in culpa qui officia
                                                                deserunt mollit anim id est laborum.
                                                            </p>
                                                        </div>
                                                    </div><!-- /col -->
                                                    <div class="col-xl-5 col-lg-5  col-md-12 col-sm-12 col-12">
                                                        <div
                                                            class="meta-wrapper primary-bg mt-60 pt-40 pb-45 pr-20 pl-45 mt-40 mb-10">
                                                            <ul class="item-meta">
                                                                <li>
                                                                    Project Type : <span
                                                                        class="pl-2 black-color f-700">Graphic
                                                                        Design</span>
                                                                </li>
                                                                <li>
                                                                    Clien : <span
                                                                        class="pl-2 black-color f-700 f-poppins">Juwel
                                                                        Khan</span>
                                                                </li>
                                                                <li>
                                                                    Duration :<span class="pl-2 black-color f-700">2
                                                                        Weeks</span>
                                                                </li>
                                                                <li>
                                                                    Task : <span class="pl-2 black-color f-700">UI/UX,
                                                                        Frontend</span>
                                                                </li>
                                                                <li>
                                                                    Budget : <span
                                                                        class="pl-2 black-color f-700">$2000</span>
                                                                </li>
                                                            </ul>
                                                            <a href="#"
                                                                class="btn position-relative over-hidden text-white theme-bg theme-border2 text-uppercase mt-20 pt-2 pb-2">View
                                                                Live</a>
                                                        </div>
                                                    </div><!-- /col -->
                                                </div><!-- /row -->
                                                <div class="pro-modal-footer mt-30 mb-45">
                                                    <div class="row align-items-center justify-content-md-between">
                                                        <div class="col-xl-7 col-lg-7  col-md-12 col-sm-12 col-12">
                                                            <div class="modal-tags d-sm-flex align-items-center pt-25">
                                                                <h6
                                                                    class="primary-font-family mb-0 pr-15 black-color f-700">
                                                                    Tags :</h6>
                                                                <ul class="tag-list">
                                                                    <li class="d-inline-block pr-10 f-700">
                                                                        <a class="secondary-color3 d-block"
                                                                            href="#">Web Design</a>
                                                                    </li>
                                                                    <li class="d-inline-block pr-10 f-700">
                                                                        <a class="secondary-color3 d-block"
                                                                            href="#">Social Media</a>
                                                                    </li>
                                                                    <li class="d-inline-block pr-10 f-700">
                                                                        <a class="secondary-color3 d-block"
                                                                            href="#">Product</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div><!-- /col -->
                                                        <div class="col-xl-5 col-lg-5  col-md-12 col-sm-10 col-12">
                                                            <div
                                                                class="pro-modal-social-link d-flex align-items-center justify-content-lg-end pt-25">
                                                                <h6
                                                                    class="primary-font-family pr-15 f-700 mb-0 black-color">
                                                                    Share :</h6>
                                                                <ul class="social-link text-md-right">
                                                                    <li class="d-inline-block">
                                                                        <a class="facebook-color text-center pl-15 d-inline-block transition-3"
                                                                            href="#"><i
                                                                                class="fab fa-facebook-f"></i></a>
                                                                    </li>
                                                                    <li class="d-inline-block">
                                                                        <a class="twitter-color text-center pl-15 d-inline-block transition-3"
                                                                            href="#"><i
                                                                                class="fab fa-twitter"></i></a>
                                                                    </li>
                                                                    <li class="d-inline-block">
                                                                        <a class="google-plus-color text-center pl-15 d-inline-block transition-3"
                                                                            href="#"><i
                                                                                class="fab fa-google-plus-g"></i></a>
                                                                    </li>
                                                                    <li class="d-inline-block">
                                                                        <a class="linkedin-color text-center pl-15 d-inline-block transition-3"
                                                                            href="#"><i
                                                                                class="fab fa-linkedin-in"></i></a>
                                                                    </li>
                                                                </ul><!-- social-link -->
                                                            </div>
                                                        </div><!-- /col -->
                                                    </div> <!-- .row -->
                                                </div>
                                            </div><!-- /modal-body -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal 4 end -->

                        </div><!-- /col -->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 grid-item design">
                            <div class="single-portfolio position-relative over-hidden mb-30">
                                <img class="w-100" src="images/ui5.PNG" alt="image">
                                <div class="port-content text-center position-absolute transition5 z-index11">
                                    <span class="theme-color d-inline-block" data-toggle="modal"
                                        data-target="#exampleModal-p5"><i class="far fa-external-link-alt"></i>
                                    </span>
                                </div><!-- /port-content -->
                                <div class="port-over-content position-absolute left-0 pl-40 pr-40 pb-30 pt-40 z-index11">
                                    <span class="text-white f-700 mb-2 d-block text-uppercase">Web Design</span>
                                    <h3 class="text-white">When the musics over turn off the light</h3>
                                </div>
                            </div><!-- /single-prot -->

                            <!-- Modal 6 start -->
                            <div class="modal fade" id="exampleModal-p5" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModal-p5" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="close-icon float-right pt-10 pr-10">
                                            <button type="button" class="close d-inline-block" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true"><i class="fa fa-times"></i></span>
                                            </button>
                                        </div>
                                        <div class="modal-content border-0">
                                            <div class="modal-body pl-50 pr-50 pt-10 pb-20">
                                                <div class="blog-modal-img">
                                                    <img class="w-100" src="images/portfolio/home8-portfolio-img5.jpg"
                                                        alt="blog post image 02">
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-7 col-lg-7  col-md-12 col-sm-12 col-12">
                                                        <div class="content-wrapper">
                                                            <h2 class="modal-title f-700">eThemeStudio Keyword Tool
                                                            </h2>
                                                            <p>
                                                                Duis aute irure dolor in reprehenderit in voluptate velit
                                                                esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum
                                                                dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                                                ad minim veniam, quis nostrud exercitation ullamco laboris
                                                                nisi ut aliquip ex ea commodo consequat. Excepteur sint
                                                                occaecat cupidatat non proident, sunt in culpa qui officia
                                                                deserunt mollit anim id est laborum.
                                                            </p>
                                                            <p>
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Dignissimos laudantium fuga molestiae, aut eius minus
                                                                reprehenderit.
                                                            </p>
                                                            <p class="mb-0">
                                                                Duis aute irure dolor in reprehenderit in voluptate velit
                                                                esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                                                                occaecat cupidatat non proident, sunt in culpa qui officia
                                                                deserunt mollit anim id est laborum.
                                                            </p>
                                                        </div>
                                                    </div><!-- /col -->
                                                    <div class="col-xl-5 col-lg-5  col-md-12 col-sm-12 col-12">
                                                        <div
                                                            class="meta-wrapper primary-bg mt-60 pt-40 pb-45 pr-20 pl-45 mt-40 mb-10">
                                                            <ul class="item-meta">
                                                                <li>
                                                                    Project Type : <span
                                                                        class="pl-2 black-color f-700">Graphic
                                                                        Design</span>
                                                                </li>
                                                                <li>
                                                                    Clien : <span
                                                                        class="pl-2 black-color f-700 f-poppins">Juwel
                                                                        Khan</span>
                                                                </li>
                                                                <li>
                                                                    Duration :<span class="pl-2 black-color f-700">2
                                                                        Weeks</span>
                                                                </li>
                                                                <li>
                                                                    Task : <span class="pl-2 black-color f-700">UI/UX,
                                                                        Frontend</span>
                                                                </li>
                                                                <li>
                                                                    Budget : <span
                                                                        class="pl-2 black-color f-700">$2000</span>
                                                                </li>
                                                            </ul>
                                                            <a href="#"
                                                                class="btn position-relative over-hidden text-white theme-bg theme-border2 text-uppercase mt-20 pt-2 pb-2">View
                                                                Live</a>
                                                        </div>
                                                    </div><!-- /col -->
                                                </div><!-- /row -->
                                                <div class="pro-modal-footer mt-30 mb-45">
                                                    <div class="row align-items-center justify-content-md-between">
                                                        <div class="col-xl-7 col-lg-7  col-md-12 col-sm-12 col-12">
                                                            <div class="modal-tags d-sm-flex align-items-center pt-25">
                                                                <h6
                                                                    class="primary-font-family mb-0 pr-15 black-color f-700">
                                                                    Tags :</h6>
                                                                <ul class="tag-list">
                                                                    <li class="d-inline-block pr-10 f-700">
                                                                        <a class="secondary-color3 d-block"
                                                                            href="#">Web Design</a>
                                                                    </li>
                                                                    <li class="d-inline-block pr-10 f-700">
                                                                        <a class="secondary-color3 d-block"
                                                                            href="#">Social Media</a>
                                                                    </li>
                                                                    <li class="d-inline-block pr-10 f-700">
                                                                        <a class="secondary-color3 d-block"
                                                                            href="#">Product</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div><!-- /col -->
                                                        <div class="col-xl-5 col-lg-5  col-md-12 col-sm-10 col-12">
                                                            <div
                                                                class="pro-modal-social-link d-flex align-items-center justify-content-lg-end pt-25">
                                                                <h6
                                                                    class="primary-font-family pr-15 f-700 mb-0 black-color">
                                                                    Share :</h6>
                                                                <ul class="social-link text-md-right">
                                                                    <li class="d-inline-block">
                                                                        <a class="facebook-color text-center pl-15 d-inline-block transition-3"
                                                                            href="#"><i
                                                                                class="fab fa-facebook-f"></i></a>
                                                                    </li>
                                                                    <li class="d-inline-block">
                                                                        <a class="twitter-color text-center pl-15 d-inline-block transition-3"
                                                                            href="#"><i
                                                                                class="fab fa-twitter"></i></a>
                                                                    </li>
                                                                    <li class="d-inline-block">
                                                                        <a class="google-plus-color text-center pl-15 d-inline-block transition-3"
                                                                            href="#"><i
                                                                                class="fab fa-google-plus-g"></i></a>
                                                                    </li>
                                                                    <li class="d-inline-block">
                                                                        <a class="linkedin-color text-center pl-15 d-inline-block transition-3"
                                                                            href="#"><i
                                                                                class="fab fa-linkedin-in"></i></a>
                                                                    </li>
                                                                </ul><!-- social-link -->
                                                            </div>
                                                        </div><!-- /col -->
                                                    </div> <!-- .row -->
                                                </div>
                                            </div><!-- /modal-body -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal 6 end -->

                        </div><!-- /col -->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 grid-item design">
                            <div class="single-portfolio position-relative over-hidden mb-30">
                                <img class="w-100" src="images/ui6.PNG" alt="image">
                                <div class="port-content text-center position-absolute transition5 z-index11">
                                    <span class="theme-color d-inline-block" data-toggle="modal"
                                        data-target="#exampleModal-p6"><i class="far fa-external-link-alt"></i>
                                    </span>
                                </div><!-- /port-content -->
                                <div class="port-over-content position-absolute left-0 pl-40 pr-40 pb-30 pt-40 z-index11">
                                    <span class="text-white f-700 mb-2 d-block text-uppercase">Web Design</span>
                                    <h3 class="text-white">When the musics over turn off the light</h3>
                                </div>
                            </div><!-- /single-prot -->

                            <!-- Modal 5 start -->
                            <div class="modal fade" id="exampleModal-p6" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModal-p6" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="close-icon float-right pt-10 pr-10">
                                            <button type="button" class="close d-inline-block" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true"><i class="fa fa-times"></i></span>
                                            </button>
                                        </div>
                                        <div class="modal-content border-0">
                                            <div class="modal-body pl-50 pr-50 pt-10 pb-20">
                                                <div class="blog-modal-img">
                                                    <img class="w-100" src="images/portfolio/home8-portfolio-img6.jpg"
                                                        alt="blog post image 02">
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-7 col-lg-7  col-md-12 col-sm-12 col-12">
                                                        <div class="content-wrapper">
                                                            <h2 class="modal-title f-700">eThemeStudio Social Media
                                                                Tool</h2>
                                                            <p>
                                                                Duis aute irure dolor in reprehenderit in voluptate velit
                                                                esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum
                                                                dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                                                ad minim veniam, quis nostrud exercitation ullamco laboris
                                                                nisi ut aliquip ex ea commodo consequat. Excepteur sint
                                                                occaecat cupidatat non proident, sunt in culpa qui officia
                                                                deserunt mollit anim id est laborum.
                                                            </p>
                                                            <p>
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Dignissimos laudantium fuga molestiae, aut eius minus
                                                                reprehenderit.
                                                            </p>
                                                            <p class="mb-0">
                                                                Duis aute irure dolor in reprehenderit in voluptate velit
                                                                esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                                                                occaecat cupidatat non proident, sunt in culpa qui officia
                                                                deserunt mollit anim id est laborum.
                                                            </p>
                                                        </div>
                                                    </div><!-- /col -->
                                                    <div class="col-xl-5 col-lg-5  col-md-12 col-sm-12 col-12">
                                                        <div
                                                            class="meta-wrapper primary-bg mt-60 pt-40 pb-45 pr-20 pl-45 mt-40 mb-10">
                                                            <ul class="item-meta">
                                                                <li>
                                                                    Project Type : <span
                                                                        class="pl-2 black-color f-700">Graphic
                                                                        Design</span>
                                                                </li>
                                                                <li>
                                                                    Clien : <span
                                                                        class="pl-2 black-color f-700 f-poppins">Juwel
                                                                        Khan</span>
                                                                </li>
                                                                <li>
                                                                    Duration :<span class="pl-2 black-color f-700">2
                                                                        Weeks</span>
                                                                </li>
                                                                <li>
                                                                    Task : <span class="pl-2 black-color f-700">UI/UX,
                                                                        Frontend</span>
                                                                </li>
                                                                <li>
                                                                    Budget : <span
                                                                        class="pl-2 black-color f-700">$2000</span>
                                                                </li>
                                                            </ul>
                                                            <a href="#"
                                                                class="btn position-relative over-hidden text-white theme-bg theme-border2 text-uppercase mt-20 pt-2 pb-2">View
                                                                Live</a>
                                                        </div>
                                                    </div><!-- /col -->
                                                </div><!-- /row -->
                                                <div class="pro-modal-footer mt-30 mb-45">
                                                    <div class="row align-items-center justify-content-md-between">
                                                        <div class="col-xl-7 col-lg-7  col-md-12 col-sm-12 col-12">
                                                            <div class="modal-tags d-sm-flex align-items-center pt-25">
                                                                <h6 class="primary-font-family mb-0 pr-15 f-700">Tags :
                                                                </h6>
                                                                <ul class="tag-list">
                                                                    <li class="d-inline-block pr-10 f-700">
                                                                        <a class="secondary-color3 d-block"
                                                                            href="#">Web Design</a>
                                                                    </li>
                                                                    <li class="d-inline-block pr-10 f-700">
                                                                        <a class="secondary-color3 d-block"
                                                                            href="#">Social Media</a>
                                                                    </li>
                                                                    <li class="d-inline-block pr-10 f-700">
                                                                        <a class="secondary-color3 d-block"
                                                                            href="#">Product</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div><!-- /col -->
                                                        <div class="col-xl-5 col-lg-5  col-md-12 col-sm-10 col-12">
                                                            <div
                                                                class="pro-modal-social-link d-flex align-items-center justify-content-lg-end pt-25">
                                                                <h6 class="primary-font-family pr-15 f-700 mb-0">Share :
                                                                </h6>
                                                                <ul class="social-link text-md-right">
                                                                    <li class="d-inline-block">
                                                                        <a class="facebook-color text-center pl-15 d-inline-block transition-3"
                                                                            href="#"><i
                                                                                class="fab fa-facebook-f"></i></a>
                                                                    </li>
                                                                    <li class="d-inline-block">
                                                                        <a class="twitter-color text-center pl-15 d-inline-block transition-3"
                                                                            href="#"><i
                                                                                class="fab fa-twitter"></i></a>
                                                                    </li>
                                                                    <li class="d-inline-block">
                                                                        <a class="google-plus-color text-center pl-15 d-inline-block transition-3"
                                                                            href="#"><i
                                                                                class="fab fa-google-plus-g"></i></a>
                                                                    </li>
                                                                    <li class="d-inline-block">
                                                                        <a class="linkedin-color text-center pl-15 d-inline-block transition-3"
                                                                            href="#"><i
                                                                                class="fab fa-linkedin-in"></i></a>
                                                                    </li>
                                                                </ul><!-- social-link -->
                                                            </div>
                                                        </div><!-- /col -->
                                                    </div> <!-- .row -->
                                                </div>
                                            </div><!-- /modal-body -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal 5 end -->
                        </div><!-- /col -->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 grid-item design">
                            <div class="single-portfolio position-relative over-hidden mb-30">
                                <img class="w-100" src="images/ui7.PNG" alt="image">
                                <div class="port-content text-center position-absolute transition5 z-index11">
                                    <span class="theme-color d-inline-block" data-toggle="modal"
                                        data-target="#exampleModal-p8"><i class="far fa-external-link-alt"></i>
                                    </span>
                                </div><!-- /port-content -->
                                <div class="port-over-content position-absolute left-0 pl-40 pr-40 pb-30 pt-40 z-index11">
                                    <span class="text-white f-700 mb-2 d-block text-uppercase">Web Design</span>
                                    <h3 class="text-white">When the musics over turn off the light</h3>
                                </div>
                            </div><!-- /single-prot -->

                            <!-- Modal 5 start -->
                            <div class="modal fade" id="exampleModal-p8" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModal-p8" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="close-icon float-right pt-10 pr-10">
                                            <button type="button" class="close d-inline-block" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true"><i class="fa fa-times"></i></span>
                                            </button>
                                        </div>
                                        <div class="modal-content border-0">
                                            <div class="modal-body pl-50 pr-50 pt-10 pb-20">
                                                <div class="blog-modal-img">
                                                    <img class="w-100" src="images/portfolio/home8-portfolio-img8.jpg"
                                                        alt="blog post image 02">
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-7 col-lg-7  col-md-12 col-sm-12 col-12">
                                                        <div class="content-wrapper">
                                                            <h2 class="modal-title f-700">eThemeStudio Social Media
                                                                Tool</h2>
                                                            <p>
                                                                Duis aute irure dolor in reprehenderit in voluptate velit
                                                                esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum
                                                                dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                                                ad minim veniam, quis nostrud exercitation ullamco laboris
                                                                nisi ut aliquip ex ea commodo consequat. Excepteur sint
                                                                occaecat cupidatat non proident, sunt in culpa qui officia
                                                                deserunt mollit anim id est laborum.
                                                            </p>
                                                            <p>
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Dignissimos laudantium fuga molestiae, aut eius minus
                                                                reprehenderit.
                                                            </p>
                                                            <p class="mb-0">
                                                                Duis aute irure dolor in reprehenderit in voluptate velit
                                                                esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                                                                occaecat cupidatat non proident, sunt in culpa qui officia
                                                                deserunt mollit anim id est laborum.
                                                            </p>
                                                        </div>
                                                    </div><!-- /col -->
                                                    <div class="col-xl-5 col-lg-5  col-md-12 col-sm-12 col-12">
                                                        <div
                                                            class="meta-wrapper primary-bg mt-60 pt-40 pb-45 pr-20 pl-45 mt-40 mb-10">
                                                            <ul class="item-meta">
                                                                <li>
                                                                    Project Type : <span
                                                                        class="pl-2 black-color f-700">Graphic
                                                                        Design</span>
                                                                </li>
                                                                <li>
                                                                    Clien : <span
                                                                        class="pl-2 black-color f-700 f-poppins">Juwel
                                                                        Khan</span>
                                                                </li>
                                                                <li>
                                                                    Duration :<span class="pl-2 black-color f-700">2
                                                                        Weeks</span>
                                                                </li>
                                                                <li>
                                                                    Task : <span class="pl-2 black-color f-700">UI/UX,
                                                                        Frontend</span>
                                                                </li>
                                                                <li>
                                                                    Budget : <span
                                                                        class="pl-2 black-color f-700">$2000</span>
                                                                </li>
                                                            </ul>
                                                            <a href="#"
                                                                class="btn position-relative over-hidden text-white theme-bg theme-border2 text-uppercase mt-20 pt-2 pb-2">View
                                                                Live</a>
                                                        </div>
                                                    </div><!-- /col -->
                                                </div><!-- /row -->
                                                <div class="pro-modal-footer mt-30 mb-45">
                                                    <div class="row align-items-center justify-content-md-between">
                                                        <div class="col-xl-7 col-lg-7  col-md-12 col-sm-12 col-12">
                                                            <div class="modal-tags d-sm-flex align-items-center pt-25">
                                                                <h6 class="primary-font-family mb-0 pr-15 f-700">Tags :
                                                                </h6>
                                                                <ul class="tag-list">
                                                                    <li class="d-inline-block pr-10 f-700">
                                                                        <a class="secondary-color3 d-block"
                                                                            href="#">Web Design</a>
                                                                    </li>
                                                                    <li class="d-inline-block pr-10 f-700">
                                                                        <a class="secondary-color3 d-block"
                                                                            href="#">Social Media</a>
                                                                    </li>
                                                                    <li class="d-inline-block pr-10 f-700">
                                                                        <a class="secondary-color3 d-block"
                                                                            href="#">Product</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div><!-- /col -->
                                                        <div class="col-xl-5 col-lg-5  col-md-12 col-sm-10 col-12">
                                                            <div
                                                                class="pro-modal-social-link d-flex align-items-center justify-content-lg-end pt-25">
                                                                <h6 class="primary-font-family pr-15 f-700 mb-0">Share :
                                                                </h6>
                                                                <ul class="social-link text-md-right">
                                                                    <li class="d-inline-block">
                                                                        <a class="facebook-color text-center pl-15 d-inline-block transition-3"
                                                                            href="#"><i
                                                                                class="fab fa-facebook-f"></i></a>
                                                                    </li>
                                                                    <li class="d-inline-block">
                                                                        <a class="twitter-color text-center pl-15 d-inline-block transition-3"
                                                                            href="#"><i
                                                                                class="fab fa-twitter"></i></a>
                                                                    </li>
                                                                    <li class="d-inline-block">
                                                                        <a class="google-plus-color text-center pl-15 d-inline-block transition-3"
                                                                            href="#"><i
                                                                                class="fab fa-google-plus-g"></i></a>
                                                                    </li>
                                                                    <li class="d-inline-block">
                                                                        <a class="linkedin-color text-center pl-15 d-inline-block transition-3"
                                                                            href="#"><i
                                                                                class="fab fa-linkedin-in"></i></a>
                                                                    </li>
                                                                </ul><!-- social-link -->
                                                            </div>
                                                        </div><!-- /col -->
                                                    </div> <!-- .row -->
                                                </div>
                                            </div><!-- /modal-body -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal 5 end -->
                        </div><!-- /col -->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 grid-item creative-design">
                            <div class="single-portfolio position-relative over-hidden mb-30">
                                <img class="w-100" src="images/ui8.PNG" alt="image">
                                <div class="port-content text-center position-absolute transition5 z-index11">
                                    <span class="theme-color d-inline-block" data-toggle="modal"
                                        data-target="#exampleModal-p7"><i class="far fa-external-link-alt"></i>
                                    </span>
                                </div><!-- /port-content -->
                                <div class="port-over-content position-absolute left-0 pl-40 pr-40 pb-30 pt-40 z-index11">
                                    <span class="text-white f-700 mb-2 d-block text-uppercase">Web Design</span>
                                    <h3 class="text-white">When the musics over turn off the light</h3>
                                </div>
                            </div><!-- /single-prot -->

                            <!-- Modal 4 start -->
                            <div class="modal fade" id="exampleModal-p7" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModal-p7" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="close-icon float-right pt-10 pr-10">
                                            <button type="button" class="close d-inline-block" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true"><i class="fa fa-times"></i></span>
                                            </button>
                                        </div>
                                        <div class="modal-content border-0">
                                            <div class="modal-body pl-50 pr-50 pt-10 pb-20">
                                                <div class="blog-modal-img">
                                                    <img class="w-100" src="images/portfolio/home8-portfolio-img7.jpg"
                                                        alt="blog post image 02">
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-7 col-lg-7  col-md-12 col-sm-12 col-12">
                                                        <div class="content-wrapper">
                                                            <h2 class="modal-title f-700">eThemeStudio Accounting App
                                                            </h2>
                                                            <p>
                                                                Duis aute irure dolor in reprehenderit in voluptate velit
                                                                esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum
                                                                dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                                                ad minim veniam, quis nostrud exercitation ullamco laboris
                                                                nisi ut aliquip ex ea commodo consequat. Excepteur sint
                                                                occaecat cupidatat non proident, sunt in culpa qui officia
                                                                deserunt mollit anim id est laborum.
                                                            </p>
                                                            <p>
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Dignissimos laudantium fuga molestiae, aut eius minus
                                                                reprehenderit.
                                                            </p>
                                                            <p class="mb-0">
                                                                Duis aute irure dolor in reprehenderit in voluptate velit
                                                                esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                                                                occaecat cupidatat non proident, sunt in culpa qui officia
                                                                deserunt mollit anim id est laborum.
                                                            </p>
                                                        </div>
                                                    </div><!-- /col -->
                                                    <div class="col-xl-5 col-lg-5  col-md-12 col-sm-12 col-12">
                                                        <div
                                                            class="meta-wrapper primary-bg mt-60 pt-40 pb-45 pr-20 pl-45 mt-40 mb-10">
                                                            <ul class="item-meta">
                                                                <li>
                                                                    Project Type : <span
                                                                        class="pl-2 black-color f-700">Graphic
                                                                        Design</span>
                                                                </li>
                                                                <li>
                                                                    Clien : <span
                                                                        class="pl-2 black-color f-700 f-poppins">Juwel
                                                                        Khan</span>
                                                                </li>
                                                                <li>
                                                                    Duration :<span class="pl-2 black-color f-700">2
                                                                        Weeks</span>
                                                                </li>
                                                                <li>
                                                                    Task : <span class="pl-2 black-color f-700">UI/UX,
                                                                        Frontend</span>
                                                                </li>
                                                                <li>
                                                                    Budget : <span
                                                                        class="pl-2 black-color f-700">$2000</span>
                                                                </li>
                                                            </ul>
                                                            <a href="#"
                                                                class="btn position-relative over-hidden text-white theme-bg theme-border2 text-uppercase mt-20 pt-2 pb-2">View
                                                                Live</a>
                                                        </div>
                                                    </div><!-- /col -->
                                                </div><!-- /row -->
                                                <div class="pro-modal-footer mt-30 mb-45">
                                                    <div class="row align-items-center justify-content-md-between">
                                                        <div class="col-xl-7 col-lg-7  col-md-12 col-sm-12 col-12">
                                                            <div class="modal-tags d-sm-flex align-items-center pt-25">
                                                                <h6
                                                                    class="primary-font-family mb-0 pr-15 black-color f-700">
                                                                    Tags :</h6>
                                                                <ul class="tag-list">
                                                                    <li class="d-inline-block pr-10 f-700">
                                                                        <a class="secondary-color3 d-block"
                                                                            href="#">Web Design</a>
                                                                    </li>
                                                                    <li class="d-inline-block pr-10 f-700">
                                                                        <a class="secondary-color3 d-block"
                                                                            href="#">Social Media</a>
                                                                    </li>
                                                                    <li class="d-inline-block pr-10 f-700">
                                                                        <a class="secondary-color3 d-block"
                                                                            href="#">Product</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div><!-- /col -->
                                                        <div class="col-xl-5 col-lg-5  col-md-12 col-sm-10 col-12">
                                                            <div
                                                                class="pro-modal-social-link d-flex align-items-center justify-content-lg-end pt-25">
                                                                <h6
                                                                    class="primary-font-family pr-15 f-700 mb-0 black-color">
                                                                    Share :</h6>
                                                                <ul class="social-link text-md-right">
                                                                    <li class="d-inline-block">
                                                                        <a class="facebook-color text-center pl-15 d-inline-block transition-3"
                                                                            href="#"><i
                                                                                class="fab fa-facebook-f"></i></a>
                                                                    </li>
                                                                    <li class="d-inline-block">
                                                                        <a class="twitter-color text-center pl-15 d-inline-block transition-3"
                                                                            href="#"><i
                                                                                class="fab fa-twitter"></i></a>
                                                                    </li>
                                                                    <li class="d-inline-block">
                                                                        <a class="google-plus-color text-center pl-15 d-inline-block transition-3"
                                                                            href="#"><i
                                                                                class="fab fa-google-plus-g"></i></a>
                                                                    </li>
                                                                    <li class="d-inline-block">
                                                                        <a class="linkedin-color text-center pl-15 d-inline-block transition-3"
                                                                            href="#"><i
                                                                                class="fab fa-linkedin-in"></i></a>
                                                                    </li>
                                                                </ul><!-- social-link -->
                                                            </div>
                                                        </div><!-- /col -->
                                                    </div> <!-- .row -->
                                                </div>
                                            </div><!-- /modal-body -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal 4 end -->

                        </div><!-- /col -->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 grid-item creative-design ">
                            <div class="single-portfolio position-relative over-hidden mb-30">
                                <img class="w-100" src="images/ui9.PNG" alt="image">
                                <div class="port-content text-center position-absolute transition5 z-index11">
                                    <span class="theme-color d-inline-block" data-toggle="modal"
                                        data-target="#exampleModal-p9"><i class="far fa-external-link-alt"></i>
                                    </span>
                                </div><!-- /port-content -->
                                <div class="port-over-content position-absolute left-0 pl-40 pr-40 pb-30 pt-40 z-index11">
                                    <span class="text-white f-700 mb-2 d-block text-uppercase">Web Design</span>
                                    <h3 class="text-white">When the musics over turn off the light</h3>
                                </div>
                            </div><!-- /single-prot -->

                            <!-- Modal 6 start -->
                            <div class="modal fade" id="exampleModal-p9" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModal-p9" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="close-icon float-right pt-10 pr-10">
                                            <button type="button" class="close d-inline-block" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true"><i class="fa fa-times"></i></span>
                                            </button>
                                        </div>
                                        <div class="modal-content border-0">
                                            <div class="modal-body pl-50 pr-50 pt-10 pb-20">
                                                <div class="blog-modal-img">
                                                    <img class="w-100" src="images/portfolio/home8-portfolio-img9.jpg"
                                                        alt="blog post image 02">
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-7 col-lg-7  col-md-12 col-sm-12 col-12">
                                                        <div class="content-wrapper">
                                                            <h2 class="modal-title f-700">eThemeStudio Keyword Tool
                                                            </h2>
                                                            <p>
                                                                Duis aute irure dolor in reprehenderit in voluptate velit
                                                                esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum
                                                                dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                                                ad minim veniam, quis nostrud exercitation ullamco laboris
                                                                nisi ut aliquip ex ea commodo consequat. Excepteur sint
                                                                occaecat cupidatat non proident, sunt in culpa qui officia
                                                                deserunt mollit anim id est laborum.
                                                            </p>
                                                            <p>
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Dignissimos laudantium fuga molestiae, aut eius minus
                                                                reprehenderit.
                                                            </p>
                                                            <p class="mb-0">
                                                                Duis aute irure dolor in reprehenderit in voluptate velit
                                                                esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                                                                occaecat cupidatat non proident, sunt in culpa qui officia
                                                                deserunt mollit anim id est laborum.
                                                            </p>
                                                        </div>
                                                    </div><!-- /col -->
                                                    <div class="col-xl-5 col-lg-5  col-md-12 col-sm-12 col-12">
                                                        <div
                                                            class="meta-wrapper primary-bg mt-60 pt-40 pb-45 pr-20 pl-45 mt-40 mb-10">
                                                            <ul class="item-meta">
                                                                <li>
                                                                    Project Type : <span
                                                                        class="pl-2 black-color f-700">Graphic
                                                                        Design</span>
                                                                </li>
                                                                <li>
                                                                    Clien : <span
                                                                        class="pl-2 black-color f-700 f-poppins">Juwel
                                                                        Khan</span>
                                                                </li>
                                                                <li>
                                                                    Duration :<span class="pl-2 black-color f-700">2
                                                                        Weeks</span>
                                                                </li>
                                                                <li>
                                                                    Task : <span class="pl-2 black-color f-700">UI/UX,
                                                                        Frontend</span>
                                                                </li>
                                                                <li>
                                                                    Budget : <span
                                                                        class="pl-2 black-color f-700">$2000</span>
                                                                </li>
                                                            </ul>
                                                            <a href="#"
                                                                class="btn position-relative over-hidden text-white theme-bg theme-border2 text-uppercase mt-20 pt-2 pb-2">View
                                                                Live</a>
                                                        </div>
                                                    </div><!-- /col -->
                                                </div><!-- /row -->
                                                <div class="pro-modal-footer mt-30 mb-45">
                                                    <div class="row align-items-center justify-content-md-between">
                                                        <div class="col-xl-7 col-lg-7  col-md-12 col-sm-12 col-12">
                                                            <div class="modal-tags d-sm-flex align-items-center pt-25">
                                                                <h6
                                                                    class="primary-font-family mb-0 pr-15 black-color f-700">
                                                                    Tags :</h6>
                                                                <ul class="tag-list">
                                                                    <li class="d-inline-block pr-10 f-700">
                                                                        <a class="secondary-color3 d-block"
                                                                            href="#">Web Design</a>
                                                                    </li>
                                                                    <li class="d-inline-block pr-10 f-700">
                                                                        <a class="secondary-color3 d-block"
                                                                            href="#">Social Media</a>
                                                                    </li>
                                                                    <li class="d-inline-block pr-10 f-700">
                                                                        <a class="secondary-color3 d-block"
                                                                            href="#">Product</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div><!-- /col -->
                                                        <div class="col-xl-5 col-lg-5  col-md-12 col-sm-10 col-12">
                                                            <div
                                                                class="pro-modal-social-link d-flex align-items-center justify-content-lg-end pt-25">
                                                                <h6
                                                                    class="primary-font-family pr-15 f-700 mb-0 black-color">
                                                                    Share :</h6>
                                                                <ul class="social-link text-md-right">
                                                                    <li class="d-inline-block">
                                                                        <a class="facebook-color text-center pl-15 d-inline-block transition-3"
                                                                            href="#"><i
                                                                                class="fab fa-facebook-f"></i></a>
                                                                    </li>
                                                                    <li class="d-inline-block">
                                                                        <a class="twitter-color text-center pl-15 d-inline-block transition-3"
                                                                            href="#"><i
                                                                                class="fab fa-twitter"></i></a>
                                                                    </li>
                                                                    <li class="d-inline-block">
                                                                        <a class="google-plus-color text-center pl-15 d-inline-block transition-3"
                                                                            href="#"><i
                                                                                class="fab fa-google-plus-g"></i></a>
                                                                    </li>
                                                                    <li class="d-inline-block">
                                                                        <a class="linkedin-color text-center pl-15 d-inline-block transition-3"
                                                                            href="#"><i
                                                                                class="fab fa-linkedin-in"></i></a>
                                                                    </li>
                                                                </ul><!-- social-link -->
                                                            </div>
                                                        </div><!-- /col -->
                                                    </div> <!-- .row -->
                                                </div>
                                            </div><!-- /modal-body -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal 6 end -->

                        </div><!-- /col -->

                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 grid-item dev ">
                            <div class="single-portfolio position-relative over-hidden mb-30">
                                <img class="w-100" src="images/home_1.PNG" alt="image">
                                <div class="port-content text-center position-absolute transition5 z-index11">
                                    <span class="theme-color d-inline-block" data-toggle="modal"
                                        data-target="#exampleModal-p9"><i class="far fa-external-link-alt"></i>
                                    </span>
                                </div><!-- /port-content -->
                                <div class="port-over-content position-absolute left-0 pl-40 pr-40 pb-30 pt-40 z-index11">
                                    <span class="text-white f-700 mb-2 d-block text-uppercase">Web Design</span>
                                    <h3 class="text-white">When the musics over turn off the light</h3>
                                </div>
                            </div><!-- /single-prot -->

                            <!-- Modal 6 start -->
                            <div class="modal fade" id="exampleModal-p9" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModal-p9" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="close-icon float-right pt-10 pr-10">
                                            <button type="button" class="close d-inline-block" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true"><i class="fa fa-times"></i></span>
                                            </button>
                                        </div>
                                        <div class="modal-content border-0">
                                            <div class="modal-body pl-50 pr-50 pt-10 pb-20">
                                                <div class="blog-modal-img">
                                                    <img class="w-100" src="images/portfolio/home8-portfolio-img9.jpg"
                                                        alt="blog post image 02">
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-7 col-lg-7  col-md-12 col-sm-12 col-12">
                                                        <div class="content-wrapper">
                                                            <h2 class="modal-title f-700">eThemeStudio Keyword Tool
                                                            </h2>
                                                            <p>
                                                                Duis aute irure dolor in reprehenderit in voluptate velit
                                                                esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum
                                                                dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                                                ad minim veniam, quis nostrud exercitation ullamco laboris
                                                                nisi ut aliquip ex ea commodo consequat. Excepteur sint
                                                                occaecat cupidatat non proident, sunt in culpa qui officia
                                                                deserunt mollit anim id est laborum.
                                                            </p>
                                                            <p>
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Dignissimos laudantium fuga molestiae, aut eius minus
                                                                reprehenderit.
                                                            </p>
                                                            <p class="mb-0">
                                                                Duis aute irure dolor in reprehenderit in voluptate velit
                                                                esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                                                                occaecat cupidatat non proident, sunt in culpa qui officia
                                                                deserunt mollit anim id est laborum.
                                                            </p>
                                                        </div>
                                                    </div><!-- /col -->
                                                    <div class="col-xl-5 col-lg-5  col-md-12 col-sm-12 col-12">
                                                        <div
                                                            class="meta-wrapper primary-bg mt-60 pt-40 pb-45 pr-20 pl-45 mt-40 mb-10">
                                                            <ul class="item-meta">
                                                                <li>
                                                                    Project Type : <span
                                                                        class="pl-2 black-color f-700">Graphic
                                                                        Design</span>
                                                                </li>
                                                                <li>
                                                                    Clien : <span
                                                                        class="pl-2 black-color f-700 f-poppins">Juwel
                                                                        Khan</span>
                                                                </li>
                                                                <li>
                                                                    Duration :<span class="pl-2 black-color f-700">2
                                                                        Weeks</span>
                                                                </li>
                                                                <li>
                                                                    Task : <span class="pl-2 black-color f-700">UI/UX,
                                                                        Frontend</span>
                                                                </li>
                                                                <li>
                                                                    Budget : <span
                                                                        class="pl-2 black-color f-700">$2000</span>
                                                                </li>
                                                            </ul>
                                                            <a href="#"
                                                                class="btn position-relative over-hidden text-white theme-bg theme-border2 text-uppercase mt-20 pt-2 pb-2">View
                                                                Live</a>
                                                        </div>
                                                    </div><!-- /col -->
                                                </div><!-- /row -->
                                                <div class="pro-modal-footer mt-30 mb-45">
                                                    <div class="row align-items-center justify-content-md-between">
                                                        <div class="col-xl-7 col-lg-7  col-md-12 col-sm-12 col-12">
                                                            <div class="modal-tags d-sm-flex align-items-center pt-25">
                                                                <h6
                                                                    class="primary-font-family mb-0 pr-15 black-color f-700">
                                                                    Tags :</h6>
                                                                <ul class="tag-list">
                                                                    <li class="d-inline-block pr-10 f-700">
                                                                        <a class="secondary-color3 d-block"
                                                                            href="#">Web Design</a>
                                                                    </li>
                                                                    <li class="d-inline-block pr-10 f-700">
                                                                        <a class="secondary-color3 d-block"
                                                                            href="#">Social Media</a>
                                                                    </li>
                                                                    <li class="d-inline-block pr-10 f-700">
                                                                        <a class="secondary-color3 d-block"
                                                                            href="#">Product</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div><!-- /col -->
                                                        <div class="col-xl-5 col-lg-5  col-md-12 col-sm-10 col-12">
                                                            <div
                                                                class="pro-modal-social-link d-flex align-items-center justify-content-lg-end pt-25">
                                                                <h6
                                                                    class="primary-font-family pr-15 f-700 mb-0 black-color">
                                                                    Share :</h6>
                                                                <ul class="social-link text-md-right">
                                                                    <li class="d-inline-block">
                                                                        <a class="facebook-color text-center pl-15 d-inline-block transition-3"
                                                                            href="#"><i
                                                                                class="fab fa-facebook-f"></i></a>
                                                                    </li>
                                                                    <li class="d-inline-block">
                                                                        <a class="twitter-color text-center pl-15 d-inline-block transition-3"
                                                                            href="#"><i
                                                                                class="fab fa-twitter"></i></a>
                                                                    </li>
                                                                    <li class="d-inline-block">
                                                                        <a class="google-plus-color text-center pl-15 d-inline-block transition-3"
                                                                            href="#"><i
                                                                                class="fab fa-google-plus-g"></i></a>
                                                                    </li>
                                                                    <li class="d-inline-block">
                                                                        <a class="linkedin-color text-center pl-15 d-inline-block transition-3"
                                                                            href="#"><i
                                                                                class="fab fa-linkedin-in"></i></a>
                                                                    </li>
                                                                </ul><!-- social-link -->
                                                            </div>
                                                        </div><!-- /col -->
                                                    </div> <!-- .row -->
                                                </div>
                                            </div><!-- /modal-body -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal 6 end -->

                        </div><!-- /col -->

                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 grid-item dev ">
                            <div class="single-portfolio position-relative over-hidden mb-30">
                                <img class="w-100" src="images/uiui.png" alt="image">
                                <div class="port-content text-center position-absolute transition5 z-index11">
                                    <span class="theme-color d-inline-block" data-toggle="modal"
                                        data-target="#exampleModal-p9"><i class="far fa-external-link-alt"></i>
                                    </span>
                                </div><!-- /port-content -->
                                <div class="port-over-content position-absolute left-0 pl-40 pr-40 pb-30 pt-40 z-index11">
                                    <span class="text-white f-700 mb-2 d-block text-uppercase">Web Design</span>
                                    <h3 class="text-white">When the musics over turn off the light</h3>
                                </div>
                            </div><!-- /single-prot -->

                            <!-- Modal 6 start -->
                            <div class="modal fade" id="exampleModal-p9" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModal-p9" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="close-icon float-right pt-10 pr-10">
                                            <button type="button" class="close d-inline-block" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true"><i class="fa fa-times"></i></span>
                                            </button>
                                        </div>
                                        <div class="modal-content border-0">
                                            <div class="modal-body pl-50 pr-50 pt-10 pb-20">
                                                <div class="blog-modal-img">
                                                    <img class="w-100" src="images/portfolio/home8-portfolio-img9.jpg"
                                                        alt="blog post image 02">
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-7 col-lg-7  col-md-12 col-sm-12 col-12">
                                                        <div class="content-wrapper">
                                                            <h2 class="modal-title f-700">eThemeStudio Keyword Tool
                                                            </h2>
                                                            <p>
                                                                Duis aute irure dolor in reprehenderit in voluptate velit
                                                                esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum
                                                                dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                                                ad minim veniam, quis nostrud exercitation ullamco laboris
                                                                nisi ut aliquip ex ea commodo consequat. Excepteur sint
                                                                occaecat cupidatat non proident, sunt in culpa qui officia
                                                                deserunt mollit anim id est laborum.
                                                            </p>
                                                            <p>
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Dignissimos laudantium fuga molestiae, aut eius minus
                                                                reprehenderit.
                                                            </p>
                                                            <p class="mb-0">
                                                                Duis aute irure dolor in reprehenderit in voluptate velit
                                                                esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                                                                occaecat cupidatat non proident, sunt in culpa qui officia
                                                                deserunt mollit anim id est laborum.
                                                            </p>
                                                        </div>
                                                    </div><!-- /col -->
                                                    <div class="col-xl-5 col-lg-5  col-md-12 col-sm-12 col-12">
                                                        <div
                                                            class="meta-wrapper primary-bg mt-60 pt-40 pb-45 pr-20 pl-45 mt-40 mb-10">
                                                            <ul class="item-meta">
                                                                <li>
                                                                    Project Type : <span
                                                                        class="pl-2 black-color f-700">Graphic
                                                                        Design</span>
                                                                </li>
                                                                <li>
                                                                    Clien : <span
                                                                        class="pl-2 black-color f-700 f-poppins">Juwel
                                                                        Khan</span>
                                                                </li>
                                                                <li>
                                                                    Duration :<span class="pl-2 black-color f-700">2
                                                                        Weeks</span>
                                                                </li>
                                                                <li>
                                                                    Task : <span class="pl-2 black-color f-700">UI/UX,
                                                                        Frontend</span>
                                                                </li>
                                                                <li>
                                                                    Budget : <span
                                                                        class="pl-2 black-color f-700">$2000</span>
                                                                </li>
                                                            </ul>
                                                            <a href="#"
                                                                class="btn position-relative over-hidden text-white theme-bg theme-border2 text-uppercase mt-20 pt-2 pb-2">View
                                                                Live</a>
                                                        </div>
                                                    </div><!-- /col -->
                                                </div><!-- /row -->
                                                <div class="pro-modal-footer mt-30 mb-45">
                                                    <div class="row align-items-center justify-content-md-between">
                                                        <div class="col-xl-7 col-lg-7  col-md-12 col-sm-12 col-12">
                                                            <div class="modal-tags d-sm-flex align-items-center pt-25">
                                                                <h6
                                                                    class="primary-font-family mb-0 pr-15 black-color f-700">
                                                                    Tags :</h6>
                                                                <ul class="tag-list">
                                                                    <li class="d-inline-block pr-10 f-700">
                                                                        <a class="secondary-color3 d-block"
                                                                            href="#">Web Design</a>
                                                                    </li>
                                                                    <li class="d-inline-block pr-10 f-700">
                                                                        <a class="secondary-color3 d-block"
                                                                            href="#">Social Media</a>
                                                                    </li>
                                                                    <li class="d-inline-block pr-10 f-700">
                                                                        <a class="secondary-color3 d-block"
                                                                            href="#">Product</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div><!-- /col -->
                                                        <div class="col-xl-5 col-lg-5  col-md-12 col-sm-10 col-12">
                                                            <div
                                                                class="pro-modal-social-link d-flex align-items-center justify-content-lg-end pt-25">
                                                                <h6
                                                                    class="primary-font-family pr-15 f-700 mb-0 black-color">
                                                                    Share :</h6>
                                                                <ul class="social-link text-md-right">
                                                                    <li class="d-inline-block">
                                                                        <a class="facebook-color text-center pl-15 d-inline-block transition-3"
                                                                            href="#"><i
                                                                                class="fab fa-facebook-f"></i></a>
                                                                    </li>
                                                                    <li class="d-inline-block">
                                                                        <a class="twitter-color text-center pl-15 d-inline-block transition-3"
                                                                            href="#"><i
                                                                                class="fab fa-twitter"></i></a>
                                                                    </li>
                                                                    <li class="d-inline-block">
                                                                        <a class="google-plus-color text-center pl-15 d-inline-block transition-3"
                                                                            href="#"><i
                                                                                class="fab fa-google-plus-g"></i></a>
                                                                    </li>
                                                                    <li class="d-inline-block">
                                                                        <a class="linkedin-color text-center pl-15 d-inline-block transition-3"
                                                                            href="#"><i
                                                                                class="fab fa-linkedin-in"></i></a>
                                                                    </li>
                                                                </ul><!-- social-link -->
                                                            </div>
                                                        </div><!-- /col -->
                                                    </div> <!-- .row -->
                                                </div>
                                            </div><!-- /modal-body -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal 6 end -->

                        </div><!-- /col -->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 grid-item dev ">
                            <div class="single-portfolio position-relative over-hidden mb-30">
                                <img class="w-100" src="images/movie.PNG" alt="image">
                                <div class="port-content text-center position-absolute transition5 z-index11">
                                    <span class="theme-color d-inline-block" data-toggle="modal"
                                        data-target="#exampleModal-p9"><i class="far fa-external-link-alt"></i>
                                    </span>
                                </div><!-- /port-content -->
                                <div class="port-over-content position-absolute left-0 pl-40 pr-40 pb-30 pt-40 z-index11">
                                    <span class="text-white f-700 mb-2 d-block text-uppercase">Web Design</span>
                                    <h3 class="text-white">When the musics over turn off the light</h3>
                                </div>
                            </div><!-- /single-prot -->

                            <!-- Modal 6 start -->
                            <div class="modal fade" id="exampleModal-p9" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModal-p9" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="close-icon float-right pt-10 pr-10">
                                            <button type="button" class="close d-inline-block" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true"><i class="fa fa-times"></i></span>
                                            </button>
                                        </div>
                                        <div class="modal-content border-0">
                                            <div class="modal-body pl-50 pr-50 pt-10 pb-20">
                                                <div class="blog-modal-img">
                                                    <img class="w-100" src="images/portfolio/home8-portfolio-img9.jpg"
                                                        alt="blog post image 02">
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-7 col-lg-7  col-md-12 col-sm-12 col-12">
                                                        <div class="content-wrapper">
                                                            <h2 class="modal-title f-700">eThemeStudio Keyword Tool
                                                            </h2>
                                                            <p>
                                                                Duis aute irure dolor in reprehenderit in voluptate velit
                                                                esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum
                                                                dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                                                ad minim veniam, quis nostrud exercitation ullamco laboris
                                                                nisi ut aliquip ex ea commodo consequat. Excepteur sint
                                                                occaecat cupidatat non proident, sunt in culpa qui officia
                                                                deserunt mollit anim id est laborum.
                                                            </p>
                                                            <p>
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Dignissimos laudantium fuga molestiae, aut eius minus
                                                                reprehenderit.
                                                            </p>
                                                            <p class="mb-0">
                                                                Duis aute irure dolor in reprehenderit in voluptate velit
                                                                esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                                                                occaecat cupidatat non proident, sunt in culpa qui officia
                                                                deserunt mollit anim id est laborum.
                                                            </p>
                                                        </div>
                                                    </div><!-- /col -->
                                                    <div class="col-xl-5 col-lg-5  col-md-12 col-sm-12 col-12">
                                                        <div
                                                            class="meta-wrapper primary-bg mt-60 pt-40 pb-45 pr-20 pl-45 mt-40 mb-10">
                                                            <ul class="item-meta">
                                                                <li>
                                                                    Project Type : <span
                                                                        class="pl-2 black-color f-700">Graphic
                                                                        Design</span>
                                                                </li>
                                                                <li>
                                                                    Clien : <span
                                                                        class="pl-2 black-color f-700 f-poppins">Juwel
                                                                        Khan</span>
                                                                </li>
                                                                <li>
                                                                    Duration :<span class="pl-2 black-color f-700">2
                                                                        Weeks</span>
                                                                </li>
                                                                <li>
                                                                    Task : <span class="pl-2 black-color f-700">UI/UX,
                                                                        Frontend</span>
                                                                </li>
                                                                <li>
                                                                    Budget : <span
                                                                        class="pl-2 black-color f-700">$2000</span>
                                                                </li>
                                                            </ul>
                                                            <a href="#"
                                                                class="btn position-relative over-hidden text-white theme-bg theme-border2 text-uppercase mt-20 pt-2 pb-2">View
                                                                Live</a>
                                                        </div>
                                                    </div><!-- /col -->
                                                </div><!-- /row -->
                                                <div class="pro-modal-footer mt-30 mb-45">
                                                    <div class="row align-items-center justify-content-md-between">
                                                        <div class="col-xl-7 col-lg-7  col-md-12 col-sm-12 col-12">
                                                            <div class="modal-tags d-sm-flex align-items-center pt-25">
                                                                <h6
                                                                    class="primary-font-family mb-0 pr-15 black-color f-700">
                                                                    Tags :</h6>
                                                                <ul class="tag-list">
                                                                    <li class="d-inline-block pr-10 f-700">
                                                                        <a class="secondary-color3 d-block"
                                                                            href="#">Web Design</a>
                                                                    </li>
                                                                    <li class="d-inline-block pr-10 f-700">
                                                                        <a class="secondary-color3 d-block"
                                                                            href="#">Social Media</a>
                                                                    </li>
                                                                    <li class="d-inline-block pr-10 f-700">
                                                                        <a class="secondary-color3 d-block"
                                                                            href="#">Product</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div><!-- /col -->
                                                        <div class="col-xl-5 col-lg-5  col-md-12 col-sm-10 col-12">
                                                            <div
                                                                class="pro-modal-social-link d-flex align-items-center justify-content-lg-end pt-25">
                                                                <h6
                                                                    class="primary-font-family pr-15 f-700 mb-0 black-color">
                                                                    Share :</h6>
                                                                <ul class="social-link text-md-right">
                                                                    <li class="d-inline-block">
                                                                        <a class="facebook-color text-center pl-15 d-inline-block transition-3"
                                                                            href="#"><i
                                                                                class="fab fa-facebook-f"></i></a>
                                                                    </li>
                                                                    <li class="d-inline-block">
                                                                        <a class="twitter-color text-center pl-15 d-inline-block transition-3"
                                                                            href="#"><i
                                                                                class="fab fa-twitter"></i></a>
                                                                    </li>
                                                                    <li class="d-inline-block">
                                                                        <a class="google-plus-color text-center pl-15 d-inline-block transition-3"
                                                                            href="#"><i
                                                                                class="fab fa-google-plus-g"></i></a>
                                                                    </li>
                                                                    <li class="d-inline-block">
                                                                        <a class="linkedin-color text-center pl-15 d-inline-block transition-3"
                                                                            href="#"><i
                                                                                class="fab fa-linkedin-in"></i></a>
                                                                    </li>
                                                                </ul><!-- social-link -->
                                                            </div>
                                                        </div><!-- /col -->
                                                    </div> <!-- .row -->
                                                </div>
                                            </div><!-- /modal-body -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal 6 end -->

                        </div><!-- /col -->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 grid-item dev ">
                            <div class="single-portfolio position-relative over-hidden mb-30">
                                <img class="w-100" src="images/haha.PNG" alt="image">
                                <div class="port-content text-center position-absolute transition5 z-index11">
                                    <span class="theme-color d-inline-block" data-toggle="modal"
                                        data-target="#exampleModal-p9"><i class="far fa-external-link-alt"></i>
                                    </span>
                                </div><!-- /port-content -->
                                <div class="port-over-content position-absolute left-0 pl-40 pr-40 pb-30 pt-40 z-index11">
                                    <span class="text-white f-700 mb-2 d-block text-uppercase">Web Design</span>
                                    <h3 class="text-white">When the musics over turn off the light</h3>
                                </div>
                            </div><!-- /single-prot -->

                            <!-- Modal 6 start -->
                            <div class="modal fade" id="exampleModal-p9" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModal-p9" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="close-icon float-right pt-10 pr-10">
                                            <button type="button" class="close d-inline-block" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true"><i class="fa fa-times"></i></span>
                                            </button>
                                        </div>
                                        <div class="modal-content border-0">
                                            <div class="modal-body pl-50 pr-50 pt-10 pb-20">
                                                <div class="blog-modal-img">
                                                    <img class="w-100" src="images/portfolio/home8-portfolio-img9.jpg"
                                                        alt="blog post image 02">
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-7 col-lg-7  col-md-12 col-sm-12 col-12">
                                                        <div class="content-wrapper">
                                                            <h2 class="modal-title f-700">eThemeStudio Keyword Tool
                                                            </h2>
                                                            <p>
                                                                Duis aute irure dolor in reprehenderit in voluptate velit
                                                                esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum
                                                                dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                                                ad minim veniam, quis nostrud exercitation ullamco laboris
                                                                nisi ut aliquip ex ea commodo consequat. Excepteur sint
                                                                occaecat cupidatat non proident, sunt in culpa qui officia
                                                                deserunt mollit anim id est laborum.
                                                            </p>
                                                            <p>
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Dignissimos laudantium fuga molestiae, aut eius minus
                                                                reprehenderit.
                                                            </p>
                                                            <p class="mb-0">
                                                                Duis aute irure dolor in reprehenderit in voluptate velit
                                                                esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                                                                occaecat cupidatat non proident, sunt in culpa qui officia
                                                                deserunt mollit anim id est laborum.
                                                            </p>
                                                        </div>
                                                    </div><!-- /col -->
                                                    <div class="col-xl-5 col-lg-5  col-md-12 col-sm-12 col-12">
                                                        <div
                                                            class="meta-wrapper primary-bg mt-60 pt-40 pb-45 pr-20 pl-45 mt-40 mb-10">
                                                            <ul class="item-meta">
                                                                <li>
                                                                    Project Type : <span
                                                                        class="pl-2 black-color f-700">Graphic
                                                                        Design</span>
                                                                </li>
                                                                <li>
                                                                    Clien : <span
                                                                        class="pl-2 black-color f-700 f-poppins">Juwel
                                                                        Khan</span>
                                                                </li>
                                                                <li>
                                                                    Duration :<span class="pl-2 black-color f-700">2
                                                                        Weeks</span>
                                                                </li>
                                                                <li>
                                                                    Task : <span class="pl-2 black-color f-700">UI/UX,
                                                                        Frontend</span>
                                                                </li>
                                                                <li>
                                                                    Budget : <span
                                                                        class="pl-2 black-color f-700">$2000</span>
                                                                </li>
                                                            </ul>
                                                            <a href="#"
                                                                class="btn position-relative over-hidden text-white theme-bg theme-border2 text-uppercase mt-20 pt-2 pb-2">View
                                                                Live</a>
                                                        </div>
                                                    </div><!-- /col -->
                                                </div><!-- /row -->
                                                <div class="pro-modal-footer mt-30 mb-45">
                                                    <div class="row align-items-center justify-content-md-between">
                                                        <div class="col-xl-7 col-lg-7  col-md-12 col-sm-12 col-12">
                                                            <div class="modal-tags d-sm-flex align-items-center pt-25">
                                                                <h6
                                                                    class="primary-font-family mb-0 pr-15 black-color f-700">
                                                                    Tags :</h6>
                                                                <ul class="tag-list">
                                                                    <li class="d-inline-block pr-10 f-700">
                                                                        <a class="secondary-color3 d-block"
                                                                            href="#">Web Design</a>
                                                                    </li>
                                                                    <li class="d-inline-block pr-10 f-700">
                                                                        <a class="secondary-color3 d-block"
                                                                            href="#">Social Media</a>
                                                                    </li>
                                                                    <li class="d-inline-block pr-10 f-700">
                                                                        <a class="secondary-color3 d-block"
                                                                            href="#">Product</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div><!-- /col -->
                                                        <div class="col-xl-5 col-lg-5  col-md-12 col-sm-10 col-12">
                                                            <div
                                                                class="pro-modal-social-link d-flex align-items-center justify-content-lg-end pt-25">
                                                                <h6
                                                                    class="primary-font-family pr-15 f-700 mb-0 black-color">
                                                                    Share :</h6>
                                                                <ul class="social-link text-md-right">
                                                                    <li class="d-inline-block">
                                                                        <a class="facebook-color text-center pl-15 d-inline-block transition-3"
                                                                            href="#"><i
                                                                                class="fab fa-facebook-f"></i></a>
                                                                    </li>
                                                                    <li class="d-inline-block">
                                                                        <a class="twitter-color text-center pl-15 d-inline-block transition-3"
                                                                            href="#"><i
                                                                                class="fab fa-twitter"></i></a>
                                                                    </li>
                                                                    <li class="d-inline-block">
                                                                        <a class="google-plus-color text-center pl-15 d-inline-block transition-3"
                                                                            href="#"><i
                                                                                class="fab fa-google-plus-g"></i></a>
                                                                    </li>
                                                                    <li class="d-inline-block">
                                                                        <a class="linkedin-color text-center pl-15 d-inline-block transition-3"
                                                                            href="#"><i
                                                                                class="fab fa-linkedin-in"></i></a>
                                                                    </li>
                                                                </ul><!-- social-link -->
                                                            </div>
                                                        </div><!-- /col -->
                                                    </div> <!-- .row -->
                                                </div>
                                            </div><!-- /modal-body -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal 6 end -->

                        </div><!-- /col -->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 grid-item dev ">
                            <div class="single-portfolio position-relative over-hidden mb-30">
                                <img class="w-100" src="images/codesync.PNG" alt="image">
                                <div class="port-content text-center position-absolute transition5 z-index11">
                                    <span class="theme-color d-inline-block" data-toggle="modal"
                                        data-target="#exampleModal-p9"><i class="far fa-external-link-alt"></i>
                                    </span>
                                </div><!-- /port-content -->
                                <div class="port-over-content position-absolute left-0 pl-40 pr-40 pb-30 pt-40 z-index11">
                                    <span class="text-white f-700 mb-2 d-block text-uppercase">Web Design</span>
                                    <h3 class="text-white">When the musics over turn off the light</h3>
                                </div>
                            </div><!-- /single-prot -->

                            <!-- Modal 6 start -->
                            <div class="modal fade" id="exampleModal-p9" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModal-p9" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="close-icon float-right pt-10 pr-10">
                                            <button type="button" class="close d-inline-block" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true"><i class="fa fa-times"></i></span>
                                            </button>
                                        </div>
                                        <div class="modal-content border-0">
                                            <div class="modal-body pl-50 pr-50 pt-10 pb-20">
                                                <div class="blog-modal-img">
                                                    <img class="w-100" src="images/portfolio/home8-portfolio-img9.jpg"
                                                        alt="blog post image 02">
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-7 col-lg-7  col-md-12 col-sm-12 col-12">
                                                        <div class="content-wrapper">
                                                            <h2 class="modal-title f-700">eThemeStudio Keyword Tool
                                                            </h2>
                                                            <p>
                                                                Duis aute irure dolor in reprehenderit in voluptate velit
                                                                esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum
                                                                dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                                                ad minim veniam, quis nostrud exercitation ullamco laboris
                                                                nisi ut aliquip ex ea commodo consequat. Excepteur sint
                                                                occaecat cupidatat non proident, sunt in culpa qui officia
                                                                deserunt mollit anim id est laborum.
                                                            </p>
                                                            <p>
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Dignissimos laudantium fuga molestiae, aut eius minus
                                                                reprehenderit.
                                                            </p>
                                                            <p class="mb-0">
                                                                Duis aute irure dolor in reprehenderit in voluptate velit
                                                                esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                                                                occaecat cupidatat non proident, sunt in culpa qui officia
                                                                deserunt mollit anim id est laborum.
                                                            </p>
                                                        </div>
                                                    </div><!-- /col -->
                                                    <div class="col-xl-5 col-lg-5  col-md-12 col-sm-12 col-12">
                                                        <div
                                                            class="meta-wrapper primary-bg mt-60 pt-40 pb-45 pr-20 pl-45 mt-40 mb-10">
                                                            <ul class="item-meta">
                                                                <li>
                                                                    Project Type : <span
                                                                        class="pl-2 black-color f-700">Graphic
                                                                        Design</span>
                                                                </li>
                                                                <li>
                                                                    Clien : <span
                                                                        class="pl-2 black-color f-700 f-poppins">Juwel
                                                                        Khan</span>
                                                                </li>
                                                                <li>
                                                                    Duration :<span class="pl-2 black-color f-700">2
                                                                        Weeks</span>
                                                                </li>
                                                                <li>
                                                                    Task : <span class="pl-2 black-color f-700">UI/UX,
                                                                        Frontend</span>
                                                                </li>
                                                                <li>
                                                                    Budget : <span
                                                                        class="pl-2 black-color f-700">$2000</span>
                                                                </li>
                                                            </ul>
                                                            <a href="#"
                                                                class="btn position-relative over-hidden text-white theme-bg theme-border2 text-uppercase mt-20 pt-2 pb-2">View
                                                                Live</a>
                                                        </div>
                                                    </div><!-- /col -->
                                                </div><!-- /row -->
                                                <div class="pro-modal-footer mt-30 mb-45">
                                                    <div class="row align-items-center justify-content-md-between">
                                                        <div class="col-xl-7 col-lg-7  col-md-12 col-sm-12 col-12">
                                                            <div class="modal-tags d-sm-flex align-items-center pt-25">
                                                                <h6
                                                                    class="primary-font-family mb-0 pr-15 black-color f-700">
                                                                    Tags :</h6>
                                                                <ul class="tag-list">
                                                                    <li class="d-inline-block pr-10 f-700">
                                                                        <a class="secondary-color3 d-block"
                                                                            href="#">Web Design</a>
                                                                    </li>
                                                                    <li class="d-inline-block pr-10 f-700">
                                                                        <a class="secondary-color3 d-block"
                                                                            href="#">Social Media</a>
                                                                    </li>
                                                                    <li class="d-inline-block pr-10 f-700">
                                                                        <a class="secondary-color3 d-block"
                                                                            href="#">Product</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div><!-- /col -->
                                                        <div class="col-xl-5 col-lg-5  col-md-12 col-sm-10 col-12">
                                                            <div
                                                                class="pro-modal-social-link d-flex align-items-center justify-content-lg-end pt-25">
                                                                <h6
                                                                    class="primary-font-family pr-15 f-700 mb-0 black-color">
                                                                    Share :</h6>
                                                                <ul class="social-link text-md-right">
                                                                    <li class="d-inline-block">
                                                                        <a class="facebook-color text-center pl-15 d-inline-block transition-3"
                                                                            href="#"><i
                                                                                class="fab fa-facebook-f"></i></a>
                                                                    </li>
                                                                    <li class="d-inline-block">
                                                                        <a class="twitter-color text-center pl-15 d-inline-block transition-3"
                                                                            href="#"><i
                                                                                class="fab fa-twitter"></i></a>
                                                                    </li>
                                                                    <li class="d-inline-block">
                                                                        <a class="google-plus-color text-center pl-15 d-inline-block transition-3"
                                                                            href="#"><i
                                                                                class="fab fa-google-plus-g"></i></a>
                                                                    </li>
                                                                    <li class="d-inline-block">
                                                                        <a class="linkedin-color text-center pl-15 d-inline-block transition-3"
                                                                            href="#"><i
                                                                                class="fab fa-linkedin-in"></i></a>
                                                                    </li>
                                                                </ul><!-- social-link -->
                                                            </div>
                                                        </div><!-- /col -->
                                                    </div> <!-- .row -->
                                                </div>
                                            </div><!-- /modal-body -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal 6 end -->

                        </div><!-- /col -->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 grid-item dev ">
                            <div class="single-portfolio position-relative over-hidden mb-30">
                                <img class="w-100" src="images/rtc.png" alt="image">
                                <div class="port-content text-center position-absolute transition5 z-index11">
                                    <span class="theme-color d-inline-block" data-toggle="modal"
                                        data-target="#exampleModal-p9"><i class="far fa-external-link-alt"></i>
                                    </span>
                                </div><!-- /port-content -->
                                <div class="port-over-content position-absolute left-0 pl-40 pr-40 pb-30 pt-40 z-index11">
                                    <span class="text-white f-700 mb-2 d-block text-uppercase">Web Design</span>
                                    <h3 class="text-white">When the musics over turn off the light</h3>
                                </div>
                            </div><!-- /single-prot -->

                            <!-- Modal 6 start -->
                            <div class="modal fade" id="exampleModal-p9" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModal-p9" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="close-icon float-right pt-10 pr-10">
                                            <button type="button" class="close d-inline-block" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true"><i class="fa fa-times"></i></span>
                                            </button>
                                        </div>
                                        <div class="modal-content border-0">
                                            <div class="modal-body pl-50 pr-50 pt-10 pb-20">
                                                <div class="blog-modal-img">
                                                    <img class="w-100" src="images/portfolio/home8-portfolio-img9.jpg"
                                                        alt="blog post image 02">
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-7 col-lg-7  col-md-12 col-sm-12 col-12">
                                                        <div class="content-wrapper">
                                                            <h2 class="modal-title f-700">eThemeStudio Keyword Tool
                                                            </h2>
                                                            <p>
                                                                Duis aute irure dolor in reprehenderit in voluptate velit
                                                                esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum
                                                                dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                                                ad minim veniam, quis nostrud exercitation ullamco laboris
                                                                nisi ut aliquip ex ea commodo consequat. Excepteur sint
                                                                occaecat cupidatat non proident, sunt in culpa qui officia
                                                                deserunt mollit anim id est laborum.
                                                            </p>
                                                            <p>
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Dignissimos laudantium fuga molestiae, aut eius minus
                                                                reprehenderit.
                                                            </p>
                                                            <p class="mb-0">
                                                                Duis aute irure dolor in reprehenderit in voluptate velit
                                                                esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                                                                occaecat cupidatat non proident, sunt in culpa qui officia
                                                                deserunt mollit anim id est laborum.
                                                            </p>
                                                        </div>
                                                    </div><!-- /col -->
                                                    <div class="col-xl-5 col-lg-5  col-md-12 col-sm-12 col-12">
                                                        <div
                                                            class="meta-wrapper primary-bg mt-60 pt-40 pb-45 pr-20 pl-45 mt-40 mb-10">
                                                            <ul class="item-meta">
                                                                <li>
                                                                    Project Type : <span
                                                                        class="pl-2 black-color f-700">Graphic
                                                                        Design</span>
                                                                </li>
                                                                <li>
                                                                    Clien : <span
                                                                        class="pl-2 black-color f-700 f-poppins">Juwel
                                                                        Khan</span>
                                                                </li>
                                                                <li>
                                                                    Duration :<span class="pl-2 black-color f-700">2
                                                                        Weeks</span>
                                                                </li>
                                                                <li>
                                                                    Task : <span class="pl-2 black-color f-700">UI/UX,
                                                                        Frontend</span>
                                                                </li>
                                                                <li>
                                                                    Budget : <span
                                                                        class="pl-2 black-color f-700">$2000</span>
                                                                </li>
                                                            </ul>
                                                            <a href="#"
                                                                class="btn position-relative over-hidden text-white theme-bg theme-border2 text-uppercase mt-20 pt-2 pb-2">View
                                                                Live</a>
                                                        </div>
                                                    </div><!-- /col -->
                                                </div><!-- /row -->
                                                <div class="pro-modal-footer mt-30 mb-45">
                                                    <div class="row align-items-center justify-content-md-between">
                                                        <div class="col-xl-7 col-lg-7  col-md-12 col-sm-12 col-12">
                                                            <div class="modal-tags d-sm-flex align-items-center pt-25">
                                                                <h6
                                                                    class="primary-font-family mb-0 pr-15 black-color f-700">
                                                                    Tags :</h6>
                                                                <ul class="tag-list">
                                                                    <li class="d-inline-block pr-10 f-700">
                                                                        <a class="secondary-color3 d-block"
                                                                            href="#">Web Design</a>
                                                                    </li>
                                                                    <li class="d-inline-block pr-10 f-700">
                                                                        <a class="secondary-color3 d-block"
                                                                            href="#">Social Media</a>
                                                                    </li>
                                                                    <li class="d-inline-block pr-10 f-700">
                                                                        <a class="secondary-color3 d-block"
                                                                            href="#">Product</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div><!-- /col -->
                                                        <div class="col-xl-5 col-lg-5  col-md-12 col-sm-10 col-12">
                                                            <div
                                                                class="pro-modal-social-link d-flex align-items-center justify-content-lg-end pt-25">
                                                                <h6
                                                                    class="primary-font-family pr-15 f-700 mb-0 black-color">
                                                                    Share :</h6>
                                                                <ul class="social-link text-md-right">
                                                                    <li class="d-inline-block">
                                                                        <a class="facebook-color text-center pl-15 d-inline-block transition-3"
                                                                            href="#"><i
                                                                                class="fab fa-facebook-f"></i></a>
                                                                    </li>
                                                                    <li class="d-inline-block">
                                                                        <a class="twitter-color text-center pl-15 d-inline-block transition-3"
                                                                            href="#"><i
                                                                                class="fab fa-twitter"></i></a>
                                                                    </li>
                                                                    <li class="d-inline-block">
                                                                        <a class="google-plus-color text-center pl-15 d-inline-block transition-3"
                                                                            href="#"><i
                                                                                class="fab fa-google-plus-g"></i></a>
                                                                    </li>
                                                                    <li class="d-inline-block">
                                                                        <a class="linkedin-color text-center pl-15 d-inline-block transition-3"
                                                                            href="#"><i
                                                                                class="fab fa-linkedin-in"></i></a>
                                                                    </li>
                                                                </ul><!-- social-link -->
                                                            </div>
                                                        </div><!-- /col -->
                                                    </div> <!-- .row -->
                                                </div>
                                            </div><!-- /modal-body -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal 6 end -->

                        </div><!-- /col -->

                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 grid-item dev ">
                            <div class="single-portfolio position-relative over-hidden mb-30">
                                <img class="w-100" src="images/contact.png" alt="image">
                                <div class="port-content text-center position-absolute transition5 z-index11">
                                    <span class="theme-color d-inline-block" data-toggle="modal"
                                        data-target="#exampleModal-p9"><i class="far fa-external-link-alt"></i>
                                    </span>
                                </div><!-- /port-content -->
                                <div class="port-over-content position-absolute left-0 pl-40 pr-40 pb-30 pt-40 z-index11">
                                    <span class="text-white f-700 mb-2 d-block text-uppercase">Web Design</span>
                                    <h3 class="text-white">When the musics over turn off the light</h3>
                                </div>
                            </div><!-- /single-prot -->

                            <!-- Modal 6 start -->
                            <div class="modal fade" id="exampleModal-p9" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModal-p9" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="close-icon float-right pt-10 pr-10">
                                            <button type="button" class="close d-inline-block" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true"><i class="fa fa-times"></i></span>
                                            </button>
                                        </div>
                                        <div class="modal-content border-0">
                                            <div class="modal-body pl-50 pr-50 pt-10 pb-20">
                                                <div class="blog-modal-img">
                                                    <img class="w-100" src="images/portfolio/home8-portfolio-img9.jpg"
                                                        alt="blog post image 02">
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-7 col-lg-7  col-md-12 col-sm-12 col-12">
                                                        <div class="content-wrapper">
                                                            <h2 class="modal-title f-700">eThemeStudio Keyword Tool
                                                            </h2>
                                                            <p>
                                                                Duis aute irure dolor in reprehenderit in voluptate velit
                                                                esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum
                                                                dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                                                ad minim veniam, quis nostrud exercitation ullamco laboris
                                                                nisi ut aliquip ex ea commodo consequat. Excepteur sint
                                                                occaecat cupidatat non proident, sunt in culpa qui officia
                                                                deserunt mollit anim id est laborum.
                                                            </p>
                                                            <p>
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Dignissimos laudantium fuga molestiae, aut eius minus
                                                                reprehenderit.
                                                            </p>
                                                            <p class="mb-0">
                                                                Duis aute irure dolor in reprehenderit in voluptate velit
                                                                esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                                                                occaecat cupidatat non proident, sunt in culpa qui officia
                                                                deserunt mollit anim id est laborum.
                                                            </p>
                                                        </div>
                                                    </div><!-- /col -->
                                                    <div class="col-xl-5 col-lg-5  col-md-12 col-sm-12 col-12">
                                                        <div
                                                            class="meta-wrapper primary-bg mt-60 pt-40 pb-45 pr-20 pl-45 mt-40 mb-10">
                                                            <ul class="item-meta">
                                                                <li>
                                                                    Project Type : <span
                                                                        class="pl-2 black-color f-700">Graphic
                                                                        Design</span>
                                                                </li>
                                                                <li>
                                                                    Clien : <span
                                                                        class="pl-2 black-color f-700 f-poppins">Juwel
                                                                        Khan</span>
                                                                </li>
                                                                <li>
                                                                    Duration :<span class="pl-2 black-color f-700">2
                                                                        Weeks</span>
                                                                </li>
                                                                <li>
                                                                    Task : <span class="pl-2 black-color f-700">UI/UX,
                                                                        Frontend</span>
                                                                </li>
                                                                <li>
                                                                    Budget : <span
                                                                        class="pl-2 black-color f-700">$2000</span>
                                                                </li>
                                                            </ul>
                                                            <a href="#"
                                                                class="btn position-relative over-hidden text-white theme-bg theme-border2 text-uppercase mt-20 pt-2 pb-2">View
                                                                Live</a>
                                                        </div>
                                                    </div><!-- /col -->
                                                </div><!-- /row -->
                                                <div class="pro-modal-footer mt-30 mb-45">
                                                    <div class="row align-items-center justify-content-md-between">
                                                        <div class="col-xl-7 col-lg-7  col-md-12 col-sm-12 col-12">
                                                            <div class="modal-tags d-sm-flex align-items-center pt-25">
                                                                <h6
                                                                    class="primary-font-family mb-0 pr-15 black-color f-700">
                                                                    Tags :</h6>
                                                                <ul class="tag-list">
                                                                    <li class="d-inline-block pr-10 f-700">
                                                                        <a class="secondary-color3 d-block"
                                                                            href="#">Web Design</a>
                                                                    </li>
                                                                    <li class="d-inline-block pr-10 f-700">
                                                                        <a class="secondary-color3 d-block"
                                                                            href="#">Social Media</a>
                                                                    </li>
                                                                    <li class="d-inline-block pr-10 f-700">
                                                                        <a class="secondary-color3 d-block"
                                                                            href="#">Product</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div><!-- /col -->
                                                        <div class="col-xl-5 col-lg-5  col-md-12 col-sm-10 col-12">
                                                            <div
                                                                class="pro-modal-social-link d-flex align-items-center justify-content-lg-end pt-25">
                                                                <h6
                                                                    class="primary-font-family pr-15 f-700 mb-0 black-color">
                                                                    Share :</h6>
                                                                <ul class="social-link text-md-right">
                                                                    <li class="d-inline-block">
                                                                        <a class="facebook-color text-center pl-15 d-inline-block transition-3"
                                                                            href="#"><i
                                                                                class="fab fa-facebook-f"></i></a>
                                                                    </li>
                                                                    <li class="d-inline-block">
                                                                        <a class="twitter-color text-center pl-15 d-inline-block transition-3"
                                                                            href="#"><i
                                                                                class="fab fa-twitter"></i></a>
                                                                    </li>
                                                                    <li class="d-inline-block">
                                                                        <a class="google-plus-color text-center pl-15 d-inline-block transition-3"
                                                                            href="#"><i
                                                                                class="fab fa-google-plus-g"></i></a>
                                                                    </li>
                                                                    <li class="d-inline-block">
                                                                        <a class="linkedin-color text-center pl-15 d-inline-block transition-3"
                                                                            href="#"><i
                                                                                class="fab fa-linkedin-in"></i></a>
                                                                    </li>
                                                                </ul><!-- social-link -->
                                                            </div>
                                                        </div><!-- /col -->
                                                    </div> <!-- .row -->
                                                </div>
                                            </div><!-- /modal-body -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal 6 end -->

                        </div><!-- /col -->

                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 grid-item dev ">
                            <div class="single-portfolio position-relative over-hidden mb-30">
                                <img class="w-100" src="images/chat.png" alt="image">
                                <div class="port-content text-center position-absolute transition5 z-index11">
                                    <span class="theme-color d-inline-block" data-toggle="modal"
                                        data-target="#exampleModal-p9"><i class="far fa-external-link-alt"></i>
                                    </span>
                                </div><!-- /port-content -->
                                <div class="port-over-content position-absolute left-0 pl-40 pr-40 pb-30 pt-40 z-index11">
                                    <span class="text-white f-700 mb-2 d-block text-uppercase">Web Design</span>
                                    <h3 class="text-white">When the musics over turn off the light</h3>
                                </div>
                            </div><!-- /single-prot -->

                            <!-- Modal 6 start -->
                            <div class="modal fade" id="exampleModal-p9" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModal-p9" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="close-icon float-right pt-10 pr-10">
                                            <button type="button" class="close d-inline-block" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true"><i class="fa fa-times"></i></span>
                                            </button>
                                        </div>
                                        <div class="modal-content border-0">
                                            <div class="modal-body pl-50 pr-50 pt-10 pb-20">
                                                <div class="blog-modal-img">
                                                    <img class="w-100" src="images/portfolio/home8-portfolio-img9.jpg"
                                                        alt="blog post image 02">
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-7 col-lg-7  col-md-12 col-sm-12 col-12">
                                                        <div class="content-wrapper">
                                                            <h2 class="modal-title f-700">eThemeStudio Keyword Tool
                                                            </h2>
                                                            <p>
                                                                Duis aute irure dolor in reprehenderit in voluptate velit
                                                                esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum
                                                                dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                                                ad minim veniam, quis nostrud exercitation ullamco laboris
                                                                nisi ut aliquip ex ea commodo consequat. Excepteur sint
                                                                occaecat cupidatat non proident, sunt in culpa qui officia
                                                                deserunt mollit anim id est laborum.
                                                            </p>
                                                            <p>
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Dignissimos laudantium fuga molestiae, aut eius minus
                                                                reprehenderit.
                                                            </p>
                                                            <p class="mb-0">
                                                                Duis aute irure dolor in reprehenderit in voluptate velit
                                                                esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                                                                occaecat cupidatat non proident, sunt in culpa qui officia
                                                                deserunt mollit anim id est laborum.
                                                            </p>
                                                        </div>
                                                    </div><!-- /col -->
                                                    <div class="col-xl-5 col-lg-5  col-md-12 col-sm-12 col-12">
                                                        <div
                                                            class="meta-wrapper primary-bg mt-60 pt-40 pb-45 pr-20 pl-45 mt-40 mb-10">
                                                            <ul class="item-meta">
                                                                <li>
                                                                    Project Type : <span
                                                                        class="pl-2 black-color f-700">Graphic
                                                                        Design</span>
                                                                </li>
                                                                <li>
                                                                    Clien : <span
                                                                        class="pl-2 black-color f-700 f-poppins">Juwel
                                                                        Khan</span>
                                                                </li>
                                                                <li>
                                                                    Duration :<span class="pl-2 black-color f-700">2
                                                                        Weeks</span>
                                                                </li>
                                                                <li>
                                                                    Task : <span class="pl-2 black-color f-700">UI/UX,
                                                                        Frontend</span>
                                                                </li>
                                                                <li>
                                                                    Budget : <span
                                                                        class="pl-2 black-color f-700">$2000</span>
                                                                </li>
                                                            </ul>
                                                            <a href="#"
                                                                class="btn position-relative over-hidden text-white theme-bg theme-border2 text-uppercase mt-20 pt-2 pb-2">View
                                                                Live</a>
                                                        </div>
                                                    </div><!-- /col -->
                                                </div><!-- /row -->
                                                <div class="pro-modal-footer mt-30 mb-45">
                                                    <div class="row align-items-center justify-content-md-between">
                                                        <div class="col-xl-7 col-lg-7  col-md-12 col-sm-12 col-12">
                                                            <div class="modal-tags d-sm-flex align-items-center pt-25">
                                                                <h6
                                                                    class="primary-font-family mb-0 pr-15 black-color f-700">
                                                                    Tags :</h6>
                                                                <ul class="tag-list">
                                                                    <li class="d-inline-block pr-10 f-700">
                                                                        <a class="secondary-color3 d-block"
                                                                            href="#">Web Design</a>
                                                                    </li>
                                                                    <li class="d-inline-block pr-10 f-700">
                                                                        <a class="secondary-color3 d-block"
                                                                            href="#">Social Media</a>
                                                                    </li>
                                                                    <li class="d-inline-block pr-10 f-700">
                                                                        <a class="secondary-color3 d-block"
                                                                            href="#">Product</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div><!-- /col -->
                                                        <div class="col-xl-5 col-lg-5  col-md-12 col-sm-10 col-12">
                                                            <div
                                                                class="pro-modal-social-link d-flex align-items-center justify-content-lg-end pt-25">
                                                                <h6
                                                                    class="primary-font-family pr-15 f-700 mb-0 black-color">
                                                                    Share :</h6>
                                                                <ul class="social-link text-md-right">
                                                                    <li class="d-inline-block">
                                                                        <a class="facebook-color text-center pl-15 d-inline-block transition-3"
                                                                            href="#"><i
                                                                                class="fab fa-facebook-f"></i></a>
                                                                    </li>
                                                                    <li class="d-inline-block">
                                                                        <a class="twitter-color text-center pl-15 d-inline-block transition-3"
                                                                            href="#"><i
                                                                                class="fab fa-twitter"></i></a>
                                                                    </li>
                                                                    <li class="d-inline-block">
                                                                        <a class="google-plus-color text-center pl-15 d-inline-block transition-3"
                                                                            href="#"><i
                                                                                class="fab fa-google-plus-g"></i></a>
                                                                    </li>
                                                                    <li class="d-inline-block">
                                                                        <a class="linkedin-color text-center pl-15 d-inline-block transition-3"
                                                                            href="#"><i
                                                                                class="fab fa-linkedin-in"></i></a>
                                                                    </li>
                                                                </ul><!-- social-link -->
                                                            </div>
                                                        </div><!-- /col -->
                                                    </div> <!-- .row -->
                                                </div>
                                            </div><!-- /modal-body -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal 6 end -->

                        </div><!-- /col -->




                    </div><!-- /row -->

                    <div class="row ">
                        <div class="col-12 d-flex justify-content-center">
                            <div class="my-btn mt-30">
                                <a href="service.html"
                                    class="btn transparent-bg primary-border text-capitalize f-18 f-700">view more</a>
                            </div>
                        </div><!-- /col -->
                    </div><!-- /row -->
                </div><!-- /container -->
            </div><!-- /home6-portfolio-wrapper -->
        </div>
        <!-- portfolio-area-end -->


        <!-- ====== service-area-start ==================================== -->
        <div class="home3-service-area home3 home6 position-relative primary-bg pt-155 pb-90">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6  col-lg-7  col-md-10  col-sm-10 col-12">
                        <div class="title text-center">
                            <span class="theme-color f-700">Service</span>
                            <h4 class="f-700">What We Do</h4>
                        </div><!-- /title -->
                    </div><!-- /col -->
                </div><!-- /row -->
                <div class="home3-service-wrapper pt-70">
                    <div class="row">
                        <div class="col-xl-6  col-lg-6  col-md-6  col-sm-12 col-12">
                            <div class="home3-single-service-content white-bg  home3-single-service-border transition5 position-relative pt-60 pb-35 pl-45 pr-45 mb-80"
                                data-aos="fade-up" data-aos-duration="2000" data-aos-delay="10">
                                <div class="single-service d-lg-flex mb-20">
                                    <div class="ser-icon d-inline-block text-center mr-30 mt-1 z-index1">
                                        <span class="primary-bg text-white d-block">
                                            <img src="images/icon/user1.png" alt="image">
                                        </span>
                                    </div><!-- /ser-icon -->
                                    <div class="service-text z-index1">
                                        <h5 class="f-700 pb-15">Creative Design</h5>
                                        <p class="mb-35">Ovitae purus sodaDuis eu eros auctor augue ultricies bibend um.
                                            Phasellus semattis tomader majhe kikeu</p>
                                        <a href="service.html"
                                            class="black-color d-inline-block theme-hover position-relative f-700 text-capitalize">view
                                            service
                                            <span class="pl-2"><i class="fal fa-long-arrow-right"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div><!-- /single-home3-service-content -->
                        </div><!-- /col -->
                        <div class="col-xl-6  col-lg-6  col-md-6  col-sm-12 col-12">
                            <div class="home3-single-service-content white-bg home3-single-service-border transition5 position-relative pt-60 pb-35 pl-45 pr-45 mb-80"
                                data-aos="fade-up" data-aos-duration="2000" data-aos-delay="50">
                                <div class="single-service d-lg-flex mb-20">
                                    <div class="ser-icon d-inline-block text-center mr-30 mt-1 z-index1">
                                        <span class="primary-bg text-white d-block">
                                            <img src="images/icon/code.png" alt="icon">
                                        </span>
                                    </div><!-- /ser-icon -->
                                    <div class="service-text z-index1">
                                        <h5 class="f-700 pb-15">Web Development</h5>
                                        <p class="mb-35">Ovitae purus sodaDuis eu eros auctor augue ultricies bibend um.
                                            Phasellus semattis tomader majhe kikeu</p>
                                        <a href="service.html"
                                            class="black-color d-inline-block theme-hover position-relative f-700 text-capitalize">view
                                            service
                                            <span class="pl-2"><i class="fal fa-long-arrow-right"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div><!-- /single-home3-service-content -->
                        </div><!-- /col -->
                        <div class="col-xl-6  col-lg-6  col-md-6  col-sm-12 col-12">
                            <div class="home3-single-service-content white-bg  home3-single-service-border transition5 position-relative pt-60 pb-35 pl-45 pr-45 mb-80"
                                data-aos="fade-up" data-aos-duration="2000" data-aos-delay="10">
                                <div class="single-service d-lg-flex mb-20">
                                    <div class="ser-icon d-inline-block text-center mr-30 mt-1 z-index1">
                                        <span class="primary-bg text-white d-block">
                                            <img src="images/icon/code.png" alt="icon">
                                        </span>
                                    </div><!-- /ser-icon -->
                                    <div class="service-text z-index1">
                                        <h5 class="f-700 pb-15">Cyber Consultancy</h5>
                                        <p class="mb-35">Ovitae purus sodaDuis eu eros auctor augue ultricies bibend um.
                                            Phasellus semattis tomader majhe kikeu</p>
                                        <a href="service.html"
                                            class="black-color d-inline-block theme-hover position-relative f-700 text-capitalize">view
                                            service
                                            <span class="pl-2"><i class="fal fa-long-arrow-right"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div><!-- /single-home3-service-content -->
                        </div><!-- /col -->
                        <div class="col-xl-6  col-lg-6  col-md-6  col-sm-12 col-12">
                            <div class="home3-single-service-content white-bg position-relative home3-single-service-border transition5 pt-60 pb-35 pl-45 pr-45 mb-80"
                                data-aos="fade-up" data-aos-duration="2000" data-aos-delay="50">
                                <div class="single-service d-lg-flex mb-20">
                                    <div class="ser-icon d-inline-block text-center mr-30 mt-1 z-index1">
                                        <span class="primary-bg text-white d-block">
                                            <img src="images/icon/bar2.png" alt="icon">
                                        </span>
                                    </div><!-- /ser-icon -->
                                    <div class="service-text z-index1">
                                        <h5 class="f-700 pb-15">Search Engine Optimization</h5>
                                        <p class="mb-35">Ovitae purus sodaDuis eu eros auctor augue ultricies bibend um.
                                            Phasellus semattis tomader majhe kikeu</p>
                                        <a href="service.html"
                                            class="black-color d-inline-block theme-hover position-relative f-700 text-capitalize">view
                                            service
                                            <span class="pl-2"><i class="fal fa-long-arrow-right"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div><!-- /single-home3-service-content -->
                        </div><!-- /col -->
                    </div><!-- /row -->
                </div><!-- /home3-service-wrapper -->
            </div><!-- /container -->
        </div>
        <!-- home3-service-area-end  -->


        <!-- ====== testimonial-area-start ==================================== -->
        <div class="testimonial-area home4 home8 pt-150 pb-145 over-hidden">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6  col-lg-7  col-md-10  col-sm-12 col-12">
                        <div class="title text-center">
                            <span class="theme-color f-700">Tesitmonial</span>
                            <h4 class="f-700">Check out what people say about our products</h4>
                        </div><!-- /title -->
                    </div><!-- /col -->
                </div><!-- /row -->
                <div class="testimonial-wrapper4  pt-30 ">
                    <div class="row testimonial-active4 pb-80">
                        <div class="col-xl-4 col-lg-7 col-md-12  col-sm-12 col-12">
                            <div
                                class="testimonial-text4 position-relative bg-white pt-50 pb-45 pl-45 pr-45 mb-40 mt-40 transition5">
                                <img class="mb-25" src="images/testimonial/home4-testi-logo1.png" alt="image">
                                <p class="font-italic secondary-color3 mb-0">Eolore magna aliqu Lor em ipsum dolor sit
                                    amet, consecte tur adipisicing elit, sed do eius mod tempor incididunt</p>
                            </div><!-- /testimonial-text -->
                            <div class="testi-info d-flex align-items-center justify-content-between mb-20 pl-40 pr-40">
                                <div class="avatar-info">
                                    <h6 class="f-700 mb-1">Nayna Eva</h6>
                                    <p class="mb-0">Journalist</p>
                                </div>
                                <div class="quit d-inline-block">
                                    <span class="theme-color d-inline-block"><i class="fas fa-quote-right"></i></span>
                                </div>
                            </div><!-- /testi-info -->
                        </div><!-- /col -->
                        <div class="col-xl-4 col-lg-7 col-md-12  col-sm-12 col-12">
                            <div
                                class="testimonial-text4 position-relative bg-white pt-50 pb-45 pl-45 pr-45 mb-40 mt-40 transition5">
                                <img class="mb-25" src="images/testimonial/home4-testi-logo2.png" alt="image">
                                <p class="font-italic secondary-color3 mb-0">Eolore magna aliqu Lor em ipsum dolor sit
                                    amet, consecte tur adipisicing elit, sed do eius mod tempor incididunt</p>
                            </div><!-- /testimonial-text -->
                            <div class="testi-info d-flex align-items-center justify-content-between mb-20 pl-40 pr-40">
                                <div class="avatar-info">
                                    <h6 class="f-700 mb-1">Adam Smith</h6>
                                    <p class="mb-0">Journalist</p>
                                </div>
                                <div class="quit d-inline-block">
                                    <span class="theme-color d-inline-block"><i class="fas fa-quote-right"></i></span>
                                </div>
                            </div><!-- /testi-info -->
                        </div><!-- /col -->
                        <div class="col-xl-4 col-lg-7 col-md-12  col-sm-12 col-12">
                            <div
                                class="testimonial-text4 position-relative bg-white pt-50 pb-45 pl-45 pr-45 mb-40 mt-40 transition5">
                                <img class="mb-25" src="images/testimonial/home4-testi-logo3.png" alt="image">
                                <p class="font-italic secondary-color3 mb-0">Eolore magna aliqu Lor em ipsum dolor sit
                                    amet, consecte tur adipisicing elit, sed do eius mod tempor incididunt</p>
                            </div><!-- /testimonial-text -->
                            <div class="testi-info d-flex align-items-center justify-content-between mb-20 pl-40 pr-40">
                                <div class="avatar-info">
                                    <h6 class="f-700 mb-1">Juwel Khan</h6>
                                    <p class="mb-0">Journalist</p>
                                </div>
                                <div class="quit d-inline-block">
                                    <span class="theme-color d-inline-block"><i class="fas fa-quote-right"></i></span>
                                </div>
                            </div><!-- /testi-info -->
                        </div><!-- /col -->
                        <div class="col-xl-4 col-lg-7 col-md-12  col-sm-12 col-12">
                            <div
                                class="testimonial-text4 position-relative bg-white pt-50 pb-45 pl-45 pr-45 mb-40 mt-40 transition5">
                                <img class="mb-25" src="images/testimonial/home4-testi-logo1.png" alt="image">
                                <p class="font-italic secondary-color3 mb-0">Eolore magna aliqu Lor em ipsum dolor sit
                                    amet, consecte tur adipisicing elit, sed do eius mod tempor incididunt</p>
                            </div><!-- /testimonial-text -->
                            <div class="testi-info d-flex align-items-center justify-content-between mb-20 pl-40 pr-40">
                                <div class="avatar-info">
                                    <h6 class="f-700 mb-1">Nayna Eva</h6>
                                    <p class="mb-0">Journalist</p>
                                </div>
                                <div class="quit d-inline-block">
                                    <span class="theme-color d-inline-block"><i class="fas fa-quote-right"></i></span>
                                </div>
                            </div><!-- /testi-info -->
                        </div><!-- /col -->
                        <div class="col-xl-4 col-lg-7 col-md-12  col-sm-12 col-12">
                            <div
                                class="testimonial-text4 position-relative bg-white pt-50 pb-45 pl-45 pr-45 mb-40 mt-40 transition5">
                                <img class="mb-25" src="images/testimonial/home4-testi-logo2.png" alt="image">
                                <p class="font-italic secondary-color3 mb-0">Eolore magna aliqu Lor em ipsum dolor sit
                                    amet, consecte tur adipisicing elit, sed do eius mod tempor incididunt</p>
                            </div><!-- /testimonial-text -->
                            <div class="testi-info d-flex align-items-center justify-content-between mb-20 pl-40 pr-40">
                                <div class="avatar-info">
                                    <h6 class="f-700 mb-1">Juwel Khan</h6>
                                    <p class="mb-0">Journalist</p>
                                </div>
                                <div class="quit d-inline-block">
                                    <span class="theme-color d-inline-block"><i class="fas fa-quote-right"></i></span>
                                </div>
                            </div><!-- /testi-info -->
                        </div><!-- /col -->
                    </div><!-- /row -->
                </div><!-- /testimonial-wrapper -->
            </div><!-- /container -->
        </div>
        <!-- testimonial-area-end  -->


        <!-- ====== home5-cta-banner-area-start ========================================= -->
        <div class="home7-cta-banner-area primary-bg home7 pt-160 pb-160">
            <div class="container">
                <div class="cta-banner-wrapper">
                    <div class="row justify-content-center">
                        <div class="col-xl-8  col-lg-  col-md-  col-sm- col-">
                            <div class="title text-center">
                                <h3 class="f-700 mb-0">Want to work with us?</h3>
                                <h3 class="f-700 mb-0">Email us on
                                    <a href="#" class="theme-color d-block">hexaforgetechnologies@gmail.com</a>
                                </h3>
                            </div><!-- /title -->
                        </div><!-- /col -->
                    </div><!-- /row -->
                </div><!-- /home5-cta-banner-wrapper -->
            </div><!-- /container -->
        </div>
        <!-- home5-cta-banner-area-end  -->

    </main>
@endsection
