<?php

require_once "../../../vendor/autoload.php";
use crud\seip36\prac19;
$newPhonebook= new prac19();
$data=$newPhonebook->trashed();
//echo "<pre>",print_r($data),"</pre>";

?>
<a href="create.php">Add New</a> || <a href="index.php">Home</a>
    <table border="">
    <tr>
        <td>
            Serial
        </td>
        <td>
            Name
        </td>
        <td>
            Phone No
        </td>
        <td  colspan="2">
            Action
        </td>
    </tr>

<?php
if(!empty($data)):

    foreach ($data as $phones)
    {

?>

<tr>
        <td>
                <?php echo $phones->id; ?>
        </td>
        <td>
            <?php echo $phones->title; ?>
        </td>
        <td>
            <?php echo $phones->phone; ?>
        </td>
        <td>
            <a href="restore.php?id=<?php echo $newPhonebook->encrypt($phones->id); ?>">Restore</a>
        </td>
        <td>
            <a href="delete.php?id=<?php echo $newPhonebook->encrypt($phones->id); ?>">Delete</a>
        </td>

</tr>
<?php
    }
endif;
?>

</table>