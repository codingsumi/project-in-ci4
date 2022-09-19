<?= $this->extend('backend/includes/master');?>
<?= $this->section('title');?>
Dashboard
<?= $this->endSection();?>
<?= $this->section('content');?>
<!-- main content -->
<div class="hk-pg-wrapper">
    <nav class="hk-breadcrumb" aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-light bg-transparent">
            <li class="breadcrumb-item"><a href="javascript:(0)">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <section class="hk-sec-wrapper" style="background-color: #f2f2f2;">
                    <h2 class="text-center">Welcome to Admin Dashboard</h2>
                </section>
            </div>
        </div>
    </div>
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-2 mt-4">
                    <a href="course.php">
                        <div class="inforide">
                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-sm-4 col-4 rideone">
                                    <img src="<?= base_url('assets/dist/img/img5.png');?>">
                                </div>
                                <div class="col-lg-9 col-md-8 col-sm-8 col-8 fontsty">
                                    <h4>Courses</h4>
                                    <h2>
                                        <?= $course;?>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-2 mt-4">
                    <a href="student.php">
                        <div class="inforide">
                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-sm-4 col-4 ridefour">
                                    <img src="<?= base_url('assets/dist/img/img3.png');?>">
                                </div>
                                <div class="col-lg-9 col-md-8 col-sm-8 col-8 fontsty">
                                    <h4>Students</h4>
                                    <h2>
                                    <?= $student;?>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Icon Cards-->
                <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-2 mt-4">
                    <a href="faculty.php">
                        <div class="inforide">
                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-sm-4 col-4 rideone">
                                    <img src="<?= base_url('assets/dist/img/img1.png');?>">
                                </div>
                                <div class="col-lg-9 col-md-8 col-sm-8 col-8 fontsty">
                                    <h4>Faculty</h4>
                                    <h2>
                                    <?= $faculty;?>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-2 mt-4">
                    <a href="announcement.php">
                        <div class="inforide">
                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-sm-4 col-4 ridefour">
                                    <img src="<?= base_url('assets/dist/img/img10.png');?>">
                                </div>
                                <div class="col-lg-9 col-md-8 col-sm-8 col-8 fontsty">
                                    <h4>Announcements</h4>
                                    <h2>
                                    <?= $announcement;?>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-2 mt-4">
                    <a href="notices.php">
                        <div class="inforide">
                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-sm-4 col-4 rideone">
                                    <img src="<?= base_url('assets/dist/img/notice.png');?>">
                                </div>
                                <div class="col-lg-9 col-md-8 col-sm-8 col-8 fontsty">
                                    <h4>Notices</h4>
                                    <h2>
                                    <?= $notice;?>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-2 mt-4">
                    <a href="activities.php">
                        <div class="inforide">
                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-sm-4 col-4 ridefour">
                                    <img src="<?= base_url('assets/dist/img/activities.png');?>">
                                </div>
                                <div class="col-lg-9 col-md-8 col-sm-8 col-8 fontsty">
                                    <h4>Activities</h4>
                                    <h2>
                                        <?= $activity; ?>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="viewdata" tabindex="-1" role="dialog" aria-labelledby="comfirmationModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
            </div>
        </div>
    </div>

    <div class="modal fade" id="comfirmationModal" tabindex="-1" role="dialog" aria-labelledby="comfirmationModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <h4 class="text-danger text-center" id="alert-msg"></h4>
                </div>
                <div class="p-3 text-center">
                    <button type="button" class="btn btn-primary btn-sm" id="DeleteRow" value="">Yes</button>
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">No</button>
                </div>
            </div>
        </div>
    </div>

    <!-- /Footer -->

</div>
<?= $this->endSection(); ?>