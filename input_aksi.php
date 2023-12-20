<?php 
	include 'aksi.php';
	$db = new Aksi();

		$nama = $_POST['nama'];
		$jenis_kelamin = $_POST['jenis_kelamin'];
		$tempat_lahir = $_POST['tempat_lahir'];
		$tgl_lahir = $_POST['tgl_lahir'];
		$alamat = $_POST['alamat'];
		$jenis_pasien = $_POST['jenis_pasien'];
		$jenis_id = $_POST['jenis_id'];
		$no_id = $_POST['no_id'];
		$no_telp = $_POST['no_telp'];
		$agama = $_POST['agama'];
		$gol_darah = $_POST['gol_darah'];

		$result = $db->simpan($nama, $jenis_kelamin, $tempat_lahir, $tgl_lahir, $alamat, $jenis_pasien, $jenis_id, $no_id, $agama, $gol_darah, $no_telp);
		if ($result==1) {
			echo "<script>
					alert('Pendaftaran Berhasil!');
					window.location.href='input.php';
				 </script>";
		}else{
			echo "<script>
					alert('Proses Gagal!');
					history.go(-1);
				 </script>";
		}
?>