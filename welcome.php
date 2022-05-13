<?php
session_start();

if (isset($_SESSION['User'])) {

    echo 'Welcome ' . $_SESSION['User'].'</br> <hr>';
    
    echo '<a href="logout.php"> Logout </a>';
    
}
else {
    header("location:index.php");
}
?>