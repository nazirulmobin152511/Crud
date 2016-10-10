<?php 
include_once '../../../src/seip36/mobile/mobile.php';
$myobj = new Mobile();
$data = $myobj->prepare($_GET)->show();
?>

<table border="1">
    <tr>
    <th>ID</th>
    <th>Title</th>
    </tr>
    <tr>
        <td><?php echo $data['id'] ?></td>
        <td><?php echo $data['name'] ?></td>
    </tr>
</table>