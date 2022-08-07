<html>

<body>
    <h1>Tambah Dosen</h1>

    <form method="post" action="#">
        <table>
            <tr>
                <td>kode dosen </td>
                <td>:</td>
                <td><input name="kd_dosen"></td>
            </tr>
            <tr>
                <td>nama </td>
                <td>:</td>
                <td><input name="nama"></td>
            </tr>
            <tr>
                <td>alamat </td>
                <td>:</td>
                <td><input name="alamat" type="text"></td>
            </tr>
            <tr>
                <td> </td>
                <td></td>
                <td><button type="submit" name="simpan">simpan</button></td>
            </tr>
        </table>
    </form>

    <?php
    include("class_dosen.php");
    $data = new class_dosen;

    if (isset($_POST['simpan'])) {
        $data->add_data($_POST['kd_dosen'], $_POST['nama'], $_POST['alamat']);
        header("location:index.php");
    }

    ?>

</body>

</html>