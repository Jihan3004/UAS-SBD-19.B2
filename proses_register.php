<?php 

// panggil file yang dibutuhkan
require_once '../session.php';
require_once '../conection.php';
require_once 'functions.php';


// ambil semua data atau value dari form
$nama     = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];

// cek apakah data sudah diisi atau belum
if($nama == '' && $username == '' && $password == '' ){
	set_flash_message('gagal', 'Semua data wajib diisi!');
	header('Location: register.php');
	die();
}

$cek_username = mysqli_query($connect, "SELECT * FROM admin WHERE username = '$username'");
if($cek_username->num_rows == 0){
	// konfirmasi password
	if($password){
		$password_hash = password_hash($password, PASSWORD_DEFAULT);
		$query = mysqli_query($connect, "INSERT INTO admin (nama, username, password) VALUES('$nama', '$username', '$password_hash')");
		if($query == TRUE){
			set_flash_message('sukses', 'Pendaftaran berhasil! Silahkan login!');
			header('Location: login.php');
		} else die(mysqli_error($connect));
	} else {
		set_flash_message('gagal', 'Password tidak sama!');
		header('Location: register.php');
	}
} else {
	
	set_flash_message('gagal', 'Username sudah terdaftar!');
	header('Location: register.php');
}




?>