<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description"
        content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Educa</title>
    <link rel="apple-touch-icon" href="/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="/app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/themes/addition.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="/app-assets/css/core/menu/menu-types/vertical-menu.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
    <!-- END: Custom CSS-->

    <style>
        :root{
            --lightPurple: #ddd;
            --lightBlue:#dddd;
            --middleBlue:#dddd;
            --darkBlue:#dddd;
        }

        .header-logo {
            height: 235px;
        }

        .header-navbar {
            position: fixed;
            width: 100%;
            height: 111px;
            background-repeat: round;
            background:#BA509D;
            /* background-image: url('/educa/header-background-1.png'); */
            z-index: 9999 !important;
            line-height: 1;
            min-height: auto;
            min-height: auto;
            min-height: auto;
            min-height: auto;
            min-height: auto;
        }
        .navbar-container{
            background-image: linear-gradient(to right,#BA509D , #2F449B);
        }
        .header-navbar .navbar-container ul.navbar-nav li>a.nav-link {
            color: #ffffff;
        }

        .main-menu-content {
            /* padding-top: 100px */
        }

        #main-menu-navigation,
        .sidebar-background {
            background-color: #BA509D !important;
        }

        .main-menu.menu-light .navigation .navigation-header span {
            /* color: #1D877C !important; */
            color: #ffffff !important;
            font-weight: bolder !important;
            font-size: 20px !important;
        }
        .main-menu.menu-light .navigation li a{
            color: #f1f1f1;
        }
        .main-menu .main-menu-content {
            height: calc(100%) !important;
            position: relative;
        }
        .ps .ps__rail-x.ps--clicking,
        .ps .ps__rail-x:focus,
        .ps .ps__rail-x:hover,
        .ps .ps__rail-y.ps--clicking,
        .ps .ps__rail-y:focus,
        .ps .ps__rail-y:hover {
            background-color: #91C9C1 !important;
        }

        .main-menu.menu-light .navigation>li.active>a {
            background: linear-gradient(118deg, #1D877C, #75b9b0);
            box-shadow: 0 0 10px 1px #75b9b0;
            color: #fff;
            font-weight: 400;
            border-radius: 4 px;
        }

        .main-menu.menu-light .navigation li a {}

        html .content.app-content {
            background-color: #ffffff;
        }

        html .content {
            min-height: calc(100%);
        }

        .card,
        .card-header,
        .card-body {
            background-color: #aabec5;
            border-radius:12px;
        }

        .card .card-header .card-title {
            color: #1D877C;
            /* color: #000; */
        }
        thead{
            color:#9b359b7d;
            font-size:25px;
        }
        /* th {
            background-color:#9D1C63!important;
            font-color:white;
            color:white!important;
        } */
        th{
            text-align:center;
        }
        html .content .content-wrapper .content-header-title {
            color: #eb16db;
        }
        table.table{
            font-size:12px;
            border-radius:5px;
        }

        .btn-purple {
            border-color: #9D1C63 !important;
            background-color: #9D1C63 !important;
            color: #fff !important;
            border-radius: 5px;
        }
        /* .txt-primary{
            background-color:#1D877C;
        } */
        .btn-main {
            border-color: none;
            background-color: #161676ba !important;
            color: #fff !important;
            border-radius: 5px;
            margin-left:20px;
            height:40px;
        }
        
         .form-control{
            background-color: #A9B3DF!important;
            height:35px;
            color:#000;
            border-radius:9px;
         }

         label{
             color:#BA509D!important;
         }
         .scrip-span{
             color:#eb16db!important;
             font-size:15px;
         }
         
    </style>

        @yield('additional_css')

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern navbar-floating footer-static" data-open="click"
    data-menu="vertical-menu-modern" data-col="">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-lg navbar navbar-fixed align-items-center navbar-brand-center"
        data-nav="brand-center">
        <div class="navbar-header d-xl-block d-none">
            <ul class="nav navbar-nav">
                <img class="header-logo" src="/assets/images/new_logo/EDUCA_logo-12.png">
            </ul>
        </div>
        <div class="navbar-container d-flex content pt-0">
            <ul class="nav navbar-nav align-items-center ms-auto pt-0">
                <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link"
                        id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <div class="user-nav d-sm-flex d-none">
                            <span class="user-name fw-bolder">John Doe</span>
                            <span class="user-status">Admin</span>
                        </div>
                        <span class="avatar">
                            <img class="round" src="/app-assets/images/portrait/small/avatar-s-11.jpg"
                                alt="avatar" height="40" width="40">
                            <span class="avatar-status-online"></span>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user">
                        <a class="dropdown-item" href="#"><i class="me-50" data-feather="user"></i>
                            Profile</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"><i class="me-50" data-feather="power"></i>
                            Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow sidebar-background"
        data-scroll-to-active="true">
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <!-- Classes Section -->
                <li class=" navigation-header ">
                    <span class="class" data-i18n="Classes">Dashboard</span>
                </li>
                <li class=" navigation-header ">
                    <span class="class" data-i18n="Classes">Classes</span>
                </li>
                <li class="active nav-item"><a class="d-flex align-items-center" href="{{route('classes.overview')}}">
                        <i data-feather="layout"></i><span class="menu-title text-truncate dash-span"
                            data-i18n="Overview">Overview</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="{{route('classes.manage')}}">
                        <i data-feather="edit"></i><span class="menu-title text-truncate dash-span"
                            data-i18n="Manage">Manage</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="{{route('classes.students')}}">
                        <i data-feather="users"></i><span class="menu-title text-truncate dash-span"
                            data-i18n="Students">Students</span></a>
                </li>

                <!-- Assessments -->
                <li class=" navigation-header">
                    <span class="class" data-i18n="Assessments">Assessments</span>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="{{route('assessments.tests')}}">
                        <i data-feather="thumbs-up"></i><span class="menu-title text-truncate dash-span"
                            data-i18n="Feedback">Test</span></a>
                </li>
                
                <li class=" nav-item"><a class="d-flex align-items-center" href="{{route('assessments.feedback')}}">
                        <i data-feather="thumbs-up"></i><span class="menu-title text-truncate dash-span"
                            data-i18n="Feedback">Feedback</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="{{route('assessments.exercises')}}">
                        <i data-feather="thumbs-up"></i><span class="menu-title text-truncate dash-span"
                            data-i18n="Feedback">Exercises</span></a>
                </li>

                <!-- Support section -->
                <li class=" navigation-header">
                    <span class="class" data-i18n="Support">Support</span>
                </li>
                <li class=" nav-item">
                    <a class="d-flex align-items-center" href="{{route('support.email')}}">
                        <i data-feather="mail"></i>
                        <span class="menu-title text-truncate dash-span" data-i18n="Email">Email</span>
                    </a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="{{route('support.history')}}">
                        <i data-feather="clock"></i><span class="menu-title text-truncate dash-span"
                            data-i18n="Email History">Email History</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="{{route('support.contact')}}">
                        <i data-feather="droplet"></i><span class="menu-title text-truncate dash-span"
                            data-i18n="Contact">Contact</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="{{route('support.notification')}}">
                        <i data-feather="bell"></i><span class="menu-title text-truncate"
                            data-i18n="Push Notification">Push Notification</span></a>
                </li>

            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->
    @yield('contents')
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Vendor JS-->
    <script src="/app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="/app-assets/js/core/app-menu.js"></script>
    <script src="/app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
        @yield('additional_js')
    <!-- END: Page JS-->

    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>
</body>
<!-- END: Body-->

</html>
