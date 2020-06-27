<?php
//koneksi ke database mysql
$koneksi = mysqli_connect("localhost","root","","coba");

//cek jika koneksi ke mysql gagal, maka akan tampil pesan berikut
if (mysqli_connect_errno()){
	echo "Gagal melakukan koneksi ke MySQL: " . mysqli_connect_error();
}

 
$interval = 1; // setting periodik randomize dalam waktu 1 hari
 
// membaca record dalam tabel 'lastRandom'
 
$query = "SELECT * FROM lastrandom";
$hasil = mysql_query($query);
$data  = mysql_fetch_array($hasil);
$tglLastRandom = $data['tanggal'];
 
// mencari selisih current date dengan tanggal last random
$query = "SELECT DATEDIFF(CURDATE(), '$tglLastRandom') AS selisih";
$hasil = mysql_query($query);
$data  = mysql_fetch_array($hasil);
 
// jika selisih hari >= interval, maka lakukan random dan update tabel 'lastRandom'
 
if ($data['selisih'] >= $interval)
{
   // proses random untuk memilih quote
   $query = "SELECT * FROM tabelQuotes ORDER BY RAND()";
   $hasil = mysql_query($query);
   $data  = mysql_fetch_array($hasil);
   $idQuote = $data['id'];
 
   // update tabel 'lastRandom'
 
   $query = "UPDATE lastRandom SET id = $idQuote, tanggal = CURDATE()";
   mysql_query($query);
}
 
// tampilkan quote hasil random berdasarkan id quote terakhir hasil random
 
$query = "SELECT * FROM lastRandom";
$hasil = mysql_query($query);
$data  = mysql_fetch_array($hasil);
$idQuote = $data['id'];
 
$query = "SELECT * FROM tabelQuotes WHERE id = $idQuote";
$hasil = mysql_query($query);
$data = mysql_fetch_array($hasil);
 
echo "Pesan saat ini : ".$data['quote'];
 
?>