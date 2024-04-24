<header class="wrapper bg-light">
    <link rel="shortcut icon" href="/landing/assets/img/fathlogo.png">
    <link rel="stylesheet" href="/landing/assets/css/plugins.css">
    <link rel="stylesheet" href="/landing/assets/css/style.css">
    <link rel="stylesheet" href="/landing/assets/css/colors/sky.css">
    <link rel="preload" href="/landing/assets/css/fonts/urbanist.css" as="style" onload="this.rel='stylesheet'">
    <nav class="navbar navbar-expand-lg center-nav transparent navbar-light">
        <div class="container flex-lg-row flex-nowrap align-items-center">
            <div class="navbar-brand w-100">
                <a href="/">
                    <img src="{{asset('/landing/assets/img/vector.png')}}" srcset="/landing/assets/img/vector.png 2x" alt=""
                        width="180px" />
                </a>
            </div>
            <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                <div class="offcanvas-header d-lg-none">
                    <a href="/landing/index.html"><img src="{{asset('/landing/assets/img/logo-light.png')}}"
                            srcset="/landing/assets/img/logo-light@2x.png 2x" alt="" /></a>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#"
                                data-bs-toggle="dropdown">About</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="dropdown-item" href="{{ route('/company') }}">Company</a>
                                </li>
                                <li class="nav-item"><a class="dropdown-item" href="{{ route('/service') }}">Service</a>
                                </li>
                                <li class="nav-item"><a class="dropdown-item"
                                        href="{{ route('/portfolio') }}">Portfolio</a></li>
                                <li class="nav-item"><a class="dropdown-item" href="{{ route('/product') }}">Product</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#"
                                data-bs-toggle="dropdown">Partner</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="dropdown-item" href="{{ route('/partnerschool') }}">School Partner</a>
                                </li>
                                <li class="nav-item"><a class="dropdown-item" href="{{ route('/partnercompany') }}">Company Partner</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="posts">Blog</a></li>
                        <li class="nav-item"><a class="nav-link" href="gallery">Gallery</a></li>
                    </ul>
                    <!-- /.navbar-nav -->
                    <div class="d-lg-none mt-auto pt-6 pb-6 order-4">
                        <a href="mailto:first.last@email.com" class="link-inverse">hi@fathforce.com</a>
                        <br /> 00 (123) 456 78 90 <br />
                        <nav class="nav social social-white mt-4">
                            <a href="#"><i class="uil uil-twitter"></i>twit</a>
                            <a href="#"><i class="uil uil-facebook-f"></i></a>
                            <a href="#"><i class="uil uil-dribbble"></i></a>
                            <a href="#"><i class="uil uil-instagram"></i></a>
                            <a href="#"><i class="uil uil-youtube"></i></a>
                        </nav>
                        <!-- /.social -->
                    </div>
                    <!-- /offcanvas-nav-other -->
                </div>
                <!-- /.offcanvas-body -->
            </div>
            <!-- /.navbar-collapse -->
            <div class="navbar-other w-100 d-flex ms-auto">
                <ul class="navbar-nav flex-row align-items-center ms-auto">
                    <li class="nav-item dropdown language-select text-uppercase">
                        <a class="nav-link dropdown-item dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{strtoupper(Lang::locale())}}
                        </a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a class="dropdown-item" href="lang/en">EN</a></li>
                            <li class="nav-item"><a class="dropdown-item" href="lang/id">ID</a></li>
                        </ul>
                    </li>                    
                    <li class="nav-item d-none d-md-block">
                        <a href="/contact" class="btn btn-sm btn-primary rounded-pill">Contact</a>
                    </li>
                    <li class="nav-item d-lg-none">
                        <button class="hamburger offcanvas-nav-btn"><span></span></button>
                    </li>
                </ul>
                <!-- /.navbar-nav -->
            </div>
            <!-- /.navbar-other -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- /.navbar -->
</header>
<!-- /header -->
