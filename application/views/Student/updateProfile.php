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
                            <?php echo $this->session->userdata('firstName'); ?> <?php echo $this->session->userdata('lastName'); ?>
                        </h4>
                        <a href="<?php echo base_url() ?>Welcome/index">Sign out</a>
                    </div>
                    <nav class="navbar-sidebar2">
                        <ul class="list-unstyled navbar__list">
                            <li>
                                <a class="js-arrow" href="<?php echo base_url() ?>studentController/index">
                                    <i class="fas fa-tachometer-alt"></i>Dashboard

                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>studentController/studentResult">
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
                            <li class="active has-sub">
                                <a href="<?php echo base_url() ?>studentController/updateProfile">
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
                                <?php echo $this->session->userdata('firstName'); ?> <?php echo $this->session->userdata('lastName'); ?>
                            </h4>
                            <a href="<?php echo base_url() ?>Welcome/index">Sign out</a>
                        </div>
                        <nav class="navbar-sidebar2">
                            <ul class="list-unstyled navbar__list">
                                <li>
                                    <a class="js-arrow" href="<?php echo base_url() ?>studentController/index">
                                        <i class="fas fa-tachometer-alt"></i>Dashboard

                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>studentController/studentResult">
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
                                <li  class="active has-sub">
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
                                                <li class="list-inline-item">Update Profile</li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- END BREADCRUMB-->

                <!-- BREADCRUMB-->
                <section class="statistic">
                    <div class="section__content section__content--p30">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="au-breadcrumb-content">
                                        <div class="" style="padding-bottom: 30px;">
                                            <h2 style="color: green;">Welcome To Bangladesh Army University of Engineering & Technology</h2>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- END BREADCRUMB-->

                <section>
                    <div class="section__content section__content--p30">
                        <div class="container-fluid">
                            <div class="row">
                                <!-- Column -->
                                <div class="col-lg-4 col-xlg-3 col-md-5">
                                    <div class="card">
                                        <div class="card-body">
                                            <center class="m-t-30"> <img src="<?php echo $this->session->userdata('picture') ?>" class="img-circle" width="150" />
                                                <h4 class="card-title m-t-10">
                                                    <?php echo $this->session->userdata('firstName'); ?> <?php echo $this->session->userdata('lastName'); ?>
                                                </h4>
                                            </center>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                                <!-- Column -->
                                <div class="col-lg-8 col-xlg-9 col-md-7">
                                    <div class="card">
                                        <!-- Tab panes -->
                                        <div class="card-body">
                                            <form action="<?php echo base_url(); ?>studentController/updateProfileInfo" method="post">
                                                <div class="form-group">
                                                    <label class="col-md-12">First Name</label>
                                                    <div class="col-md-12">
                                                        <input type="text" name="firstName" readonly class="form-control form-control-line" value="<?php echo $this->session->userdata('firstName'); ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-12">Last Name</label>
                                                    <div class="col-md-12">
                                                        <input type="text"  readonly class="form-control form-control-line" name="lastName" value="<?php echo $this->session->userdata('lastName'); ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-12">Nick Name</label>
                                                    <div class="col-md-12">
                                                        <input type="text" name="nickName" class="form-control form-control-line" value="<?php echo $this->session->userdata('nickName'); ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-12">Date of Birth</label>
                                                    <div class="col-md-12">
                                                        <input type="date" class="form-control form-control-line" name="dateOfBirth" value="<?php echo $this->session->userdata('dateOfBirth'); ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-12">Place of Birth</label>
                                                    <div class="col-md-12">
                                                        <input type="text" name="placeOfBirth" class="form-control form-control-line" value="<?php echo $this->session->userdata('placeOfBirth'); ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-12">Gender</label>
                                                    <div class="col-md-12">
                                                        <select class="form-control form-control-line" name="gender">
                                                            <option>Gender</option>
                                                            <option value="Male">Male</option>
                                                            <option value="Female">Female</option>
                                                            <option value="Other">Other</option>
                                                        </select>

                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-12">Marital Status</label>
                                                    <div class="col-md-12">
                                                        <select class="form-control form-control-line" name="maritalStatus">
                                                            <option>Marital Status</option>
                                                            <option value="Married">Married</option>
                                                            <option value="Single">Single</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-12">Blood Group</label>
                                                    <div class="col-md-12">
                                                        <input type="text" class="form-control form-control-line" name="bloodGroup" value="<?php echo $this->session->userdata('bloodGroup'); ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-12">Religion</label>
                                                    <div class="col-md-12">
                                                        <input type="text"   class="form-control form-control-line" name="religion" value="<?php echo $this->session->userdata('religion'); ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-12">Nationality</label>
                                                    <div class="col-md-12">
                                                        <input type="text"  class="form-control form-control-line" name="nationality" value="<?php echo $this->session->userdata('nationality'); ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-12">National ID</label>
                                                    <div class="col-md-12">
                                                        <input type="text"   class="form-control form-control-line" name="nationalID" value="<?php echo $this->session->userdata('nationalID'); ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-12">Passport</label>
                                                    <div class="col-md-12">
                                                        <input type="text"   class="form-control form-control-line" name="passport" value="<?php echo $this->session->userdata('passport'); ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-12">IM</label>
                                                    <div class="col-md-12">
                                                        <input type="text"   class="form-control form-control-line" name="IM" value="<?php echo $this->session->userdata('IM'); ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-12">Social Network ID</label>
                                                    <div class="col-md-12">
                                                        <input type="text" class="form-control form-control-line" name="socialNetwork" value="<?php echo $this->session->userdata('socialNetwork'); ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-12">About You</label>
                                                    <div class="col-md-12">
                                                        <textarea rows="2"  class="form-control form-control-line" name="aboutYou"><?php echo $this->session->userdata('aboutYou'); ?></textarea>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <button class="btn btn-success">Update Profile</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
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