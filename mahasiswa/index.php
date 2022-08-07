<?php include('class_mahasiswa.php');
$data = new class_mahasiswa;
$dataAll = $data->get_dataAll();
?>
<html>

<body>
    <h1>Data Mahasiswa</h1>
    <p><a href="tambah.php"><button>Tambah</button></a></p>
    <table border="1px">
        <tr>
            <th>no</th>
            <th>nim</th>
            <th>nama</th>
            <th>jurusan</th>
            <th>alamat</th>
            <th>Aksi</th>
        </tr>
        <?php
        $no = 1;
        while ($rec = $dataAll->fetch_array()) {
            echo "<tr>
                <td>" . $no++ . "</td>
                <td>" . $rec['nim'] . "</td>
                <td>" . $rec['nama'] . "</td>
                <td>" . $rec['jurusan'] . "</td>
                <td>" . $rec['alamat'] . "</td>
                <td><a href='edit.php?nim=" . $rec['nim'] . "'>edit</a> <a href='hapus.php?nim=" . $rec['nim'] . "'>hapus</a></td>
                </tr>";
        }
        ?>
    </table>
</body>

</html>