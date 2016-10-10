<?php

require_once "../../../vendor/autoload.php";
session_start();
use crud\seip36\prac19;
$_REQUEST['id']=$_SESSION['id'];
$newPhonebook= new prac19($_REQUEST);
$data=$newPhonebook->edit();