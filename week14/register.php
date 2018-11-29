<?php
$fp=fopen("member.txt","a");
fwrite($fp,"$_POST[username]\n\r");
fwrite($fp,"$_POST[pwd]\n\r");
fwrite($fp,"$_POST[name]\n\r");
fwrite($fp,"$_POST[surename]\n\r");
fwrite($fp,"$_POST[address]\n\r");
fwrite($fp,"$_POST[gender]");

fclose($fp);

echo "<script>alert('บันทึกข้อมูลเรียบร้อบแล้ว')</script>";
echo "<script>window.location('show_member.php')</script>";



?>