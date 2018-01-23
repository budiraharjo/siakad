<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>SMK Babunnajah</title>
<link rel="stylesheet" type="text/css" href="style.css" media="screen">

<!-- <script src="admin/assets/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="admin/assets/css/styles-menu-admin.css">
<link rel="stylesheet" href="admin/assets/css/bootstrap.min.css">
<link rel="stylesheet" href="admin/assets/css/font-awesome.min.css">
<script src="admin/assets/js/jquery.min.js"></script>
<script src="admin/assets/js/bootstrap.min.js"></script>
<script src="admin/assets/js/script.js"></script> -->

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


		
			<div id="right_content">
			<h2>Hubungi Kami</h2>
        	
			<form action="pesan.php" method="post" class="form-login">
		        <div class="login-wrap">
					Nama
					</br>
		            <input type="text" style="width:260px; hight:700px;" class="form-control" name="nama" placeholder="Nama" autofocus required >
		            </br>
		            </br>Email
		            </br>
		            <input type="text" style="width:260px; hight:70%;" class="form-control" name="email" placeholder="Email" required>
					</br>
					</br>Pesan
		            </br>
		            <textarea type="text" style="width:260px; hight:70%;" class="form-control" name="pesan" placeholder="Pesan" required></textarea>
					</br>
					</br>
		            <button class="btn btn-theme btn-block" name="submit" type="submit"><i class="fa fa-lock"></i> KIRIM</button>
		            <hr>
		        </div>
		
		      </form>
	
            </div>
			
            
			
    <div style=" clear:both;"></div>
    </div><!--end of main content-->
 </br>
			
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br></tr>

     <div id="footer">
     	<?php include "footer.php";?>
    
    
    </div>  
 
   

</div> <!--end of main container-->


</body></html>