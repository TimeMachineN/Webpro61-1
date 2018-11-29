<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>การเปลี่ยน /n ให้เป็น br</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<h1>ฟอร์มป้อนข้อมูล</h1>
<form method="post">
    ข้อความ :<textarea cols="100" rows="5" name="datatext"></textarea>
    <br><input type="submit" value="ส่งข้อมูล">
</form>

<?php
if(!empty($_POST['datatext'])){
  echo "<p>",nl2br($_POST['datatext']),"</p>";
  echo "<hr>";
}else{
    echo "<p>กรุณากรอกข้อมูลก่อน</p>";
}
?>
</body>
</html>