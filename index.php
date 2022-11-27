<?php session_start();?>
<?php
    echo "index page. <br>";
    echo "Hi, " . $_SESSION["name"] . "<br>";
    echo ' <a href="logout.php">Logout</a> ';
?>