<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "uasppaw";
 $conn = mysqli_connect($servername, $username, $password, $dbname);
 if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$table = 'penjualan';
$primaryKey = 'id';
 
$columns = array(
    array( 'db' => 'id','dt' => 0 ),
    array( 'db' => 'kode_transaksi','dt' => 1 ),
    array( 'db' => 'nama_pembeli','dt' => 2 ),
    array( 'db' => 'nama_barang','dt' => 3 ),
    array( 'db' => 'tanggal_pembelian', 'dt' => 4 ),
    array( 'db' => 'jumlah', 'dt' => 5 ),
    array( 'db' => 'harga', 'dt' => 6),
    array( 'db' => 'total', 'dt' => 7),
);
 
$sql_details = array(
    'user' => 'root',
    'pass' => '',
    'db'   => 'uasppaw',
    'host' => 'localhost'
);
require('ssp.php');
 
echo json_encode(
    SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
);
?>