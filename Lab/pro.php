<?php
$name=$_POST['name'];
$s1=$_POST['s1'];
$s2=$_POST['s2'];
$s3=$_POST['s3'];


$arr=array($s1,$s2,$s3);
$arr_s=count($arr);

$total=0;
for($i=0;$i<$arr_s;$i++){
    $total+=$arr[$i];
}
$avg=($total/$arr_s);

$max5=max($s1,$s2,$s3);


if(empty($s1) or empty($s2) or empty($s3)){
    echo "<p>กรุณาใส่ข้อมูลให้ครบ</p>";

}else{
    for ($x=0; $x <$arr_s ; $x++) { 
        if ($arr[$x]>=80) {
            $g="A";
        }else if($arr[$x]>=70){
            $g="B";
        }else if($arr[$x]>=60){
            $g="C";
        }else if($arr[$x]>=50){
            $g="D";
        }else {
            $g="F";
        }
        
    }
    
    $fp=fopen("data.txt","a");
    fwrite($fp,"$name\n\r");
    fwrite($fp,"$arr[0]\n\r");
    fwrite($fp,"$arr[1]\n\r");
    fwrite($fp,"$arr[2]\n\r");
    fwrite($fp,"$max5\n\r");
    fwrite($fp,"$avg\n\r");

    fclose($fp);
    "<script>window.location('show.php')</script>";



/*echo "ชื่อ".$name.'<br>';
for ($y=0; $y <$arr_s ; $y++) { 
 echo "คะแนนวิชาที่".$y.':'.$g.'<br>';
}
echo  "วิชาที่คะแนนสูงสุด".max($s1,$s2,$s3).'<br>';
echo  "คะแนนเฉลี่ย".$avg.'<br>';
echo "<hr>"; */

}

?>