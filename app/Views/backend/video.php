<?= $this->extend('backend/includes/master'); ?>
<?= $this->section('title'); ?>
Videos Gallery
<?= $this->endSection(); ?>
<?= $this->section('content'); ?>
<!-- main content -->
<!-- The Modal -->
<div class="modal fade pt-5" id="videoModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Add Video Gallery</h4>
                <button type="button" class="close" data-dismiss="modal" style="position: absolute;right: 0;top: 0px;height: 45px;width: 45px;background: red;line-height: 11px;border-radius: 50%;color: #fff;">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <p class="text-danger text-center mb-1" id="msg"></p>
                        <form id="add-category" enctype="multipart/form-data" action="<?= base_url('admin/video'); ?>" method="post" class="needs-validation" novalidate>
                            <div class="row">
                                <div class="col-md-12">

                                    <form id="add-category" novalidate="novalidate">
                                        <div class="form-group">
                                            <label for="category">Enter Youtube Video Link</label>

                                            <input type="text" class="form-control" name="title" id="title" placeholder="Enter Youtube Video Title" required>
                                            <div class="invalid-feedback">Please enter video title</div>

                                        </div>
                                        <div class="form-group">
                                            <label for="category">Enter Youtube Video Link</label>

                                            <input type="text" class="form-control" name="link" id="link" placeholder="Enter Youtube Links" required>
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
                    <h5 class="hk-sec-title text-right"><span class="float-left"><i class="fa fa-clone"></i> Videos</span><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#videoModal"><i class="fa fa-plus"></i> Add Video</button></h5>
                    <hr>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-wrap">
                                <table id="datable_1" class="table table-striped pb-30">
                                    <thead>
                                        <tr>
                                            <th>Sr. No.</th>
                                            <th>Date</th>
                                            <th>Title</th>
                                            <th>Videos</th>
                                            <th style="width: 150px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 0;
                                        foreach ($videos as $video) : ?>
                                            <tr>
                                                <td><?= ++$i; ?></td>
                                                <td><?= date("d-M-Y", strtotime($video->date)); ?></td>
                                                <td><?= $video->title; ?></td>
                                                <td><a href="<?= $video->video; ?>" target="_blank" class="btn btn-success btn-sm">Open</a></td>
                                                <td>
                                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#videoModal<?= $video->id; ?>" class="btn btn-success btn-sm shadow border-0">Edit</a>
                                                    <a href="<?= base_url('admin/video/trash/' . rawurlencode(base64_encode($video->id))); ?>" onclick="return confirm('Are you sure you want delete ?')" class="btn btn-danger btn-sm shadow border-0">Delete</a>
                                                </td>
                                            </tr>
                                            <?php include 'includes/video-edit-modal.php'; ?>
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