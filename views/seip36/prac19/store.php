<?php
require_once '../../../vendor/autoload.php';
//require_once '../../../vendor/autoload.php';

use crud\seip36\prac19\prac19;
if(!empty($_REQUEST['title']) && !empty($_REQUEST['phone']))
{
    $newprac19= new Prac19($_REQUEST);
    $newprac19->store();
}else {
    $newprac19= new prac19($_REQUEST);
   // print_r($_REQUEST);die();
    header("location:create.php");
}
?>



