<?= $this->extend('frontend/layouts/app'); ?>
<?= $this->section('title'); ?>
Contact
<?= $this->endSection(); ?>
<?= $this->section('content'); ?>
<!-- main content -->
<section class="breadcrumbs overlay">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Contact</h2>
                <ul class="bread-list">
                    <li><a href="javascript:void(0)">Home<i class="fa fa-angle-right"></i></a></li>
                    <li class="active"><a href="javascript:void(0);">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section id="contact" class="contact section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2><span>Contact</span> Information</h2>
                    <p>D. P. Singh Institute of Education (nursing) is located away from the hustle and bustle of the
                        town amidst serene surroundings in a self-sustaining complex with an excellent academic
                        ambience. It is very well connected by road, rail and air (via Patna) to all the major cities in
                        the country. The Institute is located at Gautamnagar (Bhaganbigha), on National Highway No. 31
                        (Patna – Bakhtiyarpur – Ranchi) at a distance of about six kms. from Biharsharif which is the
                        headquarter town of Nalanda District. Bakhtiyarpur Railway Junction, on Delhi – Howrah Mainline,
                        is at the distance of just 20 Kms. Nearest airport is at about 75 kms. in Patna, the state
                        capital of Bihar. </p>
                </div>
            </div>
        </div>
        <div class="contact-head">
            <?php 
                if(!empty(session()->getFlashdata('success'))) {
                    echo '<div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    '.session()->getFlashdata('success').'
                  </div>';
                }

                if(!empty(session()->getFlashdata('error'))) {
                    echo '<div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    '.session()->getFlashdata('error').'
                  </div>';
                }
            ?>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="contact-map">
                        <!-- Map -->
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1080.3951026501018!2d85.51698405032229!3d25.275379387422937!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f28d3d602bc217%3A0xdb6ebd9a1183ea4!2sD.P.%20Singh%20Institute%20of%20Education!5e0!3m2!1sen!2sin!4v1630566561798!5m2!1sen!2sin"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        <!--/ End Map -->
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="form-head">
                        <!-- Form -->
                        <form action="<?= route_to('sendmail.email');?>" method="post" class="form">
                        <?= csrf_field(); ?>
                            <div class="form-group">
                                <input name="name" type="text" placeholder="Enter Name" value="<?= set_value('name');?>" class="<?= (isset($validation) && $validation->hasError('name') ? 'is-invalid' : ''); ?>">
                                <small class="text-danger"><?= (isset($validation) && $validation->hasError('name') ? $validation->getError('name') : ''); ?></small>
                            </div>
                            <div class="form-group">
                                <input name="email" type="email" placeholder="Email Address" value="<?= set_value('email');?>" class="<?= (isset($validation) && $validation->hasError('email') ? 'is-invalid' : ''); ?>">
                                <small class="text-danger"><?= (isset($validation) && $validation->hasError('email') ? $validation->getError('email') : ''); ?></small>
                            </div>
                            <div class="form-group">
                                <input name="phone" type="text" minlength="10" maxlength="10" value="<?= set_value('phone');?>" placeholder="Phone" class="<?= (isset($validation) && $validation->hasError('phone') ? 'is-invalid' : ''); ?>">
                                <small class="text-danger"><?= (isset($validation) && $validation->hasError('phone') ? $validation->getError('phone') : ''); ?></small>
                            </div>
                            <div class="form-group">
                                <input name="subject" type="text" placeholder="Subject" value="<?= set_value('subject');?>" class="<?= (isset($validation) && $validation->hasError('subject') ? 'is-invalid' : ''); ?>">
                                <small class="text-danger"><?= (isset($validation) && $validation->hasError('subject') ? $validation->getError('subject') : ''); ?></small>
                            </div>
                            <div class="form-group">
                                <textarea name="message" placeholder="Message" class="<?= (isset($validation) && $validation->hasError('message') ? 'is-invalid' : ''); ?>"><?= set_value('message');?></textarea>
                                <small class="text-danger"><?= (isset($validation) && $validation->hasError('message') ? $validation->getError('message')  : ''); ?></small>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-default btn-block text-dark">Submit</button>
                            </div>
                        </form>
                        <!--/ End Form -->
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-bottom">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <!-- Contact-Info -->
                    <div class="contact-info">
                        <div class="icon"><i class="fa fa-map"></i></div>
                        <h3>Location</h3>
                        <p>NH 31, Bhaganbigha,, P.O.- Sohsarai, Bihar Sharif, Bihar 803118 </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <!-- Contact-Info -->
                    <div class="contact-info">
                        <div class="icon"><i class="fa fa-envelope"></i></div>
                        <h3>Email Address</h3>
                        <a href="mailto:information@gmail.com">dpsinghinstitute@gmail.com</a>
                        <!-- <a href="mailto:admission@myuniversity.com">admission@yourwebsite.com</a> -->
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <!-- Contact-Info -->
                    <div class="contact-info">
                        <div class="icon"><i class="fa fa-phone"></i></div>
                        <h3>Get in Touch</h3>
                        <p>+ (91)9297938001</p>
                        <!-- <p>+ (533) 232 423 455600</p> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- main content -->
<?= $this->endSection(); ?>