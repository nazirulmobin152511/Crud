<?php
require_once '../../../vendor/autoload.php';
use crud\seip36\prac19;
$newPhonebook= new prac19($_REQUEST);
$newPhonebook->delete();

