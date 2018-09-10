<?php 
    global $connection; 
$connection = mysqli_connect('localhost', 'root', 'root', 'sastanak');
    if(!$connection) {
           die("no connection");
    }
    
?>
