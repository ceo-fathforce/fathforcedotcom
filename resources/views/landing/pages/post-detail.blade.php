@extends('landing.app')

@section('content')
@if ($generaltextNames)
<div class="content-wrapper">
  @include('landing.partials.header')
  <section class="wrapper image-wrapper bg-image bg-overlay text-white" data-image-src="{{App\Models\Media::getimageweb($posts->meta['media_token'])}}">
    <div class="container pt-18 pb-15 pt-md-20 pb-md-19 text-center">
      <div class="row">
        <div class="col-md-10 col-xl-8 mx-auto">
          <div class="post-header">
            <div class="post-category text-line text-white">
              <a href="#" class="text-reset" rel="category">{{$posts['postcategory']['title']}}</a>
            </div>
            <!-- /.post-category -->
            <h1 class="display-1 mb-4 text-white">{{$posts->name}}</h1>
            <ul class="post-meta text-white">
              <li class="post-date"><i class="uil uil-calendar-alt"></i><span>{{ $posts->created_at->format('Y-m-d') }}</span></li>
              <li class="post-author"><i class="uil uil-user"></i><a href="#" class="text-reset"><span>{{ $posts->user->username }}</span></a></li>
              {{-- <li class="post-comments"><i class="uil uil-comment"></i><a href="#" class="text-reset">3<span> Comments</span></a></li>
              <li class="post-likes"><i class="uil uil-heart-alt"></i><a href="#" class="text-reset">3<span> Likes</span></a></li>
              <li class="post-view"><i class="uil uil-eye"></i><a href="#" class="text-reset">7<span> Views</span></a></li> --}}
            </ul>
            <!-- /.post-meta -->
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
  <section class="wrapper bg-light">
    <div class="container py-14 py-md-16">
      <div class="row gx-lg-8 gx-xl-12">
        <div class="col-lg-8">
          <div class="blog single">
            <div class="card">
              <figure class="card-img-top"><img src="{{App\Models\Media::getimageweb($posts->meta['media_token'])}}" alt="" /></figure>
              <div class="card-body">
                <div class="classic-view">
                  <article class="post">
                    <div class="post-content mb-5">
                      <p>{{$posts->description}}</p>
                    </div>
                    <!-- /.post-content -->
                    <div class="post-footer d-md-flex flex-md-row justify-content-md-between align-items-center mt-8">
                      <div>
                        <ul class="list-unstyled tag-list mb-0">
                          <li><a class="btn btn-soft-ash btn-sm rounded-pill mb-0">{{ $posts->postcategory['title'] }}</a></li>
                        </ul>
                      </div>
                      <div class="mb-0 mb-md-2">
                        <div class="dropdown share-dropdown btn-group">
                          <button class="btn btn-sm btn-red rounded-pill btn-icon btn-icon-start dropdown-toggle mb-0 me-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="uil uil-share-alt"></i> Share </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href={{ url("https://twitter.com/intent/tweet?url=http://fathforcedotcom.test/posts/detail/" . $posts->uuid) }}><i class="uil uil-twitter"></i> Twitter</a>
                            <a class="dropdown-item" href={{ url("https://www.facebook.com/sharer/sharer.php?u=http://fathforcedotcom.test/posts/detail/" . $posts->uuid) }}><i class="uil uil-facebook-f"></i> Facebook</a>
                            <a class="dropdown-item" href={{ url("https://www.linkedin.com/sharing/share-offsite/?url=http://fathforcedotcom.test/posts/detail/" . $posts->uuid) }}><i class="uil uil-linkedin"></i> Linkedin</a>
                          </div>
                          <!--/.dropdown-menu -->
                        </div>
                        <!--/.share-dropdown -->
                      </div>
                    </div>
                    <!-- /.post-footer -->
                  </article>
                  <!-- /.post -->
                </div>
                <!-- /.classic-view -->
                <hr />
                <div class="author-info d-md-flex align-items-center mb-3">
                  <div class="d-flex align-items-center">
                    <figure class="user-avatar"><img class="rounded-circle" alt="" src="/landing/assets/img/avatars/guess.png" /></figure>
                    <div>
                      <h6><a href="#" class="link-dark">{{ $posts->user->username }}</a></h6>
                      <span class="post-meta fs-15">{{ $posts->user->job }}</span>
                    </div>
                  </div>
                  <div class="mt-3 mt-md-0 ms-auto">
                    <a href="#" class="btn btn-sm btn-soft-ash rounded-pill btn-icon btn-icon-start mb-0"><i class="uil uil-file-alt"></i> All Posts</a>
                  </div>
                </div>
                <!-- /.author-info -->
                <p>{{ $posts->user->me }}</p>
                <nav class="nav social">
                  <a href={{ $posts->user->twitter }}><i class="uil uil-twitter"></i></a>
                  <a href="{{ $posts->user->facebook }}"><i class="uil uil-facebook-f"></i></a>
                  {{-- <a href="#"><i class="uil uil-dribbble"></i></a> --}}
                  <a href="{{ $posts->user->instagram }}"><i class="uil uil-instagram"></i></a>
                  <a href="{{ $posts->user->youtube }}"><i class="uil uil-youtube"></i></a>
                </nav>
                <!-- /.social -->
                <hr />
                <h3 class="mb-6">Latest Post</h3>
                <div class="swiper-container blog grid-view mb-16" data-margin="30" data-dots="true" data-items-md="2" data-items-xs="1">
                  <div class="swiper">
                    <div class="swiper-wrapper">
                      @php
                        $latestPosts = App\Models\Blog\Post::latest()->take(5)->get();
                      @endphp
                      @foreach($latestPosts as $posts)
                      <div class="swiper-slide">
                        <article>
                          <figure class="overlay overlay-1 hover-scale rounded mb-5"><a href="{{ url('posts/detail/' . $posts->uuid) }}"> <img src="{{App\Models\Media::getimageweb($posts->meta['media_token'])}}" alt="" /></a>
                            <figcaption>
                              <h5 class="from-top mb-0">Read More</h5>
                            </figcaption>
                          </figure>
                          <div class="post-header">
                            <div class="post-category text-line">
                              <a href="#" class="hover" rel="category">{{ $posts->postcategory['title'] }}</a>
                            </div>
                            <!-- /.post-category -->
                            <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="{{ url('posts/detail/' . $posts->uuid) }}">{{ $posts->name }}</a></h2>
                          </div>
                          <!-- /.post-header -->
                          <div class="post-footer">
                            <ul class="post-meta mb-0">
                              <li class="post-date"><i class="uil uil-calendar-alt"></i><span>{{ $posts->created_at->format('Y-m-d') }}</span></li>
                            </ul>
                            <!-- /.post-meta -->
                          </div>
                          <!-- /.post-footer -->
                        </article>
                        <!-- /article -->
                      </div>
                      @endforeach
                    </div>
                    <!--/.swiper-wrapper -->
                  </div>
                  <!-- /.swiper -->
                </div>
                <!-- /.swiper-container -->
                {{-- <hr /> --}}
                {{-- <div id="comments">
                  <h3 class="mb-6">5 Comments</h3>
                  <ol id="singlecomments" class="commentlist">
                    <li class="comment">
                      <div class="comment-header d-md-flex align-items-center">
                        <div class="d-flex align-items-center">
                          <figure class="user-avatar"><img class="rounded-circle" alt="" src="/landing/assets/img/avatars/guess.png" /></figure>
                          <div>
                            <h6 class="comment-author"><a href="#" class="link-dark">Connor Gibson</a></h6>
                            <ul class="post-meta">
                              <li><i class="uil uil-calendar-alt"></i>14 Jan 2022</li>
                            </ul>
                            <!-- /.post-meta -->
                          </div>
                          <!-- /div -->
                        </div>
                        <!-- /div -->
                        {{-- <div class="mt-3 mt-md-0 ms-auto">
                          <a href="#" class="btn btn-soft-ash btn-sm rounded-pill btn-icon btn-icon-start mb-0"><i class="uil uil-comments"></i> Reply</a>
                        </div> --}}
                        <!-- /div -->
                      {{-- </div> --}}
                      <!-- /.comment-header -->
                      {{-- <p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Sed posuere consectetur est at lobortis integer posuere erat ante.</p>
                    </li>
                  </ol>
                </div> --}}
                <!-- /#comments -->
                {{-- <hr />
                <h3 class="mb-3">Would you like to share your thoughts?</h3>
                <p class="mb-7">Your email address will not be published. Required fields are marked *</p>
                @if(session('success'))
                  <div class="alert alert-success">
                    {{ session('success') }}
                  </div>
                @endif  
                <form class="comment-form" method="post" action="">
                  @csrf
                  {{-- <input type="hidden" name="uuid" value="{{ $post->uuid }}"> --}}
                  {{-- <div class="form-floating mb-4">
                    <input type="text" class="form-control" placeholder="Name*" id="name" name="name">
                    <label for="name">Name *</label>
                  </div>
                  <div class="form-floating mb-4">
                    <input type="email" class="form-control" placeholder="Email*" id="email" name="email">
                    <label for="email">Email*</label>
                  </div>
                  <div class="form-floating mb-4">
                    <textarea name="textarea" class="form-control" placeholder="Comment" style="height: 200px" name="comment" id="comment"></textarea>
                    <label for="comment">Comment *</label>
                  </div>
                  <button type="submit" class="btn btn-primary rounded-pill mb-0">Submit</button>
                </form> --}}
                <!-- /.comment-form -->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.blog -->
        </div>
        <!-- /column -->
        <aside class="col-lg-4 sidebar mt-11 mt-lg-6">
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
            <h4 class="widget-title mb-3">{{ $generaltextNames[8] }}</h4>
            <p>{{ $generaltextNames[9] }}</p>
            <nav class="nav social">
          @php
              $footerData = App\Models\Master\Socialmedia::orderBy('created_at', 'asc')->first();
          @endphp
          @if ($footerData)
          <nav class="nav social">
              <a href={{ $footerData->telegram }}><i class="uil uil-telegram"></i></a>
              {{-- <a href=""><i class="uil uil-facebook-f"></i></a>
              <a href="#"><i class="uil uil-dribbble"></i></a> --}}
              <a href={{ $footerData->instagram }}><i class="uil uil-instagram"></i></a>
              <a href={{ $footerData->youtube }}><i class="uil uil-youtube"></i></a>
          </nav>
          @endif
              {{-- <a href="#"><i class="uil uil-twitter"></i></a>
              <a href="#"><i class="uil uil-facebook-f"></i></a>
              <a href="#"><i class="uil uil-dribbble"></i></a>
              <a href="#"><i class="uil uil-instagram"></i></a>
              <a href="#"><i class="uil uil-youtube"></i></a> --}}
            </nav>
            <!-- /.social -->
          </div>
          <!-- /.widget -->
          <div class="widget">
            @php
              $latestPopularPosts = App\Models\Blog\Post::whereHas('postcategory', function($query) {
              $query->where('title', 'popular');
                  })->latest()->take(5)->get();
            @endphp
            <h4 class="widget-title mb-3">Popular Posts</h4>
            <ul class="image-list">
              @foreach ($latestPopularPosts as $posts)
              <li>
                <figure class="rounded"><a href="/{{ url('posts/detail/' . $posts->uuid) }}"><img src="{{App\Models\Media::getimageweb($posts->meta['media_token'])}}" alt="" /></a></figure>
                <div class="post-content">
                  <h6 class="mb-2"> <a class="link-dark" href="/{{ url('posts/detail/' . $posts->uuid) }}">{{ $posts->name }}</a> </h6>
                  <ul class="post-meta">
                    <li class="post-date"><i class="uil uil-calendar-alt"></i><span>{{ $posts->created_at->format('Y-m-d') }}</span></li>
                  </ul>
                  <!-- /.post-meta -->
                </div>
              </li>       
              @endforeach
            </ul>
            <!-- /.image-list -->
          </div>
          <!-- /.widget -->
          <div class="widget">
            <h4 class="widget-title mb-3">Categories</h4>
            <ul class="unordered-list bullet-primary text-reset">
                <li><a class="filter-item" data-filter=".{{ $posts->postcategory['title'] }}">{{ $posts->postcategory['title'] }}</a>
                </li>
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
<!-- /.content-wrapper -->
  <!-- /.container -->
@endif
@include('landing.partials.footer2')
@endsection