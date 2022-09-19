<?= $this->extend('frontend/layouts/app'); ?>
<?= $this->section('title'); ?>
Courses
<?= $this->endSection(); ?>
<?= $this->section('content'); ?>
<!-- main content -->
<section class="breadcrumbs overlay">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Courses</h2>
                <ul class="bread-list">
                    <li><a href="javascript:void(0)">Academics<i class="fa fa-angle-right"></i></a></li>
                    <li class="active"><a href="javascript:void(0);">Courses</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="courses archives section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2>Popular <span>Courses</span> We Offer</h2>
                    <p>D. P. Singh Institute of Education shares the Courses.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach ($courses as $course) : ?>
                <?php 
                    $name = $course->course_name;
                    $name = str_replace("'", "-", $name);
                    $name = str_replace(",", "-", $name);
                    $name = str_replace(".", "-", $name);
                    $slug = url_title(convert_accented_characters($name), '-', true);
                ?>
            <div class="col-lg-4 col-md-4 col-12">
                <!-- Single Course -->
                <div class="single-course">
                    <div class="course-head overlay">
                        <img src="<?= base_url($course->course_file); ?>" alt="#">
                        <a href="<?= base_url('academic/courses/'.$slug); ?>" class="btn"><i class="fa fa-link"></i></a>
                    </div>
                    <div class="p-3">
                        <p class="font-weight-bold text-success" style="font-size: 16px;"><?= ucfirst($course->course_name);?></p> <br>
                        <?= word_limiter(ucfirst(trim($course->course_desc)),10);?>
                    </div>
                    <div class="course-meta">
                        <div class="meta-left">
                            <span><i class="fa fa-users"></i><?= $course->seat;?></span>
                            <span><i class="fa fa-clock-o"></i><?= $course->duration;?></span>
                        </div>
                        <span class="price"><a href="<?= base_url('contact');?>" class="meta_anchor">Contact</a></span>
                    </div>
                </div>
                <!--/ End Single Course -->
            </div>
            <?php endforeach; ?>
        </div>
        <div class="row">
            <div class="col-12">
                <!-- Start Pagination -->
                <div class="pagination-main">
                    <ul class="pagination">
                        <li class="prev"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                        <li><a href="#">1</a></li>
                        <li class="next"><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                    </ul>
                </div>
                <!--/ End Pagination -->
            </div>
        </div>
    </div>
</section>
<!-- main content -->
<?= $this->endSection(); ?>