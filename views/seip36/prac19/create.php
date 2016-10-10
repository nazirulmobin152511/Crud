<?php 
session_start();
?>

<div>
    <form action="store.php" method="post">
    <label>Name:</label><input type="text" name="title"><?php if(!empty($_SESSION['Message']['title'])) echo $_SESSION['Message']['title']; unset($_SESSION['Message']['title']);?></br>
    <label>Mobile No:</label><input type="text" name="phone"><?php if(!empty($_SESSION['Message']['phone'])) echo $_SESSION['Message']['phone']; unset($_SESSION['Message']['phone']) ?></br>
    <input type="submit" value="Add"></br>
    </form>
</div>