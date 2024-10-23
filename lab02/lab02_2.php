<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
   include ("lab02/myclass.php");
   echo "การเขียนโปรแกรม OOP classnum(a,b) <br>";
    echo "เรียกใช้ Classnum <br>";
    $a=5;$b=3;
    $ob_c= new Classnum($a,$b);
    echo "$a + $b = ".$ob_c->add()."<hr>";
    echo "$a + $b = ".$ob_c->sub()."<hr>";
    echo "$a + $b = ".$ob_c->muti()."<hr>";
    echo "$a + $b = ".number_format(($ob_c->divi()),2)."<hr>";
?>
<a class="btn btn-primary" href="index.php" role="button">กลับ</a>
</body>
</html>