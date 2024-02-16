@extends('landing.app')

@section('content')
    <div class="content-wrapper">
        @include('landing.partials.header')
        <section class="wrapper bg-dark text-white">
            <div class="container pt-18 pt-md-20 pb-21 pb-md-21 text-center">
                <div class="row">
                    <div class="col-sm-10 col-md-8 col-lg-6 col-xl-6 col-xxl-5 mx-auto">
                        <h1 class="display-1 text-white mb-3">Get in Touch</h1>
                        <p class="lead px-xl-10 px-xxl-10">Have any questions? Reach out to us from our contact form and we
                            will get back to you shortly.</p>
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /section -->
        <section class="wrapper bg-light">
            <div class="container pb-14 pb-md-16">
                <div class="row">
                    <div class="col mt-n19 mb-16">
                        <div class="card shadow-lg">
                            <div class="row gx-0">
                                <div class="col-lg-6 image-wrapper bg-image bg-cover rounded-top rounded-lg-start d-none d-md-block"
                                    data-image-src="landing/assets/img/photos/tm1.jpg">
                                </div>
                                <!--/column -->
                                <div class="col-lg-6">
                                    <div class="p-10 p-md-11 p-lg-13">
                                        <h2 class="display-4 mb-3">Let’s Talk</h2>
                                        <p class="lead fs-lg">Let's make something great together. We are trusted by over
                                            5000+ clients. Join them by using our services and grow your business.</p>
                                        <p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.
                                            Maecenas faucibus mollis interdum. Fusce dapibus, tellus ac cursus commodo,
                                            tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                                    </div>
                                    <!--/div -->
                                </div>
                                <!--/column -->
                            </div>
                            <!--/.row -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-xl-10 mx-auto">
                        <div class="row gy-10 gx-lg-8 gx-xl-12">
                            <div class="col-lg-8">
                                <form class="contact-form needs-validation" method="post" action="./assets/php/contact.php"
                                    novalidate>
                                    <div class="messages"></div>
                                    <div class="row gx-4">
                                        <div class="col-md-6">
                                            <div class="form-floating mb-4">
                                                <input id="form_name" type="text" name="name" class="form-control"
                                                    placeholder="Jane" required>
                                                <label for="form_name">First Name *</label>
                                                <div class="valid-feedback"> Looks good! </div>
                                                <div class="invalid-feedback"> Please enter your first name. </div>
                                            </div>
                                        </div>
                                        <!-- /column -->
                                        <div class="col-md-6">
                                            <div class="form-floating mb-4">
                                                <input id="form_lastname" type="text" name="surname" class="form-control"
                                                    placeholder="Doe" required>
                                                <label for="form_lastname">Last Name *</label>
                                                <div class="valid-feedback"> Looks good! </div>
                                                <div class="invalid-feedback"> Please enter your last name. </div>
                                            </div>
                                        </div>
                                        <!-- /column -->
                                        <div class="col-md-6">
                                            <div class="form-floating mb-4">
                                                <input id="form_email" type="email" name="email" class="form-control"
                                                    placeholder="jane.doe@example.com" required>
                                                <label for="form_email">Email *</label>
                                                <div class="valid-feedback"> Looks good! </div>
                                                <div class="invalid-feedback"> Please provide a valid email address. </div>
                                            </div>
                                        </div>
                                        <!-- /column -->
                                        <div class="col-md-6">
                                            <div class="form-select-wrapper mb-4">
                                                <select class="form-select" id="form-select" name="department" required>
                                                    <option selected disabled value="">Select a department</option>
                                                    <option value="Sales">Sales</option>
                                                    <option value="Marketing">Marketing</option>
                                                    <option value="Customer Support">Customer Support</option>
                                                </select>
                                                <div class="valid-feedback"> Looks good! </div>
                                                <div class="invalid-feedback"> Please select a department. </div>
                                            </div>
                                        </div>
                                        <!-- /column -->
                                        <div class="col-12">
                                            <div class="form-floating mb-4">
                                                <textarea id="form_message" name="message" class="form-control" placeholder="Your message" style="height: 150px"
                                                    required></textarea>
                                                <label for="form_message">Message *</label>
                                                <div class="valid-feedback"> Looks good! </div>
                                                <div class="invalid-feedback"> Please enter your messsage. </div>
                                            </div>
                                        </div>
                                        <!-- /column -->
                                        <div class="col-12">
                                            <div class="form-check mb-4">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="invalidCheck" required>
                                                <label class="form-check-label" for="invalidCheck"> I agree to <a
                                                        href="#" class="hover">terms and policy</a>. </label>
                                                <div class="invalid-feedback"> You must agree before submitting. </div>
                                            </div>
                                        </div>
                                        <!-- /column -->
                                        <div class="col-12">
                                            <input type="submit" class="btn btn-primary rounded-pill btn-send mb-3"
                                                value="Send message">
                                            <p class="text-muted"><strong>*</strong> These fields are required.</p>
                                        </div>
                                        <!-- /column -->
                                    </div>
                                    <!-- /.row -->
                                </form>
                                <!-- /form -->
                                <!-- /form -->
                            </div>
                            <!--/column -->
                            <div class="col-lg-4">
                                <div class="d-flex flex-row">
                                    <div>
                                        <div class="icon text-primary fs-28 me-4 mt-n1"> <i
                                                class="uil uil-location-pin-alt"></i> </div>
                                    </div>
                                    <div>
                                        <h5 class="mb-1">Address</h5>
                                        <address>Pajaten RT 03 RW 19 Cileunyi Wetan Village Cilleunyi Sub-district Bandung
                                            Regency, West Java</address>
                                    </div>
                                </div>
                                <div class="d-flex flex-row">
                                    <div>
                                        <div class="icon text-primary fs-28 me-4 mt-n1"> <i
                                                class="uil uil-phone-volume"></i> </div>
                                    </div>
                                    <div>
                                        <h5 class="mb-1">Phone</h5>
                                        <p>+62 851 61721727</p>
                                    </div>
                                </div>
                                <div class="d-flex flex-row">
                                    <div>
                                        <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-envelope"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <h5 class="mb-1">E-mail</h5>
                                        <p class="mb-0"><a href="mailto:hi@fathforce.com"
                                                class="link-body">hi@fathforce.com</a></p>
                                    </div>
                                </div>
                            </div>
                            <!--/column -->
                        </div>
                        <!--/.row -->
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /section -->
        <section class="wrapper bg-light">
            <div class="map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2782.782681064874!2d107.75471679918428!3d-6.915915810643513!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68dd0024be8805%3A0x1bd8e4e8d6476db4!2sFatchforce%20Sofware%20house!5e0!3m2!1sid!2sid!4v1705561224333!5m2!1sid!2sid"
                    style="width:100%; height: 500px; border:0" allowfullscreen></iframe>
            </div>
            <!-- /.map -->
        </section>
        <!-- /section -->
    </div>
    @include('landing.partials.footer2')
@endsection
