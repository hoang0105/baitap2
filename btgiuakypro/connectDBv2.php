<?php
$conn  = mysqli_connect('localhost','root','123456','webtintuc');
if(mysqli_connect_errno())
{
    echo 'Database Connection Error';
}