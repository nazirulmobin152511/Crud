<?php
//include_once '../../../src/seip36/email/email.php';
require_once '../../../vendor/autoload.php';
use crud\seip36\email\email;
$myob = new email();
$data = $myob->prepare($_GET)->show();

?>

<table border="1">
    <tr>
    <th>ID</th>
    <th>Mobile</th>
    <th>Laptop</th>
    </tr>
    <tr>
        <td><?php echo $data['id'] ?></td>
        <td><?php echo $data['mobile'] ?></td>
         <td><?php echo $data['laptop'] ?></td>
    </tr>
</table>
