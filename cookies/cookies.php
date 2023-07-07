<?php
    setcookie("name","Hoang",time()+1800,"/","",0);
    setcookie("city","Hue",time()+1800,"/","",0);
    setcookie("name","Long",time()+86400,"/","",0);

?>
<!DOCTYPE html>
<html lang="en">
<body>
    <?php
        echo "Cookies have been set. ";
        echo $_COOKIE["name"];"<br>";
    ?>
</body>
</html>