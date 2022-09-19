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
                <h2>Blog</h2>
                <ul class="bread-list">
                    <li><a href="javascript:void(0)">Blog<i class="fa fa-angle-right"></i></a></li>
                    <li class="active"><a href="javascript:void(0);">Blog</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="team-details section">
    <div class="container">
        <div class="row">

            <div class="col-md-8 col-sm-6 mb-20 mt-20">

                <?php foreach ($blogs as $blog) : ?>
                    <?php
                    $title =  $blog->blog_title;
                    $title = str_replace("'", "-", $title);
                    $title = str_replace(".", "-", $title);
                    $title = str_replace("_", "-", $title);
                    $title = str_replace("&", "and", $title);
                    $title = preg_replace("/[^a-zA-Z0-9 _-]/", "", $title);
                    $title = strtolower($title);
                    $title = preg_replace("/[ ]+/", " ", $title);
                    $title = url_title(convert_accented_characters($title), '-', true);
                    ?>
                    <div class="col-md-12 col-sm-6 mb-20 mt-20 mt-5">
                        <div class="courses-item courses-text">
                            <div class="row">
                                <div class="col-md-3 col-sm-6">
                                    <img src="<?= base_url('assets/images/custom/blog.jpg'); ?>" alt="Courses Item" class="img-fluid">
                                </div>
                                <div class="col-md-9 col-sm-6 " style="border-bottom:1px solid black;">
                                    <h5 class="weight"><a href="<?= base_url('blog/' . $blog->id . "/" . $title); ?>"><?= $blog->blog_title; ?></a></h5>

                                    <p><?= word_limiter($blog->blog_description, 20); ?></p>
                                    <p style="font-weight:600;font-size:12px;">
                                        Posted on : <span style="font-size:13px;"> <?= date("d-m-Y", strtotime($blog->updated_on)); ?></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        By:<span style="font-size:12px;color: red"><?= $blog->blog_by; ?></span></p>
                                </div>

                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

    </div>
</section>
<!-- main content -->
<?= $this->endSection(); ?>