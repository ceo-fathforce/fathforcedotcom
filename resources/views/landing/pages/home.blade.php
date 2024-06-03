@extends('landing.app')

@section('content')
    <div class="content-wrapper">
        @include('landing.partials.header')
        @if ($landingtextNames)
        @if ($landingImages)
        <section class="wrapper bg-light">
            <div class="container pt-10 pt-md-14 pb-14 pb-md-16 text-center">
                <div class="row gx-lg-8 gx-xl-12 gy-10 gy-xl-0 mb-14 align-items-center">
                    <div class="col-lg-7 order-lg-2">
                        <figure><img class="img-auto" src="{{ App\Models\Media::getimageweb($landingImages[0]->meta['media_token']) }}" alt="" /></figure>
                    </div>
                    <!-- /column -->
                    <div class="col-md-10 offset-md-1 offset-lg-0 col-lg-5 text-center text-lg-start">
                        <h1 class="display-1 fs-54 mb-5 mx-md-n5 mx-lg-0 mt-7"> {{ $landingtextNames[0] }} <br
                                class="d-md-none">{{ $landingtextNames[1] }} <br class="d-md-none"><span
                                class="rotator-fade text-primary">{{ $landingtextNames[2] }}, {{ $landingtextNames[3] }}, {{ $landingtextNames[4] }}, {{ $landingtextNames[5] }}, {{ $landingtextNames[6] }}, {{ $landingtextNames[7] }}</span></h1>
                        <p class="lead fs-lg mb-7">{{ $landingtextNames[8] }}<p>
                        <span><a class="btn btn-lg btn-primary rounded-pill me-2" href="/company">{{ $landingtextNames[9] }}</a></span>
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
                <p class="text-center mb-8">{{ $landingtextNames[10] }}</p>
                <div
                    class="row row-cols-1 row-cols-md-2 row-cols-lg-4 row-cols-xl-4 gy-10 mb-2 d-flex align-items-center justify-content-center">
                    @foreach ($partnercompanys as $item)
                        <div class="col">
                            <img class="img-fluid px-md-3 px-lg-0 px-xl-2 px-xxl-5"
                                src="{{ App\Models\Media::getimageweb($item->meta['media_token']) }}"
                                alt="{{ $item->name }}" style="max-width: 200px; max-height: 200px; margin: 20px;" />
                        </div>
                    @endforeach
                    <div class="text-center"><a href="{{ route("/partnercompany") }}" class="btn btn-primary" style="margin-top: 50px;">{{ $landingtextNames[32] }}</a></div>
                </div>
                <!-- /.row -->
            </div>
        </section>
        <!-- /.container -->
        <div class="overflow-hidden">
            <div class="divider text-soft-primary mx-n2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100">
                    <path fill="currentColor"
                        d="M1260,1.65c-60-5.07-119.82,2.47-179.83,10.13s-120,11.48-180,9.57-120-7.66-180-6.42c-60,1.63-120,11.21-180,16a1129.52,1129.52,0,0,1-180,0c-60-4.78-120-14.36-180-19.14S60,7,30,7H0v93H1440V30.89C1380.07,23.2,1319.93,6.15,1260,1.65Z" />
                </svg>
            </div>
        </div>
        <!-- /.overflow-hidden -->
        </section>
        <!-- /section -->
        <section class="wrapper bg-gradient-primary">
            <div class="container pt-12 pt-lg-8 pb-14 pb-md-17">
                <div class="row text-center">
                    <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                        <h2 class="fs-16 text-uppercase text-primary mb-3">{{ $landingtextNames[11] }}</h2>
                        <h3 class="display-3 mb-10 px-xxl-10">{{ $landingtextNames[12] }}</h3>
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
                <div class="row gx-lg-8 gx-xl-12 gy-11 px-xxl-5 text-center d-flex align-items-end">
                    @foreach ($servicelists as $item)
                    <div class="col-lg-4">
                        <div class="px-md-15 px-lg-3">
                            <figure class="mb-6"><img class="img-fluid" src="{{ App\Models\Media::getimageweb($item->meta['media_token']) }}"
                                     alt="" /></figure>
                            <h3>{{ $item->name }}</h3>
                            <p class="mb-2">{{ $item->description }}</p>
                            <a href="/service" class="more hover">{{ $landingtextNames[13] }}</a>
                        </div>
                        <!--/.px -->
                    </div>
                    <!--/column -->
                    @endforeach

                    </div>
                    <!--/.row -->
                </div>
                <!-- /.container -->
        </section>

        <!-- /section -->
        <section class="wrapper bg-gradient-reverse-primary">
            <div class="container pb-14 pb-md-16">
                <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
                    <div class="col-lg-7">
                        <figure><img class="img-auto" src="{{ App\Models\Media::getimageweb($landingImages[1]->meta['media_token']) }}" alt="" /></figure>
                    </div>
                    <!--/column -->
                    <div class="col-lg-5">
                        <h2 class="fs-15 text-uppercase text-primary mb-3">{{ $landingtextNames[14] }}</h2>
                        <h3 class="display-3 mb-7">{{ $landingtextNames[15] }}</h3>
                        @foreach ($superioritys as $item)
                            <div class="accordion accordion-wrapper" id="accordionExample{{ $item->id }}">
                                <div class="card plain accordion-item">
                                    <div class="card-header" id="heading{{ $item->id }}">
                                        <button class="accordion-button" data-bs-toggle="collapse"
                                                data-bs-target="#collapse{{ $item->id }}" aria-expanded="{{ $loop->first ? 'true' : 'false' }}"
                                                aria-controls="collapse{{ $item->id }}" onclick="toggleAccordion('{{ $item->id }}')">
                                            {{ $item->name}}
                                        </button>
                                    </div>
                                    <!--/.card-header -->
                                    <div id="collapse{{ $item->id }}" class="accordion-collapse collapse {{ $loop->first ? 'show' : '' }}"
                                         aria-labelledby="heading{{ $item->id }}" data-bs-parent="#accordionExample{{ $item->id }}">
                                        <div class="card-body">
                                            <p>{{ $item->description}}</p>
                                        </div>
                                        <!--/.card-body -->
                                    </div>
                                    <!--/.accordion-collapse -->
                                </div>
                                <!--/.accordion-item -->
                            </div>
                            <!--/.accordion -->
                        @endforeach
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
            </div>
            <!-- /.container -->
            <div class="overflow-hidden">
                <div class="divider text-light mx-n2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100">
                        <path fill="currentColor"
                            d="M1260,1.65c-60-5.07-119.82,2.47-179.83,10.13s-120,11.48-180,9.57-120-7.66-180-6.42c-60,1.63-120,11.21-180,16a1129.52,1129.52,0,0,1-180,0c-60-4.78-120-14.36-180-19.14S60,7,30,7H0v93H1440V30.89C1380.07,23.2,1319.93,6.15,1260,1.65Z" />
                    </svg>
                </div>
            </div>
            <!-- /.overflow-hidden -->
        </section>
        <section class="wrapper">
            <div class="container py-14 py-md-16">
                <div class="row gy-10 gy-sm-13 gx-md-8 gx-xl-12 align-items-center mb-10 mb-md-12">
                    <div class="col-lg-6">
                        <div class="row gx-md-5 gy-5">
                            <div class="col-md-6">
                                <figure class="rounded"><img src="{{ App\Models\Media::getimageweb($landingImages[2]->meta['media_token']) }}" alt="">
                                </figure>
                            </div>
                            <!--/column -->
                            <div class="col-md-6 align-self-end">
                                <figure class="rounded"><img src="{{ App\Models\Media::getimageweb($landingImages[3]->meta['media_token']) }}" alt="">
                                </figure>
                            </div>
                            <!--/column -->
                            <div class="col-12">
                                <figure class="rounded mx-md-5"><img src="{{ App\Models\Media::getimageweb($landingImages[4]->meta['media_token']) }}"
                                        alt=""></figure>
                            </div>
                            <!--/column -->
                        </div>
                        <!--/.row -->
                    </div>
                    <!--/column -->
                    <div class="col-lg-6">
                        <h2 class="fs-16 text-uppercase text-primary mb-3">{{ $landingtextNames[16] }}</h2>
                        <h3 class="display-3 mb-5">{{ $landingtextNames[17] }}</h3>
                        <p class="mb-6">{{ $landingtextNames[18] }}</p>
                        <div class="row align-items-center counter-wrapper gy-6">
                            <div class="col-md-6">
                                <h3 class="counter counter-lg mb-1">{{ $landingtextNames[19] }}</h3>
                                <h5 class="mb-0">{{ $landingtextNames[20] }}</h5>
                            </div>
                            <!--/column -->
                            <div class="col-md-6">
                                <h3 class="counter counter-lg mb-1">{{ $landingtextNames[21] }}</h3>
                                <h5 class="mb-0">{{ $landingtextNames[22] }}</h5>
                            </div>
                            <!--/column -->
                        </div>
                        <!--/.row -->
                    </div>
                    <!--/column -->
                </div>
                <div class="text-center"><a href="/company" class="btn btn-primary">{{ $landingtextNames[23] }}</a></div>
            </div>
            <!-- /.container -->
        </section>
        {{-- <section class="wrapper bg-light">
            <div class="overflow-hidden">
                <div class="container py-14 py-md-16">
                    <div class="row">
                        <div class="col-lg-10 col-xl-9 col-xxl-8 mx-auto text-center">
                            <h2 class="fs-16 text-uppercase text-primary mb-3">Latest Projects</h2>
                            <h3 class="display-3 mb-10">Check out some of our awesome projects with creative ideas and
                                great design.</h3>
                        </div>
                        <!-- /column -->
                    </div>
                    <!-- /.row -->
                    <div class="swiper-container grid-view nav-bottom nav-color mb-14" data-margin="30" data-dots="false"
                        data-nav="true" data-items-md="2" data-items-xs="1">
                        <div class="swiper overflow-visible">
                            {{-- <div class="swiper-wrapper">
                                @foreach ($portfolios as $item)
                                    <div class="swiper-slide">
                                        <figure class="rounded mb-7"><a href="{{ url('portfolios/detail/' . $item->uuid) }}"><img
                                                    src="{{ App\Models\Media::getimageweb($item->meta['media_token']) }}"
                                                    alt="{{ $item->name }}" /></a>
                                        </figure>
                                        <div class="project-details d-flex justify-content-center flex-column">
                                            <div class="post-header">
                                                <h2 class="post-title h3"><a
                                                        href="{{ url('portfolios/detail/' . $item->uuid) }}">
                                                        {{ $item->name }}
                                                    </a></h2>
                                                <div class="post-category text-ash">
                                                    {{ $item->portfoliocategory['title'] }}</div>
                                            </div>
                                            <!-- /.post-header -->
                                        </div>
                                        <!-- /.project-details -->
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
                <!-- /.container -->
            </div>
            <!-- /.overflow-hidden -->
        </section> --}}
        <!-- /section -->
        <!-- /testimonial -->
        <section class="wrapper bg-gradient-primary">
            <div class="container pt-12 pt-lg-8 pb-14 pb-md-17">
                <div class="row text-center">
                    <div class="col-lg-8 offset-lg-2">
                        <h2 class="fs-16 text-uppercase text-primary mb-3">{{ $landingtextNames[24] }}</h2>
                        <h3 class="display-3 mb-10 px-xxl-10">{{ $landingtextNames[25] }}</h3>
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
                <div class="row justify-content-end">
                    @foreach ($testimonys as $item)
                    <div class="col-md-6 col-xl-4">
                        <div class="card shadow-lg text-right mb-5">
                            <div class="card-body">
                                <span class="ratings five mb-2"></span>
                                <blockquote class="border-0 mb-0">
                                    <p>{{ $item->description}}</p>
                                    <div class="blockquote-details">
                                        <img class="rounded-circle w-12" src="{{ App\Models\Media::getimageweb($item->meta['media_token']) }}"
                                            alt="{{ $item->name }}" />
                                        <div class="info">
                                            <h5 class="mb-1">{{ $item->name }}</h5>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /column -->
                    @endforeach
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        
        <section id="snippet-1" class="wrapper bg-light">
            <div class="container pt-15 pt-md-17 pb-20 pb-md-15">
                <h2 class="display-4 mb-3 text-center">{{ $landingtextNames[26] }}</h2>
                <p class="lead fs-lg mb-10 text-center px-md-16 px-lg-21 px-xl-0">{{ $landingtextNames[27] }}</p>
                <div class="swiper-container blog grid-view mb-6" data-margin="30" data-dots="true" data-items-xl="3"
                    data-items-md="2" data-items-xs="1">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            @foreach ($posts as $item)
                                <div class="swiper-slide">
                                    <article>
                                        <figure class="overlay overlay-1 hover-scale rounded mb-5"><a
                                                href="{{ url('posts/detail/' . $item->uuid) }}"> <img
                                                    src="{{ App\Models\Media::getimageweb($item->meta['media_token']) }}"
                                                    alt="" /></a>
                                            <figcaption>
                                                <h5 class="from-top mb-0">{{ $landingtextNames[28] }}</h5>
                                            </figcaption>
                                        </figure>
                                        <div class="post-header">
                                            <div class="post-category text-line">
                                                <a href="#" class="hover"
                                                    rel="category">{{ $item->postcategory['title'] }}</a>
                                            </div>
                                            <!-- /.post-category -->
                                            <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark"
                                                    href="/{{ url('posts/detail/' . $item->uuid) }}">{{ $item->name }}</a>
                                            </h2>
                                        </div>
                                        <!-- /.post-header -->
                                        <div class="post-footer">
                                            <ul class="post-meta">
                                                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>1{{ $item->created_at->diffForHumans() }}</span></li>
                                                {{-- <li class="post-comments"><a href="#"><i
                                                            class="uil uil-comment"></i>4</a></li> --}}
                                            </ul>
                                            <!-- /.post-meta -->
                                        </div>
                                        <!-- /.post-footer -->
                                    </article>
                                    <!-- /article -->
                                </div>
                                <!--/.swiper-slide -->
                            @endforeach
                        </div>
                        <!--/.swiper-wrapper -->
                    </div>
                    <!-- /.swiper -->
                </div>
                <!-- /.swiper-container -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /section -->
        <section class="wrapper bg-light">
            <div class="container pb-14 pb-md-16 mt-10">
                <div class="row gx-lg-8 gx-xl-12 gy-10">
                    <div class="col-lg-6 mb-0">
                        <h2 class="fs-16 text-uppercase text-primary mb-4">{{ $landingtextNames[29] }}</h2>
                        <h3 class="display-3 mb-4">{{ $landingtextNames[30] }}</h3>
                        <p class="mb-6">{{ $landingtextNames[31] }}
                        </p>
                    </div>
                    <!--/column -->
                    <div class="col-lg-6">
                        <div id="accordion-3" class="accordion-wrapper">
                            @foreach ($faqs as $item)
                                <div class="card accordion-item shadow-lg">
                                    <div class="card-header" id="accordion-heading-3-1">
                                        <button class="collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#accordion-collapse-3-{{ $item->id }}"
                                            aria-expanded="false"
                                            aria-controls="accordion-collapse-3-{{ $item->id }}">{{ $item->name }}</button>
                                    </div>
                                    <!-- /.card-header -->
                                    <div id="accordion-collapse-3-{{ $item->id }}" class="collapse"
                                        aria-labelledby="accordion-heading-3-{{ $item->id }}"
                                        data-bs-target="#accordion-3">
                                        <div class="card-body">
                                            <p>{{ $item->description }}</p>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                    <!-- /.collapse -->
                                </div>
                            @endforeach

                            <!-- /.card -->
                        </div>
                        <!-- /.accordion-wrapper -->
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
            </div>
            <!-- /.container -->
            <div class="overflow-hidden">
                <div class="divider text-navy mx-n2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100">
                        <path fill="currentColor"
                            d="M1260,1.65c-60-5.07-119.82,2.47-179.83,10.13s-120,11.48-180,9.57-120-7.66-180-6.42c-60,1.63-120,11.21-180,16a1129.52,1129.52,0,0,1-180,0c-60-4.78-120-14.36-180-19.14S60,7,30,7H0v93H1440V30.89C1380.07,23.2,1319.93,6.15,1260,1.65Z" />
                    </svg>
                </div>
            </div>
            <!-- /.overflow-hidden -->
        </section>
        <!-- /section -->
    </div>
    <script>
        function toggleAccordion(itemId) {
            const allAccordions = document.querySelectorAll('.accordion-collapse');
            allAccordions.forEach((accordion) => {
                if (accordion.id !== `collapse${itemId}`) {
                    accordion.classList.remove('show');
                }
            });
        }
    </script>
     @endif
     @endif
    @include('landing.partials.footer2')
@endsection
