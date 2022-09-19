<div class="modal fade pt-5" id="videoModal<?= $video->id; ?>">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Update Video Gallery</h4>
                <button type="button" class="close" data-dismiss="modal" style="position: absolute;right: 0;top: 0px;height: 45px;width: 45px;background: red;line-height: 11px;border-radius: 50%;color: #fff;">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <p class="text-danger text-center mb-1" id="msg"></p>
                        <form id="add-category" enctype="multipart/form-data" action="<?= base_url('admin/video/edit/' . rawurlencode(base64_encode($video->id))); ?>" method="post" class="needs-validation" novalidate>
                            <div class="row">
                                <div class="col-md-12">

                                    <form id="add-category" novalidate="novalidate">
                                        <div class="form-group">
                                            <label for="category">Enter Youtube Video Link</label>

                                            <input type="text" class="form-control" name="title" id="title" value="<?= $video->title; ?>" placeholder="Enter Youtube Video Title" required>
                                            <div class="invalid-feedback">Please enter video title</div>

                                        </div>
                                        <div class="form-group">
                                            <label for="category">Enter Youtube Video Link</label>

                                            <input type="text" class="form-control" name="link" id="link" value="<?= $video->video; ?>" placeholder="Enter Youtube Links" required>
                                            <div class="invalid-feedback">Please provide youtube link</div>

                                        </div>
                                        <div class="form-group">
                                            <input style="margin: 0;" type="submit" name="update" value="Save" class="btn btn-primary sub btn-block">
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