@extends('layouts.mainAdmin')
@section('content')
<section class="site-section bg-light bg-image container-xxl position-relative bg-white d-flex p-0 mt-8" id="admin-section">
  <div class="container mt-5">
    <div class="row mb-5 mt-4">
      <div class="col-12 text-center">
        <br>
        <h2 class="section-title mb-3">Sewa</h2>
      </div>
    </div>
    <form action="{{ route('admin.dashboard') }}" method="get">
      @csrf
    <div class=" col-md-5 align-content-md-end">
      <div class="input-group">
        <input type="search" name="search" class="form-control" placeholder="Cari..." aria-label="Cari">
          <button class="btn btn-outline-primary" type="submit">
            <i class="bi bi-search"></i>
          </button>
        </form>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 mb-5">
        <div class="form-outline mb-4">
          <!-- Sale & Revenue Start -->
        <div class="container-fluid pt-4 px-4">
          <div class="row g-4">
              <div class="col-sm-6 col-xl-3">
                  <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                      <i class="fa fa-chart-line fa-3x text-primary"></i>
                      <div class="ms-3">
                          <p class="mb-2">Total Akun</p>
                          <h6 class="mb-0">{{ $total_users . " Akun" }}</h6>
                      </div>
                  </div>
              </div>
              <div class="col-sm-6 col-xl-3">
                  <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                      <i class="fa fa-chart-bar fa-3x text-primary"></i>
                      <div class="ms-3">
                          <p class="mb-2">Total Sewa</p>
                          <h6 class="mb-0">{{ $total_sewa . " Sewa" }}</h6>
                      </div>
                  </div>
              </div>
              <div class="col-sm-6 col-xl-3">
                  <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                      <i class="fa fa-chart-area fa-3x text-primary"></i>
                      <div class="ms-3">
                          <p class="mb-2">Pendapatan Hari Ini</p>
                          <h6 class="mb-0">{{ $uang_today }}</h6>
                      </div>
                  </div>
              </div>
              <div class="col-sm-6 col-xl-3">
                  <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                      <i class="fa fa-chart-pie fa-3x text-primary"></i>
                      <div class="ms-3">
                          <p class="mb-2">Total Pendapatan</p>
                          <h6 class="mb-0">{{ $pendapatanAll }}</h6>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- Sale & Revenue End -->
        
       

      <!-- Recent Sales Start -->
      <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Riwayat Akun Sewa</h6>
            </div>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0 d-grid">
                    <thead>
                        <tr class="text-dark">

                            <th scope="col">username</th>
                            <th scope="col">email</th>
                            <th scope="col">alamat</th>
                            <th scope="col">no telepon</th>
                            <th scope="col" class="col-3">nama perusahaan</th>
                            <th scope="col" class="col-3">tanggal pengambilan</th>
                            <th colspan="1">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach ($users as $user)                    
                      <tr>
                          <td>{{ $user->nama }}</td>
                          <td>{{ $user->email }}</td>
                          <td>{{ $user->alamat }}</td>
                          <td>{{ $user->notlp }}</td>
                          <td>{{ $user->nama_toko }}</td>
                          <td>{{ $user->tanggal_pengambilan }}</td> 
                          <td><a class="btn btn-sm btn-primary" href="/admin/detail/{{ $user->nama }}">Detail</a></td>
                        </tr>
                        @endforeach
                       
                    </tbody>
                </table>
            </div>
            <div class="mt-4">
              {{ $users->links() }}
            </div>
        </div>
    </div>
          </div>
          
      </div>


    
    </div>
  </div>
</section>
@endsection