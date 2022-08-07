<?php
 include("class_matkul.php");
 $data=new class_matkul;
$data->delete($_GET['kd_matkul']);
header('location:index.php');
