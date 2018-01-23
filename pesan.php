<?php
// Load file koneksi.php
include "admin/pages/koneksi.php";


$nama = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];

$tgl = date('Y-m-d');




	$query = "INSERT INTO hubungi VALUES('','".$nama."', '".$email."', '".$pesan."', '".$tgl."')";
	$sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query

	if($sql){ // Cek jika proses simpan ke database sukses atau tidak
		// Jika Sukses, Lakukan :
		header("location: index.php"); // Redirect ke halaman index.php
	}else{
		// Jika Gagal, Lakukan :
		echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		echo "<br><a href='contact.php '>Kembali Ke Form</a>";
	}

?>
