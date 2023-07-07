<?php
$local = "localhost";
$user = "root";
$password = "123456";
$db_name = "webtintuc";

$conn = new mysqli($local,$user,$password,$db_name);

if(!isset($conn)){
    echo "error";
}