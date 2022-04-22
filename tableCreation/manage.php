<?php
$manage="CREATE TABLE manage(
    aid int(6) not null,
    cid int(6) not null,
    oid int(6) not null,
    crid int(6) not null,
    constraint foreign key(aid) references admin(aid),
    constraint foreign key(cid) references customer(cid),
    constraint foreign key(oid) references offices(oid),
    constraint foreign key(crid) references couriers(crid)
    )";
?>    












