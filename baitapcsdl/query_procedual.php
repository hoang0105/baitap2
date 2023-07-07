<?php
    include 'config-procedural.php';
    
    $sqlinsert = "insert into theloai (TenTL,ThuTu,AnHien)value('test',100,1)";
    $sqldelete = "delete from theloai WHERE TenTL='test'";
    $sqlupdate = "update theloai set ThuTu = 2 where TenTL='test'";

    $sqlselect = "select * from theloai";

    $result = mysqli_query($conn, $sqlselect);
    while($row = mysqli_fetch_assoc($result)){
        echo "id: " . $row["idTL"]. "- Name: " . $row["TenTL"]. "- Thu tu: " . $row["ThuTu"]."</td><td> - An Hien: " . $row["AnHien"] ."<br>";
    }
?>--