<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>

    <?php
        echo "<h2> คำนวน </h2>";
        $a= $_POST['num_a'];
        $b= $_POST['num_b'];
        $c=$a+$b;
        echo "$a + $b = ".$c."<hr>";
    ?>
    <hr>
    <a class="btn btn-primary" href="index.php" role="button">กลับ</a>
</body>
</html>