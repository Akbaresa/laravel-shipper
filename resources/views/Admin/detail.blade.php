@extends('layouts.mainAdmin')
@section('content')

<section class="site-section bg-light bg-image container-xxl position-relative bg-white d-flex p-0" id="DetailTransaksi-section">
    <div class="container mt-5">
      <div class="row mb-5 mt-5">
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
                    <form action="{{ route('admin.update', [ 
                        'user' => $user->id , 
                        'sewa' => $sewa->id] )  
                    }}" method="POST" >
                        @csrf
                        @method('PUT')
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

                                        <td>
                                            <button id="nama" type="button" class="noBorder" onclick="convertToInput('nama', 
                                            '{{ $user->nama }}')">
                                                {{ $user->nama }}
                                            </button>
                                        </td>
                                        <td>
                                            <button id="alamat" type="button" class="noBorder" onclick="convertToInput('alamat', 
                                            '{{ $user->alamat }}')">
                                                {{ $user->alamat }}
                                            </button>
                                        </td>
                                        <td>
                                            <button id="notlp" type="button" class="noBorder" onclick="convertToInput('notlp', 
                                            '{{ $user->notlp }}')">
                                                {{ $user->notlp }}
                                            </button>
                                        </td>
                                        <td>
                                            <button id="email" type="button" class="noBorder" onclick="convertToInput('email', 
                                            '{{ $user->email }}')">
                                                {{ $user->email }}
                                            </button>
                                        </td>

                              </tbody>
                          </table>
                            <h6 class="mb-4">Sewa</h6>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">nama perusahaan</th>
                                            <th scope="col">total berat</th>
                                            <th scope="col">tipe barang</th>
                                            <th scope="col">lokasi pengambilan</th>
                                            <th scope="col">tanggal pengambilan</th>
                                            <th scope="col">status pembayaran</th>
                                            <th scope="col">tanggal pembayaran</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                                                              
                                          <td>
                                              <button id="nama_toko" type="button" class="noBorder" onclick="convertToInput('nama_toko', 
                                              '{{ $sewa->nama_toko }}')">
                                                  {{ $sewa->nama_toko }}
                                              </button>
                                          </td>
                                          <td>
                                              <button id="total_berat" type="button" class="noBorder" onclick="convertToInput('total_berat', 
                                              '{{ $sewa->total_berat }}')">
                                                  {{ $sewa->total_berat }}
                                              </button>
                                          </td>
                                          <td>
                                              <button id="tipe_barang" type="button" class="noBorder" onclick="convertToInput('tipe_barang', 
                                              '{{ $sewa->tipe_barang }}')">
                                                  {{ $sewa->tipe_barang }}
                                              </button>
                                          </td>
                                          <td>
                                              <button id="lokasi_pengambilan" type="button" class="noBorder" onclick="convertToInput('lokasi_pengambilan', 
                                              '{{ $sewa->lokasi_pengambilan }}')">
                                                  {{ $sewa->lokasi_pengambilan }}
                                              </button>
                                          </td>
                                          <td>
                                              <button id="tanggal_pengambilan" type="button" class="noBorder" onclick="convertToInput('tanggal_pengambilan', 
                                              '{{ $sewa->tanggal_pengambilan }}')">
                                                  {{ $sewa->tanggal_pengambilan }}
                                              </button>
                                          </td>
                                          <td>
                                              <button id="status" type="button" class="noBorder" onclick="convertToInput('status', 
                                              '{{ $sewa->status }}')">
                                                  {{ $sewa->status }}
                                              </button>
                                          </td>
                                          <td>
                                              <button id="tgl_byr" type="button" class="noBorder" onclick="convertToInput('tgl_byr', 
                                              '{{ $sewa->tgl_byr }}')">
                                                  {{ $sewa->tgl_byr }}
                                              </button>
                                          </td>
                                        </tr>
                                    </tbody>
                                  
                                </table>
                                <div class="text-right">
                                  <button type="button" class="btn btn-primary" onclick="showConfirmationPopup()">simpan perubahan</button>
                                  <button class="btn btn-sm btn-danger" href="" type="button" onclick="showDeletePopup()">delete</button>
                                </div>
                                <div id="confirmationPopup" class="popup">
                                    <div class="popup-content">
                                      <h5>Anda yakin ingin mengupdate data tersebut?</h5>
                                      <div class="buttons">
                                        <button class="btn btn-success" onclick="updateData()">Ya</button>
                                    </form>
                                        <button class="btn btn-danger" onclick="cancelUpdate()">Tidak</button>
                                      </div>
                                    </div>
                                  </div>
                                <form action="{{ route('admin.delete', $user->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <div id="deletePopup" class="popup">
                                    <div class="popup-content">
                                      <h5>Anda yakin ingin hapus data tersebut?</h5>
                                      <div class="buttons">
                                        <button class="btn btn-success" type="submit" onclick="deleteData()">Ya</button>
                                    </form>
                                        <button class="btn btn-danger" type="button" onclick="cancelDelete()">Tidak</button>
                                      </div>
                                    </div>
                                  </div>
                            </div>
                        </div>
                    </div>
              </div>
          
              
      
          <div class="form-outline mb-4 mt-4">
            <div class="col-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Gudang </h6>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">tipe gudang</th>
                                    <th scope="col">lokasi</th>
                                    <th scope="col">luas</th>
                                    <th scope="col">suhu</th>
                                    <th scope="col">harga</th>
                                    <th scope="col">total ruangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>gudang </td>
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
              </div>
          </div>
          <div class="form-outline mb-4">
              <div class="col-12">
                 
      </div>  
</div> 
      </div>
    </div>
  </section>
</div> <!-- .site-wrap -->
<script>
    function convertToInput(buttonId, value) {
        var button = document.getElementById(buttonId);
        button.outerHTML = '<input type="text" name="' + buttonId + '" value="' + value + '">';
    }

    //update confirmation
    function showConfirmationPopup() {
    var confirmationPopup = document.getElementById('confirmationPopup');
    confirmationPopup.style.display = 'block';
    }

    function updateData() {
    // Lakukan aksi update di sini
    console.log("Update data");

    // Tutup popup
    closeConfirmationPopup();
    }

    function cancelUpdate() {
    console.log("Batal update");

    // Tutup popup
    closeConfirmationPopup();
    }

    function closeConfirmationPopup() {
    var confirmationPopup = document.getElementById('confirmationPopup');
    confirmationPopup.style.display = 'none';
    }



    // delete confirmation
    function showDeletePopup() {
    var confirmationPopup = document.getElementById('deletePopup');
    confirmationPopup.style.display = 'block';
    }

    function deleteData() {
    // Lakukan aksi update di sini
    console.log("hapus data");

    // Tutup popup
    closeDeletePopup();
    }

    function cancelDelete() {
    console.log("Batal hapus");

    // Tutup popup
    closeDeletePopup();
    }

    function closeDeletePopup() {
    var deletePopup = document.getElementById('deletePopup');
    deletePopup.style.display = 'none';
    }

</script>
<style>
    .noBorder {
        border: none;
        background-color: transparent;
        cursor: pointer;
        color: #61686a;
        /* tambahkan gaya lain sesuai kebutuhan */
    }
    .noBorder:hover {
        color: #00ffc8;
    }
    .popup {
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5);
  z-index: 9999;
}

.popup-content {
  background-color: #fff;
  max-width: 300px;
  margin: 0 auto;
  margin-top: 20vh;
  padding: 20px;
  border-radius: 4px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.buttons {
  text-align: center;
  margin-top: 20px;
}

</style>
@endsection