@extends('layouts.main')
@section('content')
      
<div class="site-wrap">
  <div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close mt-3">
        <span class="icon-close2 js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>
  <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-6 col-xl-2">
          <h1 class="text-black mb-0 site-logo m-0 p-0 "><a href="index.html" class="mb-0 text-black">Shipper</a></h1>
        </div>
        <div class="col-12 col-md-10 d-none d-xl-block text-black">
          <nav class="site-navigation position-relative text-right text-black" role="navigation">
            <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
              <li><a href="/#home-section" class="nav-link text-black">Home</a></li>
              <li><a href="/#gudang-section" class="nav-link text-black">Gudang</a></li>
              <li><a href="/#about-section" class="nav-link text-black">About</a></li>
              <li><a href="/#contact-section" class="nav-link text-black">Contact</a></li>
              <li><a href="" class="nav-link text-success">Login</a></li>
            </ul>
          </nav>
        </div>
        <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white float-right"><span class="icon-menu h3"></span></a></div>
      </div>
    </div>
  </header>
    
  <div class="site-block-wrap">
    <div class="site-blocks-cover " style="background-color: white" data-aos="fade" id="home-section">
      <div class="site-wrap">
        <h1>halo user</h1>
      </div>
    </div>
   </div>
@endsection