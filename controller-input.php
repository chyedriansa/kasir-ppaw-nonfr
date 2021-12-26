<?php


session_start();

include 'koneksi.php';
$data;
$kode = $_POST['kode_transaksi'];
$nama = $_POST['nama_pembeli'];
$barang = $_POST['nama_barang'];
$date = $_POST['tanggal_pembelian'];
$jumlahb = (int)$_POST['jumlah'];
$harga = (int)$_POST ['harga'];
$total = $jumlahb * $harga;

if ($total >=  50000) {
    $total = $total - ($total * 10/100);
}

else {
    $grade = 'D';
}

$sql = "INSERT INTO penjualan (kode_transaksi, nama_pembeli, nama_barang, tanggal_pembelian, jumlah, harga, total)
VALUES ('".$kode."', '".$nama."', '".$barang."', '".$date."', '".(int)$_POST['jumlah']."', '".$harga."', '".$total."')";
if (mysqli_query($conn, $sql)) {
    
    $_SESSION['flash_message'] = "UJian Akhir Semester'";
    header("location:javascript://history.go(-1)");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
   
mysqli_close($conn);

?>