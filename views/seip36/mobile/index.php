<a href="create.php"> Add Your favorites Mobile models</a>
    
    <?php 
include_once '../../../src/seip36/mobile/mobile.php';
$ob = new Mobile();
//$ob->index();
$data = $ob->index();

print_r($data);
?>
<?php 
  if(isset($_SESSION['Message']) && !empty($_SESSION['Message'])){
  echo $_SESSION['Message'];
   unset($_SESSION['Message']);
   }          
  ?>
<table border="1">
    <tr>
        <th>DATA</th>
        <th colspan="3">ACTION</th>
    </tr>
    <?Php 
    $sl=1;
    if(isset($data) && !empty($data)){
    foreach ($data as $item){
    ?>
    <tr>
        <td><?php echo $item['name'] ?></td>
        <td><a href="show.php?id=<?php echo $item['id']?>">View</a></td>
        <td><a href="edit.php?id=<?php echo $item['id']?>">Edit</a></td>
        <td><a href="delete.php?id=<?php echo $item['id']?>">Delete</a></td>
    </tr>
    <?php }} ?>
</table>