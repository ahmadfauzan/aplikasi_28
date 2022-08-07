<html>

<body>
    <h1>Tambah Matkul</h1>

    <form method="post" action="#">
        <table>
            <tr>
                <td>kode matkul </td>
                <td>:</td>
                <td><input name="kd_matkul"></td>
            </tr>
            <tr>
                <td>matkul </td>
                <td>:</td>
                <td><input name="nama"></td>
            </tr>
            <tr>
                <td>SKS </td>
                <td>:</td>
                <td><input name="sks" type="number"></td>
            </tr>
            <tr>
                <td> </td>
                <td></td>
                <td><button type="submit" name="simpan">simpan</button></td>
            </tr>
        </table>
    </form>

    <?php
    include("class_matkul.php");
    $data = new class_matkul;

    if (isset($_POST['simpan'])) {
        $data->add_data($_POST['kd_matkul'], $_POST['nama'], $_POST['sks']);
        header("location:index.php");
    }

    ?>

</body>

</html>