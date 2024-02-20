
<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include 'koneksi.php';
 
// menangkap data yang dikirim dari form login
$email = $_POST['email'];
$password = $_POST['password'];
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from user where email='$email' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
 
 $data = mysqli_fetch_assoc($login);
 
 // cek jika user login sebagai admin
 if($data['role']=="admin"){
 
 // buat session login dan email
 $_SESSION['email'] = $email;
 $_SESSION['role'] = "admin";
 // alihkan ke halaman dashboard admin
 header("location:dashboardad.blade.php");
 
 // cek jika user login sebagai petugas
 }else if($data['role']=="petugas"){
 // buat session login dan username
 $_SESSION['email'] = $email;
 $_SESSION['role'] = "petugas";
 // alihkan ke halaman dashboard petugas
 header("location:dashboardpet.blade.php");
 
 // cek jika user login sebagai peminjam
 }else if($data['role']=="peminjam"){
 // buat session login dan email
 $_SESSION['email'] = $email;
 $_SESSION['role'] = "peminjam";
 // alihkan ke halaman dashboard peminjam
 header("location:dashboardpem.blade.php");
 
 }else{
 
 // alihkan ke halaman login kembali
 header("location:login.blade.php?pesan=gagal");
 } 
}else{
 header("location:login.blade.php?pesan=gagal");
}
 
?>