<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="./tinymce/tinymce.min.js"></script>
<script src="jquery-1.4.js"></script>
<script>
tinymce.init({
selector: "textarea",
// ===========================================
// INCLUDE THE PLUGIN
// ===========================================
plugins: [
"advlist autolink lists link image charmap print preview anchor",
"searchreplace visualblocks code fullscreen",
"insertdatetime media table contextmenu paste jbimages"
],
toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages",
relative_urls: false
});
 
</script>

    <div class="col-md-10" style="padding:0px">
      <ol class="breadcrumb" style="margin:0;border-radius:0;">
          <li class="active">Home</li>
      </ol>
   </div>
   <div class="col-md-10" style="min-height:600px">
	<?php include'./config/koneksi.php';
$array_hari = array(1=>'Senin','Selasa','Rabu','Kamis','Jumat', 'Sabtu','Minggu');
$hari = $array_hari[date('N')];
$tanggal = date ('j');
$array_bulan = array(1=>'Januari','Februari','Maret', 'April', 'Mei', 'Juni','Juli','Agustus','September','Oktober', 'November','Desember');
$bulan = $array_bulan[date('n')];
$tahun = date('Y');
$waktu=$hari . ", " . $tanggal ." ". $bulan." ". $tahun;

$query = "SELECT * from tabelprofile where idprofil='1'";
$sql = mysql_query ($query);
$hasil = mysql_fetch_array ($sql);
$newstitle = strip_tags($hasil['j_profil']);
$newscontent = $hasil['i_profil'];
$posttime = $hasil['tglpost'];
$postjam = $hasil['jampost'];
if (isset($_POST['edit']))
{
$newstitle = $_POST['newstitle'];
$newscontent = mysql_real_escape_string($_POST['newscontent']);
$posttime = $hari.",".$tanggal." ".$bulan." ".$tahun;
$postjam = date("h:i");
	if (empty($newstitle)){
	$error['newstitle']='Judul harus diisi';
	}
	if (empty($newscontent)){
	$error['newscontent']='Kontent profile harus terisi';
	}
	if(empty($error)){
   	$query = "update tabelprofile set j_profil='$newstitle', i_profil='$newscontent', tglpost='$posttime', jampost='$postjam', postoleh='Budi Raharjo' where idprofil='1'";
	$sql = mysql_query ($query);
	if ($sql) {
		?>
		
		<?php
	} else {
		die (mysql_error());
	}
}
}
?>
<form action="" method="post">

    	<center><strong>Ubah Profil</strong></center>
  	
    	Judul Artikel<br /><input name="newstitle" type="text" size="100" class="form-control" value="<?php if(isset($_POST['newstitle'])){ echo $_POST['newstitle'];}else{ echo $newstitle; }?>" />
      	<blink><span class="style1"><?php echo isset($error['newstitle']) ? $error['newstitle']: ''; ?></span></blink>
  	Isi Artikel<br/><textarea class="form-control" name="newscontent" cols="65" rows="15"><?php if(isset($_POST['newscontent'])){ echo $_POST['newscontent'];}else{ echo $newscontent; }?></textarea>
      <blink><span class="style1"><?php echo isset($error['news']) ? $error['news']: ''; ?></span></blink></td>
  	</br>
  	<input class="btn btn-info" type="submit" name="edit" value="Update Profile"/></td>
  	
</form>
</div>