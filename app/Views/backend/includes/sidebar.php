<!-- sidebar -->
<nav class="hk-nav hk-nav-dark">
            <a href="javascript:void(0);" id="hk_nav_close" class="hk-nav-close"><span class="feather-icon"><i data-feather="x"></i></span></a>
            <div class="nicescroll-bar">
                <div class="navbar-nav-wrap">
                    <ul class="navbar-nav flex-column">
                        <li class="nav-item active">
                            <a class="nav-link" href="<?= base_url('admin/dashboard'); ?>">
                                <span class="feather-icon"><i data-feather="activity"></i></span>
                                <span class="nav-link-text">Dashboard</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('admin/course');?>">
                                <span class="feather-icon"><i data-feather="map"></i></span>
                                <span class="nav-link-text">Course</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#app_drp">
                                <span class="feather-icon"><i data-feather="image"></i></span>
                                <span class="nav-link-text">Gallery</span>
                            </a>
                            <ul id="app_drp" class="nav flex-column collapse collapse-level-1">
                                <li class="nav-item">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?= base_url('admin/photo');?>"><i class="fa fa-image"></i> Image Gallery</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?= base_url('admin/video');?>"><i class="fa fa-video-camera"></i>Video Gallery</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('admin/notice');?>">
                                <span class="feather-icon"><i data-feather="file"></i></span>
                                <span class="nav-link-text">Notices</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#setting">
                                <span class=""><i class="fa fa-gear"></i></span>
                                <span class="ml-3 nav-link-text">Setting</span>
                            </a>
                            <ul id="setting" class="nav flex-column collapse collapse-level-1">
                                <li class="nav-item">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" onclick="return confirm('Are you sure you want to logout');" href="<?= base_url('admin/logout');?>"><i class="fa fa-sign-out"></i> Log Out</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <!--    -->
                </div>
            </div>
        </nav>
        <div id="hk_nav_backdrop" class="hk-nav-backdrop"></div>
        <!-- end sidebar-->