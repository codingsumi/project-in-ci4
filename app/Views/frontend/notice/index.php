<?= $this->extend('frontend/layouts/app'); ?>
<?= $this->section('title'); ?>
Notices
<?= $this->endSection(); ?>
<?= $this->section('content'); ?>
<!-- main content -->
<section class="breadcrumbs overlay">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Notices</h2>
                <ul class="bread-list">
                    <li><a href="javascript:void(0)">Notice<i class="fa fa-angle-right"></i></a></li>
                    <li class="active"><a href="javascript:void(0);">Notices</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="blog b-archives single section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="learnedu-sidebar left">
                    <!--/ End Categories -->
                    <!-- Posts -->
                    <div class="single-widget posts">
                        <h3>Notices <span></span></h3>
                        <div class="single-post">
                            <div class="post-img">
                                <img src="<?= base_url('assets/images/custom/notice.png');?>" alt="">
                            </div>

                            <div class="post-info">
                                <h4><a href="#">
                                        <p>DPS-N have the notice for the student that they should submit their
                                            assignments upto 20-02-2021.</p>

                                        <p>&nbsp;</p>
                                    </a></h4>
                                <span><i class="fa fa-calendar"></i>2021-01-19</span>
                            </div>
                        </div>
                        <div class="single-post">
                            <div class="post-img">
                                <img src="<?= base_url('assets/images/custom/notice.png');?>" alt="">
                            </div>

                            <div class="post-info">
                                <h4><a href="#">
                                        <p>College Will be open from Jan 27, 2021&nbsp;on its time schedule and we will
                                            have the Republic day celebration on 26th of Jan at 7:00 am.</p>
                                    </a></h4>
                                <span><i class="fa fa-calendar"></i>2021-01-17</span>
                            </div>
                        </div>
                    </div>
                    <!--/ End Posts -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- main content -->
<?= $this->endSection(); ?>