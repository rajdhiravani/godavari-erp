<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Godavari Biorefineries Ltd.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-signin-client_id" content="900345493753-jr73cojlecmqna2amfle5ujahga8g7j5.apps.googleusercontent.com">
    <link rel="stylesheet" href="<?php echo URL; ?>font/iconsmind/style.css" />
    <link rel="stylesheet" href="<?php echo URL; ?>font/simple-line-icons/css/simple-line-icons.css" />
    <link rel="stylesheet" href="<?php echo URL; ?>css/vendor/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo URL; ?>css/vendor/fullcalendar.min.css" />
    <link rel="stylesheet" href="<?php echo URL; ?>css/vendor/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" href="<?php echo URL; ?>css/vendor/datatables.responsive.bootstrap4.min.css" />
    <link rel="stylesheet" href="<?php echo URL; ?>css/vendor/select2.min.css" />
    <link rel="stylesheet" href="<?php echo URL; ?>css/vendor/perfect-scrollbar.css" />
    <link rel="stylesheet" href="<?php echo URL; ?>css/vendor/owl.carousel.min.css" />
    <link rel="stylesheet" href="<?php echo URL; ?>css/vendor/bootstrap-stars.css" />
    <link rel="stylesheet" href="<?php echo URL; ?>css/vendor/nouislider.min.css" />
    <link rel="stylesheet" href="<?php echo URL; ?>css/vendor/bootstrap-datepicker3.min.css" />
    <link rel="stylesheet" href="<?php echo URL; ?>css/main.css" />
    <link rel="stylesheet" href="<?php echo URL; ?>css/dore.light.green.min.css" />
    <script src="<?php echo URL; ?>js/vendor/jquery-3.3.1.min.js"></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
</head>

<body id="app-container" class="menu-default show-spinner">
    <nav class="navbar fixed-top">
        <div class="d-flex align-items-center navbar-left">
            <a href="#" class="menu-button d-none d-md-block">
                <svg class="main" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9 17">
                    <rect x="0.48" y="0.5" width="7" height="1" />
                    <rect x="0.48" y="7.5" width="7" height="1" />
                    <rect x="0.48" y="15.5" width="7" height="1" />
                </svg>
                <svg class="sub" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 17">
                    <rect x="1.56" y="0.5" width="16" height="1" />
                    <rect x="1.56" y="7.5" width="16" height="1" />
                    <rect x="1.56" y="15.5" width="16" height="1" />
                </svg>
            </a>

            <a href="#" class="menu-button-mobile d-xs-block d-sm-block d-md-none">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 17">
                    <rect x="0.5" y="0.5" width="25" height="1" />
                    <rect x="0.5" y="7.5" width="25" height="1" />
                    <rect x="0.5" y="15.5" width="25" height="1" />
                </svg>
            </a>

            <div class="header-icons d-inline-block align-middle">
                <a class="btn btn-sm btn-outline-primary mr-2 d-none d-md-inline-block mb-2" href="#">&nbsp;<?php echo $this->session->userdata('type') ?> Dashboard&nbsp;</a>
            </div>
        </div>


        <a class="navbar-logo" href="Dashboard.Default.html">
            <span class="logo d-none d-xs-block"></span>
            <span class="logo-mobile d-block d-xs-none"></span>
        </a>

        <div class="navbar-right">
            <div class="header-icons d-inline-block align-middle">
                <!-- <a class="btn btn-sm btn-outline-primary mr-2 d-none d-md-inline-block mb-2" href="https://1.envato.market/5kAb">&nbsp;BUY&nbsp;</a> -->
            </div>

            <div class="user d-inline-block">
                <button class="btn btn-empty p-0" type="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <span class="name">Hi, <?php echo $this->session->userdata('email') ?></span>
                    <!--<span>-->
                    <!--    <img alt="Profile Picture" src="<?php echo URL; ?>img/profile-pic-l-3.jpg" />-->
                    <!--</span>-->
                </button>

                <div class="dropdown-menu dropdown-menu-right mt-3">
                    <a class="dropdown-item" onclick="signOut();">Sign out</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="sidebar">
        <div class="main-menu">
            <div class="scroll">
                <ul class="list-unstyled">
                    <li <?php if($active=='dashboard') echo 'class="active"'; ?> >
                        <a href="#dashboard">
                            <i class="iconsmind-Digital-Drawing"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li <?php if($active=='history') echo 'class="active"'; ?>>
                        <a href="#history">
                            <i class="iconsmind-Time-Window"></i> History
                        </a>
                    </li>
                    <li <?php if($active=='input') echo 'class="active"'; ?>>
                        <a href="#input">
                            <i class="iconsmind-Pencil"></i> Input
                        </a>
                    </li>
                    <li <?php if($active=='users') echo 'class="active"'; if($this->session->userdata('type')!="business") echo "style='display:none;'"; ?>>
                        <a href="<?php echo URL.'users'; ?>">
                            <i class="iconsmind-User"></i> Users
                        </a>
                    </li>
                   
                </ul>
            </div>
        </div>

        <div class="sub-menu">
            <div class="scroll">
                <ul class="list-unstyled" data-link="dashboard">
                    
                    <?php foreach($product as $p) { echo '<li><a href="'.URL.'dashboard/index/'.$p['name'].'">'.$p['name'].'</a></li>';} ?>
                    
                </ul>
                <ul class="list-unstyled" data-link="input">
                    <?php foreach($product as $p) { echo '<li><a href="'.URL.'input/index/'.$p['name'].'">'.$p['name'].'</a></li>';} ?>
                </ul>
                <ul class="list-unstyled" data-link="history">
                    <?php foreach($product as $p) { echo '<li><a href="'.URL.'history/index/'.$p['name'].'">'.$p['name'].'</a></li>';} ?>
                </ul>

                <ul class="list-unstyled" data-link="layouts">
                    <li>
                        <a href="Layouts.List.html">
                            <i class="simple-icon-credit-card"></i> Data List
                        </a>
                    </li>
                    <li>
                        <a href="Layouts.Thumbs.html">
                            <i class="simple-icon-list"></i> Thumb List
                        </a>
                    </li>
                    <li>
                        <a href="Layouts.Images.html">
                            <i class="simple-icon-grid"></i> Image List
                        </a>
                    </li>
                    <li>
                        <a href="Layouts.Details.html">
                            <i class="simple-icon-book-open"></i> Details
                        </a>
                    </li>
                    <li>
                        <a href="Layouts.Search.html">
                            <i class="simple-icon-magnifier"></i> Search
                        </a>
                    </li>
                    <li>
                        <a href="Layouts.Login.html">
                            <i class="simple-icon-user-following"></i> Login
                        </a>
                    </li>
                    <li>
                        <a href="Layouts.Register.html">
                            <i class="simple-icon-user-follow"></i> Register
                        </a>
                    </li>
                    <li>
                        <a href="Layouts.ForgotPassword.html">
                            <i class="simple-icon-user-unfollow"></i> Forgot Password
                        </a>
                    </li>
                    <li>
                        <a href="Layouts.Error.html">
                            <i class="simple-icon-exclamation"></i> Error
                        </a>
                    </li>
                </ul>
                
            </div>
        </div>
    </div>