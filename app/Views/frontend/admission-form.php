<?= $this->extend('frontend/layouts/app'); ?>
<?= $this->section('title'); ?>
Admission Form
<?= $this->endSection(); ?>
<?= $this->section('content'); ?>
<!-- main content -->
<!-- <section class="breadcrumbs overlay">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Admission Form</h2>
                <ul class="bread-list">
                    <li><a href="javascript:void(0)">Home<i class="fa fa-angle-right"></i></a></li>
                    <li class="active"><a href="javascript:void(0);">Admission Form</a></li>
                </ul>
            </div>
        </div>
    </div>
</section> -->

<section class="team-details section">
    <div class="container">
        <div class="row">
            <div class="edulab-section-title pb-5">
                <h2>Please Fill Your Details </h2>
            </div>
        </div>
        <?php 
            if(session()->getFlashdata('error')) {
                echo '<div class="alert alert-info alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                '.session()->getFlashdata('error').'
              </div>';
            }
        ?>
        <form method="post" action="<?= route_to('admissionform.create');?>" class="needs-validation" novalidate>
            <!-- <?= csrf_field();?> -->
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="mb-0">Student Name</label>
                        <input type="text" class="form-control text-capitalize" name="name" value="<?= set_value('name');?>" placeholder="Student Name" required>
                        <div class="invalid-feedback">Student Name is required</div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="mb-0">Email Address</label>
                        <input type="email" class="form-control" name="email" placeholder="Email Address" value="<?= set_value('email');?>" required>
                        <div class="invalid-feedback">Email Address is required</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="mb-0">Mobile Number</label>
                        <input type="text" class="form-control" name="mobile" maxlength="10" value="<?= set_value('mobile');?>" pattern="^[6-9]\d{9}$" placeholder="Mobile Number" required>
                        <div class="invalid-feedback">Mobile Number is required</div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="mb-0">Date of Birth</label>
                        <input type="date" class="form-control" name="dob" placeholder="Date of birth" value="<?= set_value('dob');?>" required>
                        <div class="invalid-feedback">DOB is required</div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="mb-0">Father's Name</label>
                        <input type="text" class="form-control text-capitalize" name="father_name" value="<?= set_value('father_name');?>" placeholder="Father's Name" required>
                        <div class="invalid-feedback">Father's Name is required</div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="mb-0">Course</label>
                        <select class="form-control " name="course" required>
                            <option value="">Select Course</option>
                            <option value="ANM" <?php if(set_value('course') == 'ANM') echo 'selected';?>>Auxiliary Nurse Midwife (ANM)</option>
                            <option value="GMN" <?php if(set_value('course') == 'GMN') echo 'selected';?>>General Nursing and Midwifery (GNM)</option>
                            <option value="B.Sc. Nursing" <?php if(set_value('course') == 'B.Sc. Nursing') echo 'selected';?>>B.Sc. Nursing</option>
                        </select>
                        <div class="invalid-feedback">Please Select your Course</div>
                    </div>
                </div>

               
                
                <div class="col-md-2">
                    <div class="form-group">
                        <label class="mb-0">Qualification</label>
                        <select class="form-control" name="qualification" required>
                            <option value="">Select Course</option>
                            <option value="MA" <?php if(set_value('qualification') == 'MA') echo 'selected';?> >MA</option>
                            <option value="MSc" <?php if(set_value('qualification') == 'MSc') echo 'selected';?> >MSc</option>
                            <option value="BSc" <?php if(set_value('qualification') == 'BSc') echo 'selected';?> >BSc</option>
                            <option value="BA" <?php if(set_value('qualification') == 'BA') echo 'selected';?> >BA</option>
                            <option value="12th" <?php if(set_value('qualification') == '12th') echo 'selected';?> >12th</option>
                            <option value="10th" <?php if(set_value('qualification') == '10th') echo 'selected';?> >10th</option>
                        </select>
                        <div class="invalid-feedback">Qualification is required</div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label class="mb-0">Passing Year</label>
                        <input type="text" class="form-control" maxlength="4" value="<?= set_value('year');?>" name="year" placeholder="Passing Year" required>
                        <div class="invalid-feedback"> year is required</div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label class="mb-0">%</label>
                        <input type="text" class="form-control" name="percent" value="<?= set_value('percent');?>" placeholder="Percentage" required>
                        <div class="invalid-feedback">% is required</div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="mb-0">Pincode</label>
                        <input type="text" maxlength="6" class="form-control" value="<?= set_value('pincode');?>" name="pincode" placeholder="Pincode" required>
                        <div class="invalid-feedback">Pincode is required</div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="mb-0">Address</label>
                        <textarea class="form-control text-capitalize" rows="5" name="address" placeholder="Address" minlength="20" required><?= set_value('address');?></textarea>
                        <div class="invalid-feedback">Address is required</div>
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
