<?php
include("class_mahasiswa.php");
$data = new class_mahasiswa;
$dataEdit = $data->getByID($_GET['nim']);
$rec = $dataEdit->fetch_assoc();
?>


<html>

<body>
    <h1>Edit Mahasiswa</h1>

    <form method="post" action="#">
        <table>
            <tr>
                <td>nim </td>
                <td>:</td>
                <td><input name="nim" value="<?php echo $rec['nim'] ?>" disabled></td>
            </tr>
            <tr>
                <td>nama </td>
                <td>:</td>
                <td><input name="nama" value="<?php echo $rec['nama'] ?>"></td>
            </tr>
            <tr>
                <td>jurusan </td>
                <td>:</td>
                <td><input name="jurusan" type="text" value="<?php echo $rec['jurusan'] ?>"></td>
            </tr>
            <tr>
                <td>alamat </td>
                <td>:</td>
                <td><input name="alamat" type="text" value="<?php echo $rec['alamat'] ?>"></td>
            </tr>
            <tr>
                <td> </td>
                <td></td>
                <td><button type="submit" name="simpan">simpan</button></td>
            </tr>
        </table>
    </form>

    <?php
    if (isset($_POST['simpan'])) {

        $data->update($rec['nim'], $_POST['nama'], $_POST['jurusan'], $_POST['alamat']);
        header("location:index.php");
    }
    ?>



</body>

</html>