<?php
//koneksi kedata base
$conn = mysqli_connect("localhost", "root", "", "daftar mahasiswa");
//ambil data dari tb_datamahasiswa atau query datanya
$result = mysqli_query($conn, "SELECT*FROM tambah_data_mahasiswa");
//ambil data (fetch) mahasiswa dari objek result

//while ($mhs = mysqli_fetch_assoc($result)) {
//var_dump($mhs);
//}

?>
<DOCTYPE html>
<html'>
    <head>
    <style>
        body {
background-image: url("ku.jpeg");
background-position: 5px 5px;
}
</style>
        <title>DATA MAHASISWA</title>
    </head>
    <body>
        <center>
        <h1>DATA MAHASISWA UNIVERSITY OF TORONTO</h1>
        <table bgcolor="#C4E5FB" border="1" cellpadding="10" cellspacing="0">
        </center>
            <tr>
                <th>No. </th>
                <th>Opsi</th>
                <th>Gambar</th>
                <th>Nama</th>
                <th>ID</th>
                <th>Email</th>
                <th>Jurusan</th>
                <th>Fakultas</th>
            </tr>

            <?php $i = 1; ?>
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><?= $i;?></td>
                <td>
                    <a href="">Ubah</a> |
                    <a href="">Hapus</a>
                </td>
                <td><img src="IMG/<?= $row["Gambar"]; ?>" width="50"></td>
                <td><?= $row["Nama"];?></td>
                <td><?= $row["NIM"];?></td>
                <td><?= $row["Email"];?></td>
                <td><?= $row["Jurusan"];?></td>
                <td><?= $row["Fakultas"];?></td>
            </tr>
            <?php $i++; ?>
            <?php endwhile; ?>
        </table>
    </body>
</html>