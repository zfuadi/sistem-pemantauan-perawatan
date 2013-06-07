<?php
session_start();
$akses = $_POST['akses'];
//echo $akses."<br>";

switch ($akses) {
	case 0:
		//echo "Proyek";
		$_SESSION['id']=$akses;
		header('Location: '.$uri.'/web-rpl/halaman/page-index-proyek.php');
		break;
	case 1:
		//echo "Jurusan";
		$_SESSION['id']=$akses;
		header('Location: '.$uri.'/web-rpl/halaman/page-index-jurusan.php');
		break;
	case 2:
		//echo "User";
		$_SESSION['id']=$akses;
		header('Location: '.$uri.'/web-rpl/halaman/page-index-peminjam.php');
		break;
}	
?>
