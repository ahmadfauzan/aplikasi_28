<?php
include('../koneksi.php');
class class_matkul
{

    public $con;
    function __construct()
    {
        $koneksi = new koneksi;
        $this->con = $koneksi->con;
    }

    function get_dataAll()
    {
        $data = $this->con->query("select * from tbl_matkul");
        return $data;
    }

    function add_data($kd_matkul, $nama, $sks)
    {
        $this->con->query("insert into tbl_matkul values('$kd_matkul','$nama','$sks')");
        return true;
    }


    function delete($kd_matkul)
    {
        $this->con->query("delete from tbl_matkul where kd_matkul='$kd_matkul'");
        return true;
    }

    function getByID($kd_matkul)
    {
        $data = $this->con->query("select * from tbl_matkul where kd_matkul='$kd_matkul'");
        return $data;
    }

    function update($kd_matkul, $nama, $sks)
    {
        $this->con->query("update tbl_matkul SET nama='$nama', sks='$sks' WHERE kd_matkul='$kd_matkul'");
        return true;
    }
}
