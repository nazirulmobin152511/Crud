<?php
//include_once '../../../src/seip36/email/email.php';
require_once '../../../vendor/autoload.php';
use crud\seip36\email\email;
$ob = new email();
$data = $ob->index();
?>
<?php 
  if(isset($_SESSION['Message']) && !empty($_SESSION['Message'])){
  echo $_SESSION['Message'];
   unset($_SESSION['Message']);
   }          
  ?>
<table border="1">
    <tr>
        <th>Mobil</th>
        <th>Loptop</th>
        <th colspan="3">ACTION</th>
    </tr>
    <?Php 
    $sl=1;
    if(isset($data) && !empty($data)){
    foreach ($data as $item){
    ?>
    <tr>
        <td><?php echo $item['mobile'] ?></td>
        <td><?php echo $item['laptop'] ?></td>
        <td><a href="show.php?id=<?php echo $item['id']?>">View</a></td>
        <td><a href="edit.php?id=<?php echo $item['id']?>">Edit</a></td>
        <td><a href="delete.php?id=<?php echo $item['id']?>">Delete</a></td>
    </tr>
    <?php }} ?>
</table>
