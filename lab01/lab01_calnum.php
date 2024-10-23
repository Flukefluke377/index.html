<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

</nav>
    lab01_num.php <hr>
    <?php
        $a=5;
        $b=3;
        $c = $a + $b;
        echo "create by nuntawat";
        echo "<br>"; //<hr>
        echo "$a  +  $b" . " = " . $c . "<br>";
        echo " 100 + 75 = ? <br>";
        $a=100;$b=75;$c=$a+$b;
        echo "$a + $b"." = ".$c;
    ?>
    <hr>
เขียนฟังก์ชั้น calnumber(a,b) <br>

<?php

function calnumber($a,$b){
    $c=$a+$b ;
    return $c ;
}
    
echo "การเรียกใช้ฟังก์ชั่น" ."<br>";
$a=5;$b=3;
echo " $a + $b "." = " . calnumber($a,$b)."<br>";
echo " 100 + 75 = ? <br>";
echo "100 + 75"." = ". calnumber(100,75)."<hr>";
?>
<!-- การเขียนแบบ object-->
<?php
    echo "การเขียนโปรแกรม OOP classnum(a,b) <br>";
    class Classnum{
        private $a;
        private $b;

        public function _construct($pa,$pb)
        {
            $this->a=$pa;
            $this->b=$pb; 
        }
        public function add(){
            return $this->a+$this->b;
        }
    }
    echo "เรียกใช้ Classnum <br>";
    $a=5;$b=3;
    $ob_c= new Classnum($a,$b);
    $c= $ob_c->add();
    echo "$a + $b = ".$c."<br>";
    echo " 100 + 75 = ? <br>";
    $ob_d= new Classnum(100,75);
    echo " 100 + 75 = ". $ob_d->add();
?>
<hr>
<a class="btn btn-primary" href="index.php" role="button">กลับ</a>
</body>
</html>