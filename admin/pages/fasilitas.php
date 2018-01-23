    <div class="col-md-10" style="padding:0px">
      <ol class="breadcrumb" style="margin:0;border-radius:0;">
          <li class="active">Home</li>
      </ol>
   </div>
   <div class="col-md-10" style="min-height:600px">
	<form method="post" action="pages/proses_simpan.php" enctype="multipart/form-data">
	</br>
	<center><strong>Isi Fasilitas SMK Babunnajah</strong></center></br>

		Nama Fasilitas
	<input type="text" style="width:260px;" class="form-control" name="namafasilitas">

	Keterangan Fasilitas
	<textarea name="spesifikasi" style="width:760px; height:auto;" class="form-control" ></textarea>
	Foto
	<input type="file" name="foto">
	</br>
	<input type="submit" class="btn btn-info" value="Simpan">
	<a href="index.php"><input type="button" class="btn btn-danger" value="Batal"></a>
	</form>
   </div>