
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Warehouse</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="{{ secure_asset('ftco-32x32.png') }}">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,900|Oswald:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ secure_asset('fonts/icomoon/style.css') }}">
    <script type="text/javascript"
    src="https://app.sandbox.midtrans.com/snap/snap.js"
    data-client-key="{{ config('Midtrans.client_key') }}"></script>

    <link rel="stylesheet" href="{{ secure_asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/jquery-ui.css' )}}">
    <link rel="stylesheet" href="{{ secure_asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ secure_asset('css/jquery.fancybox.min.css') }}">

    <link rel="stylesheet" href="{{ secure_asset('css/bootstrap-datepicker.css') }}">

    <link rel="stylesheet" href="{{ secure_asset('fonts/flaticon/font/flaticon.css') }}">

    <link rel="stylesheet" href="{{ secure_asset('css/aos.css') }}">

    <link rel="stylesheet" href="{{ secure_asset('css/style.css') }}">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
       
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

    
  @yield('nav')
  @yield('content')
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
                <li><a href="#home-section">About Us</a></li>
                <li><a href="#gudang-section">Service</a></li>
                <li><a href="#about-section">Testimoni</a></li>
                <li><a href="#ontact-section">Contact Us</a></li>
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
  <script src="{{ secure_asset('js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ secure_asset('js/jquery-ui.js') }}"></script>
  <script src="{{ secure_asset('js/popper.min.js') }}"></script>
  <script src="{{ secure_asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ secure_asset('js/owl.carousel.min.js' )}}"></script>
  <script src="{{ secure_asset('js/jquery.countdown.min.js') }}"></script>
  <script src="{{ secure_asset('js/bootstrap-datepicker.min.js') }}"></script>
  <script src="{{ secure_asset('js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ secure_asset('js/aos.js') }}"></script>
  <script src="{{ secure_asset('js/jquery.fancybox.min.js') }}"></script>
  <script src="{{ secure_asset('js/jquery.sticky.js') }}"></script>

  
  <script src="{{ secure_asset('js/main.js') }}"></script>
  </body>
</html>