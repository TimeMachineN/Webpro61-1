<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>แสดงข้อมูลที่ส่งมาด้วยวิธี GET</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>

<body>
<?php
echo "Text Box:",$_GET['txtbox'],"<br>";
echo "Password:",$_GET['pwd'],"<br>";
echo "TextArea:",$_GET['txtarea'],"<br>";
echo "Selectbox:",$_GET['selectbox'],"<br>";
echo "Radio Button:",$_GET['rbutton'],"<br>";
echo "checkbox:",$_GET['chkbox'],"<br>";
echo "Hidden:",$_GET['hd'],"<hr>";
?>

</body>

</html>