<?= $this->extend('frontend/layouts/app'); ?>
<?= $this->section('title'); ?>
Blog
<?= $this->endSection(); ?>
<?= $this->section('content'); ?>
<!-- main content -->
<section class="breadcrumbs overlay">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Blog Details</h2>
                <ul class="bread-list">
                    <li><a href="javascript:void(0)">Blog<i class="fa fa-angle-right"></i></a></li>
                    <li class="active"><a href="javascript:void(0);">Blog Details</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="team-details section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="courses-item">
                    <div class="row">
                        <div class="col-md-12 col-sm-6">
                            <h1 class="weight pb-5"><?= $blog->blog_title;?></h1>
                            <p style="font-weight:600;font-size:12px;">
                                Posted on : <span style="font-size:12px;"> <?= date("d-m-Y", strtotime($blog->updated_on)); ?></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                By:<span style="font-size:12px;color: red"> <?= $blog->blog_by;?></span></p>
                            <p class="mt-10 pl-10 text-justify"><?= $blog->blog_description;?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- main content -->
<?= $this->endSection(); ?>