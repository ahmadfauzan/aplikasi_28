<?php include('class_jadwal.php');
$data = new class_jadwal;
$dataAll = $data->get_dataAll();
?>
<html>

<body>
    <h1>Data Jadwal</h1>
    <p><a href="tambah.php"><button>Tambah</button></a></p>
    <table border="1px">
        <tr>
            <th>no</th>
            <th>kode matkul</th>
            <th>nama matkul</th>
            <th>nama dosen</th>
            <th>ruang</th>
            <th>waktu</th>
            <th>Aksi</th>
        </tr>
        <?php
        $no = 1;
        while ($rec = $dataAll->fetch_array()) {
            echo "<tr>
                <td>" . $no++ . "</td>
                <td>" . $rec['kd_matkul'] . "</td>
                <td>" . $rec['nama_matkul'] . "</td>
                <td>" . $rec['nama_dosen'] . "</td>
                <td>" . $rec['ruang'] . "</td>
                <td>" . $rec['waktu'] . "</td>
                <td><a href='edit.php?id=" . $rec['id'] . "'>edit</a> <a href='hapus.php?id=" . $rec['id'] . "'>hapus</a></td>
                </tr>";
        }
        ?>
    </table>
</body>

</html>