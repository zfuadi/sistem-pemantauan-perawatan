<html>
	<?php if($_SESSION['id']==1){?>
	<nav>
		<ul>
			<li><a href="page-index-jurusan.php">Home</a></li>
			<li><a href="page-data-barang.php">Data Barang</a></li>
			<li><a href="page-list-aset-rusak.php">List Barang<br>Rusak</a></li>
			<li><a href="page-list-barang-dipinjam.php">List Barang<br>Pinjam</a></li>          
			<li><a href="page-laporan.php">Laporan</a></li>
			<li><a href="page-scan-barang-masuk.php">Scan Barang</a></li>
		</ul>
	</nav>
	<?php }else if($_SESSION['id']==0){?>
	<nav>
		<ul>
			<li><a href="page-index-jurusan.php">Home</a></li>
			<li><a href="page-inbox.php">Inbox</a></li>
			<li><a href="page-data-barang.php">Data Barang</a></li>
		</ul>
	</nav>
	<?php } ?>
</html>
