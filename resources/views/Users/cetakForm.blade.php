
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>cetak kontrak</title>
</head>
 <style>
    body {
        margin:5rem 5rem auto;
    }
    .pp {
        margin-left: 5rem;
    }
    .pk {
        margin-right: 5rem;
    }
 </style>
<body>

    <p>Pada hari ini {{ $currentDate }}. Kami yang bertanda tangan di bawah ini:</p>
    <p>Nama            : {{ $sewa->user->nama }}</p>
    <p>Alamat          :{{ $sewa->user->alamat }}</p>
    <p>email           :{{ $sewa->user->email }}</p>
    <p>status pembayaran :{{ $sewa->status }}</p>
    <p>hal ini bertindak atas nama {{ $sewa->nama_toko }} yang selanjutnya dalam perjanjian akan disebut pihak pertama yang beralamat {{ $sewa->alamat_toko }}</p>
    <p>Kedua belah pihak dengan ini telah sepakat untuk mengikatkan diri dalam perjanjian penyewaan gudang dengan syarat dan ketentuan sebagai berikut:</p>
    <h5>Pasal 1 – Obyek Perjanjian</h5>
    <p>Pemilik gudang berjanji dan mengikatkan diri untuk menyewakan gudang kepada Pihak Kedua, dan Pihak kedua berjanji dan mengikatkan diri untuk menyewa gudang yang berlokasi di{{ $gks->lokasi}}. Gudang tersebut akan digunakan oleh Pihak Kedua untuk menyimpan {{ $sewa->tipe_barang }}. dengan tanggal pengambilan {{ $sewa->tanggal_pengambilan }}, dan total berat {{ $sewa->total_berat }}.</p>
    <h5>Pasal 2 – Jumlah dan Luas Ruangan</h5>
    <p>Sesuai dengan pasal 1 bahwa gudang tersebut disewa dengan jumlah ruangan {{ $gks->total_ruangan }} ruangan, dan memiliki luas luangan {{$gks->luas }}.</p>
    <h5>Pasal 3 – Harga dan Cara Pembayaran</h5>
    <p>Pembayaran sebesar {{ $gks->harga_sewa }}, dibayarkan Pihak Kedua pada saat perjanjian sewa menyewa gudang sebagai uang Jaminan yang akan dikembalikan saat penyewaan gudang sudah selesai.</p>
    <p>Demikianlah Surat Perjanjian Sewa Gudang ini dibuat dan ditandatangani oleh Pihak Pertama dan Pihak Kedua, pada Hari {{ $currentDate }} dalam keadaan sadar tanpa adanya paksaan atau tekanan dari Pihak Manapun.</p>
    <div style="justify-content: flex-end;">
        <ul style="list-style-type: none; padding: 0; margin: 0;">
            <li style="float: left;">
                <p class="pp">Pihak Pertama,</p> 
                <br>
                <br>
                <br>
                <p style="margin-left:6rem">({{ $sewa->nama_toko }})</p>
            </li>
            <li style="float: right; text-align: right;">
                <p class="pk">Pihak Kedua,</p> 
                <br>
                <br>
                <br>
                <p style="margin-right:3rem">(....... ....... ....... .......)</p>
            </li>
        </ul>
    </div>
    
    <script type="text/javascript">
        window.print();
    </script>
</body>