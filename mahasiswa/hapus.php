<?php
include("class_mahasiswa.php");
$data = new class_mahasiswa;
$data->delete($_GET['nim']);
header('location:index.php');
