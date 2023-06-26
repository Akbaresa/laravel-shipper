@extends('layouts.main_nav')
@section('content')

    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url({{ asset('images/gudang_khusus_3.jpg') }});" data-aos="fade">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-5 mx-auto mt-lg-5 text-center">
              <h1>{{ $gk->lokasi }}</h1>
              <p class="mb-5"><strong class="text-white">{{ $gk->harga_sewa }}</strong></p>
              
            </div>
          </div>
        </div>
  
        <a href="#property-details" class="smoothscroll arrow-down"><span class="icon-arrow_downward"></span></a>
      </div>  
  
      <div class="site-section" id="property-details">
        <div class="container">
          <div class="row d-grid justify-content-end">
            <div class="col-lg-12">
              <div class=" align-items-center justify-content-center mx-auto">
                <h4 class="mt-1 mb-90 pb-1">Cetak Kontrak {{ Auth::user()->nama }}</h4>

                <div class="card" style="width: 30rem;">
                    <div class="card-body">
                      <h5 class="card-title">Data Kontrak </h5>
                      
                      <p class="card-text mt-4">Total pembayaran : {{ $gk->harga_sewa }}</p>
                      <p class="card-text">Tanggal pengambilan : {{ $sewa->tanggal_pengambilan }}</p>
                      <p class="card-text">Lokasi pengambilan : {{  $sewa->lokasi_pengambilan  }}</p>
                      <p class="card-text">tipe barang : {{  $sewa->tipe_barang  }}</p>
                      <p class="card-text">Penyewaan gudang : {{ $gk->lokasi }}</p>
                      {{-- <form action="{{ route('gudang-khusus.cetak', Auth::user()->nama) }}" method="get"> --}}
                        <div class="d-flex align-items-center justify-content-between  pb-4">
                            <button class="btn btn-outline-danger w-100" id="pay-button">Bayar</button>
                            

                            <script type="text/javascript">
                              // For example trigger on button clicked, or any time you need
                              var payButton = document.getElementById('pay-button');
                              payButton.addEventListener('click', function () {
                                // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
                                window.snap.pay('{{ $snaptoken }}', {
                                  onSuccess: function(result){
                                    /* You may add your own implementation here */
                                    alert("payment success!"); console.log(result);
                                  },
                                  onPending: function(result){
                                    /* You may add your own implementation here */
                                    alert("wating your payment!"); console.log(result);
                                  },
                                  onError: function(result){
                                    /* You may add your own implementation here */
                                    alert("payment failed!"); console.log(result);
                                  },
                                  onClose: function(){
                                    /* You may add your own implementation here */
                                    alert('you closed the popup without finishing the payment');
                                  }
                                })
                              });
                            </script>
                          </div>
                      </form>
                      <a href="#" class="card-link">cancel</a>
                    </div>
                  </div>

            </div>
          </div>
              </div>
            </div>
            <div class="col-lg-5 pl-lg-5 ml-auto">
              <div class="mb-5">
              </div>
  
              <div class="mb-5">
                <div class="mt-5">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="site-section" id="property-details">
        <div class="container">
            </div>
          </div>
        </div>
      </div>
  

  @endsection
