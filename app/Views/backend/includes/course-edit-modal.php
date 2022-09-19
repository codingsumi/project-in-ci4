                                            <!-- edit data -->
                                            <div class="modal fade pt-5" id="courseModal<?= $course->course_id;?>">
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
                                                                    <form id="add-category" enctype="multipart/form-data" action="<?= base_url('admin/course/edit/'.rawurlencode(base64_encode($course->course_id))); ?>" method="post" class="needs-validation" novalidate>
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="form-group row">
                                                                                    <label for="category" class="col-sm-2 col-form-label lbl_name lbl1 text-right">Course Title</label>
                                                                                    <div class="col-sm-10">
                                                                                        <input type="text" class="form-control" name="course" id="course" value="<?= $course->course_name; ?>" placeholder="Enter Course Name" required>
                                                                                        <div class="invalid-feedback">Please fill out Course title</div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <div class="form-group row">
                                                                                    <label for="category" class="col-sm-2 col-form-label lbl_name lbl2 text-right">Image</label>
                                                                                    <div class="col-sm-10">
                                                                                        <input type="file" class="form-control" name="upload_file" id="upload_file">
                                                                                        <div class="invalid-feedback">Please fill out Course file.</div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <div class="form-group row">
                                                                                    <label for="category" class="col-sm-2 col-form-label lbl_name lbl4 text-right">No. of Seat</label>
                                                                                    <div class="col-sm-10">
                                                                                        <input type="text" class="form-control" name="seat" id="seat" value="<?= $course->seat; ?>" placeholder="Enter course seat" required>
                                                                                        <div class="invalid-feedback">Please fill out seat no.</div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <div class="form-group row">
                                                                                    <label for="category" class="col-sm-2 col-form-label lbl_name lbl5 text-right">Duration</label>
                                                                                    <div class="col-sm-10">
                                                                                        <input type="text" class="form-control" name="duration" value="<?= $course->duration; ?>" id="duration" placeholder="3 Years" required>
                                                                                        <div class="invalid-feedback">Please fill out duration.</div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <div class="form-group row">
                                                                                    <label for="category" class="col-sm-2 col-form-label lbl_name lbl3 text-right">Description</label>
                                                                                    <div class="col-sm-10">
                                                                                        <textarea class="form-control desc" name="desc" id="" required><?= $course->course_desc; ?></textarea>

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="invalid-feedback">Please fill out description</div>
                                                                            <div class="col-md-6 offset-md-3 mb-3">
                                                                                <input style="margin: 0;" type="submit" name="update" value="Update Course" class="btn btn-primary sub btn-block">
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>