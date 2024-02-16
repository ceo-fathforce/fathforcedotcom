@extends('landing.app')

@section('content')
    <div class="content-wrapper">
        @include('landing.partials.header')
        <section class="section-frame overflow-hidden">
            <div class="wrapper bg-soft-primary">
                <div class="container py-12 py-md-16 text-center">
                    <div class="row">
                        <div class="col-md-7 col-lg-6 col-xl-5 mx-auto">
                            <h1 class="display-1 mb-3">Fathforce Blog</h1>
                            <p class="lead px-lg-5 px-xxl-8 mb-1">Here you can find the latest
                                company news and business articles.</p>
                        </div>
                        <!-- /column -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </div>
            <!-- /.wrapper -->
        </section>
        <!-- /section -->
        <section class="wrapper bg-light">
            <div class="container py-14 py-md-16">
                <div class="row gx-lg-8 gx-xl-12">
                    <div class="col-lg-8">
                        @foreach ($posts as $item)
                            <div class="blog classic-view">
                                <!-- /.post -->
                                <article class="post">
                                    <div class="card">
                                        <figure class="card-img-top overlay overlay-1 hover-scale"><a
                                                href="{{ url('posts/detail/' . $item->uuid) }}"><img
                                                    src="{{ App\Models\Media::getimageweb($item->meta['media_token']) }}"
                                                    alt="" /></a>
                                            <figcaption>
                                                <h5 class="from-top mb-0">Read More</h5>
                                            </figcaption>
                                        </figure>
                                        <div class="card-body">
                                            <div class="post-header">
                                                <div class="post-category text-line">
                                                    <a href="#" class="hover"
                                                        rel="category">{{ $item->postcategory['title'] }}</a>
                                                </div>
                                                <!-- /.post-category -->
                                                <h2 class="post-title mt-1 mb-0"><a class="link-dark"
                                                        href="{{ url('posts/detail/' . $item->uuid) }}">{{ $item->name }}</a>
                                                </h2>
                                            </div>
                                            <!-- /.post-header -->
                                            <div class="post-content">
                                                <p>{{ substr($item->description, 0, 100) . (strlen($item->description) > 100 ? '...' : '') }}
                                                </p>
                                            </div>
                                            <!-- /.post-content -->
                                        </div>
                                        <!-- /.card-footer -->
                                    </div>
                                    <!-- /.card -->
                                </article>
                                <!-- /.post -->
                            </div>
                        @endforeach
                        <!-- /.blog -->

                        <nav class="d-flex" aria-label="pagination">
                            <ul class="pagination">
                                <li class="page-item {{ $posts->previousPageUrl() ? '' : 'disabled' }}">
                                    <a class="page-link " href="{{ $posts->previousPageUrl() }}" aria-label="Previous">
                                        <span aria-hidden="true"><i class="uil uil-arrow-left"></i></span>
                                    </a>
                                </li>
                                @for ($i = 1; $i <= $posts->lastPage(); $i++)
                                    <li class="page-item {{ $i == $posts->currentPage() ? 'active' : '' }}">
                                        <a class="page-link" href="{{ $posts->url($i) }}">{{ $i }}</a>
                                    </li>
                                @endfor
                                <li class="page-item {{ $posts->nextPageUrl() ? '' : 'disabled' }}">
                                    <a class="page-link" href="{{ $posts->nextPageUrl() }}" aria-label="Next">
                                        <span aria-hidden="true"><i class="uil uil-arrow-right"></i></span>
                                    </a>
                                </li>
                            </ul>
                            <!-- /.pagination -->
                        </nav>
                        <!-- /nav -->
                    </div>
                    <!-- /column -->
                    <aside class="col-lg-4 sidebar mt-8 mt-lg-6">
                        <div class="widget">
                            <form class="search-form" action="{{ route('posts.search') }}" method="GET">
                                <div class="form-floating mb-0">
                                    <input id="search-form" type="text" class="form-control" placeholder="Search" name="search">
                                    <label for="search-form">Search</label>
                                </div>
                            </form>
                            <!-- /.search-form -->
                        </div>
                        <!-- /.widget -->
                        <div class="widget">
                            <h4 class="widget-title mb-3">About Us</h4>
                            <p>PT. Fath Synergy Group is a web and mobile software development company based in Bandung,
                                Indonesia. We build systems with in-depth analysis and have built many web and mobile
                                applications. We prioritize quality and stability in the systems we build.</p>
                            <nav class="nav social">
                                <a href="#"><i class="uil uil-twitter"></i></a>
                                <a href="#"><i class="uil uil-facebook-f"></i></a>
                                <a href="#"><i class="uil uil-dribbble"></i></a>
                                <a href="#"><i class="uil uil-instagram"></i></a>
                                <a href="#"><i class="uil uil-youtube"></i></a>
                            </nav>
                            <!-- /.social -->
                        </div>
                        <!-- /.widget -->
                        <div class="widget">
                            <h4 class="widget-title mb-3">Categories</h4>
                            <ul class="unordered-list bullet-primary text-reset">
                                @foreach ($postcategories as $category)
                                <li><a class="filter-item" data-filter=".{{ $category->title }}">{{ $category->title }}</a>
                                </li>
                            @endforeach
                            </ul>
                        </div>
                        <!-- /.widget -->
                    </aside>
                    <!-- /column .sidebar -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /section -->
    </div>
    @include('landing.partials.footer2')
@endsection
