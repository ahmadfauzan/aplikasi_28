<?php
include('../koneksi.php');
class class_krs
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
            k.id, 
            k.id_jadwal, 
            k.nim, 
            k.kd_semester, 
            m.nama as nama_mahasiswa, 
            s.semester,
            j.ruang, 
            j.waktu 
                FROM tbl_krs k 
                    INNER JOIN tbl_jadwal j 
                        ON j.id=k.id_jadwal 
                    INNER JOIN tbl_mhs m 
                        ON k.nim=m.nim
                    INNER JOIN tbl_semester s
                        ON k.kd_semester=s.kd_semester"
        );
        return $data;
    }

    function get_dataMahasiswa()
    {
        $data = $this->con->query("select * from tbl_mhs");
        return $data;
    }

    function get_dataJadwal()
    {
        $data = $this->con->query("SELECT 
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
                                                ON j.kd_dosen=d.kd_dosen");
        return $data;
    }

    function get_dataSemester()
    {
        $data = $this->con->query("select * from tbl_semester");
        return $data;
    }

    function add_data($id_jadwal, $nim, $kd_semester)
    {
        $this->con->query("insert into tbl_krs values('','$id_jadwal','$nim','$kd_semester')");
        return true;
    }


    function delete($id)
    {
        $this->con->query("delete from tbl_krs where id='$id'");
        return true;
    }

    function getByID($id)
    {
        $data = $this->con->query(
            "SELECT 
                k.id, 
                k.id_jadwal, 
                k.nim, 
                k.kd_semester, 
                m.nama as nama_mahasiswa, 
                s.semester,
                j.ruang, 
                j.waktu 
                    FROM tbl_krs k 
                        INNER JOIN tbl_jadwal j 
                            ON j.id=k.id_jadwal 
                        INNER JOIN tbl_mhs m 
                            ON k.nim=m.nim
                        INNER JOIN tbl_semester s
                            ON k.kd_semester=s.kd_semester
                            where k.id='$id'"
        );
        return $data;
    }

    function update($id, $id_jadwal, $nim, $kd_semester)
    {
        $this->con->query("update tbl_krs SET 
                                id_jadwal='$id_jadwal', 
                                nim='$nim', 
                                kd_semester='$kd_semester'
                                WHERE tbl_krs.id='$id'");
        print_r($nim);
        return true;
    }
}
