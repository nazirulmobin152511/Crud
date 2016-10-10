<?php 
include_once '../../../src/seip36/hobbies/hobies.php';
$obj=new hobies();
$obj->prepare($_POST);
$obj->store();
?>