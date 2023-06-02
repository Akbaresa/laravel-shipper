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

    <section class="h-100 gradient-form pt-5" style="background-color: #eee; margin-top:rem;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-10">
              <div class="card rounded-3 text-black">
                <div class="row g-0">
                  <div class="col-lg-6">
                    <div class="card-body p-md-5 mx-md-4">
      
                      <div class="text-center">
                        <h4 class="mt-1 mb-90 pb-1"> Registrasi</h4>
                      </div>
      
                      <form action="{{ route('user.store') }}" method="post">
                        @csrf
                        <div class="form-outline mb-3">
                          <input type="text" id="form2Example11" name="nama" class="form-control @error('nama')is-invalid  @enderror " value="{{ old('nama') }}"
                            placeholder="Nama" />
                            @error('nama') 
                            <p class="invalid-feedback">
                               {{ $message}}
                            </p>
                            @enderror
                        </div>
      
                        <div class="form-outline mb-3">
                          <input type="text" id="form2Example22" name="alamat" class="form-control  @error('alamat')is-invalid  @enderror"
                          placeholder="Alamat" value="{{ old('alamat') }}"/>
                          @error('alamat') 
                          <p class="invalid-feedback">
                             {{ $message}}
                          </p>
                          @enderror
                        </div>

                        <div class="form-outline mb-3">
                            <input type="text" id="form2Example22" name="email" class="form-control  @error('email')is-invalid  @enderror"
                            placeholder="E-mail" value="{{ old('email') }}" />
                            @error('email') 
                            <p class="invalid-feedback">
                               {{ $message}}
                            </p>
                            @enderror
                        </div>
                        
                        <div class="form-outline mb-3">
                            <input type="text" id="form2Example22" name="notlp" class="form-control  @error('notlp')is-invalid  @enderror"
                            placeholder="No. Telp" value="{{ old('notlp') }}"/>
                            @error('notlp') 
                            <p class="invalid-feedback">
                               {{ $message}}
                            </p>
                            @enderror
                        </div>

                        <div class="form-outline mb-3">
                            <input type="password" id="form2Example22" name="password" class="form-control  @error('password')is-invalid  @enderror"
                            placeholder="Password" />
                            @error('password') 
                            <p class="invalid-feedback">
                               {{ $message}}
                            </p>
                            @enderror
                        </div>

                        <div class="form-outline mb-3">
                            <input type="password" id="form2Example22" name="password" class="form-control  @error('password')is-invalid  @enderror"
                            placeholder="Re-Type Password" />
                            @error('password') 
                            <p class="invalid-feedback">
                               isi harus sama dengan password diatas
                            </p>
                            @enderror
                        </div>
    
                        <div class="d-flex align-items-center justify-content-between  pb-4">
                          <button type="submit" class="btn btn-outline-danger w-100">Buat</button>
                        </div>
                        <a href="/login" class="font-bold"><h6 class="mb-0 me-2">Login</h6></a>
      
                      </form>
      
                    </div>
                  </div>
                    <div class="col-lg-6 d-flex  gradient-custom-2 d-flex">
                        <img src="images/gudang_3.jpg" class=" img-fluid" alt="" srcset="">
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

    
        <footer class="site-footer pt-5">
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
