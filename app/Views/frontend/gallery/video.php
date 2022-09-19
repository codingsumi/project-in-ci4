<?= $this->extend('frontend/layouts/app'); ?>
<?= $this->section('title'); ?>
Video
<?= $this->endSection(); ?>
<?= $this->section('content'); ?>
<!-- main content -->
<section class="breadcrumbs overlay">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Video</h2>
                <ul class="bread-list">
                    <li><a href="javascript:void(0)">Gallery<i class="fa fa-angle-right"></i></a></li>
                    <li class="active"><a href="javascript:void(0);">Video DPS-N</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="team-style2 section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2>Video Gallery <span>DPS-N</span></h2>
                    <p>D. P. Singh Institute of Education (nursing) shares some of the magnificient gallery videos.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach($videos as $video): ?>
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Single Team -->
                <div class="single-team">
                    <div class="image">
                    <iframe width="350" height="250" src="http://www.youtube.com/embed/<?= $video->video; ?>"></iframe>
                        <a href="https://www.youtube.com/watch?v=<?= $video->video; ?>" class="btn video-popup mfp-fade utube"><i class="fa fa-play"></i></a>
                    </div>
                    <!--team-content -->
                </div>
                <!--/ End Single Team -->
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- main content -->
<?= $this->endSection(); ?>