<?= $this->extend('frontend/layouts/app'); ?>
<?= $this->section('title'); ?>
Apply Job
<?= $this->endSection(); ?>
<?= $this->section('content'); ?>
<!-- main content -->
<section class="breadcrumbs overlay">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Apply Job</h2>
                <ul class="bread-list">
                    <li><a href="javascript:void(0)">Career<i class="fa fa-angle-right"></i></a></li>
                    <li class="active"><a href="javascript:void(0);">Apply Job</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="team-details section">
    <div class="container">
        <div class="row">
            <div class="edulab-section-title">
                <h2>Please Fill<span> Your Details</span></h2>
                <div class="heading-line"></div>
            </div>
        </div>
        <form action="apply_job_insert.php" method="post">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" class="form-control" name="student_name" placeholder="Name" required="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Father's Name</label>
                        <input type="text" class="form-control" name="father_name" placeholder="Father's Name"
                            required="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Date of Birth</label>
                        <input type="date" class="form-control" name="dob" placeholder="Date of birth" required="">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Present Address</label>
                        <textarea class="form-control" name="address"
                            placeholder="Enter Full Present Address"></textarea>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Email Address</label>
                        <input type="text" class="form-control" name="email" placeholder="Email Address" required="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="mobile">Mobile Number</label>
                        <input type="text" class="form-control" name="mobile" maxlength="10" pattern="^[6-9]\d{9}$"
                            placeholder="Mobile Number" required="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="mobile">Upload Resume</label>
                        <input type="file" class="form-control" name="file">
                    </div>
                </div>


                <div class="col-md-6">
                    <br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

            </div>
        </form>
    </div>
</section>
<!-- main content -->
<?= $this->endSection(); ?>