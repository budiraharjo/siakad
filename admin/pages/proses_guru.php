<?php
// Load file koneksi.php
include "koneksi.php";


$nip = $_POST['nip'];
$nama = $_POST['nama'];
$tpt_lahir = $_POST['tpt_lahir'];

$thna = $_POST['thna'];
$blna = $_POST['blna'];
$tgla = $_POST['tgla'];

$tgl_lahir = $thna.'-'.$blna.'-'.$tgla;

$lulusan = $_POST['lulusan'];
$alamat = $_POST['alamat'];
$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];


$path = "../images/".$foto;

if(move_uploaded_file($tmp, $path)){ 

	$query = "INSERT INTO profile_guru VALUES('".$nip."', '".$nama."', '".$alamat."', '".$tpt_lahir."', '".$tgl_lahir."', '".$lulusan."', '".$foto."')";
	$sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query

	if($sql){ // Cek jika proses simpan ke database sukses atau tidak
		// Jika Sukses, Lakukan :
		header("location: ../index.php?p=profile_guru"); // Redirect ke halaman index.php
	}else{
		// Jika Gagal, Lakukan :
		echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		echo "<br><a href='../index.php?p=profile_guru'>Kembali Ke Form</a>";
	}
}else{
	// Jika gambar gagal diupload, Lakukan :
	echo "Maaf, Gambar gagal untuk diupload.";
	echo "<br><a href='../index.php?p=profile_guru'>Kembali Ke Form</a>";
}
?>
