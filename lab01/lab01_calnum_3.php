<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>

<?php
    echo "การเขียนโปรแกรม OOP classnum(a,b) <br>";
    class Classnum {
        private $a;
        private $b;

        public function __construct($pa, $pb) {
            $this->a = $pa;
            $this->b = $pb;
        }

        public function add() {
            return $this->a + $this->b;
        }
    }

    echo "เรียกใช้ Classnum <br>";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = $_POST['num_a'];
        $b = $_POST['num_b'];

        $ob_c = new Classnum($a, $b);
        $c = $ob_c->add();
        echo "$a + $b = " . $c . "<hr>";
    } else {
        echo "ใส่ข้อมูลไม่ถูกต้อง <hr>";
    }
?>
    <a class="btn btn-primary" href="index.php" role="button">กลับ</a>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>

<?php
    echo "การเขียนโปรแกรม OOP classnum(a,b) <br>";
    class Classnum {
        private $a;
        private $b;

        public function __construct($pa, $pb) {
            $this->a = $pa;
            $this->b = $pb;
        }

        public function add() {
            return $this->a + $this->b;
        }
    }

    echo "เรียกใช้ Classnum <br>";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = $_POST['num_a'];
        $b = $_POST['num_b'];

        $ob_c = new Classnum($a, $b);
        $c = $ob_c->add();
        echo "$a + $b = " . $c . "<hr>";
    } else {
        echo "ใส่ข้อมูลไม่ถูกต้อง <hr>";
    }
?>
    <a class="btn btn-primary" href="index.php" role="button">กลับ</a>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>

<?php
    echo "การเขียนโปรแกรม OOP classnum(a,b) <br>";
    class Classnum {
        private $a;
        private $b;

        public function __construct($pa, $pb) {
            $this->a = $pa;
            $this->b = $pb;
        }

        public function add() {
            return $this->a + $this->b;
        }
    }

    echo "เรียกใช้ Classnum <br>";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = $_POST['num_a'];
        $b = $_POST['num_b'];

        $ob_c = new Classnum($a, $b);
        $c = $ob_c->add();
        echo "$a + $b = " . $c . "<hr>";
    } else {
        echo "ใส่ข้อมูลไม่ถูกต้อง <hr>";
    }
?>
    <a class="btn btn-primary" href="index.php" role="button">กลับ</a>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>

<?php
    echo "การเขียนโปรแกรม OOP classnum(a,b) <br>";
    class Classnum {
        private $a;
        private $b;

        public function __construct($pa, $pb) {
            $this->a = $pa;
            $this->b = $pb;
        }

        public function add() {
            return $this->a + $this->b;
        }
    }

    echo "เรียกใช้ Classnum <br>";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = $_POST['num_a'];
        $b = $_POST['num_b'];

        $ob_c = new Classnum($a, $b);
        $c = $ob_c->add();
        echo "$a + $b = " . $c . "<hr>";
    } else {
        echo "ใส่ข้อมูลไม่ถูกต้อง <hr>";
    }
?>
    <a class="btn btn-primary" href="index.php" role="button">กลับ</a>
</body>
</html>
