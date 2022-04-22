<?php
$admin="CREATE TABLE admin(
    aid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    phone VARCHAR(30) NOT NULL,
    offid int(6) not null,
    status varchar(30),
    lid int(6) not null,
    constraint foreign key(lid) references login(lid)
    )";
?>