<?php
include('../koneksi.php');
class class_semester
{

    public $con;
    function __construct()
    {
        $koneksi = new koneksi;
        $this->con = $koneksi->con;
    }

    function get_dataAll()
    {
        $data = $this->con->query("select * from tbl_semester");
        return $data;
    }

    function add_data($kd_semester, $semester)
    {
        $this->con->query("insert into tbl_semester values('$kd_semester', '$semester')");
        return true;
    }


    function delete($kd_semester)
    {
        $this->con->query("delete from tbl_semester where kd_semester='$kd_semester'");
        return true;
    }

    function getByID($kd_semester)
    {
        $data = $this->con->query("select * from tbl_semester where kd_semester='$kd_semester'");
        return $data;
    }

    function update($kd_semester, $semester)
    {
        $this->con->query("update tbl_semester SET semester='$semester' WHERE kd_semester='$kd_semester'");
        return true;
    }
}
