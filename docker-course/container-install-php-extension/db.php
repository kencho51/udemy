<?php

$link = new mysqli("db", "dbuser", "test", "appdb");
if(!$link->connect_error){
    echo "Connection succceeded";
}