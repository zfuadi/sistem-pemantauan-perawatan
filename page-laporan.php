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
	Laporan
	</div>
	<div class="content">
		<table id="tabel">
			<tr>
				<td width="100">Perihal</td>
				<td>
					<select style="width:120;">
						<option value="pengadaan">Pengadaan</option>
						<option value="perbaikan">Perbaikan</option>
					</select>
				</td>
			</tr>
			<tr>
				<td width="130">Jenis Pengadaan</td>
				<td>
					<input type="text" name="jns_pengadaan">
				</td>
			</tr>
			<tr>
				<td width="130">Banyak</td>
				<td>
					<input type="text" name="banyak">
				</td>
			</tr>
			<tr>
				<td width="130">Penempatan </td>
				<td>
					<input type="text" name="penempatan">
				</td>
			</tr>
			<tr>
				<td width="130">Merk Barang</td>
				<td>
					<input type="text" name="mrk_brg">
				</td>
			</tr>
			<tr>
				<td width="130">Type Barang</td>
				<td>
					<input type="text" name=type_barang>
				</td>
			</tr>
			<tr>
				<td width="130">Jenis Pengadaan</td>
				<td>
					<textarea width="" height="90"></textarea>
				</td>
			</tr>
			<tr>
				<td>Upload Surat </td>
				<td>
					<input type="file" name="file" id="file">
				</td>
			</tr>
			<tr>
			<td></td>
			<td>
				<input type="submit" value="Submit" />
				<input type="reset" value="Reset" />
			</td>
		</tr>
		</table>
	</div>
	
</td>
</tr>
<tr><td colspan="2" class="td_foot"><?php include('footer.php');?></tr>
</table>
</body>
</html>
