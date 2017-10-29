<!DOCTYPE html>
<html>
<head>
	<title>data siswa</title>
</head>
<body>
<h1>Data Siswa</h1>
<FORM action="<?php echo base_url('index.php/siswa_con/siswa_insert')?>" method="post">
	<label>NIS</label>
	<input type="text" name="siswa_nis">
	<br>
	<label>NAMA</label>
	<input type="text" name="siswa_nama">
	<br>
	<label>ALAMAT</label>
	<textarea name="siswa_alamat"></textarea>
	<br>
	<input type="submit" name="simpan" value="SIMPAN">

</FORM>
<br>
<h2>DATA SISWA</h2>
<br>
<table width="60%" border="1" cellpadding="5" cellspacing="0">
	<tR>
		<th>No</th>
		<th>NIS</th>
		<th>NAMA</th>
		<th>ALAMAT</th>
		<th>AKSI</th>
	</tR>
	<?php
	$no=1;
	foreach ($siswa as $value) { ?>
			<tr>
		<td><?php echo $no; ?></td>
		<td><?php echo $value['siswa_nis']; ?></td>
		<td><?php echo $value['siswa_nama']; ?></td>
		<td><?php echo $value['siswa_alamat']; ?></td>
		<td>Edit | <a href="<?php echo base_url('index.php/siswa_con/siswa_delete'); ?>?siswa_nis=<?php echo  $value['siswa_nis'];?>">Del</a></td>
	</tr>
	<?php $no++;	
	}
	?>

</table>
</body>
</html>
