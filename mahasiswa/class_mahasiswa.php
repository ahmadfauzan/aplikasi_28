<?php
include('../koneksi.php');

class class_mahasiswa
{

    public $con;
    function __construct()
    {
        $koneksi = new koneksi;
        $this->con = $koneksi->con;
    }

    function get_dataAll()
    {
        $data = $this->con->query("select * from tbl_mhs");
        return $data;
    }

    function add_data($nim, $nama, $jurusan, $alamat)
    {
        $this->con->query("insert into tbl_mhs values('$nim', '$nama', '$jurusan', '$alamat')");
        return true;
    }


    function delete($nim)
    {
        $this->con->query("delete from tbl_mhs where nim='$nim'");
        return true;
    }

    function getByID($nim)
    {
        $data = $this->con->query("select * from tbl_mhs where nim='$nim'");
        return $data;
    }

    function update($nim, $nama, $jurusan, $alamat)
    {
        $this->con->query("update tbl_mhs SET nama='$nama', jurusan='$jurusan', alamat='$alamat' WHERE nim='$nim'");
        return true;
    }
}
