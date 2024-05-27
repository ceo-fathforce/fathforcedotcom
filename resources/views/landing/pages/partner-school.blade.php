@extends('landing.app')

@section('content')
@if ($generaltextNames)
    <div class="content-wrapper">
        @include('landing.partials.header')
        <!-- /header -->
        <section class="wrapper bg-light">
            <div class="container pt-10 pt-md-14 text-center">
                <div class="row">
                    <div class="col-md-8 col-lg-7 col-xl-6 col-xxl-5 mx-auto">
                        <h1 class="display-1 mb-3">{{ $generaltextNames[2] }}</h1>
                        <p class="lead fs-lg px-lg-10 px-xxl-8">{{ $generaltextNames[3] }}</p>
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /section -->
        <section class="wrapper bg-light">
            <div class="container py-14 py-md-16">
                <div class="grid grid-view projects-masonry">
                    <div class="row gx-md-10 gy-10 gy-md-13 isotope">
                        @foreach ($partnerschools as $item)
                            <div class="project item col-md-6 product">
                                <figure class="lift rounded mb-6">
                                    <img src="{{ App\Models\Media::getimageweb($item->meta['media_token']) }}"
                                        alt="{{ $item->name }}" style="max-width: 200px; max-height: 200px;" />
                                </figure>
                                <div class="project-details d-flex justify-content-center flex-column">
                                    <div class="post-header">
                                        <h3 class="post-title">{{ $item->name }}</h3>
                                        <p class="mb-6">{{ $item->description }}</p>
                                    </div>
                                    <!-- /.post-header -->
                                </div>
                                <!-- /.project-details -->
                            </div>
                        @endforeach
                        <!-- /.project -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.grid -->
            </div>
            <!-- /.container -->
        </section>        
        <!-- /section -->
    </div>
    @endif
    @include('landing.partials.footer2')
@endsection
