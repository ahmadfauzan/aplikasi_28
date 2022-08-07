<?php
include("class_dosen.php");
$data = new class_dosen;
$data->delete($_GET['kd_dosen']);
header('location:index.php');
