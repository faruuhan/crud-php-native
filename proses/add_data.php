<?php

include "koneksi.php";

$Id = getAutoId('member_Id', 'member', 'MMBR');
$nama_lengkap = $_POST['nama'];
$jenis_klmn = $_POST['jenis_kelamin'];
$tgl_lahir = $_POST['tahun']."-".$_POST['bulan']."-".$_POST['hari'];
$tlp = $_POST['tlp'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$kota = $_POST['kota'];
$kd_pos = $_POST['kode_pos'];
$catatan = $_POST['catatan'];


$query = "INSERT INTO `member`
			(`member_Id`, `nama_lengkap`, `jenis_kelamin`,`tanggal_lahir`, `tlp`, `email`, `alamat`, `kota`, `kode_pos`, `catatan`)
			VALUES('$Id', '$nama_lengkap', '$jenis_klmn', '$tgl_lahir', '$tlp', '$email', '$alamat', '$kota', '$kd_pos', '$catatan')";

mysql_query($query);



header("Location:../index.php"); 



