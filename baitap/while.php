<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function makeRGB(){
        return "rgb(".rand(0,255).",".rand(0,255).",".rand(0,255).")";
    }
    $n = 10;
    $i = 0;
    while($i<$n){
        echo"<div style='background-color:".makeRGB().";'></div>";
        $i++;
    }

    ?>
    <style>
        div{width:50px; height:50px;float: left;}
    </style>
</body>
</html>