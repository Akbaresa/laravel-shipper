
<!DOCTYPE html>
<html lang="en">
  <head>
     <!-- Icon Font Stylesheet -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
 
    <title>Warehouse</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Free-Template.co" />

    <link rel="shortcut icon" href="ftco-32x32.png">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,900|Oswald:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ ('fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ ('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ ('css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ ('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ ('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ ('css/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ ('css/jquery.fancybox.min.css') }}">

    <link rel="stylesheet" href="{{ ('css/bootstrap-datepicker.css') }}">

    <link rel="stylesheet" href="{{ ('fonts/flaticon/font/flaticon.css') }}">

    <link rel="stylesheet" href="{{ ('css/aos.css') }}">

    <link rel="stylesheet" href="{{ ('css/style.css') }}">

    
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300" >
  
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
            <h1 class="mb-0 site-logo m-0 p-0"><a href="index.html" class="mb-0">Warehouse</a></h1>
          </div>

          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="/" class="nav-link">Home</a></li>
                <li><a href="/" class="nav-link">Gudang</a></li>
                <li><a href="/" class="nav-link">About</a></li>
                <li><a href="/" class="nav-link">Contact</a></li>
                <li><a href="/login" class="nav-link">Login</a></li>
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>


    <section class="site-section bg-light bg-image container-xxl position-relative bg-white d-flex p-0 mt-8" id="admin-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <br>
            <h2 class="section-title mb-3">Reservasi</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 mb-5">

            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
              <form class="d-none d-md-flex ms-4">
                  <input class="form-control border-0" type="search" placeholder="Search">
              </form>  
            </nav>
  

            <div class="form-outline mb-4">
              <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
              <div class="row g-4">
                  <div class="col-sm-6 col-xl-3">
                      <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                          <i class="fa fa-chart-line fa-3x text-primary"></i>
                          <div class="ms-3">
                              <p class="mb-2">Penjualan Hari Ini</p>
                              <h6 class="mb-0">4 Blok</h6>
                          </div>
                      </div>
                  </div>
                  <div class="col-sm-6 col-xl-3">
                      <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                          <i class="fa fa-chart-bar fa-3x text-primary"></i>
                          <div class="ms-3">
                              <p class="mb-2">Total Penjualan</p>
                              <h6 class="mb-0">140 blok</h6>
                          </div>
                      </div>
                  </div>
                  <div class="col-sm-6 col-xl-3">
                      <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                          <i class="fa fa-chart-area fa-3x text-primary"></i>
                          <div class="ms-3">
                              <p class="mb-2">Pendapatan Hari Ini</p>
                              <h6 class="mb-0">Rp.5.000.000</h6>
                          </div>
                      </div>
                  </div>
                  <div class="col-sm-6 col-xl-3">
                      <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                          <i class="fa fa-chart-pie fa-3x text-primary"></i>
                          <div class="ms-3">
                              <p class="mb-2">Total Pendapatan</p>
                              <h6 class="mb-0">Rp.250.000.000</h6>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- Sale & Revenue End -->
            
           

          <!-- Recent Sales Start -->
          <div class="container-fluid pt-4 px-4">
            <div class="bg-light text-center rounded p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h6 class="mb-0">Riwayat Reservasi</h6>
                    <th scope="col"><select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                      <option selected>Filter</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select></th>
                </div>
                <div class="table-responsive">
                    <table class="table text-start align-middle table-bordered table-hover mb-0 d-grid">
                        <thead>
                            <tr class="text-dark">

                                <th scope="col">username</th>
                                <th scope="col">email</th>
                                <th scope="col">alamat</th>
                                <th scope="col">notlp</th>
                                <th scope="col" class="col-3">nama perusahaan</th>
                                <th scope="col">Tanggal_reservasi</th>
                                <th colspan="1">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach ($users as $user)                    
                          <tr>
                              <td>{{ $user->nama }}</td>
                              <td>{{ $user->email }}</td>
                              <td>{{ $user->alamat }}</td>
                              <td>{{ $user->notlp }}</td>
                              <td>{{ $user->nama_toko }}</td>
                              <td>{{ $user->tanggal_pengambilan }}</td> 
                              <td><a class="btn btn-sm btn-primary" href="/admin/detail/{{ $user->nama }}">Detail</a></td>
                            </tr>
                            @endforeach
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
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
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque facere laudantium magnam voluptatum autem. Amet aliquid nesciunt veritatis aliquam.</p>
              </div>
              <div class="col-md-3 mx-auto">
                <h2 class="footer-heading mb-4">Quick Links</h2>
                <ul class="list-unstyled">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">Testimonials</a></li>
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
            <p class="copyright"><small>&copy; <script>document.write(new Date().getFullYear());</script> Warehouse. All Rights Reserved.  Design by Me</p>
            </div>
          </div>
          
        </div>
        
      </div>
    </footer>

  </div> <!-- .site-wrap -->

  <a href="#top" class="gototop"><span class="icon-angle-double-up"></span></a> 

  <script src="{{ ('js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ ('js/jquery-ui.js') }}"></script>
  <script src="{{ ('js/popper.min.js') }}"></script>
  <script src="{{ ('js/bootstrap.min.js') }}"></script>
  <script src="{{ ('js/owl.carousel.min.js') }}"></script>
  <script src="{{ ('js/jquery.countdown.min.js') }}"></script>
  <script src="{{ ('js/bootstrap-datepicker.min.js') }}"></script>
  <script src="{{ ('js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ ('js/aos.js') }}"></script>
  <script src="{{ ('js/jquery.fancybox.min.js') }}"></script>
  <script src="{{ ('js/jquery.sticky.js') }}"></script>

  
  <script src="{{ ('js/main.js') }}"></script>

  
    
  </body>
</html>