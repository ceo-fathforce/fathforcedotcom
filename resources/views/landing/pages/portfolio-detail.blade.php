@extends('landing.app')
@section('content')
    <div class="content-wrapper">
        @include('landing.partials.header')
        <section class="wrapper bg-light">
            <div class="container pt-10 pb-9 pt-md-14 pb-md-11 text-center">
                <div class="row">
                    <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                        <div class="post-header">
                            <div class="post-category text-line">
                                <a href="#" class="hover" rel="category">{{ $portfolios->name }} </a>
                            </div>
                            <!-- /.post-category -->
                            <h1 class="display-1 mb-3">{{ $portfolios->name }}</h1>
                        </div>
                        <!-- /.post-header -->
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /section -->
        <section class="wrapper bg-light wrapper-border">
            <div class="container pb-14 pb-md-16">
                <article>
                        <div class="post-slider mb-8 mb-md-12">
                            <div class="swiper-container dots-over" data-margin="5" data-dots="true" data-nav="true"
                                data-autoheight="true">
                                <div class="swiper">
                                    <div class="swiper-wrapper">
                                        @foreach ($medias as $media)
                                            <div class="swiper-slide rounded">
                                                <img src="{{ asset(str_replace('public', 'storage', $media->name)) }}"
                                                    alt="" />
                                                <div class="caption-wrapper p-12">
                                                    <div class="caption bg-white rounded px-4 py-3 ms-auto mt-auto animate__animated animate__slideInDown animate__delay-1s z-index-999"
                                                        style="z-index: 9999">
                                                        <h5 class="mb-0">{{ $portfolios->name }} Preview</h5>
                                                    </div>
                                                    <!--/.caption -->
                                                </div>
                                                <!--/.caption-wrapper -->
                                            </div>
                                        @endforeach
                                        <!--/.swiper-slide -->
                                    </div>
                                    <!--/.swiper-wrapper -->
                                </div>
                                <!-- /.swiper -->
                            </div>
                            <!-- /.swiper-container -->
                        </div>
     
                    <!-- /.post-slider -->
                    <div class="row">
                        <div class="col-lg-10 offset-lg-1">
                            <h2 class="display-6 mb-4">About Fathforce</h2>
                            <div class="row gx-0">
                                <div class="col-md-9 text-justify">
                                    <p>{{ $portfolios->description }}</p>
                                </div>
                                <!--/column -->
                                <div class="col-md-2 ms-auto">
                                    <ul class="list-unstyled">
                                        <li>
                                            <h5 class="mb-1">Date</h5>
                                            <p>{{ $portfolios->created_at->diffForHumans() }}</p>
                                        </li>
                                    </ul>
                                    <a href="/" class="more hover">See Project</a>
                                </div>
                                <!--/column -->
                            </div>
                            <!--/.row -->
                        </div>
                        <!-- /column -->
                    </div>
                    <!--/.row -->
                </article>
                <!-- /.project -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /section -->
        <section class="wrapper bg-light">
          <div class="container py-10">
              <div class="row gx-md-6 gy-3 gy-md-0">
                  <div class="col-md-6 align-self-center text-center text-md-start navigation">
                      @if ($prevPortfolio)
                          <a href="{{ url('portfolios/detail/' . $prevPortfolio->uuid) }}"
                             class="btn btn-soft-ash rounded-pill btn-icon btn-icon-start mb-0 me-1">
                              <i class="uil uil-arrow-left"></i> Prev Post
                          </a>
                      @endif
                  </div>
      
                  <div class="col-md-6 align-self-center text-center text-md-end navigation">
                      @if ($nextPortfolio)
                          <a href="{{ url('portfolios/detail/' . $nextPortfolio->uuid) }}"
                             class="btn btn-soft-ash rounded-pill btn-icon btn-icon-end mb-0">
                              Next Post <i class="uil uil-arrow-right"></i>
                          </a>
                      @endif
                  </div>
              </div>
              <!--/.row -->
          </div>
          <!-- /.container -->
      </section>
      
    </div>
    @include('landing.partials.footer2')
@endsection
