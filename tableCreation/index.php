<?php
include "./admin.php";
include "./comments.php";
include "./couriers.php";
include "./customer.php";
include "./login.php";
include "./manage.php";
include "./offices.php";
include "./shipments.php";
include "./tracks.php";
include "../utils/executeQuery.php";
?> 

<?php
      
        if(isset($_POST['createTable'])) {
            executeQuery($login);
            executeQuery($offices);
            executeQuery($comments);
            executeQuery($customer);
            executeQuery($shipments);
            executeQuery($admin);
            executeQuery($couriers);
            executeQuery($manage);
            executeQuery($tracks);
            echo "Tables created successfully";
        }
        
    ?>
      
    <form method="post">
        <input type="submit" name="createTable" value="Create Table"/>
          
</form>