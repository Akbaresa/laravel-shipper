@extends('layouts.main_nav')
@section('content')

    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url({{ asset('images/gudang_khusus_3.jpg') }});" data-aos="fade">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-5 mx-auto mt-lg-5 text-center">
              <h1>{{ $gks->lokasi }}</h1>
              <p class="mb-5"><strong class="text-white">{{ $gks->nama }}</strong></p>
              
            </div>
          </div>
        </div>
  
        <a href="#property-details" class="smoothscroll arrow-down"><span class="icon-arrow_downward"></span></a>
      </div>  
  
      <div class="site-section" id="property-details">
        <div class="container">
          <div class="row d-grid justify-content-end">
            <div class="col-lg-6">
              <div class=" align-items-center justify-content-center mx-auto">
                <h4 class="mt-1 mb-90 pb-1 text-center">Sewa</h4>

              <form action="{{ route('gudang-khusus.store') }}" method="post"> 
                @csrf
                <div class="form-outline mb-3">
                  <input type="text" id="form2Example11" name="nama_toko" class="form-control @error('nama_toko')is-invalid  @enderror " value="{{ old('nama_toko') }}"
                    placeholder="Nama Perusahaan" />
                    @error('nama_toko') 
                    <p class="invalid-feedback">
                       {{ $message}}
                    </p>
                    @enderror
                </div>

                <div class="form-outline mb-3">
                  <textarea type="text" id="form2Example22" name="alamat_toko" class="form-control  @error('alamat_toko')is-invalid  @enderror"
                  placeholder="Alamat Perusahaan" value="">{{ old('alamat_toko') }}</textarea>
                  @error('alamat_toko') 
                  <p class="invalid-feedback">
                     {{ $message}}
                  </p>
                  @enderror
                </div>

                <div class="form-outline mb-3">
                  <textarea type="text" id="form2Example22" name="lokasi_pengambilan" class="form-control  @error('lokasi_pengambilan')is-invalid  @enderror"
                  placeholder="Lokasi pengambilan" >{{ old('lokasi_pengambilan') }}</textarea>
                  @error('lokasi_pengambilan') 
                  <p class="invalid-feedback">
                     {{ $message}}
                  </p>
                  @enderror
              </div>

                <div class="form-outline mb-3">
                    <h6 class="text-grey ">Tanggal - pengambilan</h6>
                    <input type="date" id="form2Example22" name="tanggal_pengambilan" class="form-control  @error('tanggal_pengambilan')is-invalid  @enderror"
                    placeholder="tanggal - pengambilan" value="{{ old('tanggal_pengambilan') }}" />
                    @error('tanggal_pengambilan') 
                    <p class="invalid-feedback">
                       {{ $message}}
                    </p>
                    @enderror
                </div>
                
                <div class="form-outline mb-3 dropdown">
                  <select class="dropdown-toggle form-control" type="button" id="tagDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" name="total_berat">
                <div class="dropdown-menu w-100" aria-labelledby="tagDropdown" selected>
                  <option selected value="{{ old('total_berat') }}" name="total_berat">Total Berat {{ old('total_berat') }}</option>
                  <option value=">10kg">>10kg</option>
                  <option value=">50kg">>50kg</option>
                  <option value=">100kg">>100kg</option>
              </div>
            </select>

              <input type="hidden" name="tag" id="selectedTag" name="total_berat">
                </div>
                <div class="form-outline mb-3 dropdown">
                  <h6 class="text-grey ">Tipe barang yang anda simpan</h6>
                  <select class="dropdown-toggle form-control" type="button" id="tagDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" name="tipe_barang">
                <div class="dropdown-menu w-100" aria-labelledby="tagDropdown" selected>
                  <option selected value="{{ old('total_berat') }}" name="tipe_barang">Tipe Barang{{ old('tipe_barang') }}</option>
                  <option value="Elektronik">Elektronik</option>
                  <option value="Logistik">Logistik</option>
                  <option value="Industri">Industri</option>
                  <option value="Ruman Tangga">Ruman Tangga</option>
              </div>
            </select>
              <input type="hidden" name="tag" id="selectedTag" name="tipe_barang">
                </div>

                <input type="hidden" value="{{ $gks->id }}" name="gk_id">
                <input type="hidden" value="{{ Auth::user()->id}}" name="user_id">
                <div class="d-flex align-items-center justify-content-between  pb-4">
                  <button type="submit" class="btn btn-outline-danger w-100">SEWA</button>
                </div>

              </form>

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
