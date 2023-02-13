<?php 
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'koneksi.php';

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = md5($_POST['password']);
// fungsi md5 di atas untuk enkripsi kedalam bentuk md5

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"select * from admin where nama='$username' and pass='$password'");
while ($d = mysqli_fetch_array($data)) {
	echo $d['id'];
	$_SESSION['id'] = $d['id'];
	echo $d['type'];
	$_SESSION['type'] = $d['type'];
	$type =$d['type'];
}

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

// cek jika username dan password yang di input di temukan, buat session dan alihkan halaman ke halaman admin(folder admin),
// jika tidak, alihkan kembali ke halaman depan sambil mengirim pesan gagal
if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	if ($type=="1") {
		header("location:admin1");
	}elseif ($type=="2") {
		header("location:admin2");
	}elseif ($type=="3") {
		header("location:admin3");
	}
	
}else{
	header("location:index.php?pesan=gagal");
}

?>