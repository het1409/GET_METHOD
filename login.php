<?php

if(isset($_GET['submit']))
{
    $username = $_GET['username'];
    $password = $_GET['pwd'];
    
    echo "<h1> Username: $username </h1>";
    echo "<h1> Password: $password </h1>";
}

?>