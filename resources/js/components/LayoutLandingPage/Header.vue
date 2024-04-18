<template>
  <header class="wrapper bg-light">
    <link rel="shortcut icon" href="~/landing/assets/img/fathlogo.png">
    <link rel="stylesheet" href="~/landing/assets/css/plugins.css">
    <link rel="stylesheet" href="~/landing/assets/css/style.css">
    <link rel="stylesheet" href="~/landing/assets/css/colors/sky.css">
    <link rel="preload" href="~/landing/assets/css/fonts/urbanist.css" as="style" onload="this.rel='stylesheet'">
    <nav class="navbar navbar-expand-lg center-nav transparent navbar-light">
        <div class="container flex-lg-row flex-nowrap align-items-center">
            <div class="navbar-brand w-100">
                <router-link to="/">
                    <img src="~/landing/assets/img/vector.png" srcset="~/landing/assets/img/vector.png 2x" alt="" width="180px" />
                </router-link>
            </div>
            <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                <div class="offcanvas-header d-lg-none">
                    <router-link to="/"><img src="~/landing/assets/img/logo-light.png" srcset="~/landing/assets/img/logo-light@2x.png 2x" alt="" /></router-link>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
                    <ul class="navbar-nav">
                        <li class="nav-item"><router-link class="nav-link" to="/">Home</router-link></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">About</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><router-link class="dropdown-item" to="/company">Company</router-link></li>
                                <li class="nav-item"><router-link class="dropdown-item" to="/service">Service</router-link></li>
                                <li class="nav-item"><router-link class="dropdown-item" to="/portfolio">Portfolio</router-link></li>
                                <li class="nav-item"><router-link class="dropdown-item" to="/product">Product</router-link></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Partner</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><router-link class="dropdown-item" to="/partnerschool">School Partner</router-link></li>
                                <li class="nav-item"><router-link class="dropdown-item" to="/partnercompany">Company Partner</router-link></li>
                            </ul>
                        </li>
                        <li class="nav-item"><router-link class="nav-link" to="/posts">Blog</router-link></li>
                        <li class="nav-item"><router-link class="nav-link" to="/gallery">Gallery</router-link></li>
                    </ul>
                    <!-- /.navbar-nav -->
                    <div class="d-lg-none mt-auto pt-6 pb-6 order-4">
                        <a href="mailto:hi@fathforce.com" class="link-inverse">hi@fathforce.com</a>
                        <br /> 00 (123) 456 78 90 <br />
                        <nav class="nav social social-white mt-4">
                            <a href="#"><i class="uil uil-twitter"></i>twit</a>
                            <a href="#"><i class="uil uil-facebook-f"></i></a>
                            <a href="#"><i class="uil uil-dribbble"></i></a>
                            <a href="#"><i class="uil uil-instagram"></i></a>
                            <a href="#"><i class="uil uil-youtube"></i></a>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="navbar-other w-100 d-flex ms-auto">
                <ul class="navbar-nav flex-row align-items-center ms-auto">
                    <li class="nav-item dropdown language-select text-uppercase">
                        <a class="nav-link dropdown-item dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">En</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a class="dropdown-item" href="#">En</a></li>
                            <li class="nav-item"><a class="dropdown-item" href="#">ID</a></li>
                        </ul>
                    </li>
                    <li class="nav-item d-none d-md-block">
                        <router-link to="/contact" class="btn btn-sm btn-primary rounded-pill">Contact</router-link>
                    </li>
                    <li class="nav-item d-lg-none">
                        <button class="hamburger offcanvas-nav-btn"><span></span></button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
  </header>
</template>

<script>
export default {
  // Komponen Header Vue.js
}
</script>

<style scoped>
/* Gaya CSS khusus untuk komponen Header */
</style>
