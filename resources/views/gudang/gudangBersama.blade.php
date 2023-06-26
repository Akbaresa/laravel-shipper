@extends('layouts.main_nav')
@section('content')
  
<div class="site-blocks-cover overlay" style="background-image: url({{ asset('/images/resend_1.jpg') }});" data-aos="fade" id="home-section">


    <div class="container ">
      <div class="row align-items-center justify-content-center">
        <div class="col-md-6 mt-lg-5 text-center">
          <h1>Pilih Tipe Gudang yang anda inginkan sesuai dengan kebutuhan anda</h1>
        </div>
      </div>
    </div>

    <a href="#listings-section" class="smoothscroll arrow-down"><span class="icon-arrow_downward"></span></a>
  </div>  
  
  <div><h1 style="text-align: center; margin-top: 3cm;"><b>Tipe Gudang</b></h1></div>
    
    <div class="site-section" id="listings-section">
        
      <div class="container">

              <div class="row large-gutters">
                  <div class="col-md-6 col-lg-100 mb-5 mb-lg-5 ">
                    <div class="ftco-media-1">
                      <div class="ftco-media-1-inner">
                        <a href="property-single.html" class="d-inline-block mb-4"><img src="{{ asset('images/gudangKhusus.jpg') }}" alt="Image" class="img-fluid"></a>
                        <div class="ftco-media-details">
                          <h3>Gudang Khusus</h3>
                          <p>Buat gudang sesaui dengan keinginan dan kebutuhan anda</p>
                          <strong>$20,000,000</strong>
                        </div>
                      </div> 
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-50 mb-5 mb-lg-5 ">
                      <div class="ftco-media-1">
                          <div class="ftco-media-1-inner">
                            <a href="property-single.html" class="d-inline-block mb-4"><img src="images/gudangBersama.png" alt="Image" class="img-fluid"></a>
                            <div class="ftco-media-details">
                              <h3>Gudang Bersama</h3>
                              <p>Berbagi gudang dengan pengguna lain dan biaya yang lebih terjangkau</p>
                              <strong>$20,000,000</strong>
                            </div>        
                          </div> 
                        </div>
                  </div>
                </div>

                <div class="col-lg-6">

                    <div class="mb-5">
                      <h3 class="text-black mb-2 h5">Lokasi Gudang</h3>
                      <form action="#">
                        <div class="form-group">
                          <div class="select-wrap">
                            <span class="icon icon-keyboard_arrow_down"></span>
                            <select class="form-control px-3">
                              <option value="" disabled selected hidden>Pilih lokasi gudang yang anda inginkan</option>
                              <option value="">Bandung</option>
                              <option value="">Jakarta</option>
                              <option value="">Surabaya</option>
                            </select>
                          </div>
                        </div>
                      </form>
                      </div>
                      <div class="mb-5">
                        <h3 class="text-black mb-2 h5">Tipe Rak</h3>
                        <form action="#">
                          <div class="form-group">
                            <div class="select-wrap">
                              <span class="icon icon-keyboard_arrow_down"></span>
                              <select class="form-control px-3">
                                <option value="" disabled selected hidden>Pilih tipe Rak yang sesuai</option>
                                <option value="">Rak 1</option>
                                <option value="">Rak 2</option>
                                <option value="">Rak 3</option>
                              </select>
                            </div>
                          </div>
                        </form>
                        </div>
                        <div class="mb-5">
                          <h3 class="text-black mb-2 h5">Lokasi Rak</h3>
                          <form action="#">
                            <div class="form-group">
                              <div class="select-wrap">
                                <span class="icon icon-keyboard_arrow_down"></span>
                                <select class="form-control px-3">
                                  <option value="" disabled selected hidden>Pilih lokasi Rak untuk barang anda</option>
                                  <option value="">Lorong A</option>
                                  <option value="">Lorong B</option>
                                  <option value="">Lorong C</option>
                                </select>
                              </div>
                            </div>
                          </form>
                        </div>
                        <div class="mb-5">
                          <h3 class="text-black mb-2 h5">Ukuran Rak</h3>
                          <input type="text" id="fname" class="form-control" placeholder="Ketikkan ukuran Panjang, Lebar, & Tinggi rak yang diperlukan">
                        </div>
    
                        <div>
                          <h2 style="text-align: center; margin-top: 3cm;">Detail Barang</h2>
                            <div class="mb-3">
                                <h3 class="text-black mb-2 h5">Nama Barang</h3>
                                <input type="text" id="fname" class="form-control" placeholder="Ketikkan Nama barang">
                            </div>
                            <div class="mb-2">
                                <h3 h3 class="text-black mb-2 h5">Jumlah</h3>
                                <input type="text" id="fname" class="form-control" placeholder="Ketikkan Jumlah barang">
                            </div>
                            <div class="mb-3">
                                <h3 h3 class="text-black mb-2 h5">Ukuran</h3>
                                <input type="text" id="fname" class="form-control" placeholder="Ketikkan ukuran Panjang, Lebar, & Tinggi barang">
                            </div>
                            <div class="mb-4">
                              <h3 h3 class="text-black mb-2 h5">Tipe</h3>
                              <input type="text" id="fname" class="form-control" placeholder="Ketikkan Tipe barang">
                            </div>
                            <div class="mb-5">
                              <h3 h3 class="text-black mb-2 h5">Berat</h3>
                              <input type="text" id="fname" class="form-control" placeholder="Ketikkan Berat barang">
                            </div>
                            <div class="d-flex align-items-center justify-content-between  pb-4">
                                <button type="submit" class="btn btn-outline-danger w-100">SEWA</button>
                              </div>
                            </div>
                        </div>
                        
                </div>
        
                    </div>
              </div>
          </div>
        </div>
          </div>
        </div>
      </div>
      </div>
    </div>
@endsection