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
			<center><p><h2>Sejarah SMK Babunnajah</h2></p></center>
			<center><img src="babunnajah.jpg" width="150px"></center>
			<p>Sekolah Menengah Kerjuruan (SMK) Babunnajah Menes Pandeglang adalah lembaga pendidikan menengah yang berada dibawah naungan Yayasan Pendidikan Islam Babunnajah dan didirikan berdasarkan SK Yayasan No.12/SK/YPI/BN/III/2005 tanggal 11 Maret 2005,yang ditandatangani dan ditetapkan oleh K.Hamdan Ahmad Zarkasji selaku Ketua Yayasan Pendidikan Islam Babunnajah. Setelah dikeluarkannya SK Pendirian pendirian tersebut oleh yayasan, maka diangkatlah kepala SMK yaitu Bapak Rifyal Ahmad Lugowi,M.Pd dan beberapa pengurus pertama SMK Babunnajah dengan SK No.15/SK/YPI/BN/III/2005.</p>
			<p>Pendirian SMK tersebut dilatarbelakangi oleh rasa memiliki dan juga rasa tanggung jawab dalam mencetak sumber daya manusia yang kompeten, kompetitif, produktif, berkepribadian unggul dan gandrung akan keuanggulan, sadar mutu, mandriri dan beorientasi global.</p>
			<p>Selama proses pengajuan ijin operasional ke DIKNAS Kebupaten Pandeglang, SMK Babunnajah memiliki siswa angkatan pertama dengan jumlah awal sebanyak 27 orang. Proses perijinan berjalan lancar dan kurang lebih 1 tahun lamanya sampai SK dari Dinas Kabupaten dikeluarkan oleh Bapak Drs.H.Taufiq Hidayat, M.Si dengan SK No. 425.1/1301-Kab/2006 tanggal 16 Oktober 2007.</p>
			<p>Setelah Ijin Operasional SMK Babunnajah dikeluarkan, perkembangan siswa dari tahun ketahun meningkat dengan cepat dan juga dibarengi dengan peningkatan kualitas pada siswa-siswi SMK. (mudah-mudahan dari tahun ke tahun terus meningkat baik kuantitas maupun Kualitas, Amin.)</p>
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