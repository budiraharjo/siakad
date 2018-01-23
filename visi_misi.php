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


		
			<div id="justifi_content">

			<table border="0" width="65%">
			
			<tr>
			<td>
			<center><p><h2>Visi & Misi</h2></p></center>
			<center><img src="babunnajah.jpg" width="150px"></center></br></br>
			<strong>Visi</strong><br>
			<p>Menjadi SMK yang unggul dengan output yang berkualitas dalam berbagai bidang yang berlandaskan pada keimanan dan ketaqwaan kepada Allah SWT</p>
			</br>
			</br>
			</br>
			<strong>Misi<strong></br>
			<li>Menciptakan Siswa/i yang beriman, berilmu, berakhlaqul karimah dan bertaqwa serta memiliki kedisiplinan yang tinggi.</li></br>
			<li>Membekali siswa-siswi dengan keterampilan yang profesional sesuai dengan standar dunia kerja tingkat menengah</li></br>
			<li>Mampu mengembangkan personal supaya lebih produktif, kreatif dan memiliki jiwa kemandirian dalam menghadapi era globalisasi</li></br>
			<li>Membekali IPTEK dengan IMTAQ untuk memasui jenjang pendidikan yang lebi</li>
			</td>
			<td>
			</td>
			</tr>
			</table>
            </div>           
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
    <div style=" clear:both;"></div>
    </div><!--end of main content-->
 

     <div id="footer">
     	<?php 
		include "footer.php";?>

        </div>
    
    
    </div>  
 
   

</div> <!--end of main container-->


</body></html>