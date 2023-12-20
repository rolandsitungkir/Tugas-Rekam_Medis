<?php
include "aksi.php";
$db = new Aksi();
$no_id = $_GET['no_id']
$result = $db->hapus($no_id);
	echo "<script>
			alert('Hapus berhasil!');
			window.location.href='lihat_data.php';
		 </script>";
?>
