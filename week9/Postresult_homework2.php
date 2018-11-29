<?php
echo "คำนำหน้า:",$_POST['customRadioInline1'],"<br>";
echo "ชื่อ:",$_POST['name'],"<br>";
echo "นามสกุล:",$_POST['name2'],"<br>";
echo "ที่อยู่:",$_POST['address'],"<br>";
echo "เบอร์โทร:",$_POST['address'],"<br>";
echo "ระดับการศึกษา:",$_POST['selectbox'],"<br>";
echo "สถานะ:",$_POST['chk'],"<br>";
echo "รหัสลับ:",$_POST['hidden'],"<br>";
echo "<h1>แสดงข้อมูลไฟล์</h1>";
echo "ชื่อไฟล์:",$_FILES['upload']['name'],"<br>";
echo "ประเภทของไฟล์:",$_FILES['upload']['type'],"<br>";
echo "ตำแหน่งของ temp file:",$_FILES['upload']['tmp_name'],"<br>";
echo "รหัส error:",$_FILES['upload']['error'],"<br>";
echo "ขนาดของไฟล์:",$_FILES['upload']['size'],"Byte <hr>";

?>