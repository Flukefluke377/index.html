<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h3>ฟังก์ชัน</h3>

<?php
include("lab02/myclass.php");
	echo "<h2> nuntawat </h2>";
    
	$a=5;$b=3;
    echo "$a + $b = " . calnum($a,"+",$b) . "<br>";
    echo "$a - $b = " . calnum($a,"-",$b) . "<br>";
    echo "$a * $b = " . calnum($a,"*",$b) . "<br>";
    echo "$a / $b = " . number_format(calnum($a,"/",$b),3) . "<br>";
    echo "$a ** $b = " . calnum($a,"**",$b) . "<br>";
    echo "$a % $b = " . calnum($a,"%",$b) . "<br>";
    echo "$a / $b = " . calnum($a,"|",$b) . "<br>";
    

?>
<hr>
<a class="btn btn-primary" href="index.php" role="button">กลับ</a>
</body>
</html>