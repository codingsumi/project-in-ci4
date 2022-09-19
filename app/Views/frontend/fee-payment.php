<?= $this->extend('frontend/layouts/app'); ?>
<?= $this->section('title'); ?>
Fee Payment
<?= $this->endSection(); ?>
<?= $this->section('content'); ?>
<!-- main content -->
<!-- <section class="breadcrumbs overlay">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Fee Payment</h2>
                <ul class="bread-list">
                    <li><a href="javascript:void(0)">Home<i class="fa fa-angle-right"></i></a></li>
                    <li class="active"><a href="javascript:void(0);">Fee Payment</a></li>
                </ul>
            </div>
        </div>
    </div>
</section> -->

<section class="team-details section">
    <div class="container">
        <div class="row">
            <div class="edulab-section-title mb-5">
                <h1>Please fill details</h1>
                <div class="heading-line"></div>
            </div>
        </div>
        <form action="" method="post" class="needs-validation" novalidate>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="mb-0">Nature Of Fee</label>
                        <select class="form-control" name="fees" required>
                            <option value="">Select</option>
                            <option value="tuition-fee">Tuition Fee</option>
                            <option value="registration-fee">Registration Fee</option>
                            <option value="exam-fee">Exam Fee</option>
                            <option value="other">Other(Please Specify)</option>
                        </select>
                        <div class="invalid-feedback">Please select nature of fee</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="mb-0">Course Name</label>
                        <input type="text" class="form-control" name="course_name" placeholder="Course Name" required>
                        <div class="invalid-feedback">Write down your course name</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="mb-0">Student Name</label>
                        <input type="text" class="form-control" name="student_name" placeholder="Student Name" required>
                        <div class="invalid-feedback">Please enter your name</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="mb-0">Registration No</label>
                        <input type="text" class="form-control" name="registration_no" placeholder="Registration No" required>
                        <div class="invalid-feedback">Please enter Registration No.</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Address</label>
                        <input type="text" class="form-control" name="address" placeholder="Address" required>
                        <div class="invalid-feedback">Please enter your address</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputPassword1">City</label>
                        <input type="text" class="form-control" name="city" placeholder="City" required>
                        <div class="invalid-feedback">Please enter your City</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Parent's Name</label>
                        <input type="text" class="form-control" name="parent_name" placeholder="Parent's Name" required>
                        <div class="invalid-feedback">Please enter your parent's Name</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Email Address</label>
                        <input type="text" class="form-control" name="email" placeholder="Email Address">
                        <div class="invalid-feedback">Enter your Email Address</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="mobile">Mobile Number</label>
                        <input type="text" class="form-control" name="mobile" maxlength="10" pattern="^[6-9]\d{9}$" placeholder="Mobile Number" required>
                        <div class="invalid-feedback">Enter your Mobile Number</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Amount (INR)</label>
                        <input type="text" class="form-control" name="amount" placeholder="Amount" required>
                        <div class="invalid-feedback">Please enter Amount</div>
                    </div>
                </div>
                <div class="col-md-6 offset-md-3 text-center mt-3">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div>

            </div>
        </form>
    </div>
</section>
<!-- main content -->
<?= $this->endSection(); ?>