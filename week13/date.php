<html>
<head><title>ฟังชั่น date ในการแสดงวันและเวลา</title></head>
<body>
<?php
	echo date("วันที่ d/m/Y เวลา H:i:s ");
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