<?php
session_start();
?>
<html>
    <head>
        <title>Favorite Hobbies</title>
    </head>
    <body>
        <fieldset>
           
            <legend>Your favorite Hobbies</legend>
                <form action="store.php" method="post">
                     
                    <label>Enter Your favorite Hobbies</label>
                    <input type="text" name="Hobies_name">
                    <input type="submit" value="ADD">
                    <a href="create.php">Add another input</a>
                </form>
        </fieldset>
    </body>
</html>