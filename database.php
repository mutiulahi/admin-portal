<?php
$dbconnect = mysqli_connect('localhost', 'root', 'Tescode__@@1998Ola', 'Ibbu_db');
if(!$dbconnect) {
    die('Database connection failed'. mysqli_connect_error($dbconnect));
}