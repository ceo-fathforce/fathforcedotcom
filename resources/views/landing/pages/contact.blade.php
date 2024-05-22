@extends('landing.app')

@section('content')
    <div class="content-wrapper">
        @include('landing.partials.header')
        @if ($generaltextNames)
        <section class="wrapper bg-dark text-white">
            <div class="container pt-18 pt-md-20 pb-21 pb-md-21 text-center">
                <div class="row">
                    <div class="col-sm-10 col-md-8 col-lg-6 col-xl-6 col-xxl-5 mx-auto">
                        <h1 class="display-1 text-white mb-3">{{ $generaltextNames[12] }}</h1>
                        <p class="lead px-xl-10 px-xxl-10">{{ $generaltextNames[13] }}</p>
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
                                        <h2 class="display-4 mb-3">{{ $generaltextNames[14] }}</h2>
                                        <p class="lead fs-lg">{{ $generaltextNames[15] }}</p>
                                        <p>{{ $generaltextNames[16] }}</p>
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
                            
                            {{-- <div class="col-lg-8">
                                @if(session('success'))
                                        <div class="alert alert-success">
                                            {{ session('success') }}
                                        </div>
                                @endif  
                                <form class="contact-form" method="post" action="{{ route('contact.us.store') }}">
                                    @csrf <!-- Menambahkan token CSRF -->
                                    <div class="messages"></div>
                                    <div class="row gx-4">
                                        <div class="col-md-6">
                                            <div class="form-floating mb-4">
                                                <input id="form_name" type="text" name="first" class="form-control"
                                                    placeholder="Jane" required>
                                                <label for="form_name">First Name *</label>
                                                <div class="valid-feedback"> Looks good! </div>
                                                <div class="invalid-feedback"> Please enter your first name. </div>
                                            </div>
                                        </div>
                                        <!-- /column -->
                                        <div class="col-md-6">
                                            <div class="form-floating mb-4">
                                                <input id="form_lastname" type="text" name="last" class="form-control"
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
                                                    <option selected disabled value="">Gender</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
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
                                                        href="{{ url('/term') }}" class="hover">terms and policy</a>. </label>
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
                            </div> --}}
                            <!--/column -->
                            {{-- <div class="col-lg-4">
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
                            </div> --}}
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
        <div class="container">
            <section class="wrapper bg-light">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="map" style="width: 100%; height: 500px;">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.54838984054564!2d107.75755145559506!3d-6.91757238033024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68dd000858d54d%3A0xfe86447201a591bc!2sPT.%20Fath%20Synergy%20Group!5e0!3m2!1sid!2sid!4v1713411062827!5m2!1sid!2sid" style="width:100%; height: 100%; border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="d-flex flex-column">
                            <div class="d-flex flex-row align-items-center mb-3">
                                <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-location-pin-alt"></i> </div>
                                <div>
                                    <h5 class="mb-1">{{ $generaltextNames[17] }}</h5>
                                    <address>{{ $generaltextNames[18] }}</address>
                                </div>
                            </div>
                            <div class="d-flex flex-row align-items-center mb-3">
                                <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-phone-volume"></i> </div>
                                <div>
                                    <h5 class="mb-1">{{ $generaltextNames[19] }}</h5>
                                    <p>{{ $generaltextNames[20] }}</p>
                                </div>
                            </div>
                            <div class="d-flex flex-row align-items-center">
                                <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-envelope"></i> </div>
                                <div>
                                    <h5 class="mb-1">{{ $generaltextNames[21] }}</h5>
                                    <p class="mb-0"><a href="mailto:hi@fathforce.com" class="link-body">{{ $generaltextNames[22] }}</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        
        <!-- /section -->
    </div>
    @endif
    @include('landing.partials.footer2')
@endsection