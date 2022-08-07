<html>

<body>
    <h1>Tambah Semester</h1>

    <form method="post" action="#">
        <table>
            <tr>
                <td>kode semester </td>
                <td>:</td>
                <td><input name="kd_semester"></td>
            </tr>
            <tr>
                <td>semester </td>
                <td>:</td>
                <td><input name="semester"></td>
            </tr>
            <tr>
                <td> </td>
                <td></td>
                <td><button type="submit" name="simpan">simpan</button></td>
            </tr>
        </table>
    </form>

    <?php
    include("class_semester.php");
    $data = new class_semester;

    if (isset($_POST['simpan'])) {
        $data->add_data($_POST['kd_semester'], $_POST['semester']);
        header("location:index.php");
    }

    ?>

</body>

</html>