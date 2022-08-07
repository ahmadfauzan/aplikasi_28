<?php
include("class_krs.php");
$data = new class_krs;
$dataEdit = $data->getByID($_GET['id']);
// var_dump($data->getByID($_GET['id']));
$dataAllSemester = $data->get_dataSemester();
$dataAllJadwal = $data->get_dataJadwal();
$dataAllMahasiswa = $data->get_dataMahasiswa();
$rec = $dataEdit->fetch_assoc();
?>


<html>

<body>
    <h1>Edit KRS</h1>

    <form method="post" action="#">
        <table>
            <tr>
                <td>Jadwal </td>
                <td>:</td>
                <td>
                    <select name="id_jadwal">
                        <?php
                        while ($jad = $dataAllJadwal->fetch_array()) {
                            if ($rec['id_jadwal'] == $jad['id']) {
                        ?>
                                <option selected="selected" value=" <?php echo $jad['id'] ?>">
                                    <?php
                                    echo $jad['ruang'];
                                    echo ' || ';
                                    echo $jad['waktu'];
                                    ?>
                                </option>
                            <?php
                            } else {
                            ?>
                                <option value=" <?php echo $jad['id'] ?>">
                                    <?php
                                    echo $jad['ruang'];
                                    echo ' || ';
                                    echo $jad['waktu'];
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
                <td>Mahasiswa </td>
                <td>:</td>
                <td>
                    <select name="nim">

                        <?php
                        while ($mhs = $dataAllMahasiswa->fetch_array()) {

                            if ($rec['nim'] == $mhs['nim']) {
                        ?>
                                <option selected="selected" value=" <?php echo $mhs['nim'] ?>">
                                    <?php
                                    echo $mhs['nim'];
                                    echo ' || ';
                                    echo $mhs['nama'];
                                    ?>
                                </option>
                            <?php
                            } else {
                            ?>
                                <option value=" <?php echo $mhs['nim'] ?>">
                                    <?php
                                    echo $mhs['nim'];
                                    echo ' || ';
                                    echo $mhs['nama'];
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
                <td>Semester </td>
                <td>:</td>
                <td>
                    <select name="kd_semester">

                        <?php
                        while ($smt = $dataAllSemester->fetch_array()) {

                            if ($rec['kd_semester'] == $smt['kd_semester']) {
                        ?>
                                <option selected="selected" value=" <?php echo $smt['kd_semester'] ?>">
                                    <?php
                                    echo $smt['kd_semester'];
                                    echo ' || ';
                                    echo $smt['semester'];
                                    ?>
                                </option>
                            <?php
                            } else {
                            ?>
                                <option value=" <?php echo $smt['kd_semester'] ?>">
                                    <?php
                                    echo $smt['kd_semester'];
                                    echo ' || ';
                                    echo $smt['semester'];
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
                <td> </td>
                <td></td>
                <td><button type="submit" name="simpan">simpan</button></td>
            </tr>
        </table>
    </form>

    <?php
    if (isset($_POST['simpan'])) {

        $data->update($_GET['id'], $_POST['id_jadwal'], $_POST['nim'], $_POST['kd_semester']);
        header("location:index.php");
    }
    ?>



</body>

</html>