<?php
include("class_semester.php");
$data = new class_semester;
$data->delete($_GET['kd_semester']);
header('location:index.php');
