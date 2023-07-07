<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $con = array("cả"=>"Tùng","ba"=>"Hòa","tư" =>"Lan","út"=>"Minh");
    foreach($con as $Key =>$value){
        echo"<b>Con ".$Key." la: </b>".$value;
        echo"<br>";
    }
    ?>
</body>
</html>