<?= $this->extend('frontend/layouts/app'); ?>
<?= $this->section('title'); ?>
Account Information
<?= $this->endSection(); ?>
<?= $this->section('content'); ?>
<!-- main content -->
<section class="breadcrumbs overlay">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Account Information</h2>
                <ul class="bread-list">
                    <li><a href="javascript:void(0)">Home<i class="fa fa-angle-right"></i></a></li>
                    <li class="active"><a href="javascript:void(0);">Account Information</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="faq page section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2><span>Account </span>Information</h2>
                    <p class="mb-5">Payment can be made online / bank transfer in following bank account.</p>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="col-md-12 mt-5 mb-5">
                <div class="table-responsive mb-5">
                    <table class="table table-striped table-borderless">
                        <tbody>
                            <tr>
                                <th scope="row">Name</th>
                                <th> : </th>
                                <td>D P SINGH INSTITUTE OF EDUCATION N</td>
                            </tr>
                            <tr>
                                <th scope="row">Account Number</th>
                                <th> : </th>
                                <td>23810100400</td>
                            </tr>
                            <tr>
                                <th scope="row">IFSC Code</th>
                                <th> : </th>
                                <td>ICIC0002381</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- main content -->
<?= $this->endSection(); ?>