<?php

//include_once '../../../src/seip36/email/email.php';
require_once '../../../vendor/autoload.php';

use crud\seip36\email\email;

$obj = new email();
$obj->prepare($_POST);
$obj->store();
?>