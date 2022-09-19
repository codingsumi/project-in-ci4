<?= $this->extend('frontend/layouts/app'); ?>
<?= $this->section('title'); ?>
Online Class
<?= $this->endSection(); ?>
<?= $this->section('content'); ?>
<!-- main content -->
<section class="breadcrumbs overlay">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Online Class</h2>
                <ul class="bread-list">
                    <li><a href="javascript:void(0)">Student Corner<i class="fa fa-angle-right"></i></a></li>
                    <li class="active"><a href="javascript:void(0);">Online Class</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="team-details section">
    <div class="container">

        <div class="row">

            <div class="col-md-12">
                <div class="edulab-about-right">
                    <div class="">

                        <h4 class="mt-10"><b>Online Classes Links </b></h4>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Course</th>
                                    <th>Details</th>
                                    <th>Class Link</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- main content -->
<?= $this->endSection(); ?>