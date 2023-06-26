@extends('layouts.main_nav')
@section('content')

<section class="site-section bg-light bg-image container-xxl position-relative bg-white d-flex p-0" id="DetailTransaksi-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-12 text-center">
          <br>
          <h2 class="section-title mb-3">Detail Transaksi {{ $user->nama }}</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 mb-5">
          <div class="form-outline mb-4">
              <div class="col-12">
                  <div class="bg-light rounded h-100 p-4">
                      <h6 class="mb-4">User</h6>
                      <div class="table-responsive">
                          <table class="table">
                              <thead>
                                  <tr>
                                      <th scope="col">username</th>
                                      <th scope="col">alamat</th>
                                      <th scope="col">no telpon</th>
                                      <th scope="col">email</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td>{{ $user->nama }}</td>
                                      <td>{{ $user->alamat }}</td>
                                      <td>{{ $user->notlp }}</td>
                                      <td>{{ $user->email }}</td>
                                  </tr>
                              
                              </tbody>
                          </table>
                          <div class="text-right">
                              <a class="btn btn-sm btn-primary" href="">Edit</a>
                              <a class="btn btn-sm btn-primary" href="">Hapus</a>
                          </div>
                          
                      </div>
                  </div>
              </div>
          </div>
          <div class="form-outline mb-4">
              <div class="col-12">
                  <div class="bg-light rounded h-100 p-4">
                      <h6 class="mb-4">Reservasi</h6>
                      <div class="table-responsive">
                          <table class="table">
                              <thead>
                                  <tr>
                                      
                                      <th scope="col">nama perusahaan</th>
                                      
                                      <th scope="col">total berat</th>
                                      <th scope="col">tipe barang</th>
                                      <th scope="col">lokasi pengambilan</th>
                                      <th scope="col">tanggal pengambilan</th>
                                      
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                    <td>{{ $sewa->nama_toko }}</td>
                                    <td>{{ $sewa->total_berat }}</td>
                                    <td>{{ $sewa->tipe_barang }}</td>
                                    <td>{{ $sewa->lokasi_pengambilan }}</td>
                                    <td>{{ $sewa->tanggal_pengambilan }}</td>
                                  </tr>
                              </tbody>
                              
                          </table>
                      
                          <div class="text-right">
                            <a class="btn btn-sm btn-primary" href="">Verifikasi</a>
                          </div>
                          
                      </div>
                  </div>
              </div>
        </div>

        

    <div class="form-outline mb-4">
      <div class="col-12">
          <div class="bg-light rounded h-100 p-4">
              <h6 class="mb-4">Gudang Khusus</h6>
              <div class="table-responsive">
                  <table class="table">
                      <thead>
                          <tr>
                              <th scope="col">lokasi</th>
                              <th scope="col">luas</th>
                              <th scope="col">suhu</th>
                              <th scope="col">harga</th>
                              <th scope="col">total ruangan</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td>{{ $gudang->lokasi }}</td>
                              <td>{{ $gudang->luas }}</td>
                              <td>{{ $gudang->suhu }}</td>
                              <td>{{ $gudang->harga_sewa }}</td>
                              <td>{{ $gudang->total_ruangan }}</td>
                          </tr>
                      </tbody>
                  </table>
                  
              </div>
          </div>
      </div>
      
</div>

<div class="form-outline mb-4">
  <div class="col-12">
      <div class="bg-light rounded h-100 p-4">
          <h6 class="mb-4">Gudang Bersama</h6>
          <div class="table-responsive">
              <table class="table">
                  <thead>
                      <tr>
                          <th scope="col">#</th>
                          <th scope="col">tipe_gudang</th>
                          <th scope="col">lokasi</th>
                          <th scope="col">harga</th>
                          
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <th scope="row">1</th>
                          <td>Gudang Bersama</td>
                          <td>A1</td>
                          <td>150.000</td>
                     
                     
                      </tr>
                  </tbody>
              </table>
              <div class="text-right">
              </div>
              
          </div>
      </div>
  </div>
