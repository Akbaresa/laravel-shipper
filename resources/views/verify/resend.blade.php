@extends('layouts.main')
@section('content')


    <div class="site-block-wrap">
        <div class="site-blocks-cover " style="background-color: white" data-aos="fade" id="home-section">
          <div class="site-wrap">
              <section class="h-100 gradient-form pt-5" style="background-color: #eee; margin-top:rem;">
                  <div class="container py-5 h-100">
                    @if(session()->has('berhasil'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('berhasil') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                    @endif
                    @if(session()->has('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                    @endif
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-xl-10">
                            <div class="card rounded-3 text-black">
                                <div class="row g-0">
                                    
                                    <div class="col-lg-9">
                                        
                                <img src="{{ asset('images/login_1.jpg') }}" class=" img-fluid" alt="" srcset="">
                            </div>
                            <div class=" d-flex align-items-center text-center">
                                <div class="text-center">
                                    <h5 class="mt-10 mb-0 pb-1">Verify akun email anda</h5>
                                    <form action="{{ route('verification.send') }}" method="get">
                                        <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">resend</button>
                                    </form>
                            </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
            </div>
    </div> <!-- .site-wrap -->
  @endsection