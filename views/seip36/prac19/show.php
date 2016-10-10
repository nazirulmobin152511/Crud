<?php
require_once '../../../vendor/autoload.php';

use crud\seip36\prac19;
$newPhonebook= new prac19($_REQUEST);
$data=$newPhonebook->show();
//echo "<pre>",print_r($data),"</pre>";
if(!empty($data)):
?>

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
    </tr>

        <tr>
            <td>
                <?php echo $data->id; ?>
            </td>
            <td>
                 <?php echo $data->title; ?>
            </td>
            <td>
                <?php echo $data->phone; ?>
            </td>
    </tr>

</table>
<?php
endif;
?>

