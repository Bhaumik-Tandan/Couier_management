<?php
$couriers="CREATE TABLE couriers(
    crid INT(6) PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    docket VARCHAR(30) NOT NULL,
    shid int(6) not null,
    offid int(6) not null,
    constraint foreign key(shid) references shipments(shid),
    CONSTRAINT foreign key(offid) references offices(oid)

    )";
?>
















