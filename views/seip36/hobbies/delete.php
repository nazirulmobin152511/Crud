<?php
print_r($_GET);

include_once '../../../src/seip36/hobbies/hobies.php';
$ob=new hobies();
$ob->prepare($_GET)->delete();