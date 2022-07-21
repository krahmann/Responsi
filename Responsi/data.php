<?php
	$fp = fopen("order.txt","data+");
	$nama = $_POST['nama'];            
	$antrian = $_POST['antrian'];		   
	$jadwal = $_POST['jadwal'];
	$pesan = $_POST['pesan'];
	fputs($fp,"$nama|$antrian|$jadwal|$pesan\n"); 
	fclose($fp); 
?>