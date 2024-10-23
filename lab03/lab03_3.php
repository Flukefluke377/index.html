<h2>การเขียนโปรแกรมแบบ OOP</h2>
<?php
    class Rectangle{
        private $width;
        private $hight;
        public function __construct($pwidth,$phight){
            $this->width = $pwidth;
            $this->hight = $phight;
        }

        public function area(){
            return $this->width * $this->hight;
        }

        public function lenght(){
            return ($this->width*2) + ($this->hight*2);
        }

        public function setwidth($pwidth){
            $this->width = $pwidth;
        }
        public function sethight($phight){
            $this->hight = $phight;
        }
        public function getwidth(){
            return $this->width;
        }
        public function gethight(){
            return $this->hight;
        }
        

    }
?>

<h3>ผลลัพธ์</h3>
<?php
$rect= new Rectangle(10,15);
?>
<span>ความกว้าง = 10</span><br>
<span>ความสูง = 15</span><br>
<span>พื้นที่ = <?php echo $rect->area(); ?> ตารางหน่วย</span><br>
<span>เส้นรอบรูป = <?php echo $rect->lenght(); ?> หน่วย</span><br>
<hr>
<?php
    $rect->setwidth(122);
    $rect->sethight(75.5);
?>
<span>ความกว้าง = <?php echo $rect->getwidth(); ?></span><br>
<span>ความสูง = <?php echo $rect->gethight(); ?></span><br>
<span>พื้นที่ กว้าง= <?php echo $rect->getwidth(); ?> x <?php echo $rect->gethight(); ?> = <?php echo $rect->area(); ?> ตารางหน่วย</span><br>
<span>เส้นรอบรูป = <?php echo $rect->lenght(); ?> หน่วย</span><br>
<hr>
<?php
    $rect->setwidth(25.5);
    $rect->sethight(23.2);
?>
<span>ความกว้าง = <?php echo $rect->getwidth(); ?></span><br>
<span>ความสูง = <?php echo $rect->gethight(); ?></span><br>
<span>พื้นที่ กว้าง= <?php echo $rect->getwidth(); ?> x <?php echo $rect->gethight(); ?> = <?php echo $rect->area(); ?> ตารางหน่วย</span><br>
<span>เส้นรอบรูป = <?php echo $rect->lenght(); ?> หน่วย</span><br>
<hr>

<h3>Source Code</h3>
<pre>
&lt;h2&gt;การเขียนโปรแกรมแบบ OOP&lt;/h2&gt;
&lt;?php
    class Rectangle{
        private $width;
        private $hight;
        public function __construct($pwidth,$phight){
            $this-&gt;width = $pwidth;
            $this-&gt;hight = $phight;
        }

        public function area(){
            return $this-&gt;width * $this-&gt;hight;
        }

        public function lenght(){
            return ($this-&gt;width*2) + ($this-&gt;hight*2);
        }

        public function setwidth($pwidth){
            $this-&gt;width = $pwidth;
        }
        public function sethight($phight){
            $this-&gt;hight = $phight;
        }
        public function getwidth(){
            return $this-&gt;width;
        }
        public function gethight(){
            return $this-&gt;hight;
        }
        

    }
?&gt;

&lt;h3&gt;ผลลัพธ์&lt;/h3&gt;
&lt;?php
$rect= new Rectangle(10,15);
?&gt;
&lt;span&gt;ความกว้าง = 10&lt;/span&gt;&lt;br&gt;
&lt;span&gt;ความสูง = 15&lt;/span&gt;&lt;br&gt;
&lt;span&gt;พื้นที่ = &lt;?php echo $rect-&gt;area(); ?&gt; ตารางหน่วย&lt;/span&gt;&lt;br&gt;
&lt;span&gt;เส้นรอบรูป = &lt;?php echo $rect-&gt;lenght(); ?&gt; หน่วย&lt;/span&gt;&lt;br&gt;
&lt;hr&gt;
&lt;?php
    $rect-&gt;setwidth(70);
    $rect-&gt;sethight(120);
?&gt;
&lt;span&gt;ความกว้าง = &lt;?php echo $rect-&gt;getwidth(); ?&gt;&lt;/span&gt;&lt;br&gt;
&lt;span&gt;ความสูง = &lt;?php echo $rect-&gt;gethight(); ?&gt;&lt;/span&gt;&lt;br&gt;
&lt;span&gt;พื้นที่ = &lt;?php echo $rect-&gt;area(); ?&gt; ตารางหน่วย&lt;/span&gt;&lt;br&gt;
&lt;span&gt;เส้นรอบรูป = &lt;?php echo $rect-&gt;lenght(); ?&gt; หน่วย&lt;/span&gt;&lt;br&gt;
&lt;hr&gt;
</pre>