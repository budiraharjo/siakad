  <div class="col-md-10" style="padding:0px">
      <ol class="breadcrumb" style="margin:0;border-radius:0;">
          <li class="active">Home</li>
      </ol>
   </div>
   <div class="col-md-10" style="min-height:600px">
	<h1><center>Data Pesan</center></h1>

	<table border="1" width="100%">
	<tr>
		<th><center>Nama</center></th>
		<th><center>Email</center></th>
		<th><center>Baca</center></th>
	</tr>
	<?php
	// Load file koneksi.php
	include "koneksi.php";
	
	$query = "SELECT * FROM hubungi"; // Query untuk menampilkan semua data siswa
	$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
	
	while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
		echo "<tr>";
		
		echo "<td>".$data['nama']."</td>";
		echo "<td>".$data['email']."</td>";
		echo "<td><a href='pages/baca.php?id_hubungi=".$data['id_hubungi']."'>Baca</a></td>";
		echo "</tr>";
	}
	?>
	</table>
</div>
