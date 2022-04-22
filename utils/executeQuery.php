<?php
include 'db.php';
   function executeQuery($sql)
   {        
        $conn=db(); 
        $conn->query($sql);
        $conn->close();
   }
?> 