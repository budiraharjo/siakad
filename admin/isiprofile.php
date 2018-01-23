<!doctype>
<html lang='ind'>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="../assets/css/styles-menu-admin.css">
   <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
   <link rel="stylesheet" href="../assets/css/font-awesome.min.css">

   <script src="../assets/js/jquery.min.js"></script>
   <script src="../assets/js/bootstrap.min.js"></script>
   <script src="../assets/js/script.js"></script>
   <title>Tugas SIM</title>
   <script type="text/javascript" src="tinymce/jscripts/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
tinyMCE.init({
        	// General options
        	mode : "textareas",
        	theme : "advanced",
});
</script>
</head>
<body>
   <div class="col-md-2 colmenu" style="padding:0;">
      <div class="col-md-12" style="padding:10px;"><center><img src="../assets/images/profil.jpg" alt="" height="100px" width="100px"></center></div>
      <div class="col-md-12" style="padding:5px;padding-bottom:10px;color:#fff;"><center>Heri Susanto</center></div>
         <?php include "menu.php"; ?>  
   </div>
   
   <div class="col-md-10" style="padding:0px">
      <ol class="breadcrumb" style="margin:0;border-radius:0;">
          <li class="active">Home</li>
      </ol>
   </div>
   <div class="col-md-10" style="min-height:600px">
     <div class="content">
	
<form action="" method="post">
		<center><strong>Ubah Profil</strong></center>
		</br>
		<strong>Judul Artikel</strong>
		<input name="newstitle" type="text" class="form-control" size="100" value="a" />
      	<blink><span class="style1"></span></blink></br>
		<textarea style="resize:none" name="newscontent" cols="120%" class="form-control" rows="18"></textarea>
</br>
<input class="btn btn-info" type="submit" name="edit" value="Update Berita"/>
</form>
</div>
</div>
  
   <div class="col-md-12" style="background:#416271;padding:8px;color:#fff;"><center>create by <a href="www.sikode.com" style="color:#fff">heeyriku</a> &copy 2015</center></div>
</body>
<html>
