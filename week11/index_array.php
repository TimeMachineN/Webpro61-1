<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Array</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<?php
$day=array("อาทิตย์","จันทร์","อังคาร","พุธ","พฤหัสบดี","ศุกร์");

$day[]="เสาร์";

echo $day[0],"<br>";
echo $day[1],"<br>";
echo $day[2],"<br>";

for ($i=0; $i<7; $i++) {
    echo $day[$i],"<br>"; 
}
echo "<hr>";
print_r($day);//แสดงโครงสร้างข้อมูลที่เก็บใน array 

$num=count($day);//นับจำนวน element ของ array
echo "<hr>";

for($i=0;$i<$num;$i++){
    echo $day[$i],"/";
}


?>
</body>
</html>