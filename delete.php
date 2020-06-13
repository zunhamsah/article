<?php

	include "koneksi.php";



	$articleID = $_GET['articleID'];
	$sql = "DELETE FROM articles WHERE articleID = $articleID";
	if (mysqli_query($koneksi, $sql)) {
		echo "Artikel berhasil dihapus<br>";
		echo "<a href=\"edit_articles.php\">Back</a>";
	} else {
	  	echo "Komentar gagal dihapus. Kemungkinan terjadi Kegagalan koneksi
		ke database MySQL.";
	}
?>