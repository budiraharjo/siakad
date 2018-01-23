<?php
$servername = "localhost";
$user		= "root";
$pasword	= "";
$db			= "tugas_sim";

$koneksi = mysql_connect ($servername,$user, $pasword)
			or die ('gagal terkoneksi'.mysql_error());
			
$database = mysql_select_db ($db)
			or die ('gagal terhubung ke database'.mysql_error());
 
 $usr = $_POST['uname'];
 $psw = md5($_POST['pass']);
  

 $sql = "SELECT * FROM tbl_user WHERE uname='$usr' AND pass='$psw'";
 $res =  mysql_query($sql);
 $data = mysql_fetch_array($res);
 $n = mysql_num_rows($res);

 if($n == 1){
  session_start();
 
  $_SESSION['username'] = $data['name'];
  $_SESSION['usernameku'] = $usr;
  
 
  echo"<script language='javascript'>window.location = 'admin/index.php'</script>";
 }else{
  echo"<script language='javascript'>alert('id_anggota atau username Salah !')</script>";
  echo"<script language='javascript'>window.location = 'login.php'</script>";
 }
?>