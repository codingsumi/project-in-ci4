<?= $this->extend('frontend/layouts/app'); ?>
<?= $this->section('title'); ?>
Career
<?= $this->endSection(); ?>
<?= $this->section('content'); ?>
<!-- main content -->
<section class="breadcrumbs overlay">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Career</h2>
                <ul class="bread-list">
                    <li><a href="javascript:void(0)">Career<i class="fa fa-angle-right"></i></a></li>
                    <li class="active"><a href="javascript:void(0);">Career</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="team-details section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">

                </div>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Post/Position</th>
                        <th>No.Of Vaccancy</th>
                        <th>Apply Now</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Teaching Staff</td>
                        <td>3</td>
                        <td><a href="<?= base_url('career/apply');?>" class="btn btn-success">Apply</a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Non-Teaching Staff</td>
                        <td>10</td>
                        <td><a href="<?= base_url('career/apply');?>" class="btn btn-success">Apply</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
<!-- main content -->
<?= $this->endSection(); ?>