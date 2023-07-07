<?php
      $servername = "localhost";
      $username = "root";
      $password = "123456";
      $db_name = "webtintuc";
      $conn = new mysqli($servername, $username, $password,$db_name);
      if ($conn->connect_error){
         die("Error connecting to " .$conn->connect_error);
      }
      // echo"connect success"; 
?>
