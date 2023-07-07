<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai tap</title>
</head>
<body>
    <?php
    //Variable-----------------------------
        echo"<h3>Bien</h3>";
        $a = 10;
        $A = "Chao ban";
        echo"</br>";
        echo $A;
        echo"Gia tri cua chuoi la : " .$a;
        echo"</br>";
        echo gettype($A);
        echo "a is " . is_int($a);

    //Ham---------------------------------
        echo"</br>";
        echo"</br>";
        echo"<h3>Ham</h3>";

        define('MAX',12);
        define("MYNAME","PHP");
        echo MAX."</br>";
        echo MYNAME."</br>";
    
    //Toan Tu -----------------------------

        echo"</br>";
        echo"</br>";
        echo"<h3>Toan Tu</h3>";
        $a = 5;
        $b = 2;
        echo"</br>";
        echo "a = " .$a;
        echo"</br>";
        echo "b = " .$b;
        echo"</br>";
        echo"</br>";

        $c = $a + $b;
        echo "a+b = ".($c)."<br/>";
        $c = $a - $b;
        echo "a-b = ".($c)."<br/>";
        $c = $a * $b;
        echo "a*b = ".($c)."<br/>";
        $c = $a / $b;
        echo "a/b = ".($c)."<br/>";
        $c = $a % $b;
        echo "a%b = ".($c)."<br/>";

        //if-else
        echo"</br>";
        echo"</br>";
        echo"<h3>If else</h3>";
        $a = 5;
        $b = 3;
        if($a>$b)
        echo("Khoang chenh lech giua $a va $b la: ".($a-$b));
        else
        echo("Khoang chenh lech giua $a va $b la: ".($b-$a));

        //switch-case
        echo"</br>";
        echo"</br>";
        echo"<h3>switch-case</h3>";

        $chon = 3;
        switch($chon) {
            case 1:case 2:case 3:
                echo("Quy 1");break;
            default:
            echo("Khong phai la thang");break;
        }

        
    ?>
</body>
</html>