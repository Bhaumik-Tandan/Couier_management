<?php
function db()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database="courier_management";
    
    $conn = new mysqli($servername, $username, $password,$database);
    
    if ($conn->connect_error) 
        return 0;

    return $conn;
}
?>