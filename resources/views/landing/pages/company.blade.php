@extends('landing.app')

@section('content')
<div class="content-wrapper">
  @include('landing.partials.header')
  @if ($companytextNames)
  @if ($companyImages)
  <section class="wrapper bg-white">
    <div class="container pt-10 pt-md-14 text-center">
      <div class="row">
        <div class="col-xl-6 mx-auto">
          <h1 class="display-1 mb-4">{{ $companytextNames[0] }}</h1>
          <p class="lead fs-lg mb-0">{{ $companytextNames[1] }}</p>
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
    <figure class="position-absoute" style="bottom: 0; left: 0; z-index: 2;"><img src="{{ App\Models\Media::getimageweb($companyImages[0]->meta['media_token']) }}" alt="" /></figure>
  </section>
  <!-- /section -->
  <section class="wrapper bg-light angled upper-end lower-end">
    <div class="container py-14 py-md-16">
      <div class="row gy-10 gy-sm-13 gx-md-8 gx-xl-12 align-items-center mb-10 mb-md-12">
        <!--/column -->
        <div class="col-lg-6">
          <h2 class="fs-16 text-uppercase text-primary mb-3">{{ $companytextNames[2] }}</h2>
          <h3 class="display-3 mb-5">{{ $companytextNames[3] }}</h3>
          <p class="mb-6">{{ $companytextNames[4] }}</p>
          <div class="row align-items-center counter-wrapper gy-6">
            <div class="col-md-6">
              <h3 class="counter counter-lg mb-1">{{ $companytextNames[5] }}</h3>
              <h5 class="mb-0">{{ $companytextNames[6] }}</h5>
            </div>
            <!--/column -->
            <div class="col-md-6">
              <h3 class="counter counter-lg mb-1">{{ $companytextNames[7] }}</h3>
              <h5 class="mb-0">{{ $companytextNames[8] }}</h5>
            </div>
            <!--/column -->
          </div>
          <!--/.row -->
        </div>
        <!--/column -->        
        <div class="col-lg-6">
          <div class="row gx-md-5 gy-5">
            <div class="col-md-6">
              <figure class="rounded"><img src="{{ App\Models\Media::getimageweb($companyImages[1]->meta['media_token']) }}" alt=""></figure>
            </div>
            <!--/column -->
            <div class="col-md-6 align-self-end">
              <figure class="rounded"><img src="{{ App\Models\Media::getimageweb($companyImages[2]->meta['media_token']) }}" alt=""></figure>
            </div>
            <!--/column -->
            <div class="col-12">
              <figure class="rounded mx-md-5"><img src="{{ App\Models\Media::getimageweb($companyImages[3]->meta['media_token']) }}" alt=""></figure>
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
              <h3>{{ $companytextNames[9] }}</h3>
              <p class="mb-2">{{ $companytextNames[10] }}</p>
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
              <h3>{{ $companytextNames[11] }}</h3>
              <p class="mb-2"> {{ $companytextNames[12] }}</p>
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
              <h3>{{ $companytextNames[13] }}</h3>
              <p class="mb-2">{{ $companytextNames[14] }}</p>
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
          <figure><img src="{{ App\Models\Media::getimageweb($companyImages[4]->meta['media_token']) }}" alt=""></figure>
        </div>
        <!--/column -->
        <div class="col-md-7 col-lg-6 col-xl-6 col-xxl-5 offset-xl-1">
          <div class="swiper-container dots-start dots-closer mt-md-10 mb-md-15" data-margin="30" data-dots="true">
            <div class="swiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <blockquote class="icon fs-lg">
                    <p>{{ $companytextNames[15] }}</p>
                    <div class="blockquote-details">
                      <div class="info ps-0">
                        <h5 class="mb-1">{{ $companytextNames[16] }}</h5>
                        <p class="mb-0">{{ $companytextNames[17] }}</p>
                      </div>
                    </div>
                  </blockquote>
                </div>
                <!--/.swiper-slide -->
                <div class="swiper-slide">
                  <blockquote class="icon fs-lg">
                    <p>{{ $companytextNames[18] }}</p>
                    <div class="blockquote-details">
                      <div class="info ps-0">
                        <h5 class="mb-1">{{ $companytextNames[19] }}</h5>
                        <p class="mb-0">{{ $companytextNames[20] }}</p>
                      </div>
                    </div>
                  </blockquote>
                </div>
                <!--/.swiper-slide -->
                <div class="swiper-slide">
                  <blockquote class="icon fs-lg">
                    <p>{{ $companytextNames[21] }}</p>
                    <div class="blockquote-details">
                      <div class="info ps-0">
                        <h5 class="mb-1">{{ $companytextNames[22] }}</h5>
                        <p class="mb-0">{{ $companytextNames[23] }}</p>
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
      <h2 class="display-4 mb-7">{{ $companytextNames[24] }}</h2>
      <div class="row gx-lg-8 gx-xl-12 gy-6 process-wrapper line">
        <div class="col-md-6 col-lg-3"> <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none mb-4"><span class="number">{{ $companytextNames[25] }}</span></span>
          <h4 class="mb-1">{{ $companytextNames[26] }}</h4>
          <p class="mb-0 fs-16">{{ $companytextNames[27] }}</p>
        </div>
        <!--/column -->
        <div class="col-md-6 col-lg-3"> <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none mb-4"><span class="number">{{ $companytextNames[28] }}</span></span>
          <h4 class="mb-1">{{ $companytextNames[29] }}</h4>
          <p class="mb-0 fs-16">{{ $companytextNames[30] }}</p>
        </div>
        <!--/column -->
        <div class="col-md-6 col-lg-3"> <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none mb-4"><span class="number">{{ $companytextNames[31] }}</span></span>
          <h4 class="mb-1">{{ $companytextNames[32] }}</h4>
          <p class="mb-0 fs-16">{{ $companytextNames[33] }}</p>
        </div>
        <!--/column -->
        <div class="col-md-6 col-lg-3"> <span class="icon btn btn-circle btn-lg btn-primary pe-none mb-4"><span class="number">{{ $companytextNames[34] }}</span></span>
          <h4 class="mb-1">{{ $companytextNames[35] }}</h4>
          <p class="mb-0 fs-16">{{ $companytextNames[36] }}</p>
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
          <h3 class="display-3 mb-5">{{ $companytextNames[37] }}</h3>
          <figure class="rounded"><img src="{{ App\Models\Media::getimageweb($companyImages[5]->meta['media_token']) }}"></figure>
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
                        <p>{{ $companytextNames[38] }}</p>
                    </div>
                    <!--/column -->
                    <div class="col-md-3">
                        <img src="landing/assets/img/icons/lineal/user.svg" class="svg-inject icon-svg icon-svg-lg text-primary mb-3" alt="" />
                        <h3 class="counter">{{ $totalProducts }}</h3>
                        <p>{{ $companytextNames[39] }}</p>
                    </div>
                    <!--/column -->
                    <div class="col-md-3">
                        <img src="landing/assets/img/icons/lineal/briefcase-2.svg" class="svg-inject icon-svg icon-svg-lg text-primary mb-3" alt="" />
                        <h3 class="counter">{{ $satisfiedCostumers }}</h3>
                        <p>{{ $companytextNames[40] }}</p>
                    </div>
                    <!--/column -->
                    <div class="col-md-3">
                        <img src="landing/assets/img/icons/lineal/award-2.svg" class="svg-inject icon-svg icon-svg-lg text-primary mb-3" alt="" />
                        <h3 class="counter">{{ $employees }}</h3>
                        <p>{{ $companytextNames[41] }}</p>
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
          <figure class="rounded"><img src="{{ App\Models\Media::getimageweb($companyImages[6]->meta['media_token']) }}" alt=""></figure>
        </div>
        <!--/column -->
        <div class="col-lg-6">
          <img src="landing/assets/img/icons/lineal/telemarketer.svg" class="svg-inject icon-svg icon-svg-md mb-4" alt="" />
          <h2 class="display-4 mb-8">{{ $companytextNames[42] }}</h2>
          <div class="d-flex flex-row">
            <div>
              <div class="icon text-primary fs-28 me-6 mt-n1"> <i class="uil uil-location-pin-alt"></i> </div>
            </div>
            <div>
              <h5 class="mb-1">{{ $companytextNames[43] }}</h5>
              <address>{{ $companytextNames[44] }}</address>
            </div>
          </div>
          <div class="d-flex flex-row">
            <div>
              <div class="icon text-primary fs-28 me-6 mt-n1"> <i class="uil uil-phone-volume"></i> </div>
            </div>
            <div>
              <h5 class="mb-1">{{ $companytextNames[45] }}</h5>
              <p class="mb-0"><a href="{{ $companytextNames[46] }}" class="link-body">{{ $companytextNames[47] }}</a></p>
            </div>
          </div>
          <div class="d-flex flex-row">
            <div>
              <div class="icon text-primary fs-28 me-6 mt-n1"> <i class="uil uil-envelope"></i> </div>
            </div>
            <div>
              <h5 class="mb-1">{{ $companytextNames[48] }}</h5>
              <p class="mb-0"><a href="mailto:hi@fathforce.com" class="link-body">{{ $companytextNames[49] }}</a></p>
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
@endif
@endif
@include('landing.partials.footer2')
@endsection