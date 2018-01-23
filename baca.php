<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>SMK Babunnajah</title>
<link rel="stylesheet" type="text/css" href="style.css" media="screen">
</head>

<body>
<div id="main_container">
	<div id="header">       
        <?php include "menu.php"; ?>
        
    </div>
    
 
    	
       
  
    
 
    
    <div id="main_content">
    	<div id="left_content">
        <h2>Selamat Datang di Kampus Hijau SMK Babunnajah</h2>
        <p>Kampus hijau yang unggul dan "islami" </br>
		Pintu Kesuksesan
        </p>
        </br>
		<?php
		include "config.php";
		$page = (isset($_GET['page']))? $_GET['page'] : 1;					
		$limit = 5; 
		$limit_start = ($page - 1) * $limit;
		$sql = $pdo->prepare("SELECT * FROM fasilitas LIMIT ".$limit_start.",".$limit);
		$sql->execute(); 					 
		while($data = $sql->fetch()){ 
		?>
         <div id="left_nav">
            <ul>                                        
                <li><a href="lihat.php?&lihat=<?php echo $data['idfasilitas'] ?>" title=""><?php echo $data['namafasilitas']; ?></a></li>
            </ul>
        </div>
        <?php
		}
		?>
        </div><!--end of left content-->


		<?php
		include "koneksi.php";
		$isi = $_GET['isi'];
		$query = "SELECT * FROM tabelberita WHERE idb='".$isi."'";
		$sql = mysqli_query($connect, $query);  // Eksekusi/Jalankan query dari variabel $query
		$data1 = mysqli_fetch_array($sql);
		?>
			<div id="right_content">
			<h2><?php echo $data1['judulberita']; ?></h2>
        	<div class="products_box">
			<img src="admin/images/<?php echo $data1['foto']; ?>" alt="" title="" class="box_img" width="150px">
			<h3>Menes, <?php echo $data1['tglpost']; ?> : <?php echo $data1['jampost']; ?></h3>  
            <?php echo $data1['isiberita']; ?>
            </div>
            </div>
			
    <div style=" clear:both;"></div>
    </div><!--end of main content-->
 

     <div id="footer">
     	<?php include "footer.php";?>
    
    
    </div>  
 
   

</div> <!--end of main container-->


</body></html>