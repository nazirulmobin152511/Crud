<?php
//include_once '../../../src/seip36/email/email.php';
require_once '../../../vendor/autoload.php';
use crud\seip36\email\email;
$myobj = new email();
$data = $myobj->prepare($_GET)->show();
print_r($data);
?>

<html>
    <head>
        <title>Update favorite mobiles</title>
    </head>
    <body>
        <fieldset>
            <legend>Update mobile model</legend>
            <form action="update.php" method="post">
                
                <label>Enter your favorite mobile model</label>
                <input type="text" name="mobile_model" value="<?php echo $data['mobile'];?>">
                <label>Enter your laptop model model</label>
                <input type="text" name="laptop_model" value="<?php echo $data['laptop']?>">
                <input type="submit" value="UPDATE">
            </form>
        </fieldset>
    </body>
</html>
