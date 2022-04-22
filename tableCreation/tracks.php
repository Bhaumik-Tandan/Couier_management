<?php
$tracks="CREATE TABLE tracks(
    cid int(6) not null,
    shid int(6) not null,
    constraint foreign key(cid) references customer(cid),
    constraint foreign key(shid) references shipments(shid)
    )";
?>    













