<?php session_start();?>
<html>
<head>
<title>Sistem Informasi Pemantauan Perawatan</title>
<link rel="stylesheet" href="../css/style.css" type="text/css"/>
<link rel="stylesheet" href="../css/nav.css" type="text/css"/>
<link rel="stylesheet" href="../css/table.css" type="text/css"/>
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


</td>
<td class="isi">
	<?php 
		include('navigation.php');
		//include('page-home.php');
	?>
	<div class="post">
	Data Barang Rusak
	</div>
	<div class="content">
		<div style="margin-left:18px;"><input type="text" placeholder="SEARCH"></div> 
		<table align="center" id="tbl">
			<thead>
				<td width="10">No</td>
				<td width="10">Check</td>
				<td>Nama Barang</td>
				<td>Type</td>
				<td>Kondisi</td>
				<td>Keterangan</td>
				<td width="100">Foto</td>
			</thead>
			
					<input type="submit" name="submit" value="Perbaiki" style="width:100;height:30;font-size:20;font-weight:bold;padding:5px;position:absolute;top:500;left:750;">
			</table>
	</div>
	
</td>
</tr>
<tr><td colspan="2" class="td_foot"><?php include('footer.php');?></tr>
</table>
</body>
</html>
