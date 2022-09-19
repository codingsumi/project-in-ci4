<?= $this->extend('frontend/layouts/app'); ?>
<?= $this->section('title'); ?>
Home
<?= $this->endSection(); ?>
<?= $this->section('content'); ?>
    <!-- Slider Area -->
    <section class="home-slider">
        <div class="slider-active">
            <div class="single-slider overlay" style="background-image:url(<?= base_url('assets/images/new%20dps-n%20image/Blank-Template-Facebook-Pages.jpg'); ?>)"></div>
            <div class="single-slider overlay" style="background-image:url(<?= base_url('assets/images/new%20dps-n%20image/DSC_0123.jpg'); ?>)"></div>
            <div class="single-slider overlay" style="background-image:url(<?= base_url('assets/images/new%20dps-n%20image/Dairy visit2.jpg'); ?>)"></div>
            <!--/ End Single Slider -->
        </div>
    </section>
    <!--/ End Slider Area -->

    <!-- Features -->
    <section class="our-features section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>D. P. Singh Institute of Education (nursing) -A World Class Institute</h2>
                        <p>D. P. Singh Institute of Education (nursing) was established by the trust, Shantidoot in 2015. and runs under the umbrella of GAUTAM GROUP OF INSTITUTIONS.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <!-- Single Feature -->
                    <div class="single-feature">
                        <div class="feature-head">
                            <img src="<?= base_url('assets/images/custom/dpsbuild.jpeg'); ?>" alt="#">
                        </div>
                        <div class="tsection">
                            <h2>Our Campus Infrastructure</h2>
                            <p>Wide range explored infrastructure with all the required norms. Upgraded Laboratories with highly sophisticated techniques.</p>
                        </div>
                    </div>
                    <!--/ End Single Feature -->
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <!-- Single Feature -->
                    <div class="single-feature">
                        <div class="feature-head">
                            <img src="<?= base_url('assets/images/custom/admi.jpg'); ?>" alt="#">
                        </div>
                        <div class="tsection">
                            <h2>Administration - Management</h2>
                            <p>We are with top management & professionals as per the courses we offer. Professionals along with experienced professors deals with the related Courses.</p>
                        </div>
                    </div>
                    <!--/ End Single Feature -->
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <!-- Single Feature -->
                    <div class="single-feature">
                        <div class="feature-head">
                            <img src="<?= base_url('assets/images/custom/fac.jpg'); ?>" alt="#">
                        </div>
                        <div class="tsection">
                            <h2>Facilities–Infrastructure/Faculty/Vehicle</h2>
                            <p>We are specialized in offering top infrastructure & facilities</p>
                        </div>
                    </div>
                    <!--/ End Single Feature -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Features -->
    <section class="social-tab mb-4" style="background-color: #DAE6F1;">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-6 p-3">
                    <div class="d-flex justify-content-between align-items-center pb-4">
                        <div class=""><i class="fa fa-calendar" style="font-size: 40px; color: #4b77bf;"></i></div>
                        <div class="">
                            <h5 class="column-title">Notice</h5>
                        </div>
                        <div class=""><a class="btn btn-warning" href="http://www.dpsinghinstitute.com/contact.php">Contact Us</a></div>
                    </div>
                    <div style="position: relative; display: block;overflow: hidden;    max-height: 400px;">
                        <div class="marquee">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent">
                                    <p>DPS-N have the notice for the student that they should submit their assignments upto 20-02-2021.</p>

                                    <p>&nbsp;</p>
                                    <span class="badge text-danger">19 January, 2021 </span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent">
                                    <p>College Will be open from Jan 27, 2021&nbsp;on its time schedule and we will have the Republic day celebration on 26th of Jan at 7:00 am.</p>
                                    <span class="badge text-danger">17 January, 2021 </span>
                                </li>
                            </ul>
                        </div>
                        <style>
                            .marquee {
                                top: 6em;
                                position: relative;
                                box-sizing: border-box;
                                animation: marquee 15s linear infinite;
                                height: 500px;
                            }

                            .marquee:hover {
                                animation-play-state: paused;
                            }

                            /* Make it move! */
                            @keyframes marquee {
                                0% {
                                    top: 8em
                                }

                                100% {
                                    top: -11em
                                }
                            }
                        </style>

                    </div>
                </div>

                <div class="col-md-4 col-sm-6 p-3" style="background-color: #F6F6F6;">
                    <div id="fb-root"></div>
                    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v10.0&autoLogAppEvents=1" nonce="ZxwvLZwp"></script>
                    <div class="d-flex justify-content-between align-items-center pb-4">
                        <div class=""><i class="fa fa-facebook" style="font-size: 40px; color: #4b77bf;"></i></div>
                        <div class="">
                            <h5 class="column-title">Facebook</h5>
                        </div>
                        <div class=""><a class="btn btn-warning" href="https://www.facebook.com/DPSinghInstitute" target="_blank">Like Us</a></div>
                    </div>
                    <div class="">
                        <div class="fb-page " data-href="https://www.facebook.com/DPSinghInstitute/" data-tabs="timeline" data-width="" data-height="" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="false">
                            <blockquote cite="https://www.facebook.com/DPSinghInstitute/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/DPSinghInstitute/">D. P. Singh Institute Of Education</a></blockquote>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- Courses -->
    <section class="courses section-bg section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Our <span>Courses</span> </h2>
                        <p>D. P. Singh Institute Of Education (nursing) offers following courses of nursing incuding several departments of ANM, GNM and Basic B. Sc. Nursing </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="course-slider">
                        <!-- Single Course -->
                        <div class="single-course">
                            <div class="course-head overlay">
                                <img src="<?= base_url('assets/images/new%20dps-n%20image/1600x960_123697-bsc-nursing.jpg'); ?>" alt="#">
                                <a href="courses.php" class="btn"><i class="fa fa-link"></i></a>
                            </div>

                            <div class="single-content">
                                <h4><a href="courses.php"><span>Nursing</span> Basic B. Sc. Nursing</a></h4>
                                <p>This course of Basic B. Sc. Nursing of Nursing aquires Two years (04 years)</p>
                            </div>
                        </div>
                        <!--/ End Single Course -->
                        <!-- Single Course -->
                        <div class="single-course">
                            <div class="course-head overlay">
                                <img src="<?= base_url('assets/images/custom/anm.jpg'); ?>" alt="#">
                                <a href="courses.php" class="btn"><i class="fa fa-link"></i></a>
                            </div>
                            <div class="single-content">
                                <h4><a href="courses.php"><span>Nursing</span>Auxiliary Nurse Midwife (ANM)</a></h4>
                                <p>This course of Auxiliary Nurse Midwife of Nursing aquires Two years (2 years)</p>
                            </div>
                        </div>
                        <!--/ End Single Course -->
                        <!-- Single Course -->
                        <div class="single-course">
                            <div class="course-head overlay">
                                <img src="<?= base_url('assets/images/new%20dps-n%20image/logo2_400x400.jfif'); ?>" alt="#">
                                <a href="courses.php" class="btn"><i class="fa fa-link"></i></a>
                            </div>
                            <div class="single-content">
                                <h4><a href="courses.php"><span>Nursing</span>General Nursing and Midwifery (GNM)</a></h4>
                                <p>This course of General Nursing and Midwifery (GNM) of Nursing aquires Three years (3 years) </p>
                            </div>
                        </div>
                        <!--/ End Single Course -->
                        <!-- Single Course -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Courses -->
    <!-- Call To Action -->
    <section class="cta" data-stellar-background-ratio="0.1">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 offset-lg-6 col-12">
                    <div class="cta-inner overlay">
                        <div class="text-content">
                            <h2>Clinical Training Facility</h2>
                            <p>The students of D. P. Singh Institute Of Education (nursing) are getting their clinical experience training at following hospitals:-</p>
                            <ul>
                                <li>1. Khushi Clinic, Biharsharif (Parent Hospital)</li>
                                <li>2. Prabhat Nursing Home, Chandi</li>
                                <li>2. Prabhat Nursing Home, Chandi</li>
                                <li>3. Vardhaman Institute of Medical Sciences, Pawapuri</li>
                                <li>4. Sadar Hospital, Biharsharif</li>
                                <li>5. Sub-divisional Hospital, Hilsa</li>
                                <li>6. Referral Hospital, Chandi</li>
                                <li>7. Primary Health Centre, Tharthari and;</li>
                                <li>8. Bihar State Institute Mental Health & Allied Sciences, Koelwar (Bhojpur)</li>
                            </ul>
                            <div class="button">
                                <a class="btn primary" href="contact.php">Register Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Call To Action -->
    <!-- Events -->
    <section class="events section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>GALLERY - <span>DPS-N</span></h2>
                        <p><b>D. P. Singh Institute Of Education (nursing) </b> is sharing some of the gallery images of campus and students.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="event-slider">
                        <!-- Single Event -->
                        <div class="single-event">
                            <div class="head overlay">
                                <img src="<?= base_url('assets/images/new dps-n image/DSC_0226.JPG'); ?>" alt="#">
                                <a href="<?= base_url('assets/images/custom/shushila4.jpg'); ?>" data-fancybox="photo" class="btn"><i class="fa fa-search"></i></a>
                            </div>
                            <div class="event-content">
                                <h4><a href="activities.php">DPS-N-Classroom</a></h4>
                            </div>
                        </div>
                        <!--/ End Single Event -->
                        <!-- Single Event -->
                        <div class="single-event">
                            <div class="head overlay">
                                <img src="<?= base_url('assets/images/new%20dps-n%20image/DSC_0249.JPG'); ?>" alt="#">
                                <a href="<?= base_url('assets/images/custom/shushila5.png'); ?>" data-fancybox="photo" class="btn"><i class="fa fa-search"></i></a>
                            </div>
                            <div class="event-content">
                                <h4><a href="activities.php">DPS-N Laboratory</a></h4>
                            </div>
                        </div>
                        <!--/ End Single Event -->
                        <!-- Single Event -->
                        <div class="single-event">
                            <div class="head overlay">
                                <img src="<?= base_url('assets/images/new%20dps-n%20image/DSC_0241.JPG'); ?>" alt="#">
                                <a href="<?= base_url('assets/images/custom/shushila5.png'); ?>" data-fancybox="photo" class="btn"><i class="fa fa-search"></i></a>
                            </div>
                            <div class="event-content">

                                <h4><a href="activities.php">DPS-N Library</a></h4>

                            </div>
                        </div>
                        <!--/ End Single Event -->
                        <!-- Single Event -->
                        <div class="single-event">
                            <div class="head overlay">
                                <img src="<?= base_url('assets/images/new%20dps-n%20image/DSC_0123.JPG'); ?>" alt="#">
                                <a href="<?= base_url('assets/images/custom/shushila5.png'); ?>" data-fancybox="photo" class="btn"><i class="fa fa-search"></i></a>
                            </div>
                            <div class="event-content">

                                <h4><a href="activities.php">DPS-N Students </a></h4>

                            </div>
                        </div>
                        <!--/ End Single Event -->
                        <!-- Single Event -->
                        <div class="single-event">
                            <div class="head overlay">
                                <img src="<?= base_url('assets/images/new%20dps-n%20image/DSC_0207.JPG'); ?>" alt="#">
                                <a href="<?= base_url('assets/images/new%20dps-n%20image/DSC_0207.JPG'); ?>" data-fancybox="photo" class="btn"><i class="fa fa-search"></i></a>
                            </div>
                            <div class="event-content">

                                <div class="title">
                                    <h4><a href="activities.php">DPS-N-Building</a></h4>
                                    <p></p>
                                </div>
                                <!-- <div class="button">
										<a href="activities.php" class="btn">Join Event</a>
									</div> -->
                            </div>
                        </div>
                        <!--/ End Single Event -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Events -->

    <!-- Blogs -->
    <section class="blog section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Blogs</span></h2>
                        <p>D. P. Singh Institute Of Education (nursing) welcomes you to visit our institution to see for yourself what we have to offer.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="blog-slider">

                        <!-- Single Blog -->
                        <div class="single-blog">
                            <div class="blog-head overlay">

                                <img src="<?= base_url('assets/images/custom/blog.jpg'); ?>" alt="#">
                            </div>
                            <div class="blog-content">
                                <h4 class="blog-title"><b><a href="blog-details.php?id=13">Population of Bihar : Challenges & Remedies</a></b></h4>
                                <div class="blog-info" style="font-size:10px">
                                    <a href="#"><i class="fa fa-user"></i>By: Dr. Rajni Kr. Singh (Social Activist)</a>


                                </div>
                                <p>
                                <p><strong>Introduction :</strong></p>

                                <p>Population pressure on the land my load to over-cropping, soil degradation, and poor nutrition for an entire community. It may force people to migrate, wit....</p>
                                <div class="button">
                                    <a href="#" style="font-size:14px"><i class="fa fa-calendar"></i> 28-01-2022</a>
                                </div>
                            </div>
                        </div>
                        <div class="single-blog">
                            <div class="blog-head overlay">

                                <img src="<?= base_url('assets/images/custom/blog.jpg'); ?>" alt="#">
                            </div>
                            <div class="blog-content">
                                <h4 class="blog-title"><b><a href="blog-details.php?id=12">Social Violence : A Schematic Framework</a></b></h4>
                                <div class="blog-info" style="font-size:10px">
                                    <a href="#"><i class="fa fa-user"></i>By: Dr. Avijeet Kr. Gautam (Chairman, Gautam Group)</a>


                                </div>
                                <p>
                                <p>In the Present article, an attempt is made to analyse the views of Western American and Indian social scientists about violence and its different dimensions. Its social phenomenon has escalated in ....</p>
                                <div class="button">
                                    <a href="#" style="font-size:14px"><i class="fa fa-calendar"></i> 27-01-2022</a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Blog -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Blogs -->
    <section class="testimonials overlay section" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="testimonial-slider">
                        <!-- Single Testimonial -->
                        <div class="single-testimonial">
                            <img src="<?= base_url('assets/images/custom/small_profile.png'); ?>" alt="#">
                            <div class="main-content">
                                <h4 class="name">Vishal Shrivastava</h4>
                                <p>The faculty are very friendly. They motivate the students when they fall down.the infrastructure are very friendly.we can roam here and there. </p>
                            </div>
                        </div>
                        <!--/ End Single Testimonial -->
                        <!-- Single Testimonial -->
                        <div class="single-testimonial">
                            <img src="<?= base_url('assets/images/custom/small_profile.png'); ?>" alt="#">
                            <div class="main-content">
                                <h4 class="name">Aditi Verma</h4>
                                <p>Lab facilities are good. hostel provides home feelings.there are 24/7 lab where we can expose ourself. nearly 50% of the students are placed.</p>
                            </div>
                        </div>
                        <!--/ End Single Testimonial -->
                        <!-- Single Testimonial -->
                        <div class="single-testimonial">
                            <img src="<?= base_url('assets/images/custom/small_profile.png'); ?>" alt="#">
                            <div class="main-content">
                                <h4 class="name">Shargun Mitra</h4>
                                <p> I'm a final year student. They give us proper coaching The college provides various trainings for the placement. They concentrate on each and every student to get placed.</p>
                            </div>
                        </div>
                        <!--/ End Single Testimonial -->
                        <!-- Single Testimonial -->
                        <div class="single-testimonial">
                            <img src="<?= base_url('assets/images/custom/small_profile.png'); ?>" alt="#">
                            <div class="main-content">
                                <h4 class="name">Vaibhav Kumar</h4>
                                <p>The environment is peaceful. The faculties are very friendly. This the place where you can learn many things. This the place where you grow yourself as a person and as professional.</p>
                            </div>
                        </div>
                        <!--/ End Single Testimonial -->
                    </div>
                </div>
            </div>
        </div>
    </section>
<?= $this->endSection(); ?>