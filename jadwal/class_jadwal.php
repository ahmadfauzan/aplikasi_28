<?php
include('../koneksi.php');
class class_jadwal
{

    public $con;
    function __construct()
    {
        $koneksi = new koneksi;
        $this->con = $koneksi->con;
    }


    function get_dataAll()
    {
        $data = $this->con->query(
            "SELECT 
                j.id, 
                j.kd_matkul, 
                m.nama as nama_matkul, 
                d.nama as nama_dosen,
                j.ruang, 
                j.waktu 
                    FROM tbl_jadwal j 
                        INNER JOIN tbl_matkul m 
                            ON j.kd_matkul=m.kd_matkul 
                        INNER JOIN tbl_dosen d 
                            ON j.kd_dosen=d.kd_dosen"
        );
        return $data;
    }

    function get_dataMatkul()
    {
        $data = $this->con->query("select * from tbl_matkul");
        return $data;
    }

    function get_dataDosen()
    {
        $data = $this->con->query("select * from tbl_dosen");
        return $data;
    }

    function add_data($kd_dosen, $kd_matkul, $ruang, $waktu)
    {
        $this->con->query("insert into tbl_jadwal values('','$kd_dosen','$kd_matkul','$ruang','$waktu')");
        return true;
    }


    function delete($id)
    {
        $this->con->query("delete from tbl_jadwal where id='$id'");
        return true;
    }

    function getByID($id)
    {
        $data = $this->con->query(
            "SELECT 
                j.id, 
                j.kd_matkul, 
                j.kd_dosen, 
                m.nama as nama_matkul, 
                d.nama as nama_dosen,
                j.ruang, 
                j.waktu 
                    FROM tbl_jadwal j 
                        INNER JOIN tbl_matkul m 
                            ON j.kd_matkul=m.kd_matkul 
                        INNER JOIN tbl_dosen d 
                            ON j.kd_dosen=d.kd_dosen
                            WHERE j.id='$id'"
        );
        return $data;
    }

    function update($id, $kd_dosen, $kd_matkul, $ruang, $waktu)
    {
        $this->con->query("update tbl_jadwal SET 
                                kd_dosen='$kd_dosen', 
                                kd_matkul='$kd_matkul', 
                                ruang='$ruang', 
                                waktu='$waktu'
                                WHERE id='$id'");
        print_r($id);
        return true;
    }
}
