<?php
include("class_jadwal.php");
$data = new class_jadwal;
$dataAllDosen = $data->get_dataDosen();
$dataAllMatkul = $data->get_dataMatkul();
?>
<html>

<body>
    <h1>Tambah Jadwal</h1>

    <form method="post" action="#">
        <table>
            <tr>
                <td>Dosen </td>
                <td>:</td>
                <td>
                    <select name="kd_dosen">
                        <option selected="selected">-- Pilih --</option>
                        <?php
                        while ($rec = $dataAllDosen->fetch_array()) {

                        ?>


                            <option value="<?php echo $rec['kd_dosen'] ?>">
                                <?php echo $rec['nama'] ?>
                            </option>
                        <?php
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
                        <option selected="selected">-- Pilih --</option>
                        <?php
                        while ($rec = $dataAllMatkul->fetch_array()) {
                        ?>
                            <option value="<?php echo $rec['kd_matkul'] ?>">
                                <?php echo $rec['nama'] ?>
                            </option>
                        <?php
                        }
                        ?>
                    </select>

                </td>
            </tr>
            <tr>
                <td>ruang </td>
                <td>:</td>
                <td><input name="ruang"></td>
            </tr>
            <tr>
                <td>waktu </td>
                <td>:</td>
                <td><input name="waktu"></td>
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
        $data->add_data($_POST['kd_dosen'], $_POST['kd_matkul'],  $_POST['ruang'], $_POST['waktu']);
        header("location:index.php");
    }

    ?>

</body>

</html>