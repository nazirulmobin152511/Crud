<?php 
include_once '../../../src/seip36/birthday/birthday.php';
$obj= new Birthday;
$obj->prepare($_POST);
$obj->store();
?>