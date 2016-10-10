<?php 
include_once '../../../src/seip36/mobile/mobile.php';
$obj = new Mobile();
$obj->prepare($_POST);
$obj->store();
?>