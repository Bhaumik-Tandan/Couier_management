<?php
function insertRecords($records)
{
    foreach ($records as $record) {
        executeQuery($record);
      }
}

?>