<?php 
session_start();
?>

<html>
    <head>
        <title>favorite mobiles</title>
    </head>
    <body>
        <fieldset>
            <legend>Add favorite mobile model</legend>
            <form action="store.php" method="post">
                
                <label>Enter your favorite mobile model</label>
                <input type="text" name="mobile_model">
                <label>Enter your laptop model model</label>
                <input type="text" name="laptop_model">
                <input type="submit" value="ADD">
            </form>
        </fieldset>
    </body>
</html>
