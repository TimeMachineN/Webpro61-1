<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ฟังชั่นเกี่ยวกับตัวแปร</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<?php

$db=5.9;
$str="twenty";
$int=10;

echo "ตัวแปร int เป็นตัวแปรชนิด:",gettype($int),"<br>";
echo "ตัวแปร db เป็นตัวแปรชนิด:",gettype($db),"<br>";
echo "ตัวแปร str เป็นตัวแปรชนิด:",gettype($str),"<hr>";

settype($int,"double"); //กำหนดให้ตัวแปร int เป็นตัวแปร double 
settype($db,"integer"); //กำหนดให้ตัวแปร db เป็นตัวแปร integer 

echo "ตัวแปร int เป็นตัวแปรชนิด:",gettype($int),"<br>";
echo "ตัวแปร db เป็นตัวแปรชนิด:",gettype($db),"<hr>";

unset($int); //ยกเลิกค่าในตัวแปร $int 
unset($db); //ยกเลิกค่าในตัวแปร $db

if(empty($int)){ //ตรวจสอบว่าตัวแปร int ว่าง?
    echo "ตัวแปร int ว่าง";
}
    else{
        echo "ตัวแปร int ไม่ว่าง";
    }
echo"<hr>";

if(isset($db)){ //ตรวจว่าตัวแปร db มีการกำหนดค่าหรือยัง?
    echo "ตัวแปร db มีการกำหนดค่าแล้ว";
}
    else{
        echo "ตัวแปร db ยังไม่มีการกำหนดค่า";
    }
    echo"<hr>";




?>
    
</body>
</html>