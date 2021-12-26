<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "uasppaw";
 $conn = mysqli_connect($servername, $username, $password);
 if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
$sql = "CREATE DATABASE uasppaw";
if (mysqli_query($conn, $sql)) {
 echo "Database created successfully";
} else {
 echo "Error creating database: ". mysqli_error($conn);
}
$conn = mysqli_connect($servername, $username, $password,$dbname);
// sql to create table
$sql = "CREATE TABLE penjualan (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    kode_transaksi VARCHAR(30) NOT NULL,
    nama_pembeli VARCHAR(30) NOT NULL,
    nama_barang VARCHAR (50) NOT NULL,
    tanggal_pembelian INT(50) UNSIGNED,
    jumlah INT(50) UNSIGNED,
    harga VARCHAR(50) NOT NULL,
    total VARCHAR(50) NOT NULL,
    reg_date TIMESTAMP)";
    
    if (mysqli_query($conn, $sql)) {
        echo "Table MyGuests created successfully";
    } else {
        echo "Error creating table: " . mysqli_error($conn);
    }
    
    mysqli_close($conn);
?>