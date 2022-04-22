<?php 
$shipments="CREATE TABLE shipments(
    shid INT(6) PRIMARY KEY,
    from_city varchar(20) not null,
    to_city varchar(20) not null,
    weight int(3) not null,
    r_date date not null,
    cmid INT(6),
    constraint foreign key(cmid) references comments(cmid)
    )
";
?>
   
