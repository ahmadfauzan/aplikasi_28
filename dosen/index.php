<?php include('class_dosen.php');
$data = new class_dosen;
$dataAll = $data->get_dataAll();
?>
<html>

<body>
    <h1>Data Dosen</h1>
    <p><a href="tambah.php"><button>Tambah</button></a></p>
    <table border="1px">
        <tr>
            <th>no</th>
            <th>kode dosen</th>
            <th>nama</th>
            <th>alamat</th>
            <th>Aksi</th>
        </tr>
        <?php
        $no = 1;
        while ($rec = $dataAll->fetch_array()) {
            echo "<tr>
                <td>" . $no++ . "</td>
                <td>" . $rec['kd_dosen'] . "</td>
                <td>" . $rec['nama'] . "</td>
                <td>" . $rec['alamat'] . "</td>
                <td><a href='edit.php?kd_dosen=" . $rec['kd_dosen'] . "'>edit</a> <a href='hapus.php?kd_dosen=" . $rec['kd_dosen'] . "'>hapus</a></td>
                </tr>";
        }
        ?>
    </table>
</body>

</html>