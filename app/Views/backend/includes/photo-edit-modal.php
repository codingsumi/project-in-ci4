                                            <!-- edit data -->
                                            <div class="modal fade pt-5" id="photoModal<?= $photo->img_gal_id; ?>">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">

                                                        <!-- Modal Header -->
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Update Image Gallery</h4>
                                                            <button type="button" class="close" data-dismiss="modal" style="position: absolute;right: 0;top: 0px;height: 45px;width: 45px;background: red;line-height: 11px;border-radius: 50%;color: #fff;">&times;</button>
                                                        </div>

                                                        <!-- Modal body -->
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <p class="text-danger text-center mb-1" id="msg"></p>
                                                                    <form id="add-category" enctype="multipart/form-data" action="<?= base_url('admin/photo/edit/' . rawurlencode(base64_encode($photo->img_gal_id))); ?>" method="post" class="needs-validation" novalidate>
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                
                                                                                <p class="text-danger text-center mb-1" id="msg" style="display: none;"></p>
                                                                                <form id="add-category" novalidate="novalidate">
                                                                                    <div class="row">
                                                                                        <div class="col-md-6">
                                                                                            <div class="form-group row">
                                                                                                <label for="category" class="col-sm-4 col-form-label lbl_name lbl1">Enter Name</label>
                                                                                                <div class="col-sm-8">
                                                                                                    <input type="text" class="form-control" name="name" id="name" value="<?= $photo->img_gal_name; ?>" placeholder="Enter Image Title" required>
                                                                                                    <div class="invalid-feedback">Please enter Photo Name</div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-6">
                                                                                            <div class="form-group row">
                                                                                                <label for="category" class="col-sm-4 col-form-label lbl_name lbl2">Attachment</label>
                                                                                                <div class="col-sm-8">
                                                                                                    <input type="file" class="form-control" name="upload_file" id="upload_file">
                                                                                                    <div class="invalid-feedback">Please select Photo</div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-12">
                                                                                            <div class="form-group row">
                                                                                                <label for="category" class="col-sm-2 col-form-label lbl_name lbl3 text-right">Description</label>
                                                                                                <div class="col-sm-10">
                                                                                                    <textarea class="form-control desc" name="desc"><?= $photo->img_gal_desc; ?></textarea>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-6 offset-md-3 mb-3">
                                                                                            <input style="margin: 0;" type="submit" name="update" value="Update" class="btn btn-primary sub btn-block">
                                                                                        </div>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>