<?php session_start();?>
<?php
    echo "Login Page. <br>";
    $_SESSION["name"] = "Crys";
    echo ' <a href="index.php">Login</a> ';
?>