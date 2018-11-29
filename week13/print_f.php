<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>การใช้ printf แสดงข้อมูลตามรูปแบบที่กำหนด</title>
</head>
<body>
<?php
$data = 110.56;
printf("เลขฐานสอง = %b", $data);	  echo "<br/>";
printf("รหัสแอสกี้ = %c", $data); echo "<br/>";
printf("เลขฐานสิบ = %d", $data);	  echo "<br/>";
printf("ทศนิยม = %f", $data);	  echo "<br/>";
printf("ทศนิยมสองตำแหน่ง = %.2f", $data);	  echo "<br/>";
printf("เลขฐานแปด = %o", $data);	  echo "<br/>";
printf("ข้อความ = %s", $data);	  echo "<br/>";
printf("เลขฐานสิบหก เล็ก = %x", $data); echo "<br/>";
printf("เลขฐานสิบหก ใหญ๋ = %X", $data);echo "<hr/>";
?>

</body>
</html>