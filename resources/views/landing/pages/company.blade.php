@extends('landing.app')

@section('content')
<div class="content-wrapper">
  @include('landing.partials.header')
  <section class="wrapper bg-white">
    <div class="container pt-10 pt-md-14 text-center">
      <div class="row">
        <div class="col-xl-6 mx-auto">
          <h1 class="display-1 mb-4">Hello! This is Fathforce</h1>
          <p class="lead fs-lg mb-0">We Boost Your School & Bussiness</p>
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
    <figure class="position-absoute" style="bottom: 0; left: 0; z-index: 2;"><img src="landing/assets/img/photos/companyheader2.jpg" alt="" /></figure>
  </section>
  <!-- /section -->
  <section class="wrapper bg-light angled upper-end lower-end">
    <div class="container py-14 py-md-16">
      <div class="row gy-10 gy-sm-13 gx-md-8 gx-xl-12 align-items-center mb-10 mb-md-12">
        <!--/column -->
        <div class="col-lg-6">
          <h2 class="fs-16 text-uppercase text-primary mb-3">Who Are We?</h2>
          <h3 class="display-3 mb-5">WE ARE PT. FATH SYNERGY GROUP</h3>
          <p class="mb-6">Fathforce is a web, mobile, iot, game and it consulting software development company in
            Bandung Regency, Indonesia. We build systems that are tailored to the needs and have created
            many applications for companies, industries, hospitality, schools, social institutions and others. We prioritize
            quality and stability in the system built together with a young and dedicated team.</p>
          <div class="row align-items-center counter-wrapper gy-6">
            <div class="col-md-6">
              <h3 class="counter counter-lg mb-1">99.7%</h3>
              <h5 class="mb-0">Customer Satisfaction</h5>
            </div>
            <!--/column -->
            <div class="col-md-6">
              <h3 class="counter counter-lg mb-1">12x</h3>
              <h5 class="mb-0">Revenue Growth</h5>
            </div>
            <!--/column -->
          </div>
          <!--/.row -->
        </div>
        <!--/column -->        
        <div class="col-lg-6">
          <div class="row gx-md-5 gy-5">
            <div class="col-md-6">
              <figure class="rounded"><img src="landing/assets/img/photos/crew.jpg" alt=""></figure>
            </div>
            <!--/column -->
            <div class="col-md-6 align-self-end">
              <figure class="rounded"><img src="landing/assets/img/photos/crew2.jpg" alt=""></figure>
            </div>
            <!--/column -->
            <div class="col-12">
              <figure class="rounded mx-md-5"><img src="landing/assets/img/photos/crew3.jpg" alt=""></figure>
            </div>
            <!--/column -->
          </div>
          <!--/.row -->
        </div>
      </div>
      <!--/.row -->
      <div class="row gx-lg-8 gx-xl-12 gy-6 mb-7 mb-md-9">
        <div class="col-lg-4">
          <div class="d-flex flex-row">
            <div>
              <div class="icon btn btn-block pe-none btn-soft-primary me-4 w-10 h-10"> <span class="number fs-18">1</span> </div>
            </div>
            <div>
              <h3>Our Vision</h3>
              <p class="mb-2">Become a publicly listed company that brings optimal success to education and companies in Indonesia.</p>
            </div>
          </div>
        </div>
        <!--/column -->
        <div class="col-lg-4">
          <div class="d-flex flex-row">
            <div>
              <div class="icon btn btn-block pe-none btn-soft-primary me-4 w-10 h-10"> <span class="number fs-18">2</span> </div>
            </div>
            <div>
              <h3>Our Mission</h3>
              <p class="mb-2"> Partnering, listening and providing olutions for companies and education in Indonesia. Create an integrated system from upstream to downstream that is full of benefits. Make all work as worship.</p>
            </div>
          </div>
        </div>
        <!--/column -->
        <div class="col-lg-4">
          <div class="d-flex flex-row">
            <div>
              <div class="icon btn btn-block pe-none btn-soft-primary me-4 w-10 h-10"> <span class="number fs-18">3</span> </div>
            </div>
            <div>
              <h3>Our Core Values</h3>
              <p class="mb-2">Implement all aspects of the business in accordance with Islamic guidelines (Syar'i)</p>
            </div>
          </div>
        </div>
        <!--/column -->
      </div>
      <!--/.row -->
    </div>
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->
  <section class="wrapper bg-soft-primary">
    <div class="container pt-16 pb-14 pb-md-0">
      <div class="row gx-lg-8 gx-xl-0 align-items-center">
        <div class="col-md-5 col-lg-5 col-xl-4 offset-xl-1 d-none d-md-flex position-relative align-self-end">
          <figure><img src="landing/assets/img/photos/ceo2.png" alt=""></figure>
        </div>
        <!--/column -->
        <div class="col-md-7 col-lg-6 col-xl-6 col-xxl-5 offset-xl-1">
          <div class="swiper-container dots-start dots-closer mt-md-10 mb-md-15" data-margin="30" data-dots="true">
            <div class="swiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <blockquote class="icon fs-lg">
                    <p>"Hope and strive to continue to provide the best
                      for the progress of the company and education in
                      Indonesia with Fath Family products"</p>
                    <div class="blockquote-details">
                      <div class="info ps-0">
                        <h5 class="mb-1">Cecep Abu Azhar</h5>
                        <p class="mb-0">Founder</p>
                      </div>
                    </div>
                  </blockquote>
                </div>
                <!--/.swiper-slide -->
                <div class="swiper-slide">
                  <blockquote class="icon fs-lg">
                    <p>“Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vestibulum ligula porta felis euismod semper. Cras justo odio consectetur adipiscing dapibus curabitur blandit.”</p>
                    <div class="blockquote-details">
                      <div class="info ps-0">
                        <h5 class="mb-1">M. Randy Andrian</h5>
                        <p class="mb-0">Marketing Specialist</p>
                      </div>
                    </div>
                  </blockquote>
                </div>
                <!--/.swiper-slide -->
                <div class="swiper-slide">
                  <blockquote class="icon fs-lg">
                    <p>“Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vestibulum ligula porta felis euismod semper. Cras justo odio consectetur adipiscing dapibus curabitur blandit.”</p>
                    <div class="blockquote-details">
                      <div class="info ps-0">
                        <h5 class="mb-1">Nikolas Brooten</h5>
                        <p class="mb-0">Sales Manager</p>
                      </div>
                    </div>
                  </blockquote>
                </div>
                <!--/.swiper-slide -->
              </div>
              <!--/.swiper-wrapper -->
            </div>
            <!-- /.swiper -->
          </div>
          <!-- /.swiper-container -->
        </div>
        <!--/column -->
      </div>
      <!--/.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->
  <section id="snippet-2" class="wrapper bg-light wrapper-border">
    <div class="container pt-15 pt-md-17 pb-13 pb-md-15">
      <h2 class="display-4 mb-7">Milestone</h2>
      <div class="row gx-lg-8 gx-xl-12 gy-6 process-wrapper line">
        <div class="col-md-6 col-lg-3"> <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none mb-4"><span class="number">01</span></span>
          <h4 class="mb-1">2017</h4>
          <p class="mb-0 fs-16">Cecep Saeful Azhar Hidayat founded a software house company called Fathforce. It focuses on web-based application development.</p>
        </div>
        <!--/column -->
        <div class="col-md-6 col-lg-3"> <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none mb-4"><span class="number">02</span></span>
          <h4 class="mb-1">2021</h4>
          <p class="mb-0 fs-16">Fathforce became PT Fathforce Sinergi Global. Application development began to be integrated between the website and mobile, with the use of api that helped bridge data communication between the two.</p>
        </div>
        <!--/column -->
        <div class="col-md-6 col-lg-3"> <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none mb-4"><span class="number">03</span></span>
          <h4 class="mb-1">2023</h4>
          <p class="mb-0 fs-16">Fathforce is incorporated as PT. Fath Synergy Group, has its main office at Kp. Pajaten RT 03 RW 19 Cileunyi Wetan Village, Cilleunyi District, Bandung Regency, West Java 40622.</p>
        </div>
        <!--/column -->
        <div class="col-md-6 col-lg-3"> <span class="icon btn btn-circle btn-lg btn-primary pe-none mb-4"><span class="number">04</span></span>
          <h4 class="mb-1">Continued</h4>
          <p class="mb-0 fs-16">We will continue to develop our services to provide the best service for our clients.</p>
        </div>
        <!--/column -->
      </div>
      <!--/.row -->
    </div>
  </section>
  <!-- /section -->
  <section class="wrapper bg-light angled upper-end lower-end">
    <div class="container py-14 py-md-16">
      <div class="row gy-10 gy-sm-13 gx-md-8 gx-xl-12 align-items-center mb-10 mb-md-12">
        <!--/column -->
        <div class="col-lg-12">
          <h3 class="display-3 mb-5">Legalization</h3>
          <figure class="rounded"><img src="landing/assets/img/photos/NIB.png"></figure>
          <div class="row align-items-center counter-wrapper gy-6">
          </div>
          <!--/.row -->
          <div class="col-lg-6">
          </div>
        <!--/column -->
        </div>
      </div>
    </div>
    <!-- /.container -->
  </section>
  <section class="wrapper bg-soft-primary angled upper-end">
    <div class="container py-14 py-md-16">
        <div class="row mb-10">
            <div class="col-xl-10 mx-auto">
                <div class="row align-items-center counter-wrapper gy-6 text-center">
                    <div class="col-md-3">
                        <img src="landing/assets/img/icons/lineal/check.svg" class="svg-inject icon-svg icon-svg-lg text-primary mb-3" alt="" />
                        <h3 class="counter">{{ $completedProjects }}</h3>
                        <p>Completed Projects</p>
                    </div>
                    <!--/column -->
                    <div class="col-md-3">
                        <img src="landing/assets/img/icons/lineal/user.svg" class="svg-inject icon-svg icon-svg-lg text-primary mb-3" alt="" />
                        <h3 class="counter">{{ $totalProducts }}</h3>
                        <p>Total Product</p>
                    </div>
                    <!--/column -->
                    <div class="col-md-3">
                        <img src="landing/assets/img/icons/lineal/briefcase-2.svg" class="svg-inject icon-svg icon-svg-lg text-primary mb-3" alt="" />
                        <h3 class="counter">{{ $satisfiedCostumers }}</h3>
                        <p>Satisfied Customers</p>
                    </div>
                    <!--/column -->
                    <div class="col-md-3">
                        <img src="landing/assets/img/icons/lineal/award-2.svg" class="svg-inject icon-svg icon-svg-lg text-primary mb-3" alt="" />
                        <h3 class="counter">{{ $employees }}</h3>
                        <p>Our Employees</p>
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
  <section class="wrapper bg-light angled upper-end lower-end">
    <div class="container pt-18 pb-14 pt-md-19 pb-md-16">
      <div class="row gx-md-8 gx-xl-12 gy-10 align-items-center">
        <div class="col-md-8 col-lg-6 offset-lg-0 col-xl-5 offset-xl-1 position-relative">
          <div class="shape bg-dot primary rellax w-17 h-21" data-rellax-speed="1" style="top: -2rem; left: -1.4rem;"></div>
          <figure class="rounded"><img src="landing/assets/img/photos/atacontact.jpg" alt=""></figure>
        </div>
        <!--/column -->
        <div class="col-lg-6">
          <img src="landing/assets/img/icons/lineal/telemarketer.svg" class="svg-inject icon-svg icon-svg-md mb-4" alt="" />
          <h2 class="display-4 mb-8">Convinced yet? Let's make something great together.</h2>
          <div class="d-flex flex-row">
            <div>
              <div class="icon text-primary fs-28 me-6 mt-n1"> <i class="uil uil-location-pin-alt"></i> </div>
            </div>
            <div>
              <h5 class="mb-1">Address</h5>
              <address>Pajaten RT 03 RW 19 Cileunyi Wetan Village Cilleunyi Sub-district Bandung Regency, West Java</address>
            </div>
          </div>
          <div class="d-flex flex-row">
            <div>
              <div class="icon text-primary fs-28 me-6 mt-n1"> <i class="uil uil-phone-volume"></i> </div>
            </div>
            <div>
              <h5 class="mb-1">Phone</h5>
              <p class="mb-0"><a href="https://api.whatsapp.com/send?phone=6285161721727&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202." class="link-body">+62 851 61721727</a></p>
            </div>
          </div>
          <div class="d-flex flex-row">
            <div>
              <div class="icon text-primary fs-28 me-6 mt-n1"> <i class="uil uil-envelope"></i> </div>
            </div>
            <div>
              <h5 class="mb-1">E-mail</h5>
              <p class="mb-0"><a href="mailto:hi@fathforce.com" class="link-body">hi@fathforce.com</a></p>
            </div>
          </div>
        </div>
        <!--/column -->
      </div>
      <!--/.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->
</div>
@include('landing.partials.footer2')
@endsection