<?php
include "koneksi.php";
$tglpost=date("Y-m-d");
$jampost=date("h:i");
$judulberita = $_POST['judulberita'];
$isiberita = $_POST['isiberita'];

$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];

// Set path folder tempat menyimpan fotonya
$path = "../images/".$foto;

// Proses upload
if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
	// Proses simpan ke Database
	$query = "INSERT INTO tabelberita VALUES('','".$judulberita."', '".$foto."', '".$isiberita."', '".$tglpost."', '".$jampost."', 'Budi Raharjo')";
	$sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query

	if($sql){ // Cek jika proses simpan ke database sukses atau tidak
		// Jika Sukses, Lakukan :
		header("location:../index.php"); // Redirect ke halaman index.php
	}else{
		// Jika Gagal, Lakukan :
		echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		echo "<br><a href='index.php?p=berita'>Kembali Ke Form</a>";
	}
}else{
	// Jika gambar gagal diupload, Lakukan :
	echo "Maaf, Gambar gagal untuk diupload.";
	echo "<br><a href='index.php?p=berita'>Kembali Ke Form</a>";
}
	
?>