</div>
<div class="form-outline mb-4">
  <div class="col-12">
      <div class="bg-light rounded h-100 p-4">
          <h6 class="mb-4">Rak</h6>
          <div class="table-responsive">
              <table class="table">
                  <thead>
                      <tr>
                          <th scope="col"></th>
                          <th scope="col">tipe_rak</th>
                          <th scope="col">lokasi_rak</th>
                          <th scope="col">ukuran_rak</th>
                          <th scope="col">harga</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <th scope="row">1</th>
                          <td>Dingin</td>
                          <td>A0001</td>
                          <td>50 x 50 x 50 cm</td>
                          <td>50.000</td>
                     
                      </tr>
                  </tbody>
              </table>
              <div class="text-right">
              </div>
              
          </div>
      </div>
  </div>
</div>
<div class="form-outline mb-4">
  <div class="col-12">
      <div class="bg-light rounded h-100 p-4">
          <h6 class="mb-4">Barang</h6>
          <div class="table-responsive">
              <table class="table">
                  <thead>
                      <tr>
                          <th scope="col">#</th>
                          <th scope="col">nama_barang</th>
                          <th scope="col">jumlah</th>
                          <th scope="col">ukuran</th>
                          <th scope="col">tipe</th>
                          <th scope="col">berat</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <th scope="row">1</th>
                          <td>Kompor</td>
                          <td>10</td>
                          <td>100 x 50 cm</td>
                          <td>Tidak Mudah Pecah</td>
                          <td>250 kg</td>
                     
                      </tr>
                      <tr>
                          <th scope="row">2</th>
                          <td>Gelas</td>
                          <td>40</td>
                          <td>10 x 5 cm</td>
                          <td>Mudah Pecah</td>
                          <td>20 kg</td>
                         
                      </tr>
                      <tr>
                          <th scope="row">3</th>
                          <td>Tv</td>
                          <td>20</td>
                          <td>123 x 70 cm</td>
                          <td>Mudah Pecah</td>
                          <td>40 kg</td>
                         
                      </tr>
                  </tbody>
              </table>
              <div class="text-right">
                  <a class="btn btn-sm btn-primary" href="">Edit</a>
                  
                  <a class="btn btn-sm btn-primary" href="">Hapus</a>
              </div>
              
          </div>
      </div>
  </div>
</div>

<div class="form-outline mb-4">
  <div class="col-12">
      <div class="bg-light rounded h-100 p-4">
          <h6 class="mb-4">Pengirim</h6>
          <div class="table-responsive">
              <table class="table">
                  <thead>
                      <tr>
                          <th scope="col">#</th>
                          <th scope="col">nama_pegirim</th>
                          <th scope="col">tipe_pengirim</th>
                          <th scope="col">tanggal_pengiriman</th>
                          <th scope="col">harga</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <th scope="row">1</th>
                          <td>Rudi</td>
                          <td>Doe</td>
                          <td>2023-05-22 09:00:00</td>
                          <td>Rp. 50.000</td>
                     
                      </tr>
                      <tr>
                          <th scope="row">2</th>
                          <td>Mark</td>
                          <td>Doe</td>
                          <td>2023-05-22 15:00:00</td>
                          <td>Rp. 100.000</td>
                         
                      </tr>
                      <tr>
                          <th scope="row">3</th>
                          <td>Jacob</td>
                          <td>Doe</td>
                          <td>2023-06-22 10:00:00</td>
                          <td>Rp. 170.000</td>

                      </tr>
                  </tbody>
              </table>
              <div class="text-right">
                  <a class="btn btn-sm btn-primary" href="">Edit</a>
                  <a class="btn btn-sm btn-primary" href="">Hapus</a>
              </div>
              
          </div>
      </div>
  </div>
</div>
  
      </div>
    </div>
  </section>


</div> <!-- .site-wrap -->
@endsection