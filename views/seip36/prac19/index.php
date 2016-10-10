<?php
require_once '../../../vendor/autoload.php';

use crud\seip36\prac19\prac19;

$newprac19= new prac19();
$data=$newprac19->index();
//echo "<pre>",print_r($data),"</pre>";

?>
<a href="create.php">Add New</a> || <a href="trashed.php">View Trashed</a>
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
        <td  colspan="3">
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
            <a href="show.php?id=<?php echo $newPhonebook->encrypt($phones->id); ?>">View</a>
        </td>
        <td>
            <a href="edit.php?id=<?php echo $newPhonebook->encrypt($phones->id); ?>">Edit</a>
        </td>
        <td>
            <a href="trash.php?id=<?php echo $newPhonebook->encrypt($phones->id); ?>">Delete</a>
        </td>
</tr>
<?php
    }
endif;
?>

</table>

