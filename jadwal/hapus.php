<?php
include("class_jadwal.php");
$data = new class_jadwal;
$data->delete($_GET['id']);
header('location:index.php');
