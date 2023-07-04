@extends('layouts.main_nav')
@section('content')

    
    <div class="site-block-wrap">
    <div class="owl-carousel with-dots">
      <div class="site-blocks-cover overlay overlay-2" style="background-image: url(images/hero_1.jpg);" data-aos="fade" id="home-section">


        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-15 mt-lg-10 text-center">
              <h1 class="text-shadow font-weight-bold">Gudang online</h1>
              <p class="mb-5 text-shadow">E-Warehouse membantu mengatur barang, stok, dan pengantaran dengan harga terjangkau</p>
              <p><a href="#gudang-section" target="_blank" class="btn btn-primary px-5 py-3">Get Started</a></p>
              
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
              <p><a href="#gudang-section" target="_blank" class="btn btn-primary px-5 py-3">Get Started</a></p>
              
            </div>
          </div>
        </div>
  
        
      </div>  
    </div>   
    
  </div>      


    <section class="site-section" id="gudang-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">Jenis Gudang</h2>
          </div>
        </div>

        <div class="row justify-content-center d-flex mx-auto align-items-center">
          <div class="col-md-6 col-lg-5 mb-4 mb-lg-4">
            <div class="h-entry">
              <a href="/tipe-gudang-khusus"><img src="images/gudang_khusus.png" alt="Free website template by Free-Template.co" class="img-fluid"></a>
              <h2 class="font-size-regular"><a href="/tipe-gudang-khusus" class="text-dark">Gudang Khusus</a></h2>
              <p>Anda dapat menggunakan seluruh kapasitas dan operasional gudang sesuai dengan kebutuhan anda.</p>
            </div> 
          </div>
          <div class="col-md-6 col-lg-5 mb-4 mb-lg-4">
            <div class="h-entry">
              <a href="/gudang-bersama"><img src="images/gudang_bersama.png" alt="Free website template by Free-Template.co" class="img-fluid"></a>
              <h2 class="font-size-regular"><a href="/gudang-bersama" class="text-dark">Gudang Bersama</a></h2>
              <p>Barang anda akan disimpan dalam gudang bersama dengan perusahaan lainnya.</p>
            </div>
          </div>
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
                <h3>contract Digital</h3>
                <p>Kontrak tersedia secara digital</p>
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
              <p class="mb-4">Tlogobedah , Menganti Gresik</p>

              <p class="mb-0 font-weight-bold">No tlp</p>
              <p class="mb-4"><a href="#">+62 858 0667 6977</a></p>

              <p class="mb-0 font-weight-bold">Email </p>
              <p class="mb-0"><a href="#">Esa@domain.com</a></p>

            </div>
            
          </div>
        </div>
      </div>
    </section>
@endsection