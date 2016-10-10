<?php

echo $_GET['id'];

include_once '../../../src/seip36/mobile/mobile.php';
$myobj= new Mobile();
$data=$ob->index();
