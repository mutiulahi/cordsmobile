<?php

$dbconnect = mysqli_connect('localhost', 'root', '', 'cordsmobile');

if(!$dbconnect) {
    die('connection failed');
}