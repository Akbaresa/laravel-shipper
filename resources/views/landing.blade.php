@extends('layouts.main')
@section('content')
    <style>
        .btn-transparent {
        background-color: transparent;
        border: none;
        color: inherit;
        padding: 0;
}

.btn-transparent:hover {
  text-decoration: underline;
}

    </style>
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
            <h1 class="mb-0 site-logo m-0 p-0"><a href="index.html" class="mb-0">Shipper</a></h1>
          </div>

          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right navbar navbar-expand-lg justify-content-end" role="navigation">


                @auth
                <ul class="site-menu main-menu js-clone-nav ms-auto d-none d-lg-block">
                    <li><a href="#home-section" class="nav-link">Home</a></li>
                    <li><a href="#gudang-section" class="nav-link">Gudang</a></li>
                    <li><a href="#about-section" class="nav-link">About</a></li>
                    <li><a href="#contact-section" class="nav-link">Contact</a></li>
                  </ul>
                  <ul class="navbar-nav ms-auto" aria-labelledby="navbarDropdown">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                      {{ auth()->user()->nama }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="#">My dashboard</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <form action="/logout" method="post">
                        @csrf
                        <button class="nav-link disabled btn btn-transparent mt-2 text-white " type="submit" href="#" tabindex="-1" aria-disabled="true">LOGOUT</button>
                    </form>
                  </li>
                </ul>
                @else 
                <ul class="site-menu main-menu js-clone-nav d-flex d-lg-block justify-content-end">
                    <li><a href="#home-section" class="nav-link">Home</a></li>
                    <li><a href="#gudang-section" class="nav-link">Gudang</a></li>
                    <li><a href="#about-section" class="nav-link">About</a></li>
                    <li><a href="#contact-section" class="nav-link">Contact</a></li>
                    <li><a href="/login" class="nav-link">Login</a></li>
                  </ul>
                @endauth
          </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>
    
    <div class="site-block-wrap">
    <div class="owl-carousel with-dots">
      <div class="site-blocks-cover overlay overlay-2" style="background-image: url(images/hero_1.jpg);" data-aos="fade" id="home-section">


        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-15 mt-lg-10 text-center">
              <h1 class="text-shadow font-weight-bold">Gudang berteknologi online</h1>
              <p class="mb-5 text-shadow">E-Warehouse membantu mengatur barang, stok, dan pengantaran dengan harga terjangkau</p>
              <p><a href="https://free-template.co" target="_blank" class="btn btn-primary px-5 py-3">Get Started</a></p>
              
            </div>
          </div>
        </div>
  
        
      </div>  
  
      <div class="site-blocks-cover overlay overlay-2" style="background-image: url(images/hero_2.jpg);" data-aos="fade" id="home-section">
  
  
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-6 mt-lg-5 text-center">
              <h1 class="text-shadow">Dengan biaya terjangkau</h1>
              <p class="mb-5 text-shadow">E-Warehouse membantu mengatur barang, stok, dan pengantaran dengan harga terjangkau</p>
              <p><a href="https://free-template.co" target="_blank" class="btn btn-primary px-5 py-3">Get Started</a></p>
              
            </div>
          </div>
        </div>
  
        
      </div>  
    </div>   
    
  </div>      


  <!-- <div class="site-section" id="properties-section">
      <div class="container">
        <div class="row large-gutters">
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5 ">
            <div class="ftco-media-1">
              <div class="ftco-media-1-inner">
                <a href="property-single.html" class="d-inline-block mb-4"><img src="images/property_1.jpg" alt="Free website template by Free-Template.co" class="img-fluid"></a>
                <div class="ftco-media-details">
                  <h3>HD17 19 Utica Ave.</h3>
                  <p>New York - USA</p>
                  <strong>$20,000,000</strong>
                </div>
  
              </div> 
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5 ">
              <div class="ftco-media-1">
                  <div class="ftco-media-1-inner">
                    <a href="property-single.html" class="d-inline-block mb-4"><img src="images/property_2.jpg" alt="Free website template by Free-Template.co" class="img-fluid"></a>
                    <div class="ftco-media-details">
                      <h3>HD17 19 Utica Ave.</h3>
                      <p>New York - USA</p>
                      <strong>$20,000,000</strong>
                    </div>
      
                  </div> 
                </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5 ">
              <div class="ftco-media-1">
                  <div class="ftco-media-1-inner">
                    <a href="property-single.html" class="d-inline-block mb-4"><img src="images/property_3.jpg" alt="Free website template by Free-Template.co" class="img-fluid"></a>
                    <div class="ftco-media-details">
                      <h3>HD17 19 Utica Ave.</h3>
                      <p>New York - USA</p>
                      <strong>$20,000,000</strong>
                    </div>
      
                  </div> 
                </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5 ">
              <div class="ftco-media-1">
                <div class="ftco-media-1-inner">
                  <a href="property-single.html" class="d-inline-block mb-4"><img src="images/property_1.jpg" alt="Free website template by Free-Template.co" class="img-fluid"></a>
                  <div class="ftco-media-details">
                    <h3>HD17 19 Utica Ave.</h3>
                    <p>New York - USA</p>
                    <strong>$20,000,000</strong>
                  </div>
    
                </div> 
              </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-5 mb-lg-5 ">
                <div class="ftco-media-1">
                    <div class="ftco-media-1-inner">
                      <a href="property-single.html" class="d-inline-block mb-4"><img src="images/property_2.jpg" alt="Free website template by Free-Template.co" class="img-fluid"></a>
                      <div class="ftco-media-details">
                        <h3>HD17 19 Utica Ave.</h3>
                        <p>New York - USA</p>
                        <strong>$20,000,000</strong>
                      </div>
        
                    </div> 
                  </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-5 mb-lg-5 ">
                <div class="ftco-media-1">
                    <div class="ftco-media-1-inner">
                      <a href="property-single.html" class="d-inline-block mb-4"><img src="images/property_3.jpg" alt="Free website template by Free-Template.co" class="img-fluid"></a>
                      <div class="ftco-media-details">
                        <h3>HD17 19 Utica Ave.</h3>
                        <p>New York - USA</p>
                        <strong>$20,000,000</strong>
                      </div>
        
                    </div> 
                  </div>
            </div>

        </div>
      </div>
    </div> -->
    
    
    
    <!-- <section class="site-section" id="agents-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-7 text-left">
            <h2 class="section-title mb-3">Real Estate Agents</h2>
            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus minima neque tempora reiciendis.</p>
          </div>
        </div>
        <div class="row">
          

          <div class="col-md-6 col-lg-4 mb-4">
            <div class="team-member">
              <figure>
                <ul class="social">
                  <li><a href="#"><span class="icon-facebook"></span></a></li>
                  <li><a href="#"><span class="icon-twitter"></span></a></li>
                  <li><a href="#"><span class="icon-linkedin"></span></a></li>
                  <li><a href="#"><span class="icon-instagram"></span></a></li>
                </ul>
                <img src="images/person_1.jpg" alt="Free website template by Free-Template.co" class="img-fluid">
              </figure>
              <div class="p-3 bg-primary">
                <h3 class="mb-2">Allison Holmes</h3>
                <span class="position">Real Estate Agent</span>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4">
            <div class="team-member">
              <figure>
                <ul class="social">
                  <li><a href="#"><span class="icon-facebook"></span></a></li>
                  <li><a href="#"><span class="icon-twitter"></span></a></li>
                  <li><a href="#"><span class="icon-linkedin"></span></a></li>
                  <li><a href="#"><span class="icon-instagram"></span></a></li>
                </ul>
                <img src="images/person_2.jpg" alt="Free website template by Free-Template.co" class="img-fluid">
              </figure>
              <div class="p-3 bg-primary">
                <h3 class="mb-2">Dave Simpson</h3>
                <span class="position">Real Estate Agent</span>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4">
            <div class="team-member">
              <figure>
                <ul class="social">
                  <li><a href="#"><span class="icon-facebook"></span></a></li>
                  <li><a href="#"><span class="icon-twitter"></span></a></li>
                  <li><a href="#"><span class="icon-linkedin"></span></a></li>
                  <li><a href="#"><span class="icon-instagram"></span></a></li>
                </ul>
                <img src="images/person_3.jpg" alt="Free website template by Free-Template.co" class="img-fluid">
              </figure>
              <div class="p-3 bg-primary">
                <h3 class="mb-2">Ben Thompson</h3>
                <span class="position">Real Estate Agent</span>
              </div>
            </div>
          </div>

          
        </div>
      </div>
    </section>

    <section class="py-5 bg-primary site-section how-it-works" id="howitworks-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="section-title mb-3 text-black">How It Works</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 text-center">
            <div class="pr-5 first-step">
              <span class="text-black">01.</span>
              <span class="custom-icon flaticon-house text-black"></span>
              <h3 class="text-black">Find Property.</h3>
              <p class="text-black">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
          </div>

          <div class="col-md-4 text-center">
            <div class="pr-5 second-step">
              <span class="text-black">02.</span>
              <span class="custom-icon flaticon-coin text-black"></span>
              <h3 class="text-dark">Buy Property.</h3>
              <p class="text-black">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
          </div>

          <div class="col-md-4 text-center">
            <div class="pr-5">
              <span class="text-black">03.</span>
              <span class="custom-icon flaticon-home text-black"></span>
              <h3 class="text-dark">Outstanding Houses.</h3>
              <p class="text-black">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
          </div>
        </div>
      </div>  
    </section> -->

    <section class="site-section" id="gudang-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">Tipe Gudang</h2>
          </div>
        </div>

        <div class="row justify-content-center d-flex mx-auto align-items-center">
          <div class="col-md-6 col-lg-5 mb-4 mb-lg-4">
            <div class="h-entry">
              <a href="single.html"><img src="images/gudang_khusus.png" alt="Free website template by Free-Template.co" class="img-fluid"></a>
              <h2 class="font-size-regular"><a href="single.html" class="text-dark">Gudang Khusus</a></h2>
              <p>Anda dapat menggunakan seluruh kapasitas dan operasional gudang sesuai dengan kebutuhan anda.</p>
            </div> 
          </div>
          <div class="col-md-6 col-lg-5 mb-4 mb-lg-4">
            <div class="h-entry">
              <a href="single.html"><img src="images/gudang_bersama.png" alt="Free website template by Free-Template.co" class="img-fluid"></a>
              <h2 class="font-size-regular"><a href="single.html" class="text-dark">Gudang Bersama</a></h2>
              <p>Barang anda akan disimpan dalam gudang bersama dengan perusahaan lainnya.</p>
            </div>
          </div>
          <!-- <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="h-entry">
              <a href="single.html"><img src="images/img_3.jpg" alt="Free website template by Free-Template.co" class="img-fluid"></a>
              <h2 class="font-size-regular"><a href="single.html" class="text-dark">Gudang Sementara</a></h2>
              <p>Cocok untuk pilihan sementara</p>
          </div> -->
        </div>
      </div>
    </section>



    <section class="site-section" id="about-section">
      <div class="container">
        
        <div class="row large-gutters">
          <div class="col-lg-6 mb-5">

              <div class="owl-carousel slide-one-item with-dots">
                  <div><img src="images/gudang_1.jpg" alt="Free website template by Free-Template.co" class="img-fluid"></div>
                  <div><img src="images/gudang_2.jpg" alt="Free website template by Free-Template.co" class="img-fluid"></div>
                  <div><img src="images/gudang_3.jpg" alt="Free website template by Free-Template.co" class="img-fluid"></div>
                </div>

          </div>
          <div class="col-lg-6 ml-auto">
            
            <h2 class="section-title mb-3">Shipper</h2>
                <p class="lead">gudang online tersedia di berbagai tempat murah dan terjangkau</p>
                <p></p>

                <ul class="list-unstyled ul-check success">
                  <li>Penyimpanan dan manajemen stok</li>
                  <li>Distribusi dan pengiriman</li>
                  <li>Integrasi dengan platform online</li>
                  <li>Keamanan dan pemeliharaan</li>
                  <li>Pelaporan dan analisis</li>
                </ul>

                <p><a href="#" class="btn btn-primary mr-2 mb-2">Learn More</a></p>
            
          </div>
        </div>
      </div>
    </section>

    

    <section class="site-section bg-light" id="services-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">Pelayanan yang ditawarkan</h2><br>
          </div>
        </div>
        <div class="row align-items-stretch">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-house"></span></div>
              <div>
                <h3>Tidak ada biaya sewa dimuka</h3>
                <p>Disini anda tidak perlu membayar sewa dimuka</p>
                <br>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-coin"></span></div>
              <div>
                <h3>Invoice Digital</h3>
                <p>Struk pembayaran tersedia secara digital</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-home"></span></div>
              <div>
                <h3>Verifikasi melalui email</h3>
                <p>Semua verifikasi dilakukan secara online melalui email</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-flat"></span></div>
              <div>
                <h3>Asuransi Perlindungan</h3>
                <p>Keamanan barang anda terjamin bersama kami</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="400">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-location"></span></div>
              <div>
                <h3>Pelacakan Barang</h3>
                <p>Anda selalu bisa melacak lokasi terkini dari barang anda</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="500">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-mobile-phone"></span></div>
              <div>
                <h3>Help Center 24/hours</h3>
                <p>Tim kami siap melayani anda setiap hari</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <section class="site-section testimonial-wrap" id="testimonials-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">Testimonials<h2>
          </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="ftco-testimonial-1">
                  <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
                    <img src="images/person_1.jpg" alt="Free website template by Free-Template.co" class="img-fluid mr-3">
                    <div>
                      <h3>Allison Holmes</h3>
                      <span>Customer</span>
                    </div>
                  </div>
                  <div>
                    <p>Sebagai pemilik bisnis online, saya sangat puas dengan pengalaman menggunakan gudang online. Platform ini memberikan solusi yang sangat praktis dan efisien untuk menyimpan dan mengelola stok barang saya.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 mb-4">
                  <div class="ftco-testimonial-1">
                      <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
                        <img src="images/person_2.jpg" alt="Free website template by Free-Template.co" class="img-fluid mr-3">
                        <div>
                          <h3>James Phelps</h3>
                          <span>Customer</span>
                        </div>
                      </div>
                      <div>
                        <p>Gudang online memberikan fasilitas penyimpanan yang aman dan terorganisir. Saya dapat dengan mudah melacak dan memantau stok barang saya melalui sistem yang intuitif dan terintegrasi.</p>
                      </div>
                    </div>
              </div> 

              <div class="col-md-6 mb-4">
                  <div class="ftco-testimonial-1">
                    <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
                      <img src="images/person_3.jpg" alt="Free website template by Free-Template.co" class="img-fluid mr-3">
                      <div>
                        <h3>Nestor Helsin</h3>
                        <span>Customer</span>
                      </div>
                    </div>
                    <div>
                      <p>Integrasi dengan platform online sangat menguntungkan. Saya dapat mengelola stok dan pesanan dengan mudah, memastikan bahwa barang tersedia dan dikirim tepat waktu kepada pelanggan. Hal ini meningkatkan kepuasan pelanggan dan membantu bisnis saya tumbuh dengan baik.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="ftco-testimonial-1">
                        <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
                          <img src="images/person_1.jpg" alt="Free website template by Free-Template.co" class="img-fluid mr-3">
                          <div>
                            <h3>Allison Holmes</h3>
                            <span>Customer</span>
                          </div>
                        </div>
                        <div>
                          <p>Selain itu, fitur pelaporan dan analisis yang disediakan oleh gudang online sangat membantu dalam pengambilan keputusan bisnis. Saya dapat melihat data stok, permintaan pelanggan, dan kinerja operasional dengan mudah</p>
                        </div>
                      </div>
                </div> 
        </div>
      </div>
    </section>

<!--     
    <section class="site-section" id="news-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">News &amp; Events</h2>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="h-entry">
              <a href="single.html"><img src="images/img_1.jpg" alt="Free website template by Free-Template.co" class="img-fluid"></a>
              <h2 class="font-size-regular"><a href="single.html" class="text-dark">Popular Real Estate Properties for 2019</a></h2>
              <div class="meta mb-4">Allison Holmes <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="single.html">News</a></div>
            </div> 
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="h-entry">
              <a href="single.html"><img src="images/img_2.jpg" alt="Free website template by Free-Template.co" class="img-fluid"></a>
              <h2 class="font-size-regular"><a href="single.html" class="text-dark">Popular Real Estate Properties for 2019</a></h2>
              <div class="meta mb-4">James Phelps <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="single.html">News</a></div>
              
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="h-entry">
              <a href="single.html"><img src="images/img_3.jpg" alt="Free website template by Free-Template.co" class="img-fluid"></a>
              <h2 class="font-size-regular"><a href="single.html" class="text-dark">Popular Real Estate Properties for 2019</a></h2>
              <div class="meta mb-4">Allison Holmes <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="single.html">News</a></div>
            </div> 
          </div>
          
        </div>
      </div>
    </section> -->

   


    <section class="site-section bg-light bg-image" id="contact-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">Contact Us</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-7 mb-5">

            

            <form action="#" class="p-5 bg-white">
              
              <h2 class="h4 text-black mb-5"></h2> 

              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Nama Depan</label>
                  <input type="text" id="fname" class="form-control">
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="lname">Nama Belakang</label>
                  <input type="text" id="lname" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label> 
                  <input type="email" id="email" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="subject">Subject</label> 
                  <input type="subject" id="subject" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message">Message</label> 
                  <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Tulis pesan disini..."></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Send Message" class="btn btn-primary btn-md text-white">
                </div>
              </div>

  
            </form>
          </div>
          <div class="col-md-5">
            
            <div class="p-4 mb-3 bg-white">
              <p class="mb-0 font-weight-bold">Alamat</p>
              <p class="mb-4">Rlogobedah , Menganti Gresik</p>

              <p class="mb-0 font-weight-bold">No tlp</p>
              <p class="mb-4"><a href="#">+62 858 0667 6977</a></p>

              <p class="mb-0 font-weight-bold">Email </p>
              <p class="mb-0"><a href="#">Esa@domain.com</a></p>

            </div>
            
          </div>
        </div>
      </div>
    </section>

    
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

  </div> <!-- .site-wrap -->

  <a href="#top" class="gototop"><span class="icon-angle-double-up"></span></a> 

@endsection