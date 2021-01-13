<?php

$link = new mysqli("db", "dbuser", "pass", "appdb");
if(!$link->connect_error){
    echo "Connection succceeded";
}