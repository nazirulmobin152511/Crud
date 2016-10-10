<?php
require_once '../../../vendor/autoload.php';
use crud\seip36\email\email;
include_once '../../../src/seip36/mobile/mobile.php';
$ob = new email();
$data = $ob->prepare($_GET)->delete();
header('location:index.php');
?>

