<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ทดสอบ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<?php
$dayname=date("w");
$daynum=date("j");
$mount=date("n");
$year=date("Y")+543;
$hour=date("H");
$minute=date("i");
$secound=date("s");

$day_thai=array("อาทิตย์","จันทร์","อังคาร","พุธ","พฤหัสบดี","ศุกร์","เสาร์");
$thai_mount=array("","มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
echo "วันที่ $day_thai[$dayname] ที่ $daynum เดือน $thai_mount[$mount] พ.ศ. $year $hour นาฬิกา $minute นาที $secound วินาที ";
?>


    
</body>
</html>