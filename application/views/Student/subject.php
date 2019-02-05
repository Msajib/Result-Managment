<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Required meta tags-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="au theme template">
        <meta name="author" content="Hau Nguyen">
        <meta name="keywords" content="au theme template">

        <!-- Title Page-->
        <title>BAUET</title>

        <!-- Fontfaces CSS-->
        <link href="<?php echo base_url(); ?>MainSite/css/font-face.css" rel="stylesheet" media="all">
        <link href="<?php echo base_url(); ?>MainSite/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
        <link href="<?php echo base_url(); ?>MainSite/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
        <link href="<?php echo base_url(); ?>MainSite/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

        <!-- Bootstrap CSS-->
        <link href="<?php echo base_url(); ?>MainSite/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

        <!-- Vendor CSS-->
        <link href="<?php echo base_url(); ?>MainSite/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
        <link href="<?php echo base_url(); ?>MainSite/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
        <link href="<?php echo base_url(); ?>MainSite/vendor/wow/animate.css" rel="stylesheet" media="all">
        <link href="<?php echo base_url(); ?>MainSite/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
        <link href="<?php echo base_url(); ?>MainSite/vendor/slick/slick.css" rel="stylesheet" media="all">
        <link href="<?php echo base_url(); ?>MainSite/vendor/select2/select2.min.css" rel="stylesheet" media="all">
        <link href="<?php echo base_url(); ?>MainSite/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
        <link href="<?php echo base_url(); ?>MainSite/vendor/vector-map/jqvmap.min.css" rel="stylesheet" media="all">

        <!-- Main CSS-->
        <link href="<?php echo base_url(); ?>MainSite/css/theme.css" rel="stylesheet" media="all">

    </head>

    <body class="animsition">
        <div class="page-wrapper">
            <!-- MENU SIDEBAR-->
            <aside class="menu-sidebar2">
                <div class="logo">
                    <a href="#">
                        <img src="<?php echo base_url(); ?>MainSite/images/icon/img_21.jpg" alt="BAUET" />
                    </a>
                </div>
                <div class="menu-sidebar2__content js-scrollbar1">
                    <div class="account2">
                        <div class="image img-cir img-120">
                            <img src="<?php echo $this->session->userdata('picture') ?>">
                        </div>
                        <h4 class="name">
                            <?php
                            echo $this->session->userdata('firstName') .' '. $this->session->userdata('lastName')
                            ?>
                        </h4>
                        <a href="<?php echo base_url() ?>Welcome/index" style="color: red;">Sign out</a>
                    </div>
                    <nav class="navbar-sidebar2">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="<?php echo base_url()?>studentController/index">
                                <i class="fas fa-tachometer-alt"></i>Dashboard
                                
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>studentController/result">
                                <i class="fas fa-chart-bar"></i>Result</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url()?>studentController/studentProfile">
                                <i class="fas fa-shopping-basket"></i>Profile</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>studentController/selectSubject">
                                <i class="fas fa-shopping-basket"></i>Subject</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url()?>studentController/updateProfile">
                                <i class="fas fa-shopping-basket"></i>Update Profile</a>
                        </li>
                        
                    </ul>
                </nav>
                </div>
            </aside>
            <!-- END MENU SIDEBAR-->

            <!-- PAGE CONTAINER-->
            <div class="page-container2">
                <!-- HEADER DESKTOP-->
                <header class="header-desktop2">
                    <div class="section__content section__content--p30">
                        <div class="container-fluid">
                            <div class="header-wrap2">
                                <div class="logo d-block d-lg-none">
                                    <a href="#">
                                        <img src="<?php echo base_url(); ?>MainSite/images/icon/logo-white.png" alt="CoolAdmin" />
                                    </a>
                                </div>
                                <div class="header-button2">
                                    <div class="header-button-item js-item-menu">
                                        <i class="zmdi zmdi-search"></i>
                                        <div class="search-dropdown js-dropdown">
                                            <form action="">
                                                <input class="au-input au-input--full au-input--h65" type="text" placeholder="Search for datas &amp; reports..." />
                                                <span class="search-dropdown__icon">
                                                    <i class="zmdi zmdi-search"></i>
                                                </span>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="header-button-item has-noti js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>You have 3 Notifications</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a email notification</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-account-box"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Your account has been blocked</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a new file</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__footer">
                                                <a href="#">All notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="header-button-item mr-0 js-sidebar-btn">
                                        <i class="zmdi zmdi-menu"></i>
                                    </div>
                                    <div class="setting-menu js-right-sidebar d-none d-lg-block">
                                        <div class="account-dropdown__body">
                                            <div class="account-dropdown__item">
                                                <a href="#">
                                                    <i class="zmdi zmdi-account"></i>Account</a>
                                            </div>
                                            <div class="account-dropdown__item">
                                                <a href="#">
                                                    <i class="zmdi zmdi-settings"></i>Setting</a>
                                            </div>
                                            <div class="account-dropdown__item">
                                                <a href="#">
                                                    <i class="zmdi zmdi-money-box"></i>Billing</a>
                                            </div>
                                        </div>
                                        <div class="account-dropdown__body">
                                            <div class="account-dropdown__item">
                                                <a href="#">
                                                    <i class="zmdi zmdi-globe"></i>Language</a>
                                            </div>
                                            <div class="account-dropdown__item">
                                                <a href="#">
                                                    <i class="zmdi zmdi-pin"></i>Location</a>
                                            </div>
                                            <div class="account-dropdown__item">
                                                <a href="#">
                                                    <i class="zmdi zmdi-email"></i>Email</a>
                                            </div>
                                            <div class="account-dropdown__item">
                                                <a href="#">
                                                    <i class="zmdi zmdi-notifications"></i>Notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <aside class="menu-sidebar2 js-right-sidebar d-block d-lg-none">
                    <div class="logo">
                        <a href="#">
                            <img src="<?php echo base_url(); ?>MainSite/images/icon/logo-white.png" alt="Cool Admin" />
                        </a>
                    </div>
                    <div class="menu-sidebar2__content js-scrollbar2">
                        <div class="account2">
                            <div class="image img-cir img-120">
                                <img src="<?php echo $this->session->userdata('picture') ?>">
                            </div>
                            <h4 class="name">
                                <?php
                                echo $this->session->userdata('fullName');
                                ?>
                            </h4>
                            <a href="<?php echo base_url() ?>Welcome/index" style="color: red;">Sign out</a>
                        </div>
                        <nav class="navbar-sidebar2">
                            <ul class="list-unstyled navbar__list">
                                <li class="active has-sub">
                                    <a class="js-arrow" href="<?php echo base_url() ?>studentController/index">
                                        <i class="fas fa-tachometer-alt"></i>Dashboard

                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>studentController/result">
                                        <i class="fas fa-chart-bar"></i>Result</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url() ?>studentController/studentProfile">
                                        <i class="fas fa-shopping-basket"></i>Profile</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>studentController/selectSubject">
                                        <i class="fas fa-shopping-basket"></i>Subject</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url() ?>studentController/updateProfile">
                                        <i class="fas fa-shopping-basket"></i>Update Profile</a>
                                </li>

                            </ul>
                        </nav>
                    </div>
                </aside>
                <!-- END HEADER DESKTOP-->

                <!-- BREADCRUMB-->
                <section class="au-breadcrumb m-t-75">
                    <div class="section__content section__content--p30">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="au-breadcrumb-content">
                                        <div class="au-breadcrumb-left">
                                            <span class="au-breadcrumb-span">You are here:</span>
                                            <ul class="list-unstyled list-inline au-breadcrumb__list">
                                                <li class="list-inline-item active">
                                                    <a href="#">Home</a>
                                                </li>
                                                <li class="list-inline-item seprate">
                                                    <span>/</span>
                                                </li>
                                                <li class="list-inline-item">Subject</li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- END BREADCRUMB-->

                
                <!-- END BREADCRUMB-->

                <section>
                    <div class="section__content section__content--p30">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xl-8">
                                    <!-- RECENT REPORT 2-->

                                    <!-- END RECENT REPORT 2             -->
                                </div>
                                <div class="col-xl-4">
                                    <!-- TASK PROGRESS-->
                                    <div class="table-responsive table-data">

                                        <form action="<?php echo base_url()?>studentController/assignSubStudent" method="post">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <td>
                                                            Selector
                                                        </td>
                                                        <td>Subject Name</td>

                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <?php foreach ($subject as $sub) { ?>
                                                        <tr>
                                                            <td>
                                                                <label class="au-checkbox">
                                                                    <input type="checkbox" name="subCode[]" value="<?php echo $sub->subCode; ?>">
                                                                    <span class="au-checkmark"></span>
                                                                </label>
                                                            </td>
                                                            <td>
                                                                <span class="role member"><?php echo $sub->subName; ?></span>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <select class="form-control form-control-line" name="semCode">
                                                        <option>Select Semister</option>
                                                <?php foreach ($semister as $sem) {?>
                                                        <option value="<?php echo $sem->semCode?>"><?php echo $sem->semName?></option>
                                                <?php }?>
                                                    </select>
                                                </div>
                                            </div>
                                            <input type="hidden" name="memberID" value="<?php echo $this->session->userdata('memberID'); ?>">

                                            <div class="container-login100-form-btn text-center">
                                                <button class="btn-primary btn-lg" data-toggle="modal">
                                                    Submit
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- END TASK PROGRESS-->
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2019 BAUET. All rights reserved..</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- END PAGE CONTAINER-->
            </div>

        </div>

        <!-- Jquery JS-->
        <script src="<?php echo base_url(); ?>MainSite/vendor/jquery-3.2.1.min.js"></script>
        <!-- Bootstrap JS-->
        <script src="<?php echo base_url(); ?>MainSite/vendor/bootstrap-4.1/popper.min.js"></script>
        <script src="<?php echo base_url(); ?>MainSite/vendor/bootstrap-4.1/bootstrap.min.js"></script>
        <!-- Vendor JS       -->
        <script src="<?php echo base_url(); ?>MainSite/vendor/slick/slick.min.js">
        </script>
        <script src="<?php echo base_url(); ?>MainSite/vendor/wow/wow.min.js"></script>
        <script src="<?php echo base_url(); ?>MainSite/vendor/animsition/animsition.min.js"></script>
        <script src="<?php echo base_url(); ?>MainSite/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
        </script>
        <script src="<?php echo base_url(); ?>MainSite/vendor/counter-up/jquery.waypoints.min.js"></script>
        <script src="<?php echo base_url(); ?>MainSite/vendor/counter-up/jquery.counterup.min.js">
        </script>
        <script src="<?php echo base_url(); ?>MainSite/vendor/circle-progress/circle-progress.min.js"></script>
        <script src="<?php echo base_url(); ?>MainSite/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
        <script src="<?php echo base_url(); ?>MainSite/vendor/chartjs/Chart.bundle.min.js"></script>
        <script src="<?php echo base_url(); ?>MainSite/vendor/select2/select2.min.js">
        </script>
        <script src="<?php echo base_url(); ?>MainSite/vendor/vector-map/jquery.vmap.js"></script>
        <script src="<?php echo base_url(); ?>MainSite/vendor/vector-map/jquery.vmap.min.js"></script>
        <script src="<?php echo base_url(); ?>MainSite/vendor/vector-map/jquery.vmap.sampledata.js"></script>
        <script src="<?php echo base_url(); ?>MainSite/vendor/vector-map/jquery.vmap.world.js"></script>

        <!-- Main JS-->
        <script src="<?php echo base_url(); ?>MainSite/js/main.js"></script>

    </body>

</html>
<!-- end document-->