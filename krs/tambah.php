<?php
include("class_krs.php");
$data = new class_krs;
$dataAllSemester = $data->get_dataSemester();
$dataAllJadwal = $data->get_dataJadwal();
$dataAllMahasiswa = $data->get_dataMahasiswa();
?>
<html>

<body>
    <h1>Tambah KRS</h1>

    <form method="post" action="#">
        <table>
            <tr>
                <td>Jadwal </td>
                <td>:</td>
                <td>
                    <select name="id_jadwal">
                        <option selected="selected">-- Pilih --</option>
                        <?php
                        while ($jad = $dataAllJadwal->fetch_array()) {

                        ?>
                            <option value="<?php echo $jad['id'] ?>">
                                <?php
                                echo $jad['ruang'];
                                echo ' || ';
                                echo $jad['waktu'];
                                ?>
                            </option>
                        <?php
                        }
                        ?>
                    </select>
                </td>

            </tr>
            <tr>
                <td>Mahasiswa </td>
                <td>:</td>
                <td>
                    <select name="nim">
                        <option selected="selected">-- Pilih --</option>
                        <?php
                        while ($mhs = $dataAllMahasiswa->fetch_array()) {
                        ?>
                            <option value="<?php echo $mhs['nim'] ?>">
                                <?php
                                echo $mhs['nim'];
                                echo ' || ';
                                echo $mhs['nama'];
                                ?>
                            </option>
                        <?php
                        }
                        ?>
                    </select>

                </td>
            </tr>
            <tr>
                <td>Semester </td>
                <td>:</td>
                <td>
                    <select name="kd_semester">
                        <option selected="selected">-- Pilih --</option>
                        <?php
                        while ($smt = $dataAllSemester->fetch_array()) {
                        ?>
                            <option value="<?php echo $smt['kd_semester'] ?>">
                                <?php
                                echo $smt['kd_semester'];
                                echo ' || ';
                                echo $smt['semester'];
                                ?>
                            </option>
                        <?php
                        }
                        ?>
                    </select>

                </td>
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
        $data->add_data($_POST['id_jadwal'], $_POST['nim'],  $_POST['kd_semester']);
        header("location:index.php");
    }

    ?>

</body>

</html>