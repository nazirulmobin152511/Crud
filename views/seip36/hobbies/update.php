<?php
include_once '../../../src/seip36/hobbies/hobies.php';
$obj=new hobies();
//print_r($_POST);
$obj->prepare($_POST);
$obj->update();
header('location:index.php');
