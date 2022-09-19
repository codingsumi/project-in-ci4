<?= $this->extend('frontend/layouts/app'); ?>
<?= $this->section('title'); ?>
Brochures
<?= $this->endSection(); ?>
<?= $this->section('content'); ?>
<!-- main content -->
<section class="breadcrumbs overlay">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Brochures</h2>
                <ul class="bread-list">
                    <li><a href="javascript:void(0)">Home<i class="fa fa-angle-right"></i></a></li>
                    <li class="active"><a href="javascript:void(0);">Brochures</a></li>
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
                    <h2>Our <span>Brochures</span></h2>
                    <p>DPS-N Brochures consists of details of various subjects of study such as Auxiliary Nurse Midwife
                        (ANM), General Nursing and Midwifery (GNM), Basic B. Sc. Nursing.</p>
                </div>
            </div>
            <div class="col-12">
                <div class="section-title">
                    <div class="section-title">
                        <a style="" class="btn btn-primary" target="_blank"
                            href="shushila-adm/dist/img/ilovepdf_merged.pdf"><i class="fa fa-eye"></i>
                            MSIE-Brochures</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- main content -->
<?= $this->endSection(); ?>