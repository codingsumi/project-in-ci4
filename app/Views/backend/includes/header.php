<body>
    <div class="hk-wrapper hk-vertical-nav">

        <!-- Top Navbar -->
        <nav class="navbar navbar-expand-xl navbar-light fixed-top hk-navbar">
            <a id="navbar_toggle_btn" class="navbar-toggle-btn nav-link-hover" href="javascript:void(0);"><span class="feather-icon"><i data-feather="menu"></i></span></a>
            <a class="navbar-brand" href="<?= base_url('admin/dashboard');?>">
                <img class="brand-img d-inline-block" src="<?= base_url('assets/images/custom/logo.png');?>" alt="brand" style="height: 2rem" /> D.P. Singh Institute Of Education (Nursing)
            </a>
            <ul class="navbar-nav hk-navbar-content">

                <li class="nav-item dropdown dropdown-authentication">
                    <a class="nav-link dropdown-toggle no-caret" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="media">
                            <div class="media-img-wrap">
                                <div class="avatar">
                                    <img src="<?= base_url('assets/images/custom/logo.png');?>" alt="user" class="avatar-img rounded-circle">
                                </div>
                                <span class="badge badge-success badge-indicator"></span>
                            </div>
                            <div class="media-body">
                                <span>Admin<i class="zmdi zmdi-chevron-down"></i></span>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">

                        <div class="sub-dropdown-menu show-on-hover">
                            <a href="#" class="dropdown-item no-caret"><i class="zmdi zmdi-check text-success"></i>Online</a>
                        </div>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="change_pwd.php"><i class="dropdown-icon fa fa-unlock"></i><span>Change Password</span></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="logout.php"><i class="dropdown-icon zmdi zmdi-power"></i><span>Log out</span></a>
                    </div>
                </li>
            </ul>
        </nav>