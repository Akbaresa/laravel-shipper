@extends('layouts.main')
@section('content')
<section class="site-section bg-light bg-image container-xxl position-relative bg-white d-flex p-0 mt-8" >
<div class="container mt-5">
    <div class="row mb-5 mt-4">
      <div class="col-12">
        <div class=" float-right mt-5" id="">
          
         
            <h4>Category</h4>
            <ul class=" text-end" style="list-style: none">
              @foreach ($allGudang as $tipe)
                <li>
                  <a class="btn {{ Request::is('tipe-gudang-khusus/'.$tipe->nama) ? 'btn-secondary' : '' }}" href="/tipe-gudang-khusus/{{ $tipe->nama }}">{{ $tipe->nama }}</a>
                </li>
              @endforeach
            </ul>
          </div>
        <h4 class="mt-5">tipe gudang {{ $slug }}</h4>          
        @foreach ($gudangs as $gudang)
        <div class="mt-5">
          <div class="card" style="width: 30rem">
            <img src="{{ asset($gudang->gambar)  }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{ $gudang->nama }}</h5>
            <p class="card-text">gudang ini memiliki {{ $gudang->total_ruangan }} ruangan dan dengan suhu rata rata {{ $gudang->suhu }}.</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Lokasi : <p>{{ $gudang->lokasi }}</p></li>
            <li class="list-group-item">Harga : <p>Rp. {{ $gudang->harga_sewa }}</p></li>
            <li class="list-group-item">Luas : <p>{{ $gudang->luas }}</p></li>
          </ul>
          <div class="card-body">
            <a href="{{ route('tipe-gudang.sewa',['TipeGudang' =>$slug  , 'gudangKhusus' => $gudang->slug ] ) }}" class="card-link btn btn-danger">Sewa</a>
          </div>
        </div>
        </div>     
        @endforeach
          
            
        </div>
    </div>
</div>
</section>
@endsection