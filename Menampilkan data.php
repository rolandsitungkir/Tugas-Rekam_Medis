<html>
<head>
	<title>Rekam Medis Online</title>
</head>
<style type="text/css">
#isi{
	border-style:solid;
	border-width: thin;
	margin : 100px;
	margin-top: 20px;
	padding: 10px;
}
button{
109
padding: 10px 40px;
font-weight: bold;
}
table{
	width:100%;
	border-collapse:collapse;
	table-layout:auto;
	vertical-align:top;
	margin-bottom:15px;
	border:2px solid #000;
}
</style>
<body>
<div id="isi">
| 	<a href="input.php">Input Data</a> | <a href="lihat_data.php">Lihat data</a> |
 	<h2>Tabel Data Pasien</h2>
 	<hr style="border-style:solid;"><br>
 		<table width="100%" border="1">
 			<tr align="center">
 				<td>No</td>
 				<td>No.RM</td>
 				<td>Nama Lengkap</td>
 				<td>Jenis Kelamin</td>
 				<td>Tempat/Tgl.Lahir</td>
 				<td>Alamat</td>
 				<td>Jenis Pasien</td>
 				<td>No. ID</td>
 				<td>Gol.Darah</td>
 				<td>Agama</td>
 				<td>No.HP</td>
 				<td colspan="2">Aksi</td>
 		</tr>
 	<?php
 		
 			<td>$no</td>
 			<td>$ambil[0]</td>
 			<td>$ambil[1]</td>
 			<td>$ambil[2]</td>
 			<td>$ambil[3],$ambil[4]</td>
 			<td>$ambil[5]</td>
 			<td>$ambil[6]</td>
 			<td>$ambil[8] ($ambil[7])</td>
 			<td>$ambil[10]</td>
 			<td>$ambil[9]</td>
 			<td>$ambil[11]</td>
 			<td>
 				<a href='ubah_form.php?rm=$ambil[0]'>Ubah</a>
 				<a href='hapus_data.php?rm=$ambil[0]'>Hapus</a>
		</td>
 		";
 		$no++;
 	}
 	?>
 	</table>
</div>
</body>
</html>