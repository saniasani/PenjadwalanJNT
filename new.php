<?php
//koneksi ke database mysql
$koneksi = mysqli_connect("localhost","root","","project_ai");

//cek jika koneksi ke mysql gagal, maka akan tampil pesan berikut
if (mysqli_connect_errno()){
	echo "Gagal melakukan koneksi ke MySQL: " . mysqli_connect_error();
}
 
$table = "data_karyawan";
 
// Cara 1
$sql = "SELECT count(*) AS jumlah FROM $table";
$query = mysql_query($sql);
$result = mysql_fetch_array($query);
echo "Jumlah data dengan fungsi MySQL count(): {$result['jumlah']} <br/>";
 
// Cara 2
$sql = "SELECT * FROM $table";
$query = mysql_query($sql);
$count = mysql_num_rows($query);
echo "Jumlah data dengan mysql_num_rows: $count <br/>";
 
// Cara 3
$sql = "SELECT * FROM $table";
$query = mysql_query($sql);
$data = array();
while(($row = mysql_fetch_array($query)) != null){
    $data[] = $row;
}
$count = count($data);
echo "Jumlah data dari array PHP: $count";