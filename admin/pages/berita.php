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

<form action="pages/prosesberita.php" method="post" enctype="multipart/form-data">

    <center><strong>Form Tambah Berita</strong></center>
	Judul Berita
	<input name="judulberita" class="form-control" type="text" size="86" />
	</br>foto<br/><input name='foto' class="form-control" type="file" />
    </br>
	Isi Berita<br/>
	<textarea class="form-control" name="isiberita" cols="65" rows="10"></textarea>
  	</br>
	<input class="btn btn-info" type="submit" value="Tambahkan Berita"/>
  </form>
</div>