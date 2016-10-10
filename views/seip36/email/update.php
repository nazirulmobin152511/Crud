<?php
//include_once '../../../src/seip36/email/email.php';
require_once '../../../vendor/autoload.php';
use crud\seip36\email\email;
$myobj = new email();
$myobj->prepare($_POST);
$myobj->update();
header('location:index.php');
?>
