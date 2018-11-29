<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>แสดงข้อมูลที่ส่งมาด้วยวิธี POST</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>

<body>
<?php
echo "Text Box:",$_POST['txtbox'],"<br>";
echo "Password:",$_POST['pwd'],"<br>";
echo "TextArea:",$_POST['txtarea'],"<br>";
echo "Selectbox:",$_POST['selectbox'],"<br>";
echo "Radio Button:",$_POST['rbutton'],"<br>";
echo "checkbox:",$_POST['chkbox'],"<br>";
echo "Hidden:",$_POST['hd'],"<hr>";

echo "<h1>แสดงข้อมูลไฟล์</h1>";
echo "ชื่อไฟล์:",$_FILES['upload']['name'],"<br>";
echo "ประเภทของไฟล์:",$_FILES['upload']['type'],"<br>";
echo "ตำแหน่งของ temp file:",$_FILES['upload']['tmp_name'],"<br>";
echo "รหัส error:",$_FILES['upload']['error'],"<br>";
echo "ขนาดของไฟล์:",$_FILES['upload']['size'],"Byte <hr>";
?>

</body>

</html>