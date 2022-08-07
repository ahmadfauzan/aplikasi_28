<?php
include("class_krs.php");
$data = new class_krs;
$data->delete($_GET['id']);
header('location:index.php');
