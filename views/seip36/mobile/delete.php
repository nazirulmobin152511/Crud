<?php 
include_once '../../../src/seip36/mobile/mobile.php';
$ob = new Mobile();
$data = $ob->prepare($_GET)->delete();

?>