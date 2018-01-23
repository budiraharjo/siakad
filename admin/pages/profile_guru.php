    <div class="col-md-10" style="padding:0px">
      <ol class="breadcrumb" style="margin:0;border-radius:0;">
          <li class="active">Home</li>
      </ol>
   </div>
   <div class="col-md-10" style="min-height:600px">
	<form method="post" action="pages/proses_guru.php" enctype="multipart/form-data">
	</br>
	<center><strong>Isi Profile Guru</strong></center></br>
	NIP
	<input type="text" style="width:260px;" class="form-control" name="nip">
	
	Nama Guru
	<input type="text" style="width:260px;" class="form-control" name="nama">
	
	Tempat Lahir
	<input type="text" style="width:260px;" class="form-control" name="tpt_lahir">
	
	<label>Tanggal Lahir</label>
							</td>
							</br>
							<td><select name="tgla" required>
							<option selected="selected" class="form-control">Tanggal</option>
							<?php
							for($a=1; $a<=31; $a+=1){
								echo"<option value=$a> $a </option>";
							}
							?>
					</select>
					<select name="blna" required>
					<option selected="selected" class="form-control">Bulan</option>
					<option value="1">Januari</option>
					<option value="2">Februari</option>
					<option value="3">Maret</option>
					<option value="4">April</option>
					<option value="5">Mei</option>
					<option value="6">Juni</option>
					<option value="7">Juli</option>
					<option value="8">Agustus</option>
					<option value="9">September</option>
					<option value="10">Oktober</option>
					<option value="11">November</option>
					<option value="12">Desember</option>
					</select>
					<select name="thna" required>
					<option selected="selected" class="form-control">Tahun</option>
					<?php
					for($i=2013; $i>=1905; $i-=1){
					echo"<option value=$i> $i </option>";
					}
					?>
					</select></br></td>
	
	Alamat
	<textarea name="alamat" style="width:760px; height:auto;" class="form-control" ></textarea>
	
	Lulusan
	<select type="text" style="width:260px;" class="form-control" name="lulusan">
		<option value="">Pilih Lulusan</option>
		<option value="SMA">SMA</option>
		<option value="S1">S1</option>
		<option value="D3">D3</option>
		<option value="S2">S2</option>

	</select>
	Foto
	<input type="file" name="foto">
	</br>
	<input type="submit" class="btn btn-info" value="Simpan">
	<a href="index.php"><input type="button" class="btn btn-danger" value="Batal"></a>
	</form>
   </div>