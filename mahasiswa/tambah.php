<html>

<body>
    <h1>Tambah Mahasiswa</h1>

    <form method="post" action="#">
        <table>
            <tr>
                <td>nim </td>
                <td>:</td>
                <td><input name="nim"></td>
            </tr>
            <tr>
                <td>nama </td>
                <td>:</td>
                <td><input name="nama"></td>
            </tr>
            <tr>
                <td>jurusan </td>
                <td>:</td>
                <td><input name="jurusan" type="text"></td>
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
    include("class_mahasiswa.php");
    $data = new class_mahasiswa;

    if (isset($_POST['simpan'])) {
        $data->add_data($_POST['nim'], $_POST['nama'], $_POST['jurusan'], $_POST['alamat']);
        header("location:index.php");
    }

    ?>

</body>

</html>