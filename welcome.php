<?php
session_start();
if(isset($_SESSION['username']))
{
    echo "<h1>welcome,".$_SESSION['username']."</h1>";
    echo "<br>";
    echo "<a href='./logout.php'>Logout</a>";
}
else
{
    header("location:/");
}

?>