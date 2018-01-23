<?php 
session_start();
if(!isset($_SESSION['username'])){
	echo '<script language="javascript">alert("Anda harus Login!"); document.location="../index.php";</script>';
}

?>
<!doctype>
<html lang='ind'>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="../../assets/css/styles-menu-admin.css">
   <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
   <link rel="stylesheet" href="../../assets/css/font-awesome.min.css">

   <script src="../../assets/js/jquery.min.js"></script>
   <script src="../../assets/js/bootstrap.min.js"></script>
   <script src="../../assets/js/script.js"></script>
   <title>Tugas SIM</title>
</head>
<body>
   <div class="col-md-2 colmenu" style="padding:0;">
      <div class="col-md-12" style="padding:10px;"><center><img src="../../assets/images/profil.jpg" alt="" height="100px" width="100px"></center></div>
      <div class="col-md-12" style="padding:5px;padding-bottom:10px;color:#fff;"><center><?php echo $_SESSION['username'];?></center></div>
         <?php include "menu.php"; ?>  
   </div>
<script type="text/javascript" src="../jquery.js"></script>
<script type="text/javascript" src="../tinymce/tinymce.min.js"></script>
<script src="../jquery-1.4.js"></script>
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
	<?php
	// Load file koneksi.php
	include "koneksi.php";
	
	// Ambil data id_hubungi yang dikirim oleh index.php melalui URL
	$id_hubungi = $_GET['id_hubungi'];
	
	// Query untuk menampilkan data siswa berdasarkan id_hubungi yang dikirim
	$query = "SELECT * FROM hubungi WHERE id_hubungi='".$id_hubungi."'";
	$sql = mysqli_query($connect, $query);  // Eksekusi/Jalankan query dari variabel $query
	$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
	?>
<form action="" method="post">

    	<center><strong>Ubah Profil</strong></center>
  	
    	Nama<br /><input name="newstitle" type="text" size="100" class="form-control" value="<?php echo $data['nama']; ?>" />
    	Email<br /><input name="newstitle" type="text" size="100" class="form-control" value="<?php echo $data['email']; ?>" />
      	<blink><span class="style1"></span></blink>
  	Isi Artikel<br/><textarea class="form-control" name="newscontent" cols="65" rows="15"><?php echo $data['pesan']; ?></textarea>
      <blink><span class="style1"></span></blink></td>
  	</br>
  	 </td>
  	
</form>
</div>
 <div class="col-md-12" style="background:#416271;padding:8px;color:#fff;"><center>Create by <a href="www.sikode.com" style="color:#fff">Budi Raharjo</a> &copy 2017</center></div>
</body>
<html>
