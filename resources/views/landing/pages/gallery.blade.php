@extends('landing.app')
@if ($generaltextNames)
@section('content')
    <div class="content-wrapper">
        @include('landing.partials.header')
        <!-- /header -->
        <section class="wrapper bg-light">
            <div class="container pt-10 pt-md-14">
                <div class="row">
                    <div class="col-md-8 col-lg-5 col-xl-6">
                        <h1 class="display-1 mb-3">{{ $generaltextNames[10] }}</h1>
                        <p class="lead fs-lg">{{ $generaltextNames[11] }}
                        </p>
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <section class="wrapper bg-light">
            <div class="container py-14 py-md-16">
                <div class="grid grid-view projects-masonry">
                    <div class="isotope-filter filter mb-10">
                        <p>Filter:</p>
                        <ul>
                            <li><a class="filter-item active" data-filter="*">All</a></li>
                            <li><a class="filter-item" data-filter=".concept">Concept</a></li>
                            <li><a class="filter-item" data-filter=".product">Product</a></li>
                            <li><a class="filter-item" data-filter=".workshop">Workshop</a></li>
                            <li><a class="filter-item" data-filter=".still-life">Still Life</a></li>
                        </ul>
                    </div>
                    <div class="row gx-md-10 gy-10 gy-md-13">
                        @foreach ($gallerys as $item)
                            <div class="col-md-6 mb-4">
                                <div class="project item product">
                                    <figure class="lift rounded hover-scale rounded cursor-dark mb-6">
                                        <a href="{{ App\Models\Media::getimageweb($item->meta['media_token']) }}"
                                            data-glightbox data-gallery="post">
                                            <img src="{{ App\Models\Media::getimageweb($item->meta['media_token']) }}"
                                                alt="{{ $item->name }}" />
                                        </a>
                                    </figure>
                                    <div class="project-details d-flex justify-content-center flex-column">
                                        <div class="post-header">
                                            <div class="post-category text-line mb-2 text-purple">
                                                {{ $item->gallerycategory['title'] }}
                                            </div>
                                            <h3 class="post-title">{{ $item->name }}</h3>
                                        </div>
                                        <!-- /.post-header -->
                                    </div>
                                    <!-- /.project-details -->
                                </div>
                                <!-- /.project -->
                            </div>
                        @endforeach
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.grid -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /section -->
    </div>
    @include('landing.partials.footer2')
@endif
@endsection
