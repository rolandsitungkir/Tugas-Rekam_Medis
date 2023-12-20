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
input,select{
height: 30px;
}
button{
padding: 10px 40px;
font-weight: bold;
}
</style>
<body>
<div id="isi">
| <a href="input.php">Input Data</a> | <a href="lihat_data.php">Lihat data</a> |
 <h2>Ubah Data Pasien</h2>
 <hr style="border-style:solid;"><br>
 <?php
 include "koneksi.php";
 $rm = $_GET['rm'];
 $sql = mysqli_query($con,"SELECT * FROM tbl_pasien WHERE no_rm = '$rm'");
 $ambil = mysql_fetch_row($sql,MYSQLI_NUM);
 ?>
 <form action="ubah_aksi.php" method="POST">
 <table width="100%">
 <tr>
<td>Nama Lengkap</td>
 <td><input type="text" value="<?php echo $ambil[1] ?>" name="namsize="50%></td>
 </tr>
 <tr>
<td>Jenis Kelamin</td>
 <td>
 <select name="jk">
 <option value="<?php echo $ambil[2] ?>"><?php echo $ambil?></option>
 <option value="laki-laki">Laki-laki</option>
 <option value="perempuan">Perempuan</option>
 </select>
 </td>
 </tr>
 <tr>
<td>Tempat/Tgl.Lahir</td>
 <td>
 <input type="text" value="<?php echo $ambil[3] ?>" name="tempat" input type="date" value="<?php echo $ambil[4] ?>"
name="tgl_lahir">
 </td>
 </tr>
 <tr>
<td valign="top">Alamat</td>
 <td>
 <textarea cols="50" rows="4" name="alamat">
112
 <?php echo $ambil[5] ?>
 </textarea>
 </td>
 </tr>
 <tr>
<td valign="top">Jenis Pasien</td>
 <td>
 <select name="jenis_pasein">
 <option value="<?php echo $ambil[6] ?>"><?php echo $ambil[?></option>
 <option value="Umum">Umum</option>
 <option value="Gratis">Gratis</option>
 <option value="BPJS">BPJS</option>
 <option value="SKTM">SKTM</option>
 </select>
 </td>
 </tr>
 <tr>
<td valign="top">No ID</td>
 <td>
 <select name="jenis_id">
 <option value="<?php echo $ambil[7] ?>"><?php echo
$ambil[7] ?></option>
 <option value="KTP">KTP</option>
 <option value="SIM">SIM</option>
 <option value="BPJS">BPJS</option>
 <option value="Lainnya">Lainnya</option>
 </select>
 <input type="text" value="<?php echo $ambil[8] ?>"
name="no_id" size="30%">
 </td>
 </tr>
 <tr>
 <td>Agama</td>
 <td>
 <select name="agama">
 <option value="<?php echo $ambil[9] ?>"><?php echo
$ambil[9] ?></option>
 <option value="Islam">Islam</option>
 <option value="Kristen">Kristen</option>
 <option value="Budha">Budha</option>
 <option value="Hindu">Hindu</option>
 <option value="Konghuchu">Konghuchu</option>
 </select>
 </td>
 </tr>
 <tr>
 <td>Gol Darah</td>
 <td>
 <select name="gol_darah">
 <option value="<?php echo $ambil[10] ?>"><?php
echo $ambil[10] ?></option>
 <option value="A">A</option>
 <option value="B">B</option>
 <option value="AB">AB</option>
 <option value="O">O</option>
 </select>
 </td>
 </tr>
 <tr>
113
<td>No.Telp/HP</td>
 <td>
 <input type="text" value="<?php echo $ambil[11] ?>"
name="no_hp" size="50%">
<input type="hidden" value="<?php echo $ambil[0] ?>" name="no_rm">
 </td>
 </tr>
<tr>
<td></td>
 <td>
 <button type="submit" name="ubah">Ubah</button>
 <button type="reset" name="reset">Reset</button>
 </td>
 </tr>
 </table>
</form>
</div>
</body>
</html>