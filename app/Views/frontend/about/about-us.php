<?= $this->extend('frontend/layouts/app'); ?>
<?= $this->section('title'); ?>
About Us
<?= $this->endSection(); ?>
<?= $this->section('content'); ?>
<!-- main content -->
<section class="breadcrumbs overlay">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>About Us</h2>
                <ul class="bread-list">
                    <li><a href="javascript:void(0)">About<i class="fa fa-angle-right"></i></a></li>
                    <li class="active"><a href="javascript:void(0);">About Us</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="about-us section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-12">
                <div class="single-image overlay">
                    <img src="<?= base_url('assets/images/custom/gautam3.jpg');?>" alt="#">
                </div>
            </div>
            <div class="col-lg-8 col-12">
                <div class="about-text">
                    <h2>About Our Education</h2>
                    <p>D. P. Singh Institute of Education was established by the trust, Shantidoot in 2015.

                        Shantidoot is a registered charitable trust dedicated to work for social development and
                        professional capacity building and skill development education &amp; training for youths to help
                        in building their career and enhance their jobs/earning opportunities.
                    </p>
                    <p>
                        Shantidoot is a registered charitable trust dedicated to work for social development and
                        professional capacity building and skill development education &amp; training for youths to help
                        in building their career and enhance their jobs/earning opportunities.

                        The Trust is running two professional educational &amp; training institutes to provide career
                        opportunities in health care services to youths especially females - </p>
                    <p>
                        1. D. P. Singh Institute of Education (B.Sc. (N), GNM and ANM courses)</p>
                    <p>
                        2. Gautam Institute of Nursing (GNM and ANM courses)

                    </p>
                </div>
            </div>
            <div class="col-lg-12 col-12">
                <div class="about-text">


                </div>
            </div>
        </div>
    </div>
</section>
<!-- main content -->
<?= $this->endSection(); ?>