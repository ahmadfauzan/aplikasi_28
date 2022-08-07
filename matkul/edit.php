<?php
include("class_matkul.php");
$data = new class_matkul;
$dataEdit = $data->getByID($_GET['kd_matkul']);
$rec = $dataEdit->fetch_assoc();
?>


<html>

<body>
    <h1>Tambah Matkul</h1>

    <form method="post" action="#">
        <table>
            <tr>
                <td>kode matkul </td>
                <td>:</td>
                <td><input name="kd_matkul" value="<?php echo $rec['kd_matkul'] ?>" disabled></td>
            </tr>
            <tr>
                <td>matkul </td>
                <td>:</td>
                <td><input name="nama" value="<?php echo $rec['nama'] ?>"></td>
            </tr>
            <tr>
                <td>SKS </td>
                <td>:</td>
                <td><input name="sks" type="number" value="<?php echo $rec['sks'] ?>"></td>
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

        $data->update($rec['kd_matkul'], $_POST['nama'], $_POST['sks']);
        header("location:index.php");
    }
    ?>



</body>

</html>