<?php

require_once '../../../vendor/autoload.php';

use crud\seip36\prac19;
if(session_status()!==PHP_SESSION_ACTIVE)session_start();
$newPhonebook= new prac19($_REQUEST);
$data=$newPhonebook->show();
$_SESSION['id']=$newPhonebook->encrypt($data->id);
?>
<div>
    <form action="update.php">

        <label>Name</label><input type="text" name="title" value="<?php echo $data->title;?>"></br>
        <label>Phone</label><input type="text" name="phone" value="<?php echo $data->phone;?>">
        <input type="submit" value="Update"></br>
    </form>
</div>

