@extends('layouts.main_nav')
@section('content')

    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url({{ asset($gudang->gambar) }});" data-aos="fade">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-5 mx-auto mt-lg-5 text-center">
              <h1>{{ $gudang->lokasi }}</h1>
              <p class="mb-5"><strong class="text-white"></strong></p>
              
            </div>
          </div>
        </div>
  
        <a href="#property-details" class="smoothscroll arrow-down"><span class="icon-arrow_downward"></span></a>
      </div>  
  
      
      
      <div class="site-section" id="property-details">
        <div class="container">
          <div class="row">
            <div class="col-lg-7">
              <div class="owl-carousel slide-one-item with-dots">
                <div><img src="{{ asset('images/potrait_gudang_khusus_2.jpg') }}" alt="Image" class="img-fluid img-box"></div>
                <div><img src="{{ asset('images/property_2.jpg') }}" alt="Image" class="img-fluid"></div>
                <div><img src="{{ asset('images/property_3.jpg') }}" alt="Image" class="img-fluid"></div>
              </div>
            </div>
            <div class="col-lg-5 pl-lg-5 ml-auto">
              <div class="mb-5">
                <h3 class="text-black mb-4">{{ $gudang->nama }}</h3>
                <p> {{ $gudang->total_ruangan }} ruangan, {{ $gudang->luas }}.</p>
                <p>Kami memiliki gudang penyewaan yang luas dan modern yang terletak {{ $gudang->lokasi }}. Gudang ini memiliki luas sekitar {{ $gudang->luas }} dan dilengkapi dengan fasilitas keamanan yang terdepan, termasuk sistem pemantauan CCTV 24 jam dan akses kontrol yang ketat.</p>
                <p>Gudang kami memiliki struktur yang kokoh dan ruang yang fleksibel, cocok untuk menyimpan inventaris bisnis, barang dagangan, atau peralatan industri. Di dalamnya terdapat ruang kantor yang terpisah untuk kegiatan administrasi dan pertemuan.
                </p>
                <p class="mb-4">Selain itu,  memudahkan aksesibilitas ke pusat bisnis dan pelabuhan terdekat. Anda dapat dengan mudah mengatur pengiriman dan pengambilan barang dengan cepat dan efisien.</p>
                @auth
                <p><a href="{{ route('tipe-gudang.store', ['TipeGudang' =>$slug  , 'gudangKhusus' => $gudang->slug] ) }}" class="btn btn-primary">Sewa Gudang</a></p>
                @else    
                <p><a href="/login" class="btn btn-primary">Sewa Gedung</a></p>
                @endauth
              </div>
  
              <div class="mb-5">
                
                <div class="mt-5">
                  <img src="{{ asset('images/teguh.jpg') }}" alt="Image" class="w-25 mb-3 rounded-circle">
                  <h4 class="text-black">Teguh Firdaus</h4>
                  <p class="text-muted mb-4">Sales gudang yang berpengalaman</p>
                  <p>Jika anda bingung akan gudang khusus itu apa untuk mengetahui nya dengan lanjut anda bisa chat sales kita , pertanyaan pertanyaan anda akan dijawab oleh sales kita yang sudah berpengalaman pada bidangnya</p>
                  <p><a href="{{ $chat }}" class="btn btn-primary btn-sm">Contact Agent</a></p>
                </div>
              </div>
  
            </div>
          </div>
        </div>
      </div>

      <div class="site-section" id="property-details">
        <div class="container">
                <h1>Peta Lokasi</h1>

                <iframe class=" d-flex " src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.5836660476252!2d107.10370117490102!3d-6.318290061828044!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e699b665fa14a91%3A0xc35ae6189e4238f4!2sGudang%20Cikarang%20Blok%20AE%20-%20MMP%20Warehouse%20VI!5e0!3m2!1sid!2sid!4v1685893589213!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
      </div>
  <style>
    iframe {
      width: 100%;
    }
  </style>
  @endsection
