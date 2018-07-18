<?php

function connect_db() {
    $server = 'localhost'; // this may be an ip address instead
    $user = 'root';
    $pass = '12345678';
    $database = 'test'; // name of your database
    $connection = new mysqli($server, $user, $pass, $database);

    return $connection;
}
?>
