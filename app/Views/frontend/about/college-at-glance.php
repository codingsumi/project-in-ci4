<?= $this->extend('frontend/layouts/app'); ?>
<?= $this->section('title'); ?>
College at glance
<?= $this->endSection(); ?>
<?= $this->section('content'); ?>
<!-- main content -->
<section class="breadcrumbs overlay">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>College at glance</h2>
                <ul class="bread-list">
                    <li><a href="javascript:void(0)">About<i class="fa fa-angle-right"></i></a></li>
                    <li class="active"><a href="javascript:void(0);">College at glance</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="about-us section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p align="justify">D. P. Singh Institute of Education is located away from the hustle and bustle of the
                    town amidst serene surroundings in a self-sustaining complex with an excellent academic ambience. It
                    is very well connected by road, rail and air (via Patna) to all the major cities in the country. The
                    Institute is located at Gautamnagar (Bhaganbigha), on National Highway No. 31 (Patna – Bakhtiyarpur
                    – Ranchi) at a distance of about six kms. from Biharsharif which is the headquarter town of Nalanda
                    District. Bakhtiyarpur Railway Junction, on Delhi – Howrah Mainline, is at the distance of just 20
                    Kms. Nearest airport is at about 75 kms. in Patna, the state capital of Bihar. </p>

                <br>
                <h5>D. P. Singh Institute of Education offers following courses:-</h5><br>
                <table class="table table-responsive">
                    <thead>
                        <tr>
                            <th>SNo.</th>
                            <th>Course</th>
                            <th>Duration</th>
                            <th>Eligibility</th>
                            <th>Examining Body</th>
                            <th>Sanctioned Seats</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Basic B.Sc.
                                Nursing
                            </td>
                            <td>4 Years</td>
                            <td>+2 (Bio.) with
                                Min. 45% marks
                            </td>
                            <td>Aryabhatta University</td>
                            <td>60</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>ANM Nursing</td>
                            <td>2 Years</td>
                            <td>GNM Pass;
                                Registered Nurse
                            </td>
                            <td>Aryabhatta University</td>
                            <td>60</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>GNM</td>
                            <td>3 Years</td>
                            <td>+2 with
                                Min. 40% marks
                            </td>
                            <td>Bihar Nurses Registration Council</td>
                            <td>60</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>ANM</td>
                            <td>2 Years</td>
                            <td>10+2 pass</td>
                            <td>BNRC</td>
                            <td>60</td>
                        </tr>
                    </tbody>
                </table>
            </div>


        </div>
    </div>
</section>
<!-- main content -->
<?= $this->endSection(); ?>