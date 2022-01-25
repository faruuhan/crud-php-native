<?php

include "koneksi.php";

$memberId = $_POST['id'];
$nama_lengkap = $_POST['nama'];
$jenis_klmn = $_POST['jenis_kelamin'];
$tgl_lahir = $_POST['tahun']."-".$_POST['bulan']."-".$_POST['hari'];
$tlp = $_POST['tlp'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$kota = $_POST['kota'];
$kd_pos = $_POST['kode_pos'];
$catatan = $_POST['catatan'];

$query = "UPDATE member SET nama_lengkap='$nama_lengkap', jenis_kelamin='$jenis_klmn', tanggal_lahir='$tgl_lahir', alamat='$alamat', kota='$kota', kode_pos='$kd_pos', catatan='$catatan' WHERE member_Id='$memberId'";

mysql_query($query);


header("Location:../member_list.php");