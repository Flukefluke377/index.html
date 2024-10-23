<!--lab03-1-->
<h2>การหาพื้นที่สี่เหลี่ยม</h2>
<?php
    //กำหนดตัวแปร
    $width = 10;
    $hight = 15;
    $area = $width * $hight;
    $lenght = ($width*2) + ($hight*2);
?>
<h3>ผลลัพธ์</h3>
<span>ความกว้าง = <?php echo $width; ?></span><br>
<span>ความสูง = <?php echo $hight; ?></span><br>
<span>พื้นที่ = <?php echo $area; ?> ตารางหน่วย</span><br>
<span>เส้นรอบรูป = <?php echo $lenght; ?> หน่วย</span><br>
<hr>
<?php
$width = 72;
$hight = 120;
$area = $width * $hight;
$lenght = ($width*2) + ($hight*2);
?>
<h3>ผลลัพธ์</h3>
<span>ความกว้าง = <?php echo $width; ?></span><br>
<span>ความสูง = <?php echo $hight; ?></span><br>
<span>พื้นที่ = <?php echo $area; ?> ตารางหน่วย</span><br>
<span>เส้นรอบรูป = <?php echo $lenght; ?> หน่วย</span><br>
<hr>

<h3>Source Code</h3>
<pre>
&lt;!--lab03-1--&gt;
&lt;h2&gt;การหาพื้นที่สี่เหลี่ยม&lt;/h2&gt;
&lt;?php
    //กำหนดตัวแปร
    $width = 10;
    $hight = 15;
    $area = $width * $hight;
    $lenght = ($width*2) + ($hight*2);
?&gt;
&lt;h3&gt;ผลลัพธ์&lt;/h3&gt;
&lt;span&gt;ความกว้าง = &lt;?php echo $width; ?&gt;&lt;/span&gt;&lt;br&gt;
&lt;span&gt;ความสูง = &lt;?php echo $hight; ?&gt;&lt;/span&gt;&lt;br&gt;
&lt;span&gt;พื้นที่ = &lt;?php echo $area; ?&gt; ตารางหน่วย&lt;/span&gt;&lt;br&gt;
&lt;span&gt;เส้นรอบรูป = &lt;?php echo $lenght; ?&gt; หน่วย&lt;/span&gt;&lt;br&gt;
&lt;hr&gt;
&lt;?php
$width = 72;
$hight = 120;
$area = $width * $hight;
$lenght = ($width*2) + ($hight*2);
?&gt;
&lt;h3&gt;ผลลัพธ์&lt;/h3&gt;
&lt;span&gt;ความกว้าง = &lt;?php echo $width; ?&gt;&lt;/span&gt;&lt;br&gt;
&lt;span&gt;ความสูง = &lt;?php echo $hight; ?&gt;&lt;/span&gt;&lt;br&gt;
&lt;span&gt;พื้นที่ = &lt;?php echo $area; ?&gt; ตารางหน่วย&lt;/span&gt;&lt;br&gt;
&lt;span&gt;เส้นรอบรูป = &lt;?php echo $lenght; ?&gt; หน่วย&lt;/span&gt;&lt;br&gt;
&lt;hr&gt;
</pre>