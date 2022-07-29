<?php
	$nama =$_POST['nama'];
	$alamat =$_POST['alamat'];
	$kontak =$_POST['kontak'];
	$Jasa = $_POST['Jasa'];
	$catatan =$_POST['catatan'];

	echo "<head><title>Data Order</head></title>";
	$fp = fopen("Data.txt","a+");
	fputs($fp,"$nama|$alamat|$kontak|$Jasa|$catatan\n");
	fclose($fp);


	echo "Terima kasih Telah order<br>";
	echo "<a href='web.php'>Lihat catatan Pengunjung</a><br>";
	echo "<a href='responsi.html'>Kembali Ke halaman</a><br>";
?>