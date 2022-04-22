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
function insertRecords($records)
{
    foreach ($records as $record) {
        executeQuery($record);
      }
}

?>

<?php
if(isset($_POST['insertData'])) {
    insertRecords($login);
    insertRecords($offices);
    insertRecords($comments);
    insertRecords($customer);
    insertRecords($shipments);
    insertRecords($admin);
    insertRecords($couriers);
    insertRecords($manage);
    insertRecords($tracks);
    echo "Tables created successfully";
}
?>

<form method="post">
        <input type="submit" name="insertData" value="Insert Data"/>
          
</form>