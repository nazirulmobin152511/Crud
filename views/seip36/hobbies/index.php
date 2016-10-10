<a href="create.php">Add favorite hobies</a>
<?php 
include_once '../../../src/seip36/hobbies/hobies.php';
$ob = new hobies();
$data = $ob->index();
?>

    <?php 
      if(isset($_SESSION['message']) && !empty($_SESSION['message'])){
      echo $_SESSION['message'];
     unset($_SESSION['message']);
           }
    ?>

<table border="1">
    <tr>
        <th>DATA</th>
        <th colspan="3">ACTION</th>
    </tr>
    <?php 
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