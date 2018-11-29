<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>การใช้ substr ตัดข้อความ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<?php
$news_thai="แจ้ง นักศึกษาท่านใดลืมกุญแจรถไว้ที่หน้าห้อง สำนักงานหลักสูตรฯ (บธ.3-305)
นักศึกษาสามารถมารับคืนได้ที่ตู้ส่งงานหน้าห้องพักอาจารย์ (บธ.3-307) ตู้สีเขียวช่องล่างสุด
จึงแจ้งให้ทราบโดยทั่วกัน";

$news_eng="People in Palu, Indonesia, are growing increasingly desperate 
for aid after a quake and tsunami hit the town.";

$substr_eng=substr($news_eng,0,70);
echo $substr_eng."........Read more<hr>";

$substr_thai=iconv_substr($news_thai,0,70,"utf-8");
echo $substr_thai."........อ่านต่อ<hr>";
?>
</body>
</html>