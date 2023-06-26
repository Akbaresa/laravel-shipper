@extends('layouts.main')
@section('content')

    <section class="h-100 gradient-form pt-5" style="background-color: #eee; margin-top:rem;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-10">
              <div class="card rounded-3 text-black">
                <div class="row g-0">
                  <div class="col-lg-6">
                    <div class="card-body p-md-5 mx-md-4">
      
                      <div class="text-center">
                        <h4 class="mt-1 mb-90 pb-1"> Registrasi</h4>
                      </div>
      
                      <form action="{{ route('user.store') }}" method="post">
                        @csrf
                        <div class="form-outline mb-3">
                          <input type="text" id="form2Example11" name="nama" class="form-control @error('nama')is-invalid  @enderror " value="{{ old('nama') }}"
                            placeholder="Nama" />
                            @error('nama') 
                            <p class="invalid-feedback">
                               {{ $message}}
                            </p>
                            @enderror
                        </div>
      
                        <div class="form-outline mb-3">
                          <input type="text" id="form2Example22" name="alamat" class="form-control  @error('alamat')is-invalid  @enderror"
                          placeholder="Alamat" value="{{ old('alamat') }}"/>
                          @error('alamat') 
                          <p class="invalid-feedback">
                             {{ $message}}
                          </p>
                          @enderror
                        </div>

                        <div class="form-outline mb-3">
                            <input type="text" id="form2Example22" name="email" class="form-control  @error('email')is-invalid  @enderror"
                            placeholder="E-mail" value="{{ old('email') }}" />
                            @error('email') 
                            <p class="invalid-feedback">
                               {{ $message}}
                            </p>
                            @enderror
                        </div>
                        
                        <div class="form-outline mb-3">
                            <input type="text" id="form2Example22" name="notlp" class="form-control  @error('notlp')is-invalid  @enderror"
                            placeholder="No. Telp" value="{{ old('notlp') }}"/>
                            @error('notlp') 
                            <p class="invalid-feedback">
                               {{ $message}}
                            </p>
                            @enderror
                        </div>

                        <div class="form-outline mb-3">
                            <input type="password" id="form2Example22" name="password" class="form-control  @error('password')is-invalid  @enderror"
                            placeholder="Password" />
                            @error('password') 
                            <p class="invalid-feedback">
                               {{ $message}}
                            </p>
                            @enderror
                        </div>

                        <div class="form-outline mb-3">
                            <input type="password" id="form2Example22" name="password_konfirmasi" class="form-control  @error('password')is-invalid  @enderror"
                            placeholder="Re-Type Password" />
                            @error('password') 
                            <p class="invalid-feedback">
                                {{ $message}}
                            </p>
                            @enderror
                        </div>
                        <input type="hidden" name="role" value="user">
                        <div class="d-flex align-items-center justify-content-between  pb-4">
                          <button type="submit" class="btn btn-outline-danger w-100">Buat</button>
                        </div>
                        <a href="/login" class="font-bold"><h6 class="mb-0 me-2">Login</h6></a>
      
                      </form>
      
                    </div>
                  </div>
                    <div class="col-lg-6 d-flex  gradient-custom-2 d-flex">
                        <img src="images/gudang_3.jpg" class=" img-fluid" alt="" srcset="">
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
@endsection
