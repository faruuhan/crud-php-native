<html>
	<head>
		<title>Data Member</title>
	</head>

	<?php
	$id = "";
	$nama_lengkap ="";
	$jenis_kelamin ="";
	$tanggal_lahir ="";
	$telepon ="";
	$email ="";
	$alamat ="";
	$kota ="";
	$kode_pos ="";
	$catatan ="";
	$action="proses/add_data.php";
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		include"proses/koneksi.php";
		$query = "select * from member where member_Id ='".$id."'";
		$row = mysql_query($query);
		$res = mysql_fetch_array($row);
		$nama_lengkap = $res['nama_lengkap'];
		$jenis_kelamin = $res['jenis_kelamin'];
		$tanggal_lahir = $res['tanggal_lahir'];
		$tgl_array = explode("-",$tanggal_lahir); 
		$vtahun = sprintf("%d", $tgl_array[0]);
		$vbulan = sprintf("%d", $tgl_array[1]);
		$vtanggal = sprintf("%d", $tgl_array[2]);
		$telepon = $res['tlp'];
		$email = $res['email'];
		$alamat = $res['alamat'];
		$kota = $res['kota'];
		$kode_pos = $res['kode_pos'];
		$catatan = $res['catatan'];
		$action ="proses/update_data.php";
	
	}
?>

<table align="center">
	<form method="POST" action="<?php echo $action; ?>">
	<tr>
		<td><a href="index.php">Home</a></td>
		<td><a href="member_list.php">MemberList</a></td>
	</tr>
	<tr>
		<td><input type="hidden" name="id" value="<?php echo $id; ?>" name="id"></td>
	</tr>
	<tr>
		<td>Nama Lengkap</td>
		<td><input type="text" name="nama" value="<?php echo $nama_lengkap; ?>"></td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td><input type="radio" value="Laki-Laki" <?php echo ($jenis_kelamin== 'Laki-Laki') ?  "checked" : "" ;  ?> name="jenis_kelamin">Laki-Laki <input type="radio" value="Perempuan" <?php echo ($jenis_kelamin== 'Perempuan') ?  "checked" : "" ;  ?> name="jenis_kelamin">Perempuan</td>
	</tr>
	<tr>
		<td>Tanggal Lahir</td>
		<td><select name="hari">
			<?php
			
			for($i=1; $i<=31; $i++)
			
		
			
			{
				$selected = $i == $vtanggal ? "selected":"";

			echo "<option value ='".sprintf("%02d",$i)."' $selected>".$i."</option>";
			
			}
			
			?>
			</select>
		
			<select name="bulan">
		
			<?php
			
			$bulan = array("", "Jan", "Feb", "Mart", "Apr", "Mei", "Jun", "Jul", "Agust", "Sept", "Oct", "Nov", "Des");
			for($i=1; $i<=12; $i++)
				
			{
				$selected = $i == $vbulan ? "selected":"";
			
			echo "<option value='".sprintf("%02d",$i)."' $selected>".$bulan[$i]."</option>";
			
			}
			
			?>
			
			</select>
		
			<select name="tahun">
		
			<?php
			
			for($i=1986; $i<=2018; $i++)
				
			{
				$selected = $i == $vtahun ? "selected":"";
			
			echo "<option value = ".$i." $selected>".$i."</option>";
			
			}
			
			?>
			</select>
		</td>
	</tr>
		
		<tr>
			<td>Telepon</td>
			<td><input type="text" name="tlp" value="<?php echo $telepon; ?>"></td>
		</tr>
		
		<tr>
			<td>Email</td>
			<td><input type="text" name="email" value="<?php echo $email; ?>"></td>
		</tr>
		
		<tr>
			<td>Alamat</td>
			<td><textarea name="alamat" ><?php echo $alamat; ?></textarea></td>
		</tr>
		
		<tr>
			<td>Kota</td>
			<td><input type="text" name="kota" value="<?php echo $kota; ?>"></td>
		</tr>
		
		<tr>
			<td>Kode Pos</td>
			<td><input type="text" name="kode_pos" value="<?php echo $kode_pos; ?>"></td>
		</tr>
		
		<tr>
			<td>Catatan</td>
			<td><input type="text" name="catatan" value="<?php echo $catatan; ?>"></td>
		</tr>
		
		<tr>
			<td><input type="submit" name="submit" value="Simpan"></td>
		</tr>
		</form>
</table>
</html>