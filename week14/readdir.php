<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>อ่านข้อมูลในโฟลเดอร์</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<?php
$path="../week13";

$dir=opendir($path); //เปิดโฟลเดอร์
echo "<h1>รายชื่อไฟล์ในโฟลเดอร์ $path</h1>";
while($data=readdir($dir)){
    echo $data,"<br>";
}; //อ่านข้อมูลในโฟลเดอร์

echo "<hr>";

closedir($dir);


?>
</body>
</html>