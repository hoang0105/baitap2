    <?php
        $servername = "localhost";
        $username = "root";
        $password = "123456";
        $db_name = "webtintuc";
        $conn = mysqli_connect($servername, $username, $password);

        if (!$conn){
            die("Not connected :" . mysql_connect_error());

        }
        else{
            mysqli_select_db($conn,$db_name);
        }
        
    ?>