<?php
include_once '../../../src/seip36/mobile/mobile.php';
$obj = new Mobile();
$data=$obj->prepare($_GET)->show();
print_r($data);
?>

<html>
    <head>
        <title>favorite mobiles</title>
    </head>
    <body>
        <fieldset>
            <legend>Update favorite mobile model</legend>
            <form action="update.php" method="post">
                
                
                <label>Enter your Update mobile model</label>
                <input type="text" name="mobile_model">
                <input type="submit" value="UPDATE">
            </form>
        </fieldset>
    </body>
</html>

