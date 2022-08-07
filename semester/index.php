<?php include('class_semester.php');
$data = new class_semester;
$dataAll = $data->get_dataAll();
?>
<html>

<body>
    <h1>Data Semester</h1>
    <p><a href="tambah.php"><button>Tambah</button></a></p>
    <table border="1px">
        <tr>
            <th>no</th>
            <th>kode semester</th>
            <th>semester</th>
            <th>Aksi</th>
        </tr>
        <?php
        $no = 1;
        while ($rec = $dataAll->fetch_array()) {
            echo "<tr>
                <td>" . $no++ . "</td>
                <td>" . $rec['kd_semester'] . "</td>
                <td>" . $rec['semester'] . "</td>
                <td><a href='edit.php?kd_semester=" . $rec['kd_semester'] . "'>edit</a> <a href='hapus.php?kd_semester=" . $rec['kd_semester'] . "'>hapus</a></td>
                </tr>";
        }
        ?>
    </table>
</body>

</html>