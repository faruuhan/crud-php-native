<?php include "proses/koneksi.php"; ?>
<html>
	<head>
		<title>Memberlist</title>
	</head>
<table align="center" border="1">
	<thead>
		<tr>
			<th>Id Member</th>
			<th>Nama Lengkap</th>
			<th>Jenis Kelamin</th>
			<th>Tanggal Lahir</th>
			<th>Telepon</th>
			<th>Email</th>
			<th>Alamat</th>
			<th>Catatan</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>

<?php 
	$query = "SELECT * FROM member";
	$res = mysql_query($query);
	$no =1;
	while($row=mysql_fetch_array($res)){
?>		

	<tr>
		<td><?php echo $row['member_Id']; ?></td>
		<td><?php echo $row['nama_lengkap']; ?></td>
		<td><?php echo $row['jenis_kelamin']; ?></td>
		<td><?php echo $row['tanggal_lahir']; ?></td>
		<td><?php echo $row['tlp']; ?></td>
		<td><?php echo $row['email']; ?></td>
		<td><?php echo $row['alamat']; ?></td>
		<td><?php echo $row['catatan']; ?></td>
		<td><a href="index.php?id=<?php echo $row['member_Id']; ?>">Edit</a> | <a onClick ="return confirm ('Yakin data ingin di hapus ?');" href="proses/delete_data.php?id=<?php echo $row['member_Id']; ?>">Delete</a></td>
	</tr>
	<?php $no++; } ?>
	</tbody>
</table>
</html>