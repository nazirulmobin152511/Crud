<?php
include_once '../../../src/seip36/mobile/mobile.php';
$obj=new Mobile();
//print_r($_POST);
$obj->prepare($_POST);
$obj->update();
header('location:index.php');


