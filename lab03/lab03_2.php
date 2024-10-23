<!--การเขียนฟังก์ชั่น-->
<h2>การเขียนฟังก์ชั่น</h2>
<h3>หาพื้นที่สี่เหลี่ยม</h3>
<?php
function calrectangle($width,$hight){
    $area = $width * $hight;
    return $area;
}
function length_rectangle($width,$hight){
    $length = ($width*2) + ($hight*2);
    return $length;
}
?>
<h3>ผลลัพธ์</h3>
<span>ความกว้าง = 10</span><br>
<span>ความสูง = 15</span><br>
<span>พื้นที่ = <?php echo calrectangle(10,15); ?> ตารางหน่วย</span><br>
<span>เส้นรอบรูป = <?php echo length_rectangle(10,15); ?> หน่วย</span><br>
<hr>

<span>ความกว้าง = 72</span><br>
<span>ความสูง = 120</span><br>
<span>พื้นที่ = <?php echo calrectangle(72,120); ?> ตารางหน่วย</span><br>
<span>เส้นรอบรูป = <?php echo length_rectangle(72,120); ?> หน่วย</span><br>
<hr>

<h3>Source Code</h3>
<pre>
&lt;h2&gt;การเขียนฟังก์ชั่น&lt;/h2&gt;
&lt;h3&gt;หาพื้นที่สี่เหลี่ยม&lt;/h3&gt;
&lt;?php
function calrectangle($width,$hight){
    $area = $width * $hight;
    return $area;
}
function length_rectangle($width,$hight){
    $length = ($width*2) + ($hight*2);
    return $length;
}
?&gt;
&lt;h3&gt;ผลลัพธ์&lt;/h3&gt;
&lt;span&gt;ความกว้าง = 10&lt;/span&gt;&lt;br&gt;
&lt;span&gt;ความสูง = 15&lt;/span&gt;&lt;br&gt;
&lt;span&gt;พื้นที่ = &lt;?php echo calrectangle(10,15); ?&gt; ตารางหน่วย&lt;/span&gt;&lt;br&gt;
&lt;span&gt;เส้นรอบรูป = &lt;?php echo length_rectangle(10,15); ?&gt; หน่วย&lt;/span&gt;&lt;br&gt;
&lt;hr&gt;

&lt;span&gt;ความกว้าง = 72&lt;/span&gt;&lt;br&gt;
&lt;span&gt;ความสูง = 120&lt;/span&gt;&lt;br&gt;
&lt;span&gt;พื้นที่ = &lt;?php echo calrectangle(72,120); ?&gt; ตารางหน่วย&lt;/span&gt;&lt;br&gt;
&lt;span&gt;เส้นรอบรูป = &lt;?php echo length_rectangle(72,120); ?&gt; หน่วย&lt;/span&gt;&lt;br&gt;
&lt;hr&gt;
</pre>
