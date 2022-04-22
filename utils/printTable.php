<?php
include "db.php";
function print_table($name)
{
    $conn=db();
    $sql="SELECT * FROM $name";
    $result=mysqli_query($conn,$sql);
    $num_rows=mysqli_num_rows($result);
    if($num_rows>0)
    {
        echo "<h1>$name</h1>";
        echo "<table border='1'><tr>";
        $row=mysqli_fetch_assoc($result);
        $keys=array_keys($row);
        foreach($keys as $key)
        {
            echo "<th>$key</th>";
        }
        echo "</tr>";
        while($row=mysqli_fetch_assoc($result))
        {
            echo "<tr>";
            foreach($row as $key=>$value)
            {
                echo "<td>$value</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    else
    {
        echo "No data found";
    }
}
?>