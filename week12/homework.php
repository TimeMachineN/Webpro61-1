<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Homework</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<?php
require("function.php");
$data=cal_price(100,2,1);
//print_r($data);
echo "ราคาสินค้า:".$data[0];
echo "<br>";
echo "จำนวนสินค้า:".$data[1];
echo "<br>";
echo "ประเภทสินค้า:".$data[2];
echo "<br>";
echo "ราคาที่ต้องจ่าย:".$data[3];
echo "<br>";
echo "ส่วนลด:".$data[4];
echo "<hr>";

?>
    
</body>
</html>