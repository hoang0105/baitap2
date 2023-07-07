<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $a = array("Long" , "Hoang","Ky");
    foreach($a as $key=>$value)
        echo"a[$key]=$value </br>";
    echo"-----<br/>";
    $b = array(12,23,10,5);
    $sum = 0;
    foreach($b as $key=>$value){
        $sum += $value;
        echo"b[$key]=".$value."<br/>";

    }
    echo "Tong : $sum"
    ?>
</body>

</html>