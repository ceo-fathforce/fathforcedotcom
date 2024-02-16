@extends('landing.app')

@section('content')
<div class="content-wrapper">
  <section class="wrapper bg-dark text-white">
    <div class="container pt-18 pt-md-20 pb-21 pb-md-21 text-center">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h1 class="display-1 text-white mb-3">Forgot your Password?</h1>
          <nav class="d-inline-block" aria-label="breadcrumb">
            <ol class="breadcrumb text-white">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page"><a href="/signin">Sign In</a></li>
              <li class="breadcrumb-item active" aria-current="page">Forgot Password</li>
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
  <section class="wrapper bg-light">
    <div class="container pb-14 pb-md-16">
      <div class="row">
        <div class="col mt-n19">
          <div class="card shadow-lg">
            <div class="row gx-0 text-center">
              <div class="col-lg-6 image-wrapper bg-image bg-cover rounded-top rounded-lg-start d-none d-md-block" data-image-src="landing/assets/img/photos/fathforce3d.jpg">
              </div>
              <!--/column -->
              <div class="col-lg-6">
                <div class="p-10 p-md-11 p-lg-13">
                  <h2 class="mb-3 text-start">Enter your Email</h2>
                  <form class="text-start mb-3">
                    <div class="form-floating mb-4">
                      <input type="email" class="form-control" placeholder="Email" id="loginEmail">
                      <label for="loginEmail">Email</label>
                    </div>
                    <a class="btn btn-primary rounded-pill btn-login w-100 mb-2">Requessed new password</a>
                  </form>
                  <!-- /form -->
                  <p class="mb-1"><a href="/signin" class="hover">Sign In</a></p>
                  <!--/.social -->
                </div>
                <!--/div -->
              </div>
              <!--/column -->
            </div>
            <!--/.row -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->
</div>
@include('landing.partials.footer2')
@endsection