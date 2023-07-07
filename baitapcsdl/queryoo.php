<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <?php
    include'mysqloo.php';
    // $sql = "insert into theloai (TenTL,ThuTu,AnHien)value('test2222',200,1)";
    // if($conn->query($sql) === TRUE){
    //     echo"Thanh cong";
    // }else{
    //     echo"Error: " .$sql."<br>" . $conn ->error;
    // }
    $sql = "select * from loaitin ";
    $result = $conn ->query($sql);
    if($result -> num_rows > 0) {
        while($row = $result->fetch_assoc()){


            echo "idLT: " . $row["idLT"]. "- Name: " . $row["Ten"]. "- Thu tu: " . $row["ThuTu"]. "- An Hien: " . $row["AnHien"]." - idTL: " . $row["idTL"]  ." - Tu khoa: " . $row["KeyWord"] ."<br>";
        }
    }else{
        echo "0 result";

    }
    $conn->close();
?>
</body>

</html>l