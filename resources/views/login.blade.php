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
                          <div class="col-lg-6">
                            <div class="card-body p-md-5 mx-md-4">
                              
                              <div class="text-center">
                                <h4 class="mt-1 mb-5 pb-1">Shipper are The Best Warehouse</h4>
                                <h4 class=" text-success font-bold">Login</h4>
                                
                              </div>
                              <p>.</p>


                              <form action="/login" method="POST">
                                @csrf
                                <div class="form-outline mb-4">
                                  <input type="email" id="form2Example11" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"
                                    placeholder="Email" autofocus/>
                                    @error('email')
                                    <div class="invalid-feedback">
                                      {{ $message }}  
                                    </div> 
                                    @enderror
                                </div>
              
                                <div class="form-outline mb-4">
                                  <input type="password" id="form2Example22" name="password" class="form-control"
                                  placeholder="Password" />
                                </div>
              
                                <div class="text-center pt-1 mb-5 pb-1">
                                  <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Login</button>
                                  <a class="text-muted" href="lupa_password.html">Forgot password?</a>
                                </div>
                              </form>
                              <div class="d-flex align-items-center justify-content-center pb-4">
                                <p class="mb-0 me-50">Belum memiliki akun?</p>
                                <a href="/registrasi"><button type="submit" class="btn btn-outline-danger">Akun baru</button></a>
                                
                              </div>
              
                            </div>
                          </div>
                          <div class="col-lg-6   gradient-custom-2 d-flex">
                              <img src="images/gudang_1.jpg" class=" img-fluid" alt="" srcset="">
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