<?= $this->extend('backend/includes/master'); ?>
<?= $this->section('title'); ?>
Photo Gallery
<?= $this->endSection(); ?>
<?= $this->section('content'); ?>
<!-- main content -->
<!-- The Modal -->
<div class="modal fade pt-5" id="photoModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Add Photo Gallery</h4>
                <button type="button" class="close" data-dismiss="modal" style="position: absolute;right: 0;top: 0px;height: 45px;width: 45px;background: red;line-height: 11px;border-radius: 50%;color: #fff;">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <p class="text-danger text-center mb-1" id="msg"></p>
                        <form id="add-category" enctype="multipart/form-data" action="<?= base_url('admin/photo'); ?>" method="post" class="needs-validation" novalidate>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="">
                                        <h5 class="header_title">Create Image Gallery</h5>
                                    </div>
                                    <p class="text-danger text-center mb-1" id="msg" style="display: none;"></p>
                                    <form id="add-category" novalidate="novalidate">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label for="category" class="col-sm-4 col-form-label lbl_name lbl1">Enter Name</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter Image Title" required>
                                                        <div class="invalid-feedback">Please enter Photo Name</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label for="category" class="col-sm-4 col-form-label lbl_name lbl2">Attachment</label>
                                                    <div class="col-sm-8">
                                                        <input type="file" class="form-control" name="upload_file" id="upload_file" required>
                                                        <div class="invalid-feedback">Please select Photo</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group row">
                                                    <label for="category" class="col-sm-2 col-form-label lbl_name lbl3 text-right">Description</label>
                                                    <div class="col-sm-10">
                                                        <textarea class="form-control desc" name="desc"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 offset-md-3 mb-3">
                                                <input style="margin: 0;" type="submit" name="add" value="Save Photo" class="btn btn-primary sub btn-block">
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
                    <h5 class="hk-sec-title text-right"><span class="float-left"><i class="fa fa-clone"></i> Photos List</span><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#photoModal"><i class="fa fa-plus"></i> Add Gallery</button></h5>
                    <hr>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-wrap">
                                <table id="datable_1" class="table table-striped pb-30">
                                    <thead>
                                        <tr>
                                            <th>Sr. No.</th>
                                            <th>Title</th>
                                            <th>Image</th>
                                            <th>Description</th>
                                            <th style="width: 150px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 0;
                                        foreach ($photos as $photo) : ?>
                                            <tr>
                                                <td><?= ++$i; ?></td>
                                                <td><?= $photo->img_gal_name; ?></td>
                                                <td><img target="_blank" src="<?= base_url($photo->img_gal_file); ?>" class="img-fluid mx-auto d-block w-25" /></td>
                                                <td><?= $photo->img_gal_desc; ?></td>
                                                <td>
                                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#photoModal<?= $photo->img_gal_id; ?>" class="btn btn-success btn-sm shadow border-0">Edit</a>
                                                    <a href="<?= base_url('admin/photo/trash/' . rawurlencode(base64_encode($photo->img_gal_id))); ?>" onclick="return confirm('Are you sure you want delete ?')" class="btn btn-danger btn-sm shadow border-0">Delete</a>
                                                </td>
                                            </tr>
                                            <?php include 'includes/photo-edit-modal.php'; ?>
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