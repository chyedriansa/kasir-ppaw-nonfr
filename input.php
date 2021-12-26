<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>input data</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card shadow mt-4">
                    <div class="card-header">
                        <h3 class="card-title">Input Transaksi</h3>
                        <p><?php

                            session_start();

                            if(isset($_SESSION['flash_message'])) {
                                $message = $_SESSION['flash_message'];
                                unset($_SESSION['flash_message']);
                                echo $message;
                            }
                        ?></p>
                     </div>
                    <div class="card-body">
                        <form action="controller-input.php" method="post">
                            <div class="mb-3">
                                <label for="kode_transaksi" class="form-label">Kode Transaksi</label>
                                <input type="text" class="form-control" id="kode_transaksi" name="kode_transaksi" aria-describedby="kode_transaksi">
                                
                            </div>
                            <div class="mb-3">
                                <label for="nama_pembeli" class="form-label">Nama Pembeli</label>
                                <input type="text" class="form-control" id="nama_pembeli" name="nama_pembeli" aria-describedby="nama_pembeli">
                                
                            </div>
                            <div class="mb-3">
                                <label for="nama_barang" class="form-label">Nama Barang</label>
                                <input type="text" class="form-control" name="nama_barang" id="nama_barang" aria-describedby="nama_barang">
                                
                            </div>
                            <div class="mb-3">
                                <label for="tanggal_pembelian" class="form-label">Tanggal Transaksi</label>
                                <input type="text" class="form-control" name="tanggal_pembelian" id="tanggal_pembelian" aria-describedby="tanggal_pembelian">
                                
                            </div>
                            <div class="mb-3">
                                <label for="jumlah" class="form-label">Jumlah Barang</label>
                                <input type="text" class="form-control" name="jumlah" id="jumlah" aria-describedby="jumlah">
                            </div>
                            <div class="mb-3">
                                <label for="harga" class="form-label">Harga Barang</label>
                                <input type="text" class="form-control" name="harga" id="harga" aria-describedby="harga">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>