<!DOCTYPE html>
<html lang="en">
<head>
  <title>Manatsawee Kid-arn</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    #toggleText {
      display: none;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Manatsawee Kid-arn</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">พื้นฐานโปรแกรม</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?p=inputnum">inputnum</a></li>
            <li><a class="dropdown-item" href="?p=lab01_calnum">lab01_calnum</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="a" role="button" data-bs-toggle="dropdown">lab02-function-OOP</a>
            <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?p=lab02_1">Lab02_1</a></li>
            <li><a class="dropdown-item" href="?p=lab02_2">Lab02_2</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="a" role="button" data-bs-toggle="dropdown">lab03</a>
            <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?p=lab03_1">Lab03_1 การหาพื้นที่สี่เหลี่ยม</a></li>
            <li><a class="dropdown-item" href="?p=lab03_2">Lab03_2 การหาพื้นที่สี่เหลี่ยมแบบฟังก์ชั่น</a></li>
            <li><a class="dropdown-item" href="?p=lab03_3">Lab03_3 การหาพื้นที่สี่เหลี่ยมแบบOOP</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="a" role="button" data-bs-toggle="dropdown">lab04</a>
            <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?p=lab04_1">Lab04_1 การหาพื้นที่วงกลม</a></li>
            <li><a class="dropdown-item" href="?p=lab04_2">Lab04_2 การหาพื้นที่วงกลมแบบฟังก์ชั่น</a></li>
            <li><a class="dropdown-item" href="?p=lab04_3">Lab04_3 การหาพื้นที่วงกลมแบบOOP</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="a" role="button" data-bs-toggle="dropdown">lab05</a>
            <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?p=lab05_1">Lab05_1</a></li>
            <li><a class="dropdown-item" href="?p=lab05_2">Lab05_2</a></li>
            <li><a class="dropdown-item" href="?p=lab05_3">Lab05_3</a></li>
            <li><a class="dropdown-item" href="?p=lab05_4html">lab05_4</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="a" role="button" data-bs-toggle="dropdown">lab06</a>
            <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?p=lab06_1">Lab06_1</a></li>
            <li><a class="dropdown-item" href="?p=lab06_2">Lab06_2</a></li>
            <li><a class="dropdown-item" href="?p=lab06_3">Lab06_3</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="a" role="button" data-bs-toggle="dropdown">lab07</a>
            <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?p=lab07_1">Lab07_1</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="a" role="button" data-bs-toggle="dropdown">sale</a>
            <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?p=sl-01html">Sale1</a></li>
            </ul>
        </li>
		<li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="a" role="button" data-bs-toggle="dropdown">grade</a>
            <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?p=gradehtml">grade</a></li>
            </ul>
    </li>
    <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="a" role="button" data-bs-toggle="dropdown">งานทดลองในห้องเรียน Test</a>
            <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?p=workshop1">ทดลอง-1</a></li>
            <li><a class="dropdown-item" href="?p=workshop2">ทดลอง-2</a></li>
            <li><a class="dropdown-item" href="?p=lab_oop_factorial">ทดลอง-3</a></li>
            <li><a class="dropdown-item" href="?p=labfactorial">ทดลอง-4</a></li>
            <li><a class="dropdown-item" href="?p=conts">ทดลอง-5</a></li>
            <li><a class="dropdown-item" href="?p=conts2">ทดลอง-6</a></li>
            <li><a class="dropdown-item" href="?p=conts3">ทดลอง-7</a></li>
            </ul>
    </li>
    <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="a" role="button" data-bs-toggle="dropdown">Shape</a>
            <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?p=shape">Shape</a></li>
            <li><a class="dropdown-item" href="?p=rectangle">rectangle</a></li>
            <li><a class="dropdown-item" href="?p=circle">circle</a></li>
            </ul>
    </li>
    <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="a" role="button" data-bs-toggle="dropdown">AI</a>
            <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?p=ai-02">Ai-1</a></li>
            <li><a class="dropdown-item" href="?p=tai">Ai-2</a></li>
            </ul>
    </li>
    <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="a" role="button" data-bs-toggle="dropdown">สอบปฏิบัติ Final</a>
          <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="?p=f1">ขั้นตอนที่ 1</a></li>
          <li><a class="dropdown-item" href="?p=f2">ขั้นตอนที่ 2</a></li>
          <li><a class="dropdown-item" href="?p=f3">ขั้นตอนที่ 3</a></li>
          <li><a class="dropdown-item" href="?p=index-1html">ขั้นตอนที่ 4</a></li>
          <li><a class="dropdown-item" href="?p=index-2html">ขั้นตอนที่ 5</a></li>
          </ul>
    </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container-fluid mt-3">
  <?php
      if(isset($_GET['p']))
      {
        switch($_GET['p']){
          case 'index-2html':
            include("Final/index-2.html");
            break;
          case 'f5php':
            include("Final/f5.php");
            break;
            case 'index-1html':
              include("Final/index-1.html");
              break;
            case 'f4php':
              include("Final/f4.php");
              break;
          case 'f3':
            include("Final/f3.php");
            break;
          case 'f2':
            include("Final/f2.php");
            break;
          case 'f1':
            include("Final/f1.php");
            break;
          case 'tai':
            include("Ai/tai.php");
            break;
          case 'ai-02':
            include("Ai/ai-02.php");
            break;
          case 'conts3':
            include("test01/abstarct_perfix.php");
            break;
          case 'conts2':
            include("test01/lab_subconts.php");
            break;
        case 'conts':
          include("test01/lab_conts.php");
          break;
        case 'circle':
          include("shape/circle.php");
          break;
        case 'triangle':
          include("shape/triangle.php");
          break;
        case 'shape':
          include("shape/shape.php");
          break;
      case 'rectangle':
            include("shape/rectangle.php");
            break;
		  case 'gradehtml':
            include("grade/grade.html");
            break;
          case 'process_gradephp':
            include("grade/process_grade.php");
            break;
          case 'workshop1':
            include("test01/workshop1.php");
            break;
          case 'workshop2':
            include("test01/workshop2.php");
            break;
            case 'lab_oop_factorial':
              include("test01/lab_oop_factorial.php");
              break;
            case 'labfactorial':
              include("test01/labfactorial.php");
              break;
          case 'sl-01html':
            include("sale/sl-01.html");
            break;
          case 'sl-1':
            include("sale/sl-1.php");
            break;
          case 'lab07_1':
            include("lab07/lab07_1.php");
            break;
          case 'lab06_1':
            include("lab06/lab06_1.php");
            break;
          case 'lab05_4html':
            include("lab05/lab05_4.html");
            break;
          case 'lab05_4':
            include("lab05/lab05_4.php");
            break;
          case 'lab06_2':
            include("lab06/lab06_2.php");
            break;
          case 'lab06_3':
            include("lab06/lab06_3.php");
            break;
          case 'lab02_1':
            include("lab02/lab02_1.php");
            break;
          case 'lab02_2':
            include("lab02/lab02_2.php");
            break;
          case 'lab02_1':
            include("lab01/inputnum.html");
            break;
          case 'lab03_1':
            include("lab03/lab03_1.php");
            break;
          case 'lab03_2':
            include("lab03/lab03_2.php");
            break;
          case 'lab03_3':
            include("lab03/lab03_3.php");
            break;
          case 'lab04_1':
            include("lab04/lab04_1.php");
            break;
          case 'lab04_2':
            include("lab04/lab04_2.php");
            break;
          case 'lab04_3':
            include("lab04/lab04_3.php");
            break;
          case 'lab05_1':
            include("lab05/lab05_1.html");
            break;
          case 'lab05_1php':
            include("lab05/lab05_1.php");
            break;
          case 'lab05_2':
            include("lab05/lab05_2.html");
            break;
          case 'lab05_2php':
            include("lab05/lab05_2.php");
            break;
          case 'lab05_3':
            include("lab05/lab05_3.html");
            break;
          case 'lab05_3php':
            include("lab05/lab05_3.php");
            break;
          case 'inputnum':
            include("lab01/inputnum.html");
            break;
          case 'lab01_calnum':
            include("lab01/lab01_calnum.php");
            break;
          default;
          # code
          break;    
        }
      }else{
        echo "<h1>คำอธิบายรายวิชา</h1>";
        echo "<h2>วิชา BSCCT502 การเขียนโปรแกรมเชิงวัตถุ</h2><br>

BSCCT502	Object Oriented Programming	3 (2-2-5) <br>

วิชาบังคับก่อน :  BSCCT501 การเขียนโปรแกรมเบื้องต้น <br>

ศึกษาและฝึกปฎิบัติเกี่ยวกับแนวคิดการออกแบบและองค์ประกอบของการเขียนโปรแกรมเชิงวัตถุ เช่น คลาส อ็อบเจกต์ แอตทริบิวต์ เมธอด การสืบทอดคุณสมบัติโพลีมอร์ฟิชึม เป็นต้น <br>ฝึกปฎิบัติการเขียนโปรแกรม เพื่อเรียกใช้งานไลบรารีฟังก์ชันและเอพีไอของภาษา การใช้ส่วนติดต่อปรสานโปรแกรมประยุกต์และการทำงานแบบ การเขียนโปรแกรมเชิงเหตุการณ์ <br>

Study and practice about design concept and components of Object-Orientd Programming (oop) , including class, object in OOP to call on function library and APIframework,<br> use of application user interface, and ent-driven programming ";
      }
  ?>
</div>
</body>
</html>


