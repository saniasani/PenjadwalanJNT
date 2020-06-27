<?php 

require_once('init.php');

$msg = '';
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (cek_username_login($username)){
        if (cek_password($username,$password)){
            header('Location:penjadwalan.php');
        }
        else $msg ='Password anda salah';
    }
    else $msg = 'Data Tidak Ditemukan';
}

?>

