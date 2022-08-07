<?php
include("class_dosen.php");
$data = new class_dosen;
$dataEdit = $data->getByID($_GET['kd_dosen']);
$rec = $dataEdit->fetch_assoc();
?>


<html>

<body>
    <h1>Tambah Dosen</h1>

    <form method="post" action="#">
        <table>
            <tr>
                <td>kode dosen </td>
                <td>:</td>
                <td><input name="kd_dosen" value="<?php echo $rec['kd_dosen'] ?>" disabled></td>
            </tr>
            <tr>
                <td>nama </td>
                <td>:</td>
                <td><input name="nama" value="<?php echo $rec['nama'] ?>"></td>
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

        $data->update($rec['kd_dosen'], $_POST['nama'], $_POST['alamat']);
        header("location:index.php");
    }
    ?>



</body>

</html>