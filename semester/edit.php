<?php
include("class_semester.php");
$data = new class_semester;
$dataEdit = $data->getByID($_GET['kd_semester']);
$rec = $dataEdit->fetch_assoc();
?>


<html>

<body>
    <h1>Edit Semester</h1>

    <form method="post" action="#">
        <table>
            <tr>
                <td>kd_semester </td>
                <td>:</td>
                <td><input name="kd_semester" value="<?php echo $rec['kd_semester'] ?>" disabled></td>
            </tr>
            <tr>
                <td>semester </td>
                <td>:</td>
                <td><input name="semester" value="<?php echo $rec['semester'] ?>"></td>
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

        $data->update($rec['kd_semester'], $_POST['semester']);
        header("location:index.php");
    }
    ?>



</body>

</html>