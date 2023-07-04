@extends('layouts.main')
@section('content')
<section class="site-section bg-light bg-image container-xxl position-relative bg-white d-flex p-0 mt-8" >
<div class="container mt-5">
    <div class="row mb-5 mt-4">
      <div class="col-12 text-center">
        <div class="col-md-8 text-left mt-5">
            <h3>Tipe Gudang</h3>
            @foreach ($tipeGudangs as $tg)              
            <div class="card mt-4" style="width: 100%;">        
                <div class="card-body">
                  <h5 class="card-title">{{ $tg->nama }}</h5>
                  <p class="card-text">{{ $tg->excerpt }}</p>
                  <a href="/tipe-gudang-khusus/{{ $tg->slug }}" class="btn btn-primary">Masuk</a>
                </div>
              </div>
            @endforeach

            </div>
        </div>
    </div>
</div>
</section>
@endsection