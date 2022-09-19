<?= $this->extend('backend/includes/master'); ?>
<?= $this->section('title'); ?>
Course
<?= $this->endSection(); ?>
<?= $this->section('content'); ?>
<!-- main content -->
<!-- The Modal -->
<div class="modal fade pt-5" id="courseModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Add Course</h4>
                <button type="button" class="close" data-dismiss="modal" style="position: absolute;right: 0;top: 0px;height: 45px;width: 45px;background: red;line-height: 11px;border-radius: 50%;color: #fff;">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <p class="text-danger text-center mb-1" id="msg"></p>
                        <form id="add-category" enctype="multipart/form-data" action="<?= base_url('admin/course'); ?>" method="post" class="needs-validation" novalidate>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label for="category" class="col-sm-2 col-form-label lbl_name lbl1 text-right">Course Title</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="course" id="course" placeholder="Enter Course Name" required>
                                            <div class="invalid-feedback">Please fill out Course title</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label for="category" class="col-sm-2 col-form-label lbl_name lbl2 text-right">Image</label>
                                        <div class="col-sm-10">
                                            <input type="file" class="form-control" name="upload_file" id="upload_file" required>
                                            <div class="invalid-feedback">Please fill out Course file.</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label for="category" class="col-sm-2 col-form-label lbl_name lbl4 text-right">No. of Seat</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="seat" id="seat" placeholder="Enter course seat" required>
                                            <div class="invalid-feedback">Please fill out seat no.</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label for="category" class="col-sm-2 col-form-label lbl_name lbl5 text-right">Duration</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="duration" id="duration" placeholder="3 Years" required>
                                            <div class="invalid-feedback">Please fill out duration.</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label for="category" class="col-sm-2 col-form-label lbl_name lbl3 text-right">Description</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control desc" name="desc" required></textarea>

                                        </div>
                                    </div>
                                </div>
                                <div class="invalid-feedback">Please fill out description</div>
                                <div class="col-md-6 offset-md-3 mb-3">
                                    <input style="margin: 0;" type="submit" name="add" value="Save Course" class="btn btn-primary sub btn-block">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="hk-pg-wrapper">
    <div class="mt-3 p-3">
        <?php
        if (!empty(session()->getFlashdata('success'))) {
            echo '<div class="alert alert-success alert-dismissible shadow">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                ' . session()->getFlashdata('success') . '
            </div>';
        }

        if (!empty(session()->getFlashdata('error'))) {
            echo '<div class="alert alert-danger alert-dismissible shadow">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                ' . session()->getFlashdata('error') . '
            </div>';
        }

        ?>
        <div class="row">
            <div class="col-md-12">
                <section class="hk-sec-wrapper">
                    <h5 class="hk-sec-title text-right"><span class="float-left"><i class="fa fa-clone"></i> Course List</span><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#courseModal"><i class="fa fa-plus"></i> Add New Course</button></h5>
                    <hr>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-wrap">
                                <table id="datable_1" class="table table-striped pb-30">
                                    <thead>
                                        <tr>
                                            <th>Sr. No.</th>
                                            <th>Course Title</th>
                                            <th>Image</th>
                                            <th>Seat</th>
                                            <th>Duration</th>
                                            <th>Job Description</th>
                                            <th style="width: 150px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 0;
                                        foreach ($courses as $course) : ?>
                                            <tr>
                                                <td><?= ++$i; ?></td>
                                                <td><?= $course->course_name; ?></td>
                                                <td><a data-toggle="modal" data-target="#course<?= $course->course_id;?>" class="btn btn-outline-success">Open</a></td>
                                                <td><?= $course->seat . " seats"; ?></td>
                                                <td><?= $course->duration; ?></td>
                                                <td><?= $course->course_desc; ?></td>
                                                <td>
                                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#courseModal<?= $course->course_id;?>" class="btn btn-success btn-sm shadow border-0">Edit</a>
                                                    <a href="<?= base_url('admin/course/trash/' . rawurlencode(base64_encode($course->course_id))); ?>" onclick="return confirm('Are you sure you want delete ?')" class="btn btn-danger btn-sm shadow border-0">Delete</a>
                                                </td>
                                            </tr>
                                            <?php include 'includes/show-course-image.php'; ?>
                                            <?php include 'includes/course-edit-modal.php'; ?>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>