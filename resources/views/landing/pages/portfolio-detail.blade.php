@extends('landing.app')
@section('content')
  @include('landing.partials.header')
    <div class="content-wrapper">
        <section class="wrapper bg-light">
            <div class="container pt-10 pb-9 pt-md-14 pb-md-11 text-center">
                <div class="row">
                    <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                        <div class="post-header">
                            <div class="post-category text-line">
                                <a href="#" class="hover" rel="category">{{ $portfolio->name }} </a>
                            </div>
                            <!-- /.post-category -->
                            <h1 class="display-1 mb-3">{{ $portfolio->name }}</h1>
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
                    <figure class="rounded mb-8 mb-md-12"><img src="{{ App\Models\Media::getimageweb($portfolio->meta['media_token']) }}" alt="" /></figure>
                    <!-- /.post-slider -->
                    <div class="row">
                        <div class="col-lg-10 offset-lg-1">
                            <h2 class="display-6 mb-4">About {{ $portfolio->name }}</h2>
                            <div class="row gx-0">
                                <div class="col-md-9 text-justify">
                                    <p>{{ $portfolio->description }}</p>
                                </div>
                                <!--/column -->
                                <div class="col-md-2 ms-auto">
                                    <ul class="list-unstyled">
                                        <li>
                                            <h5 class="mb-1">Date</h5>
                                            <p>{{ $portfolio->created_at->diffForHumans() }}</p>
                                        </li>
                                    </ul>
                                    <a href="{{ $portfolio->url }}" class="more hover">See Project</a>
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
                          <a href="{{ url('portfolio/detail/' . $prevPortfolio->uuid) }}"
                             class="btn btn-soft-ash rounded-pill btn-icon btn-icon-start mb-0 me-1">
                              <i class="uil uil-arrow-left"></i> Prev Post
                          </a>
                      @endif
                  </div>
      
                  <div class="col-md-6 align-self-center text-center text-md-end navigation">
                      @if ($nextPortfolio)
                          <a href="{{ url('portfolio/detail/' . $nextPortfolio->uuid) }}"
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
