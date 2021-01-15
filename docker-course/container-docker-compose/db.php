<?php

$link = new mysqli("db", "root", "test", "appdb");
if(!$link->connect_error){
    echo "Connection succceeded";
}