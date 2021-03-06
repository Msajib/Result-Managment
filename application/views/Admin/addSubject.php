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
                            echo $this->session->userdata('fullName');
                            ?>
                        </h4>
                        <a href="<?php echo base_url() ?>Welcome/index" style="color: red;">Sign out</a>
                    </div>
                    <nav class="navbar-sidebar2">
                        <ul class="list-unstyled navbar__list">
                            <li class="active has-sub">
                                <a class="js-arrow" href="<?php echo base_url()?>adminController/index">
                                    <i class="fas fa-tachometer-alt"></i>Dashboard
                                    <span class="arrow">
                                        <i class="fas fa-angle-down"></i>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-chart-bar"></i>Teacher</a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-shopping-basket"></i>Student</a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-shopping-basket"></i>Permession</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url() ?>adminController/subject">
                                    <i class="fas fa-shopping-basket"></i>Subject</a>
                            </li>
                            <li class="has-sub">
                                <a class="js-arrow" href="#">
                                    <i class="fas fa-desktop"></i>UI Elements
                                    <span class="arrow">
                                        <i class="fas fa-angle-down"></i>
                                    </span>
                                </a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li>
                                        <a href="button.html">
                                            <i class="fab fa-flickr"></i>Button</a>
                                    </li>
                                    <li>
                                        <a href="badge.html">
                                            <i class="fas fa-comment-alt"></i>Badges</a>
                                    </li>
                                    <li>
                                        <a href="tab.html">
                                            <i class="far fa-window-maximize"></i>Tabs</a>
                                    </li>

                                </ul>
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
                            <a href="<?php echo base_url() ?>Welcome/index">Sign out</a>
                        </div>
                        <nav class="navbar-sidebar2">
                            <ul class="list-unstyled navbar__list">
                                <li class="active has-sub">
                                    <a class="js-arrow" href="#">
                                        <i class="fas fa-tachometer-alt"></i>Dashboard
                                        <span class="arrow">
                                            <i class="fas fa-angle-down"></i>
                                        </span>
                                    </a>
                                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                                        <li>
                                            <a href="index.html">
                                                <i class="fas fa-tachometer-alt"></i>Dashboard 1</a>
                                        </li>

                                    </ul>
                                </li>
                                <li>
                                    <a href="inbox.html">
                                        <i class="fas fa-chart-bar"></i>Inbox</a>
                                    <span class="inbox-num">3</span>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fas fa-shopping-basket"></i>eCommerce</a>
                                </li>
                                <li class="has-sub">
                                    <a class="js-arrow" href="#">
                                        <i class="fas fa-trophy"></i>Features
                                        <span class="arrow">
                                            <i class="fas fa-angle-down"></i>
                                        </span>
                                    </a>
                                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                                        <li>
                                            <a href="table.html">
                                                <i class="fas fa-table"></i>Tables</a>
                                        </li>
                                        <li>
                                            <a href="form.html">
                                                <i class="far fa-check-square"></i>Forms</a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                                        </li>
                                        <li>
                                            <a href="map.html">
                                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-sub">
                                    <a class="js-arrow" href="#">
                                        <i class="fas fa-copy"></i>Pages
                                        <span class="arrow">
                                            <i class="fas fa-angle-down"></i>
                                        </span>
                                    </a>
                                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                                        <li>
                                            <a href="login.html">
                                                <i class="fas fa-sign-in-alt"></i>Login</a>
                                        </li>
                                        <li>
                                            <a href="register.html">
                                                <i class="fas fa-user"></i>Register</a>
                                        </li>
                                        <li>
                                            <a href="forget-pass.html">
                                                <i class="fas fa-unlock-alt"></i>Forget Password</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-sub">
                                    <a class="js-arrow" href="#">
                                        <i class="fas fa-desktop"></i>UI Elements
                                        <span class="arrow">
                                            <i class="fas fa-angle-down"></i>
                                        </span>
                                    </a>
                                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                                        <li>
                                            <a href="button.html">
                                                <i class="fab fa-flickr"></i>Button</a>
                                        </li>
                                        <li>
                                            <a href="badge.html">
                                                <i class="fas fa-comment-alt"></i>Badges</a>
                                        </li>
                                        <li>
                                            <a href="tab.html">
                                                <i class="far fa-window-maximize"></i>Tabs</a>
                                        </li>
                                        <li>
                                            <a href="card.html">
                                                <i class="far fa-id-card"></i>Cards</a>
                                        </li>
                                        <li>
                                            <a href="alert.html">
                                                <i class="far fa-bell"></i>Alerts</a>
                                        </li>
                                        <li>
                                            <a href="progress-bar.html">
                                                <i class="fas fa-tasks"></i>Progress Bars</a>
                                        </li>
                                        <li>
                                            <a href="modal.html">
                                                <i class="far fa-window-restore"></i>Modals</a>
                                        </li>
                                        <li>
                                            <a href="switch.html">
                                                <i class="fas fa-toggle-on"></i>Switchs</a>
                                        </li>
                                        <li>
                                            <a href="grid.html">
                                                <i class="fas fa-th-large"></i>Grids</a>
                                        </li>
                                        <li>
                                            <a href="fontawesome.html">
                                                <i class="fab fa-font-awesome"></i>FontAwesome</a>
                                        </li>
                                        <li>
                                            <a href="typo.html">
                                                <i class="fas fa-font"></i>Typography</a>
                                        </li>
                                    </ul>
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

                <section>
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- USER DATA-->
                            <div class="user-data m-b-30">
                                <h3 class="title-3 m-b-30">
                                    <i class="zmdi zmdi-account-calendar"></i>Subject List</h3>
                                <div class="table-responsive table-data">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <td>ID</td>
                                                <td> Subject Name</td>
                                                <td>Subject Code</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $i = 0;
                                        foreach ($subject as $subject) {
                                            ?>
                                                    <tr>
                                                        <td>
                                            <?php
                                            echo ++$i;
                                            ?>  
                                                        </td>
                                                        <td>
                                                            <font size="3"><?php echo $subject->subName ?></font>
                                                        </td>
                                                        <td>
                                            <?php echo $subject->subCode ?> 
                                                        </td>
                                                    </tr>
                                        <?php } ?>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                            <!-- END USER DATA-->
                        </div>
                        <div class="col-lg-6">
                            <!-- TOP CAMPAIGN-->
                            <div class="card">
                                <div class="card-header"></div>
                                <div class="card-body">
                                    <div class="card-title">
                                        <h3 class="text-center title-2">Add Subject</h3>
                                    </div>
                                    <hr>
                                    <form action="<?php base_url() ?>addSubject" method="post">
                                        <div class="form-group">
                                            <label for="cc-payment" class="control-label mb-1">Subject Name</label>
                                            <input name="subName" type="text" class="form-control" placeholder="Enter Subject Name..">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Subject Code</label>
                                            <input type="text" class="form-control" name="subCode" placeholder="Enter Subject Code Here..">

                                        </div>
                                        <div>
                                            <button id="payment-button" class="btn btn-lg btn-info btn-block">Add Subject</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!--  END TOP CAMPAIGN-->
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