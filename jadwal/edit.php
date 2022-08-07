<?php
include("class_jadwal.php");
$data = new class_jadwal;
$dataEdit = $data->getByID($_GET['id']);
$dataAllDosen = $data->get_dataDosen();
$dataAllMatkul = $data->get_dataMatkul();
$rec = $dataEdit->fetch_assoc();
?>


<html>

<body>
    <h1>Edit Jadwal</h1>

    <form method="post" action="#">
        <table>
            <tr>
                <td>Dosen </td>
                <td>:</td>
                <td>
                    <select name="kd_dosen">
                        <?php
                        while ($dos = $dataAllDosen->fetch_array()) {
                            if ($rec['kd_dosen'] == $dos['kd_dosen']) {
                        ?>
                                <option selected="selected" value=" <?php echo $dos['kd_dosen'] ?>">
                                    <?php
                                    echo $dos['kd_dosen'];
                                    echo ' || ';
                                    echo $dos['nama'];
                                    ?>
                                </option>
                            <?php
                            } else {
                            ?>
                                <option value=" <?php echo $dos['kd_dosen'] ?>">
                                    <?php
                                    echo $dos['kd_dosen'];
                                    echo ' || ';
                                    echo $dos['nama'];
                                    ?>
                                </option>
                        <?php
                            }
                        }
                        ?>
                    </select>
                </td>

            </tr>
            <tr>
                <td>Matkul </td>
                <td>:</td>
                <td>
                    <select name="kd_matkul">

                        <?php
                        while ($mk = $dataAllMatkul->fetch_array()) {

                            if ($rec['kd_matkul'] == $mk['kd_matkul']) {
                        ?>
                                <option selected="selected" value=" <?php echo $mk['kd_matkul'] ?>">
                                    <?php
                                    echo $mk['kd_matkul'];
                                    echo ' || ';
                                    echo $mk['nama'];
                                    ?>
                                </option>
                            <?php
                            } else {
                            ?>
                                <option value=" <?php echo $mk['kd_matkul'] ?>">
                                    <?php
                                    echo $mk['kd_matkul'];
                                    echo ' || ';
                                    echo $mk['nama'];
                                    ?>
                                </option>
                        <?php
                            }
                        }
                        ?>
                    </select>

                </td>
            </tr>
            <tr>
                <td>ruang </td>
                <td>:</td>
                <td><input name="ruang" type="text" value="<?php echo $rec['ruang'] ?>"></td>
            </tr>
            <tr>
                <td>waktu </td>
                <td>:</td>
                <td><input name="waktu" type="text" value="<?php echo $rec['waktu'] ?>"></td>
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

        $data->update($_GET['id'], $_POST['kd_dosen'], $_POST['kd_matkul'], $_POST['ruang'], $_POST['waktu']);
        header("location:index.php");
    }
    ?>



</body>

</html>