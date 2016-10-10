<?php

include_once '../../../src/seip36/hobbies/hobies.php';
$myobj=new hobies();

$data = $myobj->prepare($_GET)->show();

//$myobj->show();
//print_r($row);
?>
<table border="1">
    <tr>
        <th>ID</th>
        <th>title</th>
    </tr>
    <tr>
        <td><?php echo $data['id'] ?></td>
        <td><?php echo $data['name'] ?></td>
    </tr>
</table>