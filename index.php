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
    
 
    	
        <div class="accordian">
	<ul>
		<li>
			<div class="image_title">
				<a href="#">Alumnus</a>
			</div>
			<a href="#">
				<img src="images/1.jpg"/>
			</a>
		</li>
		<li>
			<div class="image_title">
				<a href="#">SMK Babunnajah</a>
			</div>
			<a href="#">
				<img src="images/2.jpg"/>
			</a>
		</li>
		<li>
			<div class="image_title">
				<a href="#">Kampus Hijau</a>
			</div>
			<a href="#">
				<img src="images/3.jpg"/>
			</a>
		</li>
		<li>
			<div class="image_title">
				<a href="#">Kegiatan Rutin</a>
			</div>
			<a href="#">
				<img src="images/4.jpg"/>
			</a>
		</li>
		<li>
			<div class="image_title">
				<a href="#">Asrama Terpadu</a>
			</div>
			<a href="#">
				<img src="images/5.jpg"/>
			</a>
		</li>
	</ul>
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
		include "config.php";
		$page = (isset($_GET['page']))? $_GET['page'] : 1;					
		$limit = 10; 
		$limit_start = ($page - 1) * $limit;
		$sql1 = $pdo->prepare("SELECT * FROM tabelberita LIMIT ".$limit_start.",".$limit);
		$sql1->execute(); 					 
		while($data1 = $sql1->fetch()){
		$isiberita = substr($data1['isiberita'],0,150);		
		?>
			<div id="right_content">
			<h2><?php echo $data1['judulberita']; ?></h2>
        	<div class="products_box">
			<img src="admin/images/<?php echo $data1['foto']; ?>" alt="" title="" class="box_img" width="150px">
			<h3>Menes, <?php echo $data1['tglpost']; ?> : <?php echo $data1['jampost']; ?></h3>  
            <?php echo $isiberita ?>
            <div class="read_more_link"><a href="baca.php?&isi=<?php echo $data1['idb'] ?>">Read More</a></div>
            </div>
            </div>
		<?php
		}
		?>		
    <div style=" clear:both;"></div>
    </div><!--end of main content-->
 

     <div id="footer">
     	<?php include "footer.php";?>
    
    
    </div>  
 
   

</div> <!--end of main container-->


</body></html>