<?php
include_once '../../../src/seip36/hobbies/hobies.php';
$myobj=new hobies();
$data = $myobj->prepare($_GET)->show();
print_r($data);

?>
<html>
    <head>
        <title> Update Favorite Hobbies</title>
    </head>
    <body>
        <fieldset>
           
            <legend>Update favorite Hobbies</legend>
                <form action="update.php" method="post">
                     
                    <label>Update Your favorite Hobbies</label>
                    <input type="text" name="Hobies_name" value="<?php echo $data['name'] ?>">
                    <input type="submit" value="Update">
                    <input type="hidden" name="id" value="<?php echo $data['id']?>"
                    <a href="create.php">Add another input</a>
                </form>
        </fieldset>
    </body>
</html>

