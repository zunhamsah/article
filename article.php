<?php 
	include "koneksi.php"; 
	//*mengambil id paling besar
	$query_id = mysqli_query($koneksi, "SELECT max(articleID) as idTerbesar FROM articles");
	$data = mysqli_fetch_array($query_id);
	$Id = $data['idTerbesar'];
	//mengubah id ke enteger
	$urutan = (int) substr($Id, 3, 3);
	$urutan++;
	$hasil_id = sprintf($urutan);
	$judul = $_POST['title']; 
	$penulis = $_POST['author']; 
	$lead = $_POST['abstraksi']; 
	$isi = $_POST['content']; 
	$time= date("d M Y, H:i");
	$lead = str_replace("\r\n","<br>",$lead); 
	$content = str_replace("\r\n","<br>",$isi); 
	$query = mysqli_query($koneksi, "INSERT INTO articles(articleID,judul,penulis,lead,content,waktu) 
	 values('$hasil_id','$judul','$penulis','$lead','$isi','$time')"); 
	$result = mysqli_query($query);
	if(!$result){
		echo "<h2 align=center>Proses penambahan artikel tidak berhasil</h2>".mysqli_error($koneksi); 
	}else{ 
		echo "<h3 align=center>Proses penambahan artikel berhasil</h3>"; 
		echo "<A href=\"tampil_articles.php\">List</A>".$hasil_id;
	} 
?> 