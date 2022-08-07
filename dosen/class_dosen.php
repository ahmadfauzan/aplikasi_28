<?php
include('../koneksi.php');
class class_dosen
{

    public $con;
    function __construct()
    {
        $koneksi = new koneksi;
        $this->con = $koneksi->con;
    }

    function get_dataAll()
    {
        $data = $this->con->query("select * from tbl_dosen");
        return $data;
    }

    function add_data($kd_dosen, $nama, $alamat)
    {
        $this->con->query("insert into tbl_dosen values('$kd_dosen','$nama','$alamat')");
        return true;
    }


    function delete($kd_dosen)
    {
        $this->con->query("delete from tbl_dosen where kd_dosen='$kd_dosen'");
        return true;
    }

    function getByID($kd_dosen)
    {
        $data = $this->con->query("select * from tbl_dosen where kd_dosen='$kd_dosen'");
        return $data;
    }

    function update($kd_dosen, $nama, $alamat)
    {
        $this->con->query("update tbl_dosen SET nama='$nama', alamat='$alamat' WHERE kd_dosen='$kd_dosen'");
        return true;
    }
}
