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
            <section class="h-100 gradient-form pt-5" style="background-color: #eee; margin-top:rem;">
                <div class="container py-5 h-100">
                  @if(session()->has('berhasil'))
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                      {{ session('berhasil') }}
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                  @endif
                  @if(session()->has('error'))
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                      {{ session('error') }}
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                  @endif
                  <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-xl-10">
                      <div class="card rounded-3 text-black">
                        <div class="row g-0">
                          <div class="col-lg-6">
                            <div class="card-body p-md-5 mx-md-4">
                              
                              <div class="text-center">
                                <h4 class="mt-1 mb-5 pb-1">Shipper are The Best Warehouse</h4>
                                <h4 class=" text-success font-bold">Login</h4>
                                
                              </div>
                              <p>.</p>


                              <form action="/login" method="POST">
                                @csrf
                                <div class="form-outline mb-4">
                                  <input type="email" id="form2Example11" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"
                                    placeholder="Email" autofocus/>
                                    @error('email')
                                    <div class="invalid-feedback">
                                      {{ $message }}  
                                    </div> 
                                    @enderror
                                </div>
              
                                <div class="form-outline mb-4">
                                  <input type="password" id="form2Example22" name="password" class="form-control"
                                  placeholder="Password" />
                                </div>
              
                                <div class="text-center pt-1 mb-5 pb-1">
                                  <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Login</button>
                                  <a class="text-muted" href="lupa_password.html">Forgot password?</a>
                                </div>
                              </form>
                              <div class="d-flex align-items-center justify-content-center pb-4">
                                <p class="mb-0 me-50">Belum memiliki akun?</p>
                                <a href="/registrasi"><button type="submit" class="btn btn-outline-danger">Akun baru</button></a>
                                
                              </div>
              
                            </div>
                          </div>
                          <div class="col-lg-6 d-flex  gradient-custom-2 d-flex">
                              <img src="images/gudang_1.jpg" class=" img-fluid" alt="" srcset="">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
          </div>


   


  </div> <!-- .site-wrap -->

  <footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="row">
            <div class="col-md-5">
              <h2 class="footer-heading mb-4">About Us</h2>
              <p>Gudang online adalah platform digital yang menyediakan fasilitas penyimpanan dan distribusi barang secara online. </p>
            </div>
            <div class="col-md-3 mx-auto">
              <h2 class="footer-heading mb-4">Quick Links</h2>
              <ul class="list-unstyled">
                <li><a href="#">About Us</a></li>
                <li><a href="#">Service</a></li>
                <li><a href="#">Testimoni</a></li>
                <li><a href="#">Contact Us</a></li>
              </ul>
            </div>
            
          </div>
        </div>
        <div class="col-md-4">
          <div class="mb-4">
            <h2 class="footer-heading mb-4">Subscribe Newsletter</h2>
          <form action="#" method="post" class="footer-subscribe">
            <div class="input-group mb-3">
              <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary text-black" type="button" id="button-addon2">Send</button>
              </div>
            </div>
          </form>  
          </div>
          
          <div class="">
            <h2 class="footer-heading mb-4">Follow Us</h2>
              <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
              <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
              <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
              <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
          </div>


        </div>
      </div>
      <div class="row pt-5 mt-5 text-center">
        <div class="col-md-12">
          <div class="border-top pt-5">
          <!-- Link back to Free-Template.co can't be removed. Template is licensed under CC BY 3.0. -->
          <p class="copyright"><small>&copy; <script>document.write(new Date().getFullYear());</script> Warehouse. All Rights Reserved.  Design by Teguh, Dimas, Esa</p>
          </div>
        </div>
        
      </div>
    </div>
  </footer>
  @endsection