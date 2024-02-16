@extends('landing.app')

@section('content')
    <div class="content-wrapper">
        @include('landing.partials.header')
        <section class="wrapper bg-soft-primary">
            <div class="container pt-10 pb-12 pt-md-14 pb-md-16 text-center">
                <div class="row">
                    <div class="col-md-10 col-lg-8 col-xl-7 col-xxl-6 mx-auto">
                        <h1 class="display-1 mb-3">Terms and Conditions</h1>
                        <nav class="d-inline-block" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Terms and Conditions</li>
                            </ol>
                        </nav>
                        <!-- /nav -->
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /section -->
        <div class="container">
            <div class="row gx-0">
                <aside class="col-xl-3 sidebar sticky-sidebar mt-md-0 py-16 d-none d-xl-block">
                    <div class="widget">
                        <nav id="sidebar-nav">
                            <ul class="list-unstyled text-reset">
                                <li><a class="nav-link scroll active" href="#terms-conditions">1. Terms & Conditions</a>
                                </li>
                                <li><a class="nav-link scroll" href="#privacy-policy">2. Privacy Policy</a></li>
                                <li><a class="nav-link scroll" href="#user-policy">3. User Policy</a></li>
                                <li><a class="nav-link scroll" href="#copyrights">4. Copyrights</a></li>
                            </ul>
                        </nav>
                        <!-- /nav -->
                    </div>
                    <!-- /.widget -->
                </aside>
                <!-- /column -->
                <div class="col-xl-9 mt-md-0 py-16">
                    <div class="row gx-0">
                        @foreach ($terms->sortBy('created_at') as $item)
                            <div class="col-md-12 mb-4">
                                <section id="{{ $item->id }}" class="wrapper">
                                    <div class="card">
                                        <div class="card-body p-10">
                                            <h2 class="mb-3">{{ $item->name }}</h2>
                                            <p>{{ $item->description }}</p>
                                        </div>
                                        <!--/.card-body -->
                                    </div>
                                    <!--/.card -->
                                </section>
                            </div>
                        @endforeach
                    </div>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
<!-- Add this script at the bottom of your HTML file -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
      // Get all the scroll links
      const scrollLinks = document.querySelectorAll('.nav-link.scroll');
  
      // Add click event listeners to each scroll link
      scrollLinks.forEach(function(link) {
        link.addEventListener('click', function(e) {
          e.preventDefault();
  
          // Get the target section ID from the href attribute
          const targetId = this.getAttribute('href').substring(1);
  
          // Scroll to the target section smoothly
          document.getElementById(targetId).scrollIntoView({
            behavior: 'smooth'
          });
        });
      });
  
      // Detect changes in the URL hash and scroll to the corresponding section
      window.addEventListener('hashchange', function() {
        const targetId = location.hash.substring(1);
        const targetElement = document.getElementById(targetId);
  
        if (targetElement) {
          targetElement.scrollIntoView({
            behavior: 'smooth'
          });
        }
      });
    });
  </script>
    @include('landing.partials.footer2')
@endsection
