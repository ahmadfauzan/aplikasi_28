<?php include('class_krs.php');
$data = new class_krs;
$dataAll = $data->get_dataAll();
?>
<html>

<body>
    <h1>Data KRS</h1>
    <p><a href="tambah.php"><button>Tambah</button></a></p>
    <table border="1px">
        <tr>
            <th>no</th>
            <th>ruang</th>
            <th>waktu</th>
            <th>nama mahasiswa</th>
            <th>semester</th>
            <th>Aksi</th>
        </tr>
        <?php
        $no = 1;
        while ($rec = $dataAll->fetch_array()) {
            echo "<tr>
                <td>" . $no++ . "</td>
                <td>" . $rec['ruang'] . "</td>
                <td>" . $rec['waktu'] . "</td>
                <td>" . $rec['nama_mahasiswa'] . "</td>
                <td>" . $rec['semester'] . "</td>
                <td><a href='edit.php?id=" . $rec['id'] . "'>edit</a> <a href='hapus.php?id=" . $rec['id'] . "'>hapus</a></td>
                </tr>";
        }
        ?>
    </table>
</body>

</html>