@extends('landing.app')

@section('content')
<div class="content-wrapper">
@include('landing.partials.header')
  <section class="wrapper bg-soft-primary">
    <div class="container pt-10 pb-19 pt-md-14 pb-md-20 text-center">
      <div class="row">
        <div class="col-md-8 col-lg-7 col-xl-6 col-xxl-5 mx-auto mb-11">
          <h1 class="display-1 mb-3">Our Services</h1>
          <p class="lead px-lg-7 px-xl-7 px-xxl-6">We are a creative company that focuses on establishing <span class="underline">long-term relationships</span> with customers.</p>
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->
  <section class="wrapper bg-light angled upper-end">
    <div class="container pb-14 pb-md-16">
      <div class="row mb-8">
        <div class="col-12 mt-n20">
          <figure class="rounded"><img src="landing/assets/img/photos/crew.jpg" /></figure>
          <div class="row">
            <div class="col-xl-10 mx-auto">
              <div class="card image-wrapper bg-full bg-image bg-overlay bg-overlay-400 text-white mt-n5 mt-lg-0 mt-lg-n50p mb-lg-n50p border-radius-lg-top" data-image-src="./assets/img/photos/bg3.jpg">
                <div class="card-body p-9 p-xl-10">
                  <div class="row align-items-center counter-wrapper gy-4 text-center">
                    <div class="col-6 col-lg-3">
                      <h3 class="counter counter-lg text-white">31</h3>
                      <p>Completed Projects</p>
                    </div>
                    <!--/column -->
                    <div class="col-6 col-lg-3">
                      <h3 class="counter counter-lg text-white">18</h3>
                      <p>Total Product</p>            
                    </div>
                    <!--/column -->
                    <div class="col-6 col-lg-3">
                      <h3 class="counter counter-lg text-white">50</h3>
                      <p>Satisfied Customers</p>
                    </div>
                    <!--/column -->                    
                    <!--/column -->
                    <div class="col-6 col-lg-3">
                      <h3 class="counter counter-lg text-white">12</h3>
                      <p>Expert Employees</p>
                    </div>
                  </div>
                  <!--/.row -->
                </div>
                <!--/.card-body -->
              </div>
              <!--/.card -->
            </div>
            <!-- /column -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
        <!--/column -->
            <div class="row d-flex align-items-start gy-10">
              <div class="col-lg-5 position-lg-sticky" style="top: 8rem;">
                <h3 class="display-2 mb-5">The service We offer is specifically designed to meet your needs.</h3>
                <p class="mb-7">Cras mattis consectetur purus sit amet fermentum. Donec ullamcorper nulla non metus auctor fringilla. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
              </div>
              <!-- /column -->
              <div class="col-lg-6 ms-auto">
                <div class="card bg-soft-fuchsia mb-6">
                  <div class="card-body d-flex flex-row">
                    <div>
                      <img src="landing/assets/img/icons/lineal/browser.svg" class="svg-inject icon-svg icon-svg-md text-fuchsia me-5" alt="" />
                    </div>
                    <div>
                      <h3 class="fs-21 mb-2">Web development</h3>
                      <p class="mb-0">We build websites from start to finish, starting with an analysis tailored to the needs of a particular business flow. Propose the best and implement according to their needs.</p>
                    </div>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
                <div class="card bg-soft-aqua mb-6">
                  <div class="card-body d-flex flex-row">
                    <div>
                      <img src="landing/assets/img/icons/lineal/smartphone.svg" class="svg-inject icon-svg icon-svg-md text-aqua me-5" alt="" />
                    </div>
                    <div>
                      <h3 class="fs-21 mb-2">Mobile Development</h3> 
                      <p class="mb-0">We build mobile applications from your business design, and use flutter technology which will make it easier to integrate with various android, ios and desktop platforms.</p>
                    </div>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
                <div class="card bg-soft-yellow mb-6">
                  <div class="card-body d-flex flex-row">
                    <div>
                      <img src="landing/assets/img/icons/lineal/cloud-computing.svg" class="svg-inject icon-svg icon-svg-md text-yellow me-5" alt="" />
                    </div>
                    <div>
                      <h3 class="fs-21 mb-2">Cloud VPS</h3>
                      <p class="mb-0">We built cloud infrastructure on top of vps for several years. we see the cloud will be one of the directions of future technological change. and aws became one of our choices after we tried digital ocean, google cloud and others.</p>
                    </div>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
                <div class="card bg-soft-leaf mb-6">
                  <div class="card-body d-flex flex-row">
                    <div>
                      <img src="landing/assets/img/icons/lineal/cloud-computing-3.svg" class="svg-inject icon-svg icon-svg-md text-leaf me-5" alt="" />
                    </div>
                    <div>
                      <h3 class="fs-21 mb-2">Internet of Things Arduino</h3>
                      <p class="mb-0">We build integrations using the Arduino internet of things (IoT) to increase efficiency and better application connectivity.</p>
                    </div>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
                <div class="card bg-soft-orange mb-6">
                  <div class="card-body d-flex flex-row">
                    <div>
                      <img src="landing/assets/img/icons/lineal/handshake.svg" class="svg-inject icon-svg icon-svg-md text-orange me-5" alt="" />
                    </div>
                    <div>
                      <h3 class="fs-21 mb-2">IT Consultant</h3>
                      <p class="mb-0">Design the system you need according to your needs, we have more than 10 years of experience to help plan a system that fits your needs.</p>
                    </div>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
                <div class="card bg-soft-grape">
                  <div class="card-body d-flex flex-row">
                    <div>
                      <img src="landing/assets/img/icons/lineal/calculator.svg" class="svg-inject icon-svg icon-svg-md text-grape me-5" alt="" />
                    </div>
                    <div>
                      <h3 class="fs-21 mb-2">Game Development</h3>
                      <p class="mb-0">We build games from start to finish, starting with an analysis tailored to the needs of a particular flow. Propose the best and implement according to their needs.</p>
                    </div>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /column -->
            </div>
            <!-- /.row -->
          </div>
            <div class="container pt-15 pt-md-17 pb-13 pb-md-15">
              <div class="row gy-10 gy-sm-13 gx-lg-3 align-items-center">
                <div class="col-md-8 col-lg-6 position-relative">
                  <div class="shape bg-dot primary rellax w-17 h-21" data-rellax-speed="1" style="top: -2rem; left: -1.9rem;"></div>
                  <div class="shape rounded bg-soft-primary rellax d-md-block" data-rellax-speed="0" style="bottom: -1.8rem; right: -1.5rem; width: 85%; height: 90%; "></div>
                  <figure class="rounded"><img src="landing/assets/img/photos/example3.png" alt="" /></figure>
                </div>
                <!--/column -->
                <div class="col-lg-5 col-xl-4 offset-lg-1">
                  <h2 class="h1 mb-3">How It Works?</h2>
                  <p class="lead fs-lg mb-6">So here are three working steps why our valued customers choose us.</p>
                  <div class="d-flex flex-row mb-6">
                    <div>
                      <span class="icon btn btn-circle btn-primary pe-none me-5"><span class="number fs-18">1</span></span>
                    </div>
                    <div>
                      <h4 class="mb-1">Collect Ideas</h4>
                      <p class="mb-0">Nulla vitae elit libero pharetra augue dapibus. Praesent commodo cursus.</p>
                    </div>
                  </div>
                  <div class="d-flex flex-row mb-6">
                    <div>
                      <span class="icon btn btn-circle btn-primary pe-none me-5"><span class="number fs-18">2</span></span>
                    </div>
                    <div>
                      <h4 class="mb-1">Data Analysis</h4>
                      <p class="mb-0">Vivamus sagittis lacus vel augue laoreet. Etiam porta sem malesuada magna.</p>
                    </div>
                  </div>
                  <div class="d-flex flex-row">
                    <div>
                      <span class="icon btn btn-circle btn-primary pe-none me-5"><span class="number fs-18">3</span></span>
                    </div>
                    <div>
                      <h4 class="mb-1">Finalize Product</h4>
                      <p class="mb-0">Cras mattis consectetur purus sit amet. Aenean lacinia bibendum nulla sed.</p>
                    </div>
                  </div>
                </div>
                <!--/column -->
              </div>
              <!--/.row -->
            </div>
  </section>
  <!-- /section -->
  <section class="wrapper image-wrapper bg-image bg-overlay " data-image-src="landing/assets/img/photos/example5.png">
    <div class="container py-18 text-center">
      <div class="row">
        <div class="col-lg-10 col-xl-10 col-xxl-8 mx-auto">
          <a href="https://youtu.be/Fb3EXve-Z_k?si=tlJnDzPNkBMeZK2j" class="btn btn-circle btn-white btn-play ripple mx-auto mb-5" data-glightbox><i class="icn-caret-right"></i></a>
          <h2 class="display-4 px-lg-10 px-xl-13 px-xxl-10 mb-10 text-white">Find out everything you need to know about us</h2>
        </div>
        <!--/column -->
      </div>
      <!--/.row -->
    </div>
    <!-- /.container -->
  </section>
  <section class="wrapper bg-light angled upper-end">
    <div class="container py-14 py-md-16">
      <div class="row gy-10 gx-lg-8 gx-xl-12 align-items-center">
        <div class="col-lg-7 position-relative">
          <div class="shape bg-dot primary rellax w-18 h-18" data-rellax-speed="1" style="top: 0; left: -1.4rem; z-index: 0;"></div>
          <div class="row gx-md-5 gy-5">
            <div class="col-md-6">
              <figure class="rounded mt-md-10 position-relative"><img src="landing/assets/img/photos/example3.png" alt=""></figure>
            </div>
            <!--/column -->
            <div class="col-md-6">
              <div class="row gx-md-5 gy-5">
                <div class="col-md-12 order-md-2">
                  <figure class="rounded"><img src="landing/assets/img/photos/example5.png" alt=""></figure>
                </div>
                <!--/column -->
                <div class="col-md-10">
                  <div class="card bg-pale-primary text-center counter-wrapper">
                    <div class="card-body py-11">
                      <h3 class="counter text-nowrap">5000+</h3>
                      <p class="mb-0">Satisfied Customers</p>
                    </div>
                    <!--/.card-body -->
                  </div>
                  <!--/.card -->
                </div>
                <!--/column -->
              </div>
              <!--/.row -->
            </div>
            <!--/column -->
          </div>
          <!--/.row -->
        </div>
        <!--/column -->
        <div class="col-lg-5">
          <h2 class="display-4 mb-3">Let’s Talk</h2>
          <p class="lead fs-lg">Let's make something great together. We are <span class="underline">trusted by</span> over 5000+ clients. Join them by using our services and grow your business.</p>
          <p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Maecenas faucibus mollis interdum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <a href="/contact" class="btn btn-primary rounded-pill mt-2">Contact Us!</a>
        </div>
        <!--/column -->
      </div>
      <!--/.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->
@include('landing.partials.footer2')
@endsection