    <div class="col-md-10" style="padding:0px">
      <ol class="breadcrumb" style="margin:0;border-radius:0;">
          <li class="active">Home</li>
      </ol>
   </div>
   <div class="col-md-10" style="min-height:600px">
	<form method="post" action="pages/simpan_petugas.php" enctype="multipart/form-data">
	</br>
	<center><strong>Tambah Petugas</strong></center></br>

	Nama Petugas
	<input type="text" style="width:260px;" class="form-control" name="name" required>
	
	Username Buat Akun
	<input type="text" style="width:260px;" class="form-control" name="uname" required>
	
	Buat Password
	<input type="text" style="width:260px;" class="form-control" name="password" required>
	
	Level
	<input name="level" style="width:260px;" class="form-control" value="Admin" readonly > 
	Foto
	<input type="file" name="foto">
	</br>
	<input type="submit" class="btn btn-info" value="Simpan">
	<a href="index.php"><input type="button" class="btn btn-danger" value="Batal"></a>
	</form>
   </div>