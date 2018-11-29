<?php
function show_text($text,$size,$amount){
    for($i=0;$i<$amount;$i++){
    echo "<p style='font-size:$size","px;'>$text</p>";
}
}
function gen_table($row,$col,$width,$border){
    echo "<p>ตาราง $col คอลัมน์ $row แถว</p>";
    echo "<table border=$border  width=$width >";
    for($r=0;$r<$col;$r++){
        echo "<tr>";
        for($z=0;$z<$row;$z++){
            echo "<td>&nbsp;</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}
function money_exchange2($thb,$curency){
if ($curency="usd"){
    $rate=32;
    $unit="ดอลล่า";
}else if($curency="gbp"){
    $rate=47;
    $unit="ปอนด์";
}else if($curency="eur"){
    $rate=37;
    $unit="ยูโร";
}
$result=$thb/$rate;
$arr=array('result'=>$result,'thb'=>$thb,'unit'=>$unit);
//$arr=array("$result","$thb","$unit"); // 0 1 2
return $arr;
//echo "จำนวนเงิน:$thb บาท แลก $curency ได้ $usd  $a";
}

function cal_price($price,$total,$type){
switch($type){
    case 1:
        $percent=0.05;
        $type_name="อิเล็กทรอนิกส์";
        break;
        case 2:
        $percent=0.10;
        $type_name="เสื้อผ้า";
        break;
        default:
        $percent=0.15;
        $type_name="อาหาร";    
}
$discount=($price*$total)*$percent;
$sum_price=$price*$total;
$pay_price=$sum_price-$discount;

$data=array("$price","$total","$type_name","$pay_price","$discount");
return $data;
}



    //show_text("Web Programming",25,10); //show_text("ข้อความ","ขนาด","จำนวน");
?>