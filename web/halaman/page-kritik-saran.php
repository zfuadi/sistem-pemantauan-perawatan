<?php session_start();?>
<html>
<head>
<title>Sistem Informasi Pemantauan Perawatan</title>
<link rel="stylesheet" href="../css/style.css" type="text/css"/>
<link rel="stylesheet" href="../css/nav.css" type="text/css"/>
<link rel="stylesheet" href="../css/table.css" type="text/css"/>
<link rel="stylesheet" href="../css/style-krisar.css"/>

<head>
<body>
<table class="table_utama" width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
	<tr height="30"><td colspan="2" id="top"><div id="welcome">Selamat Datang, Sipulan<br><a href="logout.php">Logout</a></div></td></tr>
<tr><td colspan="2" ><img src="../images/header.jpg" width="1000" height="200"><?php //echo "header_web";?></td></tr>
<tr height="30"><td colspan="2" class="td_head"><?php include('text-run.php');?></tr>
<tr height="400" valign="top">
<td class="td_menu">
	<?php 
		include('sidebar.php');
	?>	
<?php //include('halaman/tampil_menu.php');?>
<?php //include('halaman/tampil_artikel.php');?>
<?php //include('halaman/buku_tamu.php');?>

<?php
 $msg="";
  if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  
    
  $msg="Pesan telah di kirim, terima kasih";  
 } 
 ?>
</td>
<td class="isi">
	<?php 
		include('navigation.php');
		//include('page-home.php');
	?>
	<div class="post">
	History Peminjamn
	</div>
	<div id="contaner">
	<div style="margin-left:30px;">
		<?php if ($msg!=''): ?>
		<div class="msg"><p><?php echo $msg;?></p></div>
		<meta http-equiv="refresh" content="3; url=page-index-peminjam.php">
		<?php endif;?>
		<form method="POST">
			<table border="0" style="">
				<tr>
					<td><div class="label_width">Nama</div></td>
					<td><input type="text" name="nama" class="text_width"/></td>
				</tr>
				<tr>
					<td><div class="label_width">Email</div></td>
					<td><input type="text" name="email" class="text_width"/></td>
				</tr>
				<tr>
					<td><div class="label_width">Subject</div></td>
					<td><input type="text" name="subject" class="text_width"/></td>
				</tr>
				<tr>
					<td><div class="label_width">Pesan</div></td>
					<td><textarea name="pesan" class="text_width"></textarea></td>
				</tr>
				<tr><td></td><td><input type="submit" name="kirim" value="Kirim" style="float:right;height:30px;width: 100px"/></td></tr>
			</table>
		</form>
	</div>
	
</td>
</tr>
<tr><td colspan="2" class="td_foot"><?php include('footer.php');?></tr>
</table>
</body>
</html>
