<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ตัดช่องว่างใน String</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<?php
 $str="          Information System                           ";
 $num_str=strlen($str);
 echo "จำนวนตัวอักษรมีทั้งหมด $num_str  ตัวอักษร<br>";

 $str2=trim($str);
 $num_str=strlen($str2);
 echo "หลังจากใช้ฟังชั่น trim จำนวนตัวอักษรมีทั้งหมด $num_str  ตัวอักษร<br>";

 $str3=ltrim($str);
 $num_str=strlen($str3);
 echo "หลังจากใช้ฟังชั่น ltrim จำนวนตัวอักษรมีทั้งหมด $num_str  ตัวอักษร<br>";

 $str4=chop($str);
 $num_str=strlen($str4);
 echo "หลังจากใช้ฟังชั่น chop จำนวนตัวอักษรมีทั้งหมด $num_str  ตัวอักษร<hr>";
?>
    
</body>
</html>