<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rekam Medis Online</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <h1>Data Pasien</h1>
        <a href="input.php" class="btn btn-primary">Tambah Data</a>
        <br><br>
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <td width="5%">No</td>
                    <td>no_rm</td>
                    <td>nama</td>
                    <td>jenis_kelamin</td>
                    <td>tempat-lahir</td>
                    <td>tgl_lahir</td>
                    <td>alamat</td>
                    <td>jenis_pasien</td>
                    <td>jenis_id</td>
                    <td>no_id</td>
                    <td>no_telp</td>
                    <td>agama</td>
                    <td>gol_darah</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    include 'aksi.php';
                    $db = new Aksi();
                    $no = 1;
                    foreach ($db->tampilkan() as $row) {
                        echo "
                        <tr>
                            <td>$no</td>
                            <td>$row[no_rm]</td>
                            <td>$row[nama]</td>
                            <td>$row[jenis_kelamin]</td>
                            <td>$row[tempat_lahir]</td>
                            <td>$row[tgl_lahir]</td>
                            <td>$row[alamat]</td>
                            <td>$row[jenis_pasien]</td>
                            <td>$row[jenis_id]</td>
                            <td>$row[no_id]</td>
                            <td>$row[no_telp]</td>
                            <td>$row[agama]</td>
                            <td>$row[gol_darah]</td>
                        </tr>
                        ";
                        $no++;
                    }
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
